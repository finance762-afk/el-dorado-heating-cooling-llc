<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$serviceSlug     = 'radiant-barriers';
$pageType        = 'service';
$currentPage     = 'services';
$ogType          = 'website';
$pageTitle       = 'Radiant Barriers Naples FL | El Dorado Heating & Cooling LLC';
$metaDescription = 'Radiant barrier installation in Naples, FL from El Dorado Heating & Cooling. Reflect attic heat before it enters your home and lower cooling bills. Call (239) 404-6797.';
$canonicalUrl    = $siteUrl . '/services/radiant-barriers/';

// Page FAQs → also drives FAQPage schema.
$faqs = [
    [
        'q' => 'How much does radiant barrier installation cost in Naples, FL?',
        'a' => 'A typical radiant barrier installation for a single-family Naples attic usually runs in the $1,200–$2,800 range, depending on attic square footage and roof complexity. El Dorado Heating & Cooling measures your attic and roof structure before quoting, so the number you receive is based on your home, not a national average.',
    ],
    [
        'q' => "Does a radiant barrier actually work in Florida's humidity?",
        'a' => "Yes — a properly installed radiant barrier reflects radiant heat rather than trapping moisture, so Naples' humidity doesn't reduce its performance the way it can with some insulation types. El Dorado Heating & Cooling installs foil-faced barriers with an air gap on the underside of the roof deck, which keeps the material from becoming a condensation surface.",
    ],
    [
        'q' => "What's the difference between a radiant barrier and adding more attic insulation?",
        'a' => 'Insulation slows heat that has already built up from moving through your ceiling, while a radiant barrier reflects up to 97% of radiant heat before it ever reaches the attic floor. El Dorado Heating & Cooling often recommends both together in Naples, since our sun load benefits from blocking heat at the source, not just slowing it down.',
    ],
    [
        'q' => 'How long does a radiant barrier installation take?',
        'a' => "Most Naples homes are done in a single day, typically four to six hours depending on attic size and roof framing. El Dorado Heating & Cooling fastens the foil to the rafters or roof deck, working around existing insulation and ventilation without disturbing your attic's airflow.",
    ],
    [
        'q' => 'Can a radiant barrier be added to an attic that already has insulation?',
        'a' => 'Absolutely. El Dorado Heating & Cooling installs radiant barriers over existing insulation without removing it, attaching the foil to the underside of the roof rafters or deck instead of the attic floor. The two systems work together rather than competing for space.',
    ],
    [
        'q' => 'How much can a radiant barrier lower my cooling bill in Naples?',
        'a' => "Homeowners in Southwest Florida's climate typically see a measurable drop in attic temperature and a modest reduction in cooling costs, especially on west- and south-facing roofs with heavy afternoon sun. El Dorado Heating & Cooling reviews your roof orientation before install so you know what kind of result to expect for your specific home.",
    ],
];

// Icon set (inline SVG from references/lucide-icons — no data-lucide, no CDN).
$svg = [
    'phone'    => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>',
    'badge'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'clock'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'users'    => '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>',
    'check'    => '<svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
    'x'        => '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'alert'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
    'gauge'    => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'droplets' => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'volume'   => '<svg aria-hidden="true" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4.702a.705.705 0 0 0-1.203-.498L6.413 7.587A1.4 1.4 0 0 1 5.416 8H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2.416a1.4 1.4 0 0 1 .997.413l3.383 3.384A.705.705 0 0 0 11 19.298z"/><path d="M16 9a5 5 0 0 1 0 6"/></svg>',
];

// Schema — Service (@id) + BreadcrumbList, plus FAQPage echoed via helper at the end.
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-radiant-barriers',
    'serviceType' => 'Radiant Barriers',
    'name'        => 'Radiant Barriers in Naples, FL',
    'description' => 'Radiant barrier installation for Naples, FL homes — foil-faced barrier systems fastened to roof rafters or decking to reflect attic heat before it enters living space in Southwest Florida\'s intense sun.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Radiant Barriers', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ===== Radiant Barriers page composition (tokens only) ===== */
