<?php
// Set DOCUMENT_ROOT for CLI execution
if (!isset($_SERVER['DOCUMENT_ROOT']) || empty($_SERVER['DOCUMENT_ROOT'])) {
    $_SERVER['DOCUMENT_ROOT'] = __DIR__;
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

header('Content-Type: application/xml; charset=utf-8');

// ── Page Registry: Canonical list of all indexable URLs ──────────────────────
// Priority: 1.0 = homepage, 0.9 = top-level pages, 0.8 = service pages,
// 0.7 = service-area pages, 0.6 = blog posts, 0.3 = legal pages.
// Changefreq: how often the page content typically changes.

$pages = [
    // ── Core Pages ─────────────────────────────────────────────────────────
    ['loc' => $siteUrl . '/', 'lastmod' => '2026-09-16', 'changefreq' => 'weekly', 'priority' => '1.0'],
    ['loc' => $siteUrl . '/services/', 'lastmod' => '2026-09-16', 'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => $siteUrl . '/about/', 'lastmod' => '2026-09-16', 'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => $siteUrl . '/contact/', 'lastmod' => '2026-09-16', 'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => $siteUrl . '/blog/', 'lastmod' => '2026-09-16', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => $siteUrl . '/service-areas/', 'lastmod' => '2026-09-16', 'changefreq' => 'monthly', 'priority' => '0.8'],
];

// ── Service Pages (from config.php $servicePages) ─────────────────────────
foreach ($servicePages as $svc) {
    $pages[] = [
        'loc' => $siteUrl . '/services/' . $svc['slug'] . '/',
        'lastmod' => '2026-09-16',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ];
}

// ── Service Area Pages (from config.php $serviceAreas) ────────────────────
foreach ($serviceAreas as $area) {
    $slug = getAreaSlug($area['city']);
    // Only add if the directory actually exists on disk
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/service-areas/' . $slug)) {
        $pages[] = [
            'loc' => $siteUrl . '/service-areas/' . $slug . '/',
            'lastmod' => '2026-09-16',
            'changefreq' => 'monthly',
            'priority' => '0.7',
        ];
    }
}

// ── Blog Posts (from includes/blog-data.php $blogPosts) ───────────────────
foreach ($blogPosts as $post) {
    $pages[] = [
        'loc' => $siteUrl . '/blog/' . $post['slug'] . '/',
        'lastmod' => $post['dateISO'],
        'changefreq' => 'yearly',
        'priority' => '0.6',
    ];
}

// ── Legal / Compliance Pages (lower priority, rarely change) ──────────────
$legalPages = [
    ['loc' => $siteUrl . '/privacy-policy/', 'lastmod' => '2026-09-16', 'changefreq' => 'yearly', 'priority' => '0.3'],
    ['loc' => $siteUrl . '/terms/', 'lastmod' => '2026-09-16', 'changefreq' => 'yearly', 'priority' => '0.3'],
    ['loc' => $siteUrl . '/cookie-policy/', 'lastmod' => '2026-09-16', 'changefreq' => 'yearly', 'priority' => '0.3'],
    ['loc' => $siteUrl . '/accessibility/', 'lastmod' => '2026-09-16', 'changefreq' => 'yearly', 'priority' => '0.3'],
];

$pages = array_merge($pages, $legalPages);

// ── Generate XML Sitemap ───────────────────────────────────────────────────
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?php echo htmlspecialchars($page['loc']); ?></loc>
    <lastmod><?php echo $page['lastmod']; ?></lastmod>
    <changefreq><?php echo $page['changefreq']; ?></changefreq>
    <priority><?php echo $page['priority']; ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
