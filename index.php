<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'home';
$pageType       = 'home';
$pageTitle      = 'HVAC & AC Repair in Naples, FL | El Dorado Heating & Cooling';
$metaDescription = 'El Dorado Heating & Cooling is a family-owned HVAC company in Naples, FL offering AC repair, installation, maintenance and 24/7 emergency service. Call (239) 404-6797.';
$canonicalUrl   = $siteUrl . '/';
$ogType         = 'website';

// Hero image preload (matches the AVIF sources on the hero <picture>)
$heroPreload = [
    'srcset' => '/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w',
    'sizes'  => '(max-width: 900px) 100vw, 50vw',
];

// FAQ content (research_brief.brief.faqs + one service-area answer) — also feeds FAQPage schema
$homeFaqs = [
    [
        'q' => 'How often should I have my AC system serviced in Naples, FL?',
        'a' => 'We recommend professional AC maintenance twice yearly in Southwest Florida — before cooling season in the spring and again in the fall. Naples heat, humidity, and salt air accelerate wear, and regular service prevents costly breakdowns during peak summer.',
    ],
    [
        'q' => 'What should I do if my air conditioner stops working during the hot season?',
        'a' => 'Call El Dorado Heating & Cooling right away for 24/7 emergency service — we offer same-day diagnosis and repair for most systems. In the meantime, close your blinds, turn off heat-generating appliances, and stay in the coolest room until we arrive.',
    ],
    [
        'q' => 'Why is my electric bill so high during the summer?',
        'a' => 'Naples heat and humidity make AC systems work harder, and a struggling system runs far longer than it should. A professional tune-up can improve efficiency 5–15%: we check refrigerant levels, clean coils, and verify your system isn\'t overrunning — often saving hundreds a year.',
    ],
    [
        'q' => 'How long do air conditioning systems last in Florida?',
        'a' => 'With proper maintenance, most AC systems last 12–15 years in our climate. Salt air and continuous cooling demand can shorten that. We assess your system\'s condition and help you plan a replacement before it fails in the middle of summer.',
    ],
    [
        'q' => 'What is included in your preventive maintenance plans?',
        'a' => 'Our plans include seasonal inspections, coil cleaning, refrigerant checks, filter changes, electrical connection testing, and priority scheduling. Regular maintenance prevents the large majority of AC emergencies and meaningfully extends the life of your equipment.',
    ],
    [
        'q' => 'Which areas around Naples do you serve?',
        'a' => 'El Dorado Heating & Cooling serves Naples, Bonita Springs, and Marco Island across Collier County, FL. Call (239) 404-6797 and we\'ll confirm same-day availability for your address — and we\'re glad to help in English or Spanish.',
    ],
];

$schemaMarkup = generateFAQSchema($homeFaqs);

// ── Inline SVG icon set (pasted at build time — no runtime injection) ───────
$ICONS = [
    'wind'          => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'droplets'      => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'sun'           => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
    'house'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'wrench'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>',
    'clipboard-list'=> '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>',
    'layers'        => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    'shield-check'  => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'snowflake'     => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>',
    'flame'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    'map-pin'       => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'badge-check'   => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'handshake'     => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/></svg>',
    'phone'         => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'mail'          => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>',
];

