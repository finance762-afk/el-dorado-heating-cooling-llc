<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'energy-audits';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Home Energy Audits Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Home energy audits in Naples, FL from El Dorado Heating & Cooling. A diagnostic assessment that finds efficiency losses and lowers your utility bill. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/energy-audits/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'What is a home energy audit and what does El Dorado check?',
        'a' => 'El Dorado Heating & Cooling\'s home energy audit is a room-by-room diagnostic of where your Naples home wastes energy. We assess duct leakage, insulation levels, HVAC sizing and performance, thermostat settings, and air infiltration around windows and doors. You receive a prioritized report showing which fixes will lower your bill the most, ranked by cost and payback.',
    ],
    [
        'q' => 'How much does an energy audit cost in Naples?',
        'a' => 'El Dorado Heating & Cooling prices energy audits based on the size and layout of your Naples home, and the fee is modest compared to the utility savings a good audit uncovers. Many homeowners find the audit pays for itself once duct leaks and insulation gaps are sealed. We give you the exact price upfront before any work begins.',
    ],
    [
        'q' => 'Will an energy audit really lower my utility bill?',
        'a' => 'El Dorado Heating & Cooling designs every audit to find real, fixable savings — the sealed duct, the added insulation, the right-sized system that stops overcooling. In Southwest Florida, where air conditioning drives most of a home\'s electric use, closing those gaps often makes a clear difference on your monthly bill through the long cooling season.',
    ],
    [
        'q' => 'How long does an energy audit take?',
        'a' => 'El Dorado Heating & Cooling typically completes a home energy audit in a few hours, depending on the size of your Naples home. We inspect the attic, ductwork, insulation, HVAC equipment, and key rooms, then sit down with you to explain the findings. You leave with a written, prioritized plan rather than a vague list of suggestions.',
    ],
    [
        'q' => 'What should I do with the audit results?',
        'a' => 'El Dorado Heating & Cooling hands you a prioritized action plan, so you can tackle the highest-impact fixes first — usually duct sealing, insulation, or an HVAC adjustment. You can have our licensed team handle the work, phase it over time, or use the report on your own. There is no pressure; the plan is yours to keep.',
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
    'gauge'    => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'home'     => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'wind'     => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'droplets' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-energy-audits',
    'serviceType' => 'Home Energy Audit',
    'name'        => 'Energy Audits in Naples, FL',
    'description' => 'Whole-home energy audits for Naples, FL homes — a diagnostic assessment of duct leakage, insulation, HVAC sizing, and thermostat calibration that produces a prioritized plan to cut utility bills in Southwest Florida.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Energy Audits', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Energy Audits page composition (tokens only) ===== */
.ea-hero { padding-top: var(--space-3); }
.ea-hero .hero-chips { margin-top: var(--space-2); }

/* Problem — 2-col lead (copy + pull-quote) then 2x2 icon-left cards */
.ea-signs { background: var(--color-paper-2); }
.ea-signs__lead { display: grid; grid-template-columns: 1.25fr 1fr; gap: var(--space-10); align-items: start; }
.ea-signs__quote { border-left: 3px solid var(--color-secondary); padding-left: var(--space-5); }
.ea-signs__quote .pull-quote { margin: 0; }
.ea-signs__cards { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-4); margin-top: var(--space-8); }
.ea-sign { display: grid; grid-template-columns: auto 1fr; gap: var(--space-4); align-items: start; background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-5); }
.ea-sign__icon { width: 44px; height: 44px; flex: none; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-secondary); background: color-mix(in srgb, var(--color-secondary) 14%, transparent); }
.ea-sign h3 { font-size: var(--fs-body); margin-bottom: var(--space-1); }
.ea-sign p { margin: 0; font-size: var(--fs-small); color: var(--color-ink-2); }
@media (max-width: 860px) { .ea-signs__lead, .ea-signs__cards { grid-template-columns: 1fr; } }

/* Expert — copy left, figure right, underlined inline stat */
.ea-expert .split { grid-template-columns: 1.1fr 1fr; align-items: stretch; }
.ea-expert__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.ea-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.ea-stat { display: block; margin: var(--space-4) 0 var(--space-5); padding-bottom: var(--space-3); border-bottom: 2px solid var(--color-secondary); }
.ea-stat b { font-family: var(--font-accent); font-size: var(--font-size-4xl); line-height: 1; color: var(--color-primary); margin-right: var(--space-3); }
.ea-stat span { font-size: var(--fs-small); color: var(--color-muted); }
.ea-diffs { display: grid; gap: var(--space-4); }
.ea-diffs li { display: grid; grid-template-columns: auto 1fr; gap: var(--space-3); align-items: start; }
.ea-diffs svg { color: var(--color-secondary); }
.ea-diffs b { display: block; }
.ea-diffs p { margin: var(--space-1) 0 0; font-size: var(--fs-small); color: var(--color-ink-2); }
@media (max-width: 860px) { .ea-expert .split { grid-template-columns: 1fr; } }

