<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'cleaning-services';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'HVAC & AC Cleaning Services Naples, FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Professional HVAC and AC system cleaning in Naples, FL — coil cleaning, system cleaning, and duct service that restore airflow and efficiency. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/cleaning-services/';

// The individual offerings this group page covers.
$groupServices = [
    [
        'name'    => 'AC System Cleaning',
        'icon'    => 'wind',
        'desc'    => 'Full cleaning of the indoor and outdoor unit to clear buildup and restore airflow.',
        'bullets' => ['Indoor & outdoor cleaning', 'Blower & housing service', 'Restored airflow'],
        'detail'  => 'Over a Naples cooling season, dust, pollen, and coastal grime coat the blower, housing, and coils of an air conditioner. El Dorado Heating & Cooling performs a complete AC system cleaning that clears that buildup from the parts airflow actually moves through, so your system cools faster and runs fewer hours to hold your setpoint.',
    ],
    [
        'name'    => 'Coil Cleaning',
        'icon'    => 'droplets',
        'desc'    => 'Deep cleaning of condenser and evaporator coils for efficiency and cooler air.',
        'bullets' => ['Condenser & evaporator coils', 'Removes salt-air grime', 'Lower energy use'],
        'detail'  => 'Coils are where heat actually leaves your home, and a dirty coil is the single most common reason a Naples AC struggles. El Dorado Heating & Cooling cleans both the condenser and evaporator coils, clearing the salt-air film and debris that insulate them — the difference is often measurable on your next power bill.',
    ],
    [
        'name'    => 'HVAC System Cleaning',
        'icon'    => 'layers',
        'desc'    => 'Whole-system cleaning including ductwork and components for cleaner air.',
        'bullets' => ['Full system & ductwork', 'Better indoor air quality', 'Healthier airflow'],
        'detail'  => 'A whole-system cleaning goes beyond the equipment to the ductwork that carries air into every room. El Dorado Heating & Cooling cleans the system and duct components that collect dust, allergens, and moisture in humid Florida homes, improving both efficiency and the air your family breathes.',
    ],
];

$faqs = [
    [
        'q' => 'How much does HVAC cleaning cost in Naples, FL?',
        'a' => 'Coil cleaning as part of a service visit is often bundled into maintenance, while a full HVAC system or duct cleaning typically ranges from about $150 to $450 depending on system size and access. El Dorado Heating & Cooling gives you a clear, upfront price for your specific Naples home before any work begins.',
    ],
    [
        'q' => 'How often should HVAC coils and ducts be cleaned in Florida?',
        'a' => 'In Southwest Florida, El Dorado Heating & Cooling recommends coil cleaning at least once a year as part of maintenance, and a fuller duct and system cleaning every three to five years. Our humidity, pollen, and salt air load systems faster than drier climates, so buildup returns sooner here.',
    ],
    [
        'q' => 'Will cleaning my AC coils actually lower my power bill?',
        'a' => 'Usually, yes. A coil caked in grime cannot release heat efficiently, forcing the system to run longer for the same cooling. Clearing the condenser and evaporator coils commonly restores 5–15% of lost efficiency, which adds up quickly over a Naples cooling season that runs most of the year.',
    ],
    [
        'q' => 'Does dirty ductwork affect indoor air quality?',
        'a' => 'It can. Ducts collect dust, pollen, and — in humid Florida homes — moisture that encourages mold and musty odors. El Dorado Heating & Cooling cleans the system and duct components so the air circulating through your Naples home is cleaner, which matters for allergy and asthma sufferers especially.',
    ],
    [
        'q' => 'Is professional cleaning better than a DIY rinse?',
        'a' => 'A garden-hose rinse can bend fins and misses the evaporator coil and internal components entirely. El Dorado Heating & Cooling uses proper coil cleaners and technique to clean without damaging the system, and inspects for issues while we work — catching small problems before they become breakdowns.',
    ],
];

