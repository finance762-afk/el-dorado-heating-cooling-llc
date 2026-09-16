<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'contact';
$pageType       = 'contact';
$pageTitle      = 'Contact Us | El Dorado Heating & Cooling | Naples, FL';
$metaDescription = 'Get in touch with El Dorado Heating & Cooling for AC repair, installation, and maintenance in Naples, FL. Call (239) 404-6797 or request a free estimate.';
$pageDescription = $metaDescription;
$canonicalUrl   = $siteUrl . '/contact/';
$ogType         = 'website';

// Schema: BreadcrumbList only
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
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $canonicalUrl],
            ]
        ]
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES) . '</script>';

// Inline SVG icons
$ICONS = [
    'phone' => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'mail' => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m2 7 8.97 5.7a1.94 1.94 0 0 0 2.06 0L22 7"/></svg>',
    'map-pin' => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'clock' => '<svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── Contact page composition ──────────────────────────────────────────── */
.contact-hero .hero-text { max-width: 68ch; }

@media (min-width: 901px) {
  .contact-split { grid-template-columns: 1.15fr 1fr; gap: var(--space-2xl); }
}

.contact-card {
  background: var(--color-surface);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}
.contact-card h2 { margin-bottom: var(--space-sm); color: var(--color-primary); }
.contact-info { display: grid; gap: var(--space-md); margin-top: var(--space-lg); }
.contact-info-item {
  display: flex; gap: var(--space-sm); align-items: flex-start;
}
.contact-info-item svg { color: var(--color-primary); flex-shrink: 0; margin-top: 2px; }
.contact-info-item a { color: var(--color-primary); font-weight: 600; }
.contact-info-item address { font-style: normal; }

.contact-form .form-grid { display: grid; gap: var(--space-md); }
@media (min-width: 600px) {
  .contact-form .form-grid { grid-template-columns: 1fr 1fr; }
  .contact-form .field.full { grid-column: 1 / -1; }
}
.contact-form .field label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.92rem; }
.contact-form .field input,
.contact-form .field select,
.contact-form .field textarea {
  width: 100%; padding: 12px 14px; border: 1px solid var(--color-border);
  border-radius: var(--radius); font-family: var(--font-body);
  font-size: 0.95rem; background: #fff; transition: border-color var(--transition);
}
.contact-form .field input:focus,
.contact-form .field select:focus,
.contact-form .field textarea:focus {
  outline: none; border-color: var(--color-primary);
}
.contact-form .field textarea { resize: vertical; min-height: 100px; }

.form-consent-fieldset {
  border: 1px solid var(--color-border);
  border-radius: var(--radius);
  padding: var(--space-md);
  margin: var(--space-md) 0;
  background: rgba(0,0,0,0.01);
}
.form-consent-legend {
  font-weight: 700;
  font-size: 0.92rem;
  color: var(--color-primary);
  padding: 0 6px;
}
.form-consent-item {
  display: flex; gap: var(--space-sm); align-items: flex-start;
  padding: var(--space-sm) 0;
  cursor: pointer;
}
.form-consent-item .consent-checkbox {
  width: 18px; height: 18px; margin-top: 3px; flex-shrink: 0;
  accent-color: var(--color-primary); cursor: pointer;
}
.form-consent-item .consent-label {
  font-size: 0.88rem; line-height: 1.5; color: var(--color-text-light);
}
.form-consent-item .consent-label a {
  color: var(--color-primary); text-decoration: underline;
}
.form-consent-required .consent-label { color: var(--color-text); }
.required-star { color: var(--color-secondary); font-weight: 700; }
</style>

<?php echo $schemaMarkup; ?>

<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Contact</li>
    </ol>
  </div>
</nav>

