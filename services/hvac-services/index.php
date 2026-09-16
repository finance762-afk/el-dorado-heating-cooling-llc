<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'hvac-services';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'HVAC Services in Naples, FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Complete HVAC services in Naples, FL — AC repair, heating, installation, maintenance & ductwork from El Dorado Heating & Cooling. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/hvac-services/';

// The 3 themed groups covering all 25 individual offerings under this flagship page.
$groupServices = [
    [
        'name'      => 'Air Conditioning',
        'icon'      => 'wind',
        'desc'      => 'Cooling repair, installation, and replacement for every AC type Naples homes run.',
        'bullets'   => ['Repair & replacement', 'New system installs', 'Every AC type covered'],
        'detail'    => 'Naples runs its air conditioner nearly every month of the year, so when a system fails, it fails fast in the heat. El Dorado Heating &amp; Cooling handles Air Conditioning Repair, Air Conditioning Installation, and Air Conditioning Replacement for every setup in Collier County &mdash; Central Air Conditioning and Residential Air Conditioning for single-family homes, Cooling System Installation for new construction, plus Window Air Conditioners, Wall Air Conditioners, Portable Air Conditioners, and Mobile Home Air Conditioning units common across Golden Gate Estates and East Naples manufactured communities. Need a part instead of a full repair? We stock and source Air Conditioner Parts for most residential brands.',
        'offerings' => ['Air Conditioning Repair', 'Air Conditioning Installation', 'Air Conditioning Replacement', 'Central Air Conditioning', 'Residential Air Conditioning', 'Cooling System Installation', 'Air Conditioner Parts', 'Window Air Conditioners', 'Wall Air Conditioners', 'Mobile Home Air Conditioning', 'Portable Air Conditioners'],
    ],
    [
        'name'      => 'Heating Systems',
        'icon'      => 'flame',
        'desc'      => "Heating repair, installation, and conversions built for Florida's short but real cold snaps.",
        'bullets'   => ['Gas & electric heat', 'Oil-to-gas conversions', 'Same-day heating repair'],
        'detail'    => 'Florida heating sounds like a contradiction until a January cold front drops Naples into the 40s and a system that hasn&rsquo;t run since March won&rsquo;t start. El Dorado Heating &amp; Cooling provides Heating Repair, Heating Installation, and Central Heating Systems service across Collier County, along with Heating Equipment Repair for furnaces, boilers, and heat pumps, and annual Heating Inspections that catch a bad igniter before the next cold snap. We also handle the less common calls: Temporary Heating for job sites and events, Gas Heating and Oil-to-Gas Furnace Conversion for older homes switching fuel sources, plus Floor Heating and fully Custom Heating Systems for renovations and new builds.',
        'offerings' => ['Heating Repair', 'Heating Installation', 'Central Heating Systems', 'Heating Equipment Repair', 'Heating Inspections', 'Temporary Heating', 'Gas Heating', 'Oil-to-Gas Furnace Conversion', 'Floor Heating', 'Custom Heating Systems'],
    ],
    [
        'name'      => 'Whole-Home HVAC',
        'icon'      => 'house',
        'desc'      => 'Complete HVAC installs, maintenance, and ductwork for whole-home comfort control.',
        'bullets'   => ['Full HVAC installs', 'Seasonal maintenance plans', 'Ductwork design & repair'],
        'detail'    => 'Most Naples comfort calls aren&rsquo;t just an AC problem or a heating problem &mdash; they&rsquo;re a whole-system problem. El Dorado Heating &amp; Cooling handles complete HVAC Installation for new construction and full replacements, ongoing HVAC Maintenance plans built for our near-continuous cooling season, and HVAC Repair when any part of the system stops working. We also design, install, and repair HVAC Ductwork, sealing the leaks and sizing the runs that keep humid Southwest Florida air from short-cycling your equipment.',
        'offerings' => ['HVAC Installation', 'HVAC Maintenance', 'HVAC Repair', 'HVAC Ductwork'],
    ],
];

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does full HVAC service cost in Naples, FL?',
        'a' => 'Costs vary widely by job — a heating repair can run $150–$500, a full AC replacement often lands between $4,500 and $9,000, and ductwork or a whole-home install is priced on scope. El Dorado Heating & Cooling always inspects first and gives you an upfront, written price before any work starts on your Naples home.',
    ],
    [
        'q' => 'Does El Dorado handle both heating and cooling in the same visit?',
        'a' => 'Yes. Because most Naples systems share the same air handler, ductwork, and thermostat for heating and cooling, our technicians are equipped to diagnose and repair either side on one call. If your AC issue turns out to be a heating-side part, we can usually address both without a second appointment.',
    ],
    [
        'q' => 'Can you convert an oil furnace to gas heat in a Naples home?',
        'a' => 'Yes — El Dorado Heating & Cooling performs oil-to-gas furnace conversions for older Collier County homes, handling the new gas line coordination, equipment swap, and safety testing. Gas heat is typically cheaper to run and more common in newer Naples construction, so conversions often pay for themselves over a few winters.',
    ],
    [
        'q' => 'How fast can you respond to an AC or heating emergency in Naples?',
        'a' => 'El Dorado Heating & Cooling offers 24/7 emergency service and typically reaches Naples, Bonita Springs, and Marco Island homes the same day a call comes in. A dead AC in July or a furnace that won\'t fire during a cold snap both qualify — call the number above any time, day or night.',
    ],
    [
        'q' => 'Do you service mobile home and manufactured housing HVAC systems?',
        'a' => 'Yes. Mobile Home Air Conditioning units have different clearance, ductwork, and electrical requirements than standard residential systems, and our technicians service them regularly across Golden Gate Estates and East Naples communities. We also handle window, wall, and portable units for smaller or transitional living spaces.',
    ],
    [
        'q' => 'What does an HVAC ductwork inspection actually check?',
        'a' => 'El Dorado Heating & Cooling checks every duct run for leaks, disconnections, crushed sections, and correct sizing — the issues that let cooled or heated air escape into your attic before it reaches a room. In Naples\' humidity, leaky ducts also pull in moist attic air, which drives up bills and can invite mold.',
    ],
    [
        'q' => 'Do you install floor heating or custom heating systems?',
        'a' => 'We do. Floor heating and fully custom heating systems are less common in Southwest Florida than a standard heat strip or heat pump, but El Dorado Heating & Cooling designs and installs them for renovations, additions, and homeowners who want a specific comfort setup rather than a one-size-fits-all system.',
    ],
    [
        'q' => 'Is El Dorado licensed for HVAC installs and heating conversions in Collier County?',
        'a' => 'Yes. El Dorado Heating & Cooling is a licensed, insured Florida HVAC contractor based in Naples, and every installation, replacement, or fuel-source conversion we perform meets Collier County permitting and code requirements. We pull the required permits so your new system is inspected and covered from day one.',
    ],
];

