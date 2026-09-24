<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'ac-maintenance';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'AC Maintenance Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Preventive AC maintenance in Naples, FL from El Dorado Heating & Cooling. Twice-yearly tune-ups built for Florida heat, humidity, and salt air. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/ac-maintenance/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does an AC maintenance visit cost in Naples, FL?',
        'a' => 'Most single-system maintenance visits in Naples run in the $90–$150 range, and El Dorado Heating & Cooling offers annual plans that bundle two visits at a lower per-visit price. Because Southwest Florida systems run nearly year-round, that spend usually pays for itself in efficiency and avoided emergency repairs.',
    ],
    [
        'q' => 'How often should AC maintenance be done in Southwest Florida?',
        'a' => 'El Dorado Heating & Cooling recommends professional AC maintenance twice a year in the Naples area — once before cooling season in spring and again in the fall. Our climate runs the compressor far more hours than northern homes, so a single annual visit rarely keeps a coastal system in top shape.',
    ],
    [
        'q' => 'What does an El Dorado AC maintenance visit include?',
        'a' => 'A visit covers a full system inspection, coil cleaning, refrigerant-level check, electrical connection tightening, thermostat calibration, condensate drain clearing, and a filter change or recommendation. We finish by confirming your home is cooling to setpoint and flag any part showing early wear before it fails in the heat.',
    ],
    [
        'q' => 'Will maintenance really lower my electric bill in Naples?',
        'a' => 'Often, yes. A dirty coil or low refrigerant forces the system to run longer for the same comfort. A tuned system from El Dorado Heating & Cooling can improve efficiency by roughly 5–15%, which is meaningful when you cool a Naples home through eight or nine months of demand each year.',
    ],
    [
        'q' => 'Does regular maintenance protect my manufacturer warranty?',
        'a' => 'It can. Most HVAC manufacturers require documented annual professional maintenance to keep the parts warranty valid. El Dorado Heating & Cooling keeps a service record for every visit, so if you ever need a warranty claim you have the paperwork to back it up.',
    ],
];

// Icon set (inline SVG from references/lucide-icons — inline SVG, no runtime injection).
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
    '@id'         => $canonicalUrl . '#service-ac-maintenance',
    'serviceType' => 'AC Maintenance',
    'name'        => 'AC Maintenance in Naples, FL',
    'description' => 'Twice-yearly preventive air conditioning maintenance for Naples, FL homes — coil cleaning, refrigerant checks, electrical service, and drain clearing built for Southwest Florida heat, humidity, and salt air.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'AC Maintenance', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== AC Maintenance page composition (tokens only) ===== */
