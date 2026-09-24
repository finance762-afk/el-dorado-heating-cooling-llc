<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'air-purifiers';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Air Purifiers Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Whole-home air purifier installation in Naples, FL from El Dorado Heating & Cooling. Cleaner air against pollen, mold, and humidity. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/air-purifiers/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does a whole-home air purifier cost in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling installs most whole-home air purifiers in the $600–$1,800 range, depending on the technology and your existing system. UV lamps sit at the lower end, while high-MERV media cabinets and combination filtration-plus-UV units cost more. We quote the exact price up front after seeing your Naples home and ductwork.',
    ],
    [
        'q' => 'Do air purifiers really help with Florida allergies and mold?',
        'a' => 'Yes. El Dorado Heating & Cooling installs whole-home purifiers that trap pollen, dust, and pet dander and use UV light to disrupt mold and mildew spores that thrive in Southwest Florida humidity. Because the unit treats every cubic foot of air moving through your ducts, it protects the whole home, not just one room.',
    ],
    [
        'q' => 'What is the difference between a UV purifier and a media filter?',
        'a' => 'El Dorado Heating & Cooling installs both, and they solve different problems. UV lights mounted at the coil kill mold, bacteria, and viruses in the airstream, while high-MERV media filters physically capture particles like pollen and dust. Many Naples homes get the best result from a combination system that does both at once.',
    ],
    [
        'q' => 'Will a whole-home air purifier work with my existing AC?',
        'a' => 'In most cases, yes. El Dorado Heating & Cooling integrates whole-home purifiers directly into your current ductwork and air handler, so there is no standalone box to move room to room. We confirm your system has the airflow and space to support the unit before installing, and we handle everything in one visit.',
    ],
    [
        'q' => 'Do air purifiers need maintenance in Naples?',
        'a' => 'Yes, and El Dorado Heating & Cooling includes it in our service. UV lamps typically need replacing about once a year to keep working, and media cabinets need periodic filter changes. Our year-round runtime in Naples means purifier components work harder than in cooler climates, so we track replacements as part of regular maintenance.',
    ],
];

// Icon set (inline SVG from references/lucide-icons — no data-lucide, no CDN).
$svg = [
    'phone'   => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'   => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'   => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'   => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check'   => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'x'       => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'leaf'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
    'wind'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'sun'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
    'shield'  => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-air-purifiers',
    'serviceType' => 'Air Purifier Installation',
    'name'        => 'Whole-Home Air Purifiers in Naples, FL',
    'description' => 'Whole-home air purifier installation and maintenance for Naples, FL homes — UV lights and high-MERV filtration integrated with your HVAC to cut pollen, mold, dust, and odors in Southwest Florida humidity.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Air Purifiers', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Air Purifiers page composition (tokens only) ===== */
.iaq-hero { padding-top: 0.75rem; }
.iaq-hero .hero-chips { margin-top: 0.4rem; }
.iaq-breadcrumb-nav { margin-bottom: 1.25rem; font-size: 0.85rem; color: color-mix(in srgb, var(--color-white) 72%, transparent); }

/* Problem statement — banner lead over a 3-across contaminant row */
.iaq-signs { background: var(--color-paper-2); }
.iaq-signs__head { max-width: 60ch; }
.iaq-signs__quote { border-left: 4px solid var(--color-secondary); padding: var(--space-sm) var(--space-lg); margin: var(--space-lg) 0 0; font-family: var(--font-accent); font-size: var(--fs-h4); color: var(--color-primary); }
.iaq-signs__cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-md); margin-top: var(--space-2xl); }
.iaq-sign { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-lg); box-shadow: var(--shadow-sm); }
.iaq-sign__icon { width: 52px; height: 52px; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-secondary); background: color-mix(in srgb, var(--color-secondary) 14%, transparent); margin-bottom: var(--space-sm); }
.iaq-sign h3 { font-size: var(--fs-h5); margin-bottom: var(--space-2xs); }
.iaq-sign p { margin: 0; font-size: var(--fs-sm); color: var(--color-ink-2); }
@media (max-width: 860px) { .iaq-signs__cards { grid-template-columns: 1fr; } }

/* Expert positioning — photo-right split with floating stat pill */
.iaq-expert .split { align-items: center; }
.iaq-expert__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.iaq-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.iaq-expert__stat { display: inline-flex; align-items: baseline; gap: var(--space-2xs); padding: var(--space-xs) var(--space-md); border-radius: var(--radius-pill); background: color-mix(in srgb, var(--color-secondary) 12%, var(--color-surface)); border: 1px solid color-mix(in srgb, var(--color-secondary) 30%, transparent); margin: var(--space-sm) 0 var(--space-md); }
.iaq-expert__stat b { font-family: var(--font-accent); font-size: var(--fs-h4); color: var(--color-primary); }
.iaq-expert__stat span { font-size: var(--fs-sm); color: var(--color-muted); }
.iaq-diffs { display: grid; gap: var(--space-md); margin-top: var(--space-md); }
.iaq-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: var(--space-sm); align-items: start; }
.iaq-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.iaq-diffs b { display: block; }
.iaq-diffs p { margin: var(--space-3xs) 0 0; font-size: var(--fs-sm); color: var(--color-ink-2); }