// Icon set (inline SVG from references/lucide-icons — no data-lucide, no CDN).
$svg = [
    'phone' => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge' => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock' => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users' => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check' => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'x'     => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'wind'  => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'flame' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'house' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
];

// Flatten all 25 offerings (in group order) for the schema catalog.
$allOfferings = array_merge($groupServices[0]['offerings'], $groupServices[1]['offerings'], $groupServices[2]['offerings']);

// Schema — Service (@id, with catalog of all 25 offerings) + BreadcrumbList, plus FAQPage.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-hvac-services',
    'serviceType' => 'HVAC',
    'name'        => 'HVAC Services in Naples, FL',
    'description' => 'Complete HVAC services in Naples, FL — air conditioning repair, installation, and replacement; heating repair, installation, and fuel conversions; and whole-home HVAC installs, maintenance, and ductwork.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(fn($a) => ['@type' => 'City', 'name' => $a['city'] . ', ' . $a['state']], $serviceAreas),
    'url'         => $canonicalUrl,
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'HVAC Services',
        'itemListElement' => array_map(fn($name) => [
            '@type' => 'Offer',
            'itemOffered' => ['@type' => 'Service', 'name' => $name],
        ], $allOfferings),
    ],
];
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'HVAC Services', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== HVAC Services (flagship group page) composition (tokens only) ===== */
.svc-hero { padding-top: 0.75rem; }
.svc-hero .hero-chips { margin-top: 0.4rem; }

/* Benefit strip — 4 verifiable facts */
.hvac-benefits { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.hvac-benefit { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.4rem; display: grid; gap: 0.5rem; }
.hvac-benefit b { font-family: var(--font-accent); font-size: 1.9rem; line-height: 1; color: var(--color-primary); }
.hvac-benefit span { font-size: 0.9rem; color: var(--color-ink-2); }
@media (max-width: 960px) { .hvac-benefits { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 560px) { .hvac-benefits { grid-template-columns: 1fr; } }

/* Themed offering detail rows */
.hvac-detail__row { display: grid; grid-template-columns: 88px 1fr; gap: 1.25rem; align-items: start; padding: 1.7rem 0; border-top: 1px solid var(--color-line); }
.hvac-detail__row:first-of-type { border-top: 0; }
.hvac-detail__badge { width: 88px; height: 88px; border-radius: var(--radius-lg); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-secondary) 15%, transparent); }
.hvac-detail__badge svg { width: 34px; height: 34px; }
.hvac-detail__row h3 { font-size: 1.2rem; margin-bottom: 0.35rem; }
.hvac-detail__row p { margin: 0; color: var(--color-ink-2); max-width: 68ch; }
.hvac-detail__tags { display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 0.8rem; }
.hvac-detail__tags span { font-family: var(--font-accent); font-size: 0.7rem; letter-spacing: 0.06em; text-transform: uppercase; color: var(--color-accent-dark); background: color-mix(in srgb, var(--color-accent) 16%, transparent); padding: 0.25rem 0.6rem; border-radius: var(--radius-full); }
@media (max-width: 640px) { .hvac-detail__row { grid-template-columns: 1fr; } .hvac-detail__badge { width: 64px; height: 64px; } }

