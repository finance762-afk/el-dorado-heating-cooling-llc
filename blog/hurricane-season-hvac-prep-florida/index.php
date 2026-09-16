<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$currentPage     = 'blog';
$pageType        = 'other';
$pageTitle       = 'Hurricane Season HVAC Prep for Southwest Florida Homes';
$metaDescription = 'Protect your AC system before a storm hits. From securing outdoor units to post-storm inspection checklists, here\'s how Naples homeowners can prevent thousands in avoidable HVAC damage.';
$canonicalUrl    = $siteUrl . '/blog/hurricane-season-hvac-prep-florida/';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- BlogPosting + Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "headline": "<?php echo $pageTitle; ?>",
      "description": "<?php echo $metaDescription; ?>",
      "author": {
        "@id": "<?php echo $siteUrl; ?>/#organization"
      },
      "publisher": {
        "@id": "<?php echo $siteUrl; ?>/#organization"
      },
      "datePublished": "2026-09-10",
      "dateModified": "2026-09-10",
      "mainEntityOfPage": "<?php echo $canonicalUrl; ?>",
      "image": "<?php echo $siteUrl; ?>/assets/images/hero-service-truck.jpg",
      "keywords": "hurricane prep HVAC Florida, protect AC unit storm, hurricane season Naples FL, HVAC storm damage prevention"
    },
    {
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
          "name": "Blog",
          "item": "<?php echo $siteUrl; ?>/blog/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Hurricane Season HVAC Prep",
          "item": "<?php echo $canonicalUrl; ?>"
        }
      ]
    }
  ]
}
</script>