.svc-breadcrumb { padding: calc(var(--nav-height) + 0.9rem) 0 0; }
.svc-breadcrumb .breadcrumb { font-size: 0.85rem; color: rgba(255,255,255,0.7); }
.svc-hero { padding-top: 0.75rem; }
.svc-hero .hero-chips { margin-top: 0.4rem; }

/* Problem statement — pull-quote + telltale signs */
.svc-signs { background: var(--color-paper-2); }
.svc-signs__lead { display: grid; grid-template-columns: 1.1fr 1fr; gap: clamp(1.5rem, 4vw, 3.5rem); align-items: center; }
.svc-signs__cards { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.sign-card { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.4rem; display: grid; gap: 0.55rem; align-content: start; }
.sign-card__icon { width: 48px; height: 48px; border-radius: var(--radius); display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-secondary) 16%, transparent); }
.sign-card h3 { font-size: 1.05rem; }
.sign-card p { margin: 0; font-size: 0.92rem; color: var(--color-ink-2); }
@media (max-width: 860px) { .svc-signs__lead, .svc-signs__cards { grid-template-columns: 1fr; } }

/* Expert positioning — stat + copy asymmetric with photo */
.svc-expert .split { align-items: stretch; }
.svc-expert__figure { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.svc-expert__figure img { width: 100%; height: 100%; object-fit: cover; }
.svc-expert__stat { display: inline-grid; gap: 0.15rem; padding: 0.9rem 1.1rem; border-left: 3px solid var(--color-accent); background: var(--color-paper-2); border-radius: 0 var(--radius) var(--radius) 0; margin: 0.4rem 0 1.1rem; }
.svc-expert__stat b { font-family: var(--font-accent); font-size: 2rem; line-height: 1; color: var(--color-primary); }
.svc-expert__stat span { font-size: 0.85rem; color: var(--color-muted); }
.svc-diffs { display: grid; gap: 0.9rem; margin-top: 1.25rem; }
.svc-diffs li { display: grid; grid-template-columns: 26px 1fr; gap: 0.7rem; align-items: start; }
.svc-diffs svg { color: var(--color-secondary); margin-top: 2px; }
.svc-diffs b { display: block; }
.svc-diffs p { margin: 0.1rem 0 0; font-size: 0.92rem; color: var(--color-ink-2); }

/* Included checklist */
.svc-included__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.7rem 2rem; margin-top: 1.25rem; }
.svc-included__grid li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.95rem; }
.svc-included__grid svg { color: var(--color-accent-dark); margin-top: 1px; }
@media (max-width: 720px) { .svc-included__grid { grid-template-columns: 1fr; } }

/* Comparison table */
.svc-compare__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: clamp(1.5rem, 3vw, 2.25rem); }
.compare-col { border-radius: var(--radius-lg); padding: 1.6rem; border: 1px solid var(--color-line); }
.compare-col--them { background: var(--color-surface); }
.compare-col--us { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); border-color: color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.compare-col h3 { font-size: 1.15rem; margin-bottom: 1rem; }
.compare-col ul { display: grid; gap: 0.8rem; }
.compare-col li { display: grid; grid-template-columns: 22px 1fr; gap: 0.6rem; align-items: start; font-size: 0.93rem; color: var(--color-ink-2); }
.compare-col--them svg { color: var(--color-muted); }
.compare-col--us svg { color: var(--color-primary); }
.compare-col--us li { color: var(--color-ink); }
@media (max-width: 720px) { .svc-compare__grid { grid-template-columns: 1fr; } }

