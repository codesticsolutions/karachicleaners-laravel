#!/usr/bin/env php
<?php
echo "🔍 Scanning Laravel routes for sitemap URLs...\n\n";

$baseUrl = 'https://karachicleaners.com';
$publicDir = __DIR__ . '/../public';
$routesFile = __DIR__ . '/../routes/web.php';

if (!is_dir($publicDir)) {
    mkdir($publicDir, 0755, true);
}

if (!file_exists($routesFile)) {
    echo "❌ routes/web.php not found!\n";
    exit(1);
}

echo "📖 Reading routes/web.php...\n";

$routesContent = file_get_contents($routesFile);

$routes = [];

if (preg_match_all("/Route::(get|post|put|patch|delete)\('([^']+)'/i", $routesContent, $matches)) {
    foreach ($matches[2] as $route) {
        if (preg_match('#^/(admin|api|login|logout)#i', $route)) {
            continue;
        }
        
        $route = preg_replace('/\{[^}]+\}/', '', $route);
        
        $routes[] = $route;
    }
}

if (preg_match_all("/->group\(function \(\) \{([^}]+)\}\);/s", $routesContent, $groupMatches)) {
    foreach ($groupMatches[1] as $groupContent) {
        if (preg_match_all("/Route::(get|post|put|patch|delete)\('([^']+)'/i", $groupContent, $matches)) {
            foreach ($matches[2] as $route) {
                $routes[] = $route;
            }
        }
    }
}

$routes = array_unique($routes);
sort($routes);

if (empty($routes)) {
    echo "⚠️  No routes found in web.php\n";
    exit(1);
}

echo "✅ Found " . count($routes) . " routes\n\n";

$urlsWithPriority = [];

foreach ($routes as $route) {
    $route = trim($route, '/');
    
    if (empty($route)) {
        $url = $baseUrl . '/';
        $priority = '1.00';
    } else {
        $url = $baseUrl . '/' . $route;
        
        if (strpos($route, 'services/') === 0) {
            if (preg_match('/(solar-panel|full-house|car-interior)/', $route)) {
                $priority = '0.64';
            } else {
                $priority = '0.80';
            }
        } else {
            $priority = '0.80';
        }
    }
    
    $urlsWithPriority[$url] = $priority;
}

uksort($urlsWithPriority, function($a, $b) {
    if ($a === 'https://karachicleaners.com/') return -1;
    if ($b === 'https://karachicleaners.com/') return 1;
    return strcmp($a, $b);
});

echo "📋 Routes found:\n";
foreach ($urlsWithPriority as $url => $priority) {
    echo "  ✓ $url (priority: $priority)\n";
}
echo "\n";

$timestamp = date('c');

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
$xml .= '<!-- Auto-generated from Laravel routes -->' . PHP_EOL;

foreach ($urlsWithPriority as $url => $priority) {
    $xml .= '<url>' . PHP_EOL;
    $xml .= '  <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
    $xml .= '  <lastmod>' . $timestamp . '</lastmod>' . PHP_EOL;
    $xml .= '  <priority>' . $priority . '</priority>' . PHP_EOL;
    $xml .= '</url>' . PHP_EOL;
}

$xml .= '</urlset>' . PHP_EOL;

$sitemapPath = $publicDir . '/sitemap.xml';

if (file_put_contents($sitemapPath, $xml) !== false) {
    echo "✅ Sitemap generated successfully!\n";
    echo "📁 File: public/sitemap.xml\n";
    echo "📏 Size: " . number_format(filesize($sitemapPath)) . " bytes\n";
    echo "🌐 URL: https://karachicleaners.com/sitemap.xml\n\n";
    
    $sxe = simplexml_load_file($sitemapPath);
    if ($sxe === false) {
        echo "❌ XML validation failed!\n";
        exit(1);
    }
    
    $urlCount = count($sxe->url);
    echo "✅ XML validation: PASSED ($urlCount URLs)\n";
    echo "✅ Auto-discovery: FROM ROUTES\n";
    echo "✅ Includes: Priorities and timestamps\n";
    echo "\n🎉 Sitemap generation complete!\n";
} else {
    echo "❌ Failed to write sitemap.xml\n";
    exit(1);
}

exit(0);
