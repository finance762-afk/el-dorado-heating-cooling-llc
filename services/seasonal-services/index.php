<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'seasonal-services';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Seasonal HVAC Services in Naples, FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Pre-season AC compressor, fan coil, thermostat, and duct service in Naples, FL from El Dorado Heating & Cooling. Get heat-ready before summer. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/seasonal-services/';

// The individual offerings this group page covers.
$groupServices = [
    [
        'name'    => 'AC Compressor Service',
        'icon'    => 'gauge',
        'desc'    => 'Compressor inspection and service that catches the failure Naples summers push hardest.',
        'bullets' => ['Amp draw & pressure test', 'Contactor & start components', 'Early failure warnings'],
        'detail'  => 'The compressor is the single most expensive part in a Naples AC system, and it runs harder here than almost anywhere in the country. El Dorado Heating & Cooling tests amp draw, refrigerant pressures, and start components each season so a weakening compressor gets caught and addressed before it seizes on a 95-degree July afternoon.',
    ],
    [
        'name'    => 'Fan Coil Service',
        'icon'    => 'wind',
        'desc'    => 'Fan coil and air handler service that keeps airflow strong through a long cooling season.',
        'bullets' => ['Blower wheel cleaning', 'Motor & bearing check', 'Restored airflow'],
        'detail'  => 'A fan coil pulls double duty in Southwest Florida, moving air across the coil nearly year-round while humidity works to gum up the blower wheel and bearings. El Dorado Heating & Cooling cleans the blower, checks motor amp draw, and confirms the coil is clear so the fan coil delivers full airflow instead of straining against buildup.',
    ],
    [
        'name'    => 'Thermostat Services',
        'icon'    => 'shield',
        'desc'    => 'Calibration, repair, and smart thermostat setup so your system reads the room correctly.',
        'bullets' => ['Calibration & wiring check', 'Smart thermostat setup', 'Accurate cycling'],
        'detail'  => 'A miscalibrated thermostat is a quiet source of a high power bill — it cycles the system longer than your home actually needs. El Dorado Heating & Cooling verifies wiring and sensor accuracy, and can install and program a smart thermostat that adjusts automatically as a Naples day heats up from a cool morning to a mid-80s afternoon.',
    ],
    [
        'name'    => 'Heating & Cooling Service',
        'icon'    => 'sun',
        'desc'    => 'Combined system service covering both sides of comfort for the rare Naples cold snap.',
        'bullets' => ['Heat strip / heat pump check', 'Cooling-side tune', 'Year-round readiness'],
        'detail'  => 'Most Naples systems lean on cooling for ten months and heating for a handful of cold nights, but a heat strip or heat-pump reversing valve that never gets checked can fail exactly when it is needed. El Dorado Heating & Cooling services both sides of the system in one visit, so you are covered whether it is 95 degrees or an unusual 40-degree January morning.',
    ],
    [
        'name'    => 'Air Duct Services',
        'icon'    => 'layers',
        'desc'    => 'Duct inspection, sealing, and cleaning that stops conditioned air from leaking into the attic.',
        'bullets' => ['Leak & connection check', 'Sealing & insulation', 'Better room-to-room balance'],
        'detail'  => 'Ductwork run through a hot Naples attic can leak conditioned air before it ever reaches a vent, forcing the system to work harder for rooms that still feel uneven. El Dorado Heating & Cooling inspects connections and insulation, seals leaks, and cleans buildup, which is often the fix behind a bedroom that never quite cools like the rest of the house.',
    ],
];

$faqs = [
    [
        'q' => 'When should I schedule seasonal HVAC service in Naples?',
        'a' => 'El Dorado Heating & Cooling recommends booking seasonal service in early spring, before Naples cooling demand peaks, and again in the fall to check heating-side components. Because our system runs nearly year-round, waiting until the first hot week means a longer wait for an appointment and less time to catch a developing problem.',
    ],
    [
        'q' => 'How much do seasonal services like a compressor or thermostat check cost?',
        'a' => 'Individual seasonal services such as a thermostat calibration or fan coil cleaning typically run $75–$200, while a fuller compressor and duct assessment can run higher depending on findings. El Dorado Heating & Cooling always confirms pricing for your specific Naples system before any work begins.',
    ],
    [
        'q' => 'What is the difference between seasonal service and AC maintenance?',
        'a' => 'Seasonal services target specific components — the compressor, fan coil, thermostat, or ductwork — either as a standalone visit or as an add-on. El Dorado Heating & Cooling\'s AC maintenance plan is the broader twice-yearly service that covers the whole system; seasonal services often get folded into that visit when it makes sense for your equipment.',
    ],
    [
        'q' => 'Can a bad thermostat really affect my AC compressor?',
        'a' => 'Yes. A thermostat that reads temperature incorrectly can cause a system to short-cycle, which is one of the fastest ways to wear down a compressor. El Dorado Heating & Cooling checks thermostat accuracy as part of seasonal service specifically because it protects the most expensive component in the system.',
    ],
    [
        'q' => 'Do leaky air ducts really matter in a Naples attic?',
        'a' => 'They matter more here than in milder climates. A Naples attic can reach well over 130 degrees in summer, and every gap in un-sealed ductwork loses cooled air into that heat before it reaches your rooms. El Dorado Heating & Cooling has sealed ducts that were quietly adding 10-20% to a homeowner\'s cooling load.',
    ],
];

