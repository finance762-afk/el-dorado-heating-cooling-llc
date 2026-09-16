<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'accessibility';
$pageType       = 'other';
$pageTitle      = 'Accessibility Statement | El Dorado Heating & Cooling LLC';
$metaDescription = 'Our commitment to ensuring digital accessibility for people with disabilities. WCAG 2.1 Level AA conformance.';
$pageDescription = $metaDescription;
$canonicalUrl   = $siteUrl . '/accessibility/';
$ogType         = 'website';

$companyState      = 'Florida';
$lastUpdated       = date('F j, Y');

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
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Accessibility', 'item' => $canonicalUrl],
            ]
        ]
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo $schemaMarkup; ?>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Accessibility</li>
    </ol>
  </div>
</nav>

<main id="main-content">

  <section class="hero hero--legal" aria-label="Accessibility Statement">
    <div class="hero__copy">
      <span class="eyebrow-label">Legal</span>
      <h1>Accessibility Statement</h1>
      <span class="section-subtitle">accessible to everyone</span>
      <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <article class="legal-prose">

    <h2>1. Our Commitment</h2>
    <p><?php echo $siteName; ?> is committed to ensuring digital accessibility for people with disabilities. We continually improve the user experience for everyone and apply relevant accessibility standards to <?php echo $domain; ?>.</p>

    <h2>2. Conformance Status</h2>
    <p>This site is designed to conform with Web Content Accessibility Guidelines (WCAG) 2.1 Level AA. WCAG defines requirements for designers and developers to improve accessibility for people with disabilities. Our site partially conforms with WCAG 2.1 Level AA, meaning some content does not yet fully meet the standard. We are working to address all known issues.</p>

    <h2>3. Accessibility Features</h2>
    <ul>
      <li>Semantic HTML5 markup with proper landmark regions (header, nav, main, footer)</li>
      <li>Skip-to-content link at the top of every page</li>
      <li>Visible keyboard focus indicators on all interactive elements</li>
      <li>Alt text on all meaningful images</li>
      <li>Sufficient color contrast for body text and interactive elements</li>
      <li>Responsive design that works across screen sizes and zoom levels</li>
      <li><code>prefers-reduced-motion</code> support — animations disabled for users who request reduced motion</li>
      <li>ARIA labels on navigation and form elements</li>
      <li>Form field labels associated with inputs</li>
    </ul>

    <h2>4. Known Issues</h2>
    <p>We are aware of these areas needing improvement:</p>
    <ul>
      <li>Some third-party embeds may not fully meet WCAG standards. We provide alternative ways to access this information (call us at <?php echo $phone; ?> or email us at <?php echo $email; ?>).</li>
      <li>Some PDF documents may not be fully accessible. Contact us for alternative formats.</li>
    </ul>

    <h2>5. Feedback and Reporting Issues</h2>
    <p>If you encounter an accessibility barrier on this site, please tell us. We aim to respond to accessibility feedback within 5 business days.</p>
    <p>Contact us:</p>
    <ul>
      <li>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
      <li>Phone: <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></li>
    </ul>

    <h2>6. Alternative Contact Methods</h2>
    <p>If our website is not accessible to you, you can reach us by phone or mail. We will provide HVAC service information in alternative formats on request.</p>
    <p>
      <strong>Mailing Address:</strong><br>
      <?php echo $siteName; ?><br>
      <?php echo $address['street']; ?><br>
      <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?>
    </p>

    <h2>7. Changes to This Statement</h2>
    <p>We may update this Accessibility Statement from time to time. The "Last Updated" date at the top will reflect the most recent version.</p>

    <h2>8. Contact Us</h2>
    <p>For questions about accessibility or this statement:</p>
    <p>
      <strong><?php echo $siteName; ?></strong><br>
      Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
      Phone: <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a><br>
      Address: <?php echo $address['street']; ?>, <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?>
    </p>

    <div class="legal-disclaimer">
      This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed <?php echo $companyState; ?> attorney before publication.
    </div>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
