<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'air-filters';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Air Filter Replacement Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Air filter & furnace filter replacement in Naples, FL from El Dorado Heating & Cooling. Right-size, right MERV filters. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/air-filters/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How often should I change my AC filter in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling recommends changing a standard 1-inch filter every 30 to 60 days in Naples, and sooner during heavy pollen season or if you have pets. Our systems run almost year-round and pull in far more dust and humidity than a northern home, so a filter that lasts three months up north clogs much faster here.',
    ],
    [
        'q' => 'What MERV rating should I use for my Naples home?',
        'a' => 'El Dorado Heating & Cooling usually recommends a MERV 8 to 11 filter for most Naples homes &mdash; strong enough to capture dust, pollen, and mold spores without choking airflow. Going too high on MERV can strain a residential system and actually hurt efficiency, so we match the rating to your equipment instead of chasing the biggest number.',
    ],
    [
        'q' => 'Can the wrong air filter damage my AC system?',
        'a' => 'Yes. A filter that is the wrong size lets unfiltered air and debris bypass into the system, and one with too high a MERV restricts airflow and strains the blower. El Dorado Heating & Cooling makes sure your Naples system runs the correct size and rating, protecting the coil, the blower motor, and your energy bill.',
    ],
    [
        'q' => 'Does a dirty filter really raise my energy bill?',
        'a' => 'It does. A clogged filter forces the blower to work harder and the system to run longer for the same cooling, quietly driving up your FPL bill. El Dorado Heating & Cooling regularly finds that fresh, correctly sized filters restore airflow and recover 5&ndash;15% efficiency across a long Naples cooling season.',
    ],
    [
        'q' => 'Do you handle filter changes as part of a service visit?',
        'a' => 'Yes. El Dorado Heating & Cooling replaces your filter on every maintenance and tune-up visit and can set you up with the right size and rating to keep on hand between visits. For Naples homes with allergies, pets, or heavy pollen exposure, we can also recommend an upgraded filtration setup that fits your system.',
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
    'layers'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    'wind'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'leaf'     => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
    'ruler'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"/><path d="m14.5 12.5 2-2"/><path d="m11.5 9.5 2-2"/><path d="m8.5 6.5 2-2"/><path d="m17.5 15.5 2-2"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-air-filters',
    'serviceType' => 'Air Filters',
    'name'        => 'Air Filter Replacement in Naples, FL',
    'description' => 'Air and furnace filter replacement for Naples, FL homes — correct filter size and MERV rating to protect your HVAC system, restore airflow, and improve indoor air quality in a dusty, pollen-heavy Florida climate.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Air Filters', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Air Filters page composition (tokens only) ===== */
.af-hero { padding-top: 0.75rem; }
.af-hero .hero-chips { margin-top: 0.4rem; }
.af-breadcrumb-nav { margin-bottom: var(--space-lg); }

/* Problem statement — full-width quote bar + inline sign chips */
.af-signs { background: var(--color-paper-2); }
.af-signs__quote { border-left: 4px solid var(--color-accent); padding-left: var(--space-lg); max-width: 70ch; }
.af-signs__head { max-width: 64ch; margin-top: clamp(1.75rem, 4vw, 2.75rem); }
.af-signs__cards { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-top: clamp(1.25rem, 3vw, 2rem); }
.af-sign { display: grid; grid-template-columns: 48px 1fr; gap: 1rem; align-items: start; background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.3rem; }
.af-sign__icon { width: 48px; height: 48px; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-accent) 20%, transparent); }
.af-sign h3 { font-size: 1.02rem; margin-bottom: 0.2rem; }
.af-sign p { margin: 0; font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 720px) { .af-signs__cards { grid-template-columns: 1fr; } }

/* Expert — copy + photo, MERV callout */
.af-expert__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.af-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.af-merv { display: grid; grid-template-columns: auto 1fr; gap: 1rem; align-items: center; background: var(--color-primary); color: #fff; border-radius: var(--radius); padding: 1rem 1.25rem; margin: 1rem 0 1.25rem; }
.af-merv b { font-family: var(--font-accent); font-size: 1.7rem; line-height: 1; color: var(--color-accent-bright); white-space: nowrap; }
.af-merv span { font-size: 0.9rem; }
.af-diffs { display: grid; gap: 0.9rem; }
.af-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.af-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.af-diffs b { display: block; }
.af-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

/* Service breakdown — included grid + numbered schedule cards */
.af-included__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.7rem 2rem; margin-top: 1.25rem; }
.af-included__grid li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.95rem; }
.af-included__grid svg { color: var(--color-accent-dark); margin-top: 1px; }
.af-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-top: 1.25rem; }
.af-step { background: var(--color-surface); border: 1px solid var(--color-line); border-bottom: 3px solid var(--color-secondary); border-radius: var(--radius); padding: 1.2rem; display: grid; gap: 0.35rem; align-content: start; }
.af-step__n { font-family: var(--font-accent); font-size: 1.5rem; color: var(--color-secondary); line-height: 1; }
.af-step b { font-size: 1rem; }
.af-step span { font-size: 0.88rem; color: var(--color-ink-2); }
@media (max-width: 860px) { .af-included__grid { grid-template-columns: 1fr; } .af-steps { grid-template-columns: 1fr 1fr; } }
@media (max-width: 520px) { .af-steps { grid-template-columns: 1fr; } }