// Icon set (inline SVG from references/lucide-icons — no data-lucide, no CDN).
$svg = [
    'phone'    => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check'    => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'wind'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'sun'      => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
    'shield'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'layers'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    'gauge'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
];

// Schema — Service (@id, with catalog of sub-services) + BreadcrumbList, plus FAQPage.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-seasonal-services',
    'serviceType' => 'HVAC Maintenance',
    'name'        => 'Seasonal HVAC Services in Naples, FL',
    'description' => 'Pre-season AC compressor, fan coil, thermostat, heating and cooling, and air duct services for Naples, FL homes — keeping systems heat-ready ahead of Southwest Florida\'s long cooling season.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(fn($a) => ['@type' => 'City', 'name' => $a['city'] . ', ' . $a['state']], $serviceAreas),
    'url'         => $canonicalUrl,
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Seasonal Services',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Seasonal Services', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Seasonal Services page composition (tokens only) ===== */
.ss-hero { padding-top: 0.75rem; }
.ss-hero .hero-chips { margin-top: 0.4rem; }

/* Sub-service detail alternating rows */
.ss-detail__row { display: grid; grid-template-columns: 88px 1fr; gap: 1.25rem; align-items: start; padding: 1.6rem 0; border-top: 1px solid var(--color-line); }
.ss-detail__row:first-of-type { border-top: 0; }
.ss-detail__badge { width: 88px; height: 88px; border-radius: var(--radius-lg); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-secondary) 15%, transparent); }
.ss-detail__badge svg { width: 34px; height: 34px; }
.ss-detail__row h3 { font-size: 1.2rem; margin-bottom: 0.35rem; }
.ss-detail__row p { margin: 0; color: var(--color-ink-2); max-width: 60ch; }
.ss-detail__tags { display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 0.7rem; }
.ss-detail__tags span { font-family: var(--font-accent); font-size: 0.72rem; letter-spacing: 0.06em; text-transform: uppercase; color: var(--color-accent-dark); background: color-mix(in srgb, var(--color-accent) 16%, transparent); padding: 0.25rem 0.6rem; border-radius: var(--radius-full); }
@media (max-width: 640px) { .ss-detail__row { grid-template-columns: 1fr; } .ss-detail__badge { width: 64px; height: 64px; } }