/* Trust split figure */
.svc-figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.svc-figure img { width: 100%; height: 100%; object-fit: cover; }
.svc-diffs { display: grid; gap: 0.9rem; margin-top: 1.25rem; }
.svc-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.svc-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.svc-diffs b { display: block; }
.svc-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

/* Comparison — one call vs. three separate contractors */
.hvac-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.compare-col { border-radius: var(--radius-lg); padding: 1.6rem; border: 1px solid var(--color-line); }
.compare-col--them { background: var(--color-surface); }
.compare-col--us { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.compare-col h3 { font-size: 1.15rem; margin-bottom: 1rem; }
.compare-col ul { display: grid; gap: 0.8rem; }
.compare-col li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.93rem; color: var(--color-ink-2); }
.compare-col--them svg { color: var(--color-muted); }
.compare-col--us svg { color: var(--color-primary); }
.compare-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .hvac-compare__grid { grid-template-columns: 1fr; } }

/* Final CTA */
.svc-cta .actions .link-call { color: var(--color-white); }
.svc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior svc-hero" aria-label="HVAC services in Naples, FL">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">HVAC Services</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Cooling, Heating &amp; Whole-Home HVAC &middot; Naples, FL</span>
                <h1 class="hero-title">HVAC <span class="text-accent">Services</span> in Naples, FL</h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling is a licensed, family-owned HVAC contractor covering every AC and heating need in Collier County &mdash; repair, installation, replacement, and ductwork &mdash; across 25 individual services under one bilingual local team.</p>
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
<section class="section" aria-label="About our HVAC services">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Overview</span>
            <h2>What does full-service HVAC coverage from El Dorado look like in Naples?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed Florida HVAC contractor based in Naples, covering 25 individual air conditioning, heating, and whole-home services across Collier County. Whether it&rsquo;s a dead compressor in July or a furnace that won&rsquo;t fire in January, one bilingual local team handles the repair, installation, or replacement &mdash; near-me in Naples, without passing you to a subcontractor.</p>
        </div>
        <div class="hvac-benefits">
            <div class="hvac-benefit reveal-up"><b>25</b><span>Individual HVAC services under one roof, from AC parts to ductwork.</span></div>
            <div class="hvac-benefit reveal-up reveal-delay-1"><b>Year-Round</b><span>Naples cools nearly 12 months a year, so we staff for it every month.</span></div>
            <div class="hvac-benefit reveal-up reveal-delay-2"><b>24/7</b><span>Emergency AC and heating calls answered any hour, any day.</span></div>
            <div class="hvac-benefit reveal-up reveal-delay-3"><b>Since <?php echo $yearEstablished; ?></b><span>Family-owned, serving Naples, Bonita Springs, and Marco Island.</span></div>
        </div>
    </div>
</section>

<!-- ============================= 3-CARD THEMED GRID ============================= -->
<section class="section section--light" aria-label="HVAC service categories">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>Which <span class="text-accent">HVAC services</span> does El Dorado handle in Naples?</h2>
            <p class="hero-answer">El Dorado Heating &amp; Cooling groups its 25 offerings into three areas of work &mdash; air conditioning, heating systems, and whole-home HVAC &mdash; so you can find the right fit fast, whether it&rsquo;s a single repair or a full system replacement.</p>
        </div>
        <div class="services-grid">
            <?php $ctints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
            $cphotos = ['tech-outdoor-unit', 'fleet-trucks', 'team-fleet'];
            foreach ($groupServices as $i => $gs):
                $photo = $cphotos[$i % 3];
            ?>
            <article class="service-card-with-image <?php echo $ctints[$i % 3]; ?> reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
                <div class="service-card__image">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/<?php echo $photo; ?>-480.avif 480w, /assets/images/<?php echo $photo; ?>-960.avif 960w" sizes="(max-width: 768px) 100vw, 380px">
                        <img src="/assets/images/<?php echo $photo; ?>.jpg" srcset="/assets/images/<?php echo $photo; ?>-480.webp 480w, /assets/images/<?php echo $photo; ?>-960.webp 960w" sizes="(max-width: 768px) 100vw, 380px" alt="El Dorado Heating &amp; Cooling <?php echo strtolower($gs['name']); ?> service in Naples, FL" width="600" height="360" loading="lazy" decoding="async">
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

