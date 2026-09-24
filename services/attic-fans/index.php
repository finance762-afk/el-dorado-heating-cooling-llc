<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'attic-fans';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Attic Fan Installation Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Attic fan installation and repair in Naples, FL from El Dorado Heating & Cooling. Vent 130-degree attic heat and lower cooling bills. Call (239) 404-6797.';
$pageDescription = $metaDescription;
$canonicalUrl    = $siteUrl . '/services/attic-fans/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How hot does a Naples attic really get in summer?',
        'a' => 'El Dorado Heating & Cooling regularly measures Naples attics topping 130°F on summer afternoons, even when it is in the low 90s outside. That trapped heat radiates down into your living space and bakes your ductwork, forcing the AC to fight a furnace overhead. Attic ventilation is what lets that heat escape.',
    ],
    [
        'q' => 'Will an attic fan actually lower my cooling bill?',
        'a' => 'It can. El Dorado Heating & Cooling installs attic fans to pull superheated air out of the attic so less of it soaks into your ceilings and ducts. That lightens the load on your AC through Southwest Florida&rsquo;s long cooling season. Savings vary by home, but a hot, poorly vented attic is one of the biggest hidden drains on efficiency.',
    ],
    [
        'q' => 'Should I get a powered or a solar attic fan?',
        'a' => 'El Dorado Heating & Cooling installs both and recommends based on your roof and goals. Powered electric fans move the most air and run on a thermostat regardless of cloud cover. Solar attic fans run on their own panel with no added electric cost. We assess your Naples attic and roof orientation to match you with the right option.',
    ],
    [
        'q' => 'How much does attic fan installation cost in Naples, FL?',
        'a' => 'El Dorado Heating & Cooling installs most attic fans in the $400–$1,200 range, depending on whether you choose a powered or solar unit and the condition of your existing venting. We give you an exact, upfront price after inspecting your Naples attic, and we handle the wiring, mounting, and thermostat in one visit.',
    ],
    [
        'q' => 'Can attic ventilation help protect my roof and attic?',
        'a' => 'Yes. El Dorado Heating & Cooling notes that venting trapped heat and moisture protects more than comfort &mdash; it reduces the heat stress that ages shingles early and the humidity that encourages mold on rafters and insulation. In Naples, where attics run hot and damp, good ventilation is real protection for the whole structure.',
    ],
];

// Icon set (inline SVG from references/lucide-icons — no data-lucide, no CDN).
$svg = [
    'phone'  => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'  => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'  => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'  => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check'  => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'x'      => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'wind'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'sun'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
    'gauge'  => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'home'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
    'zap'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-attic-fans',
    'serviceType' => 'Attic Fan Installation',
    'name'        => 'Attic Fan Installation in Naples, FL',
    'description' => 'Attic fan installation and repair for Naples, FL homes — powered and solar ventilation that clears 130-degree attic heat, eases the load on your AC, and helps lower cooling bills in Southwest Florida.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(fn($a) => ['@type' => 'City', 'name' => $a['city'] . ', ' . $a['state']], $serviceAreas),
    'url'         => $canonicalUrl,
];
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Attic Fans', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Attic Fans page composition (tokens only) ===== */
.atc-hero { padding-top: 0.75rem; }
.atc-hero .hero-chips { margin-top: 0.4rem; }
.atc-breadcrumb-nav { margin-bottom: 1.25rem; font-size: 0.85rem; color: color-mix(in srgb, var(--color-white) 72%, transparent); }

