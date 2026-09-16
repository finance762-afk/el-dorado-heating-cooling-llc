</main>

<!-- Site Footer -->
<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: About -->
                <div class="footer-col footer-about">
                    <img src="/assets/images/logo-mark.png" alt="<?php echo $siteName; ?>" class="footer-logo" width="180" height="81">
                    <p class="footer-tagline"><?php echo $tagline; ?></p>
                    <p class="footer-desc"><?php echo $siteName; ?> is a family-owned HVAC company serving <?php echo $address['city']; ?> and surrounding areas with expert air conditioning and heating services.</p>
                    <div class="footer-badges">
                        <span class="trust-badge">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                            Licensed & Insured
                        </span>
                        <span class="trust-badge">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <?php echo $yearsInBusiness; ?>+ Years Experience
                        </span>
                        <span class="trust-badge">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                            24/7 Emergency Service
                        </span>
                    </div>
                </div>

                <!-- Column 2: Services -->
                <div class="footer-col footer-links">
                    <h4 class="footer-title">Our Services</h4>
                    <ul class="footer-menu">
                        <?php
                        $footerServices = array_slice($servicePages, 0, 6);
                        foreach ($footerServices as $footSvc):
                        ?>
                        <li><a href="/services/<?php echo $footSvc['slug']; ?>/"><?php echo $footSvc['name']; ?></a></li>
                        <?php endforeach; ?>
                        <?php if (count($servicePages) > 6): ?>
                        <li><a href="/services/" class="view-all">View All Services</a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Column 3: Service Areas / Company -->
                <div class="footer-col footer-links">
                    <?php if ($tier === 'premium' && !empty($serviceAreas) && count($serviceAreas) > 1): ?>
                    <h4 class="footer-title">Service Areas</h4>
                    <ul class="footer-menu">
                        <?php foreach ($serviceAreas as $footArea):
                            $areaSlug = getAreaSlug($footArea['city']);
                            $areaPath = '/areas/' . $areaSlug . '/';
                            $areaExists = is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath);
                        ?>
                        <li>
                            <?php if ($areaExists): ?>
                            <a href="<?php echo $areaPath; ?>"><?php echo $footArea['city']; ?>, <?php echo $footArea['state']; ?></a>
                            <?php else: ?>
                            <a href="/service-areas/#<?php echo $areaSlug; ?>"><?php echo $footArea['city']; ?>, <?php echo $footArea['state']; ?></a>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                        <li><a href="/service-areas/" class="view-all">View All Areas</a></li>
                    </ul>
                    <?php else: ?>
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-menu">
                        <li><a href="/about/">About Us</a></li>
                        <?php if ($tier === 'premium'): ?>
                        <li><a href="/blog/">Blog</a></li>
                        <li><a href="/faq/">FAQ</a></li>
                        <?php endif; ?>
                        <li><a href="/contact/">Contact Us</a></li>
                        <li><a href="/services/">All Services</a></li>
                    </ul>
                    <?php endif; ?>
                </div>

                <!-- Column 4: Contact Info -->
                <div class="footer-col footer-contact">
                    <h4 class="footer-title">Contact Us</h4>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                            <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a>
                        </li>
                        <li class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m2 7 8.97 5.7a1.94 1.94 0 0 0 2.06 0L22 7"/></svg>
                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </li>
                        <li class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            <address>
                                <?php if ($addressPublic): ?>
                                <?php echo $address['street']; ?><br>
                                <?php endif; ?>
                                <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?>
                            </address>
                        </li>
                        <li class="footer-contact-item">
                            <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <span><?php echo $businessHours; ?></span>
                        </li>
                    </ul>
                    <a href="#estimate" class="btn-primary btn-footer" data-open-estimate>Get Free Estimate</a>
                </div>
            </div>
        </div>
    </div>

    <!-- AEO Entity Block -->
    <div class="footer-entity">
        <div class="container">
            <div class="entity-content" itemscope itemtype="https://schema.org/HVACBusiness">
                <meta itemprop="name" content="<?php echo $siteName; ?>">
                <meta itemprop="url" content="<?php echo $siteUrl; ?>">
                <meta itemprop="telephone" content="<?php echo $phoneTel; ?>">
                <p><?php echo $siteName; ?> is a licensed Florida HVAC contractor based in <?php echo $address['city']; ?>, serving <?php echo implode(', ', array_map(function($area) { return $area['city']; }, $serviceAreas)); ?> with expert air conditioning repair, installation, and maintenance services. With over 60 years of combined experience, we provide 24/7 emergency HVAC service to keep your home comfortable year-round.</p>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Footer Legal Row (MANDATORY) -->
            <div class="footer-legal-row">
                <a href="/privacy-policy/">Privacy Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="/terms/">Terms of Service</a>
                <span class="footer-legal-divider">|</span>
                <a href="/cookie-policy/">Cookie Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="/accessibility/">Accessibility</a>
                <span class="footer-legal-divider">|</span>
                <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
                <span class="footer-legal-divider">|</span>
                <a href="/sitemap.xml">Sitemap</a>
            </div>

            <div class="footer-bottom-inner">
                <p class="footer-copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo $siteName; ?>. All rights reserved.
                </p>
                <p class="footer-credit">
                    <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" aria-label="Back to top" style="display: none;">
        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
    </button>