<!-- Blog Post Header -->
<article class="blog-post">
    <header class="blog-post__header">
        <div class="container-narrow">
            <div class="blog-post__meta">
                <span class="blog-post__category">Maintenance</span>
                <time datetime="2026-09-10">September 10, 2026</time>
                <span class="blog-post__readtime">5 min read</span>
            </div>
            <h1><?php echo $pageTitle; ?></h1>
            <p class="blog-post__intro">Protect your AC system before a storm hits. From securing outdoor units to post-storm inspection checklists, here's how Naples homeowners can prevent thousands in avoidable HVAC damage.</p>
        </div>
    </header>

    <!-- Featured Image -->
    <div class="blog-post__featured-image">
        <picture>
            <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w, /assets/images/hero-service-truck.jpg 1600w" sizes="(max-width: 900px) 100vw, 900px">
            <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 900px" alt="El Dorado Heating & Cooling service truck ready for storm-season service calls" width="1200" height="720" loading="eager" fetchpriority="high">
        </picture>
    </div>

    <!-- Blog Post Content -->
    <div class="blog-post__content container-narrow">
        <div class="answer-block">
            <p><strong>How do I protect my AC unit from a hurricane?</strong> Before a storm, shut off power to your AC at the breaker, cover the outdoor condenser with a waterproof tarp secured with straps (never bungee cords that can snap), and elevate the unit on hurricane pads if you're in a flood-prone area. After the storm, inspect for debris damage, check refrigerant lines for bends or punctures, and have a licensed HVAC technician test the system before turning it back on.</p>
        </div>

        <h2>Hurricane Season in Southwest Florida: What HVAC Systems Face</h2>
        <p>Atlantic hurricane season runs June 1 through November 30, and Southwest Florida sits directly in the path of storms tracking through the Gulf of Mexico. Naples, Bonita Springs, and Marco Island have all experienced direct hits from major hurricanes — most recently Hurricane Ian in 2022, which brought sustained winds over 140 mph and storm surge that flooded thousands of coastal properties.</p>

        <p>When a hurricane approaches, your air conditioning system is vulnerable to:</p>

        <ul>
            <li><strong>Wind-driven debris</strong> — tree branches, roof tiles, patio furniture, and airborne objects can puncture condenser coils, bend fan blades, or damage the compressor housing.</li>
            <li><strong>Flooding and standing water</strong> — condensers sitting in floodwater can suffer electrical damage, rusted components, and contaminated refrigerant systems.</li>
            <li><strong>Power surges</strong> — when the grid comes back online after an outage, voltage spikes can fry capacitors, control boards, and compressor motors.</li>
            <li><strong>Salt spray and corrosion</strong> — hurricane winds carry salt water miles inland, accelerating corrosion on outdoor units that weren't designed for direct saltwater exposure.</li>
        </ul>

        <p>The good news: most hurricane damage to HVAC systems is preventable with proper preparation and post-storm inspection. El Dorado Heating & Cooling has helped hundreds of Naples homeowners restore their AC systems after major storms, and the difference between a $200 repair and a $5,000 replacement often comes down to what you did in the 48 hours before landfall.</p>

        <h2>Pre-Storm HVAC Checklist (48-72 Hours Before Landfall)</h2>
        <p>When a hurricane watch is issued for Southwest Florida, take these steps to protect your AC system:</p>

        <h3>1. Turn Off Power at the Breaker</h3>
        <p>Shut off the dedicated circuit breaker for your AC system — not just the thermostat. This protects the compressor, control board, and capacitors from power surges when the grid cycles back on after the storm. Label the breaker with tape so you remember which one to flip back later.</p>

        <h3>2. Secure the Outdoor Condenser Unit</h3>
        <p>Your outdoor condenser is the most vulnerable component. If possible, bolt it down to a concrete pad or use hurricane straps anchored to ground screws. Units that aren't secured can topple in high winds, severing refrigerant lines and electrical connections — a $1,500+ repair.</p>

        <p>If your condenser sits on plastic or composite pads, consider upgrading to hurricane-rated concrete pads after the season. We install these across Naples for $300-$500 — cheap insurance compared to replacing a toppled unit.</p>

        <h3>3. Cover the Unit (But Do It Right)</h3>
        <p>Covering your condenser protects it from flying debris and wind-driven rain, but improper covering can cause more harm than good. Here's the right way:</p>

        <ul>
            <li>Use a heavy-duty waterproof tarp, not a fitted AC cover (which can act as a sail in high winds)</li>
            <li>Secure the tarp with ratchet straps or rope tied to ground stakes — never bungee cords, which snap in sustained winds</li>
            <li>Cover the top and sides, but leave the bottom open for drainage — trapped water can flood the electrical components</li>
            <li>Remove the cover immediately after the storm to prevent mold and corrosion</li>
        </ul>

        <h3>4. Clear the Area Around the Unit</h3>
        <p>Move patio furniture, potted plants, grills, and yard tools at least 10 feet away from your condenser. Even small objects become projectiles in 100+ mph winds, and a flying flowerpot can puncture a coil that costs $800-$1,500 to replace.</p>

        <p>Trim overhanging tree branches and palm fronds before the season starts — a branch falling on your condenser can total the unit.</p>

        <h3>5. Elevate If You're in a Flood Zone</h3>
        <p>If your property sits in an evacuation zone or has flooded before, consider elevating your condenser on a raised platform before hurricane season. FEMA recommends outdoor AC units be installed at least 1 foot above the base flood elevation for your area.</p>

        <p>Condenser platforms cost $400-$800 installed and can prevent thousands in flood damage. If you're replacing an aging system, ask your <a href="/services/hvac-services/">HVAC contractor</a> to install the new unit on an elevated pad from the start.</p>

        <h2>What NOT to Do Before a Storm</h2>
        <p>Don't run your AC during a hurricane. Some homeowners think pre-cooling the house to 65°F will keep it comfortable after power loss, but it doesn't — Florida homes lose cool air fast, and you're risking electrical damage if power surges hit while the system is running.</p>

        <p>Don't wrap your condenser in plastic sheeting. Plastic doesn't breathe, trapping moisture that promotes rust and mold. Use breathable tarps or marine-grade covers designed for outdoor equipment.</p>

        <p>Don't rely on sandbags to protect a ground-level condenser from flooding. Sandbags slow water but don't stop it, and a condenser sitting in even 6 inches of water can suffer permanent damage.</p>

        <h2>Post-Storm Inspection: What to Check Before Turning Your AC Back On</h2>
        <p>After the storm passes and it's safe to go outside, inspect your HVAC system for damage before restoring power:</p>

        <h3>Visual Inspection Checklist</h3>
        <ul>
            <li><strong>Check for standing water around or under the condenser.</strong> If the unit sat in floodwater, do not turn it on — call an HVAC technician to inspect for electrical and mechanical damage first.</li>
            <li><strong>Look for bent or damaged fan blades.</strong> Even minor blade damage throws the fan off balance, causing vibration that can crack the compressor mount or damage bearings.</li>
            <li><strong>Inspect refrigerant lines for dents, punctures, or disconnections.</strong> The copper lines running between your indoor and outdoor units are vulnerable to flying debris. A punctured line means lost refrigerant and a several-hundred-dollar repair.</li>
            <li><strong>Check the condenser coil fins for damage.</strong> The thin aluminum fins on the outdoor unit bend easily. If more than 25% of the fins are flattened, airflow drops and efficiency plummets — a technician can straighten them with a fin comb in 20-30 minutes.</li>
            <li><strong>Clear debris from inside and around the unit.</strong> Remove leaves, branches, mud, and anything else that got blown in. Debris inside the condenser can jam the fan or block airflow.</li>
        </ul>

        <h3>When to Call a Professional</h3>
        <p>If you see any of the following, call El Dorado Heating & Cooling for a post-storm inspection before turning your system on:</p>

        <ul>
            <li>The unit tilted, tipped over, or moved from its original position</li>
            <li>Electrical wiring is exposed, frayed, or disconnected</li>
            <li>You smell gas or see damaged refrigerant lines</li>
            <li>The condenser sat in floodwater for more than a few hours</li>
            <li>The outdoor disconnect box (the gray box near the condenser with a pull-out handle) is damaged or won't reset</li>
        </ul>

        <p>Post-storm HVAC inspections typically cost $100-$150 and can save you thousands by catching hidden damage before it causes a catastrophic failure. Our technicians check electrical connections, test capacitors, verify refrigerant pressure, and inspect the compressor for water or debris intrusion — all things that can fail days or weeks after the storm if not addressed immediately.</p>

        <h2>Insurance and Hurricane Damage: What's Covered?</h2>
        <p>Homeowners insurance in Florida typically covers hurricane damage to HVAC systems under your dwelling coverage, minus your deductible. However, coverage varies by policy, and flood damage is usually excluded unless you carry separate flood insurance through the National Flood Insurance Program (NFIP).</p>

        <p>If your AC was damaged by wind, flying debris, or falling trees, file a claim with your homeowners insurance. If it was damaged by storm surge or flooding, you'll need flood insurance to recover the cost.</p>

        <p>Important: take photos of all damage before making any repairs. Insurance adjusters need documentation, and HVAC companies can't legally file claims on your behalf — but we can provide detailed repair estimates and documentation to support your claim.</p>

        <h2>Hurricane-Ready HVAC Upgrades to Consider</h2>
        <p>If you're replacing an aging AC system or planning upgrades, these features make your HVAC more hurricane-resistant:</p>

        <ul>
            <li><strong>Hurricane-rated condenser pad:</strong> Reinforced concrete pads with anchor bolts can survive 150+ mph winds. Cost: $300-$500 installed.</li>
            <li><strong>Elevated platform:</strong> Raises the condenser above flood levels. Cost: $400-$800 depending on height and construction.</li>
            <li><strong>Impact-resistant coil guards:</strong> Steel cages that protect the condenser coil from flying debris without blocking airflow. Cost: $150-$300.</li>
            <li><strong>Whole-home surge protector:</strong> Protects all major appliances, including your HVAC, from grid surges after storms. Cost: $300-$600 installed at your electrical panel.</li>
        </ul>

        <p>El Dorado Heating & Cooling installs all of these upgrades across Naples, Bonita Springs, and Marco Island. If you're concerned about your system's vulnerability, call <?php echo $phone; ?> to schedule a hurricane-readiness assessment — we'll evaluate your current setup and recommend cost-effective improvements.</p>

        <h2>Seasonal Maintenance: Your First Line of Defense</h2>
        <p>The best hurricane prep you can do is routine <a href="/services/ac-maintenance/">AC maintenance</a> before storm season. A well-maintained system is more resilient to wind, rain, and power fluctuations than one that's already struggling with clogged coils, low refrigerant, or worn electrical components.</p>

        <p>El Dorado Heating & Cooling's seasonal maintenance includes:</p>

        <ul>
            <li>Cleaning condenser coils and checking for corrosion</li>
            <li>Tightening electrical connections (loose connections fail in surges)</li>
            <li>Testing capacitors and replacing weak ones before they fail</li>
            <li>Inspecting refrigerant lines for pre-existing damage</li>
            <li>Verifying the condenser is level and securely mounted</li>
            <li>Checking the outdoor disconnect and breaker for proper operation</li>
        </ul>

        <p>We recommend scheduling your pre-season maintenance in April or May, before the heat arrives and before hurricane season starts. That gives you time to address any issues we find before a storm watch forces you to make rushed decisions.</p>

        <h2>What to Do If You Evacuate</h2>
        <p>If you're leaving Southwest Florida for a storm, follow these steps before you go:</p>

        <ol>
            <li>Turn off your AC at the breaker</li>
            <li>Shut off the main water supply to prevent flooding from burst pipes</li>
            <li>Unplug sensitive electronics (TVs, computers, modems)</li>
            <li>Set your thermostat to "off" — not just a higher temperature</li>
            <li>Take photos of your HVAC system and property for insurance documentation</li>
        </ol>

        <p>When you return, inspect the system visually before restoring power. If you see any signs of damage or flooding, call an HVAC technician for a safety check before running the system.</p>

        <!-- Related Articles -->
        <div class="related-articles">
            <h3>Related Articles</h3>
            <div class="related-articles-grid">
                <?php
                // Get the other post from the registry (not this one)
                $otherPost = array_values(array_filter($blogPosts, fn($p) => $p['slug'] !== 'hurricane-season-hvac-prep-florida'))[0] ?? null;
                if ($otherPost):
                ?>
                <div class="related-article-card">
                    <picture>
                        <source type="image/avif" srcset="/assets/images/<?php echo $otherPost['image']; ?>-480.avif 480w" sizes="300px">
                        <img src="/assets/images/<?php echo $otherPost['image']; ?>-480.webp" alt="<?php echo htmlspecialchars($otherPost['alt']); ?>" width="400" height="240" loading="lazy" decoding="async">
                    </picture>
                    <div class="related-article-content">
                        <span class="related-category"><?php echo htmlspecialchars($otherPost['category']); ?></span>
                        <h4><a href="/blog/<?php echo $otherPost['slug']; ?>/"><?php echo htmlspecialchars($otherPost['title']); ?></a></h4>
                        <p><?php echo htmlspecialchars($otherPost['excerpt']); ?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Related Services -->
        <div class="related-services">
            <h3>Related Services</h3>
            <ul>
                <li><a href="/services/hvac-services/">AC Repair & Installation</a></li>
                <li><a href="/services/ac-maintenance/">AC Maintenance Plans</a></li>
                <li><a href="/services/ac-tune-ups/">Pre-Season AC Tune-Ups</a></li>
            </ul>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="blog-post__cta">
        <div class="container-narrow">
            <div class="cta-card">
                <h3>Schedule Your Pre-Hurricane Season AC Inspection</h3>
                <p>El Dorado Heating & Cooling helps Naples homeowners prepare their HVAC systems for hurricane season. Call <?php echo $phone; ?> to schedule a maintenance visit.</p>
                <div class="cta-actions">
                    <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary">Call <?php echo $phone; ?></a>
                    <a href="#estimate" class="btn-secondary" data-open-estimate>Get Free Estimate</a>
                </div>
            </div>
        </div>
    </section>
