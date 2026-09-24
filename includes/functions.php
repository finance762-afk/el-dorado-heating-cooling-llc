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
 * Render the "Related Services" grid (3 OTHER service-page cards) for the
 * bottom of any individual service page. Uses the required services-grid /
 * service-card-with-image pattern with rotating card tints. Photos and copy
 * come from $servicePageMeta in config.php.
 *
 * @param string $currentSlug The slug of the page being rendered (excluded from the grid)
 * @param string $heading      Optional H2 (question format per AEO rules)
 * @return void Echoes the section markup
 */
function renderRelatedServices($currentSlug, $heading = 'What other HVAC services might your Naples home need?') {
    global $servicePages, $servicePageMeta;

    // Small inline icon set (raw SVG — inline SVG, no runtime injection).
    $icons = [
        'wind'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
        'droplets' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
        'sun'      => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
        'home'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
        'wrench'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
        'shield'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
        'layers'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
        'leaf'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
        'gauge'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    ];

    // Pick 3 other service pages (stable, slug-seeded so it varies by page but stays consistent).
    $others = array_values(array_filter($servicePages, fn($p) => $p['slug'] !== $currentSlug));
    if (count($others) > 3) {
        $offset = crc32($currentSlug) % count($others);
        $rotated = array_merge(array_slice($others, $offset), array_slice($others, 0, $offset));
        $others = array_slice($rotated, 0, 3);
    }
    $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
    ?>
    <section class="section section--light related-services" aria-label="Related HVAC services">
        <div class="container">
            <div class="section-head reveal-up">
                <span class="eyebrow-label">What We Do</span>
                <h2><?php echo htmlspecialchars($heading); ?></h2>
                <p class="hero-answer">El Dorado Heating &amp; Cooling handles the full range of home comfort across Naples, Bonita Springs, and Marco Island. If your system needs more than one fix, one trusted local team can take care of all of it.</p>
            </div>
            <div class="services-grid">
                <?php foreach ($others as $i => $svc):
                    $meta = $servicePageMeta[$svc['slug']] ?? ['icon' => 'wrench', 'photo' => 'tech-outdoor-unit', 'palt' => $svc['name'] . ' in Naples, FL', 'desc' => '', 'bullets' => []];
                    $tint = $tints[$i % 3];
                    $delay = ($i % 3) + 1;
                    $p = $meta['photo'];
                ?>
                <article class="service-card-with-image <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
                    <div class="service-card__image">
                        <picture>
                            <source type="image/avif" srcset="/assets/images/<?php echo $p; ?>-480.avif 480w, /assets/images/<?php echo $p; ?>-960.avif 960w" sizes="(max-width: 768px) 100vw, 380px">
                            <img src="/assets/images/<?php echo $p; ?>.jpg" srcset="/assets/images/<?php echo $p; ?>-480.webp 480w, /assets/images/<?php echo $p; ?>-960.webp 960w" sizes="(max-width: 768px) 100vw, 380px" alt="<?php echo htmlspecialchars($meta['palt']); ?>" width="600" height="360" loading="lazy" decoding="async">
                        </picture>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__icon"><?php echo $icons[$meta['icon']] ?? $icons['wrench']; ?></div>
                        <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
                        <p class="service-card__desc"><?php echo htmlspecialchars($meta['desc']); ?></p>
                        <ul>
                            <?php foreach ($meta['bullets'] as $b): ?><li><?php echo htmlspecialchars($b); ?></li><?php endforeach; ?>
                        </ul>
                        <a href="/services/<?php echo $svc['slug']; ?>/" class="service-card__cta">Learn more</a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
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