/* Service breakdown — technology cards + numbered process */
.iaq-tech { display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-md); margin-top: var(--space-lg); }
.iaq-tech__card { border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-lg); background: var(--color-surface); }
.iaq-tech__card--alt { background: color-mix(in srgb, var(--color-accent) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-accent) 26%, var(--color-line)); }
.iaq-tech__card h3 { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-h5); margin-bottom: var(--space-xs); color: var(--color-primary); }
.iaq-tech__card p { margin: 0 0 var(--space-sm); font-size: var(--fs-sm); color: var(--color-ink-2); }
.iaq-tech__card ul { display: grid; gap: var(--space-2xs); }
.iaq-tech__card li { display: grid; grid-template-columns: 20px 1fr; gap: var(--space-xs); align-items: start; font-size: var(--fs-sm); }
.iaq-tech__card svg { color: var(--color-accent-dark); margin-top: 1px; }
@media (max-width: 720px) { .iaq-tech { grid-template-columns: 1fr; } }

/* Comparison */
.iaq-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); margin-top: var(--space-2xl); }
.iaq-col { border-radius: var(--radius-lg); padding: var(--space-xl); border: 1px solid var(--color-line); }
.iaq-col--them { background: var(--color-surface); }
.iaq-col--us { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.iaq-col h3 { font-size: var(--fs-h5); margin-bottom: var(--space-md); }
.iaq-col ul { display: grid; gap: var(--space-sm); }
.iaq-col li { display: grid; grid-template-columns: 22px 1fr; gap: var(--space-xs); align-items: start; font-size: var(--fs-sm); color: var(--color-ink-2); }
.iaq-col--them svg { color: var(--color-muted); }
.iaq-col--us svg { color: var(--color-primary); }
.iaq-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .iaq-compare__grid { grid-template-columns: 1fr; } }

.iaq-cta .actions .link-call { color: var(--color-white); }
.iaq-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior iaq-hero" aria-label="Whole-home air purifiers in Naples, FL">
    <div class="container">
        <nav class="breadcrumb iaq-breadcrumb-nav" aria-label="Breadcrumb">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Air Purifiers</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Indoor Air Quality &middot; Naples, FL</span>
                <h1 class="hero-title">Whole-Home <span class="text-accent">Air Purifiers</span> in Naples, FL</h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling installs whole-home air purifiers that clean every breath in your Naples home &mdash; pairing UV light and high-MERV filtration with your HVAC to cut the pollen, mold, dust, and odors that Southwest Florida humidity keeps circulating indoors.</p>
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
<section class="section iaq-signs" aria-label="Why indoor air quality matters in Naples">
    <div class="container">
        <div class="iaq-signs__head reveal-up">
            <span class="eyebrow-label">The Air You Can't See</span>
            <h2>Why is indoor air quality worse in a humid Naples home?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling sees it every summer: Naples homes stay sealed and cooled for months, so pollen, dust, pet dander, and mold spores recirculate instead of clearing out. Southwest Florida&rsquo;s humidity feeds mold and dust mites, and a standard filter alone simply can&rsquo;t keep up with the load.</p>
            <p class="iaq-signs__quote">&ldquo;A cooled, sealed home traps the same air all day &mdash; a whole-home purifier is how you actually clean it.&rdquo;</p>
        </div>
        <div class="iaq-signs__cards">
            <div class="iaq-sign reveal-up">
                <div class="iaq-sign__icon"><?php echo $svg['leaf']; ?></div>
                <h3>Pollen &amp; allergens</h3>
                <p>Southwest Florida&rsquo;s long growing season means near year-round pollen that a sealed home traps and recirculates.</p>
            </div>
            <div class="iaq-sign reveal-up reveal-delay-1">
                <div class="iaq-sign__icon"><?php echo $svg['shield']; ?></div>
                <h3>Mold &amp; mildew</h3>
                <p>High humidity lets mold and mildew spores grow on coils and in ducts, then blow through every room.</p>
            </div>
            <div class="iaq-sign reveal-up reveal-delay-2">
                <div class="iaq-sign__icon"><?php echo $svg['wind']; ?></div>
                <h3>Dust &amp; odors</h3>
                <p>Fine dust, cooking odors, and pet dander build up when the same indoor air cycles for months on end.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section iaq-expert" aria-label="Why choose El Dorado for air purifiers">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes El Dorado&rsquo;s air-quality work right for Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed Florida HVAC contractor based in Naples, serving Bonita Springs, Marco Island, and all of Collier County. We size purification to your actual ductwork and humidity, not a one-size box &mdash; drawing on more than 60 years of combined experience with coastal systems.</p>
                <div class="iaq-expert__stat">
                    <b>60+ yrs</b>
                    <span>combined HVAC experience across Collier County</span>
                </div>
                <ul class="iaq-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Matched to your system</b><p>We confirm airflow and duct space first, so the purifier improves comfort instead of choking your AC.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Humidity-aware design</b><p>We target the mold and mildew that thrive in Southwest Florida, not just visible dust.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual, one-visit install</b><p>English and Spanish service, with the purifier integrated into your ductwork in a single appointment.</p></div></li>
                </ul>
            </div>
            <figure class="iaq-expert__figure reveal-right">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck arriving for an indoor air-quality install in Naples, FL" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light iaq-included" aria-label="Air purifier technologies and process">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Your Options</span>
            <h2>What kinds of whole-home air purifiers can El Dorado install?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling installs UV germicidal lights, high-MERV media filtration, and combination systems that pair both. We recommend the right technology for your Naples home based on your air-quality goals, your ductwork, and whether allergens, mold, or odors are the bigger concern.</p>
        </div>
        <div class="iaq-tech reveal-up">
            <div class="iaq-tech__card">
                <h3><?php echo $svg['sun']; ?> UV germicidal lights</h3>
                <p>Mounted at the coil, UV-C light disrupts mold, bacteria, and viruses as air passes through your system.</p>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Kills mold and mildew on the coil</span></li>
                    <li><?php echo $svg['check']; ?><span>Reduces musty, damp odors</span></li>
                    <li><?php echo $svg['check']; ?><span>Keeps the air handler cleaner</span></li>
                </ul>
            </div>
            <div class="iaq-tech__card iaq-tech__card--alt">
                <h3><?php echo $svg['leaf']; ?> High-MERV media &amp; combo</h3>
                <p>Deep media cabinets physically trap fine particles; combo units add UV for particles and pathogens together.</p>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Captures pollen, dust, and dander</span></li>
                    <li><?php echo $svg['check']; ?><span>Longer filter life than a 1-inch filter</span></li>
                    <li><?php echo $svg['check']; ?><span>Combo option for whole-home coverage</span></li>
                </ul>
            </div>
        </div>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado plan and install an air purifier?</h2>
            <ol class="process-steps">
                <li><b>In-Home Assessment</b><span>We evaluate your ductwork, airflow, and the air-quality issues you notice most in your Naples home.</span></li>
                <li><b>Right-Sized Recommendation</b><span>You get a clear plan &mdash; UV, media, or combo &mdash; with upfront pricing and no pressure.</span></li>
                <li><b>Integrated Install</b><span>We fit the purifier into your existing system in one visit and verify airflow is unaffected.</span></li>
                <li><b>Ongoing Care</b><span>We track UV lamp and filter replacements so the system keeps cleaning your air year-round.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS ============================= -->
