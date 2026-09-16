<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageType        = 'other';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'HVAC Services in Naples, FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Explore El Dorado Heating & Cooling\'s full range of HVAC services in Naples, FL — AC repair, installation, maintenance, cleaning, air quality, and more. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/';

// Icon set (inline SVG — no data-lucide, no CDN).
$svg = [
    'phone'    => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
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

// Breadcrumb schema for the listing page.
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Services index composition (tokens only) ===== */
.svc-index-hero { padding-top: 0.75rem; }
.svc-index-hero .hero-copy { max-width: 46rem; }
.svc-index-hero .hero-chips { margin-top: 0.4rem; }

.svc-index-intro .split { align-items: center; }
.svc-index-intro__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.svc-index-intro__figure img { width: 100%; height: 100%; object-fit: cover; }
.svc-index-facts { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.9rem; margin-top: 1.25rem; }
.svc-index-fact { border-left: 3px solid var(--color-accent); padding: 0.5rem 0 0.5rem 0.9rem; }
.svc-index-fact b { font-family: var(--font-accent); font-size: 1.5rem; line-height: 1; color: var(--color-primary); display: block; }
.svc-index-fact span { font-size: 0.85rem; color: var(--color-muted); }

.svc-cta .actions .link-call { color: #fff; }
.svc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior svc-index-hero" aria-label="HVAC services in Naples, FL">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Services</span>
        </nav>
        <div class="hero-copy">
            <span class="eyebrow">Complete Home Comfort &middot; Naples, FL</span>
            <h1 class="hero-title">HVAC <span class="text-accent">Services</span> in Naples, FL</h1>
            <p class="hero-answer">El Dorado Heating &amp; Cooling is a family-owned Naples HVAC company covering the full range of home comfort &mdash; air conditioning, heating, cleaning, air quality, and preventive maintenance built for Southwest Florida&rsquo;s heat, humidity, and salt air.</p>
            <div class="hero-actions">
                <button type="button" class="btn btn-primary btn-lg" data-open-estimate>Get a free estimate</button>
                <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> or call <?php echo $phone; ?></a>
            </div>
            <ul class="hero-chips">
                <li><?php echo $svg['badge']; ?> Licensed &amp; Insured</li>
                <li><?php echo $svg['users']; ?> Family-Owned Since <?php echo $yearEstablished; ?></li>
                <li><?php echo $svg['clock']; ?> 24/7 Emergency Service</li>
            </ul>
        </div>
    </div>
</section>

<!-- ============================= INTRO ============================= -->
<section class="section svc-index-intro" aria-label="About our services">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">One Local Team</span>
                <h2>What HVAC services does El Dorado offer in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling handles everything from emergency AC repair and new system installation to coil cleaning, air purification, and energy audits. One trusted, family-owned team keeps your Naples home comfortable year-round &mdash; in English and Spanish, day or night.</p>
                <p>Whether you need a fast fix on a 95-degree afternoon or a plan to lower next summer&rsquo;s power bill, every service below is delivered by the same crew that treats your comfort like our own. Explore a category to see exactly what&rsquo;s included.</p>
                <div class="svc-index-facts">
                    <div class="svc-index-fact"><b>Est. <?php echo $yearEstablished; ?></b><span>Family-owned in Naples</span></div>
                    <div class="svc-index-fact"><b>60+ yrs</b><span>Combined experience</span></div>
                    <div class="svc-index-fact"><b>24/7</b><span>Emergency service</span></div>
                    <div class="svc-index-fact"><b>2</b><span>Languages spoken</span></div>
                </div>
            </div>
            <figure class="svc-index-intro__figure reveal-right">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician servicing an outdoor AC unit at a Naples home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= ALL SERVICES GRID ============================= -->
<section class="section section--light" aria-label="All HVAC services">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>Which <span class="text-accent">HVAC services</span> can we handle for your home?</h2>
            <p class="hero-answer">Every service El Dorado Heating &amp; Cooling offers across Naples, Bonita Springs, and Marco Island &mdash; grouped so you can find exactly what your system needs and see what each visit includes.</p>
        </div>
        <div class="services-grid">
            <?php $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
            foreach ($servicePages as $i => $sp):
                $meta = $servicePageMeta[$sp['slug']];
                $p = $meta['photo'];
            ?>
            <article class="service-card-with-image <?php echo $tints[$i % 3]; ?> reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
                <div class="service-card__image">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/<?php echo $p; ?>-480.avif 480w, /assets/images/<?php echo $p; ?>-960.avif 960w" sizes="(max-width: 768px) 100vw, 300px">
                        <img src="/assets/images/<?php echo $p; ?>.jpg" srcset="/assets/images/<?php echo $p; ?>-480.webp 480w, /assets/images/<?php echo $p; ?>-960.webp 960w" sizes="(max-width: 768px) 100vw, 300px" alt="<?php echo htmlspecialchars($meta['palt']); ?>" width="600" height="360" loading="lazy" decoding="async">
                    </picture>
                </div>
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $svg[$meta['icon']]; ?></div>
                    <h3><?php echo htmlspecialchars($sp['name']); ?></h3>
                    <p class="service-card__desc"><?php echo htmlspecialchars($meta['desc']); ?></p>
                    <ul>
                        <?php foreach ($meta['bullets'] as $b): ?><li><?php echo htmlspecialchars($b); ?></li><?php endforeach; ?>
                    </ul>
                    <a href="/services/<?php echo $sp['slug']; ?>/" class="service-card__cta">Learn more</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================= FINAL CTA ============================= -->
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Request service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Not Sure Where To Start?</span>
            <h2>Need help figuring out which service your home needs?</h2>
            <p>Tell us what&rsquo;s going on and El Dorado Heating &amp; Cooling will point you to the right fix &mdash; no pressure, no jargon. Call now or request your free estimate and we&rsquo;ll reach out the same day.</p>
        </div>
        <div class="actions reveal-up reveal-delay-1">
            <button type="button" class="btn btn-primary btn-lg" data-open-estimate>Get my free estimate</button>
            <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> <?php echo $phone; ?></a>
        </div>
    </div>
</section>

<script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
