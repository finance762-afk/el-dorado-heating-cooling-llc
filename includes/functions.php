<?php
/**
 * includes/functions.php — Helper functions for El Dorado Heating & Cooling LLC.
 * Included by config.php, so available globally on every page.
 */

/**
 * Check if the current page is active (for navigation highlighting)
 * @param string $page The page identifier to check (e.g., 'home', 'about', 'contact')
 * @return bool True if the page is active
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for display
 * @param string $phone Phone number in any format
 * @return string Formatted phone number (XXX) XXX-XXXX
 */
function formatPhone($phone) {
    $cleaned = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($cleaned) === 11 && $cleaned[0] === '1') {
        $cleaned = substr($cleaned, 1);
    }
    if (strlen($cleaned) === 10) {
        return sprintf('(%s) %s-%s', substr($cleaned, 0, 3), substr($cleaned, 3, 3), substr($cleaned, 6, 4));
    }
    return $phone;
}

/**
 * Convert service name to URL slug
 * @param string $name Service name
 * @return string URL-safe slug
 */
function getServiceSlug($name) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));
}

/**
 * Convert city name to URL slug
 * @param string $city City name
 * @return string URL-safe slug
 */
function getAreaSlug($city) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $city), '-'));
}

/**
 * Load and render a Lucide icon as inline SVG
 * @param string $name Icon name (matches filename in references/lucide-icons/)
 * @param int $size Icon size in pixels (default 24)
 * @return void Echoes the SVG markup
 */
function icon($name, $size = 24) {
    $iconPath = $_SERVER['DOCUMENT_ROOT'] . '/../references/lucide-icons/' . $name . '.svg';
    if (!file_exists($iconPath)) {
        echo "<!-- Icon '$name' not found -->";
        return;
    }
    $svg = file_get_contents($iconPath);
    // Add aria-hidden and size attributes
    $svg = str_replace('<svg', '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '"', $svg);
    echo $svg;
}

/**
 * Generate JSON-LD schema for a service
 * @param array $service Service data array with name, slug, description, keywords
 * @return string JSON-LD script tag
 */
function generateServiceSchema($service) {
    global $siteName, $siteUrl, $phone, $email, $address;

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'provider' => [
            '@id' => $siteUrl . '/#organization'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'] . ', ' . $address['state']
        ]
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate JSON-LD schema for FAQ
 * @param array $faqs Array of FAQ items, each with 'q' and 'a' keys
 * @return string JSON-LD script tag
 */
function generateFAQSchema($faqs) {
    $mainEntity = [];
    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntity
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate meta tags for a page
 * @param string $title Page title
 * @param string $description Meta description
 * @param string $canonical Canonical URL
 * @return array Array of meta tag strings
 */
function generateMetaTags($title, $description, $canonical) {
    global $siteUrl;

    return [
        'title' => $title,
        'description' => $description,
        'canonical' => $canonical,
        'og:title' => $title,
        'og:description' => $description,
        'og:url' => $canonical,
    ];
}