<main id="main-content">

  <!-- ═══════════════════ HERO ═══════════════════ -->
  <section class="hero hero--interior contact-hero" aria-label="Contact El Dorado Heating & Cooling">
    <div class="container">
      <div class="hero-text">
        <span class="eyebrow">Get In Touch</span>
        <h1>Contact El Dorado Heating &amp; Cooling</h1>
        <p class="hero-answer">Call <?php echo $phone; ?> for same-day AC service across Naples, Bonita Springs, and Marco Island, or request a free estimate below — we reply the same day, usually within the hour.</p>
      </div>
    </div>
  </section>

  <!-- ═══════════════════ CONTACT FORM + INFO ═══════════════════ -->
  <section class="section section--light" aria-label="Contact form and information">
    <div class="container">
      <div class="split contact-split">
        <!-- Contact Form -->
        <div class="reveal-left">
          <div class="contact-card">
            <h2>Send us a message</h2>
            <p>Tell us about your HVAC needs and we'll get back to you the same day.</p>
            <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="contact-form">
              <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
              <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
              <?php echo p1_attribution_fields('contact'); ?>
              <input type="hidden" name="form_location" value="contact">
              <input type="hidden" name="consent_version" value="v2.1">
              <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

              <div class="form-grid">
                <div class="field">
                  <label for="contact-name">Your Name *</label>
                  <input id="contact-name" type="text" name="name" autocomplete="name" required>
                </div>
                <div class="field">
                  <label for="contact-phone">Phone *</label>
                  <input id="contact-phone" type="tel" name="phone" autocomplete="tel" required>
                </div>
                <div class="field full">
                  <label for="contact-email">Email *</label>
                  <input id="contact-email" type="email" name="email" autocomplete="email" required>
                </div>
                <div class="field full">
                  <label for="contact-service">Service Needed</label>
                  <select id="contact-service" name="service">
                    <option value="">Select a service</option>
                    <?php foreach ($servicePages as $cSvc): ?>
                    <option value="<?php echo htmlspecialchars($cSvc['name']); ?>"><?php echo htmlspecialchars($cSvc['name']); ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="field full">
                  <label for="contact-message">How can we help?</label>
                  <textarea id="contact-message" name="message" rows="4"></textarea>
                </div>
              </div>

              <fieldset class="form-consent-fieldset">
                <legend class="form-consent-legend">Communication Consent</legend>
                <label class="form-consent-item">
                  <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                  <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry and services. I can unsubscribe anytime via the link in any email or by emailing <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>.</span>
                </label>
                <label class="form-consent-item">
                  <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                  <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from <?php echo htmlspecialchars($siteName); ?> at the number provided (appointment reminders, service updates). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                </label>
                <label class="form-consent-item form-consent-required">
                  <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                  <span class="consent-label">I have read and agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>. <span class="required-star">*</span></span>
                </label>
              </fieldset>

              <button type="submit" class="btn btn-primary btn-block">Send Message</button>
            </form>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="reveal-right">
          <div class="contact-card">
            <h2>Reach us directly</h2>
            <p>Prefer to call or visit? Here's how to reach El Dorado Heating &amp; Cooling.</p>
            <div class="contact-info">
              <div class="contact-info-item">
                <?php echo $ICONS['phone']; ?>
                <div>
                  <strong>Phone</strong><br>
                  <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a>
                </div>
              </div>
              <div class="contact-info-item">
                <?php echo $ICONS['mail']; ?>
                <div>
                  <strong>Email</strong><br>
                  <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
              </div>
              <div class="contact-info-item">
                <?php echo $ICONS['map-pin']; ?>
                <div>
                  <strong>Address</strong><br>
                  <address>
                    <?php echo $address['street']; ?><br>
                    <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?>
                  </address>
                </div>
              </div>
              <div class="contact-info-item">
                <?php echo $ICONS['clock']; ?>
                <div>
                  <strong>Hours</strong><br>
                  <?php echo $businessHours; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="contact-card" style="margin-top: var(--space-lg);">
            <h2>Service Areas</h2>
            <p>We proudly serve homeowners and businesses across Collier County, including:</p>
            <ul style="margin-top: var(--space-sm); padding-left: var(--space-md);">
              <?php foreach ($serviceAreas as $area): ?>
              <li><?php echo $area['city']; ?>, <?php echo $area['state']; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
