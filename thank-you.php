<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ───────────────────────────────────────────────────────
$currentPage    = 'thank-you';
$pageType       = 'other';
$pageTitle      = 'Thank You | El Dorado Heating & Cooling';
$metaDescription = 'Thank you for contacting El Dorado Heating & Cooling. We\'ll respond to your inquiry shortly.';
$canonicalUrl   = $siteUrl . '/thank-you';
$noindex        = true;  // Do not index thank-you pages

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.thank-you-hero {
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  color: #fff;
  position: relative;
  overflow: hidden;
}
.thank-you-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  opacity: 0.4;
}
.thank-you-content {
  max-width: 650px;
  margin: 0 auto;
  padding: var(--space-2xl) var(--space-lg);
  position: relative;
  z-index: 1;
}
.thank-you-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto var(--space-lg);
  background: rgba(255,255,255,0.15);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  animation: checkPop 0.5s ease-out;
}
@keyframes checkPop {
  0% { transform: scale(0); opacity: 0; }
  50% { transform: scale(1.1); }
  100% { transform: scale(1); opacity: 1; }
}
.thank-you-icon svg {
  width: 48px;
  height: 48px;
  color: var(--color-accent);
}
.thank-you-content h1 {
  font-size: 2.5rem;
  margin-bottom: var(--space-md);
  color: #fff;
}
.thank-you-content p {
  font-size: 1.15rem;
  margin-bottom: var(--space-lg);
  color: rgba(255,255,255,0.9);
  line-height: 1.6;
}
.next-steps {
  background: rgba(255,255,255,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  margin: var(--space-xl) 0;
  backdrop-filter: blur(10px);
}
.next-steps h2 {
  font-size: 1.25rem;
  margin-bottom: var(--space-md);
  color: #fff;
}
.next-steps ol {
  text-align: left;
  margin: 0;
  padding-left: var(--space-lg);
}
.next-steps li {
  margin-bottom: var(--space-sm);
  color: rgba(255,255,255,0.9);
  line-height: 1.6;
}
.thank-you-actions {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  align-items: center;
  margin-top: var(--space-xl);
}
@media (min-width: 600px) {
  .thank-you-actions { flex-direction: row; justify-content: center; }
}
</style>

<main id="main-content">

  <section class="thank-you-hero">
    <div class="thank-you-content">
      <div class="thank-you-icon">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 6 9 17l-5-5"/>
        </svg>
      </div>
      <h1>Thank You!</h1>
      <p>We've received your message and will respond shortly — usually within the hour during business hours.</p>

      <div class="next-steps">
        <h2>What Happens Next</h2>
        <ol>
          <li><strong>We'll call or email you</strong> — A real person from our Naples office will reach out to discuss your HVAC needs.</li>
          <li><strong>Free, honest estimate</strong> — We'll assess the job and provide upfront pricing with no pressure and no surprises.</li>
          <li><strong>Comfort restored</strong> — We schedule the work at your convenience and get your home cool and comfortable again.</li>
        </ol>
      </div>

      <p><strong>Need immediate assistance?</strong><br>Call us at <a href="tel:<?php echo $phoneTel; ?>" style="color: var(--color-accent); text-decoration: underline;"><?php echo $phone; ?></a> for 24/7 emergency service.</p>

      <div class="thank-you-actions">
        <a href="/" class="btn btn-accent btn-lg">Return to Homepage</a>
        <a href="/services/" class="btn btn-outline-white btn-lg">View Our Services</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
