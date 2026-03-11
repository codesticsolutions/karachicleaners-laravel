#!/usr/bin/env php
<?php

/**
 * Site Scanner
 * Scans karachicleaners.com and extracts all URLs
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

// Headers for requests
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
];

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
            // Skip external links
            if (strpos($link, 'http') === 0 && strpos($link, $baseUrl) === false) {
                continue;
            }
            
            // Skip email, javascript, etc
            if (strpos($link, 'mailto:') === 0 || strpos($link, 'javascript:') === 0 || strpos($link, '#') === 0) {
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
            
            // Remove query strings
            $link = strtok($link, '?');
            
            // Only keep URLs from this domain
            if (strpos($link, $baseUrl) === 0) {
                $urls[] = $link;
            }
        }
    }
    
    return array_unique($urls);
}

/**
 * Normalize URL for comparison
 */
function normalizeUrl($url) {
    $url = rtrim($url, '/');
    if ($url === 'https://karachicleaners.com' || $url === 'https://www.karachicleaners.com') {
        return 'https://karachicleaners.com/';
    }
    return $url;
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
            
            if (!isset($visited[$normalized]) && count($scannedUrls) < $maxUrls) {
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
echo "📊 URLs Found: " . count($finalUrls) . "\n";
echo "🌍 URLs Scanned: " . count($visited) . "\n\n";

echo "URLs List:\n";
foreach ($finalUrls as $index => $url) {
    echo ($index + 1) . ". $url\n";
}

// Save scan results
$scanDataPath = __DIR__ . '/../storage/scan-logs/urls-' . date('YmdHis') . '.json';
file_put_contents($scanDataPath, json_encode($finalUrls, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

$logContent .= "\n========================================\n";
$logContent .= "Found URLs (" . count($finalUrls) . ")\n";
$logContent .= "========================================\n";
foreach ($finalUrls as $url) {
    $logContent .= "$url\n";
}

file_put_contents($logFile, $logContent);

echo "\n✅ Scan log saved\n";
echo "📁 Log: " . str_replace(realpath(__DIR__ . '/..'), '.', $logFile) . "\n";
echo "📁 URLs: " . str_replace(realpath(__DIR__ . '/..'), '.', $scanDataPath) . "\n";

exit(0);