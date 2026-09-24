<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'error';
$pageType       = 'other';
$pageTitle      = '404 - Page Not Found | El Dorado Heating & Cooling';
$metaDescription = 'The page you requested could not be found. Return to our homepage or contact El Dorado Heating & Cooling for HVAC services in Naples, FL.';
$pageDescription = $metaDescription;
$canonicalUrl   = $siteUrl . '/404';
$noindex        = true;  // Do not index 404 pages

http_response_code(404);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.error-hero {
  min-height: 60vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: var(--color-bg-alt);
}
.error-content { max-width: 600px; margin: 0 auto; padding: var(--space-2xl) var(--space-lg); }
.error-code {
  font-size: 6rem;
  font-weight: 700;
  color: var(--color-secondary);
  line-height: 1;
  font-family: var(--font-heading);
  margin-bottom: var(--space-sm);
}
.error-content h1 { margin-bottom: var(--space-md); }
.error-content p { margin-bottom: var(--space-xl); color: var(--color-text-light); }
.error-links { display: flex; flex-direction: column; gap: var(--space-md); align-items: center; }
@media (min-width: 600px) {
  .error-links { flex-direction: row; justify-content: center; }
}
.popular-links {
  margin-top: var(--space-2xl);
  padding-top: var(--space-2xl);
  border-top: 1px solid var(--color-border);
}
.popular-links h2 {
  font-size: 1.25rem;
  margin-bottom: var(--space-md);
  color: var(--color-primary);
}
.popular-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  gap: var(--space-sm);
}
.popular-links li a {
  color: var(--color-primary);
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: color var(--transition);
}
.popular-links li a:hover { color: var(--color-secondary); }
.popular-links li a::before {
  content: '→';
  color: var(--color-secondary);
  font-weight: 700;
}
</style>

<main id="main-content">

  <section class="error-hero">
    <div class="error-content">
      <div class="error-code">404</div>
      <h1>Page Not Found</h1>
      <p>The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
      <div class="error-links">
        <a href="/" class="btn btn-primary btn-lg">Go to Homepage</a>
        <a href="/contact/" class="btn btn-secondary btn-lg">Contact Us</a>
      </div>

      <div class="popular-links">
        <h2>Popular Pages</h2>
        <ul>
          <li><a href="/services/">All HVAC Services</a></li>
          <li><a href="/services/hvac-services/">AC Repair &amp; Installation</a></li>
          <li><a href="/services/ac-maintenance/">AC Maintenance Plans</a></li>
          <li><a href="/about/">About El Dorado Heating &amp; Cooling</a></li>
          <li><a href="/faq/">FAQ</a></li>
          <li><a href="/contact/">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