/* Trust dark band */
.af-trust__figure { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.af-trust__figure img { width: 100%; height: 100%; object-fit: cover; }

/* Comparison */
.af-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.af-col { border-radius: var(--radius-lg); padding: 1.6rem; border: 1px solid var(--color-line); }
.af-col--them { background: var(--color-surface); }
.af-col--us { background: color-mix(in srgb, var(--color-accent) 12%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-accent) 40%, var(--color-line)); }
.af-col h3 { font-size: 1.15rem; margin-bottom: 1rem; }
.af-col ul { display: grid; gap: 0.8rem; }
.af-col li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.93rem; color: var(--color-ink-2); }
.af-col--them svg { color: var(--color-muted); }
.af-col--us svg { color: var(--color-primary); }
.af-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .af-compare__grid { grid-template-columns: 1fr; } }

.af-cta .actions .link-call { color: #fff; }
.af-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior af-hero" aria-label="Air filter replacement in Naples, FL">
    <div class="container">
        <nav class="breadcrumb af-breadcrumb-nav" aria-label="Breadcrumb" style="font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Air Filters</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Filters &amp; Indoor Air Quality &middot; Naples, FL</span>
                <h1 class="hero-title">Air Filter Replacement in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling keeps Naples homes breathing cleaner and running efficiently with the right air and furnace filters &mdash; correct size, correct MERV rating, changed on the schedule our dusty, pollen-heavy Florida climate actually demands.</p>
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
<section class="section af-signs" aria-label="Signs your air filter needs attention">
    <div class="container">
        <div class="af-signs__quote reveal-left">
            <p class="pull-quote" style="margin:0;">In Naples, the cheapest part in your whole system protects the most expensive one &mdash; a $10 filter is all that stands between pollen, dust, and your coil.</p>
        </div>
        <div class="af-signs__head reveal-up">
            <span class="eyebrow-label">Small Part, Big Job</span>
            <h2>How do you know your Naples air filter needs changing?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling looks for weak airflow, dusty surfaces, and a system that runs and runs &mdash; the signs of a clogged filter. El Dorado Heating &amp; Cooling LLC is a licensed Florida HVAC contractor based in Naples, serving Naples, Bonita Springs, and Marco Island across Collier County, and we make filters simple to stay ahead of.</p>
        </div>
        <div class="af-signs__cards">
            <div class="af-sign reveal-up">
                <div class="af-sign__icon"><?php echo $svg['wind']; ?></div>
                <div><h3>Weak airflow at the vents</h3><p>If rooms feel stuffy and air barely moves, a clogged filter is usually choking the system before anything else is wrong.</p></div>
            </div>
            <div class="af-sign reveal-up reveal-delay-1">
                <div class="af-sign__icon"><?php echo $svg['leaf']; ?></div>
                <div><h3>Dust and allergy flare-ups</h3><p>Surfaces that dust over quickly and worse allergies indoors mean your filter isn&rsquo;t catching Naples pollen and mold spores.</p></div>
            </div>
            <div class="af-sign reveal-up reveal-delay-2">
                <div class="af-sign__icon"><?php echo $svg['ruler']; ?></div>
                <div><h3>Wrong size in the slot</h3><p>A filter that doesn&rsquo;t fit snugly lets unfiltered air slip past the edges straight onto your coil and blower.</p></div>
            </div>
            <div class="af-sign reveal-up reveal-delay-3">
                <div class="af-sign__icon"><?php echo $svg['layers']; ?></div>
                <div><h3>Gray, matted filter face</h3><p>Hold it to the light &mdash; if you can&rsquo;t see through it, it&rsquo;s past due and making your system work overtime.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section af-expert" aria-label="Why choose El Dorado for air filters">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">The Right Filter</span>
                <h2>What makes El Dorado&rsquo;s filter advice different in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling matches the filter to your equipment, not to whatever fits the slot. Our family-owned team brings more than 60 years of combined experience and knows that in Naples the right MERV rating protects both your air and your airflow &mdash; a balance a bigger-is-better filter gets wrong.</p>
                <div class="af-merv">
                    <b>MERV 8&ndash;11</b>
                    <span>The sweet spot for most Naples homes &mdash; captures dust, pollen, and mold spores without starving your system for air.</span>
                </div>
                <ul class="af-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Correct size, every time</b><p>We confirm the exact dimensions so no unfiltered air sneaks past the edges of the filter.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Rating matched to your system</b><p>Enough filtration to clean the air without overworking a residential blower.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>A schedule you&rsquo;ll actually keep</b><p>We set a change interval that fits your home, pets, and pollen exposure &mdash; and remind you at every visit.</p></div></li>
                </ul>
            </div>
            <figure class="af-expert__figure reveal-right">
                <picture>
                    <source type="image/avif" srcset="/assets/images/tech-outdoor-unit-480.avif 480w, /assets/images/tech-outdoor-unit-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/tech-outdoor-unit.jpg" srcset="/assets/images/tech-outdoor-unit-480.webp 480w, /assets/images/tech-outdoor-unit-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling technician checking a system and filter at a Naples home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light af-included" aria-label="What air filter service includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Service</span>
            <h2>What does El Dorado&rsquo;s air filter service cover?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling handles the whole filter picture for Naples homes &mdash; sizing, rating, replacement, and airflow check &mdash; and can upgrade your filtration when allergies or pets call for it. We leave you with the right filters and a simple schedule to keep the system protected.</p>
        </div>
        <ul class="af-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Air and furnace filter replacement</span></li>
            <li><?php echo $svg['check']; ?><span>Exact filter size confirmed and fitted</span></li>
            <li><?php echo $svg['check']; ?><span>MERV rating matched to your system</span></li>
            <li><?php echo $svg['check']; ?><span>Airflow checked after the change</span></li>
            <li><?php echo $svg['check']; ?><span>Filter slot and housing inspected</span></li>
            <li><?php echo $svg['check']; ?><span>Upgraded filtration options for allergies or pets</span></li>
            <li><?php echo $svg['check']; ?><span>Right-size filters left on hand</span></li>
            <li><?php echo $svg['check']; ?><span>A change schedule built for your home</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado get your filters right?</h2>
            <div class="af-steps">
                <div class="af-step"><span class="af-step__n">1</span><b>Check The Fit</b><span>We measure the slot and confirm the exact filter size your Naples system needs.</span></div>
                <div class="af-step"><span class="af-step__n">2</span><b>Match The Rating</b><span>We pick a MERV level that cleans the air without straining your blower.</span></div>
                <div class="af-step"><span class="af-step__n">3</span><b>Replace &amp; Test</b><span>We install a fresh filter and confirm airflow is restored at the vents.</span></div>
                <div class="af-step"><span class="af-step__n">4</span><b>Set The Schedule</b><span>You leave with the right filters and a change interval that fits your home.</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top af-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="af-trust__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service trucks ready for a Naples job" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners let El Dorado handle their filters?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. Homeowners lean on us for filters because we make the right choice simple, keep the correct size on hand, and answer the phone 24/7 if airflow ever drops off between visits.</p>
                <ul class="af-diffs">
                    <li><?php echo $svg['check']; ?><div><b>A real local team</b><p>Family-owned since <?php echo $yearEstablished; ?> &mdash; not a rotating cast of subcontractors.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear guidance on filters and air quality in English and Spanish.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Around-the-clock backup</b><p>If a clogged filter turns into no cooling, we&rsquo;re reachable 24/7.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section af-compare" aria-label="El Dorado filter service compared to a grab-and-go swap">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>Why is the right filter worth more than the cheapest one?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling treats the filter as system protection, not a grab-and-go purchase. Getting the size, rating, and schedule right is what keeps your Naples coil clean, your airflow strong, and your indoor air healthy &mdash; the things a random big-box filter quietly gets wrong.</p>
        </div>
        <div class="af-compare__grid">
            <div class="af-col af-col--them reveal-left">
                <h3>A grab-and-go swap</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Whatever size looked close on the shelf</span></li>
                    <li><?php echo $svg['x']; ?><span>Highest MERV number, airflow be damned</span></li>
                    <li><?php echo $svg['x']; ?><span>Changed &ldquo;whenever we remember&rdquo;</span></li>
                    <li><?php echo $svg['x']; ?><span>Loose fit that lets dust bypass the filter</span></li>
                    <li><?php echo $svg['x']; ?><span>No one checks airflow or the coil</span></li>
                </ul>
            </div>
            <div class="af-col af-col--us reveal-right">
                <h3>El Dorado filter service</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Exact size confirmed for a snug fit</span></li>
                    <li><?php echo $svg['check']; ?><span>MERV matched to protect air and airflow</span></li>
                    <li><?php echo $svg['check']; ?><span>A change schedule built for your home</span></li>
                    <li><?php echo $svg['check']; ?><span>Sealed fit that keeps debris off the coil</span></li>
                    <li><?php echo $svg['check']; ?><span>Airflow checked and system protected</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light af-faq" aria-label="Air filter FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about air filters?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on change frequency, MERV ratings, and protecting your system and your air.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top af-cta" aria-label="Get the right air filter">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Cleaner Air, Protected System</span>
            <h2>Ready to get the right filter protecting your Naples home?</h2>
            <p>Stop guessing at the hardware store. Let El Dorado Heating &amp; Cooling match the size and rating to your system, restore your airflow, and set a schedule you can keep &mdash; call now or request your free estimate.</p>
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