</article>

<style>
/* Blog Post Styles */
.blog-post__header {
    background: var(--color-bg-alt);
    padding: var(--space-3xl) 0 var(--space-2xl);
    text-align: center;
}

.blog-post__meta {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: var(--space-md);
    margin-bottom: var(--space-lg);
    font-size: var(--fs-sm);
    color: var(--color-text-light);
}

.blog-post__category {
    background: var(--color-accent);
    color: var(--color-primary-dark);
    padding: 6px 14px;
    border-radius: var(--radius-sm);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.blog-post__header h1 {
    margin-bottom: var(--space-md);
}

.blog-post__intro {
    font-size: var(--fs-lg);
    color: var(--color-text-light);
    line-height: 1.6;
}

.blog-post__featured-image {
    max-width: 1200px;
    margin: 0 auto var(--space-3xl);
}

.blog-post__featured-image img {
    width: 100%;
    height: auto;
    display: block;
}

.blog-post__content {
    padding: var(--space-2xl) 0;
}

.blog-post__content h2 {
    margin-top: var(--space-3xl);
    margin-bottom: var(--space-lg);
    color: var(--color-primary);
}

.blog-post__content h3 {
    margin-top: var(--space-2xl);
    margin-bottom: var(--space-md);
    color: var(--color-primary);
}

.blog-post__content p,
.blog-post__content ul,
.blog-post__content ol {
    margin-bottom: var(--space-lg);
    line-height: 1.8;
}

.blog-post__content ul,
.blog-post__content ol {
    padding-left: var(--space-xl);
}

.blog-post__content li {
    margin-bottom: var(--space-sm);
}

.blog-post__content a {
    color: var(--color-primary);
    text-decoration: underline;
    transition: var(--transition);
}

.blog-post__content a:hover {
    color: var(--color-accent);
}

.related-articles,
.related-services {
    margin-top: var(--space-3xl);
    padding-top: var(--space-2xl);
    border-top: 1px solid var(--color-border);
}

.related-articles h3,
.related-services h3 {
    font-size: var(--fs-h4);
    margin-bottom: var(--space-lg);
}

.related-article-card {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: var(--space-lg);
    padding: var(--space-lg);
    border: 1px solid var(--color-border);
    border-radius: var(--radius);
    transition: var(--transition);
}

.related-article-card:hover {
    box-shadow: var(--shadow);
}

.related-article-card picture {
    border-radius: var(--radius-sm);
    overflow: hidden;
}

.related-category {
    display: inline-block;
    font-size: var(--fs-xs);
    color: var(--color-accent);
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: var(--space-xs);
}

.related-article-card h4 {
    font-size: var(--fs-h6);
    margin-bottom: var(--space-sm);
}

.related-article-card h4 a {
    color: var(--color-primary);
    text-decoration: none;
}

.related-article-card h4 a:hover {
    color: var(--color-accent);
}

.related-article-card p {
    font-size: var(--fs-sm);
    color: var(--color-text-light);
    line-height: 1.6;
    margin: 0;
}

.related-services ul {
    list-style: none;
    padding: 0;
}

.related-services li {
    padding-left: var(--space-lg);
    margin-bottom: var(--space-sm);
    position: relative;
}

.related-services li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: var(--color-accent);
}

.blog-post__cta {
    padding: var(--space-3xl) 0;
    background: var(--color-bg-dark);
}

@media (max-width: 768px) {
    .related-article-card {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
