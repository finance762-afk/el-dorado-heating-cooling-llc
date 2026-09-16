<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * Sources (research verification):
 * - https://en.wikipedia.org/wiki/North_Naples,_Florida
 * - https://en.wikipedia.org/wiki/East_Naples,_Florida
 * - https://www.plantmaps.com/34117 (USDA Zone 10b verified)
 * - Elevation range: 7-13 ft (East Naples 7 ft, North Naples 13 ft)
 * - Neighborhoods: Naples Park, Pelican Bay, Pine Ridge, Golden Gate, Lely
 * - Naples Historic District (500-acre, Gulf of Mexico boundary)
 */

$currentPage     = 'service-areas';
$pageType        = 'city';
$citySlug        = 'naples';
$pageTitle       = 'HVAC Services in Naples, FL | AC Repair & Installation | El Dorado';
$metaDescription = 'Expert HVAC services in Naples, FL. El Dorado Heating & Cooling provides AC repair, installation, and maintenance across Naples Park, Pelican Bay, and East Naples. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/service-areas/naples/';

// Hero image preload
$heroPreload = [
    'srcset' => '/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w',
    'sizes'  => '(max-width: 768px) 100vw, 50vw'
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo $siteUrl; ?>/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Service Areas",
      "item": "<?php echo $siteUrl; ?>/service-areas/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Naples, FL",
      "item": "<?php echo $canonicalUrl; ?>"
    }
  ]
}
</script>

<!-- LocalBusiness Schema with areaServed -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HVACBusiness",
  "name": "<?php echo $siteName; ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "telephone": "<?php echo $phoneTel; ?>",
  "priceRange": "$$",
  "areaServed": {
    "@type": "City",
    "name": "Naples",
    "addressRegion": "FL",
    "postalCode": "34117"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo $address['street']; ?>",
    "addressLocality": "<?php echo $address['city']; ?>",
    "addressRegion": "<?php echo $address['state']; ?>",
    "postalCode": "<?php echo $address['zip']; ?>",
    "addressCountry": "US"
  },
  "description": "<?php echo $siteName; ?> provides expert HVAC services throughout Naples, FL including AC repair, installation, and maintenance for homes in Naples Park, Pelican Bay, Pine Ridge, and East Naples.",
  "provider": {
    "@id": "<?php echo $siteUrl; ?>/#organization"
  }
}
</script>

<!-- Hero Section with Lead Form -->
<section class="hero hero-grid hero-grid--form">
    <div class="container">
        <div class="hero-grid-inner">
            <div class="hero-content">
                <span class="eyebrow-label">Where We Serve</span>
                <h1>HVAC Services in <span class="text-accent">Naples, Florida</span></h1>
                <p class="hero-answer">El Dorado Heating & Cooling is a licensed Florida HVAC contractor based right here in Naples, serving homes across Naples Park, Pelican Bay, Pine Ridge, and East Naples with expert air conditioning repair, installation, and maintenance.</p>
                <div class="btn-group">
                    <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <a href="mailto:<?php echo $email; ?>" class="btn-secondary">Email Us</a>
                </div>
                <div class="hero-chips">
                    <span class="chip">Licensed & Insured FL Contractor</span>
                    <span class="chip">24/7 Emergency Service</span>
                    <span class="chip">Same-Day Appointments</span>
                </div>
            </div>

            <!-- Hero Form Card (desktop only; hidden <900px) -->
            <div class="hero-form-card">
                <h3>Free estimate in Naples</h3>
                <p class="footnote">We reply the same day — usually within the hour.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="field">
                        <label for="hero-name">Your Name</label>
                        <input id="hero-name" type="text" name="name" autocomplete="name" required>
                    </div>
                    <div class="field">
                        <label for="hero-phone">Phone</label>
                        <input id="hero-phone" type="tel" name="phone" autocomplete="tel" required>
                    </div>
                    <div class="field">
                        <label for="hero-service">Service Needed</label>
                        <select id="hero-service" name="service">
                            <option value="">Select a service</option>
                            <?php foreach ($servicePages as $heroSvc): ?>
                            <option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"><?php echo htmlspecialchars($heroSvc['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <fieldset class="form-consent-compact">
                        <label class="consent-compact-item">
                            <input type="checkbox" name="terms_accepted" value="yes" required>
                            <span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block">Request Free Estimate</button>
                    <p class="footnote">Optional consents for email/SMS updates appear after you submit.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Local HVAC Context Section -->
<section class="section section--light">
    <div class="container-narrow">
        <div class="answer-block reveal-up">
            <h2>Why Naples air conditioning systems work harder than most</h2>
            <p><strong>In Naples, your AC doesn't get a break.</strong> Our USDA hardiness zone 10b climate — with Gulf humidity, salt air, and summer highs that stay above 90°F for months — puts continuous demand on cooling equipment. Systems here cycle more often, filters clog faster, and outdoor units face corrosion from salt-laden coastal air. Most Naples AC repairs trace back to these regional stressors.</p>
        </div>

        <div class="prose reveal-up reveal-delay-1">
            <p>El Dorado Heating & Cooling understands the wear patterns Naples HVAC systems face because we've lived and worked here for years. Our crews know that a system serving a home near the Naples Historic District — where elevations sit around 7 to 13 feet above sea level — handles moisture differently than inland properties in Golden Gate or Lely. Coastal proximity, age of housing stock, and even the canopy coverage in neighborhoods like Pelican Bay and Pine Ridge all influence how your system performs and when it needs attention.</p>

            <p>We serve the full Naples area — from waterfront homes in Naples Park to family neighborhoods east of Airport-Pulling Road. When your AC starts short-cycling, blowing warm air, or running non-stop through afternoon heat, our team arrives with the parts, tools, and local troubleshooting knowledge to diagnose the issue quickly. Naples homeowners call us for emergency breakdowns, seasonal tune-ups, full system replacements, and ductwork that actually matches Florida's cooling load. Every job is handled by our own licensed technicians, not subcontractors.</p>

            <p>Whether you're near the beaches, inland along Goodlette-Frank Road, or in one of the newer developments off Immokalee Road, El Dorado Heating & Cooling delivers the same standard: honest diagnostics, upfront pricing, and work that holds up in Naples heat and humidity. We're not here to upsell you — we're here to keep your home comfortable, your bills manageable, and your system running through hurricane season and beyond.</p>
        </div>
    </div>