/* Final CTA */
.svc-cta .actions .link-call { color: #fff; }
.svc-cta .actions .link-call svg { color: var(--color-accent-bright); }
</style>

<!-- ============================= BREADCRUMB (on dark hero) ============================= -->
<section class="hero hero--interior svc-hero" aria-label="Radiant barriers in Naples, FL">
    <div class="container">
        <nav class="breadcrumb svc-breadcrumb-nav" aria-label="Breadcrumb" style="margin-bottom:1.25rem;font-size:.85rem;color:rgba(255,255,255,.72);">
            <a href="/" style="color:inherit;">Home</a> <span class="breadcrumb-sep">/</span>
            <a href="/services/" style="color:inherit;">Services</a> <span class="breadcrumb-sep">/</span>
            <span aria-current="page" style="color:#fff;">Radiant Barriers</span>
        </nav>
        <div class="hero-grid hero-grid--form">
            <div class="hero-copy">
                <span class="eyebrow">Reflective Attic Heat Control &middot; Naples, FL</span>
                <h1 class="hero-title">Radiant Barriers in <span class="text-accent">Naples, FL</span></h1>
                <p class="hero-answer">El Dorado Heating &amp; Cooling installs radiant barrier systems that reflect attic heat before it enters your living space &mdash; engineered for Southwest Florida&rsquo;s intense sun, long cooling season, and the roof orientations that take the hardest afternoon exposure.</p>
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
<section class="section svc-signs" aria-label="Signs your attic needs a radiant barrier">
    <div class="container">
        <div class="svc-signs__lead">
            <div class="reveal-left">
                <span class="eyebrow-label">Why It Matters Here</span>
                <p class="pull-quote">A Naples roof absorbs sun for most of the day &mdash; a radiant barrier stops that heat before it ever radiates down into your ceiling.</p>
            </div>
            <div class="reveal-right">
                <h2>How do you know your roof needs a radiant barrier?</h2>
                <p class="answer-block">El Dorado Heating & Cooling sees the same pattern across Collier County: ceilings that feel warm to the touch, upstairs rooms that overheat by mid-afternoon, and cooling bills that climb every summer despite good insulation. That's usually a sign the attic is absorbing more radiant heat than insulation alone can handle.</p>
                <p>This shows up most on homes with west- or south-facing roof slopes, which take the harshest direct sun in our latitude. A radiant barrier addresses that heat at the source, before it becomes a load on your ceiling or your AC system.</p>
            </div>
        </div>
        <div class="svc-signs__cards">
            <div class="sign-card reveal-up">
                <div class="sign-card__icon"><?php echo $svg['gauge']; ?></div>
                <h3>Ceiling feels warm to the touch</h3>
                <p>Radiant heat moving through the attic floor into your ceiling is a clear sign the roof deck is absorbing more than it should.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-1">
                <div class="sign-card__icon"><?php echo $svg['droplets']; ?></div>
                <h3>Insulation alone isn&rsquo;t cutting it</h3>
                <p>Good insulation slows heat transfer, but it doesn&rsquo;t stop radiant heat the way a reflective barrier can.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-2">
                <div class="sign-card__icon"><?php echo $svg['volume']; ?></div>
                <h3>AC runs nonstop on sunny afternoons</h3>
                <p>A system fighting radiant heat gain from the roof often runs its longest cycles during peak sun, not peak outdoor temperature.</p>
            </div>
            <div class="sign-card reveal-up reveal-delay-3">
                <div class="sign-card__icon"><?php echo $svg['alert']; ?></div>
                <h3>West- or south-facing roof</h3>
                <p>These roof slopes take the most direct Naples sun and typically see the biggest benefit from a radiant barrier.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================= EXPERT POSITIONING ============================= -->
<section class="section svc-expert" aria-label="Why choose El Dorado for radiant barriers">
    <div class="container">
        <div class="split">
            <div class="reveal-left">
                <span class="eyebrow-label">Local Expertise</span>
                <h2>What makes El Dorado&rsquo;s radiant barrier installs different in Naples?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling installs radiant barrier systems engineered for Southwest Florida&rsquo;s punishing sun angle, not a generic foil roll. Our family-owned team factors in your roof&rsquo;s orientation, existing insulation, and ventilation before choosing barrier placement, so the install blocks heat instead of trapping it against the deck.</p>
                <div class="svc-expert__stat">
                    <b>97%</b>
                    <span>Typical radiant heat reflectivity of a properly installed foil barrier</span>
                </div>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Roof-orientation specific placement</b><p>We prioritize west- and south-facing roof sections that take the hardest afternoon sun in Naples.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Ventilation-safe installation</b><p>The barrier is installed with the airflow clearance your attic needs, so it never traps moisture against the roof deck.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Pairs with existing insulation</b><p>We install over your current insulation rather than replacing it, so you get both heat reflection and heat resistance.</p></div></li>
                </ul>
            </div>
            <figure class="svc-expert__figure reveal-right" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/team-fleet-480.avif 480w, /assets/images/team-fleet-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/team-fleet.jpg" srcset="/assets/images/team-fleet-480.webp 480w, /assets/images/team-fleet-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling team ready for a Naples energy-efficiency install" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
        </div>
    </div>
</section>

<!-- ============================= SERVICE BREAKDOWN ============================= -->
<section class="section section--light svc-included" aria-label="What a radiant barrier installation includes">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Visit</span>
            <h2>What&rsquo;s included in a radiant barrier installation?</h2>
            <p class="answer-block">El Dorado Heating &amp; Cooling handles a radiant barrier install as one coordinated visit &mdash; attic and roof assessment, barrier placement planning, careful fastening to rafters or decking, a ventilation check, and a final walk-through so you know exactly what was installed and why.</p>
        </div>
        <ul class="svc-included__grid reveal-up">
            <li><?php echo $svg['check']; ?><span>Attic and roof structure assessment</span></li>
            <li><?php echo $svg['check']; ?><span>Sun-exposure mapping by roof section</span></li>
            <li><?php echo $svg['check']; ?><span>Foil-faced barrier material selection</span></li>
            <li><?php echo $svg['check']; ?><span>Fastening to rafters or roof deck</span></li>
            <li><?php echo $svg['check']; ?><span>Clearance kept around soffit and ridge vents</span></li>
            <li><?php echo $svg['check']; ?><span>Compatibility check with existing insulation</span></li>
            <li><?php echo $svg['check']; ?><span>Attic temperature spot-check after install</span></li>
            <li><?php echo $svg['check']; ?><span>Photos and notes left with your invoice</span></li>
        </ul>

        <div style="margin-top:clamp(2rem,4vw,3rem);">
            <span class="eyebrow-label">How It Works</span>
            <h2 style="margin-bottom:.5rem;">How does El Dorado install a radiant barrier?</h2>
            <ol class="process-steps">
                <li><b>Book Your Visit</b><span>Call or request an estimate and we&rsquo;ll schedule an attic and roof assessment around your schedule.</span></li>
                <li><b>Roof &amp; Attic Assessment</b><span>We map your roof&rsquo;s sun exposure and check existing insulation and ventilation before recommending placement.</span></li>
                <li><b>Careful Installation</b><span>We fasten the foil-faced barrier to rafters or decking, keeping soffit and ridge vents clear.</span></li>
                <li><b>Results Confirmed</b><span>We spot-check attic temperature after install so you can see the difference before we leave.</span></li>
            </ol>
        </div>
    </div>
</section>

<!-- ============================= TRUST / DIFFERENTIATORS (real facts) ============================= -->
<section class="section on-dark texture-grain slant-top svc-trust" aria-label="Why Naples homeowners trust El Dorado">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="split">
            <figure class="svc-expert__figure reveal-left" style="margin:0;">
                <picture>
                    <source type="image/avif" srcset="/assets/images/hero-service-truck-480.avif 480w, /assets/images/hero-service-truck-960.avif 960w" sizes="(max-width: 900px) 100vw, 45vw">
                    <img src="/assets/images/hero-service-truck.jpg" srcset="/assets/images/hero-service-truck-480.webp 480w, /assets/images/hero-service-truck-960.webp 960w" sizes="(max-width: 900px) 100vw, 45vw" alt="El Dorado Heating &amp; Cooling service truck arriving for a Naples radiant barrier installation" width="960" height="960" loading="lazy" decoding="async">
                </picture>
            </figure>
            <div class="reveal-right">
                <span class="eyebrow-label">The Golden Standard</span>
                <h2>Why do Naples homeowners trust El Dorado for radiant barrier work?</h2>
                <p class="answer-block">El Dorado Heating &amp; Cooling is a licensed, family-owned Florida contractor based in Naples, serving Collier County in English and Spanish. Homeowners trust us with attic energy upgrades because the crew installing your radiant barrier also handles your HVAC system, so every recommendation considers your whole home, not just one product.</p>
                <ul class="svc-diffs">
                    <li><?php echo $svg['check']; ?><div><b>Energy upgrades, not upsells</b><p>We only recommend a radiant barrier when your roof orientation and attic setup actually justify it.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Bilingual service</b><p>Clear communication in English and Spanish on every estimate and every visit.</p></div></li>
                    <li><?php echo $svg['check']; ?><div><b>Around-the-clock backup</b><p>Naples customers can reach us 24/7 if a comfort or cooling issue comes up after the install.</p></div></li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <a href="<?php echo htmlspecialchars($bbbUrl); ?>" class="btn btn-secondary" target="_blank" rel="noopener">See our BBB profile</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================= COMPARISON ============================= -->
<section class="section svc-compare" aria-label="El Dorado radiant barrier install compared to a DIY foil roll">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">The Difference</span>
            <h2>What sets a professional radiant barrier install apart from a DIY foil roll?</h2>
            <p class="answer-block">A DIY foil roll laid across the attic floor can trap moisture and actually work against your insulation. El Dorado Heating &amp; Cooling installs barrier material on the roof rafters or deck with proper clearance, engineered for how heat and humidity actually move through a Southwest Florida attic.</p>
        </div>
        <div class="svc-compare__grid">
            <div class="compare-col compare-col--them reveal-left">
                <h3>A DIY foil roll</h3>
                <ul>
                    <li><?php echo $svg['x']; ?><span>Foil laid flat on the attic floor</span></li>
                    <li><?php echo $svg['x']; ?><span>No accounting for roof orientation</span></li>
                    <li><?php echo $svg['x']; ?><span>Vents blocked or covered by material</span></li>
                    <li><?php echo $svg['x']; ?><span>No compatibility check with insulation</span></li>
                    <li><?php echo $svg['x']; ?><span>Installed once, never inspected again</span></li>
                </ul>
            </div>
            <div class="compare-col compare-col--us reveal-right">
                <h3>El Dorado radiant barrier install</h3>
                <ul>
                    <li><?php echo $svg['check']; ?><span>Foil fastened to rafters or roof deck</span></li>
                    <li><?php echo $svg['check']; ?><span>Placement mapped to your roof&rsquo;s sun exposure</span></li>
                    <li><?php echo $svg['check']; ?><span>Soffit and ridge vents kept clear</span></li>
                    <li><?php echo $svg['check']; ?><span>Confirmed to work alongside your insulation</span></li>
                    <li><?php echo $svg['check']; ?><span>Backed by a local, licensed HVAC team</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================= FAQ ============================= -->
<section class="section section--light svc-faq" aria-label="Radiant barrier FAQs">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Good To Know</span>
            <h2>What do Naples homeowners ask about radiant barriers?</h2>
            <p>Straight answers from the El Dorado Heating &amp; Cooling team on cost, performance, and what a real radiant barrier install protects.</p>
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
<section class="cta-banner on-dark texture-grain edge-wave-top svc-cta" aria-label="Schedule a radiant barrier installation">
    <span class="grain-layer" aria-hidden="true"></span>
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color:var(--color-accent-bright);">Block The Heat At The Source</span>
            <h2>Ready to stop your roof from heating your whole house?</h2>
            <p>A radiant barrier reflects Naples&rsquo; relentless sun before it ever reaches your living space. Call El Dorado Heating &amp; Cooling or request a free estimate and we&rsquo;ll map the right barrier plan for your roof.</p>
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
