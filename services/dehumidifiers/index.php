<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'dehumidifiers';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Whole-Home Dehumidifiers Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Whole-home dehumidifier installation in Naples, FL from El Dorado Heating & Cooling. Beat Southwest Florida humidity, mold, and musty air. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/dehumidifiers/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'What humidity level should a Naples home stay at?',
        'a' => 'El Dorado Heating & Cooling targets indoor humidity between 45% and 55% for most Naples homes. Below that, air feels dry and static; above 55%, you get clammy rooms, musty odors, and the moisture that feeds mold and dust mites. A whole-home dehumidifier holds that range even when the AC alone can not.',
    ],
    [
        'q' => 'Does my AC already remove enough humidity in Southwest Florida?',
        'a' => 'Not always. El Dorado Heating & Cooling sees plenty of Naples homes where a right-sized AC hits the temperature setpoint but shuts off before it pulls out enough moisture, especially in mild or rainy weather. A dedicated whole-home dehumidifier controls moisture independently, so comfort no longer depends on the AC running.',
    ],
    [
        'q' => 'How much does a whole-home dehumidifier cost in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling installs most whole-home dehumidifiers in the $1,500–$3,000 range, including integration with your ductwork and drainage. The exact figure depends on the capacity your home needs and how the unit ties into your existing system. We provide upfront pricing after assessing your Naples home.',
    ],
    [
        'q' => 'Will a dehumidifier help with mold and musty smells?',
        'a' => 'Yes. El Dorado Heating & Cooling installs whole-home dehumidifiers specifically to stop the damp conditions that cause mold, mildew, and that musty Florida smell. By holding humidity in a healthy range, the unit removes the moisture those organisms need to grow, protecting your air, your furnishings, and your home&rsquo;s structure.',
    ],
    [
        'q' => 'Can a dehumidifier actually lower my cooling costs?',
        'a' => 'It can help. El Dorado Heating & Cooling notes that drier air feels cooler, so many Naples homeowners raise the thermostat a degree or two and stay just as comfortable. That eases the load on your AC. A whole-home dehumidifier also protects the equipment by reducing the moisture strain that shortens system life.',
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
    'droplets' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'wind'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'shield'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'home'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'gauge'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-dehumidifiers',
    'serviceType' => 'Dehumidifiers',
    'name'        => 'Whole-Home Dehumidifiers in Naples, FL',
    'description' => 'Whole-home dehumidifier installation and service for Naples, FL homes — independent humidity control that stops musty odors, mold, and clammy air the AC alone can not remove in Southwest Florida.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Dehumidifiers', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Dehumidifiers page composition (tokens only) ===== */
.hum-hero { padding-top: 0.75rem; }
.hum-hero .hero-chips { margin-top: 0.4rem; }
.hum-breadcrumb-nav { margin-bottom: 1.25rem; font-size: 0.85rem; color: color-mix(in srgb, var(--color-white) 72%, transparent); }

/* Problem statement — centered lead over stacked horizontal sign rows */
.hum-signs { background: var(--color-paper-2); }
.hum-signs__head { max-width: 62ch; margin-inline: auto; text-align: center; }
.hum-signs__rows { display: grid; gap: var(--space-sm); margin-top: var(--space-2xl); max-width: var(--content-width, 68ch); margin-inline: auto; }
.hum-row { display: grid; grid-template-columns: 56px 1fr; gap: var(--space-md); align-items: center; background: var(--color-surface); border: 1px solid var(--color-line); border-left: 4px solid var(--color-secondary); border-radius: var(--radius); padding: var(--space-md) var(--space-lg); box-shadow: var(--shadow-sm); }
.hum-row__icon { width: 56px; height: 56px; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-secondary); background: color-mix(in srgb, var(--color-secondary) 12%, transparent); }
.hum-row h3 { font-size: var(--fs-h5); margin-bottom: var(--space-3xs); }
.hum-row p { margin: 0; font-size: var(--fs-sm); color: var(--color-ink-2); }
@media (max-width: 620px) { .hum-row { grid-template-columns: 1fr; text-align: center; } .hum-row__icon { margin-inline: auto; } }

/* Expert positioning — split-reverse, photo on the left */
.hum-expert .split { align-items: center; }
.hum-expert__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.hum-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.hum-expert__gauge { display: grid; grid-template-columns: auto 1fr; align-items: center; gap: var(--space-sm); padding: var(--space-sm) var(--space-md); background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-radius: var(--radius); margin: var(--space-sm) 0 var(--space-md); }
.hum-expert__gauge b { font-family: var(--font-accent); font-size: var(--fs-h3); line-height: 1; color: var(--color-primary); }
.hum-expert__gauge span { font-size: var(--fs-sm); color: var(--color-muted); }
.hum-diffs { display: grid; gap: var(--space-md); margin-top: var(--space-md); }
.hum-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: var(--space-sm); align-items: start; }
.hum-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.hum-diffs b { display: block; }
.hum-diffs p { margin: var(--space-3xs) 0 0; font-size: var(--fs-sm); color: var(--color-ink-2); }

