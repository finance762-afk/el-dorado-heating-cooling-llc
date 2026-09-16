<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle       = 'HVAC & AC Repair in Naples, FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'El Dorado Heating & Cooling LLC is a family-owned Naples, FL HVAC company offering 24/7 AC repair, installation, and maintenance. Call (239) 404-6797 today.';
$canonicalUrl    = $siteUrl . '/';
$currentPage     = 'home';
$pageType        = 'home';
$ogType          = 'website';

// Hero image (allocated for /index.php): white El Dorado service truck in a Naples driveway.
$heroPreload = [
    'srcset' => '/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w',
    'sizes'  => '(max-width: 900px) 100vw, 45vw',
];

// Homepage FAQs (from research brief + local specifics) — also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How often should I have my AC system serviced in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling recommends professional AC maintenance twice a year in Southwest Florida — before cooling season in May and again in the fall. Naples\' humidity and coastal salt air accelerate wear, and regular service prevents costly breakdowns during peak heat.',
    ],
    [
        'q' => 'What should I do if my air conditioner stops working during the hot season?',
        'a' => 'Call El Dorado Heating & Cooling right away for 24/7 emergency service — we offer same-day diagnosis and repair for most systems. Until we arrive, close your blinds, turn off heat-generating appliances, and stay in the coolest room of the house.',
    ],
    [
        'q' => 'Why is my electric bill so high during Naples summers?',
        'a' => 'Naples heat and humidity make AC systems run harder and longer. A professional tune-up from El Dorado Heating & Cooling can improve efficiency by 5–15% — we check refrigerant levels, clean coils, and make sure your system isn\'t cycling longer than it should.',
    ],
    [
        'q' => 'How long do air conditioning systems typically last in Florida?',
        'a' => 'With proper maintenance, most AC systems last 12–15 years in our climate. Salt air and continuous cooling demand can shorten that. El Dorado Heating & Cooling will assess your system\'s condition and help you plan a replacement before it fails on the hottest day.',
    ],
    [
        'q' => 'What areas around Naples does El Dorado Heating & Cooling serve?',
        'a' => 'El Dorado Heating & Cooling is based in Naples and serves homeowners across Naples, Bonita Springs, Marco Island, and the surrounding Collier County communities. We provide service in both English and Spanish.',
    ],
    [
        'q' => 'Does El Dorado Heating & Cooling offer emergency service after hours?',
        'a' => 'Yes. El Dorado Heating & Cooling is available around the clock for emergency AC and heating repair, because a Florida home should never sit without cooling. We answer 24/7, including weekends, with same-day service whenever possible.',
    ],
];

// Inline SVG icon set (pasted from references/lucide-icons/ at build time — no data-lucide, no CDN).
$svg = [
    'wind'        => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'droplets'    => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'sun'         => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
    'home'        => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'wrench'      => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'shield'      => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'layers'      => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    'leaf'        => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
    'badge'       => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'users'       => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'clock'       => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'snowflake'   => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>',
    'flame'       => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'star'        => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>',
    'pin'         => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'award'       => '<svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>',
    'phone'       => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'mail'        => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>',
    'clock20'     => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'pin20'       => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
];