/* Included — 2-col checklist + process */
.ea-included__grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3) var(--space-8); margin-top: var(--space-6); }
.ea-included__grid li { display: grid; grid-template-columns: auto 1fr; gap: var(--space-3); align-items: start; font-size: var(--fs-body); }
.ea-included__grid svg { color: var(--color-secondary); }
.ea-process { margin-top: var(--space-10); }
@media (max-width: 720px) { .ea-included__grid { grid-template-columns: 1fr; } }

/* Trust dark */
.ea-trust__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.ea-trust__figure img { width: 100%; height: 100%; object-fit: cover; }
.ea-trust .ea-diffs svg { color: var(--color-accent-bright); }

/* Comparison — header-band columns */
.ea-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-5); margin-top: var(--space-8); }
.ea-col { border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-line); }
.ea-col__head { padding: var(--space-4) var(--space-5); font-family: var(--font-heading); font-size: var(--fs-h3); }
.ea-col--them .ea-col__head { background: var(--color-paper-2); color: var(--color-ink-2); }
.ea-col--us .ea-col__head { background: var(--color-primary); color: var(--color-white); }
.ea-col ul { display: grid; gap: var(--space-3); padding: var(--space-5); }
.ea-col li { display: grid; grid-template-columns: auto 1fr; gap: var(--space-3); align-items: start; font-size: var(--fs-small); color: var(--color-ink-2); }
.ea-col--them svg { color: var(--color-muted); }
.ea-col--us svg { color: var(--color-primary); }
.ea-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .ea-compare__grid { grid-template-columns: 1fr; } }

