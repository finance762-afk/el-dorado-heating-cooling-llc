<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'about';
$pageType       = 'about';
$pageTitle      = 'About Us | El Dorado Heating & Cooling | Naples, FL';
$metaDescription = 'Learn about El Dorado Heating & Cooling, a family-owned HVAC company serving Naples with 60+ years of combined experience. Licensed, insured, and available 24/7.';
$pageDescription = $metaDescription;
$canonicalUrl   = $siteUrl . '/about/';
$ogType         = 'website';

// Schema: BreadcrumbList only (no Service on About page)
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $metaDescription,
            'provider' => ['@id' => $siteUrl . '/#organization']
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'About Us', 'item' => $canonicalUrl],
            ]
        ]
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES) . '</script>';

// Inline SVG icons
$ICONS = [
    'shield-check' => '<svg aria-hidden="true" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
    'users' => '<svg aria-hidden="true" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'clock' => '<svg aria-hidden="true" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'map-pin' => '<svg aria-hidden="true" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'badge-check' => '<svg aria-hidden="true" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'handshake' => '<svg aria-hidden="true" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/></svg>',
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── About page composition ────────────────────────────────────────────── */
.about-hero .hero-text { max-width: 70ch; }

@media (min-width: 901px) {
  .about-story-split { grid-template-columns: 1.3fr 1fr; }
  .about-values-split { grid-template-columns: 1fr 1.3fr; }
}
.about-story-split .about-image,
.about-values-split .about-image { border-radius: var(--radius-lg); overflow: hidden; }

.values-list { display: grid; gap: var(--space-md); margin-top: var(--space-lg); }
.value-item { display: flex; gap: var(--space-sm); align-items: flex-start; }
.value-item__icon {
  flex-shrink: 0; width: 40px; height: 40px; border-radius: var(--radius);
  display: grid; place-items: center; color: var(--color-primary);
  background: color-mix(in srgb, var(--color-primary) 12%, var(--color-surface));
}
.value-item__icon svg { width: 22px; height: 22px; }
.value-item h3 { font-size: 1.1rem; margin-bottom: 4px; color: var(--color-primary); }
.value-item p { margin: 0; font-size: 0.95rem; line-height: 1.6; }

.timeline { display: grid; gap: var(--space-md); margin-top: var(--space-lg); }
.timeline-item { display: grid; gap: var(--space-xs); padding-left: var(--space-lg); border-left: 3px solid var(--color-secondary); }
.timeline-year { font-family: var(--font-heading); font-size: 1.15rem; color: var(--color-primary); font-weight: 700; }
.timeline-event { color: var(--color-text-light); }

.team-photo { border-radius: var(--radius-lg); overflow: hidden; }
</style>

<?php echo $schemaMarkup; ?>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">About Us</li>
    </ol>
  </div>
</nav>

<main id="main-content">

  <!-- ═══════════════════ HERO ═══════════════════ -->
  <section class="hero hero--interior about-hero" aria-label="About El Dorado Heating & Cooling">
    <div class="container">
      <div class="hero-text">
        <span class="eyebrow">Who We Are</span>
        <h1>A Naples HVAC team built around your comfort</h1>
        <p class="hero-answer">El Dorado Heating &amp; Cooling is a family-owned company serving Naples, Bonita Springs, and Marco Island with expert air conditioning and heating services — backed by more than 60 years of combined HVAC experience.</p>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ COMPANY STORY ═══════════════════ -->
  <section class="section section--light" aria-label="Our story">
    <div class="container-wide">
      <div class="split about-story-split">
        <div class="reveal-left">
          <span class="eyebrow-label">Our Story</span>
          <h2>Golden standard service, built for <span class="text-accent">Southwest Florida</span></h2>
          <p>El Dorado Heating &amp; Cooling was founded on a simple idea: your home's comfort shouldn't be a gamble. Our technicians bring more than 60 years of combined HVAC experience to every call, and we hold ourselves to the golden standard of service — because we know a broken air conditioner in Naples isn't a minor inconvenience, it's an emergency.</p>
          <p>We understand the demands of Florida's heat, humidity, and salt air. From air conditioning and heating to ductwork, cleaning, dehumidification, and air purification, we handle the full spectrum of home comfort. We're available around the clock for emergencies, and we're proud to serve our Naples community in both English and Spanish.</p>
          <p>El Dorado Heating &amp; Cooling is more than a business — it's a family commitment to keeping your family comfortable year-round. When you call us, you get honest, upfront pricing, expert workmanship, and a team that treats your home like our own.</p>
        </div>
        <div class="about-image reveal-right">
          <picture>
            <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 460px">
            <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 460px" alt="The El Dorado Heating &amp; Cooling team standing with their service trucks in Naples, FL." width="960" height="960" loading="lazy" decoding="async">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ CTA BAND (mid-page estimate form) ═══════════════════ -->
  <section class="cta-band" id="estimate" aria-label="Get a free estimate">
    <div class="container">
      <div class="cta-band-grid">
        <div class="cta-band-copy">
          <h2>Ready to get started?</h2>
          <p>Call us at <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a> for same-day service, or request a free estimate online — we reply the same day, usually within the hour.</p>
          <div class="cta-band-cta" style="display: none;">
            <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Get a Free Estimate</button>
          </div>
        </div>
        <div class="cta-band-form">
          <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
            <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
            <?php echo p1_attribution_fields('cta-band'); ?>
            <input type="hidden" name="consent_version" value="v2.1">
            <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
            <div class="cta-band-form-grid">
              <div class="field">
                <label for="cta-name">Your Name</label>
                <input id="cta-name" type="text" name="name" autocomplete="name" required>
              </div>
              <div class="field">
                <label for="cta-phone">Phone</label>
                <input id="cta-phone" type="tel" name="phone" autocomplete="tel" required>
              </div>
              <div class="field">
                <label for="cta-email">Email</label>
                <input id="cta-email" type="email" name="email" autocomplete="email" required>
              </div>
              <div class="field--2">
                <label for="cta-service">Service Needed</label>
                <select id="cta-service" name="service">
                  <option value="">Select a service</option>
                  <?php foreach ($servicePages as $ctaSvc): ?>
                  <option value="<?php echo htmlspecialchars($ctaSvc['name']); ?>"><?php echo htmlspecialchars($ctaSvc['name']); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Get Free Estimate</button>
              <div class="form-consent-compact">
                <label>
                  <input type="checkbox" name="terms_accepted" value="yes" required>
                  <span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
                </label>
              </div>
              <p class="form-disclaimer">We reply the same day, usually within the hour. Your info is never shared.</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ VALUES ═══════════════════ -->
  <section class="section" aria-label="Our values">
    <div class="container-wide">
      <div class="split about-values-split">
        <div class="about-image reveal-left">
          <picture>
            <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 460px">
            <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 460px" alt="El Dorado Heating &amp; Cooling service trucks lined up and ready for customer calls in Naples." width="960" height="960" loading="lazy" decoding="async">
          </picture>
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What Drives Us</span>
          <h2>Why Naples homeowners trust El Dorado Heating &amp; Cooling</h2>
          <div class="values-list">
            <div class="value-item">
              <div class="value-item__icon"><?php echo $ICONS['shield-check']; ?></div>
              <div>
                <h3>Licensed &amp; Insured</h3>
                <p>We hold all required Florida HVAC licenses and carry full liability and workers' compensation insurance — your protection on every job.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__icon"><?php echo $ICONS['clock']; ?></div>
              <div>
                <h3>24/7 Emergency Service</h3>
                <p>When your AC quits in July, we answer. Day, night, weekends, and holidays — same-day diagnosis across Collier County.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__icon"><?php echo $ICONS['users']; ?></div>
              <div>
                <h3>Family-Owned &amp; Operated</h3>
                <p>You get honest, upfront pricing and real accountability — not a corporate chain. We live and work in the same community we serve.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__icon"><?php echo $ICONS['map-pin']; ?></div>
              <div>
                <h3>Built for Florida's Climate</h3>
                <p>Salt air, humidity, and constant cooling demands wear systems out fast. We size, service, and protect HVAC equipment for exactly those conditions.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__icon"><?php echo $ICONS['handshake']; ?></div>
              <div>
                <h3>Bilingual Service</h3>
                <p>Our team serves Naples in both English and Spanish, so you get clear answers and real comfort — no matter which language you prefer.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__icon"><?php echo $ICONS['badge-check']; ?></div>
              <div>
                <h3>60+ Years Combined Experience</h3>
                <p>Our technicians have seen it all — from routine maintenance to emergency repairs — and we bring that expertise to every call.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ HISTORY TIMELINE ═══════════════════ -->
  <section class="section section--light" aria-label="Our history">
    <div class="container">
      <div class="section-head reveal-up">
        <span class="eyebrow-label">Our Journey</span>
        <h2>Building a trusted HVAC company in Naples</h2>
      </div>
      <div class="timeline reveal-up">
        <div class="timeline-item">
          <div class="timeline-year"><?php echo $yearEstablished; ?></div>
          <p class="timeline-event">El Dorado Heating &amp; Cooling founded in Naples, FL, with a commitment to quality service and customer satisfaction.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-year"><?php echo $yearEstablished + 2; ?></div>
          <p class="timeline-event">Expanded service fleet and team to meet growing demand across Bonita Springs and Marco Island.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-year"><?php echo $yearEstablished + 4; ?></div>
          <p class="timeline-event">Launched 24/7 emergency service after recognizing the urgent need for around-the-clock HVAC support in Southwest Florida's demanding climate.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-year">Today</div>
          <p class="timeline-event">Proudly serving Naples and surrounding areas with a team of licensed technicians who bring over 60 years of combined HVAC expertise to every call — bilingual service in English and Spanish.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ CTA BAND ═══════════════════ -->
  <section class="cta-banner on-dark texture-grain slant-top" aria-label="Get started">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
      <div class="reveal-left">
        <span class="eyebrow-label">Ready to work together?</span>
        <h2>Let's get your Naples home comfortable again.</h2>
        <p>Call us for same-day service or request a free estimate — our team replies the same day, usually within the hour.</p>
      </div>
      <div class="actions reveal-right">
        <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Get a Free Estimate</button>
        <a href="tel:<?php echo $phoneTel; ?>" class="btn btn-outline-white btn-lg">Call <?php echo $phone; ?></a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
