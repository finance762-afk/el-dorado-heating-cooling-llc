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
$metaDescription = 'Pre-season AC tune-ups in Naples, FL from El Dorado Heating & Cooling boost efficiency 5-15% and lower summer bills. Same-week scheduling. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/ac-tune-ups/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does an AC tune-up cost in Naples, FL?',
        'a' => 'A single AC tune-up in Naples typically runs $85–$140 for one system. El Dorado Heating & Cooling gives you an upfront price before scheduling, and many customers find the visit pays for itself within a summer or two through lower cooling bills and fewer breakdown calls.',
    ],
    [
        'q' => 'When is the best time to get an AC tune-up in Southwest Florida?',
        'a' => 'El Dorado Heating & Cooling recommends booking a tune-up in early spring, ahead of Naples\' peak cooling season, so your system enters the hottest months already dialed in. Waiting until June or July means competing with every other homeowner for an appointment during our busiest weeks.',
    ],
    [
        'q' => 'What exactly happens during an AC tune-up?',
        'a' => 'A tune-up is a focused, single-visit service: we clean the condenser coil, check refrigerant pressure, tighten electrical connections, test the capacitor and contactor, and confirm the thermostat is calibrated. El Dorado Heating & Cooling finishes by measuring temperature drop across the coil to confirm the system is performing to spec.',
    ],
    [
        'q' => 'Will a tune-up actually lower my electric bill this summer?',
        'a' => 'Often, yes — a system running with a clean coil and correct refrigerant charge doesn\'t have to work as hard to hit your setpoint. El Dorado Heating & Cooling customers typically see a 5–15% efficiency gain after a tune-up, which adds up fast across a Naples cooling season that runs most of the year.',
    ],
    [
        'q' => 'Is a tune-up the same as AC maintenance?',
        'a' => 'Not quite. A tune-up is a single seasonal performance visit focused on efficiency and reliability before cooling season. El Dorado Heating & Cooling\'s ongoing AC maintenance plan bundles two visits a year with a documented service history — a good fit if you want year-round coverage rather than a one-time seasonal check.',
    ],
    [
        'q' => 'Do I need a tune-up if my AC seems to be working fine?',
        'a' => 'Yes, and that\'s actually the best time to schedule one. A tune-up catches a weakening capacitor or a slowly dropping refrigerant charge before it causes a breakdown — most of the emergency calls El Dorado Heating & Cooling gets in July were systems that "seemed fine" a few weeks earlier.',
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
    'alert'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
    'gauge'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'droplets' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'volume'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4.702a.705.705 0 0 0-1.203-.498L6.413 7.587A1.4 1.4 0 0 1 5.416 8H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2.416a1.4 1.4 0 0 1 .997.413l3.383 3.384A.705.705 0 0 0 11 19.298z"/><path d="M16 9a5 5 0 0 1 0 6"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-ac-tune-ups',
    'serviceType' => 'AC Tune-Ups',
    'name'        => 'AC Tune-Ups in Naples, FL',
    'description' => 'Single-visit pre-cooling-season AC tune-ups for Naples, FL homes — coil cleaning, refrigerant checks, and electrical service that boost efficiency 5-15% and lower summer bills.',
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
.svc-breadcrumb { padding: calc(var(--nav-height) + 0.9rem) 0 0; }
.svc-hero { padding-top: 0.75rem; }
.svc-hero .hero-chips { margin-top: 0.4rem; }

/* Problem statement — pull-quote + telltale signs */
.svc-signs { background: var(--color-paper-2); }
.svc-signs__lead { display: grid; grid-template-columns: 1.1fr 1fr; gap: clamp(1.5rem, 4vw, 3.5rem); align-items: center; }
.svc-signs__cards { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.sign-card { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.4rem; display: grid; gap: 0.55rem; align-content: start; }
.sign-card__icon { width: 48px; height: 48px; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-secondary) 16%, transparent); }
.sign-card h3 { font-size: 1.05rem; }
.sign-card p { margin: 0; font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 860px) { .svc-signs__lead, .svc-signs__cards { grid-template-columns: 1fr; } }

/* Expert positioning — stat + copy asymmetric with photo */
.svc-expert .split { align-items: stretch; }
.svc-expert__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.svc-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.svc-expert__stat { display: inline-grid; gap: 0.15rem; padding: 0.9rem 1.1rem; border-left: 3px solid var(--color-accent); background: var(--color-paper-2); border-radius: 0 var(--radius) var(--radius) 0; margin: 0.4rem 0 1.1rem; }
.svc-expert__stat b { font-family: var(--font-accent); font-size: 2rem; line-height: 1; color: var(--color-primary); }
.svc-expert__stat span { font-size: 0.85rem; color: var(--color-muted); }
.svc-diffs { display: grid; gap: 0.9rem; margin-top: 1.25rem; }
.svc-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.svc-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.svc-diffs b { display: block; }
.svc-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