/* Problem statement — big temperature stat beside a 2-up sign grid */
.atc-signs { background: var(--color-paper-2); }
.atc-signs__lead { display: grid; grid-template-columns: 0.85fr 1.15fr; gap: var(--space-2xl); align-items: center; }
.atc-signs__stat { background: color-mix(in srgb, var(--color-accent) 14%, var(--color-surface)); border: 1px solid color-mix(in srgb, var(--color-accent) 30%, var(--color-line)); border-radius: var(--radius-lg); padding: var(--space-xl); text-align: center; box-shadow: var(--shadow-sm); }
.atc-signs__stat b { display: block; font-family: var(--font-accent); font-size: var(--fs-display, var(--fs-h1)); line-height: 1; color: var(--color-primary); }
.atc-signs__stat span { display: block; margin-top: var(--space-xs); font-size: var(--fs-sm); color: var(--color-ink-2); }
.atc-signs__cards { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); margin-top: var(--space-2xl); }
.atc-sign { display: grid; grid-template-columns: 44px 1fr; gap: var(--space-sm); background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-lg); box-shadow: var(--shadow-sm); }
.atc-sign__icon { width: 44px; height: 44px; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-accent-dark); background: color-mix(in srgb, var(--color-accent) 18%, transparent); }
.atc-sign h3 { font-size: var(--fs-h5); margin-bottom: var(--space-3xs); }
.atc-sign p { margin: 0; font-size: var(--fs-sm); color: var(--color-ink-2); }
@media (max-width: 860px) { .atc-signs__lead, .atc-signs__cards { grid-template-columns: 1fr; } }

/* Expert positioning — split, photo right, bordered stat */
.atc-expert .split { align-items: center; }
.atc-expert__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); margin: 0; }
.atc-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.atc-expert__stat { display: inline-grid; gap: var(--space-3xs); padding: var(--space-sm) var(--space-md); border-left: 3px solid var(--color-accent); background: var(--color-paper-2); border-radius: 0 var(--radius) var(--radius) 0; margin: var(--space-sm) 0 var(--space-md); }
.atc-expert__stat b { font-family: var(--font-accent); font-size: var(--fs-h4); line-height: 1; color: var(--color-primary); }
.atc-expert__stat span { font-size: var(--fs-sm); color: var(--color-muted); }
.atc-diffs { display: grid; gap: var(--space-md); margin-top: var(--space-md); }
.atc-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: var(--space-sm); align-items: start; }
.atc-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.atc-diffs b { display: block; }
.atc-diffs p { margin: var(--space-3xs) 0 0; font-size: var(--fs-sm); color: var(--color-ink-2); }

/* Service breakdown — powered vs solar option cards + process */
.atc-options { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); margin-top: var(--space-lg); }
.atc-opt { border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-xl); background: var(--color-surface); }
.atc-opt--solar { background: color-mix(in srgb, var(--color-accent) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-accent) 26%, var(--color-line)); }
.atc-opt__head { display: flex; align-items: center; gap: var(--space-sm); margin-bottom: var(--space-sm); }
.atc-opt__head svg { color: var(--color-primary); }
.atc-opt__head h3 { font-size: var(--fs-h5); color: var(--color-primary); }
.atc-opt p { margin: 0 0 var(--space-md); font-size: var(--fs-sm); color: var(--color-ink-2); }
.atc-opt ul { display: grid; gap: var(--space-xs); }
.atc-opt li { display: grid; grid-template-columns: 20px 1fr; gap: var(--space-xs); align-items: start; font-size: var(--fs-sm); }
.atc-opt li svg { color: var(--color-accent-dark); margin-top: 1px; }
@media (max-width: 720px) { .atc-options { grid-template-columns: 1fr; } }

/* Comparison */
.atc-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); margin-top: var(--space-2xl); }
.atc-col { border-radius: var(--radius-lg); padding: var(--space-xl); border: 1px solid var(--color-line); }
.atc-col--them { background: var(--color-surface); }
.atc-col--us { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.atc-col h3 { font-size: var(--fs-h5); margin-bottom: var(--space-md); }
.atc-col ul { display: grid; gap: var(--space-sm); }
.atc-col li { display: grid; grid-template-columns: 22px 1fr; gap: var(--space-xs); align-items: start; font-size: var(--fs-sm); color: var(--color-ink-2); }
.atc-col--them svg { color: var(--color-muted); }
.atc-col--us svg { color: var(--color-primary); }
.atc-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .atc-compare__grid { grid-template-columns: 1fr; } }

