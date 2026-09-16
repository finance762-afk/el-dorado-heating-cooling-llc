<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$currentPage     = 'blog';
$pageType        = 'other';
$pageTitle       = 'HVAC Tips & Advice Blog | El Dorado Heating & Cooling';
$metaDescription = 'Expert HVAC advice from El Dorado Heating & Cooling. Learn about AC repair costs, maintenance tips, and how to keep your Naples home comfortable year-round.';
$canonicalUrl    = $siteUrl . '/blog/';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
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
      "item": "<?php echo $canonicalUrl; ?>"
    }
  ]
}
</script>

<!-- Blog Header -->
<section class="hero hero--interior">
    <div class="hero-grid container">
        <div class="hero-content">
            <span class="eyebrow-label">HVAC Insights</span>
            <h1>Tips & Advice from <span class="text-accent">Naples HVAC Experts</span></h1>
            <p class="hero-answer">Learn how to keep your Southwest Florida home comfortable and your AC running efficiently. From seasonal maintenance tips to cost breakdowns, we share the HVAC knowledge Naples homeowners actually need.</p>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="section section--light">
    <div class="container">
        <div class="blog-grid">
            <?php foreach ($blogPosts as $i => $post):
                $delay = ($i % 3) + 1;
            ?>
            <article class="blog-card reveal-up reveal-delay-<?php echo $delay; ?>">
                <a href="/blog/<?php echo $post['slug']; ?>/" class="blog-card__image-link">
                    <picture class="blog-card__image">
                        <source type="image/avif" srcset="/assets/images/<?php echo $post['image']; ?>-480.avif 480w, /assets/images/<?php echo $post['image']; ?>-960.avif 960w" sizes="(max-width: 768px) 100vw, 480px">
                        <img src="/assets/images/<?php echo $post['image']; ?>.jpg" srcset="/assets/images/<?php echo $post['image']; ?>-480.webp 480w, /assets/images/<?php echo $post['image']; ?>-960.webp 960w" sizes="(max-width: 768px) 100vw, 480px" alt="<?php echo htmlspecialchars($post['alt']); ?>" width="600" height="360" loading="lazy" decoding="async">
                    </picture>
                </a>
                <div class="blog-card__content">
                    <div class="blog-card__meta">
                        <span class="blog-card__category"><?php echo htmlspecialchars($post['category']); ?></span>
                        <span class="blog-card__date"><?php echo htmlspecialchars($post['date']); ?></span>
                        <span class="blog-card__readtime"><?php echo htmlspecialchars($post['readtime']); ?></span>
                    </div>
                    <h2 class="blog-card__title">
                        <a href="/blog/<?php echo $post['slug']; ?>/"><?php echo htmlspecialchars($post['title']); ?></a>
                    </h2>
                    <p class="blog-card__excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <a href="/blog/<?php echo $post['slug']; ?>/" class="blog-card__cta">Read Article</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section--dark cta-section">
    <div class="container-narrow">
        <div class="cta-card reveal-scale">
            <div class="cta-content">
                <h2>Need HVAC Service in <span class="text-accent">Naples</span>?</h2>
                <p>El Dorado Heating & Cooling provides expert AC repair, installation, and maintenance across Southwest Florida. Call <?php echo $phone; ?> for same-day service — we're available 24/7.</p>
                <div class="cta-actions">
                    <a href="tel:<?php echo $phoneTel; ?>" class="btn-primary btn-large">
                        <svg aria-hidden="true" width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        Call <?php echo $phone; ?>
                    </a>
                    <a href="#estimate" class="btn-secondary btn-large" data-open-estimate>Get Free Estimate</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Blog Grid */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
    gap: var(--space-2xl);
}

.blog-card {
    background: var(--color-bg);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: var(--transition);
    border: 1px solid var(--color-border);
}

.blog-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
}

.blog-card__image-link {
    display: block;
    overflow: hidden;
    aspect-ratio: 5 / 3;
}

.blog-card__image {
    display: block;
    width: 100%;
    height: 100%;
}

.blog-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.blog-card:hover .blog-card__image img {
    transform: scale(1.05);
}

.blog-card__content {
    padding: var(--space-xl);
}

.blog-card__meta {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-sm);
    align-items: center;
    margin-bottom: var(--space-md);
    font-size: var(--fs-xs);
    color: var(--color-text-light);
}

.blog-card__category {
    background: var(--color-accent);
    color: var(--color-primary-dark);
    padding: 4px 12px;
    border-radius: var(--radius-sm);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.blog-card__date::before,
.blog-card__readtime::before {
    content: '•';
    margin-right: var(--space-xs);
    color: var(--color-border);
}

.blog-card__title {
    font-size: var(--fs-h4);
    margin-bottom: var(--space-sm);
}

.blog-card__title a {
    color: var(--color-primary);
    text-decoration: none;
    transition: var(--transition);
}

.blog-card__title a:hover {
    color: var(--color-accent);
}

.blog-card__excerpt {
    color: var(--color-text-light);
    line-height: 1.6;
    margin-bottom: var(--space-md);
}

.blog-card__cta {
    display: inline-flex;
    align-items: center;
    gap: var(--space-xs);
    color: var(--color-primary);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
}

.blog-card__cta:hover {
    color: var(--color-accent);
    gap: var(--space-sm);
}

.blog-card__cta::after {
    content: '→';
}

@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