// Icon set.
$svg = [
    'phone'    => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check'    => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'wind'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'droplets' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'layers'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
];

// Schema — Service (@id, with catalog of sub-services) + BreadcrumbList, plus FAQPage.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-cleaning-services',
    'serviceType' => 'HVAC System Cleaning',
    'name'        => 'HVAC & AC Cleaning Services in Naples, FL',
    'description' => 'Professional HVAC and AC cleaning in Naples, FL — coil cleaning, full system cleaning, and duct service that restore airflow, efficiency, and indoor air quality.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(fn($a) => ['@type' => 'City', 'name' => $a['city'] . ', ' . $a['state']], $serviceAreas),
    'url'         => $canonicalUrl,
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Cleaning Services',
        'itemListElement' => array_map(fn($s) => [
            '@type' => 'Offer',
            'itemOffered' => ['@type' => 'Service', 'name' => $s['name']],
        ], $groupServices),
    ],
];
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Cleaning Services', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Cleaning Services page composition (tokens only) ===== */
.svc-hero { padding-top: 0.75rem; }
.svc-hero .hero-chips { margin-top: 0.4rem; }

/* Sub-service detail alternating rows */
.clean-detail__row { display: grid; grid-template-columns: 88px 1fr; gap: 1.25rem; align-items: start; padding: 1.6rem 0; border-top: 1px solid var(--color-line); }
.clean-detail__row:first-of-type { border-top: 0; }
.clean-detail__badge { width: 88px; height: 88px; border-radius: var(--radius-lg); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-secondary) 15%, transparent); }
.clean-detail__badge svg { width: 34px; height: 34px; }
.clean-detail__row h3 { font-size: 1.2rem; margin-bottom: 0.35rem; }
.clean-detail__row p { margin: 0; color: var(--color-ink-2); max-width: 60ch; }
.clean-detail__tags { display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 0.7rem; }
.clean-detail__tags span { font-family: var(--font-accent); font-size: 0.72rem; letter-spacing: 0.06em; text-transform: uppercase; color: var(--color-accent-dark); background: color-mix(in srgb, var(--color-accent) 16%, transparent); padding: 0.25rem 0.6rem; border-radius: var(--radius-full); }
@media (max-width: 640px) { .clean-detail__row { grid-template-columns: 1fr; } .clean-detail__badge { width: 64px; height: 64px; } }