.atc-cta .actions .link-call { color: var(--color-white); }
.atc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= HERO ============================= -->
<section class="hero hero--interior atc-hero" aria-label="Attic fan installation in Naples, FL">
    <div class="container">
        <nav class="breadcrumb atc-breadcrumb-nav" aria-label="Breadcrumb">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Attic Fans</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Attic Ventilation &middot; Naples, FL</span>
                <h1 class="hero-title">Attic Fan <span class="text-accent">Installation</span> in Naples, FL</h1>
                <p class="hero-answer">A Naples attic can hit 130&deg;F and bake your ceilings, ducts, and AC all afternoon. El Dorado Heating &amp; Cooling installs powered and solar attic fans that vent that trapped heat, lighten the load on your cooling system, and help lower your summer bills.</p>
                <div class="hero-actions">
                    <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
                    <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> or call <?php echo $phone; ?></a>
                </div>
                <ul class="hero-chips">
                    <li><?php echo $svg['badge']; ?> Licensed &amp; Insured</li>
                    <li><?php echo $svg['users']; ?> Family-Owned Since <?php echo $yearEstablished; ?></li>
                    <li><?php echo $svg['clock']; ?> 24/7 Emergency Service</li>
                </ul>
            </div>

            <aside class="hero-form-card" id="estimate-form">
                <h2>Get a free estimate</h2>
                <p class="hero-form-tagline">No obligation. Same-day reply.</p>
                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <?php echo p1_attribution_fields('hero'); ?>
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-email">Email</label><input id="hero-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
                    <div class="form-row"><label class="sr-only" for="hero-service">Service needed</label><select id="hero-service" name="service"><option value="">What do you need?</option><?php foreach ($servicePages as $heroSvc): ?><option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"<?php echo $heroSvc['slug'] === $serviceSlug ? ' selected' : ''; ?>><?php echo htmlspecialchars($heroSvc['name']); ?></option><?php endforeach; ?></select></div>
                    <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
                    <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
                </form>
            </aside>
        </div>
    </div>
</section>

