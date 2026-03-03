<?php

/**
 * SEO Configuration for Karachi Cleaners
 * 
 * This configuration is used by the SEO automation system
 * to scan pages, optimize content, and generate reports
 */

return [
    
    // Website Information
    'website' => [
        'name' => 'Karachi Cleaners',
        'url' => 'https://karachicleaners.com',  // ← UPDATE YOUR DOMAIN
        'location' => 'Karachi, Pakistan',
        'phone' => '+92-300-1234567',             // ← UPDATE YOUR PHONE
        'email' => 'contact@karachicleaners.com', // ← UPDATE YOUR EMAIL
    ],

    // Pages to Optimize
    'pages' => [
        '/' => [
            'service' => 'Homepage',
            'page_type' => 'landing',
            'primary_keyword' => 'cleaning services Karachi',
            'secondary_keywords' => ['professional cleaning', 'house cleaning'],
            'title' => 'Professional Cleaning Services in Karachi',
            'description' => 'Expert cleaning services for homes and offices in Karachi. Professional, reliable, and affordable.',
            'keywords' => ['cleaning', 'Karachi', 'professional'],
            'og_title' => 'Karachi Cleaners - Professional Cleaning Services',
            'og_description' => 'Transform your space with professional cleaning services in Karachi.',
        ],
        '/carpet-cleaning' => [
            'service' => 'Carpet Cleaning',
            'page_type' => 'service',
            'primary_keyword' => 'carpet cleaning Karachi',
            'secondary_keywords' => ['rug cleaning', 'deep carpet clean'],
            'title' => 'Professional Carpet Cleaning Services in Karachi',
            'description' => 'Expert carpet cleaning in Karachi. Deep clean, stain removal, and restoration services.',
            'keywords' => ['carpet cleaning', 'rug cleaning', 'Karachi'],
            'og_title' => 'Carpet Cleaning Services Karachi',
            'og_description' => 'Professional carpet cleaning with stain removal and restoration.',
        ],
        '/sofa-cleaning' => [
            'service' => 'Sofa Cleaning',
            'page_type' => 'service',
            'primary_keyword' => 'sofa cleaning Karachi',
            'secondary_keywords' => ['furniture cleaning', 'upholstery cleaning'],
            'title' => 'Professional Sofa & Furniture Cleaning in Karachi',
            'description' => 'Expert sofa and furniture cleaning services in Karachi. Professional deep cleaning.',
            'keywords' => ['sofa cleaning', 'furniture cleaning', 'Karachi'],
            'og_title' => 'Sofa Cleaning Services Karachi',
            'og_description' => 'Professional sofa and furniture cleaning for your home.',
        ],
        '/deep-cleaning' => [
            'service' => 'Deep Cleaning',
            'page_type' => 'service',
            'primary_keyword' => 'deep cleaning Karachi',
            'secondary_keywords' => ['thorough cleaning', 'intensive cleaning'],
            'title' => 'Deep Cleaning Services in Karachi',
            'description' => 'Professional deep cleaning services in Karachi. Thorough and intensive cleaning.',
            'keywords' => ['deep cleaning', 'thorough cleaning', 'Karachi'],
            'og_title' => 'Deep Cleaning Services Karachi',
            'og_description' => 'Comprehensive deep cleaning for homes and offices.',
        ],
        '/office-cleaning' => [
            'service' => 'Office Cleaning',
            'page_type' => 'service',
            'primary_keyword' => 'office cleaning Karachi',
            'secondary_keywords' => ['commercial cleaning', 'workplace cleaning'],
            'title' => 'Professional Office Cleaning Services in Karachi',
            'description' => 'Expert office cleaning services in Karachi. Commercial and workplace cleaning.',
            'keywords' => ['office cleaning', 'commercial cleaning', 'Karachi'],
            'og_title' => 'Office Cleaning Services Karachi',
            'og_description' => 'Professional office cleaning for your workspace.',
        ],
        '/window-cleaning' => [
            'service' => 'Window Cleaning',
            'page_type' => 'service',
            'primary_keyword' => 'window cleaning Karachi',
            'secondary_keywords' => ['glass cleaning', 'professional cleaning'],
            'title' => 'Professional Window Cleaning Services in Karachi',
            'description' => 'Expert window cleaning services in Karachi. Professional glass cleaning.',
            'keywords' => ['window cleaning', 'glass cleaning', 'Karachi'],
            'og_title' => 'Window Cleaning Services Karachi',
            'og_description' => 'Professional window and glass cleaning services.',
        ],
        '/about' => [
            'service' => 'About Us',
            'page_type' => 'info',
            'primary_keyword' => 'about Karachi Cleaners',
            'secondary_keywords' => ['cleaning company', 'professional service'],
            'title' => 'About Karachi Cleaners - Professional Service',
            'description' => 'Learn about Karachi Cleaners and our professional cleaning services.',
            'keywords' => ['about', 'cleaning company', 'professional'],
            'og_title' => 'About Karachi Cleaners',
            'og_description' => 'Professional cleaning services with years of experience.',
        ],
        '/contact' => [
            'service' => 'Contact',
            'page_type' => 'conversion',
            'primary_keyword' => 'contact Karachi Cleaners',
            'secondary_keywords' => ['booking', 'quote', 'inquiry'],
            'title' => 'Contact Karachi Cleaners - Get Your Free Quote',
            'description' => 'Contact Karachi Cleaners for a free quote. Call or message us for professional cleaning services.',
            'keywords' => ['contact', 'booking', 'quote', 'Karachi'],
            'og_title' => 'Contact Us - Karachi Cleaners',
            'og_description' => 'Get in touch for a free quote on professional cleaning.',
        ],
        '/blog' => [
            'service' => 'Blog',
            'page_type' => 'blog',
            'primary_keyword' => 'cleaning tips and blog',
            'secondary_keywords' => ['cleaning advice', 'tips and tricks'],
            'title' => 'Cleaning Tips & Blog - Karachi Cleaners',
            'description' => 'Read our blog for cleaning tips, advice, and industry news.',
            'keywords' => ['blog', 'cleaning tips', 'advice'],
            'og_title' => 'Cleaning Tips Blog',
            'og_description' => 'Expert cleaning tips and advice for your home.',
        ],
    ],

    // SEO Optimization Settings
    'seo' => [
        'title' => [
            'min_length' => 30,
            'max_length' => 60,
            'ideal_length' => 50,
        ],
        'meta_description' => [
            'min_length' => 120,
            'max_length' => 160,
            'ideal_length' => 155,
        ],
        'keywords' => [
            'min_count' => 3,
            'max_count' => 8,
            'ideal_count' => 5,
        ],
    ],

    // Trending Topics Configuration
    'trending_topics' => [
        'enabled' => true,
        'frequency' => 'weekly',  // How often to fetch trending topics
        'region' => 'PK',         // Pakistan
        'categories' => [
            'cleaning',
            'seasonal',
            'local_pakistan',
            'health_related',
            'special_services',
        ],
    ],

    // Local SEO Settings
    'local_seo' => [
        'business_name' => 'Karachi Cleaners',
        'address' => 'Karachi, Pakistan',
        'phone' => '+92-300-1234567',
        'email' => 'contact@karachicleaners.com',
        'latitude' => 24.8607,    // Karachi coordinates
        'longitude' => 67.0011,
        'service_area' => 'Karachi',
    ],

    // Automation Settings
    'automation' => [
        'schedule' => '0 2 * * 1',     // Monday 2 AM UTC (7:30 AM PKT)
        'auto_commit' => true,
        'create_pull_requests' => true,
        'require_manual_review' => true,
        'timezone' => 'Asia/Karachi',
    ],

    // Storage Paths
    'storage' => [
        'logs' => 'storage/seo-logs',
        'backups' => 'storage/seo-backups',
        'reports' => 'storage/seo-reports',
    ],

];