/* Service breakdown — full-width benefit checklist + process */
.hum-included__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-sm) var(--space-xl); margin-top: var(--space-lg); }
.hum-included__grid li { display: grid; grid-template-columns: 22px 1fr; gap: var(--space-xs); align-items: start; font-size: var(--fs-sm); }
.hum-included__grid svg { color: var(--color-accent-dark); margin-top: 1px; }
@media (max-width: 820px) { .hum-included__grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 560px) { .hum-included__grid { grid-template-columns: 1fr; } }

/* Comparison — stacked rows within two banners */
.hum-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); margin-top: var(--space-2xl); }
.hum-col { border-radius: var(--radius-lg); padding: var(--space-xl); border: 1px solid var(--color-line); }
.hum-col--them { background: var(--color-surface); }
.hum-col--us { background: color-mix(in srgb, var(--color-secondary) 10%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-secondary) 32%, var(--color-line)); }
.hum-col h3 { font-size: var(--fs-h5); margin-bottom: var(--space-md); }
.hum-col ul { display: grid; gap: var(--space-sm); }
.hum-col li { display: grid; grid-template-columns: 22px 1fr; gap: var(--space-xs); align-items: start; font-size: var(--fs-sm); color: var(--color-ink-2); }
.hum-col--them svg { color: var(--color-muted); }
.hum-col--us svg { color: var(--color-primary); }
.hum-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .hum-compare__grid { grid-template-columns: 1fr; } }

.hum-cta .actions .link-call { color: var(--color-white); }
.hum-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior hum-hero" aria-label="Whole-home dehumidifiers in Naples, FL">
    <div class="container">
        <nav class="breadcrumb hum-breadcrumb-nav" aria-label="Breadcrumb">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Dehumidifiers</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Humidity Control &middot; Naples, FL</span>
                <h1 class="hero-title">Whole-Home <span class="text-accent">Dehumidifiers</span> in Naples, FL</h1>
                <p class="hero-answer">In Southwest Florida, humidity &mdash; not heat &mdash; is the real comfort enemy. El Dorado Heating &amp; Cooling installs whole-home dehumidifiers that pull moisture your AC leaves behind, ending the clammy air, musty odors, and mold that plague Naples homes through the wet season.</p>
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
<section class="section hum-signs" aria-label="How humidity affects a Naples home">
    <div class="container">
        <div class="hum-signs__head reveal-up">
            <span class="eyebrow-label">The Real Comfort Enemy</span>
            <h2>Why does a cooled Naples home still feel damp and sticky?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling gets this call all summer: the AC hits the setpoint but the house still feels clammy. That&rsquo;s excess moisture. In Southwest Florida&rsquo;s wet season, a cooling system alone often shuts off before it removes enough humidity, leaving air that feels warmer and heavier than the thermostat says.</p>
        </div>
        <div class="hum-signs__rows">
            <div class="hum-row reveal-up">
                <div class="hum-row__icon"><?php echo $svg['droplets']; ?></div>
                <div><h3>Clammy, heavy air</h3><p>Rooms that feel sticky even at 74&deg; are the classic sign the AC is cooling but not drying your Naples home.</p></div>
            </div>
            <div class="hum-row reveal-up reveal-delay-1">
                <div class="hum-row__icon"><?php echo $svg['shield']; ?></div>
                <div><h3>Musty smells &amp; mold</h3><p>That damp, musty Florida odor means moisture is feeding mold and mildew in your ducts, closets, and walls.</p></div>
            </div>
            <div class="hum-row reveal-up reveal-delay-2">
                <div class="hum-row__icon"><?php echo $svg['home']; ?></div>
                <div><h3>Condensation &amp; warping</h3><p>Foggy windows, sweating pipes, and warped doors or floors all point to indoor humidity that&rsquo;s running too high.</p></div>
            </div>
            <div class="hum-row reveal-up reveal-delay-3">
                <div class="hum-row__icon"><?php echo $svg['wind']; ?></div>
                <div><h3>Overworked AC</h3><p>Running the thermostat colder just to feel dry drives up your bill and wears the system out faster.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section hum-expert" aria-label="Why choose El Dorado for dehumidifiers">
    <div class="container">
        <div class="split split-reverse">
            <figure class="hum-expert__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician servicing HVAC equipment at a Naples home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>Why is El Dorado the right team for humidity control?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed Florida HVAC contractor based in Naples, serving Bonita Springs, Marco Island, and Collier County. Humidity is our home turf &mdash; we size a dehumidifier to your home&rsquo;s real moisture load and tie it into your system with more than 60 years of combined coastal experience.</p>
                <div class="hum-expert__gauge">
                    <b>45&ndash;55%</b>
                    <span>the healthy indoor humidity range we dial your home into</span>
                </div>
                <ul class="hum-diffs">
                    <li><?php echo $svg['check']; ?><div><b>True load sizing</b><p>We measure your home&rsquo;s moisture demand instead of guessing, so the unit is neither undersized nor wasteful.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Integrated with your AC</b><p>The dehumidifier ties into your ductwork and drain so moisture control runs quietly in the background.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual, honest service</b><p>Clear guidance in English and Spanish &mdash; no upsell you don&rsquo;t need for your Naples home.</p></div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light hum-included" aria-label="What a dehumidifier install includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What You Gain</span>
            <h2>What does whole-home humidity control actually deliver?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling installs whole-home dehumidifiers to give Naples homes steady comfort the AC alone can&rsquo;t: drier air, healthier surfaces, and protection for everything moisture damages. Here&rsquo;s what balanced humidity does across your home.</p>
        </div>
        <ul class="hum-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Air that feels cool and dry, not clammy</span></li>
            <li><?php echo $svg['check']; ?><span>Fewer mold and mildew problems</span></li>
            <li><?php echo $svg['check']; ?><span>An end to musty Florida odors</span></li>
            <li><?php echo $svg['check']; ?><span>Protection for wood floors and trim</span></li>
            <li><?php echo $svg['check']; ?><span>Comfort at a higher thermostat setting</span></li>
            <li><?php echo $svg['check']; ?><span>Less strain on your air conditioner</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado install a whole-home dehumidifier?</h2>
            <ol class="process-steps">
                <li><b>Moisture Assessment</b><span>We check your home&rsquo;s humidity, ductwork, and drainage to size the right dehumidifier for Naples conditions.</span></li>
                <li><b>Clear Proposal</b><span>You get a straightforward recommendation and upfront pricing &mdash; capacity, placement, and how it ties in.</span></li>
                <li><b>Integrated Install</b><span>We connect the unit to your ductwork and condensate drain and set your target humidity range.</span></li>
                <li><b>Comfort Verified</b><span>We confirm the home is holding a healthy humidity level and show you how the controls work.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS ============================= -->