// Home services grid: the 8 lead service-group pages, each with a real client photo, icon, and 3 benefit bullets.
$homeCards = [
    ['slug' => 'hvac-services',            'name' => 'HVAC Services',          'icon' => 'wind',     'photo' => 'tech-outdoor-unit', 'palt' => 'El Dorado technician servicing an outdoor AC unit at a Naples home', 'desc' => 'Full-service repair, installation, and upkeep for cooling and heating.', 'bullets' => ['AC & heating repair', 'New system installation', 'Ductwork & tune-ups']],
    ['slug' => 'cleaning-services',        'name' => 'Cleaning Services',      'icon' => 'droplets', 'photo' => 'fleet-trucks',      'palt' => 'El Dorado Heating & Cooling service trucks ready for a Naples job', 'desc' => 'Deep cleaning of coils and ducts to restore airflow and efficiency.', 'bullets' => ['Coil & condenser cleaning', 'Full duct cleaning', 'Better indoor air']],
    ['slug' => 'seasonal-services',        'name' => 'Seasonal Services',      'icon' => 'sun',      'photo' => 'team-fleet',        'palt' => 'The El Dorado Heating & Cooling team with their Naples service fleet', 'desc' => 'Pre-season checkups that keep your system ready for peak heat.', 'bullets' => ['Thermostat & fan service', 'Compressor checks', 'Air duct service']],
    ['slug' => 'rooftop-air-conditioners', 'name' => 'Rooftop Air Conditioners','icon' => 'home',     'photo' => 'hero-service-truck', 'palt' => 'El Dorado service truck equipped for rooftop AC work in Naples', 'desc' => 'Install, repair, and maintenance for rooftop and commercial units.', 'bullets' => ['Commercial rooftop units', 'Leak & refrigerant checks', 'Scheduled maintenance']],
    ['slug' => 'ac-maintenance',           'name' => 'AC Maintenance',         'icon' => 'wrench',   'photo' => 'tech-outdoor-unit', 'palt' => 'El Dorado technician performing AC maintenance on a Naples home', 'desc' => 'Annual plans that prevent breakdowns before the heat arrives.', 'bullets' => ['Seasonal inspections', 'Refrigerant & filter checks', 'Priority service']],
    ['slug' => 'ac-tune-ups',              'name' => 'AC Tune-Ups',            'icon' => 'shield',   'photo' => 'fleet-trucks',      'palt' => 'El Dorado Heating & Cooling fleet parked and ready for tune-up calls', 'desc' => 'A quick tune-up that improves efficiency and lowers your bill.', 'bullets' => ['Coil cleaning', 'Refrigerant top-off', '5–15% efficiency gain']],
    ['slug' => 'air-filters',              'name' => 'Air Filters',            'icon' => 'layers',   'photo' => 'team-fleet',        'palt' => 'El Dorado Heating & Cooling crew serving Naples homeowners', 'desc' => 'Filter replacement that protects your system and your air.', 'bullets' => ['Furnace & AC filters', 'Right size, every time', 'Cleaner home air']],
    ['slug' => 'air-purifiers',            'name' => 'Air Purifiers',          'icon' => 'leaf',     'photo' => 'hero-service-truck', 'palt' => 'El Dorado service truck stocked for indoor air-quality installs', 'desc' => 'Whole-home purification for cleaner, healthier indoor air.', 'bullets' => ['Whole-home systems', 'Allergen & odor control', 'Professional install']],
];
$tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Homepage-specific composition (tokens only) ===== */
.home-hero .hero-answer { max-width: 34rem; }
.home-hero .hero-visual__img img { object-position: 50% 50%; }
.home-hero .photo-stack__tag { max-width: 15rem; }

/* Ticker content */
.home-ticker .ticker-track > span { color: var(--color-ink-2); }
.home-ticker .ticker-track svg { color: var(--color-primary); }
.home-ticker .ticker-dot { color: var(--color-accent-dark); font-weight: 700; }

/* Proof strip — verifiable facts */
.home-proof .stat-number { font-size: 2rem; }
.home-proof .stat-item { text-align: left; }

/* Services intro */
.home-services .section-head { max-width: 64ch; margin-inline: auto; text-align: center; justify-items: center; }
.home-services .section-head .hero-answer { margin-inline: auto; }
.home-services .services-actions { display: flex; justify-content: center; margin-top: clamp(1.75rem, 4vw, 2.75rem); }