<!-- ============================= IN-DETAIL (all 25 offerings) ============================= -->
<section class="section" aria-label="HVAC service details">
    <div class="container container-narrow">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">In Detail</span>
            <h2>What&rsquo;s included under each HVAC category in Naples?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling breaks down all 25 services inside the three categories above, so you can see exactly which offering matches your system &mdash; from a single Air Conditioner Parts swap to a full Oil-to-Gas Furnace Conversion.</p>
        </div>
        <?php foreach ($groupServices as $gs): ?>
        <div class="hvac-detail__row reveal-up">
            <div class="hvac-detail__badge"><?php echo $svg[$gs['icon']]; ?></div>
            <div>
                <h3><?php echo htmlspecialchars($gs['name']); ?></h3>
                <p><?php echo $gs['detail']; ?></p>
                <div class="hvac-detail__tags">
                    <?php foreach ($gs['offerings'] as $o): ?><span><?php echo htmlspecialchars($o); ?></span><?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============================= PROCESS ============================= -->
<section class="section section--light" aria-label="Our HVAC service process">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">How It Works</span>
            <h2>What happens when you call El Dorado for HVAC service?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling starts every job with a real diagnosis, gives you upfront pricing before touching your system, does the repair, install, or conversion right the first time, and confirms performance before we leave your Naples home.</p>
        </div>
        <ol class="process-steps reveal-up">
            <li><b>Diagnose &amp; Explain</b><span>We identify the actual cooling, heating, or ductwork issue and explain it in plain terms.</span></li>
            <li><b>Upfront Pricing</b><span>You get a clear price for the repair, install, or conversion before any work begins.</span></li>
            <li><b>Do The Work Right</b><span>Licensed technicians complete the job to Collier County code, permitted when required.</span></li>
            <li><b>Confirm &amp; Follow Up</b><span>We test the system under load and stand behind the work after we leave.</span></li>
        </ol>
    </div>
</section>

<!-- ============================= TRUST (dark) ============================= -->
<section class="section on-dark texture-grain slant-top" aria-label="Why choose El Dorado for HVAC service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="svc-figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck arriving for an HVAC call in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners trust El Dorado with their whole HVAC system?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish. One team covers cooling, heating, and ductwork, so you&rsquo;re never juggling three contractors for one comfort problem.</p>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>One team, 25 services</b><p>From AC parts to furnace conversions, the same licensed crew handles it all.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Built for Southwest Florida</b><p>We size and service equipment for salt air, humidity, and near-year-round runtime.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual, local, accountable</b><p>The same Naples team every visit, reachable 24/7 if anything comes up.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section" aria-label="One HVAC team vs. multiple contractors">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>Why call one HVAC company instead of three separate contractors?</h2>
            <p class="answer-block">Splitting AC, heating, and ductwork across different companies means repeating your story, coordinating schedules, and hoping the work matches up. El Dorado Heating &amp; Cooling covers all three under one visit, one invoice, and one point of contact in Naples.</p>
        </div>
        <div class="hvac-compare__grid">
            <div class="compare-col compare-col--them reveal-left">
                <h3>Three separate contractors</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>A different company for AC, heating, and ductwork</span></li>
                    <li><?php echo $svg['x']; ?><span>Re-explain the problem and home details each time</span></li>
                    <li><?php echo $svg['x']; ?><span>Three separate invoices and warranty terms</span></li>
                    <li><?php echo $svg['x']; ?><span>No one owns the whole-system result</span></li>
                    <li><?php echo $svg['x']; ?><span>Scheduling gaps between visits and diagnoses</span></li>
                </ul>
            </div>
            <div class="compare-col compare-col--us reveal-right">
                <h3>El Dorado Heating &amp; Cooling</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Cooling, heating, and ductwork from one licensed team</span></li>
                    <li><?php echo $svg['check']; ?><span>One technician who sees the full system</span></li>
                    <li><?php echo $svg['check']; ?><span>One clear invoice, documented for your records</span></li>
                    <li><?php echo $svg['check']; ?><span>A single point of contact, 24/7, for follow-up</span></li>
                    <li><?php echo $svg['check']; ?><span>Faster resolution, fewer appointments</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light" aria-label="HVAC services FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about El Dorado&rsquo;s HVAC services?</h2>
            <p>Straight answers on cost, timing, and coverage from the El Dorado Heating &amp; Cooling team.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Schedule HVAC service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">One Call Does It All</span>
            <h2>Ready to get your Naples HVAC system fixed, installed, or replaced?</h2>
            <p>From a single AC repair to a full heating conversion, El Dorado Heating &amp; Cooling covers it &mdash; call now or request your free estimate and we&rsquo;ll reach out today.</p>
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
