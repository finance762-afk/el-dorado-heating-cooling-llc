<?php
/**
 * Blog Registry — Single source of truth for all blog posts.
 * EVERY blog display (index, homepage preview, related articles, sitemap.php) reads from this array.
 * Never hardcode post lists elsewhere.
 */

$blogPosts = [
    [
        'slug'     => 'ac-repair-costs-naples-florida',
        'title'    => 'AC Repair Costs in Naples, FL: What to Expect in 2026',
        'excerpt'  => 'Naples AC repairs range from $150 for minor fixes to $1,200+ for compressor replacements. Learn what drives costs, when repair makes sense vs. replacement, and how to avoid surprise charges.',
        'image'    => 'tech-outdoor-unit',  // matches /assets/images/tech-outdoor-unit-960.webp
        'alt'      => 'HVAC technician diagnosing an outdoor AC unit at a Naples home',
        'date'     => 'September 15, 2026',
        'dateISO'  => '2026-09-15',
        'category' => 'HVAC Costs',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'hurricane-season-hvac-prep-florida',
        'title'    => 'Hurricane Season HVAC Prep for Southwest Florida Homes',
        'excerpt'  => 'Protect your AC system before a storm hits. From securing outdoor units to post-storm inspection checklists, here\'s how Naples homeowners can prevent thousands in avoidable HVAC damage.',
        'image'    => 'hero-service-truck',  // matches /assets/images/hero-service-truck-960.webp
        'alt'      => 'El Dorado Heating & Cooling service truck ready for storm-season service calls',
        'date'     => 'September 10, 2026',
        'dateISO'  => '2026-09-10',
        'category' => 'Maintenance',
        'readtime' => '5 min read',
    ],
];
