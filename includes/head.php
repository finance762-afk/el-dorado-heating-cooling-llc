<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($pageTitle) ? $pageTitle : $siteName . ' | ' . $primaryKeyword . ' | ' . $address['city'] . ', ' . $address['state']; ?></title>
    <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : $siteName . ' provides expert HVAC services in ' . $address['city'] . ', ' . $address['state'] . '. Professional AC repair, installation, and maintenance. Call ' . $phone . ' for service.'; ?>">

    <?php if (isset($noindex) && $noindex): ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <link rel="canonical" href="<?php echo $canonicalUrl ?? $siteUrl; ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="<?php echo isset($ogType) ? $ogType : 'website'; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : $siteName . ' | ' . $address['city'] . ', ' . $address['state']; ?>">
    <meta property="og:description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Expert HVAC services in ' . $address['city'] . ', FL. Professional AC repair, installation & maintenance.'; ?>">
    <meta property="og:url" content="<?php echo $canonicalUrl ?? $siteUrl; ?>">
    <meta property="og:image" content="<?php echo $siteUrl; ?>/assets/images/logo-mark.png">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">
    <meta property="og:locale" content="en_US">

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">

    <!-- Preload heading font (above-the-fold) -->
    <link rel="preload" href="/assets/fonts/bricolage-grotesque.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Critical CSS (inlined) -->
    <style><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/critical.css'; ?></style>

    <!-- Framework CSS (async load) -->
    <link rel="preload" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>"></noscript>

    <?php if (isset($heroPreload) && !empty($heroPreload['srcset'])): ?>
    <!-- Hero image preload -->
    <link rel="preload" as="image" type="image/avif" imagesrcset="<?php echo $heroPreload['srcset']; ?>" imagesizes="<?php echo $heroPreload['sizes']; ?>" fetchpriority="high">
    <?php endif; ?>

    <!-- Google Analytics (placeholder) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo $googleAnalyticsId; ?>');
    </script> -->

    <!-- LocalBusiness Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HVACBusiness",
        "@id": "<?php echo $siteUrl; ?>/#organization",
        "name": "<?php echo $siteName; ?>",
        "url": "<?php echo $siteUrl; ?>",
        "logo": "<?php echo $siteUrl; ?>/assets/images/logo-mark.png",
        "image": "<?php echo $siteUrl; ?>/assets/images/logo-mark.png",
        "description": "<?php echo $siteName; ?> is a family-owned HVAC company providing expert air conditioning and heating services in <?php echo $address['city']; ?>, <?php echo $address['state']; ?>. We specialize in AC repair, installation, maintenance, and emergency service.",
        "telephone": "<?php echo $phoneTel; ?>",
        "email": "<?php echo $email; ?>",
        "address": {
            "@type": "PostalAddress",
            <?php if ($addressPublic): ?>
            "streetAddress": "<?php echo $address['street']; ?>",
            <?php endif; ?>
            "addressLocality": "<?php echo $address['city']; ?>",
            "addressRegion": "<?php echo $address['state']; ?>",
            "postalCode": "<?php echo $address['zip']; ?>",
            "addressCountry": "US"
        },
        <?php if (!empty($bbbUrl)): ?>
        "sameAs": ["<?php echo $bbbUrl; ?>"],
        <?php endif; ?>
        "priceRange": "$$",
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "17:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Saturday", "Sunday"],
                "opens": "08:00",
                "closes": "21:00"
            }
        ],
        "areaServed": [
            <?php
            $areaCount = count($serviceAreas);
            foreach ($serviceAreas as $index => $area):
            ?>
            {
                "@type": "City",
                "name": "<?php echo $area['city']; ?>, <?php echo $area['state']; ?>"
            }<?php echo ($index < $areaCount - 1) ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
</head>
<body>
