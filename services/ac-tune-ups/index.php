<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'ac-tune-ups';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'AC Tune-Ups Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Seasonal AC tune-ups in Naples, FL from El Dorado Heating & Cooling. Get your system efficient and summer-ready before the heat hits. Free estimate — call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/ac-tune-ups/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'When is the best time for an AC tune-up in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling recommends booking your AC tune-up in early spring, before the Naples heat and humidity spike. A pre-summer tune-up gets your system dialed in for the months it works hardest, catches worn parts while it is calm, and helps you avoid the peak-season rush when everyone calls at once.',
    ],
    [
        'q' => 'How is an AC tune-up different from a maintenance plan?',
        'a' => 'El Dorado Heating & Cooling views a tune-up as a single seasonal service that optimizes your system for the season ahead, while a maintenance plan bundles recurring visits across the year. If you want one thorough pre-summer check to restore efficiency and spot problems early, the tune-up is the right call, and you can always move to a plan later.',
    ],
    [
        'q' => 'How much does an AC tune-up cost in Naples?',
        'a' => 'El Dorado Heating & Cooling keeps tune-up pricing straightforward for Naples homeowners, with most single-system visits landing in the $90–$150 range. You get a full multi-point service and an honest report, not a sales pitch. If we find a repair, you get upfront pricing and the choice to move forward or not.',
    ],
    [
        'q' => 'Will a tune-up actually lower my energy bill?',
        'a' => 'Often, yes. A tuned system runs less to reach the same temperature, and El Dorado Heating & Cooling regularly restores 5–15% efficiency by cleaning coils, correcting refrigerant charge, and tightening airflow. Across a Naples cooling season that runs eight or nine months, that recovered efficiency adds up on every FPL bill.',
    ],
    [
        'q' => 'What problems can an AC tune-up catch early?',
        'a' => 'El Dorado Heating & Cooling routinely catches weak capacitors, low refrigerant, dirty coils, loose electrical connections, and clogged drains during a tune-up &mdash; the small issues that become July breakdowns. Finding them in spring means a cheap fix on your schedule instead of an emergency call on the hottest afternoon of the Naples summer.',
    ],
];

// Icon set (inline SVG from references/lucide-icons — no data-lucide, no CDN).
$svg = [
    'phone'    => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check'    => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'x'        => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'sun'      => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
    'gauge'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'wallet'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"/><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"/></svg>',
    'timer'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2h4"/><path d="M12 14v-4"/><path d="M4 13a8 8 0 0 1 8-7 8 8 0 1 1-5.3 14L4 17.6"/><path d="M9 17H4v5"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-ac-tune-ups',
    'serviceType' => 'AC Tune-Ups',
    'name'        => 'AC Tune-Ups in Naples, FL',
    'description' => 'Seasonal air conditioning tune-ups for Naples, FL homes — coil cleaning, refrigerant correction, and a full multi-point efficiency check to get systems summer-ready before the Southwest Florida heat arrives.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(fn($a) => ['@type' => 'City', 'name' => $a['city'] . ', ' . $a['state']], $serviceAreas),
    'url'         => $canonicalUrl,
];
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'AC Tune-Ups', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== AC Tune-Ups page composition (tokens only) ===== */
.tu-hero { padding-top: 0.75rem; }
.tu-hero .hero-chips { margin-top: 0.4rem; }
.tu-breadcrumb-nav { margin-bottom: var(--space-lg); }

/* Problem statement — split copy + stacked benefit rows */
.tu-signs { background: var(--color-paper-2); }
.tu-signs__lead { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(1.5rem, 4vw, 3.5rem); align-items: start; }
.tu-benefits { display: grid; gap: 0.75rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.tu-benefit { display: grid; grid-template-columns: 56px 1fr; gap: 1rem; align-items: center; background: var(--color-surface); border: 1px solid var(--color-line); border-left: 4px solid var(--color-accent); border-radius: var(--radius); padding: 1.1rem 1.3rem; }
.tu-benefit__icon { width: 56px; height: 56px; border-radius: var(--radius-full); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-secondary) 15%, transparent); }
.tu-benefit h3 { font-size: 1.05rem; margin-bottom: 0.15rem; }
.tu-benefit p { margin: 0; font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 860px) { .tu-signs__lead { grid-template-columns: 1fr; } }