// ── Home services overview: first 8 service pages (12 total → View All button) ─
$homeCards = [
    ['slug' => 'hvac-services',            'name' => 'HVAC Services',            'icon' => 'wind',           'photo' => 'tech-outdoor-unit', 'desc' => 'Full-service heating and cooling for Naples homes — repair, replacement, and ductwork.', 'bullets' => ['AC &amp; heating repair', 'Installs &amp; replacements', 'Ductwork &amp; air handling']],
    ['slug' => 'cleaning-services',        'name' => 'Cleaning Services',        'icon' => 'droplets',       'photo' => 'fleet-trucks',      'desc' => 'Coil, system, and duct cleaning that restores airflow and cuts energy waste.', 'bullets' => ['Condenser &amp; coil cleaning', 'Full system cleaning', 'Cleaner indoor air']],
    ['slug' => 'seasonal-services',        'name' => 'Seasonal Services',        'icon' => 'sun',            'photo' => 'team-fleet',        'desc' => 'Tune-ups, thermostats, and compressor service to prep for Florida\'s cooling season.', 'bullets' => ['Compressor &amp; fan coil service', 'Smart thermostat setup', 'Air duct services']],
    ['slug' => 'rooftop-air-conditioners', 'name' => 'Rooftop Air Conditioners', 'icon' => 'house',          'photo' => 'hero-service-truck','desc' => 'Install, repair, and maintenance for rooftop AC units on Naples commercial buildings.', 'bullets' => ['Commercial rooftop units', 'Repair &amp; replacement', 'Preventive maintenance']],
    ['slug' => 'ac-maintenance',           'name' => 'AC Maintenance',           'icon' => 'wrench',         'photo' => 'tech-outdoor-unit', 'desc' => 'Seasonal maintenance plans that catch problems before Naples\' peak heat hits.', 'bullets' => ['Twice-yearly service plans', 'Priority scheduling', 'Fewer summer breakdowns']],
    ['slug' => 'ac-tune-ups',              'name' => 'AC Tune-Ups',              'icon' => 'clipboard-list', 'photo' => 'fleet-trucks',      'desc' => 'A full tune-up that boosts efficiency and lowers your summer electric bill.', 'bullets' => ['Refrigerant &amp; coil check', '5&ndash;15% efficiency gains', 'Season-ready cooling']],
    ['slug' => 'air-filters',              'name' => 'Air Filters',              'icon' => 'layers',         'photo' => 'team-fleet',        'desc' => 'Filter replacement that protects your equipment and your family\'s air quality.', 'bullets' => ['Right-fit filter selection', 'Scheduled replacements', 'Better indoor air']],
    ['slug' => 'air-purifiers',            'name' => 'Air Purifiers',            'icon' => 'shield-check',   'photo' => 'hero-service-truck','desc' => 'Whole-home air purification for cleaner, healthier air in humid Southwest Florida.', 'bullets' => ['Whole-home purification', 'Allergen &amp; humidity control', 'Healthier indoor air']],
];
$homeTints = [1, 2, 3, 1, 2, 3, 1, 2];

