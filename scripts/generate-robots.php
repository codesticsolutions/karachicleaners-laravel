#!/usr/bin/env php
<?php

/**
 * Generate robots.txt for SEO
 * Creates a proper robots.txt file without blocking search engines
 */

$robotsContent = "# Robots.txt for https://karachicleaners.com
# Generated automatically - do not edit manually
# Generated at: " . date('Y-m-d H:i:s') . "

# Allow all search engines to crawl public pages
User-agent: *
Allow: /

# Disallow private and admin areas
Disallow: /admin/
Disallow: /api/
Disallow: /.env
Disallow: /config/
Disallow: /storage/
Disallow: /vendor/
Disallow: /node_modules/
Disallow: /tests/

# Disallow staging and backup versions
Disallow: /staging/
Disallow: /backup/
Disallow: /old/
Disallow: /temp/
Disallow: /test/

# Crawl delay (in seconds) for Google bot
User-agent: Googlebot
Crawl-delay: 0

# Crawl delay for other bots (be nice to servers)
User-agent: Bingbot
Crawl-delay: 1

User-agent: Slurp
Crawl-delay: 1

# Block known bad/spam bots
User-agent: AhrefsBot
Disallow: /

User-agent: SemrushBot
Disallow: /

User-agent: MJ12bot
Disallow: /

# Sitemap location
Sitemap: https://karachicleaners.com/sitemap.xml
";

// Get the public directory path
$publicDir = __DIR__ . '/../public';

// Create public directory if it doesn't exist
if (!is_dir($publicDir)) {
    mkdir($publicDir, 0755, true);
}

$robotsPath = $publicDir . '/robots.txt';

// Write robots.txt
if (file_put_contents($robotsPath, $robotsContent) !== false) {
    echo "🤖 robots.txt generated successfully!\n";
    echo "📁 Location: $robotsPath\n";
    echo "✅ Search engines can now crawl your site\n";
} else {
    echo "❌ Failed to generate robots.txt\n";
    exit(1);
}