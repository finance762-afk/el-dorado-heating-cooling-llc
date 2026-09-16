<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * Research sources (2026-09-16):
 * - https://www.florida-backroads-travel.com/bonita-springs-florida.html
 * - https://www.florida-guidebook.com/bonita-springs/
 * - https://www.pods.com/blog/living-in-bonita-springs-florida
 *
 * Verified facts:
 * - Location: Lee County, Gulf of Mexico coast, between Fort Myers (40 min north) and Naples (30 min south)
 * - Geography: Flat terrain, elevations a few feet above sea level, sandy beaches, mangrove estuaries,
 *   pine flatwoods, cypress swamps
 * - Climate: Subtropical — mid-60s°F winter, high 80s°F summer; wet season June-Sept, dry Oct-May
 * - Waterways: Imperial River, Estero River (both flow to Gulf)
 * - Landmarks: Bonita Beach Park (Gulf access), Centers for the Arts Bonita Springs
 * - Major communities: Bonita Bay, Pelican Landing, The Brooks
 */

$currentPage     = 'service-areas';
$pageType        = 'city';
$citySlug        = 'bonita-springs';
$pageTitle       = 'HVAC & AC Repair in Bonita Springs, FL | El Dorado Heating & Cooling';
$metaDescription = 'Expert HVAC service in Bonita Springs, FL. El Dorado Heating & Cooling serves Bonita Bay, Pelican Landing, and The Brooks with AC repair, installation & maintenance. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/service-areas/bonita-springs/';

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
      "name": "Bonita Springs, FL",
      "item": "<?php echo $canonicalUrl; ?>"
    }
  ]
}
</script>

<!-- LocalBusiness Schema (Bonita Springs-specific) -->
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
    "name": "Bonita Springs",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Bonita Springs",
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
                <span class="eyebrow-label">Bonita Springs, Florida</span>
                <h1>HVAC & AC Repair in <span class="text-accent">Bonita Springs, FL</span></h1>
                <p class="hero-answer">El Dorado Heating & Cooling is a licensed Florida HVAC contractor serving Bonita Springs, from Bonita Bay and Pelican Landing to The Brooks and every waterfront community along the Imperial and Estero Rivers. We understand how Southwest Florida's subtropical climate, humid summer months, and coastal conditions stress air conditioning systems — and we're the local team that keeps yours running when the heat arrives.</p>
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
                <h3>Free estimate in Bonita Springs</h3>
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
            <h2>HVAC Challenges in <span class="text-accent">Bonita Springs' Coastal Climate</span></h2>
            <p>Bonita Springs sits on the Gulf of Mexico coast in Lee County, midway between Fort Myers and Naples, with a geography defined by flat terrain — elevations rarely exceed a few feet above sea level — sandy beaches, mangrove-lined estuaries along the Imperial and Estero Rivers, pine flatwoods, and cypress swamps. That low-lying landscape and subtropical climate create year-round cooling demands that push air conditioning systems harder than in inland Florida cities.</p>

            <p>Summer temperatures in the high 80s°F, combined with a June-through-September wet season that delivers heavy rain and near-constant humidity, mean AC systems run continuously for months. Waterfront communities like Bonita Bay, Pelican Landing, and The Brooks — many with homes built near the Gulf or along river estuaries — face additional challenges from salt air that accelerates corrosion on outdoor condenser coils, electrical connections, and refrigerant lines. A system that would last 18 years in Orlando might fail at 12 in Bonita Springs if it isn't maintained on a schedule designed for coastal conditions.</p>

            <p>El Dorado Heating & Cooling has served this area since <?php echo $yearEstablished; ?>, and our technicians understand how Bonita Springs' combination of heat, humidity, and salt exposure stresses HVAC equipment. We don't apply generic maintenance checklists — we assess refrigerant levels with an eye toward the slow leaks salt corrosion causes, inspect electrical contactors for the pitting Gulf air accelerates, and clean condensate drains that clog faster in wet-season humidity. Whether you're near Bonita Beach Park or inland along the Estero River, we respond to service calls the same day and give you a diagnosis that accounts for what actually wears out in this climate.</p>

            <p class="answer-block"><strong>How long do AC systems last in Bonita Springs?</strong> With proper twice-yearly maintenance, most air conditioning systems last 12–15 years in Bonita Springs' coastal environment. Without it, salt corrosion and continuous summer use can shorten that to under 10 years. We design maintenance plans around what actually fails first in waterfront communities — coil corrosion, electrical contacts, and refrigerant lines — not generic tune-ups.</p>
        </div>
    </div>
</section>

<!-- Services in Bonita Springs -->
<section class="section section--dark">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>HVAC Services We Provide in <span class="text-accent">Bonita Springs</span></h2>
        </div>
        <div class="services-simple-grid reveal-up reveal-delay-1">
            <div class="service-simple-card card-tint-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
                <h3>AC Repair</h3>
                <p>Emergency AC repair across Bonita Bay, Pelican Landing, and The Brooks — from refrigerant leaks and compressor failures to the salt-corrosion damage common near the Gulf.</p>
            </div>
            <div class="service-simple-card card-tint-2">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <h3>AC Installation & Replacement</h3>
                <p>Full-system AC replacement for Bonita Springs homes — sized for your square footage, insulation, and waterfront exposure, with equipment rated for coastal conditions.</p>
            </div>
            <div class="service-simple-card card-tint-3">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                <h3>Preventive Maintenance</h3>
                <p>Seasonal maintenance plans for Bonita Springs' subtropical climate — coil cleaning, refrigerant checks, electrical inspections, and condensate drain service that prevent wet-season failures.</p>
            </div>
            <div class="service-simple-card card-tint-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
                <h3>Humidity & Air Quality</h3>
                <p>Whole-home dehumidifiers and air purifiers that address the Imperial River area's year-round humidity and the mold, allergens, and moisture it carries into your home.</p>
            </div>
        </div>
        <div class="section-cta reveal-up reveal-delay-2">
            <a href="/services/" class="btn-secondary">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us for Bonita Springs -->
<section class="section section--light">
    <div class="container-narrow">
        <div class="prose reveal-up">
            <h2>Why Bonita Springs Homeowners Choose <span class="text-accent">El Dorado Heating & Cooling</span></h2>
            <ul class="checkmark-list">
                <li><strong>Local to Southwest Florida</strong> — we respond to service calls across Bonita Springs, from Bonita Beach to The Brooks, within hours. No call centers, no waiting days for a technician.</li>
                <li><strong>We understand coastal HVAC challenges</strong> — salt air corrosion, wet-season humidity, and year-round cooling demands require maintenance plans designed for this climate, not generic checklists.</li>
                <li><strong>24/7 emergency service</strong> — AC failures don't wait for business hours in July. Call anytime and we'll dispatch a licensed technician to your Bonita Springs address.</li>
                <li><strong>Transparent pricing</strong> — we diagnose the problem, explain what failed and why it failed in these conditions, and give you a written estimate before we start work. No surprise charges.</li>
                <li><strong>Family-owned and bilingual</strong> — we serve Bonita Springs homeowners in both English and Spanish, and when you call, you're talking to the people who will actually show up.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section section--dark cta-section">
    <div class="container-narrow">
        <div class="cta-card reveal-scale">
            <div class="cta-content">
                <h2>Need AC Repair in <span class="text-accent">Bonita Springs</span>?</h2>
                <p>Call El Dorado Heating & Cooling at <?php echo $phone; ?> for same-day service across Bonita Springs, FL. We're available 24/7 for emergency repairs, and we'll give you an honest diagnosis before we touch your system.</p>
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
