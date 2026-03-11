#!/usr/bin/env php
<?php

/**
 * Site Scanner - IMPROVED
 * Scans karachicleaners.com and extracts only content URLs
 * Filters out: assets, static files, duplicates, phone links, etc
 */

echo "🔍 Scanning karachicleaners.com for URLs...\n\n";

$baseUrl = 'https://karachicleaners.com';
$scannedUrls = [];
$visited = [];
$queue = ['/'];

// Configuration
$maxDepth = 3;
$timeout = 10;
$maxUrls = 100;

echo "Starting scan from: $baseUrl\n";
echo "Max depth: $maxDepth\n";
echo "Request timeout: {$timeout}s\n\n";

$logDir = __DIR__ . '/../storage/scan-logs';
if (!is_dir($logDir)) {
    mkdir($logDir, 0755, true);
}

$logFile = $logDir . '/scan-' . date('YmdHis') . '.txt';
$logContent = "Site Scan Log\n";
$logContent .= "Date: " . date('Y-m-d H:i:s') . "\n";
$logContent .= "Base URL: $baseUrl\n";
$logContent .= "========================================\n\n";

/**
 * Check if URL should be included in sitemap
 */
function shouldIncludeUrl($url, $baseUrl) {
    // Skip external URLs
    if (strpos($url, $baseUrl) !== 0) {
        return false;
    }
    
    // Skip phone/tel links
    if (preg_match('/\/tel:/i', $url)) {
        return false;
    }
    
    // Skip email/mailto links
    if (preg_match('/mailto:/i', $url)) {
        return false;
    }
    
    // Skip asset files
    if (preg_match('/\.(css|js|png|jpg|jpeg|gif|webp|svg|ttf|woff|woff2|eot|ico|webmanifest|json|xml)$/i', $url)) {
        return false;
    }
    
    // Skip .html files (keep clean URLs)
    if (preg_match('/\.html$/i', $url)) {
        return false;
    }
    
    // Skip admin/private paths
    if (preg_match('#/(admin|private|api|vendor|node_modules|storage|config|logs)/#i', $url)) {
        return false;
    }
    
    // Skip query parameters
    if (strpos($url, '?') !== false) {
        return false;
    }
    
    // Skip anchors/fragments
    if (strpos($url, '#') !== false) {
        return false;
    }
    
    return true;
}

/**
 * Normalize URL for deduplication
 */
function normalizeUrl($url) {
    $url = rtrim($url, '/');
    
    // Convert root to /
    if ($url === 'https://karachicleaners.com' || $url === 'https://www.karachicleaners.com') {
        return 'https://karachicleaners.com/';
    }
    
    // Remove .html extension for comparison
    $url = preg_replace('/\.html$/', '', $url);
    $url = preg_replace('/\/index$/', '', $url);
    
    return $url;
}

/**
 * Fetch and extract URLs from a page
 */
function extractUrls($url, $baseUrl) {
    global $timeout;
    
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
    ]);
    
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    
    if ($httpCode !== 200) {
        return [];
    }
    
    if (!$response) {
        return [];
    }
    
    $urls = [];
    
    // Extract href links
    if (preg_match_all('/href=["\']([^"\']+)["\']/', $response, $matches)) {
        foreach ($matches[1] as $link) {
            // Skip external links (except this domain)
            if (strpos($link, 'http') === 0 && strpos($link, $baseUrl) === false) {
                continue;
            }
            
            // Skip email, javascript, anchors
            if (preg_match('/^(mailto:|javascript:|#|tel:)/', $link)) {
                continue;
            }
            
            // Convert relative URLs to absolute
            if (strpos($link, '/') === 0) {
                $link = rtrim($baseUrl, '/') . $link;
            } elseif (strpos($link, 'http') !== 0) {
                $link = rtrim($baseUrl, '/') . '/' . ltrim($link, '/');
            }
            
            // Remove fragments
            $link = strtok($link, '#');
            
            // Only keep URLs from this domain
            if (strpos($link, $baseUrl) === 0) {
                $urls[] = $link;
            }
        }
    }
    
    return array_unique($urls);
}

// BFS scanning
$depth = 0;
$currentLevelUrls = ['/'];

while (count($queue) > 0 && count($scannedUrls) < $maxUrls && $depth < $maxDepth) {
    $path = array_shift($queue);
    $url = rtrim($baseUrl, '/') . (strpos($path, '/') === 0 ? $path : '/' . $path);
    $normalizedUrl = normalizeUrl($url);
    
    if (isset($visited[$normalizedUrl])) {
        continue;
    }
    
    $visited[$normalizedUrl] = true;
    
    echo "Scanning ($depth): $normalizedUrl\n";
    $logContent .= "Scanning: $normalizedUrl ... ";
    
    $foundUrls = extractUrls($url, $baseUrl);
    
    if (!empty($foundUrls)) {
        $logContent .= count($foundUrls) . " links found\n";
        
        foreach ($foundUrls as $foundUrl) {
            $normalized = normalizeUrl($foundUrl);
            
            // Check if should be included AND not already visited
            if (shouldIncludeUrl($foundUrl, $baseUrl) && !isset($visited[$normalized]) && count($scannedUrls) < $maxUrls) {
                $scannedUrls[$normalized] = true;
                
                // Add to queue for next level
                if (count($queue) < 20) {
                    $queue[] = str_replace($baseUrl, '', $normalized);
                }
            }
        }
    } else {
        $logContent .= "no links\n";
    }
    
    $depth++;
}

// Final list of scanned URLs
$finalUrls = array_keys($scannedUrls);
sort($finalUrls);

echo "\n========================================\n";
echo "✅ Scan Complete\n";
echo "========================================\n";
echo "📊 Content URLs Found: " . count($finalUrls) . "\n";
echo "🌍 Pages Scanned: " . count($visited) . "\n";
echo "🚫 URLs Filtered Out: " . (count($visited) - count($finalUrls)) . "\n\n";

echo "Content URLs:\n";
foreach ($finalUrls as $index => $url) {
    echo ($index + 1) . ". $url\n";
}

// Save scan results
$scanDataPath = __DIR__ . '/../storage/scan-logs/urls-' . date('YmdHis') . '.json';
file_put_contents($scanDataPath, json_encode($finalUrls, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

$logContent .= "\n========================================\n";
$logContent .= "Found Content URLs (" . count($finalUrls) . ")\n";
$logContent .= "========================================\n";
foreach ($finalUrls as $url) {
    $logContent .= "$url\n";
}

file_put_contents($logFile, $logContent);

echo "\n✅ Scan log saved\n";
echo "📁 Log: " . str_replace(realpath(__DIR__ . '/..'), '.', $logFile) . "\n";
echo "📁 URLs: " . str_replace(realpath(__DIR__ . '/..'), '.', $scanDataPath) . "\n";

exit(0);