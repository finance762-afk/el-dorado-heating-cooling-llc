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
$metaDescription = 'Rooftop AC install, repair & maintenance for Naples, FL commercial buildings from El Dorado Heating & Cooling. Packaged units serviced with minimal downtime. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/rooftop-air-conditioners/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does a rooftop AC unit cost to replace in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling prices every rooftop replacement to the building, since a small office curb and a full-service restaurant carry very different tonnage and gas or electric configurations. Packaged commercial units in the Naples area commonly land in the $8,000–$18,000 range installed, and we give you a firm written quote after a rooftop assessment — never a guess over the phone.',
    ],
    [
        'q' => 'How often should a commercial rooftop unit be serviced in Southwest Florida?',
        'a' => 'El Dorado Heating & Cooling recommends quarterly service on rooftop packaged units around Naples. Coastal salt air, near year-round runtime, and rooftop sun exposure age these systems far faster than an inland climate. A quarterly plan keeps belts, coils, economizers, and drains ahead of failure so your building never loses cooling on your busiest day.',
    ],
    [
        'q' => 'Can you repair our rooftop unit without shutting down our Naples business?',
        'a' => 'Usually, yes. El Dorado Heating & Cooling works from the roof and schedules around your hours — early mornings, off-peak windows, or a single evening for larger jobs — so your Naples storefront, office, or restaurant keeps running. When a unit must come down for a swap, we stage the crane and equipment to keep the outage to hours, not days.',
    ],
    [
        'q' => 'How do you safely access rooftop units on Naples commercial buildings?',
        'a' => 'El Dorado Heating & Cooling reaches most Naples rooftops by permanent ladder, roof hatch, or a rated lift, and follows OSHA fall-protection practices on every visit. For a full packaged-unit replacement we coordinate a crane lift with the property manager, verify roof curb and structural clearances, and protect the membrane so your roof warranty stays intact.',
    ],
    [
        'q' => 'How long does a rooftop packaged unit last in the Florida climate?',
        'a' => 'El Dorado Heating & Cooling typically sees rooftop packaged units run 12 to 15 years around Naples, a few years shorter than an inland lifespan because of salt air and constant load. Consistent quarterly maintenance stretches that timeline, protects efficiency, and gives us the runway to plan a replacement on your schedule instead of during an emergency.',
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
    'building' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>',
    'droplets' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'zap'      => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>',
    'thermo'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9a4 4 0 0 0-2 7.5"/><path d="M12 3v2"/><path d="m6.6 18.4-1.4 1.4"/><path d="M20 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-rooftop-air-conditioners',
    'serviceType' => 'Rooftop Air Conditioners',
    'name'        => 'Rooftop Air Conditioners in Naples, FL',
    'description' => 'Rooftop packaged AC installation, repair, and maintenance for commercial buildings, offices, and restaurants in Naples, FL — serviced from the roof to minimize downtime in the Southwest Florida climate.',
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
.rt-hero { padding-top: 0.75rem; }
.rt-hero .hero-chips { margin-top: 0.4rem; }
.rt-breadcrumb-nav { margin-bottom: var(--space-lg); }

/* Problem statement — banner strip + 3-up telltale signs */
.rt-signs { background: var(--color-paper-2); }
.rt-signs__banner { display: grid; grid-template-columns: auto 1fr; gap: clamp(1rem, 3vw, 2rem); align-items: center; background: var(--color-primary); color: var(--color-white); border-radius: var(--radius-lg); padding: clamp(1.4rem, 3vw, 2.2rem); box-shadow: var(--shadow-lg); }
.rt-signs__banner .rt-badge { width: 64px; height: 64px; border-radius: var(--radius-full); display: grid; place-items: center; background: color-mix(in srgb, var(--color-accent) 88%, transparent); color: var(--color-primary-dark); }
.rt-signs__banner p { margin: 0; font-size: var(--fs-lead); }
.rt-signs__head { max-width: 62ch; margin: clamp(2rem, 4vw, 3rem) 0 0; }
.rt-signs__cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: clamp(1.25rem, 3vw, 2rem); }
.rt-sign { background: var(--color-surface); border-top: 3px solid var(--color-secondary); border-radius: 0 0 var(--radius) var(--radius); padding: 1.4rem; display: grid; gap: 0.55rem; align-content: start; box-shadow: var(--shadow-sm); }
.rt-sign__icon { color: var(--color-primary); }
.rt-sign h3 { font-size: 1.05rem; }
.rt-sign p { margin: 0; font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 860px) { .rt-signs__banner { grid-template-columns: 1fr; text-align: center; } .rt-signs__banner .rt-badge { margin: 0 auto; } .rt-signs__cards { grid-template-columns: 1fr; } }

