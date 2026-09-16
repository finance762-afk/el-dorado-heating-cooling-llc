<!-- Skip to content (accessibility) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Site Header -->
<header class="site-header" data-header>
    <nav class="navbar" aria-label="Main navigation">
        <div class="navbar-inner container">
            <!-- Logo -->
            <a href="/" class="site-logo" aria-label="<?php echo $siteName; ?> Home">
                <img src="/assets/images/logo-mark.png" alt="<?php echo $siteName; ?>" width="286" height="128" class="logo-full">
            </a>

            <!-- Desktop Navigation -->
            <ul class="navbar-links" role="menubar">
                <li role="none">
                    <a href="/" role="menuitem" <?php if (isActivePage('home')): ?>aria-current="page"<?php endif; ?>>Home</a>
                </li>
                <li class="has-dropdown" role="none">
                    <button class="dropdown-toggle" role="menuitem" aria-expanded="false" aria-haspopup="true">
                        Services
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <ul class="dropdown" role="menu" style="display:none">
                        <?php foreach ($servicePages as $navSvc): ?>
                        <li role="none">
                            <a href="/services/<?php echo $navSvc['slug']; ?>/" role="menuitem"><?php echo $navSvc['name']; ?></a>
                        </li>
                        <?php endforeach; ?>
                        <li role="none" class="dropdown-cta">
                            <a href="/services/" role="menuitem" class="view-all">View All Services</a>
                        </li>
                    </ul>
                </li>
                <?php if ($tier === 'premium' && !empty($serviceAreas) && count($serviceAreas) > 1): ?>
                <li class="has-dropdown" role="none">
                    <button class="dropdown-toggle" role="menuitem" aria-expanded="false" aria-haspopup="true">
                        Service Areas
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <ul class="dropdown" role="menu" style="display:none">
                        <?php foreach ($serviceAreas as $navArea):
                            $areaSlug = getAreaSlug($navArea['city']);
                            $areaPath = '/areas/' . $areaSlug . '/';
                            $areaExists = is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath);
                        ?>
                        <li role="none">
                            <?php if ($areaExists): ?>
                            <a href="<?php echo $areaPath; ?>" role="menuitem"><?php echo $navArea['city']; ?>, <?php echo $navArea['state']; ?></a>
                            <?php else: ?>
                            <a href="/service-areas/#<?php echo $areaSlug; ?>" role="menuitem"><?php echo $navArea['city']; ?>, <?php echo $navArea['state']; ?></a>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                        <li role="none" class="dropdown-cta">
                            <a href="/service-areas/" role="menuitem" class="view-all">View All Areas</a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <li role="none">
                    <a href="/about/" role="menuitem" <?php if (isActivePage('about')): ?>aria-current="page"<?php endif; ?>>About</a>
                </li>
                <?php if ($tier === 'premium'): ?>
                <li role="none">
                    <a href="/blog/" role="menuitem" <?php if (isActivePage('blog')): ?>aria-current="page"<?php endif; ?>>Blog</a>
                </li>
                <?php endif; ?>
                <li role="none">
                    <a href="/contact/" role="menuitem" <?php if (isActivePage('contact')): ?>aria-current="page"<?php endif; ?>>Contact</a>
                </li>
            </ul>

            <!-- Desktop CTA -->
            <div class="navbar-cta">
                <a href="tel:<?php echo $phoneTel; ?>" class="cta-phone">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                    <?php echo $phone; ?>
                </a>
                <a href="#estimate" class="btn-primary" data-open-estimate>Free Estimate</a>
            </div>

            <!-- Mobile Hamburger -->
            <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </nav>
</header>

<!-- Mobile Menu (OUTSIDE header element to avoid backdrop-filter containment) -->
<div class="mobile-menu" aria-hidden="true">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu-links">
            <li><a href="/" <?php if (isActivePage('home')): ?>aria-current="page"<?php endif; ?>>Home</a></li>
            <li class="mobile-menu-section">
                <span class="mobile-menu-label">Services</span>
                <ul class="mobile-submenu">
                    <?php foreach ($servicePages as $navSvc): ?>
                    <li><a href="/services/<?php echo $navSvc['slug']; ?>/"><?php echo $navSvc['name']; ?></a></li>
                    <?php endforeach; ?>
                    <li><a href="/services/" class="view-all-mobile">View All Services</a></li>
                </ul>
            </li>
            <?php if ($tier === 'premium' && !empty($serviceAreas) && count($serviceAreas) > 1): ?>
            <li class="mobile-menu-section">
                <span class="mobile-menu-label">Service Areas</span>
                <ul class="mobile-submenu">
                    <?php foreach ($serviceAreas as $navArea):
                        $areaSlug = getAreaSlug($navArea['city']);
                        $areaPath = '/areas/' . $areaSlug . '/';
                        $areaExists = is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath);
                    ?>
                    <li>
                        <?php if ($areaExists): ?>
                        <a href="<?php echo $areaPath; ?>"><?php echo $navArea['city']; ?>, <?php echo $navArea['state']; ?></a>
                        <?php else: ?>
                        <a href="/service-areas/#<?php echo $areaSlug; ?>"><?php echo $navArea['city']; ?>, <?php echo $navArea['state']; ?></a>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                    <li><a href="/service-areas/" class="view-all-mobile">View All Areas</a></li>
                </ul>
            </li>
            <?php endif; ?>
            <li><a href="/about/" <?php if (isActivePage('about')): ?>aria-current="page"<?php endif; ?>>About</a></li>
            <?php if ($tier === 'premium'): ?>
            <li><a href="/blog/" <?php if (isActivePage('blog')): ?>aria-current="page"<?php endif; ?>>Blog</a></li>
            <?php endif; ?>
            <li><a href="/contact/" <?php if (isActivePage('contact')): ?>aria-current="page"<?php endif; ?>>Contact</a></li>
        </ul>
        <div class="mobile-menu-cta">
            <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary btn-block">
                <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                Call <?php echo $phone; ?>
            </a>
            <a href="#estimate" class="btn-primary btn-block" data-open-estimate>Get Free Estimate</a>
        </div>
    </div>
</div>

<main id="main-content">