/* Benefit strip */
.clean-benefits { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.clean-benefit { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.4rem; display: grid; gap: 0.5rem; }
.clean-benefit b { font-family: var(--font-accent); font-size: 1.9rem; line-height: 1; color: var(--color-primary); }
.clean-benefit span { font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 720px) { .clean-benefits { grid-template-columns: 1fr; } }

/* Trust split figure */
.svc-figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.svc-figure img { width: 100%; height: 100%; object-fit: cover; }
.svc-diffs { display: grid; gap: 0.9rem; margin-top: 1.25rem; }
.svc-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.svc-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.svc-diffs b { display: block; }
.svc-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

.svc-cta .actions .link-call { color: #fff; }
.svc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior svc-hero" aria-label="HVAC cleaning services in Naples, FL">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Cleaning Services</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Coil, System &amp; Duct Cleaning &middot; Naples, FL</span>
                <h1 class="hero-title">HVAC &amp; AC <span class="text-accent">Cleaning Services</span> in Naples, FL</h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling deep-cleans coils, systems, and ductwork for Naples homes &mdash; clearing the salt-air grime and Florida humidity buildup that steals efficiency and clouds your indoor air.</p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                    <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> or call <?php echo $phone; ?></a>
                </div>
                <ul class="hero-chips">
                    <li><?php echo $svg['badge']; ?> Licensed &amp; Insured</li>
                    <li><?php echo $svg['users']; ?> Family-Owned Since <?php echo $yearEstablished; ?></li>
                    <li><?php echo $svg['clock']; ?> 24/7 Emergency Service</li>
                </ul>
            </div>

            <aside class="hero-form-card" id="estimate-form">
                <h2>Get a free estimate</h2>
                <p class="hero-form-tagline">No obligation. Same-day reply.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-email">Email</label><input id="hero-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-service">Service needed</label><select id="hero-service" name="service"><option value="">What do you need?</option><?php foreach ($servicePages as $heroSvc): ?><option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"<?php echo $heroSvc['slug'] === $serviceSlug ? ' selected' : ''; ?>><?php echo htmlspecialchars($heroSvc['name']); ?></option><?php endforeach; ?></select></div>
                    <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
                    <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
                </form>
            </aside>
        </div>
    </div>
</section>

<!-- ============================= OVERVIEW ============================= -->
<section class="section" aria-label="About our cleaning services">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Overview</span>
            <h2>What do El Dorado&rsquo;s HVAC cleaning services cover in Naples?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling offers three levels of cleaning for Naples homes: targeted coil cleaning, full AC system cleaning, and whole-home HVAC and duct cleaning. Each clears the buildup that Southwest Florida&rsquo;s pollen, humidity, and salt air deposit on the parts your comfort depends on.</p>
        </div>
        <div class="clean-benefits">
            <div class="clean-benefit reveal-up"><b>5&ndash;15%</b><span>Typical efficiency restored by clearing dirty coils on a neglected system.</span></div>
            <div class="clean-benefit reveal-up reveal-delay-1"><b>Year-round</b><span>Naples runs the AC most of the year, so buildup returns faster than up north.</span></div>
            <div class="clean-benefit reveal-up reveal-delay-2"><b>Cleaner air</b><span>Duct and system cleaning cuts the dust and allergens circulating through your home.</span></div>
        </div>
    </div>
</section>

<!-- ============================= SUB-SERVICE CARDS ============================= -->
<section class="section section--light" aria-label="Cleaning services offered">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>Which <span class="text-accent">cleaning services</span> can we perform on your system?</h2>
            <p class="hero-answer">From a single coil cleaning to a whole-system and duct service, El Dorado Heating &amp; Cooling matches the level of cleaning to what your Naples system actually needs &mdash; no upsells, just cleaner, more efficient comfort.</p>
        </div>
        <div class="services-grid">
            <?php $ctints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
            foreach ($groupServices as $i => $gs):
                $photo = ['tech-outdoor-unit', 'fleet-trucks', 'team-fleet'][$i % 3];
            ?>
            <article class="service-card-with-image <?php echo $ctints[$i % 3]; ?> reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
                <div class="service-card__image">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/<?php echo $photo; ?>-480.avif 480w, /assets/images/<?php echo $photo; ?>-960.avif 960w" sizes="(max-width: 768px) 100vw, 380px">
                        <img src="/assets/images/<?php echo $photo; ?>.jpg" srcset="/assets/images/<?php echo $photo; ?>-480.webp 480w, /assets/images/<?php echo $photo; ?>-960.webp 960w" sizes="(max-width: 768px) 100vw, 380px" alt="El Dorado Heating &amp; Cooling <?php echo strtolower($gs['name']); ?> in Naples, FL" width="600" height="360" loading="lazy" decoding="async">
                    </picture>
                </div>
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $svg[$gs['icon']]; ?></div>
                    <h3><?php echo htmlspecialchars($gs['name']); ?></h3>
                    <p class="service-card__desc"><?php echo htmlspecialchars($gs['desc']); ?></p>
                    <ul>
                        <?php foreach ($gs['bullets'] as $b): ?><li><?php echo htmlspecialchars($b); ?></li><?php endforeach; ?>
                    </ul>
                    <a href="#estimate" class="service-card__cta" data-open-estimate>Request service</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================= INDIVIDUAL SERVICE DETAILS ============================= -->
<section class="section" aria-label="Cleaning service details">
    <div class="container container-narrow">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">In Detail</span>
            <h2>How does each cleaning service protect your Naples system?</h2>
            <p class="answer-block">Each cleaning targets a different part of the airflow path. El Dorado Heating &amp; Cooling explains exactly what we clean and why it matters, so you understand what you&rsquo;re paying for and what it does for your comfort and power bill.</p>
        </div>
        <?php foreach ($groupServices as $gs): ?>
        <div class="clean-detail__row reveal-up">
            <div class="clean-detail__badge"><?php echo $svg[$gs['icon']]; ?></div>
            <div>
                <h3><?php echo htmlspecialchars($gs['name']); ?></h3>
                <p><?php echo $gs['detail']; ?></p>
                <div class="clean-detail__tags">
                    <?php foreach ($gs['bullets'] as $b): ?><span><?php echo htmlspecialchars($b); ?></span><?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============================= PROCESS ============================= -->
<section class="section section--light" aria-label="Our cleaning process">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">How It Works</span>
            <h2>What happens during an El Dorado cleaning visit?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling starts with an inspection, cleans the right components with proper tools and cleaners, then verifies performance before we leave &mdash; so you see the airflow and efficiency difference the same day.</p>
        </div>
        <ol class="process-steps reveal-up">
            <li><b>Inspect &amp; Assess</b><span>We check the coils, blower, and ducts to see exactly where buildup is costing you.</span></li>
            <li><b>Protect &amp; Prep</b><span>We shield your home and equipment, then set up the right cleaners for each component.</span></li>
            <li><b>Deep Clean</b><span>Coils, system, and ductwork are cleaned by hand with technique that won&rsquo;t bend fins.</span></li>
            <li><b>Test &amp; Confirm</b><span>We measure airflow and cooling, then show you the result before packing up.</span></li>
        </ol>
    </div>
</section>

<!-- ============================= TRUST (dark) ============================= -->
<section class="section on-dark texture-grain slant-top" aria-label="Why choose El Dorado for cleaning">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="svc-figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service trucks ready for a Naples cleaning job" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why trust El Dorado to clean your system the right way?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. We clean systems the way we&rsquo;d clean our own &mdash; thoroughly, without shortcuts, and with an eye for the problems that show up during the job.</p>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Proper tools, no damage</b><p>We use real coil cleaners and technique instead of a hose that bends fins and voids warranties.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>We catch what we clean past</b><p>Cleaning gets us up close &mdash; we flag worn parts before they fail in the heat.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual, local, accountable</b><p>The same Naples team every visit, reachable 24/7 if anything comes up.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section" aria-label="Cleaning services FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about HVAC cleaning?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, timing, and what a real cleaning does for your system.</p>
        </div>
        <div class="faq-grid reveal-up">
            <?php foreach ($faqs as $idx => $faq): ?>
            <details class="faq"<?php echo $idx < 2 ? ' open' : ''; ?>>
                <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
                <p><?php echo htmlspecialchars($faq['a']); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php renderRelatedServices($serviceSlug); ?>

<!-- ============================= FINAL CTA ============================= -->
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Schedule a cleaning">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Breathe Easier</span>
            <h2>Ready for cleaner air and a more efficient system?</h2>
            <p>Clear out the grime that&rsquo;s quietly running up your bill. El Dorado Heating &amp; Cooling will clean your coils, system, or ductwork right &mdash; call now or request your free estimate and we&rsquo;ll reach out today.</p>
        </div>
        <div class="actions reveal-up reveal-delay-1">
            <button type="button" class="btn btn-primary btn-lg" data-open-estimate>Get my free estimate</button>
            <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> <?php echo $phone; ?></a>
        </div>
    </div>
</section>

<p style="text-align:center;font-size:.82rem;color:var(--color-muted);padding:1.5rem 1rem 0;">Last Updated: <?php echo date('F Y'); ?></p>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateFAQSchema($faqs); ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