/* Included checklist */
.svc-included__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.7rem 2rem; margin-top: 1.25rem; }
.svc-included__grid li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.95rem; }
.svc-included__grid svg { color: var(--color-accent-dark); margin-top: 1px; }
@media (max-width: 720px) { .svc-included__grid { grid-template-columns: 1fr; } }

/* Comparison table */
.svc-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.compare-col { border-radius: var(--radius-lg); padding: 1.6rem; border: 1px solid var(--color-line); }
.compare-col--them { background: var(--color-surface); }
.compare-col--us { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.compare-col h3 { font-size: 1.15rem; margin-bottom: 1rem; }
.compare-col ul { display: grid; gap: 0.8rem; }
.compare-col li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.93rem; color: var(--color-ink-2); }
.compare-col--them svg { color: var(--color-muted); }
.compare-col--us svg { color: var(--color-primary); }
.compare-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .svc-compare__grid { grid-template-columns: 1fr; } }

/* Final CTA */
.svc-cta .actions .link-call { color: #fff; }
.svc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= BREADCRUMB (on dark hero) ============================= -->
<section class="hero hero--interior svc-hero" aria-label="AC tune-ups in Naples, FL">
    <div class="container">
        <nav class="breadcrumb svc-breadcrumb-nav" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">AC Tune-Ups</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Pre-Season Performance Visit &middot; Naples, FL</span>
                <h1 class="hero-title">AC Tune-Ups in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling&rsquo;s AC tune-up is a focused, single-visit service that boosts efficiency 5&ndash;15% and lowers summer bills &mdash; the fast way to get a Naples system dialed in before cooling demand peaks.</p>
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
<section class="section svc-signs" aria-label="Signs your AC needs a tune-up">
    <div class="container">
        <div class="svc-signs__lead">
            <div class="reveal-left">
                <span class="eyebrow-label">Why It Matters Here</span>
                <p class="pull-quote">An un-tuned system in Naples doesn&rsquo;t just run less efficiently &mdash; it runs longer, in worse conditions, for the same result.</p>
            </div>
            <div class="reveal-right">
                <h2>How do you know your Naples AC is due for a tune-up?</h2>
                <p class="answer-block">If your last tune-up was more than a year ago, your bill has crept up without an obvious cause, or cooling season is approaching, El Dorado Heating &amp; Cooling can get your system dialed in. A tune-up is the quickest way to confirm a Southwest Florida system is ready for its heaviest months of demand.</p>
                <p>Unlike a full maintenance plan, a tune-up is a single, focused visit &mdash; ideal if you just want your system performing at its best before the heat sets in, without committing to an ongoing service schedule.</p>
            </div>
        </div>
        <div class="svc-signs__cards">
            <div class="sign-card reveal-up">
                <div class="sign-card__icon"><?php echo $svg['gauge']; ?></div>
                <h3>Creeping energy bills</h3>
                <p>A slightly under-charged or dirty system loses efficiency gradually, which often goes unnoticed until the tune-up finds it.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-1">
                <div class="sign-card__icon"><?php echo $svg['droplets']; ?></div>
                <h3>Longer cooling cycles</h3>
                <p>If your system runs longer than it used to for the same comfort, a tune-up often restores lost performance fast.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-2">
                <div class="sign-card__icon"><?php echo $svg['volume']; ?></div>
                <h3>New hums or clicks</h3>
                <p>A tune-up tests the capacitor and contactor, the parts most likely to cause the noises that show up before a failure.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-3">
                <div class="sign-card__icon"><?php echo $svg['alert']; ?></div>
                <h3>Cooling season approaching</h3>
                <p>Booking before the rush means your system enters Naples&rsquo; hottest months already checked and calibrated.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section svc-expert" aria-label="Why choose El Dorado for AC tune-ups">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes El Dorado&rsquo;s tune-up different in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling tunes systems for the specific strain of Collier County&rsquo;s near-continuous runtime and coastal humidity. Our family-owned team brings more than 60 years of combined experience and checks the parts most likely to fail first in this climate &mdash; not a generic seasonal checklist.</p>
                <div class="svc-expert__stat">
                    <b>5&ndash;15%</b>
                    <span>Typical efficiency gain reported after a tune-up on a neglected system</span>
                </div>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Performance-focused visit</b><p>We measure temperature drop and refrigerant charge, not just a visual once-over.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Same-week scheduling</b><p>We fit tune-ups in quickly, especially when booked ahead of peak cooling season.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Honest upgrade path</b><p>If your tune-up reveals a bigger issue, we explain it plainly before recommending maintenance or repair.</p></div></li>
                </ul>
            </div>
            <figure class="svc-expert__figure reveal-right" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling fleet parked and ready for tune-up calls in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light svc-included" aria-label="What an AC tune-up includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Visit</span>
            <h2>What&rsquo;s included in an El Dorado AC tune-up?</h2>
            <p class="answer-block">An El Dorado Heating &amp; Cooling tune-up is a focused, single-visit service: we clean, test, and calibrate the components that most directly affect a Naples system&rsquo;s efficiency, then confirm performance improvement before we leave.</p>
        </div>
        <ul class="svc-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Condenser coil cleaning</span></li>
            <li><?php echo $svg['check']; ?><span>Refrigerant pressure and charge check</span></li>
            <li><?php echo $svg['check']; ?><span>Capacitor and contactor test</span></li>
            <li><?php echo $svg['check']; ?><span>Electrical connections tightened</span></li>
            <li><?php echo $svg['check']; ?><span>Thermostat calibration check</span></li>
            <li><?php echo $svg['check']; ?><span>Air filter inspection</span></li>
            <li><?php echo $svg['check']; ?><span>Temperature drop measured across the coil</span></li>
            <li><?php echo $svg['check']; ?><span>Performance summary and recommendations</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado schedule and run a tune-up?</h2>
            <ol class="process-steps">
                <li><b>Book Your Visit</b><span>Call or request an estimate. Tune-ups fill fast just before cooling season, so early booking helps.</span></li>
                <li><b>Focused Service</b><span>A technician runs the tune-up checklist and tests the system under load.</span></li>
                <li><b>Performance Report</b><span>You get a clear before-and-after read on efficiency, with upfront pricing on anything extra.</span></li>
                <li><b>Ready For Summer</b><span>We confirm your home is cooling faster and more efficiently before we go.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top svc-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="svc-expert__figure reveal-left" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician performing an AC tune-up on a Naples home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners book El Dorado for a tune-up?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. Homeowners book us for tune-ups because the visit is fast, honest, and focused on measurable performance &mdash; not an upsell exercise.</p>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>A real local team</b><p>Family-owned since <?php echo $yearEstablished; ?> &mdash; not a rotating cast of subcontractors.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear communication in English and Spanish, so nothing gets lost in translation.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Around-the-clock backup</b><p>If your tuned system ever acts up, we&rsquo;re reachable 24/7.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section svc-compare" aria-label="El Dorado tune-up compared to a quick check">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>What sets a real tune-up apart from a basic filter swap?</h2>
            <p class="answer-block">A real tune-up measures and improves performance &mdash; not just a quick look and a new filter. El Dorado Heating &amp; Cooling delivers the focused service that actually moves the needle on a Naples system&rsquo;s efficiency, backed by a clear performance report.</p>
        </div>
        <div class="svc-compare__grid">
            <div class="compare-col compare-col--them reveal-left">
                <h3>A basic filter swap</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>A filter change and a quick glance</span></li>
                    <li><?php echo $svg['x']; ?><span>No refrigerant or capacitor check</span></li>
                    <li><?php echo $svg['x']; ?><span>No performance measurement</span></li>
                    <li><?php echo $svg['x']; ?><span>No report on what improved</span></li>
                    <li><?php echo $svg['x']; ?><span>A different tech every time</span></li>
                </ul>
            </div>
            <div class="compare-col compare-col--us reveal-right">
                <h3>An El Dorado tune-up</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Coil cleaned, capacitor and contactor tested</span></li>
                    <li><?php echo $svg['check']; ?><span>Refrigerant charge verified against spec</span></li>
                    <li><?php echo $svg['check']; ?><span>Temperature drop measured before and after</span></li>
                    <li><?php echo $svg['check']; ?><span>Clear performance summary, upfront pricing</span></li>
                    <li><?php echo $svg['check']; ?><span>The same local, bilingual team every visit</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light svc-faq" aria-label="AC tune-up FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about AC tune-ups?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, timing, and what a tune-up does versus a maintenance plan.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Schedule an AC tune-up">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Get Ready Before The Heat</span>
            <h2>Ready for a Naples AC tune-up before cooling season peaks?</h2>
            <p>A quick, focused visit now means fewer breakdowns and a lower bill later. Schedule a tune-up with El Dorado Heating &amp; Cooling and get your system performing at its best &mdash; call now or request your free estimate.</p>
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
