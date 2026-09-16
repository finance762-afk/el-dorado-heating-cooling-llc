<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Service Areas Overview Page ────────────────────────────────────────────
$currentPage     = 'service-areas';
$pageType        = 'other';
$pageTitle       = 'HVAC Service Areas in Southwest Florida | El Dorado Heating & Cooling';
$metaDescription = 'El Dorado Heating & Cooling serves Naples, Bonita Springs, and Marco Island with expert AC repair, installation, and maintenance. Local HVAC service across Collier County, FL.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/service-areas/';

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
      "item": "<?php echo $canonicalUrl; ?>"
    }
  ]
}
</script>

<!-- Hero Section -->
<section class="hero hero--interior">
    <div class="hero-grid container">
        <div class="hero-content">
            <span class="eyebrow-label">Where We Serve</span>
            <h1>HVAC Services in <span class="text-accent">Naples, Bonita Springs & Marco Island</span></h1>
            <p class="hero-answer">El Dorado Heating & Cooling brings over 60 years of combined HVAC experience to homes across Southwest Florida. We understand the demands Naples heat and humidity place on cooling systems — and we're your local team when yours needs repair, replacement, or seasonal maintenance.</p>
            <div class="btn-group">
                <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary">
                    <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    Call <?php echo $phone; ?>
                </a>
                <a href="#estimate" class="btn-secondary" data-open-estimate>Get Free Estimate</a>
            </div>
            <div class="hero-chips">
                <span class="chip">24/7 Emergency Service</span>
                <span class="chip">Same-Day Repairs</span>
                <span class="chip">Licensed & Insured</span>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas Grid -->
<section class="section section--light service-areas-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Communities We Serve</span>
            <h2>Your Local <span class="text-accent">HVAC Experts</span> Across Collier County</h2>
            <p class="hero-answer">From coastal Marco Island to inland Naples neighborhoods, El Dorado Heating & Cooling understands the unique climate challenges Southwest Florida homeowners face. Salt air corrosion, extreme humidity, and year-round cooling demand require local expertise — and we've been serving this community since <?php echo $yearEstablished; ?>.</p>
        </div>

        <div class="area-cards-grid">
            <?php
            $areaDescriptions = [
                'Naples' => 'Home to Olde Naples, Park Shore, and Port Royal neighborhoods, Naples combines Gulf Coast luxury with year-round cooling demands. We serve every Naples ZIP code with AC repair, installation, and twice-yearly maintenance that prevents summer breakdowns.',
                'Bonita Springs' => 'Serving Bonita Bay, Pelican Landing, and The Brooks communities between Fort Myers and Naples. The Imperial River area\'s subtropical climate and waterfront properties require HVAC systems that handle humidity, salt air, and continuous use.',
                'Marco Island' => 'The largest of the Ten Thousand Islands features waterfront estates, high-rise condos, and seasonal residents who need reliable AC service year-round. We handle Marco Island\'s unique coastal cooling challenges with local expertise.',
            ];

            $i = 0;
            foreach ($serviceAreas as $area):
                $areaSlug = getAreaSlug($area['city']);
                $areaPath = '/service-areas/' . $areaSlug . '/';
                $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
                $tint = $tints[$i % 3];
                $delay = ($i % 3) + 1;
            ?>
            <article class="area-card <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>" id="<?php echo $areaSlug; ?>">
                <div class="area-card__icon">
                    <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3><?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></h3>
                <p class="area-card__desc"><?php echo htmlspecialchars($areaDescriptions[$area['city']] ?? ''); ?></p>
                <ul class="area-card__features">
                    <li>AC Repair & Installation</li>
                    <li>24/7 Emergency Service</li>
                    <li>Preventive Maintenance Plans</li>
                    <li>Humidity & Air Quality Control</li>
                </ul>
                <a href="<?php echo $areaPath; ?>" class="area-card__cta">Learn More About Service in <?php echo htmlspecialchars($area['city']); ?></a>
            </article>
            <?php
                $i++;
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Why Choose Us (Regional Expertise) -->
<section class="section section--dark">
    <div class="container-narrow">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Local Expertise</span>
            <h2>Why Southwest Florida Homeowners Choose <span class="text-accent">El Dorado Heating & Cooling</span></h2>
        </div>
        <div class="why-choose-grid reveal-up reveal-delay-1">
            <div class="why-card">
                <div class="why-card__icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>We Know This Climate</h3>
                <p>Salt air corrosion, extreme humidity, and 266 sunny days a year — we design maintenance plans around what actually wears out AC systems in Southwest Florida, not generic checklists.</p>
            </div>
            <div class="why-card">
                <div class="why-card__icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3>Same-Day Emergency Service</h3>
                <p>We respond to Naples, Bonita Springs, and Marco Island service calls within hours — not days. When your AC fails in July, every hour without cooling matters.</p>
            </div>
            <div class="why-card">
                <div class="why-card__icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
                </div>
                <h3>Family-Owned & Bilingual</h3>
                <p>As a family business, we answer the phone ourselves — and we serve Naples homeowners in both English and Spanish. No call centers, no confusion.</p>
            </div>
            <div class="why-card">
                <div class="why-card__icon">
                    <svg aria-hidden="true" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3>60+ Years Combined Experience</h3>
                <p>Our technicians have spent decades repairing and installing HVAC systems in coastal Florida — we've seen every failure mode salt air and humidity can cause, and we know how to fix them right.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section--light cta-section">
    <div class="container-narrow">
        <div class="cta-card reveal-scale">
            <div class="cta-content">
                <h2>Ready to Get Your AC System <span class="text-accent">Running Right</span>?</h2>
                <p>Call El Dorado Heating & Cooling for same-day service across Naples, Bonita Springs, and Marco Island. We're available 24/7 for emergency repairs — and we'll give you an honest estimate before we start any work.</p>
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
/* Service Areas Grid */
.area-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: var(--space-lg);
    margin-top: var(--space-2xl);
}

.area-card {
    background: var(--color-bg);
    border-radius: var(--radius-lg);
    padding: var(--space-xl);
    box-shadow: var(--shadow);
    transition: var(--transition);
    border: 1px solid var(--color-border);
}

.area-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
}

.area-card__icon {
    width: 56px;
    height: 56px;
    border-radius: var(--radius);
    background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--space-md);
    color: white;
}

.area-card h3 {
    font-size: var(--fs-h4);
    margin-bottom: var(--space-sm);
    color: var(--color-primary);
}

.area-card__desc {
    color: var(--color-text-light);
    margin-bottom: var(--space-md);
    line-height: 1.6;
}

.area-card__features {
    list-style: none;
    margin-bottom: var(--space-lg);
}

.area-card__features li {
    padding-left: var(--space-lg);
    margin-bottom: var(--space-xs);
    position: relative;
    color: var(--color-text);
    font-size: var(--fs-sm);
}

.area-card__features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--color-accent);
    font-weight: bold;
}

.area-card__cta {
    display: inline-flex;
    align-items: center;
    gap: var(--space-xs);
    color: var(--color-primary);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
}

.area-card__cta:hover {
    color: var(--color-accent);
    gap: var(--space-sm);
}

.area-card__cta::after {
    content: '→';
}

/* Why Choose Grid */
.why-choose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: var(--space-xl);
    margin-top: var(--space-2xl);
}

.why-card {
    text-align: center;
}

.why-card__icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: rgba(var(--color-accent-rgb), 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-md);
    color: var(--color-accent);
}

.why-card h3 {
    font-size: var(--fs-h5);
    margin-bottom: var(--space-sm);
    color: white;
}

.why-card p {
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