<!-- ============================= PROBLEM STATEMENT ============================= -->
<section class="section atc-signs" aria-label="Why attic heat hurts your Naples home">
    <div class="container">
        <div class="atc-signs__lead">
            <div class="atc-signs__stat reveal-left">
                <b>130&deg;F+</b>
                <span>what a Naples attic can reach on a summer afternoon</span>
            </div>
            <div class="reveal-right">
                <span class="eyebrow-label">The Furnace Overhead</span>
                <h2>Why does a superheated attic drive up cooling costs in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling finds it in home after home: an unvented Naples attic traps radiant heat that soaks into your ceilings and ductwork, so your AC fights a furnace overhead all day. Clearing that heat with proper attic ventilation is one of the simplest ways to ease the cooling load.</p>
                <p>Left unvented, that heat doesn&rsquo;t just raise your bill &mdash; it ages shingles early and lets humidity build on rafters and insulation.</p>
            </div>
        </div>
        <div class="atc-signs__cards">
            <div class="atc-sign reveal-up">
                <div class="atc-sign__icon"><?php echo $svg['gauge']; ?></div>
                <div><h3>Rising cooling bills</h3><p>An AC fighting attic heat runs longer and costs more through Southwest Florida&rsquo;s long summer.</p></div>
            </div>
            <div class="atc-sign reveal-up reveal-delay-1">
                <div class="atc-sign__icon"><?php echo $svg['home']; ?></div>
                <div><h3>Hot upstairs rooms</h3><p>Second-floor and top-floor rooms that never cool off point straight to a baking attic above.</p></div>
            </div>
            <div class="atc-sign reveal-up reveal-delay-2">
                <div class="atc-sign__icon"><?php echo $svg['sun']; ?></div>
                <div><h3>Early shingle wear</h3><p>Trapped heat cooks your roof from beneath, shortening the life of shingles and decking.</p></div>
            </div>
            <div class="atc-sign reveal-up reveal-delay-3">
                <div class="atc-sign__icon"><?php echo $svg['wind']; ?></div>
                <div><h3>Musty, humid attic</h3><p>Poor airflow lets moisture linger, encouraging mold on rafters and damp, matted insulation.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section atc-expert" aria-label="Why choose El Dorado for attic fans">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>Why is El Dorado the right choice for attic ventilation?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed Florida HVAC contractor based in Naples, serving Bonita Springs, Marco Island, and Collier County. We treat attic fans as part of your whole cooling system, sizing airflow to your attic and balancing intake and exhaust &mdash; backed by more than 60 years of combined experience.</p>
                <div class="atc-expert__stat">
                    <b>60+ yrs</b>
                    <span>combined HVAC experience across Southwest Florida</span>
                </div>
                <ul class="atc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Whole-system thinking</b><p>We look at ventilation, ductwork, and your AC together, not a fan in isolation.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Balanced airflow</b><p>We confirm intake vents match exhaust so the fan pulls fresh air, not conditioned air from your home.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Clean, safe install</b><p>Proper mounting, flashing, and wiring so the unit performs and your roof stays weathertight.</p></div></li>
                </ul>
            </div>
            <figure class="atc-expert__figure reveal-right">
                <picture>
                    <source type="image/avif" srcset="/assets/images/fleet-trucks-480.avif 480w, /assets/images/fleet-trucks-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/fleet-trucks.jpg" srcset="/assets/images/fleet-trucks-480.webp 480w, /assets/images/fleet-trucks-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service trucks ready for an attic ventilation job in Naples, FL" width="960" height="720" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light atc-included" aria-label="Powered and solar attic fan options">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Your Options</span>
            <h2>Powered or solar &mdash; which attic fan is right for your home?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling installs both powered electric and solar attic fans, and the right pick depends on your roof and priorities. Powered fans move the most air on a thermostat; solar fans run free off their own panel. We help you choose after inspecting your Naples attic.</p>
        </div>
        <div class="atc-options reveal-up">
            <div class="atc-opt">
                <div class="atc-opt__head"><?php echo $svg['zap']; ?><h3>Powered electric fans</h3></div>
                <p>Thermostat-controlled and high-capacity, these move the largest volume of air regardless of cloud cover.</p>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Highest airflow for big attics</span></li>
                    <li><?php echo $svg['check']; ?><span>Runs on a temperature setpoint</span></li>
                    <li><?php echo $svg['check']; ?><span>Works on cloudy and rainy days</span></li>
                </ul>
            </div>
            <div class="atc-opt atc-opt--solar">
                <div class="atc-opt__head"><?php echo $svg['sun']; ?><h3>Solar attic fans</h3></div>
                <p>Powered by their own roof-mounted panel, solar fans ventilate with no added draw on your electric bill.</p>
                <ul>
                    <li><?php echo $svg['check']; ?><span>No added electricity cost</span></li>
                    <li><?php echo $svg['check']; ?><span>Runs hardest when the sun is strongest</span></li>
                    <li><?php echo $svg['check']; ?><span>Simple, low-maintenance operation</span></li>
                </ul>
            </div>
        </div>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado install an attic fan?</h2>
            <ol class="process-steps">
                <li><b>Attic Inspection</b><span>We check your attic temperature, existing vents, and roof to size the right fan for your Naples home.</span></li>
                <li><b>Powered or Solar</b><span>You get a clear recommendation with upfront pricing &mdash; airflow, placement, and running cost explained.</span></li>
                <li><b>Clean Install</b><span>We mount, flash, and wire the unit and confirm intake venting balances the new exhaust.</span></li>
                <li><b>Airflow Confirmed</b><span>We verify the fan is pulling heat out and leave your attic access and work area clean.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS ============================= -->