/* Expert — copy + photo with efficiency stat strip */
.tu-expert__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.tu-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.tu-statbar { display: flex; flex-wrap: wrap; gap: var(--space-sm); margin: 1rem 0 1.25rem; }
.tu-stat { flex: 1 1 40%; background: var(--color-paper-2); border-radius: var(--radius); padding: 0.9rem 1.1rem; text-align: center; }
.tu-stat b { display: block; font-family: var(--font-accent); font-size: 1.8rem; line-height: 1; color: var(--color-primary); }
.tu-stat span { font-size: 0.78rem; color: var(--color-muted); }
.tu-diffs { display: grid; gap: 0.9rem; margin-top: 0.5rem; }
.tu-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.tu-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.tu-diffs b { display: block; }
.tu-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

/* Service breakdown — checklist card + timeline process */
.tu-included__card { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: clamp(1.5rem, 3vw, 2.25rem); box-shadow: var(--shadow-sm); margin-top: 1.25rem; }
.tu-included__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.7rem 2rem; }
.tu-included__grid li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.95rem; }
.tu-included__grid svg { color: var(--color-accent-dark); margin-top: 1px; }
.tu-timeline { display: grid; gap: 0; margin-top: 1.25rem; border-left: 2px solid var(--color-line); padding-left: var(--space-lg); }
.tu-timeline li { list-style: none; position: relative; padding-bottom: var(--space-lg); }
.tu-timeline li:last-child { padding-bottom: 0; }
.tu-timeline li::before { content: ""; position: absolute; left: calc(-1 * var(--space-lg) - 6px); top: 4px; width: 12px; height: 12px; border-radius: var(--radius-full); background: var(--color-accent); box-shadow: 0 0 0 4px color-mix(in srgb, var(--color-accent) 25%, transparent); }
.tu-timeline b { display: block; font-size: 1.02rem; }
.tu-timeline span { font-size: 0.9rem; color: var(--color-ink-2); }
@media (max-width: 720px) { .tu-included__grid { grid-template-columns: 1fr; } }

/* Trust dark band */
.tu-trust__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.tu-trust__figure img { width: 100%; height: 100%; object-fit: cover; }

/* Comparison */
.tu-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.tu-col { border-radius: var(--radius-lg); padding: 1.6rem; border: 1px solid var(--color-line); }
.tu-col--them { background: var(--color-surface); }
.tu-col--us { background: color-mix(in srgb, var(--color-secondary) 10%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-secondary) 34%, var(--color-line)); }
.tu-col h3 { font-size: 1.15rem; margin-bottom: 1rem; }
.tu-col ul { display: grid; gap: 0.8rem; }
.tu-col li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.93rem; color: var(--color-ink-2); }
.tu-col--them svg { color: var(--color-muted); }
.tu-col--us svg { color: var(--color-primary); }
.tu-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .tu-compare__grid { grid-template-columns: 1fr; } }

.tu-cta .actions .link-call { color: var(--color-white); }
.tu-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior tu-hero" aria-label="AC tune-ups in Naples, FL">
    <div class="container">
        <nav class="breadcrumb tu-breadcrumb-nav" aria-label="Breadcrumb" style="font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">AC Tune-Ups</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Seasonal Efficiency Check &middot; Naples, FL</span>
                <h1 class="hero-title">AC <span class="text-accent">Tune-Ups in Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling gets your air conditioner summer-ready with a seasonal tune-up &mdash; a full multi-point service that restores efficiency, lowers your bill, and catches small problems before the Naples heat turns them into a July breakdown.</p>
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