</section>

<!-- Services Available -->
<section class="section section--dark">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>HVAC services available in <span class="text-accent">Naples, FL</span></h2>
            <p class="hero-answer">From emergency repairs to planned replacements, El Dorado Heating & Cooling handles every HVAC need Naples homeowners face. We service all major brands and back our work with real warranties.</p>
        </div>

        <div class="grid-3">
            <div class="service-badge reveal-up reveal-delay-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
                <h3>AC Repair</h3>
                <p>24/7 emergency service, same-day appointments, and honest diagnostics for every make and model.</p>
            </div>
            <div class="service-badge reveal-up reveal-delay-2">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/></svg>
                <h3>System Installation</h3>
                <p>Right-sized equipment for Naples climate, expert installation, and efficient cooling from day one.</p>
            </div>
            <div class="service-badge reveal-up reveal-delay-3">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                <h3>Seasonal Maintenance</h3>
                <p>Twice-yearly tune-ups, coil cleaning, refrigerant checks, and preventive care that stops breakdowns before they start.</p>
            </div>
            <div class="service-badge reveal-up reveal-delay-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="7"/></svg>
                <h3>Ductwork Services</h3>
                <p>Duct sealing, repair, and replacement to stop cooled air from leaking into your attic.</p>
            </div>
            <div class="service-badge reveal-up reveal-delay-2">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
                <h3>Indoor Air Quality</h3>
                <p>Whole-home dehumidifiers, air purifiers, and filter upgrades for cleaner, healthier Naples air.</p>
            </div>
            <div class="service-badge reveal-up reveal-delay-3">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                <h3>Emergency Service</h3>
                <p>Around-the-clock availability when your AC fails during peak summer heat or after a storm.</p>
            </div>
        </div>

        <div class="text-center reveal-up reveal-delay-2" style="margin-top: 3rem;">
            <a href="/services/" class="btn-secondary">View All HVAC Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section section--light">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Why El Dorado</span>
            <h2>Why Naples homeowners trust <span class="text-accent">El Dorado Heating & Cooling</span></h2>
        </div>

        <div class="grid-2">
            <div class="feature-card reveal-up reveal-delay-1">
                <div class="feature-icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Naples-based and locally owned</h3>
                <p>We're not a franchise or a call center. Our team lives and works in the neighborhoods we serve — from Naples Park to East Naples — and we answer to our neighbors, not corporate quotas.</p>
            </div>

            <div class="feature-card reveal-up reveal-delay-2">
                <div class="feature-icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3>60+ years of combined HVAC experience</h3>
                <p>Our technicians have diagnosed and repaired thousands of Naples AC systems. We know what breaks, why it breaks, and how to fix it right the first time.</p>
            </div>

            <div class="feature-card reveal-up reveal-delay-1">
                <div class="feature-icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"/></svg>
                </div>
                <h3>Upfront, transparent pricing</h3>
                <p>You'll know the cost before we start work. No surprise charges, no hidden fees, no pressure to buy what you don't need.</p>
            </div>

            <div class="feature-card reveal-up reveal-delay-2">
                <div class="feature-icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                </div>
                <h3>24/7 emergency response</h3>
                <p>When your AC fails at 2 AM on a Saturday in July, we answer the phone and dispatch a technician. No voicemail, no waiting until Monday.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section--dark cta-band" id="estimate">
    <div class="container">
        <div class="cta-grid">
            <div class="cta-content reveal-up">
                <h2>Get a free estimate for your Naples home</h2>
                <p>Whether you need emergency AC repair, a seasonal tune-up, or a full system replacement, El Dorado Heating & Cooling is here to help. Call us now for same-day service or request a free, no-pressure estimate online.</p>
                <div class="trust-row">
                    <span class="trust-item">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                        Licensed FL Contractor
                    </span>
                    <span class="trust-item">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                        60+ Years Experience
                    </span>
                    <span class="trust-item">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        24/7 Emergency Service
                    </span>
                </div>
                <div class="cta-buttons">
                    <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                </div>
            </div>

            <div class="cta-form-card reveal-up reveal-delay-1">
                <h3>Request your free estimate</h3>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <?php echo p1_attribution_fields('cta-band'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row-3">
                        <div class="field">
                            <label for="cta-name">Name</label>
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
                    </div>
                    <div class="field">
                        <label for="cta-service">Service Needed</label>
                        <select id="cta-service" name="service">
                            <option value="">Select a service</option>
                            <?php foreach ($servicePages as $ctaSvc): ?>
                            <option value="<?php echo htmlspecialchars($ctaSvc['name']); ?>"><?php echo htmlspecialchars($ctaSvc['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <fieldset class="form-consent-compact">
                        <label class="consent-compact-item">
                            <input type="checkbox" name="terms_accepted" value="yes" required>
                            <span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block">Get My Free Estimate</button>
                    <p class="footnote">We respond same-day. Optional email/SMS consents appear after you submit.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
