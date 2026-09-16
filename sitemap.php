<?php
/**
 * sitemap.php — Dynamic XML sitemap for El Dorado Heating & Cooling LLC.
 * Auto-generates from config.php arrays (service pages, areas) + blog-data.php registry.
 * Called via .htaccess: RewriteRule ^sitemap\.xml$ /sitemap.php [L]
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/blog-data.php';

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <!-- Homepage -->
  <url>
    <loc><?php echo $siteUrl; ?>/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>

  <!-- Service Pages -->
  <?php foreach ($servicePages as $svcPage): ?>
  <url>
    <loc><?php echo $siteUrl; ?>/services/<?php echo $svcPage['slug']; ?>/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  <?php endforeach; ?>

  <!-- Service Areas Overview -->
  <?php if ($tier === 'premium' && !empty($serviceAreas) && count($serviceAreas) > 1): ?>
  <url>
    <loc><?php echo $siteUrl; ?>/service-areas/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>

  <!-- Individual Service Area Pages -->
  <?php foreach ($serviceAreas as $area):
    $areaSlug = getAreaSlug($area['city']);
    $areaDir = __DIR__ . '/service-areas/' . $areaSlug . '/index.php';
    if (file_exists($areaDir)):
  ?>
  <url>
    <loc><?php echo $siteUrl; ?>/service-areas/<?php echo $areaSlug; ?>/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
  <?php endif; endforeach; ?>
  <?php endif; ?>

  <!-- Blog Index -->
  <?php if ($tier === 'premium' && !empty($blogPosts)): ?>
  <url>
    <loc><?php echo $siteUrl; ?>/blog/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.6</priority>
  </url>

  <!-- Individual Blog Posts -->
  <?php foreach ($blogPosts as $post): ?>
  <url>
    <loc><?php echo $siteUrl; ?>/blog/<?php echo $post['slug']; ?>/</loc>
    <lastmod><?php echo date('Y-m-d', strtotime($post['dateISO'])); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>
  <?php endforeach; ?>
  <?php endif; ?>

  <!-- About -->
  <url>
    <loc><?php echo $siteUrl; ?>/about/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>

  <!-- Contact -->
  <url>
    <loc><?php echo $siteUrl; ?>/contact/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>

  <!-- FAQ (Premium only) -->
  <?php if ($tier === 'premium'): ?>
  <url>
    <loc><?php echo $siteUrl; ?>/faq/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.5</priority>
  </url>
  <?php endif; ?>

  <!-- Legal/Compliance Pages -->
  <url>
    <loc><?php echo $siteUrl; ?>/privacy-policy/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>

  <url>
    <loc><?php echo $siteUrl; ?>/terms/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>

  <url>
    <loc><?php echo $siteUrl; ?>/cookie-policy/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>

  <url>
    <loc><?php echo $siteUrl; ?>/accessibility/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>

</urlset>