<section class="section on-dark texture-grain slant-top hum-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="hum-expert__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service trucks ready for a job in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners call El Dorado for moisture problems?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish since <?php echo $yearEstablished; ?>. Homeowners trust us because we treat the moisture, not just the temperature &mdash; and the same local team answers the phone 24/7 when it counts.</p>
                <ul class="hum-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Family-owned since <?php echo $yearEstablished; ?></b><p>A stable local crew that knows Southwest Florida humidity inside and out.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>English &amp; Spanish</b><p>We explain the moisture problem and the fix in the language you prefer.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>24/7 emergency line</b><p>Water and humidity problems don&rsquo;t wait, and neither do we.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section hum-compare" aria-label="AC alone compared to whole-home dehumidifier">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>Can&rsquo;t I just run my AC colder to stay dry?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling installs dedicated dehumidifiers because chasing dryness with a colder thermostat is expensive and only half works. A whole-home unit controls moisture on its own, so your Naples home stays comfortable without overcooling and overworking the AC.</p>
        </div>
        <div class="hum-compare__grid">
            <div class="hum-col hum-col--them reveal-left">
                <h3>Relying on the AC alone</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Shuts off before it dries the air</span></li>
                    <li><?php echo $svg['x']; ?><span>Overcools rooms just to feel less sticky</span></li>
                    <li><?php echo $svg['x']; ?><span>Higher bills from longer runtime</span></li>
                    <li><?php echo $svg['x']; ?><span>Mold and musty odors keep coming back</span></li>
                    <li><?php echo $svg['x']; ?><span>No control when the weather is mild or rainy</span></li>
                </ul>
            </div>
            <div class="hum-col hum-col--us reveal-right">
                <h3>El Dorado whole-home dehumidifier</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Removes moisture independently of cooling</span></li>
                    <li><?php echo $svg['check']; ?><span>Comfort at a higher, cheaper thermostat setting</span></li>
                    <li><?php echo $svg['check']; ?><span>Holds a steady 45&ndash;55% humidity range</span></li>
                    <li><?php echo $svg['check']; ?><span>Starves mold and mildew of moisture</span></li>
                    <li><?php echo $svg['check']; ?><span>Works in any weather, quietly and automatically</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light hum-faq" aria-label="Dehumidifier FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about dehumidifiers?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on humidity levels, cost, and what a whole-home unit really solves.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top hum-cta" aria-label="Schedule a dehumidifier install">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Beat The Humidity</span>
            <h2>Ready to make your Naples home feel cool and dry again?</h2>
            <p>Stop fighting sticky air, musty smells, and mold with the thermostat. Let El Dorado Heating &amp; Cooling size a whole-home dehumidifier for your home &mdash; call now or request your free estimate.</p>
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
