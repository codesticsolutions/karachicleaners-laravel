#!/usr/bin/env php
<?php

/**
 * Smart Route & Config Scanner
 * Extracts static routes from web.php
 * Extracts dynamic services from config/cleaning-services.php
 * Generates complete sitemap automatically
 */

echo "🔍 Scanning Laravel routes and config...\n\n";

$baseUrl = 'https://karachicleaners.com';
$publicDir = __DIR__ . '/../public';
$routesFile = __DIR__ . '/../routes/web.php';
$configFile = __DIR__ . '/../config/cleaning-services.php';

// Create directory if needed
if (!is_dir($publicDir)) {
    mkdir($publicDir, 0755, true);
}

// Check if routes file exists
if (!file_exists($routesFile)) {
    echo "❌ routes/web.php not found!\n";
    exit(1);
}

echo "📖 Reading routes/web.php...\n";

// Read routes file
$routesContent = file_get_contents($routesFile);

// Extract static routes (non-dynamic)
$staticRoutes = [];

// Pattern: Route::get('/path', ...) where path doesn't contain {
if (preg_match_all("/Route::(get|post|put|patch|delete)\('([^{}']+)'/i", $routesContent, $matches)) {
    foreach ($matches[2] as $route) {
        // Skip admin routes
        if (preg_match('#^/(admin|api|login|logout)#i', $route)) {
            continue;
        }
        
        // Skip service detail route pattern
        if (strpos($route, '/services/{') !== false || strpos($route, '/services/:') !== false) {
            continue;
        }
        
        $staticRoutes[] = trim($route, '/');
    }
}

// Remove duplicates
$staticRoutes = array_unique($staticRoutes);
sort($staticRoutes);

echo "✅ Found " . count($staticRoutes) . " static routes\n";

// Load dynamic services from config
$dynamicServices = [];

if (file_exists($configFile)) {
    echo "📁 Reading config/cleaning-services.php...\n";
    
    // Include the config file
    $cleaningServices = include $configFile;
    
    if (is_array($cleaningServices) && !empty($cleaningServices)) {
        $dynamicServices = array_keys($cleaningServices);
        echo "✅ Found " . count($dynamicServices) . " services\n";
    } else {
        echo "⚠️  No services found in config\n";
    }
} else {
    echo "⚠️  config/cleaning-services.php not found\n";
}

// Build complete URL list with priorities
$urlsWithPriority = [];

// Add static routes
foreach ($staticRoutes as $route) {
    if (empty($route)) {
        $url = $baseUrl . '/';
        $priority = '1.00'; // Homepage
    } else {
        $url = $baseUrl . '/' . $route;
        
        // Assign priority based on route
        if (strpos($route, 'services') === 0) {
            $priority = '0.80';
        } else {
            $priority = '0.80';
        }
    }
    
    $urlsWithPriority[$url] = $priority;
}

// Add dynamic service routes
foreach ($dynamicServices as $slug) {
    $url = $baseUrl . '/services/' . $slug;
    
    // Assign priority based on service type
    if (preg_match('/(solar-panel|full-house|car-interior)/', $slug)) {
        $priority = '0.64'; // Secondary services
    } else {
        $priority = '0.80'; // Main services
    }
    
    $urlsWithPriority[$url] = $priority;
}

// Sort with homepage first
uksort($urlsWithPriority, function($a, $b) {
    if ($a === 'https://karachicleaners.com/') return -1;
    if ($b === 'https://karachicleaners.com/') return 1;
    return strcmp($a, $b);
});

echo "\n📋 URLs to include:\n";
foreach ($urlsWithPriority as $url => $priority) {
    echo "  ✓ $url (priority: $priority)\n";
}
echo "\n";

// ISO 8601 timestamp
$timestamp = date('c');

// Build XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
$xml .= '<!-- Auto-generated from Laravel routes and config -->' . PHP_EOL;

foreach ($urlsWithPriority as $url => $priority) {
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
    echo "✅ Auto-discovery: ROUTES + CONFIG\n";
    echo "✅ Dynamic services: INCLUDED\n";
    echo "✅ Includes: Priorities and timestamps\n";
    echo "\n🎉 Sitemap generation complete!\n";
} else {
    echo "❌ Failed to write sitemap.xml\n";
    exit(1);
}

exit(0);