.svc-breadcrumb { padding: calc(var(--nav-height) + 0.9rem) 0 0; }
.svc-breadcrumb .breadcrumb { font-size: 0.85rem; color: color-mix(in srgb, var(--color-white) 70%, transparent); }
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
.svc-cta .actions .link-call { color: var(--color-white); }
.svc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= BREADCRUMB (on dark hero) ============================= -->
<section class="hero hero--interior svc-hero" aria-label="AC maintenance in Naples, FL">
    <div class="container">
        <nav class="breadcrumb svc-breadcrumb-nav" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">AC Maintenance</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Preventive HVAC Care &middot; Naples, FL</span>
                <h1 class="hero-title">AC Maintenance in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling keeps Naples air conditioners running through Florida&rsquo;s brutal cooling season with twice-yearly maintenance &mdash; coil cleaning, refrigerant checks, and electrical service tuned for local heat, humidity, and coastal salt air.</p>
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
<section class="section svc-signs" aria-label="Signs your AC needs maintenance">
    <div class="container">
        <div class="svc-signs__lead">
            <div class="reveal-left">
                <span class="eyebrow-label">Why It Matters Here</span>
                <p class="pull-quote">In Naples, an AC system does the work of two &mdash; skipping maintenance is how a $200 fix becomes a $2,000 breakdown in July.</p>
            </div>
            <div class="reveal-right">
                <h2>How do you know your Naples AC needs maintenance?</h2>
                <p class="answer-block">If your system is short-cycling, blowing warm, running up your bill, or you simply haven&rsquo;t had it serviced in over a year, El Dorado Heating &amp; Cooling should take a look. Southwest Florida&rsquo;s constant cooling load and salt air wear systems faster, so small issues escalate quickly in our climate.</p>
                <p>Most breakdowns we&rsquo;re called out for on the hottest days were preventable &mdash; a clogged drain, a dirty coil, or a weak capacitor that showed warning signs weeks earlier. A scheduled visit catches those problems while they&rsquo;re still cheap.</p>
            </div>
        </div>
        <div class="svc-signs__cards">
            <div class="sign-card reveal-up">
                <div class="sign-card__icon"><?php echo $svg['gauge']; ?></div>
                <h3>Climbing energy bills</h3>
                <p>A neglected system runs longer to hit the same temperature, quietly driving up your FPL bill month after month.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-1">
                <div class="sign-card__icon"><?php echo $svg['droplets']; ?></div>
                <h3>Weak airflow or humidity</h3>
                <p>Rooms that feel damp or never quite cool point to dirty coils, a clogged drain, or low refrigerant.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-2">
                <div class="sign-card__icon"><?php echo $svg['volume']; ?></div>
                <h3>New noises or cycling</h3>
                <p>Rattles, buzzing, or a system that clicks on and off constantly are early warnings of a part on its way out.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-3">
                <div class="sign-card__icon"><?php echo $svg['alert']; ?></div>
                <h3>Over a year since service</h3>
                <p>Coastal systems should be checked twice a year. If it&rsquo;s been longer, corrosion and buildup are already at work.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section svc-expert" aria-label="Why choose El Dorado for AC maintenance">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes El Dorado&rsquo;s maintenance different in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling maintains systems for the specific demands of Collier County &mdash; near-continuous runtime, tropical humidity, and salt-air corrosion. Our family-owned team brings more than 60 years of combined experience and inspects the parts that actually fail early in this environment, not a generic checklist.</p>
                <div class="svc-expert__stat">
                    <b>60+ yrs</b>
                    <span>Combined HVAC experience on Southwest Florida systems</span>
                </div>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Salt-air corrosion checks</b><p>We inspect condenser coils and electrical contacts for the early corrosion that shortens coastal equipment life.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Humidity-first tuning</b><p>We dial in airflow and drainage so your home feels cool and dry, not cold and clammy.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Documented service record</b><p>Every visit is logged, protecting your manufacturer warranty and tracking your system&rsquo;s health over time.</p></div></li>
                </ul>
            </div>
            <figure class="svc-expert__figure reveal-right" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician servicing an outdoor AC condenser at a Naples home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light svc-included" aria-label="What AC maintenance includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Visit</span>
            <h2>What&rsquo;s included in an AC maintenance visit?</h2>
            <p class="answer-block">Every El Dorado Heating &amp; Cooling maintenance visit is a full multi-point service: we clean, test, and calibrate the parts that keep a Naples system efficient and reliable, then confirm your home is cooling properly before we leave.</p>
        </div>
        <ul class="svc-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Full system inspection, indoor and outdoor</span></li>
            <li><?php echo $svg['check']; ?><span>Condenser and evaporator coil cleaning</span></li>
            <li><?php echo $svg['check']; ?><span>Refrigerant level and pressure check</span></li>
            <li><?php echo $svg['check']; ?><span>Electrical connections tightened and tested</span></li>
            <li><?php echo $svg['check']; ?><span>Capacitor and contactor wear check</span></li>
            <li><?php echo $svg['check']; ?><span>Condensate drain flush and clearing</span></li>
            <li><?php echo $svg['check']; ?><span>Thermostat calibration and test</span></li>
            <li><?php echo $svg['check']; ?><span>Air filter change or recommendation</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado schedule and run maintenance?</h2>
            <ol class="process-steps">
                <li><b>Book Your Visit</b><span>Call or request an estimate. We&rsquo;ll set a time that fits your schedule, often same week.</span></li>
                <li><b>Full Inspection</b><span>A technician runs the complete multi-point service and tests the system under load.</span></li>
                <li><b>Clear Recommendations</b><span>You get an honest report &mdash; what&rsquo;s healthy, what to watch, and any repair, with upfront pricing.</span></li>
                <li><b>Comfort Confirmed</b><span>We verify your home is cooling to setpoint and leave the work area clean.</span></li>
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
                    <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="The El Dorado Heating &amp; Cooling team with their service fleet in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners keep El Dorado on the calendar?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. Homeowners stick with us because the same trusted team returns each season, knows their system, and answers the phone 24/7 when something goes wrong.</p>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>A real local team</b><p>Family-owned since <?php echo $yearEstablished; ?> &mdash; not a rotating cast of subcontractors.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear communication in English and Spanish, so nothing gets lost in translation.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Around-the-clock backup</b><p>Maintenance customers reach us 24/7 if a system ever falters between visits.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section svc-compare" aria-label="El Dorado maintenance compared to typical service">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>What sets a real maintenance plan apart from a quick check?</h2>
            <p class="answer-block">A true maintenance visit protects efficiency, warranty, and system life &mdash; not just a filter swap. El Dorado Heating &amp; Cooling delivers the full service Southwest Florida systems need, with documentation and honest recommendations behind every visit.</p>
        </div>
        <div class="svc-compare__grid">
            <div class="compare-col compare-col--them reveal-left">
                <h3>A typical &ldquo;tune-up&rdquo;</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>A quick look and a filter change, in and out</span></li>
                    <li><?php echo $svg['x']; ?><span>No coil cleaning or drain flush</span></li>
                    <li><?php echo $svg['x']; ?><span>No written record for your warranty</span></li>
                    <li><?php echo $svg['x']; ?><span>Upsells you don&rsquo;t need, problems you do missed</span></li>
                    <li><?php echo $svg['x']; ?><span>A different tech &mdash; or company &mdash; every time</span></li>
                </ul>
            </div>
            <div class="compare-col compare-col--us reveal-right">
                <h3>El Dorado maintenance</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Full multi-point service, indoor and outdoor</span></li>
                    <li><?php echo $svg['check']; ?><span>Coils cleaned, drain flushed, refrigerant checked</span></li>
                    <li><?php echo $svg['check']; ?><span>Documented visit that protects your warranty</span></li>
                    <li><?php echo $svg['check']; ?><span>Honest recommendations and upfront pricing</span></li>
                    <li><?php echo $svg['check']; ?><span>The same local, bilingual team season after season</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light svc-faq" aria-label="AC maintenance FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about AC maintenance?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, timing, and what a real maintenance visit protects.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Schedule AC maintenance">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Stay Ahead Of The Heat</span>
            <h2>Ready to get your Naples AC ready before the next heat wave?</h2>
            <p>Don&rsquo;t wait for a breakdown on a 95-degree afternoon. Schedule maintenance with El Dorado Heating &amp; Cooling and keep your system efficient, reliable, and under warranty &mdash; call now or request your free estimate.</p>
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
