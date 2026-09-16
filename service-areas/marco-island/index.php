<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * Research sources (2026-09-16):
 * - https://marconaplesluxuryproperties.com/neighborhoods/marco-island
 * - https://www.team239.com/post/living-in-marco-island-the-ultimate-2026-resident-guide
 * - https://mooovingcrew.com/blog/moving-to-marco-island-florida-your-complete-island-paradise-guide/
 *
 * Verified facts:
 * - Geography: Largest of the Ten Thousand Islands; island geography limits access, contributing to exclusivity
 * - Neighborhoods: The Estates (southeastern tip, waterfront views), Old Marco (historic walkable area),
 *   Southend (luxury high-rises, South Beach proximity), Hideaway Beach (only gated community, beachfront)
 * - Climate: Southwest Florida subtropical, Gulf breezes moderate summer heat; winter Dec-Mar temps 70s-low 80s°F,
 *   low humidity, minimal rain
 * - Population: ~16,500 permanent residents; doubles Dec-April with snowbirds/seasonal residents
 * - Housing (2026): Condos ~$699k, single-family ~$1.56M; inventory up 53% YoY from 2021-2023 seller market
 */

$currentPage     = 'service-areas';
$pageType        = 'city';
$citySlug        = 'marco-island';
$pageTitle       = 'HVAC & AC Repair in Marco Island, FL | El Dorado Heating & Cooling';
$metaDescription = 'Expert HVAC service in Marco Island, FL. El Dorado Heating & Cooling serves Hideaway Beach, The Estates, and Old Marco with AC repair, installation & maintenance. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/service-areas/marco-island/';

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
      "name": "Marco Island, FL",
      "item": "<?php echo $canonicalUrl; ?>"
    }
  ]
}
</script>

<!-- LocalBusiness Schema (Marco Island-specific) -->
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
    "name": "Marco Island",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Marco Island",
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
                <span class="eyebrow-label">Marco Island, Florida</span>
                <h1>HVAC & AC Repair in <span class="text-accent">Marco Island, FL</span></h1>
                <p class="hero-answer">El Dorado Heating & Cooling is a licensed Florida HVAC contractor serving Marco Island, from Hideaway Beach and The Estates to Old Marco and Southend high-rises. As the largest of the Ten Thousand Islands, Marco Island's waterfront geography and subtropical Gulf climate create unique cooling demands — and we're the local team that keeps your AC running year-round, whether you're a permanent resident or a seasonal visitor.</p>
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
                <h3>Free estimate in Marco Island</h3>
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
            <h2>Island HVAC Demands: <span class="text-accent">Marco Island's Climate Reality</span></h2>
            <p>Marco Island is the largest of the Ten Thousand Islands, and that island geography naturally limits access while creating a microclimate shaped by Gulf breezes, waterfront proximity, and subtropical heat. The island's permanent population of approximately 16,500 residents more than doubles from December through April as snowbirds and seasonal visitors arrive — and that seasonal influx means air conditioning systems need to fire up reliably after months of sitting idle, handle extended cooling loads when occupied, and then idle again without developing the mechanical failures that come from intermittent use.</p>

            <p>The Estates on the southeastern tip, with its oversized waterfront lots, faces direct Gulf exposure and the salt-air corrosion that comes with it. Old Marco's historic walkable neighborhoods, Southend's luxury high-rises near South Beach, and Hideaway Beach — the island's only gated community with beachfront homes — each present different HVAC challenges: condenser units on rooftop platforms exposed to salt spray, split systems in multi-story residences, and whole-home systems in estates where cooling loads vary wildly depending on whether the home is occupied or closed for the summer.</p>

            <p>El Dorado Heating & Cooling has served Marco Island since <?php echo $yearEstablished; ?>, and our technicians understand the difference between a system that's failing because it sat unused for six months and one that's struggling with the island's year-round cooling demand when occupied. Winter months — December through March — bring nearly perfect weather with daytime temperatures in the 70s to low 80s°F, low humidity, and minimal rainfall. But that mild climate doesn't mean AC systems sit dormant: Gulf breezes moderate heat but carry salt that corrodes outdoor units, and seasonal residents who return in November expect systems to work immediately, not after a service call.</p>

            <p class="answer-block"><strong>What should Marco Island seasonal residents do before leaving for the summer?</strong> We recommend a pre-departure AC checkup if you're closing your Marco Island home for the season. We'll inspect refrigerant levels, clean coils, check electrical connections, and verify the system will restart cleanly when you return. Many compressor failures we diagnose in November could have been caught — and repaired affordably — before the homeowner left in April.</p>
        </div>
    </div>
