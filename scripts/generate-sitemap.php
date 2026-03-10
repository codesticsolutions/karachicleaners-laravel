#!/usr/bin/env php
<?php

/**
 * Generate Sitemap XML
 * Strict structure: only loc and lastmod (no priority, changefreq, etc)
 */

// Get base URL
$baseUrl = 'https://karachicleaners.com';

// Start XML with proper declaration
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// Today's date
$today = date('Y-m-d');

// Static pages
$staticPages = [
    '/',
    '/about',
    '/services',
    '/gallery',
    '/contact',
    '/blog',
];

// Service pages
$services = [
    'sofa-cleaning',
    'carpet-cleaning',
    'curtain-cleaning',
    'glass-cleaning',
    'floor-tile-cleaning',
    'solar-panel-cleaning',
    'full-house-cleaning',
    'car-interior-cleaning',
];

echo "🗺️  Generating sitemap.xml...\n\n";

// Add static pages
echo "📄 Adding Static Pages:\n";
foreach ($staticPages as $path) {
    $url = $baseUrl . $path;
    
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
    $xml .= '    <lastmod>' . $today . '</lastmod>' . PHP_EOL;
    $xml .= '  </url>' . PHP_EOL;
    
    $displayPath = ($path === '/') ? 'Home /' : ltrim($path, '/');
    echo "   ✅ $displayPath\n";
}

echo "\n🔧 Adding Service Pages:\n";

// Add service pages
foreach ($services as $service) {
    $url = $baseUrl . '/services/' . $service;
    
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
    $xml .= '    <lastmod>' . $today . '</lastmod>' . PHP_EOL;
    $xml .= '  </url>' . PHP_EOL;
    
    $serviceName = ucwords(str_replace('-', ' ', $service));
    echo "   ✅ /services/$service\n";
}

// Close XML
$xml .= '</urlset>' . PHP_EOL;

// Write to file
$publicDir = __DIR__ . '/../public';
if (!is_dir($publicDir)) {
    mkdir($publicDir, 0755, true);
}

$sitemapPath = $publicDir . '/sitemap.xml';

if (file_put_contents($sitemapPath, $xml) !== false) {
    echo "\n✅ Sitemap generated successfully!\n";
    echo "📊 Total URLs: " . (count($staticPages) + count($services)) . "\n";
    echo "📁 File: public/sitemap.xml\n";
    echo "📏 Size: " . number_format(filesize($sitemapPath)) . " bytes\n";
    echo "🌐 URL: https://karachicleaners.com/sitemap.xml\n\n";
    
    // Verify XML is valid
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