/* Benefit strip */
.ss-benefits { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.ss-benefit { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.4rem; display: grid; gap: 0.5rem; }
.ss-benefit b { font-family: var(--font-accent); font-size: 1.9rem; line-height: 1; color: var(--color-primary); }
.ss-benefit span { font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 720px) { .ss-benefits { grid-template-columns: 1fr; } }

/* Trust split figure */
.ss-figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.ss-figure img { width: 100%; height: 100%; object-fit: cover; }
.ss-diffs { display: grid; gap: 0.9rem; margin-top: 1.25rem; }
.ss-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.ss-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.ss-diffs b { display: block; }
.ss-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

.ss-cta .actions .link-call { color: var(--color-white); }
.ss-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior ss-hero" aria-label="Seasonal HVAC services in Naples, FL">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Seasonal Services</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Compressor, Fan Coil &amp; Duct Service &middot; Naples, FL</span>
                <h1 class="hero-title">Seasonal <span class="text-accent">HVAC Services</span> in Naples, FL</h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling services the compressor, fan coil, thermostat, and ductwork Naples systems lean on hardest &mdash; getting your comfort ready before the next long stretch of Southwest Florida heat and humidity.</p>
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
<section class="section" aria-label="About our seasonal services">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Overview</span>
            <h2>What do El Dorado&rsquo;s seasonal HVAC services cover in Naples?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling offers five seasonal services for Naples homes: compressor service, fan coil service, thermostat service, combined heating and cooling service, and air duct service. Each targets a component that wears faster under Southwest Florida&rsquo;s near-continuous cooling demand and salt-air exposure.</p>
        </div>
        <div class="ss-benefits">
            <div class="ss-benefit reveal-up"><b>2x</b><span>Recommended seasonal check-ins per year for coastal Collier County systems.</span></div>
            <div class="ss-benefit reveal-up reveal-delay-1"><b>5&ndash;15%</b><span>Typical efficiency regained once a struggling compressor or blower is serviced.</span></div>
            <div class="ss-benefit reveal-up reveal-delay-2"><b>Year-round</b><span>Naples runs cooling most months, so components wear on a faster clock here.</span></div>
        </div>
    </div>
</section>

<!-- ============================= SUB-SERVICE CARDS ============================= -->
<section class="section section--light" aria-label="Seasonal services offered">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>Which <span class="text-accent">seasonal services</span> keep your Naples system heat-ready?</h2>
            <p class="hero-answer">From the compressor to the ductwork, El Dorado Heating &amp; Cooling services the specific parts that determine whether your Naples system coasts through summer or breaks down on the hottest week of the year.</p>
        </div>
        <div class="services-grid">
            <?php $ctints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
            $sPhotos = ['tech-outdoor-unit', 'fleet-trucks', 'team-fleet', 'hero-service-truck', 'tech-outdoor-unit'];
            foreach ($groupServices as $i => $gs):
                $photo = $sPhotos[$i % count($sPhotos)];
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
<section class="section" aria-label="Seasonal service details">
    <div class="container container-narrow">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">In Detail</span>
            <h2>How does each seasonal service protect your Naples system?</h2>
            <p class="answer-block">Each seasonal service targets a component with its own failure pattern in our climate. El Dorado Heating &amp; Cooling explains what we check, why it fails here specifically, and what a service visit catches before it becomes a breakdown.</p>
        </div>
        <?php foreach ($groupServices as $gs): ?>
        <div class="ss-detail__row reveal-up">
            <div class="ss-detail__badge"><?php echo $svg[$gs['icon']]; ?></div>
            <div>
                <h3><?php echo htmlspecialchars($gs['name']); ?></h3>
                <p><?php echo $gs['detail']; ?></p>
                <div class="ss-detail__tags">
                    <?php foreach ($gs['bullets'] as $b): ?><span><?php echo htmlspecialchars($b); ?></span><?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============================= PROCESS ============================= -->
<section class="section section--light" aria-label="Our seasonal service process">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">How It Works</span>
            <h2>What happens during an El Dorado seasonal service visit?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling identifies which components need attention, services them with the right parts and technique for Naples conditions, then confirms performance before we leave &mdash; so you know exactly what was done and why.</p>
        </div>
        <ol class="process-steps reveal-up">
            <li><b>Diagnose First</b><span>We identify which components &mdash; compressor, fan coil, thermostat, ducts &mdash; need service.</span></li>
            <li><b>Prep &amp; Protect</b><span>We stage the right tools and parts and protect the work area before starting.</span></li>
            <li><b>Service Each Part</b><span>Compressor, fan coil, thermostat, or ductwork is serviced to manufacturer spec.</span></li>
            <li><b>Verify Performance</b><span>We test the system under load and confirm it&rsquo;s cooling correctly before we go.</span></li>
        </ol>
    </div>
</section>

<!-- ============================= TRUST (dark) ============================= -->
<section class="section on-dark texture-grain slant-top" aria-label="Why choose El Dorado for seasonal service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="ss-figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck arriving for a seasonal visit in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners trust El Dorado with seasonal service?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. We know which components fail first in coastal heat and humidity because we&rsquo;ve serviced Naples systems through every season, not a generic maintenance checklist.</p>
                <ul class="ss-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Component-specific knowledge</b><p>We know the compressor, fan coil, and duct failure patterns unique to Southwest Florida.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual, local team</b><p>Family-owned since <?php echo $yearEstablished; ?>, the same crew returns season after season.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>24/7 backup</b><p>If a serviced system ever acts up, we&rsquo;re a call away, any hour.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section" aria-label="Seasonal services FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about seasonal HVAC service?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on timing, cost, and what each seasonal service protects.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top ss-cta" aria-label="Schedule seasonal service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Get Ahead Of The Season</span>
            <h2>Ready to get your Naples system serviced before the heat builds?</h2>
            <p>Compressor, fan coil, thermostat, or ductwork &mdash; El Dorado Heating &amp; Cooling will service the parts that matter most before Southwest Florida&rsquo;s next long cooling stretch. Call now or request your free estimate.</p>
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