<section class="section on-dark texture-grain slant-top iaq-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="iaq-expert__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="The El Dorado Heating &amp; Cooling team with their service fleet in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why trust El Dorado with your family&rsquo;s indoor air?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish since <?php echo $yearEstablished; ?>. Air quality affects the people you love most, so the same trusted local team installs it right and stands behind the work 24/7.</p>
                <ul class="iaq-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Family-owned team</b><p>Serving Naples since <?php echo $yearEstablished; ?> &mdash; not a rotating cast of subcontractors.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>English &amp; Spanish</b><p>Clear guidance on your options, so you understand exactly what you&rsquo;re installing.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>24/7 backup</b><p>If anything ever falters, our emergency line is answered day or night.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section iaq-compare" aria-label="Portable purifier compared to whole-home">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>Is a whole-home purifier really better than a plug-in unit?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling installs whole-home systems because a portable box only cleans one room and leaves the rest of your Naples home untouched. Integrated purification treats every cubic foot of air moving through your ducts, quietly, without a machine to move or refill.</p>
        </div>
        <div class="iaq-compare__grid">
            <div class="iaq-col iaq-col--them reveal-left">
                <h3>A plug-in room purifier</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Cleans one room while the rest recirculates</span></li>
                    <li><?php echo $svg['x']; ?><span>Runs a noisy fan you hear all day</span></li>
                    <li><?php echo $svg['x']; ?><span>Frequent filter buys that add up fast</span></li>
                    <li><?php echo $svg['x']; ?><span>Does nothing for mold on the coil or in ducts</span></li>
                    <li><?php echo $svg['x']; ?><span>One more device to move room to room</span></li>
                </ul>
            </div>
            <div class="iaq-col iaq-col--us reveal-right">
                <h3>El Dorado whole-home system</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Cleans the air feeding every room at once</span></li>
                    <li><?php echo $svg['check']; ?><span>Silent &mdash; it works inside your ductwork</span></li>
                    <li><?php echo $svg['check']; ?><span>Long-life media and yearly UV lamp only</span></li>
                    <li><?php echo $svg['check']; ?><span>UV attacks mold and mildew at the source</span></li>
                    <li><?php echo $svg['check']; ?><span>Installed and maintained by one local team</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light iaq-faq" aria-label="Air purifier FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about air purifiers?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, technology, and what whole-home purification actually does.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top iaq-cta" aria-label="Schedule an air purifier install">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Breathe Easier At Home</span>
            <h2>Ready to clean the air in your Naples home for good?</h2>
            <p>Stop letting pollen, mold, and dust cycle through every room. Ask El Dorado Heating &amp; Cooling about a whole-home purifier sized for your system &mdash; call now or request your free estimate.</p>
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
