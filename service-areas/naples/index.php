<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * Research sources (2026-09-16):
 * - https://www.homes.com/neighborhood-search/naples-fl/
 * - https://www.palmparadiserealty.com/blog/best-neighborhoods-naples/
 * - https://www.mattbrownrealestate.com/blog/best-neighborhoods-in-naples-florida-to-buy-a-luxury-home/
 *
 * Verified facts:
 * - Population: 21,750 (2020 census)
 * - Area: 16.46 square miles in Collier County
 * - Climate: Subtropical, 65°F winter / 90°F summer avg, 266 sunny days/year
 * - Major neighborhoods: Olde Naples (historic downtown, Naples Pier, Palm Cottage),
 *   Park Shore (waterfront luxury), Port Royal (Naples Bay access, Third Street South),
 *   Mirasol (golf community)
 * - Architecture: Mediterranean Revival, Coastal Contemporary, British West Indies styles
 * - Landmarks: Naples Pier (built 1888), Fleischmann Park, Naples Zoo, Gordon River Greenway
 */

$currentPage     = 'service-areas';
$pageType        = 'city';
$citySlug        = 'naples';
$pageTitle       = 'HVAC & AC Repair in Naples, FL | El Dorado Heating & Cooling';
$metaDescription = 'Expert HVAC service in Naples, FL. El Dorado Heating & Cooling serves Olde Naples, Park Shore, and Port Royal with AC repair, installation & maintenance. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/service-areas/naples/';

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

<!-- LocalBusiness Schema (Naples-specific) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HVACBusiness",
  "name": "<?php echo $siteName; ?>",
  "url": "<?php echo $siteUrl; ?>",
  "telephone": "<?php echo $phoneTel; ?>",
  "email": "<?php echo $email; ?>",
  "priceRange": "$$",
  "areaServed": {
    "@type": "City",
    "name": "Naples",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Naples",
      "addressRegion": "FL",
      "addressCountry": "US"
    }
  }
}
</script>

<!-- Hero Section with Lead Form -->
<section class="hero hero-grid hero-grid--form">
    <div class="container">
        <div class="hero-grid-inner">
            <!-- Left: Copy -->
            <div class="hero-content">
                <span class="eyebrow-label">Naples, Florida</span>
                <h1>HVAC & AC Repair in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating & Cooling is a licensed Florida HVAC contractor based in Naples, serving Olde Naples, Park Shore, Port Royal, and every neighborhood across this coastal city. We understand the demands Naples' subtropical climate places on cooling systems — and we're the local team you call when yours needs repair, replacement, or seasonal maintenance.</p>
                <div class="btn-group">
                    <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <a href="#estimate" class="btn-secondary mobile-only" data-open-estimate>Get Free Estimate</a>
                </div>
                <div class="hero-chips">
                    <span class="chip">24/7 Emergency Service</span>
                    <span class="chip">Same-Day Repairs</span>
                    <span class="chip">Licensed & Insured</span>
                </div>
            </div>

            <!-- Right: Lead Form Card (hidden below 900px) -->
            <div class="hero-form-card desktop-only">
                <h3>Free estimate in Naples</h3>
                <p class="footnote">We reply the same day — usually within the hour.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-fields">
                        <div class="field">
                            <label for="hero-name">Your Name</label>
                            <input id="hero-name" type="text" name="name" autocomplete="name" required>
                        </div>
                        <div class="field">
                            <label for="hero-phone">Phone</label>
                            <input id="hero-phone" type="tel" name="phone" autocomplete="tel" required>
                        </div>
                        <div class="field full">
                            <label for="hero-service">Service Needed</label>
                            <select id="hero-service" name="service">
                                <option value="">Select a service</option>
                                <option value="AC Repair">AC Repair</option>
                                <option value="AC Installation">AC Installation</option>
                                <option value="AC Maintenance">AC Maintenance</option>
                                <option value="Heating Repair">Heating Repair</option>
                                <option value="Emergency Service">Emergency Service</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <fieldset class="form-consent-compact">
                        <label class="consent-item-compact">
                            <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                            <span class="consent-label-compact">I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>
                    <p class="form-footnote">By submitting, you consent to email and SMS contact from <?php echo htmlspecialchars($siteName); ?>. See our <a href="/privacy-policy/">Privacy Policy</a>.</p>
                    <button type="submit" class="btn btn-primary btn-block">Request My Free Estimate</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Local Content Section -->