</section>

<!-- Services in Marco Island -->
<section class="section section--dark">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">What We Do</span>
            <h2>HVAC Services We Provide in <span class="text-accent">Marco Island</span></h2>
        </div>
        <div class="services-simple-grid reveal-up reveal-delay-1">
            <div class="service-simple-card card-tint-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
                <h3>AC Repair</h3>
                <p>Emergency AC repair across Marco Island — from compressor failures and refrigerant leaks to the salt-corrosion damage common in waterfront estates and Southend high-rises.</p>
            </div>
            <div class="service-simple-card card-tint-2">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <h3>AC Installation & Replacement</h3>
                <p>Full-system AC installation for Marco Island homes and condos — sized for Gulf-exposure conditions, salt-air environments, and seasonal occupancy patterns.</p>
            </div>
            <div class="service-simple-card card-tint-3">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                <h3>Seasonal Maintenance</h3>
                <p>Pre-departure and return maintenance for seasonal residents — we inspect, clean, and verify your system before you leave and ensure it fires up reliably when you return.</p>
            </div>
            <div class="service-simple-card card-tint-1">
                <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
                <h3>Humidity & Air Quality</h3>
                <p>Whole-home dehumidifiers and air purifiers for Marco Island's Gulf-coast humidity — prevent mold growth in seasonal homes and improve air quality for year-round residents.</p>
            </div>
        </div>
        <div class="section-cta reveal-up reveal-delay-2">
            <a href="/services/" class="btn-secondary">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us for Marco Island -->
<section class="section section--light">
    <div class="container-narrow">
        <div class="prose reveal-up">
            <h2>Why Marco Island Homeowners Choose <span class="text-accent">El Dorado Heating & Cooling</span></h2>
            <ul class="checkmark-list">
                <li><strong>We serve Marco Island year-round</strong> — whether you're a permanent resident in Old Marco or a seasonal visitor in The Estates, we respond to service calls the same day, not days later.</li>
                <li><strong>Island HVAC expertise</strong> — we understand how salt air, Gulf breezes, and seasonal occupancy stress air conditioning systems differently than inland Naples properties. Our maintenance plans address what actually fails first.</li>
                <li><strong>24/7 emergency service</strong> — AC failures don't wait for business hours, and neither should you. Call anytime and we'll dispatch a licensed technician to your Marco Island address.</li>
                <li><strong>Transparent pricing before work begins</strong> — we diagnose the problem, explain what failed and why, and give you a written estimate. No surprise charges, no upselling parts you don't need.</li>
                <li><strong>Family-owned and bilingual</strong> — we serve Marco Island homeowners in both English and Spanish, and when you call, you're talking to the people who will actually arrive at your door.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section section--dark cta-section">
    <div class="container-narrow">
        <div class="cta-card reveal-scale">
            <div class="cta-content">
                <h2>Need AC Repair in <span class="text-accent">Marco Island</span>?</h2>
                <p>Call El Dorado Heating & Cooling at <?php echo $phone; ?> for same-day service across Marco Island, FL. We're available 24/7 for emergency repairs, and we'll give you an honest diagnosis before we touch your system.</p>
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
