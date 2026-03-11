#!/usr/bin/env php
<?php

/**
 * Generate Sitemap XML with Full Schema
 * Includes: xmlns, xsi:schemaLocation, priority, ISO 8601 timestamps
 */

echo "🗺️  Generating sitemap.xml with full schema...\n\n";

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
    
    // Fallback to default URLs with priorities
    $urls = [
        'https://karachicleaners.com/' => ['priority' => '1.00'],
        'https://karachicleaners.com/about' => ['priority' => '0.80'],
        'https://karachicleaners.com/services' => ['priority' => '0.80'],
        'https://karachicleaners.com/contact' => ['priority' => '0.80'],
        'https://karachicleaners.com/gallery' => ['priority' => '0.80'],
        'https://karachicleaners.com/blog' => ['priority' => '0.80'],
        'https://karachicleaners.com/services/sofa-cleaning' => ['priority' => '0.80'],
        'https://karachicleaners.com/services/carpet-cleaning' => ['priority' => '0.80'],
        'https://karachicleaners.com/services/curtain-cleaning' => ['priority' => '0.80'],
        'https://karachicleaners.com/services/glass-cleaning' => ['priority' => '0.80'],
        'https://karachicleaners.com/services/floor-tile-cleaning' => ['priority' => '0.80'],
        'https://karachicleaners.com/services/solar-panel-cleaning' => ['priority' => '0.64'],
        'https://karachicleaners.com/services/full-house-cleaning' => ['priority' => '0.64'],
        'https://karachicleaners.com/services/car-interior-cleaning' => ['priority' => '0.64'],
    ];
}

// If we got URLs from scan, assign priorities
$urlsWithPriority = [];
if (is_array($urls) && !empty($urls)) {
    foreach ($urls as $url) {
        if (is_string($url)) {
            // Assign priority based on URL type
            if ($url === 'https://karachicleaners.com/' || $url === 'https://karachicleaners.com') {
                $priority = '1.00';
            } elseif (strpos($url, '/services/') !== false) {
                // Check which service
                if (preg_match('/(solar-panel|full-house|car-interior)/', $url)) {
                    $priority = '0.64';
                } else {
                    $priority = '0.80';
                }
            } else {
                // Other pages
                $priority = '0.80';
            }
            $urlsWithPriority[$url] = ['priority' => $priority];
        }
    }
} else {
    $urlsWithPriority = $urls;
}

// Sort URLs
uksort($urlsWithPriority, function($a, $b) {
    // Homepage first
    if (strpos($a, 'karachicleaners.com/') === strlen('https://')) return -1;
    if (strpos($b, 'karachicleaners.com/') === strlen('https://')) return 1;
    return strcmp($a, $b);
});

echo "📊 Total URLs: " . count($urlsWithPriority) . "\n\n";

// ISO 8601 timestamp
$timestamp = date('c');

// Build XML with full schema
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . PHP_EOL;
$xml .= '         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . PHP_EOL;
$xml .= '         xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . PHP_EOL;
$xml .= '                             http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
$xml .= '<!--  Auto-generated sitemap for karachicleaners.com  -->' . PHP_EOL;

foreach ($urlsWithPriority as $url => $data) {
    $priority = isset($data['priority']) ? $data['priority'] : '0.80';
    
    $xml .= '<url>' . PHP_EOL;
    $xml .= '  <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
    $xml .= '  <lastmod>' . $timestamp . '</lastmod>' . PHP_EOL;
    $xml .= '  <priority>' . $priority . '</priority>' . PHP_EOL;
    $xml .= '</url>' . PHP_EOL;
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
    echo "✅ Structure: FULL SCHEMA (xmlns, xsi, priority, ISO 8601 timestamps)\n";
    echo "\n🎉 Sitemap generation complete!\n";
} else {
    echo "❌ Failed to write sitemap.xml\n";
    exit(1);
}

exit(0);