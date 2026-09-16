<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'rooftop-air-conditioners';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Rooftop Air Conditioners Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Commercial rooftop AC install, repair, and maintenance in Naples, FL from El Dorado Heating & Cooling. Package units built for coastal heat. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/rooftop-air-conditioners/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does rooftop AC repair or replacement cost in Naples?',
        'a' => 'A rooftop package unit repair in Naples commonly runs $200–$900 depending on the part, while a full unit replacement typically falls between $6,000 and $16,000 depending on tonnage and building access. El Dorado Heating & Cooling inspects your unit on site and gives you a clear, written number before any work begins.',
    ],
    [
        'q' => 'How often should a commercial rooftop unit be serviced in Southwest Florida?',
        'a' => 'El Dorado Heating & Cooling recommends quarterly checks for Naples rooftop units, more frequent than the twice-yearly schedule for residential systems. Roof-mounted equipment takes direct sun, salt air, and storm exposure that ages coils and cabinets faster than a shaded ground unit, so smaller intervals catch problems sooner.',
    ],
    [
        'q' => 'What size rooftop unit does my Naples building need?',
        'a' => 'Correct sizing depends on square footage, occupancy, window exposure, and roof insulation — not a simple per-square-foot rule of thumb. El Dorado Heating & Cooling performs a load calculation for your specific building so the replacement unit matches actual demand instead of being oversized or undersized for Naples heat.',
    ],
    [
        'q' => 'Do you service rooftop units on multi-tenant and commercial buildings?',
        'a' => 'Yes. El Dorado Heating & Cooling works with property managers, landlords, and business owners across Naples, Bonita Springs, and Marco Island on package units serving offices, retail spaces, and multi-tenant roofs, including coordinating access and minimizing disruption to tenants during service.',
    ],
    [
        'q' => 'Can a rooftop unit be repaired instead of replaced?',
        'a' => 'Often, yes, especially if the compressor and coils are still sound. El Dorado Heating & Cooling repairs what can reasonably be repaired first and is upfront when a unit\'s age or corrosion means replacement is the better investment, rather than defaulting to the most expensive option.',
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
    'building' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-rooftop-air-conditioners',
    'serviceType' => 'Rooftop Air Conditioners',
    'name'        => 'Rooftop Air Conditioners in Naples, FL',
    'description' => 'Commercial rooftop package unit installation, repair, and maintenance for Naples, FL businesses and multi-tenant buildings — built to hold up against direct sun, salt air, and storm exposure.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Rooftop Air Conditioners', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Rooftop Air Conditioners page composition (tokens only) ===== */
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
<section class="hero hero--interior svc-hero" aria-label="Rooftop air conditioners in Naples, FL">
    <div class="container">
        <nav class="breadcrumb svc-breadcrumb-nav" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Rooftop Air Conditioners</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Commercial Rooftop Units &middot; Naples, FL</span>
                <h1 class="hero-title">Rooftop Air Conditioners in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling installs, repairs, and maintains commercial rooftop package units for Naples businesses &mdash; equipment built to withstand direct sun, coastal salt air, and Southwest Florida&rsquo;s near-constant cooling load.</p>
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
<section class="section svc-signs" aria-label="Signs your rooftop unit needs attention">
    <div class="container">
        <div class="svc-signs__lead">
            <div class="reveal-left">
                <span class="eyebrow-label">Why It Matters Here</span>
                <p class="pull-quote">A Naples rooftop sits in full sun most of the year &mdash; the unit on it either handles that load or becomes the reason your building can&rsquo;t keep tenants comfortable.</p>
            </div>
            <div class="reveal-right">
                <h2>How do you know your rooftop unit needs service?</h2>
                <p class="answer-block">If tenants are calling about uneven cooling, the unit is short-cycling, energy bills are climbing, or the cabinet shows visible rust, El Dorado Heating &amp; Cooling should inspect it. Roof-mounted equipment in Collier County faces direct sun and salt air that ages components faster than shaded ground units.</p>
                <p>Most rooftop breakdowns we respond to during a heat wave were building for months &mdash; a failing capacitor, a corroding cabinet seam, or a refrigerant leak that showed early signs. Quarterly checks catch these while they&rsquo;re still an affordable fix.</p>
            </div>
        </div>
        <div class="svc-signs__cards">
            <div class="sign-card reveal-up">
                <div class="sign-card__icon"><?php echo $svg['gauge']; ?></div>
                <h3>Rising energy costs</h3>
                <p>A rooftop unit losing efficiency runs longer to hit setpoint, and commercial power bills show it fast.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-1">
                <div class="sign-card__icon"><?php echo $svg['droplets']; ?></div>
                <h3>Uneven tenant comfort</h3>
                <p>Hot spots or humidity complaints from tenants often trace back to a struggling coil or leaking ductwork.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-2">
                <div class="sign-card__icon"><?php echo $svg['alert']; ?></div>
                <h3>Visible cabinet corrosion</h3>
                <p>Rust or pitting on the cabinet signals salt-air damage that can reach electrical components underneath.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-3">
                <div class="sign-card__icon"><?php echo $svg['building']; ?></div>
                <h3>No recent service record</h3>
                <p>Commercial rooftop units without a quarterly service history are the ones most likely to fail unexpectedly.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section svc-expert" aria-label="Why choose El Dorado for rooftop AC">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes El Dorado&rsquo;s rooftop AC service different in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling services commercial package units for the conditions Naples roofs actually face &mdash; sustained sun exposure, salt-air corrosion, and storm-season stress. Our family-owned team brings more than 60 years of combined experience working with property managers and business owners across Collier County.</p>
                <div class="svc-expert__stat">
                    <b>60+ yrs</b>
                    <span>Combined HVAC experience across residential and commercial systems</span>
                </div>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Cabinet &amp; coil corrosion checks</b><p>We inspect for the salt-air rust and pitting that shortens rooftop equipment life first.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Minimal tenant disruption</b><p>We coordinate roof access and timing to keep service quiet and out of the way of business.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Honest repair-vs-replace guidance</b><p>We tell property managers straight when a unit is worth repairing and when it isn&rsquo;t.</p></div></li>
                </ul>
            </div>
            <figure class="svc-expert__figure reveal-right" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck equipped for rooftop AC work in Naples" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light svc-included" aria-label="What rooftop AC service includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Visit</span>
            <h2>What&rsquo;s included in a rooftop AC service visit?</h2>
            <p class="answer-block">Every El Dorado Heating &amp; Cooling rooftop visit covers the components exposed to Naples roof conditions &mdash; the cabinet, coils, refrigerant circuit, and controls &mdash; then confirms the unit is delivering rated capacity before we sign off.</p>
        </div>
        <ul class="svc-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Full unit inspection, cabinet to controls</span></li>
            <li><?php echo $svg['check']; ?><span>Condenser and evaporator coil cleaning</span></li>
            <li><?php echo $svg['check']; ?><span>Refrigerant charge and pressure check</span></li>
            <li><?php echo $svg['check']; ?><span>Electrical connections and contactors tested</span></li>
            <li><?php echo $svg['check']; ?><span>Cabinet seams checked for corrosion</span></li>
            <li><?php echo $svg['check']; ?><span>Curb and ductwork seal inspection</span></li>
            <li><?php echo $svg['check']; ?><span>Economizer and damper operation check</span></li>
            <li><?php echo $svg['check']; ?><span>Filter replacement and belt inspection</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado schedule commercial rooftop service?</h2>
            <ol class="process-steps">
                <li><b>Request A Visit</b><span>Call or request an estimate. We coordinate roof access with your property manager.</span></li>
                <li><b>Full Inspection</b><span>A technician runs the complete rooftop service and tests capacity under load.</span></li>
                <li><b>Clear Report</b><span>You get a written report on unit condition and any repair, with upfront pricing.</span></li>
                <li><b>Confirmed Performance</b><span>We verify the space is cooling to spec and leave the roof access secure.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top svc-trust" aria-label="Why Naples businesses trust El Dorado">
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
                <h2>Why do Naples businesses keep El Dorado on the roof?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County businesses in English and Spanish. Property managers stick with us because the same team returns each visit, knows the building&rsquo;s equipment, and answers the phone 24/7 when a rooftop unit fails.</p>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>A real local team</b><p>Family-owned since <?php echo $yearEstablished; ?> &mdash; not a rotating cast of subcontractors on your roof.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear communication in English and Spanish with tenants, staff, and property managers.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Around-the-clock backup</b><p>Commercial customers reach us 24/7 if a rooftop unit goes down between visits.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section svc-compare" aria-label="El Dorado rooftop service compared to typical service">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>What sets a real rooftop service visit apart from a quick check?</h2>
            <p class="answer-block">A true commercial rooftop visit protects tenant comfort, warranty, and equipment life &mdash; not just a filter swap from the ground. El Dorado Heating &amp; Cooling delivers the full inspection Naples rooftop conditions demand, with a written report behind every visit.</p>
        </div>
        <div class="svc-compare__grid">
            <div class="compare-col compare-col--them reveal-left">
                <h3>A typical &ldquo;service call&rdquo;</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>A quick look and a filter change, in and out</span></li>
                    <li><?php echo $svg['x']; ?><span>No cabinet or curb corrosion check</span></li>
                    <li><?php echo $svg['x']; ?><span>No written report for your records</span></li>
                    <li><?php echo $svg['x']; ?><span>Unfamiliar tech, unfamiliar building, every time</span></li>
                    <li><?php echo $svg['x']; ?><span>Slow callback when tenants complain</span></li>
                </ul>
            </div>
            <div class="compare-col compare-col--us reveal-right">
                <h3>El Dorado rooftop service</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Full inspection, cabinet to controls</span></li>
                    <li><?php echo $svg['check']; ?><span>Coils cleaned, corrosion checked, refrigerant verified</span></li>
                    <li><?php echo $svg['check']; ?><span>Documented visit for your building records</span></li>
                    <li><?php echo $svg['check']; ?><span>Honest repair-vs-replace guidance and upfront pricing</span></li>
                    <li><?php echo $svg['check']; ?><span>The same local, bilingual team, 24/7 backup</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light svc-faq" aria-label="Rooftop air conditioner FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples property owners ask about rooftop AC?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, sizing, and what a real rooftop service visit protects.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Schedule rooftop AC service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Protect Your Building&rsquo;s Comfort</span>
            <h2>Ready to get your Naples rooftop unit inspected?</h2>
            <p>Don&rsquo;t wait for a tenant complaint or a breakdown on the hottest day of the quarter. Schedule rooftop service with El Dorado Heating &amp; Cooling and keep your building comfortable and under warranty &mdash; call now or request your free estimate.</p>
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