<section class="section section--light">
    <div class="container-narrow">
        <div class="prose reveal-up">
            <h2>Why Naples Homes Need Local <span class="text-accent">HVAC Expertise</span></h2>
            <p>Naples spans 16.46 square miles across Collier County with a subtropical climate that averages 90°F in summer, 65°F in winter, and 266 sunny days a year — well above the national average. That near-constant heat, combined with Gulf Coast humidity and salt air from the Naples Pier and waterfront neighborhoods, places unique demands on air conditioning systems that generic maintenance checklists simply don't address.</p>

            <p>From the historic Mediterranean Revival homes in Olde Naples to the waterfront estates of Park Shore and Port Royal, Naples properties require HVAC technicians who understand how salt corrosion accelerates coil failure, how humidity loads differ between coastal and inland ZIP codes, and how to size replacement systems for homes built in architectural styles — Coastal Contemporary, British West Indies — designed for Florida's climate but still dependent on modern cooling. El Dorado Heating & Cooling has served this community since <?php echo $yearEstablished; ?>, and our crew knows the difference between a system that's struggling with Naples conditions and one that simply needs a tune-up.</p>

            <p>Neighborhoods like Mirasol, with its golf-course microclimates, experience different cooling loads than Third Street South condos where Gulf breezes moderate afternoon heat. We don't apply one-size-fits-all solutions — we assess what's failing, why it's failing in Naples conditions specifically, and what will actually fix it for the long term. Whether you're near Gordon River Greenway, down by the Naples Zoo, or anywhere across this coastal city, we respond to service calls within hours and give you an honest diagnosis before we start work.</p>

            <p class="answer-block"><strong>How often should Naples homeowners service their AC systems?</strong> We recommend twice-yearly professional maintenance in Southwest Florida — once before peak cooling season in late spring, and again in the fall. Salt air and continuous summer use accelerate wear far faster than in inland climates, and the majority of emergency breakdowns we see in July could have been caught during a pre-season inspection in April.</p>
        </div>
    </div>
</section>

<!-- Services in Naples -->
<section class="section section--dark">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>HVAC Services We Provide in <span class="text-accent">Naples</span></h2>
        </div>
        <div class="services-simple-grid reveal-up reveal-delay-1">
            <div class="service-simple-card card-tint-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
                <h3>AC Repair</h3>
                <p>Same-day emergency AC repair across Naples — refrigerant leaks, compressor failures, electrical issues, and salt-corrosion damage that's common in coastal homes.</p>
            </div>
            <div class="service-simple-card card-tint-2">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <h3>AC Installation & Replacement</h3>
                <p>Full-system AC installation and replacement for Naples homes — properly sized for your square footage, insulation, and coastal exposure, not just what fits the old pad.</p>
            </div>
            <div class="service-simple-card card-tint-3">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                <h3>Preventive Maintenance</h3>
                <p>Seasonal maintenance plans designed for Naples conditions — coil cleaning, refrigerant checks, condensate drain service, and electrical inspections that prevent summer failures.</p>
            </div>
            <div class="service-simple-card card-tint-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
                <h3>Humidity & Air Quality</h3>
                <p>Whole-home dehumidifiers, air purifiers, and duct cleaning that address Naples' year-round humidity and the mold, allergens, and dust it carries into your home.</p>
            </div>
        </div>
        <div class="section-cta reveal-up reveal-delay-2">
            <a href="/services/" class="btn-secondary">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us for Naples -->
<section class="section section--light">
    <div class="container-narrow">
        <div class="prose reveal-up">
            <h2>Why Naples Homeowners Choose <span class="text-accent">El Dorado Heating & Cooling</span></h2>
            <ul class="checkmark-list">
                <li><strong>We're based in Naples</strong> — not a franchise calling in from Fort Myers. We respond to service calls across Olde Naples, Park Shore, Port Royal, and every neighborhood within hours, not days.</li>
                <li><strong>60+ years of combined HVAC experience in Southwest Florida</strong> — our technicians have spent decades diagnosing and repairing systems in this exact climate, and we know what actually wears out in coastal conditions.</li>
                <li><strong>24/7 emergency service</strong> — AC failures don't wait for business hours, and neither do we. Call anytime and we'll dispatch a technician to your Naples address.</li>
                <li><strong>Transparent pricing before we start work</strong> — we diagnose the problem, explain what failed and why, and give you a written estimate. No surprise charges, no upselling parts you don't need.</li>
                <li><strong>Family-owned and bilingual</strong> — we serve Naples homeowners in both English and Spanish, and when you call, you're talking to the people who will actually show up at your door.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section section--dark cta-section">
    <div class="container-narrow">
        <div class="cta-card reveal-scale">
            <div class="cta-content">
                <h2>Need AC Repair in <span class="text-accent">Naples</span>?</h2>
                <p>Call El Dorado Heating & Cooling at <?php echo $phone; ?> for same-day service across Naples, FL. We're available 24/7 for emergency repairs, and we'll give you an honest diagnosis before we touch your system.</p>
                <div class="cta-actions">
                    <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary btn-large">
                        <svg aria-hidden="true" width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <a href="#estimate" class="btn-secondary btn-large" data-open-estimate>Get Free Estimate</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Services Simple Grid */
.services-simple-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--space-lg);
    margin-top: var(--space-2xl);
}

.service-simple-card {
    padding: var(--space-xl);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow);
    text-align: center;
}

.service-simple-card svg {
    margin: 0 auto var(--space-md);
    color: var(--color-accent);
}

.service-simple-card h3 {
    font-size: var(--fs-h5);
    margin-bottom: var(--space-sm);
    color: var(--color-primary);
}

.service-simple-card p {
    color: var(--color-text-light);
    line-height: 1.6;
    font-size: var(--fs-sm);
}

.section-cta {
    text-align: center;
    margin-top: var(--space-2xl);
}

/* Checkmark List */
.checkmark-list {
    list-style: none;
    margin-top: var(--space-lg);
}

.checkmark-list li {
    padding-left: var(--space-xl);
    margin-bottom: var(--space-md);
    position: relative;
    line-height: 1.7;
}

.checkmark-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--color-accent);
    font-weight: bold;
    font-size: 1.2em;
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
