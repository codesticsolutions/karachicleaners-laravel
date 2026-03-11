#!/usr/bin/env php
<?php

/**
 * Generate robots.txt
 * Minimal structure: User-agent, Allow, Sitemap only
 */

$robotsContent = "User-agent: *
Allow: /

Sitemap: https://karachicleaners.com/sitemap.xml
";

// Get the public directory path
$publicDir = __DIR__ . '/../public';

// Create public directory if it doesn't exist
if (!is_dir($publicDir)) {
    mkdir($publicDir, 0755, true);
}

$robotsPath = $publicDir . '/robots.txt';

echo "🤖 Generating robots.txt...\n\n";

// Write robots.txt
if (file_put_contents($robotsPath, $robotsContent) !== false) {
    echo "✅ robots.txt generated successfully!\n";
    echo "📁 File: public/robots.txt\n";
    echo "📏 Size: " . number_format(filesize($robotsPath)) . " bytes\n";
    echo "🌐 URL: https://karachicleaners.com/robots.txt\n\n";
    
    // Display content
    echo "Content:\n";
    echo "========\n";
    echo $robotsContent;
    echo "========\n\n";
    
    echo "✅ Structure: MINIMAL\n";
    echo "✅ Allows all bots\n";
    echo "✅ References sitemap\n";
    echo "\n🎉 robots.txt generation complete!\n";
} else {
    echo "❌ Failed to generate robots.txt\n";
    exit(1);
}

exit(0);