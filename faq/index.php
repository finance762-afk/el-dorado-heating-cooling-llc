<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'faq';
$pageType       = 'faq';
$pageTitle      = 'Frequently Asked Questions | El Dorado Heating & Cooling';
$metaDescription = 'Get answers to common HVAC questions for Naples, FL homeowners. Learn about AC maintenance, emergency repairs, energy efficiency, and what to expect from El Dorado Heating & Cooling.';
$pageDescription = $metaDescription;
$canonicalUrl   = $siteUrl . '/faq/';
$ogType         = 'website';

// Comprehensive FAQ content (from research brief + expanded)
$faqCategories = [
    'General' => [
        [
            'q' => 'What areas do you serve?',
            'a' => 'El Dorado Heating & Cooling serves Naples, Bonita Springs, Marco Island, and surrounding areas across Collier County, Florida. Call (239) 404-6797 to confirm same-day availability for your specific address.'
        ],
        [
            'q' => 'Are you licensed and insured?',
            'a' => 'Yes. El Dorado Heating & Cooling holds all required Florida HVAC licenses and carries full liability and workers\' compensation insurance. Your protection is our priority on every job.'
        ],
        [
            'q' => 'Do you offer emergency service?',
            'a' => 'Absolutely. We provide 24/7 emergency HVAC service year-round. When your air conditioner fails in Naples\' peak summer heat, we answer — day, night, weekends, and holidays.'
        ],
        [
            'q' => 'Do you provide service in Spanish?',
            'a' => 'Yes. Our team serves Naples homeowners in both English and Spanish, so you get clear answers and honest service in the language you prefer.'
        ],
    ],
    'Services & Pricing' => [
        [
            'q' => 'What HVAC services do you offer?',
            'a' => 'We handle the full spectrum of HVAC services in Naples: air conditioning repair and installation, heating repair and installation, AC maintenance and tune-ups, ductwork services, coil cleaning, air purification, dehumidifiers, attic fans, radiant barriers, energy audits, and more. If it keeps your home comfortable, we do it.'
        ],
        [
            'q' => 'Do you offer free estimates?',
            'a' => 'Yes. We provide free, no-obligation estimates for all HVAC installations and major repairs. Contact us by phone or online form, and we\'ll schedule a time to assess the job and give you upfront, itemized pricing.'
        ],
        [
            'q' => 'What forms of payment do you accept?',
            'a' => 'We accept cash, checks, and all major credit cards. For larger projects, we can help connect you with financing options through approved third-party providers.'
        ],
        [
            'q' => 'Why is my electric bill so high during the summer?',
            'a' => 'Naples heat and humidity make AC systems work harder, and a struggling system runs far longer than it should. A professional tune-up can improve efficiency 5–15%: we check refrigerant levels, clean coils, and verify your system isn\'t overrunning — often saving hundreds on your electric bill each year.'
        ],
    ],
    'AC Maintenance & Repairs' => [
        [
            'q' => 'How often should I have my AC system serviced in Naples, FL?',
            'a' => 'We recommend professional AC maintenance twice yearly in Southwest Florida — before cooling season in the spring and again in the fall. Naples\' heat, humidity, and salt air accelerate wear on HVAC equipment, and regular service prevents costly breakdowns during peak summer.'
        ],
        [
            'q' => 'What should I do if my air conditioner stops working during the hot season?',
            'a' => 'Call El Dorado Heating & Cooling right away at (239) 404-6797 for 24/7 emergency service. We offer same-day diagnosis and repair for most systems. In the meantime, close your blinds, turn off heat-generating appliances, and stay in the coolest room until we arrive.'
        ],
        [
            'q' => 'How long do air conditioning systems typically last in Florida?',
            'a' => 'With proper maintenance, most AC systems last 12–15 years in our climate. Salt air and continuous cooling demand can shorten that lifespan. We\'ll assess your system\'s condition and help you plan a replacement before it fails in the middle of summer.'
        ],
        [
            'q' => 'What is included in your preventive maintenance plans?',
            'a' => 'Our maintenance plans include seasonal inspections, coil cleaning, refrigerant level checks, filter changes, electrical connection testing, and priority scheduling for service calls. Regular maintenance prevents the large majority of AC emergencies and meaningfully extends the life of your equipment.'
        ],
        [
            'q' => 'How do I know if I need AC repair or a full replacement?',
            'a' => 'If your system is over 12 years old, requires frequent repairs, struggles to keep your home cool, or your energy bills have spiked, replacement may be more cost-effective than ongoing repairs. We\'ll assess your system honestly and help you make the best decision for your budget and comfort.'
        ],
    ],
    'Process & What to Expect' => [
        [
            'q' => 'What happens when I call for service?',
            'a' => 'A real person from our Naples office answers your call and schedules a time for a licensed technician to visit. We arrive on time, diagnose the issue, explain it in plain language, and provide upfront pricing before starting any work — no surprises.'
        ],
        [
            'q' => 'How quickly can you respond to an emergency call?',
            'a' => 'We offer same-day service for most emergency calls across Collier County. When you call, we\'ll confirm availability and give you an estimated arrival window. During peak summer months, we prioritize the most urgent situations first.'
        ],
        [
            'q' => 'Do I need to be home during service?',
            'a' => 'For the initial diagnosis and any indoor work, yes — a homeowner or authorized representative should be present. For routine outdoor maintenance on a scheduled visit, some customers choose to provide access instructions. We\'ll discuss your preference when scheduling.'
        ],
        [
            'q' => 'What if you find additional problems during the service call?',
            'a' => 'We\'ll explain what we found, why it matters, and what it will cost to fix — before proceeding. You approve all additional work. We never perform unnecessary repairs or upsell services you don\'t need.'
        ],
    ],
];