.ea-cta .actions .link-call { color: var(--color-white); }
.ea-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior ea-hero" aria-label="Home energy audits in Naples, FL">
    <div class="container">
        <nav class="breadcrumb ea-bc" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Energy Audits</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Whole-Home Diagnostics &middot; Naples, FL</span>
                <h1 class="hero-title">Energy Audits in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling runs whole-home energy audits across Naples that pinpoint exactly where your comfort and dollars are leaking &mdash; duct leaks, insulation gaps, an oversized system, or a miscalibrated thermostat. You walk away with a clear, prioritized plan to cut your utility bill instead of guesswork.</p>
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
<section class="section ea-signs" aria-label="Why your Naples electric bill is high">
    <div class="container">
        <div class="ea-signs__lead">
            <div class="reveal-left">
                <span class="eyebrow-label">Where The Money Goes</span>
                <h2>Why is your Naples electric bill higher than it should be?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling finds the same hidden culprits in Naples homes: ductwork leaking cooled air into the attic, thin or settled insulation, and HVAC systems that are oversized or poorly calibrated. Each one quietly forces your AC to run longer and harder, and you pay for it every month on your electric bill.</p>
                <p>As a licensed Florida HVAC contractor based in Naples serving Bonita Springs and Marco Island, we don&rsquo;t guess at the problem &mdash; we measure it. An energy audit replaces the annual bill-shock guessing game across Collier County with hard data on where your home is losing energy.</p>
            </div>
            <div class="ea-signs__quote reveal-right">
                <p class="pull-quote">Most homeowners are cooling the attic, the ductwork, and the outdoors &mdash; and paying for all three. An audit shows you exactly which one to fix first.</p>
            </div>
        </div>
        <div class="ea-signs__cards">
            <div class="ea-sign reveal-up">
                <div class="ea-sign__icon"><?php echo $svg['home']; ?></div>
                <div><h3>Rooms that never match</h3><p>Some rooms stay hot while others freeze &mdash; a classic sign of duct or insulation problems.</p></div>
            </div>
            <div class="ea-sign reveal-up reveal-delay-1">
                <div class="ea-sign__icon"><?php echo $svg['gauge']; ?></div>
                <div><h3>Bills that keep climbing</h3><p>Utility costs creeping up year over year usually mean growing efficiency losses somewhere.</p></div>
            </div>
            <div class="ea-sign reveal-up reveal-delay-2">
                <div class="ea-sign__icon"><?php echo $svg['wind']; ?></div>
                <div><h3>An AC that never rests</h3><p>A system running almost constantly is often oversized or fighting air leaks throughout the home.</p></div>
            </div>
            <div class="ea-sign reveal-up reveal-delay-3">
                <div class="ea-sign__icon"><?php echo $svg['droplets']; ?></div>
                <div><h3>Drafts and humidity</h3><p>Stuffy, humid, or drafty rooms point to air leaking in and your cooled air leaking out.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section ea-expert" aria-label="Why choose El Dorado for an energy audit">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes an El Dorado energy audit worth it in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling audits your home as a complete system, not a checklist of parts. Our family-owned team brings more than 60 years of combined experience and reads how your ductwork, insulation, thermostat, and HVAC equipment interact, so the recommendations actually move the needle on a Naples utility bill.</p>
                <div class="ea-stat">
                    <b>60+ yrs</b>
                    <span>Combined HVAC experience diagnosing Southwest Florida homes</span>
                </div>
                <ul class="ea-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Data, not guesswork</b><p>We measure duct leakage, temperatures, and airflow instead of estimating from the curb.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Prioritized by payback</b><p>Every recommendation is ranked so you fix the biggest savings first.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>No-pressure reporting</b><p>The plan is yours to keep, whether or not you hire us for the work.</p></div></li>
                </ul>
            </div>
            <figure class="ea-expert__figure reveal-right" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician inspecting an outdoor AC unit during a Naples energy audit" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light ea-included" aria-label="What an energy audit includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Assessment</span>
            <h2>What&rsquo;s included in an El Dorado energy audit?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling&rsquo;s audit covers the whole home: we inspect ductwork, insulation, HVAC sizing and performance, thermostat calibration, and air leakage, then translate the findings into a written, prioritized plan built for your Naples home and budget.</p>
        </div>
        <ul class="ea-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Whole-home walkthrough, room by room</span></li>
            <li><?php echo $svg['check']; ?><span>Duct leakage and airflow inspection</span></li>
            <li><?php echo $svg['check']; ?><span>Attic insulation depth and coverage check</span></li>
            <li><?php echo $svg['check']; ?><span>HVAC sizing and performance review</span></li>
            <li><?php echo $svg['check']; ?><span>Thermostat calibration and settings review</span></li>
            <li><?php echo $svg['check']; ?><span>Air infiltration check at windows and doors</span></li>
            <li><?php echo $svg['check']; ?><span>Humidity and comfort assessment</span></li>
            <li><?php echo $svg['check']; ?><span>Written, prioritized savings plan</span></li>
        </ul>

        <div class="ea-process">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does an El Dorado energy audit work?</h2>
            <ol class="process-steps">
                <li><b>Book Your Audit</b><span>Call or request an estimate and we schedule a visit that fits your day.</span></li>
                <li><b>Full Diagnostic</b><span>We inspect ducts, insulation, HVAC, and airflow throughout your home.</span></li>
                <li><b>Prioritized Report</b><span>You get a ranked plan showing the highest-impact fixes and their payback.</span></li>
                <li><b>Fix Or Phase It</b><span>Have us do the work, phase it over time, or take the plan and run with it.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top ea-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="ea-trust__figure reveal-left" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck arriving for a home energy audit in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners trust El Dorado to find the savings?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. Homeowners trust our audits because we show our work &mdash; real measurements, honest priorities, and a plan you can act on with any contractor, not just us.</p>
                <ul class="ea-diffs">
                    <li><?php echo $svg['check']; ?><div><b>A real local team</b><p>Family-owned since <?php echo $yearEstablished; ?> &mdash; the same people who read your home read your report.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear explanations in English and Spanish, so the findings actually make sense.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Backed 24/7</b><p>Emergency HVAC service any hour if your system ever leaves you in the heat.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section ea-compare" aria-label="Energy audit compared to a free AC quote">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>How is a real energy audit different from a free AC quote?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling&rsquo;s energy audit diagnoses your whole home before anyone talks equipment. A typical free quote sizes a new unit and moves on; an audit finds the leaks, gaps, and settings costing you money now, so you fix the real problem instead of buying around it.</p>
        </div>
        <div class="ea-compare__grid">
            <div class="ea-col ea-col--them reveal-left">
                <div class="ea-col__head">A quick free quote</div>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Focuses on selling a new unit</span></li>
                    <li><?php echo $svg['x']; ?><span>Skips duct, insulation, and air leaks</span></li>
                    <li><?php echo $svg['x']; ?><span>No measurements, just an eyeball estimate</span></li>
                    <li><?php echo $svg['x']; ?><span>One-size recommendation for every home</span></li>
                    <li><?php echo $svg['x']; ?><span>Nothing in writing to act on later</span></li>
                </ul>
            </div>
            <div class="ea-col ea-col--us reveal-right">
                <div class="ea-col__head">El Dorado energy audit</div>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Diagnoses the whole home first</span></li>
                    <li><?php echo $svg['check']; ?><span>Measures duct leakage, insulation, and airflow</span></li>
                    <li><?php echo $svg['check']; ?><span>Ranks fixes by savings and payback</span></li>
                    <li><?php echo $svg['check']; ?><span>A plan tailored to your Naples home</span></li>
                    <li><?php echo $svg['check']; ?><span>A written report that is yours to keep</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light ea-faq" aria-label="Energy audit FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about energy audits?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on what an audit checks, what it costs, and what you do with the results.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top ea-cta" aria-label="Schedule a home energy audit">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Turn A Mystery Bill Into A Plan</span>
            <h2>Ready to stop guessing why your Naples bill is so high?</h2>
            <p>An energy audit turns a mystery bill into a clear plan you control. Ask El Dorado Heating &amp; Cooling for a whole-home assessment and find out exactly where your Naples home is losing energy &mdash; then fix what matters most. Call now or request your free estimate.</p>
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