/* Expert — photo left, floating stat card */
.rt-expert .split { align-items: center; }
.rt-expert__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.rt-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.rt-expert__stat { position: absolute; left: var(--space-md); bottom: var(--space-md); background: var(--color-surface); border-radius: var(--radius); padding: 0.85rem 1.1rem; box-shadow: var(--shadow-lg); display: grid; gap: 0.1rem; }
.rt-expert__stat b { font-family: var(--font-accent); font-size: 1.9rem; line-height: 1; color: var(--color-primary); }
.rt-expert__stat span { font-size: 0.78rem; color: var(--color-muted); }
.rt-diffs { display: grid; gap: 0.9rem; margin-top: 1.25rem; }
.rt-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.rt-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.rt-diffs b { display: block; }
.rt-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

/* Service breakdown — included list + process rail */
.rt-included__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.7rem 2rem; margin-top: 1.25rem; }
.rt-included__grid li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.95rem; }
.rt-included__grid svg { color: var(--color-accent-dark); margin-top: 1px; }
.rt-process { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-top: 1.25rem; counter-reset: rt-step; }
.rt-process li { list-style: none; background: var(--color-paper-2); border-radius: var(--radius); padding: 1.2rem; display: grid; gap: 0.35rem; align-content: start; position: relative; }
.rt-process li::before { counter-increment: rt-step; content: counter(rt-step); font-family: var(--font-accent); font-size: 1.6rem; color: var(--color-accent-dark); line-height: 1; }
.rt-process b { font-size: 1rem; }
.rt-process span { font-size: 0.88rem; color: var(--color-ink-2); }
@media (max-width: 860px) { .rt-included__grid { grid-template-columns: 1fr; } .rt-process { grid-template-columns: 1fr 1fr; } }
@media (max-width: 520px) { .rt-process { grid-template-columns: 1fr; } }

/* Trust dark band */
.rt-trust__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.rt-trust__figure img { width: 100%; height: 100%; object-fit: cover; }

/* Comparison */
.rt-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.rt-col { border-radius: var(--radius-lg); padding: 1.6rem; border: 1px solid var(--color-line); }
.rt-col--them { background: var(--color-surface); }
.rt-col--us { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.rt-col h3 { font-size: 1.15rem; margin-bottom: 1rem; }
.rt-col ul { display: grid; gap: 0.8rem; }
.rt-col li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.93rem; color: var(--color-ink-2); }
.rt-col--them svg { color: var(--color-muted); }
.rt-col--us svg { color: var(--color-primary); }
.rt-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .rt-compare__grid { grid-template-columns: 1fr; } }