<section class="section on-dark texture-grain slant-top atc-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="atc-expert__figure reveal-left">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck arriving at a Naples, FL home" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners trust El Dorado with their attic?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida HVAC contractor based in Naples, serving Collier County in English and Spanish since <?php echo $yearEstablished; ?>. Homeowners trust us because we tie attic ventilation into the bigger cooling picture &mdash; and the same local team answers 24/7 when you need us.</p>
                <ul class="atc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Family-owned since <?php echo $yearEstablished; ?></b><p>A dependable local crew, not a rotating cast of subcontractors.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>English &amp; Spanish</b><p>We explain your ventilation options clearly in the language you prefer.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>24/7 emergency service</b><p>If something goes wrong after hours, our line is answered day or night.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section atc-compare" aria-label="Passive vents compared to a powered attic fan">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>Aren&rsquo;t my roof vents already handling the attic heat?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling installs active attic fans because passive vents alone rarely move enough air in Naples heat. Static vents rely on a light breeze; a properly sized fan actively pulls the hottest air out, which is what protects your bills, your ducts, and your roof.</p>
        </div>
        <div class="atc-compare__grid">
            <div class="atc-col atc-col--them reveal-left">
                <h3>Passive vents alone</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Depends on wind that often isn&rsquo;t there</span></li>
                    <li><?php echo $svg['x']; ?><span>Barely moves air on still, hot days</span></li>
                    <li><?php echo $svg['x']; ?><span>Attic stays superheated all afternoon</span></li>
                    <li><?php echo $svg['x']; ?><span>Heat keeps soaking into ducts and ceilings</span></li>
                    <li><?php echo $svg['x']; ?><span>Moisture lingers and ages the roof deck</span></li>
                </ul>
            </div>
            <div class="atc-col atc-col--us reveal-right">
                <h3>El Dorado attic fan</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Actively exhausts the hottest attic air</span></li>
                    <li><?php echo $svg['check']; ?><span>Runs when your attic needs it most</span></li>
                    <li><?php echo $svg['check']; ?><span>Lowers the heat load on your AC</span></li>
                    <li><?php echo $svg['check']; ?><span>Balanced intake and exhaust airflow</span></li>
                    <li><?php echo $svg['check']; ?><span>Powered or solar, installed by one local team</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light atc-faq" aria-label="Attic fan FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about attic fans?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on attic heat, cost, and choosing between powered and solar ventilation.</p>
        </div>
        <div class="faq-grid reveal-up">
            <?php foreach ($faqs as $idx => $faq): ?>
            <details class="faq"<?php echo $idx < 2 ? ' open' : ''; ?>>
                <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
                <p><?php echo htmlspecialchars($faq['a']); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php renderRelatedServices($serviceSlug); ?>

<!-- ============================= FINAL CTA ============================= -->
<section class="cta-banner on-dark texture-grain edge-wave-top atc-cta" aria-label="Schedule an attic fan install">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Vent The Heat, Cut The Bill</span>
            <h2>Ready to get the 130-degree heat out of your Naples attic?</h2>
            <p>Stop letting a baking attic drive up your cooling costs and wear out your AC. Ask El Dorado Heating &amp; Cooling about a powered or solar attic fan sized for your home &mdash; call now or request your free estimate.</p>
        </div>
        <div class="actions reveal-up reveal-delay-1">
            <button type="button" class="btn btn-primary btn-lg" data-open-estimate>Get my free estimate</button>
            <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo $svg['phone']; ?> <?php echo $phone; ?></a>
        </div>
    </div>
</section>

<p style="text-align:center;font-size:.82rem;color:var(--color-muted);padding:1.5rem 1rem 0;">Last Updated: <?php echo date('F Y'); ?></p>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateFAQSchema($faqs); ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