</footer>

<!-- Cookie Consent Bar (slim, appears after first scroll, remembered via localStorage) -->
<div class="cookie-bar" id="cookie-bar" role="region" aria-label="Cookie notice">
    <p>We use cookies to improve your experience and analyze site traffic. See our <a href="/cookie-policy/">Cookie Policy</a>.</p>
    <button type="button">Got it</button>
</div>

<!-- Estimate Dialog (shared — opened by any [data-open-estimate] button sitewide) -->
<dialog class="estimate-dialog" id="estimate-dialog" aria-labelledby="estimate-dialog-title">
    <div class="dialog-head">
        <div>
            <h3 id="estimate-dialog-title">Get a free estimate</h3>
            <p class="footnote">We reply the same day — usually within the hour.</p>
        </div>
        <button type="button" class="dialog-close" aria-label="Close" data-close-estimate>
            <svg aria-hidden="true" width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>
    <div class="dialog-body">
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="estimate-form">
            <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
            <?php echo p1_attribution_fields('dialog'); ?>
            <input type="hidden" name="consent_version" value="v2.1">
            <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
            <div class="form-grid">
                <div class="field">
                    <label for="dlg-name">Your Name</label>
                    <input id="dlg-name" type="text" name="name" autocomplete="name" required>
                </div>
                <div class="field">
                    <label for="dlg-phone">Phone</label>
                    <input id="dlg-phone" type="tel" name="phone" autocomplete="tel" required>
                </div>
                <div class="field full">
                    <label for="dlg-email">Email</label>
                    <input id="dlg-email" type="email" name="email" autocomplete="email" required>
                </div>
                <div class="field full">
                    <label for="dlg-service">Service Needed</label>
                    <select id="dlg-service" name="service">
                        <option value="">Select a service</option>
                        <?php foreach ($servicePages as $dlgSvc): ?>
                        <option value="<?php echo htmlspecialchars($dlgSvc['name']); ?>"><?php echo htmlspecialchars($dlgSvc['name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="field full">
                    <label for="dlg-message">How can we help?</label>
                    <textarea id="dlg-message" name="message" rows="3"></textarea>
                </div>
            </div>
            <fieldset class="form-consent-fieldset">
                <legend class="form-consent-legend">Communication Consent</legend>
                <label class="form-consent-item">
                    <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                    <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry and services. I can unsubscribe anytime via the link in any email or by emailing <?php echo htmlspecialchars($email); ?>.</span>
                </label>
                <label class="form-consent-item">
                    <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                    <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from <?php echo htmlspecialchars($siteName); ?> at the number provided (appointment reminders, service updates). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                </label>
                <label class="form-consent-item form-consent-required">
                    <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                    <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
                </label>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-block">Request My Free Estimate</button>
        </form>
    </div>
</dialog>

<!-- Mobile Sticky CTA Bar -->
<div class="mobile-cta-bar">
    <a href="tel:<?php echo $phoneTel; ?>" class="mobile-cta-btn">
        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        <span>Call Now</span>
    </a>
    <a href="#estimate" class="mobile-cta-btn mobile-cta-btn--primary" data-open-estimate>
        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
        <span>Free Estimate</span>
    </a>
</div>

<!-- Scripts -->
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

<!-- Back to Top Functionality -->
<script defer>
document.addEventListener('DOMContentLoaded', function() {
    const backToTop = document.querySelector('.back-to-top');
    if (!backToTop) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > 400) {
            backToTop.style.display = 'flex';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>

</body>
</html>