/* Signature climate band (dark, C7 signature section) */
.climate-band { color: #fff; }
.climate-band .section-head { max-width: 56ch; }
.climate-grid { margin-top: clamp(1.5rem, 3vw, 2.5rem); }
.climate-card { background: rgba(var(--color-secondary-rgb), 0.10); border: 1px solid rgba(255, 255, 255, 0.16); border-radius: var(--radius-lg); padding: clamp(1.4rem, 3vw, 2rem); display: grid; gap: 0.7rem; align-content: start; }
.climate-card__icon { width: 54px; height: 54px; border-radius: var(--radius-lg); display: grid; place-items: center; color: var(--color-accent-bright); background: rgba(255, 255, 255, 0.10); }
.climate-card__icon svg { width: 28px; height: 28px; }
.climate-card h3 { color: #fff; }
.climate-card p { margin: 0; color: rgba(255, 255, 255, 0.82); font-size: 0.95rem; }

/* About / process — asymmetric */
.home-about .about-split { grid-template-columns: 1.35fr 1fr; align-items: center; }
.home-about .eyebrow-label { margin-bottom: 0.4rem; }
.home-about .about-lead { font-size: var(--fs-lead); color: var(--color-ink-2); }
.home-about .about-identity { font-weight: 600; color: var(--color-ink); }
.home-about .about-stat-card .stat-number { font-family: var(--font-accent); font-size: 1.5rem; line-height: 1; color: var(--color-primary); }
.home-about .about-stat-card .stat-number span { color: var(--color-accent-dark); }
.home-about .about-stat-card .stat-label { display: block; font-size: 0.8rem; color: var(--color-muted); margin-top: 0.25rem; }
@media (max-width: 900px) { .home-about .about-split { grid-template-columns: 1fr; } }

/* CTA band (dark) */
.home-cta { color: #fff; }
.home-cta .cta-eyebrow { color: var(--color-accent-bright); }
.home-cta .actions .link-call { color: #fff; }
.home-cta .actions .link-call svg { color: var(--color-accent-bright); }

/* Estimate section */
.home-estimate .estimate .card { background: var(--color-surface); }
.home-estimate .next-steps { margin-bottom: 1.5rem; }
.home-estimate .est-area { font-size: 0.92rem; color: var(--color-ink-2); margin-top: 1.25rem; }
.home-estimate .form-actions { margin-top: 0.5rem; }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--light home-hero" aria-label="Introduction">
    <div class="container">
        <div class="hero-grid hero-grid--visual">
            <div class="hero-text">
                <span class="eyebrow">Naples, FL &middot; Family-Owned &amp; Operated</span>
                <h1 class="hero-title">Dependable <span class="text-accent">HVAC repair</span> for Naples, FL homes.</h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling is a family-owned Naples HVAC company keeping homes cool through Florida&rsquo;s heat, humidity, and salt air &mdash; with 24/7 emergency service you can actually reach.</p>
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

            <div class="hero-visual">
                <div class="hero-visual__img">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                        <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="White El Dorado Heating &amp; Cooling service truck parked in a Naples driveway" width="960" height="960" loading="eager" fetchpriority="high">
                    </picture>
                </div>
                <div class="photo-stack__tag">
                    <b>On the road daily</b>
                    <span>Naples &middot; Bonita Springs &middot; Marco Island</span>
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
                        <div class="form-row"><label class="sr-only" for="hero-service">Service needed</label><select id="hero-service" name="service"><option value="">What do you need?</option><?php foreach ($servicePages as $heroSvc): ?><option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"><?php echo htmlspecialchars($heroSvc['name']); ?></option><?php endforeach; ?></select></div>
                        <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
                        <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
                    </form>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- ============================= TICKER ============================= -->
<div class="ticker-strip home-ticker" aria-hidden="true">
    <div class="ticker-track">
        <span><?php echo $svg['snowflake']; ?> 24/7 Emergency Service</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['shield']; ?> Licensed &amp; Insured</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['users']; ?> Family-Owned &amp; Operated</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['pin']; ?> Naples &middot; Bonita Springs &middot; Marco Island</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['clock']; ?> Same-Day Service Available</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['flame']; ?> Heating &amp; Cooling Experts</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['star']; ?> Service in English &amp; Spanish</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['award']; ?> 60+ Years Combined Experience</span><span class="ticker-dot">&bull;</span>
        <!-- duplicate for seamless loop -->
        <span><?php echo $svg['snowflake']; ?> 24/7 Emergency Service</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['shield']; ?> Licensed &amp; Insured</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['users']; ?> Family-Owned &amp; Operated</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['pin']; ?> Naples &middot; Bonita Springs &middot; Marco Island</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['clock']; ?> Same-Day Service Available</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['flame']; ?> Heating &amp; Cooling Experts</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['star']; ?> Service in English &amp; Spanish</span><span class="ticker-dot">&bull;</span>
        <span><?php echo $svg['award']; ?> 60+ Years Combined Experience</span><span class="ticker-dot">&bull;</span>
    </div>
</div>

<!-- ============================= PROOF STRIP ============================= -->
<section class="stats-band home-proof" aria-label="Why homeowners choose El Dorado">
    <div class="container">
        <div class="stats-row">
            <div class="stat-item reveal-up">
                <span class="stat-number">Est. <span><?php echo $yearEstablished; ?></span></span>
                <span class="stat-label">Family-owned &amp; operated in Naples</span>
            </div>
            <div class="stat-item reveal-up reveal-delay-1">
                <span class="stat-number">60+ <span>Yrs</span></span>
                <span class="stat-label">Combined team experience</span>
            </div>
            <div class="stat-item reveal-up reveal-delay-2">
                <span class="stat-number">24/<span>7</span></span>
                <span class="stat-label">Emergency service, 7 days a week</span>
            </div>
            <div class="stat-item reveal-up reveal-delay-3">
                <span class="stat-number">2 <span>Languages</span></span>
                <span class="stat-label">Service in English &amp; Spanish</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================= SERVICES ============================= -->
<section class="section section--light home-services" aria-label="HVAC services">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>What <span class="text-accent">HVAC services</span> does El Dorado offer in Naples?</h2>
            <p class="hero-answer">El Dorado Heating &amp; Cooling handles the full range of home comfort in Southwest Florida &mdash; air conditioning repair, installation, and replacement, heating service, duct and coil cleaning, air quality, and preventive maintenance built for the region&rsquo;s heat and humidity.</p>
        </div>

        <div class="services-grid">
            <?php foreach ($homeCards as $i => $card):
                $tint = $tints[$i % 3];
                $delay = ($i % 3) + 1;
                $p = $card['photo'];
            ?>
            <article class="service-card-with-image <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
                <div class="service-card__image">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/<?php echo $p; ?>-480.avif 480w, /assets/images/<?php echo $p; ?>-960.avif 960w" sizes="(max-width: 720px) 100vw, 300px">
                        <img src="/assets/images/<?php echo $p; ?>.jpg" srcset="/assets/images/<?php echo $p; ?>-480.webp 480w, /assets/images/<?php echo $p; ?>-960.webp 960w" sizes="(max-width: 720px) 100vw, 300px" alt="<?php echo htmlspecialchars($card['palt']); ?>" width="600" height="360" loading="lazy" decoding="async">
                    </picture>
                </div>
                <div class="service-card__body">
                    <div class="service-card__icon"><?php echo $svg[$card['icon']]; ?></div>
                    <h3><?php echo $card['name']; ?></h3>
                    <p class="service-card__desc"><?php echo $card['desc']; ?></p>
                    <ul>
                        <?php foreach ($card['bullets'] as $b): ?><li><?php echo $b; ?></li><?php endforeach; ?>
                    </ul>
                    <a href="/services/<?php echo $card['slug']; ?>/" class="service-card__cta">Learn more</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="services-actions reveal-up">
            <a href="/services/" class="btn btn-secondary btn-lg">View All <?php echo count($servicePages); ?> Services</a>
        </div>
    </div>
</section>

<!-- ============================= SIGNATURE: FLORIDA CLIMATE (dark) ============================= -->
<section class="section on-dark texture-grain slant-top climate-band" aria-label="Why Naples HVAC systems need local expertise">
    <span class="grain-layer" aria-hidden="true"></span>
    <span class="floating-ring" aria-hidden="true" style="top: -80px; right: -60px;"></span>
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Built For Southwest Florida</span>
            <h2>Naples weather is hard on HVAC systems. We plan for it.</h2>
            <p>Between relentless heat, tropical humidity, and coastal salt air, air conditioners here work harder and wear out faster than almost anywhere in the country. El Dorado Heating &amp; Cooling services every system with that reality in mind.</p>
        </div>
        <div class="grid-3 climate-grid">
            <div class="climate-card reveal-left">
                <div class="climate-card__icon"><?php echo $svg['sun']; ?></div>
                <h3>Relentless Heat</h3>
                <p>Naples runs the AC nearly year-round. We size, tune, and repair systems to hold up under months of continuous cooling demand.</p>
            </div>
            <div class="climate-card reveal-up reveal-delay-1">
                <div class="climate-card__icon"><?php echo $svg['droplets']; ?></div>
                <h3>Heavy Humidity</h3>
                <p>Humidity is comfort&rsquo;s real enemy in Florida. We dial in airflow and moisture control so your home feels cool, not clammy.</p>
            </div>
            <div class="climate-card reveal-right reveal-delay-2">
                <div class="climate-card__icon"><?php echo $svg['snowflake']; ?></div>
                <h3>Coastal Salt Air</h3>
                <p>Salt air corrodes coils and outdoor units early. We inspect for corrosion and protect your equipment before it costs you a system.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= ABOUT / PROCESS ============================= -->
<section class="section home-about" aria-label="About El Dorado Heating & Cooling">
    <div class="container">
        <div class="about-split">
            <div class="about-copy reveal-left">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>A Naples family business that treats your comfort like our own</h2>
                <p class="about-lead">El Dorado Heating &amp; Cooling LLC is a family-owned and operated HVAC company bringing more than 60 years of combined experience to the Naples, Bonita Springs, and Marco Island communities. Your home&rsquo;s comfort is our top priority &mdash; and we serve every customer in both English and Spanish.</p>
                <p class="about-identity">El Dorado Heating &amp; Cooling LLC is a licensed Florida HVAC contractor based in Naples, serving Collier County homeowners with air conditioning, heating, ductwork, and indoor air quality services &mdash; day or night.</p>
                <ol class="process-steps">
                    <li><b>Call &amp; Diagnose</b><span>Reach a real person 24/7. We pinpoint the problem fast, on your schedule.</span></li>
                    <li><b>Honest Quote</b><span>Clear, upfront pricing before any work begins &mdash; no surprises on the invoice.</span></li>
                    <li><b>Expert Repair or Install</b><span>Skilled, insured technicians get your system running right the first time.</span></li>
                    <li><b>Comfort Check</b><span>We confirm your home is cooling properly and leave the job site clean.</span></li>
                </ol>
                <div class="about-cta">
                    <a href="/about/" class="btn btn-secondary">More about our story</a>
                </div>
            </div>
            <div class="about-right reveal-right">
                <div class="about-image-primary">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 420px">
                        <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 420px" alt="The El Dorado Heating &amp; Cooling team standing with their service trucks in Naples" width="600" height="600" loading="lazy" decoding="async">
                    </picture>
                </div>
                <div class="about-stat-card">
                    <span class="stat-number">Since <span><?php echo $yearEstablished; ?></span></span>
                    <span class="stat-label">Family-owned in Naples, FL</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= CTA BAND (dark) ============================= -->
<section class="cta-banner on-dark texture-grain edge-wave-top home-cta" aria-label="Request emergency service">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label cta-eyebrow">No Cooling? No Problem.</span>
            <h2>AC out in the Florida heat? We answer 24/7.</h2>
            <p>Don&rsquo;t sweat through a Naples afternoon waiting on a callback. El Dorado Heating &amp; Cooling offers same-day diagnosis and emergency repair &mdash; call now or request your free estimate and we&rsquo;ll reach out today.</p>
        </div>
        <div class="actions reveal-up reveal-delay-1">
            <button type="button" class="btn btn-primary btn-lg" data-open-estimate>Get my free estimate</button>
            <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> <?php echo $phone; ?></a>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light home-faq" aria-label="Frequently asked questions">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>Naples HVAC questions, answered</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on servicing, efficiency, and staying comfortable in Southwest Florida.</p>
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

<!-- ============================= ESTIMATE ============================= -->
<section class="section home-estimate" id="estimate" aria-label="Request a free estimate">
    <div class="container">
        <div class="estimate">
            <div class="card reveal-left">
                <span class="eyebrow-label">Free Estimate</span>
                <h2>Tell us about the job</h2>
                <p class="lead">Send a few details and El Dorado Heating &amp; Cooling will get right back to you &mdash; usually the same day.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="estimate-form">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <?php echo p1_attribution_fields('estimate-section'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-grid">
                        <div class="field">
                            <label for="est-name">Your Name</label>
                            <input id="est-name" type="text" name="name" autocomplete="name" required>
                        </div>
                        <div class="field">
                            <label for="est-phone">Phone</label>
                            <input id="est-phone" type="tel" name="phone" autocomplete="tel" required>
                        </div>
                        <div class="field full">
                            <label for="est-email">Email</label>
                            <input id="est-email" type="email" name="email" autocomplete="email" required>
                        </div>
                        <div class="field full">
                            <label for="est-service">Service Needed</label>
                            <select id="est-service" name="service">
                                <option value="">Select a service</option>
                                <?php foreach ($servicePages as $estSvc): ?>
                                <option value="<?php echo htmlspecialchars($estSvc['name']); ?>"><?php echo htmlspecialchars($estSvc['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="field full">
                            <label for="est-message">How can we help?</label>
                            <textarea id="est-message" name="message" rows="4"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-consent-fieldset">
                        <legend class="form-consent-legend">Communication Consent</legend>
                        <label class="form-consent-item">
                            <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                            <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry and services. I can unsubscribe anytime via the link in any email or by emailing <?php echo htmlspecialchars($email); ?>.</span>
                        </label>
                        <label class="form-consent-item">
                            <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                            <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from <?php echo htmlspecialchars($siteName); ?> at the number provided (appointment reminders, service updates). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                        </label>
                        <label class="form-consent-item form-consent-required">
                            <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                            <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Request My Free Estimate</button>
                    </div>
                </form>
            </div>

            <div class="reveal-right">
                <span class="eyebrow-label">What Happens Next</span>
                <h2 class="h3">From first call to cool</h2>
                <ol class="next-steps">
                    <li><strong>We call you back fast</strong>Reach a real person 24/7 &mdash; often within the hour during business hours.</li>
                    <li><strong>Upfront diagnosis &amp; quote</strong>An honest assessment and clear price before any work starts.</li>
                    <li><strong>We get your comfort back</strong>Expert repair or install, then a final check to confirm your home is cooling right.</li>
                </ol>
                <div class="nap">
                    <div><?php echo $svg['phone']; ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
                    <div><?php echo $svg['mail']; ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
                    <div><?php echo $svg['pin20']; ?> <span><?php echo $address['street']; ?>, <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?></span></div>
                    <div><?php echo $svg['clock20']; ?> <span><?php echo $businessHours; ?></span></div>
                </div>
                <p class="est-area">Proudly serving Naples, Bonita Springs, Marco Island, and the surrounding Collier County communities &mdash; in English and Spanish.</p>
            </div>
        </div>
    </div>
</section>

<?php echo generateFAQSchema($faqs); ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