.rt-cta .actions .link-call { color: var(--color-white); }
.rt-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior rt-hero" aria-label="Rooftop air conditioners in Naples, FL">
    <div class="container">
        <nav class="breadcrumb rt-breadcrumb-nav" aria-label="Breadcrumb" style="font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Rooftop Air Conditioners</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Commercial Rooftop HVAC &middot; Naples, FL</span>
                <h1 class="hero-title">Rooftop <span class="text-accent">Air Conditioners in Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling installs, repairs, and maintains rooftop packaged AC units for Naples offices, restaurants, and storefronts. We work from the roof and schedule around your hours, so your building stays cool and your business keeps running through Southwest Florida&rsquo;s longest cooling season.</p>
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
<section class="section rt-signs" aria-label="Signs your rooftop unit needs attention">
    <div class="container">
        <div class="rt-signs__banner reveal-up">
            <div class="rt-badge"><?php echo $svg['building']; ?></div>
            <p class="pull-quote" style="margin:0;color:#fff;">When a rooftop unit quits, a Naples business doesn&rsquo;t just get warm &mdash; it sends customers home. Catching the warning signs is how you avoid closing on your busiest afternoon.</p>
        </div>
        <div class="rt-signs__head reveal-up">
            <span class="eyebrow-label">Watch The Roof</span>
            <h2>How do you know a rooftop AC unit needs service?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling watches for hot zones, spiking demand charges, and water near the roof curb &mdash; the first clues a packaged unit is failing. El Dorado Heating &amp; Cooling LLC is a licensed Florida HVAC contractor based in Naples, serving Naples, Bonita Springs, and Marco Island across Collier County, and we catch these issues before they close your doors.</p>
        </div>
        <div class="rt-signs__cards">
            <div class="rt-sign reveal-up">
                <div class="rt-sign__icon"><?php echo $svg['thermo']; ?></div>
                <h3>Uneven cooling by zone</h3>
                <p>One side of the building bakes while another stays cold &mdash; a sign of a failing compressor stage or a stuck economizer damper.</p>
            </div>
            <div class="rt-sign reveal-up reveal-delay-1">
                <div class="rt-sign__icon"><?php echo $svg['zap']; ?></div>
                <h3>Spiking demand charges</h3>
                <p>A packaged unit fighting dirty coils or a worn belt pulls more amps, and it shows up fast on a commercial FPL bill.</p>
            </div>
            <div class="rt-sign reveal-up reveal-delay-2">
                <div class="rt-sign__icon"><?php echo $svg['droplets']; ?></div>
                <h3>Water near the roof curb</h3>
                <p>A clogged condensate drain or corroded pan can leak into the ceiling below &mdash; a roof and inventory risk you can&rsquo;t ignore.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section rt-expert" aria-label="Why choose El Dorado for rooftop AC work">
    <div class="container">
        <div class="split">
            <figure class="rt-expert__figure reveal-left" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck equipped for rooftop AC work in Naples, FL" width="960" height="960" loading="lazy" decoding="async">
                    <figcaption class="rt-expert__stat"><b>60+ yrs</b><span>Combined commercial HVAC experience</span></figcaption>
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">Commercial Know-How</span>
                <h2>What makes El Dorado&rsquo;s rooftop service different in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling treats a rooftop unit as the business asset it is. Our family-owned team plans access, staging, and downtime around your Naples operation, and we know how packaged units behave under coastal salt air and near-constant load &mdash; not a residential checklist stretched to fit a commercial roof.</p>
                <ul class="rt-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Downtime planned, not improvised</b><p>We schedule around your open hours and stage crane lifts so cooling is back before your doors open.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Curb and roof protected</b><p>We verify curb fit, protect the membrane, and keep your roof warranty intact on every replacement.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual, one accountable team</b><p>English and Spanish, family-owned since <?php echo $yearEstablished; ?> &mdash; the same crew that knows your building comes back.</p></div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light rt-included" aria-label="What rooftop AC service includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">On The Roof</span>
            <h2>What does rooftop AC service in Naples include?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling delivers full-scope rooftop service &mdash; install, repair, and scheduled maintenance on packaged units. We test the parts that fail first in Southwest Florida, from economizers to condensate drains, and confirm every zone is cooling before we leave the roof.</p>
        </div>
        <ul class="rt-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Packaged rooftop unit install and replacement</span></li>
            <li><?php echo $svg['check']; ?><span>Crane-lift coordination and curb fit-up</span></li>
            <li><?php echo $svg['check']; ?><span>Compressor, contactor, and capacitor repair</span></li>
            <li><?php echo $svg['check']; ?><span>Belt, motor, and blower service</span></li>
            <li><?php echo $svg['check']; ?><span>Economizer and damper calibration</span></li>
            <li><?php echo $svg['check']; ?><span>Coil cleaning and refrigerant charge check</span></li>
            <li><?php echo $svg['check']; ?><span>Condensate pan and drain clearing</span></li>
            <li><?php echo $svg['check']; ?><span>Quarterly commercial maintenance plans</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado handle a rooftop job start to finish?</h2>
            <ol class="rt-process">
                <li><b>Rooftop Assessment</b><span>We inspect the unit, curb, and access and give you a firm written quote &mdash; no phone guesses.</span></li>
                <li><b>Schedule Around You</b><span>We book an off-peak or evening window so your Naples business never loses a shift of cooling.</span></li>
                <li><b>Service Or Swap</b><span>Repair on the roof, or stage a crane lift for a clean packaged-unit replacement.</span></li>
                <li><b>Test Every Zone</b><span>We confirm cooling across the building, log the work, and set your maintenance schedule.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top rt-trust" aria-label="Why Naples businesses trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="rt-trust__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service trucks staged for a commercial job in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples businesses trust El Dorado on the roof?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. Property managers and owners rely on us because we answer the phone 24/7, show up when we say, and treat their rooftop unit &mdash; and their downtime &mdash; like it matters.</p>
                <ul class="rt-diffs">
                    <li><?php echo $svg['check']; ?><div><b>24/7 emergency response</b><p>When a rooftop unit quits on a hot Naples afternoon, we&rsquo;re reachable and rolling.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Licensed &amp; insured in Florida</b><p>Proper coverage and credentials for commercial rooftop work across Collier County.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual coordination</b><p>Clear scheduling and updates in English and Spanish for you and your staff.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section rt-compare" aria-label="El Dorado rooftop service compared to a typical provider">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>What separates real rooftop service from a quick patch?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling plans the whole job &mdash; access, downtime, and the roof itself &mdash; instead of patching a unit and leaving. That planning is what keeps your Naples building cooling, protects your roof, and prevents the surprise shutdown a rushed provider leaves behind.</p>
        </div>
        <div class="rt-compare__grid">
            <div class="rt-col rt-col--them reveal-left">
                <h3>A typical provider</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Quotes tonnage over the phone, sight unseen</span></li>
                    <li><?php echo $svg['x']; ?><span>Works during business hours, cooling off for days</span></li>
                    <li><?php echo $svg['x']; ?><span>Ignores economizers, drains, and curb condition</span></li>
                    <li><?php echo $svg['x']; ?><span>Voids the roof warranty with a careless swap</span></li>
                    <li><?php echo $svg['x']; ?><span>A different crew that has to relearn your building</span></li>
                </ul>
            </div>
            <div class="rt-col rt-col--us reveal-right">
                <h3>El Dorado rooftop service</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Firm written quote after a rooftop assessment</span></li>
                    <li><?php echo $svg['check']; ?><span>Off-peak scheduling that keeps you open</span></li>
                    <li><?php echo $svg['check']; ?><span>Full unit service &mdash; economizer, coils, drains</span></li>
                    <li><?php echo $svg['check']; ?><span>Curb and membrane protected, warranty intact</span></li>
                    <li><?php echo $svg['check']; ?><span>The same bilingual team that knows your roof</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light rt-faq" aria-label="Rooftop air conditioner FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples businesses ask about rooftop AC units?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, downtime, access, and rooftop-unit lifespan in Southwest Florida.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top rt-cta" aria-label="Schedule rooftop AC service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Keep Your Doors Open</span>
            <h2>Is your Naples building ready for the next heat wave on the roof?</h2>
            <p>Don&rsquo;t wait for a packaged unit to quit during your busiest shift. Schedule rooftop service with El Dorado Heating &amp; Cooling and keep your Naples office, restaurant, or storefront cool, efficient, and open &mdash; call now or request your free estimate.</p>
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
