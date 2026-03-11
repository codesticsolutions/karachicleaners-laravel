#!/usr/bin/env php
<?php

/**
 * Generate Sitemap from Scanned URLs
 * Creates sitemap.xml from the latest scan results
 */

echo "🗺️  Generating sitemap.xml from scanned URLs...\n\n";

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
    $urls = json_decode(file_get_contents($urlsFile), true);
} else {
    echo "⚠️  No scanned URLs found, using defaults\n";
    
    // Fallback to default URLs
    $urls = [
        'https://karachicleaners.com/',
        'https://karachicleaners.com/about',
        'https://karachicleaners.com/services',
        'https://karachicleaners.com/gallery',
        'https://karachicleaners.com/contact',
        'https://karachicleaners.com/blog',
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

// Sort and clean URLs
$urls = array_unique($urls);
sort($urls);

// Remove any non-string entries
$urls = array_filter($urls, function($url) {
    return is_string($url) && !empty($url);
});

echo "📊 Total URLs: " . count($urls) . "\n\n";

// Build XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

$today = date('Y-m-d');

foreach ($urls as $url) {
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
    $xml .= '    <lastmod>' . $today . '</lastmod>' . PHP_EOL;
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
    echo "✅ Structure: STRICT (only loc and lastmod)\n";
    echo "\n🎉 Sitemap generation complete!\n";
} else {
    echo "❌ Failed to write sitemap.xml\n";
    exit(1);
}

exit(0);