// Trust items for the ticker strip
$tickerItems = [
    ['shield-check', 'Licensed &amp; Insured'],
    ['clock',        '24/7 Emergency Service'],
    ['users',        'Family-Owned &amp; Operated'],
    ['snowflake',    'AC Repair &amp; Installation'],
    ['flame',        'Heating Services'],
    ['droplets',     'Humidity &amp; Air Quality'],
    ['map-pin',      'Naples &middot; Bonita Springs &middot; Marco Island'],
    ['badge-check',  '60+ Years Combined Experience'],
    ['handshake',    'Service in English &amp; Spanish'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── Homepage-specific composition (tokens only) ───────────────────────────── */
.home-hero .hero-visual__img img { object-position: 50% 42%; }

/* Asymmetric about/process composition on desktop */
@media (min-width: 901px) {
  .home-about { grid-template-columns: 1.35fr 1fr; }
}
.home-about .process-steps { margin-top: var(--space-lg); }

/* "Why El Dorado" value cards */
.home-values .grid-3 { gap: var(--space-lg); }
.value-card { display: grid; gap: var(--space-sm); align-content: start; }
.value-card__icon {
  width: 54px; height: 54px; border-radius: var(--radius);
  display: grid; place-items: center; color: var(--color-primary);
  background: color-mix(in srgb, var(--color-primary) 12%, var(--color-surface));
}
.value-card__icon svg { width: 26px; height: 26px; }
.value-card h3 { color: var(--color-primary); }

/* Services header keeps its answer paragraph readable */
.home-services .section-head { max-width: 68ch; }
.home-services .services-cta { margin-top: var(--space-xl); display: flex; justify-content: center; }

/* CTA band depth */
.home-cta { position: relative; }
.home-cta .floating-ring { top: -3rem; right: -2rem; }

/* Estimate column headings */
.home-estimate .next-steps { margin-top: var(--space-md); }
.home-estimate .nap svg { width: 18px; height: 18px; }
</style>

<?php echo $schemaMarkup; ?>

<!-- ═══════════════════ HERO (warm-human · photo-led) ═══════════════════ -->
<section class="hero hero--light home-hero" aria-label="Introduction">
  <div class="container">
    <div class="hero-grid hero-grid--visual">
      <div class="hero-text">
        <span class="eyebrow">Naples, FL &middot; Family-Owned HVAC</span>
        <h1 class="hero-title">Reliable HVAC &amp; AC Repair in Naples, FL</h1>
        <p class="hero-answer">El Dorado Heating &amp; Cooling keeps Naples homes cool with same-day AC repair, expert installs, and 24/7 emergency service &mdash; from a family team that answers in English or Spanish.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a Free Estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $ICONS['phone']; ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo $ICONS['badge-check']; ?> Licensed &amp; Insured</li>
          <li><?php echo $ICONS['users']; ?> Family-Owned &amp; Operated</li>
          <li><?php echo $ICONS['clock']; ?> 24/7 Emergency Service</li>
        </ul>
      </div>

      <div class="hero-visual">
        <div class="hero-visual__img">
          <picture>
            <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 50vw">
            <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 50vw" alt="White El Dorado Heating &amp; Cooling service truck parked in a Naples driveway, ready for an HVAC service call." width="1000" height="1000" loading="eager" fetchpriority="high">
          </picture>
        </div>
        <div class="photo-stack__tag"><b>On the road</b><span>Naples HVAC service call</span></div>

        <aside class="hero-form-card" id="estimate-form">
          <h2>Get a free estimate</h2>
          <p class="hero-form-tagline">No obligation. Same-day reply.</p>
          <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
            <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
            <?php echo p1_attribution_fields('hero'); ?>
            <input type="hidden" name="form_location" value="hero">
            <input type="hidden" name="consent_version" value="v2.1">
            <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
            <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
            <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
            <div class="form-row"><label class="sr-only" for="hero-service">Service</label>
              <select id="hero-service" name="service">
                <option value="">What do you need?</option>
                <?php foreach ($servicePages as $heroSvc): ?>
                <option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"><?php echo htmlspecialchars($heroSvc['name']); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <fieldset class="form-consent-fieldset hero-consent">
              <label class="form-consent-item">
                <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                <span class="consent-label"><strong>Email updates (optional):</strong> Receive emails about my inquiry. I can unsubscribe anytime.</span>
              </label>
              <label class="form-consent-item">
                <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                <span class="consent-label"><strong>SMS (optional):</strong> Receive text messages. Reply STOP to opt out. Consent is not required.</span>
              </label>
              <label class="form-consent-item form-consent-required">
                <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                <span class="consent-label">I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms</a>. <span class="required-star">*</span></span>
              </label>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
          </form>
        </aside>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ PROOF STRIP (verifiable facts only) ═══════════════════ -->
<section class="stats-band" aria-label="Why El Dorado Heating &amp; Cooling">
  <div class="container">
    <div class="stats-row">
      <div class="stat-item">
        <span class="stat-number">60+ <span>Years</span></span>
        <span class="stat-label">Combined HVAC experience on our team</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">Family <span>Owned</span></span>
        <span class="stat-label">&amp; operated, based in Naples, FL</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">24/7 <span>Service</span></span>
        <span class="stat-label">Emergency repairs, year-round</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">EN / <span>ES</span></span>
        <span class="stat-label">Service in English &amp; Spanish</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICES OVERVIEW ═══════════════════ -->
<section class="section section--light home-services" aria-label="HVAC services">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">HVAC services</span> does El Dorado offer in Naples?</h2>
      <p class="lead">El Dorado Heating &amp; Cooling handles the full spectrum of home comfort in Naples, FL &mdash; air conditioning repair and installation, heating, ductwork, cleaning, seasonal tune-ups, and indoor air quality. One local family team for cooling, heating, and everything in between.</p>
    </div>

    <div class="services-grid">
      <?php foreach ($homeCards as $i => $card): $tint = $homeTints[$i]; $delay = $tint; ?>
      <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
        <div class="service-card__image">
          <picture>
            <source type="image/avif" srcset="/assets/images/<?php echo $card['photo']; ?>-480.avif 480w, /assets/images/<?php echo $card['photo']; ?>-960.avif 960w" sizes="(max-width: 720px) 100vw, 300px">
            <img src="/assets/images/<?php echo $card['photo']; ?>.jpg" srcset="/assets/images/<?php echo $card['photo']; ?>-480.webp 480w, /assets/images/<?php echo $card['photo']; ?>-960.webp 960w" sizes="(max-width: 720px) 100vw, 300px" alt="El Dorado Heating &amp; Cooling &mdash; <?php echo htmlspecialchars($card['name']); ?> in Naples, FL" width="600" height="360" loading="lazy" decoding="async">
          </picture>
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo $ICONS[$card['icon']]; ?></div>
          <h3><?php echo $card['name']; ?></h3>
          <p class="service-card__desc"><?php echo $card['desc']; ?></p>
          <ul>
            <?php foreach ($card['bullets'] as $b): ?>
            <li><?php echo $b; ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo $card['slug']; ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="services-cta">
      <a href="/services/" class="btn btn-secondary btn-lg">View All Services</a>
    </div>
  </div>
</section>

<!-- ═══════════════════ TRUST TICKER ═══════════════════ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <?php for ($rep = 0; $rep < 2; $rep++): ?>
      <?php foreach ($tickerItems as $t): ?>
      <span><?php echo $ICONS[$t[0]]; ?> <?php echo $t[1]; ?></span>
      <?php endforeach; ?>
    <?php endfor; ?>
  </div>
</div>

<!-- ═══════════════════ ABOUT + PROCESS (asymmetric) ═══════════════════ -->
<section class="section" aria-label="About El Dorado Heating &amp; Cooling">
  <div class="container-wide">
    <div class="about-split home-about">
      <div class="about-copy reveal-left">
        <span class="eyebrow-label">The Local Team</span>
        <h2>A Naples HVAC company built around your comfort</h2>
        <p>El Dorado Heating &amp; Cooling is a family-owned and operated HVAC company serving Naples, Bonita Springs, and Marco Island. Our technicians bring more than 60 years of combined experience to every call, and we hold ourselves to the golden standard of service &mdash; because we know your home&rsquo;s comfort can&rsquo;t wait.</p>
        <p>From air conditioning and heating to ductwork, cleaning, dehumidification, and indoor air quality, we handle the demands of Florida&rsquo;s heat, humidity, and salt air head-on. We&rsquo;re available around the clock for emergencies and proud to serve our neighbors in both English and Spanish.</p>

        <ol class="process-steps">
          <li>
            <b>Diagnose</b>
            <span>We inspect your system, pinpoint the real problem, and explain it in plain language.</span>
          </li>
          <li>
            <b>Quote</b>
            <span>You get upfront, itemized pricing before any work begins &mdash; no surprises.</span>
          </li>
          <li>
            <b>Repair or Install</b>
            <span>Our licensed techs complete the job with quality parts, often the same day.</span>
          </li>
          <li>
            <b>Verify</b>
            <span>We test airflow and temperatures, then walk you through exactly what we did.</span>
          </li>
        </ol>
      </div>

      <div class="about-image reveal-right">
        <div class="about-image-primary">
          <picture>
            <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 460px">
            <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 460px" alt="The El Dorado Heating &amp; Cooling team standing with their service trucks in Naples, FL." width="960" height="960" loading="lazy" decoding="async">
          </picture>
        </div>
        <div class="about-stat-card">
          <span class="stat-number">60+ <span>Yrs</span></span>
          <span class="stat-label">Combined experience</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ WHY EL DORADO (signature values) ═══════════════════ -->
<section class="section section--light home-values" aria-label="Why choose El Dorado Heating &amp; Cooling">
  <div class="container-wide">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why El Dorado</span>
      <h2>Comfort you can count on, built for <span class="text-accent">Southwest Florida</span></h2>
    </div>
    <div class="grid-3">
      <div class="card value-card reveal-up reveal-delay-1">
        <div class="value-card__icon"><?php echo $ICONS['clock']; ?></div>
        <h3>24/7 Emergency Service</h3>
        <p>When your AC quits in July, we answer &mdash; day, night, weekends, and holidays &mdash; with same-day diagnosis across Collier County.</p>
      </div>
      <div class="card value-card reveal-up reveal-delay-2">
        <div class="value-card__icon"><?php echo $ICONS['droplets']; ?></div>
        <h3>Built for Florida&rsquo;s Climate</h3>
        <p>Salt air, humidity, and constant cooling loads wear systems out fast. We size, service, and protect equipment for exactly those conditions.</p>
      </div>
      <div class="card value-card reveal-up reveal-delay-3">
        <div class="value-card__icon"><?php echo $ICONS['users']; ?></div>
        <h3>A Family Team, Bilingual Service</h3>
        <p>Family-owned and bilingual &mdash; you get honest, upfront pricing and clear answers in English or Spanish, every single visit.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ MID-PAGE CTA BAND (dark) ═══════════════════ -->
<section class="cta-banner on-dark texture-grain slant-top home-cta" aria-label="Request service">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div class="reveal-left">
      <span class="eyebrow-label">Don't sweat it out</span>
      <h2>AC down? We can be on the way today.</h2>
      <p>A failing system only gets worse &mdash; and more expensive &mdash; in Naples heat. Call El Dorado Heating &amp; Cooling for fast, honest service, or request a free estimate and we&rsquo;ll reply the same day.</p>
    </div>
    <div class="actions reveal-right">
      <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Get a Free Estimate</button>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn btn-outline-white btn-lg"><?php echo $ICONS['phone']; ?> <?php echo $phone; ?></a>
    </div>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to Know</span>
      <h2>HVAC questions Naples homeowners <span class="text-accent">ask us most</span></h2>
      <p class="lead">Straight answers on maintenance, emergencies, efficiency, and what to expect from El Dorado Heating &amp; Cooling.</p>
    </div>
    <div class="faq-grid reveal-up">
      <?php foreach ($homeFaqs as $fi => $faq): ?>
      <details class="faq"<?php echo $fi < 2 ? ' open' : ''; ?>>
        <summary><?php echo $faq['q']; ?></summary>
        <p><?php echo $faq['a']; ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ ESTIMATE SECTION ═══════════════════ -->
<section class="section section--light edge-curve-top home-estimate" id="estimate" aria-label="Request a free estimate">
  <div class="container">
    <div class="estimate">
      <div class="card">
        <span class="eyebrow-label">Free Estimate</span>
        <h2>Tell us about the job</h2>
        <p class="lead">Send a few details and El Dorado Heating &amp; Cooling will get back to you the same day &mdash; usually within the hour.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <?php echo p1_attribution_fields('estimate-section'); ?>
          <input type="hidden" name="form_location" value="estimate-section">
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

          <button type="submit" class="btn btn-primary btn-block">Request My Free Estimate</button>
        </form>
      </div>

      <div class="reveal-right">
        <span class="eyebrow-label">What Happens Next</span>
        <h2>Three simple steps to comfort</h2>
        <ol class="next-steps">
          <li><strong>We call you back</strong> A real person from our Naples office reaches out, usually within the hour.</li>
          <li><strong>Free, honest estimate</strong> We assess the job and give you upfront pricing &mdash; no pressure, no surprises.</li>
          <li><strong>Comfort restored</strong> We schedule the work and get your home cool and comfortable again, fast.</li>
        </ol>

        <div class="nap">
          <div><?php echo $ICONS['phone']; ?><a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo $ICONS['mail']; ?><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo $ICONS['map-pin']; ?><span><?php echo $address['street']; ?>, <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?></span></div>
          <div><?php echo $ICONS['clock']; ?><span><?php echo $businessHours; ?></span></div>
        </div>
        <p class="footnote">El Dorado Heating &amp; Cooling proudly serves Naples, Bonita Springs, and Marco Island across Collier County, FL.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