<!-- ============================= PROBLEM STATEMENT ============================= -->
<section class="section tu-signs" aria-label="Why a seasonal AC tune-up matters">
    <div class="container">
        <div class="tu-signs__lead">
            <div class="reveal-left">
                <span class="eyebrow-label">Beat The Heat</span>
                <p class="pull-quote">The best time to fix your AC in Naples is the day before summer &mdash; not the 95-degree afternoon it finally quits.</p>
            </div>
            <div class="reveal-right">
                <h2>Why does a seasonal AC tune-up matter in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling tunes your system before the season it works hardest, so it runs efficiently through eight or nine months of demand. A spring tune-up restores lost efficiency, trims your bill, and surfaces worn parts while repairs are still cheap and your comfort is not on the line.</p>
                <p>Southwest Florida runs the compressor far longer than a northern home. A system that limped through last summer rarely gets better on its own &mdash; a tune-up resets it for the heat ahead.</p>
            </div>
        </div>
        <div class="tu-benefits">
            <div class="tu-benefit reveal-up">
                <div class="tu-benefit__icon"><?php echo $svg['gauge']; ?></div>
                <div><h3>Restored efficiency</h3><p>Clean coils and correct refrigerant charge let your system reach setpoint with less runtime &mdash; often a 5&ndash;15% efficiency gain.</p></div>
            </div>
            <div class="tu-benefit reveal-up reveal-delay-1">
                <div class="tu-benefit__icon"><?php echo $svg['wallet']; ?></div>
                <div><h3>Lower summer bills</h3><p>A tuned system does the same cooling for fewer kilowatt-hours &mdash; real savings over a long Naples cooling season.</p></div>
            </div>
            <div class="tu-benefit reveal-up reveal-delay-2">
                <div class="tu-benefit__icon"><?php echo $svg['timer']; ?></div>
                <div><h3>Problems caught early</h3><p>A weak capacitor or clogged drain found in spring is a quick fix &mdash; not a no-cooling emergency in July.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section tu-expert" aria-label="Why choose El Dorado for your AC tune-up">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes El Dorado&rsquo;s tune-up worth booking in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling tunes systems for the exact demands of Collier County &mdash; relentless runtime, tropical humidity, and salt-air corrosion. Our family-owned team brings more than 60 years of combined experience and measures real performance, so you get proof your system is ready, not a rushed sticker on the panel.</p>
                <div class="tu-statbar">
                    <div class="tu-stat"><b>60+ yrs</b><span>Combined HVAC experience</span></div>
                    <div class="tu-stat"><b>5&ndash;15%</b><span>Typical efficiency restored</span></div>
                </div>
                <ul class="tu-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Measured, not guessed</b><p>We check temperature split and refrigerant charge and show you the numbers before and after.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Honest report</b><p>You get a clear rundown of what&rsquo;s healthy and what to watch &mdash; with no-pressure pricing on any repair.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Everything explained clearly in English or Spanish, so nothing gets lost.</p></div></li>
                </ul>
            </div>
            <figure class="tu-expert__figure reveal-right">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician tuning up an outdoor AC unit at a Naples home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light tu-included" aria-label="What an AC tune-up includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Tune-Up</span>
            <h2>What&rsquo;s included in an El Dorado AC tune-up?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling runs a complete multi-point service on every tune-up: we clean, test, and calibrate the parts that drive efficiency, correct the refrigerant charge, and confirm your Naples system is cooling properly and ready for summer before we leave.</p>
        </div>
        <div class="tu-included__card reveal-up">
            <ul class="tu-included__grid">
                <li><?php echo $svg['check']; ?><span>Condenser and evaporator coil cleaning</span></li>
                <li><?php echo $svg['check']; ?><span>Refrigerant charge measured and corrected</span></li>
                <li><?php echo $svg['check']; ?><span>Temperature split checked at the vents</span></li>
                <li><?php echo $svg['check']; ?><span>Capacitor and contactor tested for wear</span></li>
                <li><?php echo $svg['check']; ?><span>Electrical connections tightened</span></li>
                <li><?php echo $svg['check']; ?><span>Condensate drain flushed and cleared</span></li>
                <li><?php echo $svg['check']; ?><span>Thermostat calibrated and tested</span></li>
                <li><?php echo $svg['check']; ?><span>Airflow and filter checked and advised</span></li>
            </ul>
        </div>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does an El Dorado tune-up appointment go?</h2>
            <ol class="tu-timeline">
                <li><b>Book Before The Heat</b><span>Call or request an estimate in spring and we&rsquo;ll set a time that fits &mdash; often the same week.</span></li>
                <li><b>Full Multi-Point Service</b><span>A technician cleans, tests, and calibrates the system and measures its real performance.</span></li>
                <li><b>Honest Report</b><span>You get the numbers and a plain-language rundown &mdash; what&rsquo;s ready and what to watch, with upfront pricing.</span></li>
                <li><b>Summer-Ready</b><span>We confirm your home is cooling to setpoint and leave the work area clean.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top tu-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="tu-trust__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="The El Dorado Heating &amp; Cooling team with their service fleet in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners choose El Dorado for their tune-up?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. Homeowners trust us with their tune-up because the same local team returns each spring, gives straight answers, and picks up 24/7 if the system ever falters mid-season.</p>
                <ul class="tu-diffs">
                    <li><?php echo $svg['check']; ?><div><b>A real local team</b><p>Family-owned since <?php echo $yearEstablished; ?> &mdash; not a rotating cast of subcontractors.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear communication in English and Spanish on every visit.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>24/7 backup</b><p>If your system quits between visits, we&rsquo;re reachable around the clock.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section tu-compare" aria-label="El Dorado tune-up compared to a cheap tune-up">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>What makes a real tune-up worth more than a bargain special?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling measures performance and corrects it &mdash; a cheap special just glances at the unit and moves on. That difference is what actually restores efficiency, catches the failing part, and gets your Naples system genuinely ready for a long summer.</p>
        </div>
        <div class="tu-compare__grid">
            <div class="tu-col tu-col--them reveal-left">
                <h3>A bargain &ldquo;$39 special&rdquo;</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>A quick look and a filter glance, in and out</span></li>
                    <li><?php echo $svg['x']; ?><span>No refrigerant charge measured or corrected</span></li>
                    <li><?php echo $svg['x']; ?><span>Coils left dirty, efficiency untouched</span></li>
                    <li><?php echo $svg['x']; ?><span>Built to upsell, not to fix what&rsquo;s failing</span></li>
                    <li><?php echo $svg['x']; ?><span>No real numbers, no honest report</span></li>
                </ul>
            </div>
            <div class="tu-col tu-col--us reveal-right">
                <h3>El Dorado tune-up</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Full multi-point service, measured performance</span></li>
                    <li><?php echo $svg['check']; ?><span>Refrigerant charge checked and corrected</span></li>
                    <li><?php echo $svg['check']; ?><span>Coils cleaned to restore efficiency</span></li>
                    <li><?php echo $svg['check']; ?><span>Worn parts flagged with upfront pricing</span></li>
                    <li><?php echo $svg['check']; ?><span>A clear before-and-after report you keep</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light tu-faq" aria-label="AC tune-up FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about AC tune-ups?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on timing, cost, savings, and what a seasonal tune-up catches early.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top tu-cta" aria-label="Schedule your AC tune-up">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Get Ahead Of Summer</span>
            <h2>Ready to get your Naples AC tuned before the heat sets in?</h2>
            <p>Beat the peak-season rush and the surprise breakdown. Book a seasonal tune-up with El Dorado Heating &amp; Cooling and head into summer with an efficient, reliable system &mdash; call now or request your free estimate.</p>
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
