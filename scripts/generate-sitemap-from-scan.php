#!/usr/bin/env php
<?php

/**
 * Generate Sitemap XML with Homepage
 * Includes: homepage, proper priorities, ISO 8601 timestamps
 */

echo "🗺️  Generating sitemap.xml with homepage...\n\n";

$logsDir = __DIR__ . '/../storage/scan-logs';
$publicDir = __DIR__ . '/../public';

// Create directories if needed
if (!is_dir($publicDir)) {
    mkdir($publicDir, 0755, true);
}

// Find the latest scanned URLs file
$urlsFile = null;
$latestTime = 0;

if (is_dir($logsDir)) {
    $files = glob($logsDir . '/urls-*.json');
    foreach ($files as $file) {
        $time = filemtime($file);
        if ($time > $latestTime) {
            $latestTime = $time;
            $urlsFile = $file;
        }
    }
}

// Load scanned URLs
$urls = [];

if ($urlsFile && file_exists($urlsFile)) {
    echo "📄 Using scanned URLs from: " . basename($urlsFile) . "\n";
    $scannedUrls = json_decode(file_get_contents($urlsFile), true);
    if (is_array($scannedUrls)) {
        $urls = $scannedUrls;
    }
}

// If no scanned URLs, use default list
if (empty($urls)) {
    echo "⚠️  No scanned URLs found, using defaults\n";
    $urls = [
        'https://karachicleaners.com/',
        'https://karachicleaners.com/about',
        'https://karachicleaners.com/services',
        'https://karachicleaners.com/contact',
        'https://karachicleaners.com/services/sofa-cleaning',
        'https://karachicleaners.com/services/carpet-cleaning',
        'https://karachicleaners.com/services/curtain-cleaning',
        'https://karachicleaners.com/services/glass-cleaning',
        'https://karachicleaners.com/services/floor-tile-cleaning',
        'https://karachicleaners.com/services/solar-panel-cleaning',
        'https://karachicleaners.com/services/full-house-cleaning',
        'https://karachicleaners.com/services/car-interior-cleaning',
    ];
}

// Ensure homepage is included
if (!in_array('https://karachicleaners.com/', $urls) && !in_array('https://karachicleaners.com', $urls)) {
    array_unshift($urls, 'https://karachicleaners.com/');
}

// Assign priorities based on URL type
$urlsWithPriority = [];
foreach ($urls as $url) {
    if (!is_string($url) || empty($url)) {
        continue;
    }
    
    // Determine priority
    if ($url === 'https://karachicleaners.com/' || $url === 'https://karachicleaners.com') {
        $priority = '1.00'; // Homepage - highest
    } elseif (strpos($url, '/services/') !== false) {
        // Service pages
        if (preg_match('/(solar-panel|full-house|car-interior)/', $url)) {
            $priority = '0.64'; // Secondary services
        } else {
            $priority = '0.80'; // Main services
        }
    } else {
        // Other pages
        $priority = '0.80';
    }
    
    $urlsWithPriority[$url] = $priority;
}

// Sort URLs (homepage first)
uksort($urlsWithPriority, function($a, $b) {
    // Homepage first
    if ($a === 'https://karachicleaners.com/' || $a === 'https://karachicleaners.com') {
        return -1;
    }
    if ($b === 'https://karachicleaners.com/' || $b === 'https://karachicleaners.com') {
        return 1;
    }
    // Then sort alphabetically
    return strcmp($a, $b);
});

echo "📊 Total URLs: " . count($urlsWithPriority) . "\n\n";

// ISO 8601 timestamp
$timestamp = date('c');

// Build XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

foreach ($urlsWithPriority as $url => $priority) {
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
    $xml .= '    <lastmod>' . $timestamp . '</lastmod>' . PHP_EOL;
    $xml .= '    <priority>' . $priority . '</priority>' . PHP_EOL;
    $xml .= '  </url>' . PHP_EOL;
}

$xml .= '</urlset>' . PHP_EOL;

// Write to file
$sitemapPath = $publicDir . '/sitemap.xml';

if (file_put_contents($sitemapPath, $xml) !== false) {
    echo "✅ Sitemap generated successfully!\n";
    echo "📁 File: public/sitemap.xml\n";
    echo "📏 Size: " . number_format(filesize($sitemapPath)) . " bytes\n";
    echo "🌐 URL: https://karachicleaners.com/sitemap.xml\n\n";
    
    // Validate XML
    $sxe = simplexml_load_file($sitemapPath);
    if ($sxe === false) {
        echo "❌ XML validation failed!\n";
        exit(1);
    }
    
    $urlCount = count($sxe->url);
    echo "✅ XML validation: PASSED ($urlCount URLs)\n";
    echo "✅ Includes homepage: YES\n";
    echo "✅ Includes priorities: YES\n";
    echo "✅ Includes ISO timestamps: YES\n";
    echo "\n🎉 Sitemap generation complete!\n";
} else {
    echo "❌ Failed to write sitemap.xml\n";
    exit(1);
}

exit(0);