// Build FAQPage schema
$faqSchemaEntities = [];
foreach ($faqCategories as $category => $faqs) {
    foreach ($faqs as $faq) {
        $faqSchemaEntities[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }
}

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
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'FAQ', 'item' => $canonicalUrl],
            ]
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => $faqSchemaEntities
        ]
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── FAQ page composition ──────────────────────────────────────────────── */
.faq-hero .hero-text { max-width: 68ch; }

.faq-category { margin-top: var(--space-2xl); }
.faq-category:first-of-type { margin-top: 0; }
.faq-category h2 {
  font-size: 1.5rem; color: var(--color-primary);
  margin-bottom: var(--space-md);
  padding-bottom: var(--space-sm);
  border-bottom: 2px solid var(--color-secondary);
}

.faq { margin-bottom: var(--space-md); }
.faq summary {
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-radius: var(--radius);
  padding: var(--space-md);
  font-weight: 600;
  font-size: 1.05rem;
  color: var(--color-primary);
  cursor: pointer;
  transition: all var(--transition);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-sm);
}
.faq summary:hover {
  background: color-mix(in srgb, var(--color-primary) 5%, var(--color-surface));
  border-color: var(--color-primary);
}
.faq summary::marker,
.faq summary::-webkit-details-marker { display: none; }
.faq summary::after {
  content: '+';
  font-size: 1.5rem;
  font-weight: 400;
  color: var(--color-secondary);
  flex-shrink: 0;
  transition: transform var(--transition);
}
.faq[open] summary::after {
  transform: rotate(45deg);
}
.faq p {
  padding: var(--space-md);
  line-height: 1.7;
  color: var(--color-text-light);
  background: rgba(0,0,0,0.01);
  border: 1px solid var(--color-border);
  border-top: none;
  border-radius: 0 0 var(--radius) var(--radius);
  margin: 0;
}
.faq a { color: var(--color-primary); text-decoration: underline; }
</style>

<?php echo $schemaMarkup; ?>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">FAQ</li>
    </ol>
  </div>
</nav>

<main id="main-content">

  <!-- ═══════════════════ HERO ═══════════════════ -->
  <section class="hero hero--interior faq-hero" aria-label="Frequently asked questions">
    <div class="container">
      <div class="hero-text">
        <span class="eyebrow">Good to Know</span>
        <h1>Frequently Asked Questions</h1>
        <p class="hero-answer">Straight answers about HVAC maintenance, repairs, pricing, and what to expect when you work with El Dorado Heating &amp; Cooling in Naples, FL.</p>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ FAQ CATEGORIES ═══════════════════ -->
  <section class="section section--light" aria-label="FAQ content">
    <div class="container" style="max-width: 800px;">
      <?php foreach ($faqCategories as $category => $faqs): ?>
      <div class="faq-category">
        <h2><?php echo htmlspecialchars($category); ?></h2>
        <?php foreach ($faqs as $i => $faq): ?>
        <details class="faq"<?php echo $i < 2 ? ' open' : ''; ?>>
          <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
          <p><?php echo $faq['a']; ?></p>
        </details>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ═══════════════════ CTA BAND ═══════════════════ -->
  <section class="cta-banner on-dark texture-grain slant-top" aria-label="Still have questions">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
      <div class="reveal-left">
        <span class="eyebrow-label">Still have questions?</span>
        <h2>We're here to help.</h2>
        <p>If you didn't find the answer you're looking for, call us at <?php echo $phone; ?> or request a free estimate and we'll get back to you the same day.</p>
      </div>
      <div class="actions reveal-right">
        <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Get a Free Estimate</button>
        <a href="tel:<?php echo $phoneTel; ?>" class="btn btn-outline-white btn-lg">Call <?php echo $phone; ?></a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
