<?php
/**
 * includes/config.php — canonical site configuration for El Dorado Heating & Cooling LLC.
 * All site-wide variables live here. Included at the top of every page BEFORE any output:
 *   require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
 *
 * Pages set their own $canonicalUrl (based on $siteUrl + path), $pageTitle,
 * $metaDescription, $pageType, and (where relevant) $serviceSlug / $citySlug
 * BEFORE including head.php. Do NOT set a per-page $cssVersion — this file is
 * the single source of the framework.css cache-bust.
 */

// ── Identity ──────────────────────────────────────────────────────────────
$slug        = 'el-dorado-heating-cooling-llc';   // exact build directory name
$siteName    = 'El Dorado Heating & Cooling LLC';
$companyName  = $siteName;
$tagline     = "Your Climate's Greatest Treasure";
$ownerName   = 'Alejandro Garcia';
$industry    = 'hvac';
$tier        = 'premium';

// ── Contact ───────────────────────────────────────────────────────────────
$phone          = '(239) 404-6797';        // display format
$phoneTel       = '+12394046797';          // tel: / sms: format
$phoneSecondary = '';                       // none supplied
$email          = 'eldorado.heatingandcooling@gmail.com';
$businessHours  = 'Mon-Fri 8AM to 5PM, Sat-Sun 8AM-9PM';
$acceptsSms     = false;

$address = [
    'street' => '420 2nd St SE',
    'city'   => 'Naples',
    'state'  => 'FL',
    'zip'    => '34117',
];
$addressPublic = true;

// ── Domain / URLs ─────────────────────────────────────────────────────────
// build-plan.json has no production_domain, so default to the preview URL.
$domain  = 'el-dorado-heating-cooling-llc.pageone.cloud';
$siteUrl = 'https://' . $domain;

// ── Brand colors (extracted from logo — Phase 0) ──────────────────────────
$colors = [
    'primary'       => '#123B5D',
    'primary_dark'  => '#0D2C46',
    'primary_rgb'   => '18, 59, 93',
    'secondary'     => '#3FA9E0',
    'secondary_rgb' => '63, 169, 224',
    'accent'        => '#F2B544',
    'accent_rgb'    => '242, 181, 68',
];

// ── History ───────────────────────────────────────────────────────────────
$yearsInBusiness = 7;                                   // over 60 years combined experience
$yearEstablished = (int) date('Y') - $yearsInBusiness;  // ~2019

// ── SEO ───────────────────────────────────────────────────────────────────
$primaryKeyword    = 'hvac repair naples fl';
$secondaryKeywords = [
    'ac repair naples fl',
    'air conditioning repair naples fl',
    'hvac maintenance naples fl',
    'air conditioning installation naples fl',
    'emergency hvac repair naples fl',
    'ac installation naples fl',
    'ac tune up naples fl',
    'heating repair naples fl',
    'emergency ac repair naples fl',
    'hvac ductwork repair naples fl',
    'ac compressor repair naples fl',
    'thermostat repair naples fl',
];

// ── Service pages (canonical nav / URL structure — grouped, cap 16) ────────
// Each maps to /services/{slug}/. `services` holds the individual offerings
// covered by that page. Solo pages cover a single offering.
$servicePages = [
    [
        'slug' => 'hvac-services',
        'name' => 'HVAC Services',
        'title' => 'HVAC Services in Naples, FL',
        'type' => 'service_group',
        'primaryKeyword' => 'oil-to-gas furnace conversion Naples FL',
        'services' => [
            'Air Conditioning Repair', 'Air Conditioning Installation', 'Air Conditioning Replacement',
            'Central Air Conditioning', 'Residential Air Conditioning', 'Cooling System Installation',
            'Air Conditioner Parts', 'Window Air Conditioners', 'Wall Air Conditioners',
            'Mobile Home Air Conditioning', 'Portable Air Conditioners', 'Heating Repair',
            'Heating Installation', 'Central Heating Systems', 'Heating Equipment Repair',
            'Heating Inspections', 'Temporary Heating', 'Gas Heating', 'Oil-to-Gas Furnace Conversion',
            'Floor Heating', 'Custom Heating Systems', 'HVAC Installation', 'HVAC Maintenance',
            'HVAC Repair', 'HVAC Ductwork',
        ],
    ],
    [
        'slug' => 'cleaning-services',
        'name' => 'Cleaning Services',
        'title' => 'Cleaning Services in Naples, FL',
        'type' => 'service_group',
        'primaryKeyword' => 'hvac system cleaning Naples FL',
        'services' => ['AC System Cleaning', 'Coil Cleaning', 'HVAC System Cleaning'],
    ],
    [
        'slug' => 'seasonal-services',
        'name' => 'Seasonal Services',
        'title' => 'Seasonal Services in Naples, FL',
        'type' => 'service_group',
        'primaryKeyword' => 'heating & cooling service Naples FL',
        'services' => ['AC Compressor Service', 'Fan Coil Service', 'Thermostat Services', 'Heating & Cooling Service', 'Air Duct Services'],
    ],
    [
        'slug' => 'rooftop-air-conditioners',
        'name' => 'Rooftop Air Conditioners',
        'title' => 'Rooftop Air Conditioners in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'rooftop air conditioners Naples FL',
        'services' => ['Rooftop Air Conditioners'],
    ],
    [
        'slug' => 'ac-maintenance',
        'name' => 'AC Maintenance',
        'title' => 'AC Maintenance in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'ac maintenance Naples FL',
        'services' => ['AC Maintenance'],
    ],
    [
        'slug' => 'ac-tune-ups',
        'name' => 'AC Tune-Ups',
        'title' => 'AC Tune-Ups in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'ac tune-ups Naples FL',
        'services' => ['AC Tune-Ups'],
    ],
    [
        'slug' => 'air-filters',
        'name' => 'Air Filters',
        'title' => 'Air Filters in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'air filters Naples FL',
        'services' => ['Air Filters'],
    ],
    [
        'slug' => 'air-purifiers',
        'name' => 'Air Purifiers',
        'title' => 'Air Purifiers in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'air purifiers Naples FL',
        'services' => ['Air Purifiers'],
    ],
    [
        'slug' => 'dehumidifiers',
        'name' => 'Dehumidifiers',
        'title' => 'Dehumidifiers in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'dehumidifiers Naples FL',
        'services' => ['Dehumidifiers'],
    ],
    [
        'slug' => 'attic-fans',
        'name' => 'Attic Fans',
        'title' => 'Attic Fans in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'attic fans Naples FL',
        'services' => ['Attic Fans'],
    ],
    [
        'slug' => 'radiant-barriers',
        'name' => 'Radiant Barriers',
        'title' => 'Radiant Barriers in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'radiant barriers Naples FL',
        'services' => ['Radiant Barriers'],
    ],
    [
        'slug' => 'energy-audits',
        'name' => 'Energy Audits',
        'title' => 'Energy Audits in Naples, FL',
        'type' => 'service',
        'primaryKeyword' => 'energy audits Naples FL',
        'services' => ['Energy Audits'],
    ],
];

// ── Service-page card metadata (icon, on-disk photo, blurb, 3 bullets) ─────
// Keyed by service-page slug. Drives the "Related Services" grid on every
// service page (renderRelatedServices() in functions.php) and any card reuse.
// Only 4 real client photos exist on disk; they rotate across cards.
$servicePageMeta = [
    'hvac-services'            => ['icon' => 'wind',     'photo' => 'tech-outdoor-unit', 'palt' => 'El Dorado technician servicing an outdoor AC unit at a Naples home',            'desc' => 'Repair, installation, and upkeep for cooling and heating.',        'bullets' => ['AC & heating repair', 'New system installs', 'Ductwork & tune-ups']],
    'cleaning-services'        => ['icon' => 'droplets', 'photo' => 'fleet-trucks',      'palt' => 'El Dorado Heating & Cooling service trucks ready for a Naples job',            'desc' => 'Coil and duct cleaning that restores airflow and efficiency.',     'bullets' => ['Coil & condenser cleaning', 'Full duct cleaning', 'Better indoor air']],
    'seasonal-services'        => ['icon' => 'sun',      'photo' => 'team-fleet',        'palt' => 'The El Dorado Heating & Cooling team with their Naples service fleet',         'desc' => 'Pre-season checkups that keep your system heat-ready.',            'bullets' => ['Thermostat & fan service', 'Compressor checks', 'Air duct service']],
    'rooftop-air-conditioners'=> ['icon' => 'home',     'photo' => 'hero-service-truck', 'palt' => 'El Dorado service truck equipped for rooftop AC work in Naples',               'desc' => 'Install, repair, and maintenance for rooftop and commercial units.','bullets' => ['Commercial rooftop units', 'Leak & refrigerant checks', 'Scheduled maintenance']],
    'ac-maintenance'          => ['icon' => 'wrench',   'photo' => 'tech-outdoor-unit', 'palt' => 'El Dorado technician performing AC maintenance on a Naples home',              'desc' => 'Annual plans that prevent breakdowns before the heat arrives.',    'bullets' => ['Seasonal inspections', 'Refrigerant & filter checks', 'Priority service']],
    'ac-tune-ups'             => ['icon' => 'shield',   'photo' => 'fleet-trucks',      'palt' => 'El Dorado Heating & Cooling fleet parked and ready for tune-up calls',        'desc' => 'A quick tune-up that improves efficiency and lowers your bill.',   'bullets' => ['Coil cleaning', 'Refrigerant top-off', '5–15% efficiency gain']],
    'air-filters'             => ['icon' => 'layers',   'photo' => 'team-fleet',        'palt' => 'El Dorado Heating & Cooling crew serving Naples homeowners',                   'desc' => 'Filter replacement that protects your system and your air.',       'bullets' => ['Furnace & AC filters', 'Right size, every time', 'Cleaner home air']],
    'air-purifiers'           => ['icon' => 'leaf',     'photo' => 'hero-service-truck', 'palt' => 'El Dorado service truck stocked for indoor air-quality installs',              'desc' => 'Whole-home purification for cleaner, healthier indoor air.',       'bullets' => ['Whole-home systems', 'Allergen & odor control', 'Professional install']],
    'dehumidifiers'           => ['icon' => 'droplets', 'photo' => 'tech-outdoor-unit', 'palt' => 'El Dorado technician working on humidity control at a Naples home',            'desc' => 'Whole-home humidity control for Florida comfort and air quality.', 'bullets' => ['Whole-home dehumidifiers', 'Mold & moisture control', 'Balanced comfort']],
    'attic-fans'              => ['icon' => 'wind',     'photo' => 'fleet-trucks',      'palt' => 'El Dorado Heating & Cooling trucks on a Naples ventilation job',               'desc' => 'Attic ventilation that lowers heat load and cooling costs.',       'bullets' => ['Attic fan installs', 'Better ventilation', 'Lower cooling bills']],
    'radiant-barriers'        => ['icon' => 'shield',   'photo' => 'team-fleet',        'palt' => 'El Dorado Heating & Cooling team ready for an energy-efficiency install',     'desc' => 'Reflective barriers that block attic heat before it enters.',      'bullets' => ['Reflects radiant heat', 'Cooler upstairs rooms', 'Lower energy use']],
    'energy-audits'           => ['icon' => 'gauge',    'photo' => 'hero-service-truck', 'palt' => 'El Dorado service truck arriving for a Naples home energy audit',             'desc' => 'A full assessment that pinpoints comfort and efficiency fixes.',    'bullets' => ['Whole-home assessment', 'Find efficiency losses', 'Lower utility bills']],
];

// ── Granular services catalog (name, slug, description, keywords) ──────────
// Full offerings list; used for schema, internal linking, and copy reference.
$services = [
    ['name' => 'Air Conditioning Repair', 'slug' => 'air-conditioning-repair', 'description' => 'Expert air conditioning repair services for broken or malfunctioning AC units. Same-day emergency service available throughout Naples, FL.', 'keywords' => ['air conditioning repair Naples FL', 'AC repair', 'emergency AC service', 'cooling system repair']],
    ['name' => 'Air Conditioning Installation', 'slug' => 'air-conditioning-installation', 'description' => 'Professional AC installation by certified technicians for new units and replacements. Expert setup for optimal cooling performance in Naples, FL.', 'keywords' => ['AC installation Naples FL', 'air conditioner installation', 'new cooling system', 'AC system setup']],
    ['name' => 'Air Conditioning Replacement', 'slug' => 'air-conditioning-replacement', 'description' => 'Replace your old AC unit with a new, energy-efficient model. Professional removal and installation service in Naples, FL.', 'keywords' => ['air conditioning replacement Naples FL', 'AC unit replacement', 'upgrade air conditioner', 'system replacement']],
    ['name' => 'Central Air Conditioning', 'slug' => 'central-air-conditioning', 'description' => 'Central air conditioning systems for whole-home cooling. Installation, repair, and maintenance of central AC units in Naples, FL.', 'keywords' => ['central air conditioning Naples FL', 'central AC system', 'whole home cooling', 'central air unit']],
    ['name' => 'Residential Air Conditioning', 'slug' => 'residential-air-conditioning', 'description' => 'Complete residential AC services including installation, repair, and maintenance for homes throughout Naples, FL.', 'keywords' => ['residential air conditioning Naples FL', 'home AC service', 'house cooling system', 'residential HVAC']],
    ['name' => 'Cooling System Installation', 'slug' => 'cooling-system-installation', 'description' => 'Professional cooling system installation for new construction and replacements. Expert design and setup in Naples, FL.', 'keywords' => ['cooling system installation Naples FL', 'AC system installation', 'residential cooling', 'new cooling setup']],
    ['name' => 'AC Maintenance', 'slug' => 'ac-maintenance', 'description' => 'Regular AC maintenance keeps your system running efficiently and prevents costly breakdowns. Annual service plans available in Naples.', 'keywords' => ['AC maintenance Naples FL', 'preventative maintenance', 'HVAC service plan', 'air conditioning maintenance']],
    ['name' => 'AC Tune-Ups', 'slug' => 'ac-tune-ups', 'description' => 'AC tune-up services ensure optimal performance and efficiency of your air conditioning system. Seasonal preparation available.', 'keywords' => ['AC tune-up Naples FL', 'seasonal maintenance', 'HVAC tune-up', 'air conditioning service']],
    ['name' => 'AC System Cleaning', 'slug' => 'ac-system-cleaning', 'description' => 'Professional AC system cleaning removes dirt and debris for improved efficiency and indoor air quality.', 'keywords' => ['AC cleaning Naples FL', 'air conditioning cleaning', 'system cleaning', 'coil cleaning service']],
    ['name' => 'AC Compressor Service', 'slug' => 'ac-compressor-service', 'description' => 'AC compressor repair and replacement services restore cooling performance to your air conditioning unit.', 'keywords' => ['AC compressor service Naples FL', 'compressor repair', 'refrigerant service', 'compressor replacement']],
    ['name' => 'Coil Cleaning', 'slug' => 'coil-cleaning', 'description' => 'Condenser and evaporator coil cleaning improves efficiency and extends the life of your AC system.', 'keywords' => ['coil cleaning Naples FL', 'condenser coil service', 'evaporator cleaning', 'AC efficiency']],
    ['name' => 'Fan Coil Service', 'slug' => 'fan-coil-service', 'description' => 'Fan coil unit maintenance, repair, and replacement for efficient heating and cooling in Naples properties.', 'keywords' => ['fan coil service Naples FL', 'air handler repair', 'fan coil maintenance', 'HVAC components']],
    ['name' => 'Air Conditioner Parts', 'slug' => 'air-conditioner-parts', 'description' => 'Original and replacement parts for air conditioning units available for purchase and professional installation in Naples, FL.', 'keywords' => ['AC parts Naples FL', 'air conditioner parts', 'replacement parts', 'HVAC components']],
    ['name' => 'Window Air Conditioners', 'slug' => 'window-air-conditioners', 'description' => 'Installation, repair, and maintenance of window air conditioning units for homes and apartments in Naples, FL.', 'keywords' => ['window air conditioner Naples FL', 'window AC installation', 'portable AC unit', 'apartment cooling']],
    ['name' => 'Wall Air Conditioners', 'slug' => 'wall-air-conditioners', 'description' => 'Professional installation and repair of wall-mounted and ductless air conditioning units in Naples, FL.', 'keywords' => ['wall air conditioner Naples FL', 'ductless AC system', 'mini-split air conditioner', 'wall mounted cooling']],
    ['name' => 'Rooftop Air Conditioners', 'slug' => 'rooftop-air-conditioners', 'description' => 'Rooftop AC unit installation, repair, and maintenance for commercial buildings and properties in Naples, FL.', 'keywords' => ['rooftop air conditioner Naples FL', 'commercial AC', 'rooftop unit repair', 'commercial cooling']],
    ['name' => 'Mobile Home Air Conditioning', 'slug' => 'mobile-home-air-conditioning', 'description' => 'Specialized AC services for mobile homes and manufactured housing in Naples, FL and surrounding areas.', 'keywords' => ['mobile home air conditioning Naples FL', 'manufactured home AC', 'trailer cooling', 'mobile home service']],
    ['name' => 'Portable Air Conditioners', 'slug' => 'portable-air-conditioners', 'description' => 'Installation and maintenance of portable air conditioning units for flexible cooling solutions in Naples.', 'keywords' => ['portable air conditioner Naples FL', 'moveable AC unit', 'temporary cooling', 'portable AC service']],
    ['name' => 'Air Filters', 'slug' => 'air-filters', 'description' => 'High-quality air filter replacement and furnace filter services for improved air quality and system efficiency.', 'keywords' => ['air filters Naples FL', 'furnace filters', 'AC filters', 'filter replacement service']],
    ['name' => 'Thermostat Services', 'slug' => 'thermostat-services', 'description' => 'Thermostat installation, repair, and programming including smart thermostat upgrades in Naples, FL.', 'keywords' => ['thermostat service Naples FL', 'thermostat installation', 'smart thermostat', 'programmable thermostat']],
    ['name' => 'Heating Repair', 'slug' => 'heating-repair', 'description' => 'Emergency heating repair services for broken furnaces and heating systems in Naples, FL.', 'keywords' => ['heating repair Naples FL', 'furnace repair', 'emergency heat service', 'heating system repair']],
    ['name' => 'Heating Installation', 'slug' => 'heating-installation', 'description' => 'Professional heating system installation by licensed technicians for new and replacement units in Naples, FL.', 'keywords' => ['heating installation Naples FL', 'furnace installation', 'new heat system', 'heating setup']],
    ['name' => 'Central Heating Systems', 'slug' => 'central-heating-systems', 'description' => 'Central heating installation, repair, and maintenance for whole-home comfort year-round in Naples, FL.', 'keywords' => ['central heating Naples FL', 'central furnace', 'whole home heating', 'central heat system']],
    ['name' => 'Heating Equipment Repair', 'slug' => 'heating-equipment-repair', 'description' => 'Repair services for all types of heating equipment including furnaces, boilers, and heat pumps in Naples.', 'keywords' => ['heating equipment repair Naples FL', 'furnace repair', 'boiler service', 'heat pump repair']],
    ['name' => 'Heating Inspections', 'slug' => 'heating-inspections', 'description' => 'Annual heating system inspections ensure safety and efficiency of your furnace and heating system.', 'keywords' => ['heating inspection Naples FL', 'furnace inspection', 'heat system inspection', 'safety inspection']],
    ['name' => 'Heating & Cooling Service', 'slug' => 'heating-cooling-service', 'description' => 'Combined heating and cooling services for year-round comfort and climate control in Naples, FL homes.', 'keywords' => ['heating and cooling Naples FL', 'HVAC service', 'climate control', 'complete HVAC']],
    ['name' => 'Temporary Heating', 'slug' => 'temporary-heating', 'description' => 'Temporary heating solutions for emergencies, construction projects, or special events in Naples, FL.', 'keywords' => ['temporary heating Naples FL', 'emergency heat', 'portable heater', 'temporary HVAC solution']],
    ['name' => 'Gas Heating', 'slug' => 'gas-heating', 'description' => 'Gas furnace installation, repair, and maintenance for efficient and reliable home heating in Naples, FL.', 'keywords' => ['gas heating Naples FL', 'gas furnace', 'natural gas heat', 'gas heater service']],
    ['name' => 'Oil-to-Gas Furnace Conversion', 'slug' => 'oil-to-gas-furnace-conversion', 'description' => 'Convert your oil furnace to an efficient gas heating system with expert installation and support.', 'keywords' => ['oil to gas conversion Naples FL', 'furnace conversion', 'gas furnace upgrade', 'heating upgrade']],
    ['name' => 'Floor Heating', 'slug' => 'floor-heating', 'description' => 'Radiant floor heating installation and repair for comfortable, energy-efficient home heating in Naples, FL.', 'keywords' => ['floor heating Naples FL', 'radiant floor heat', 'hydronic heating', 'in-floor heating']],
    ['name' => 'Custom Heating Systems', 'slug' => 'custom-heating-systems', 'description' => 'Custom heating system design and installation for unique residential and commercial properties in Naples.', 'keywords' => ['custom heating Naples FL', 'custom heating system', 'specialized heating', 'bespoke HVAC']],
    ['name' => 'HVAC Installation', 'slug' => 'hvac-installation', 'description' => 'Professional HVAC system installation for complete heating and cooling in Naples, FL.', 'keywords' => ['HVAC installation Naples FL', 'heating and cooling installation', 'system installation', 'new HVAC']],
    ['name' => 'HVAC Maintenance', 'slug' => 'hvac-maintenance', 'description' => 'Regular HVAC maintenance plans keep your heating and cooling systems running efficiently year-round.', 'keywords' => ['HVAC maintenance Naples FL', 'preventative maintenance', 'system maintenance', 'HVAC service plan']],
    ['name' => 'HVAC Repair', 'slug' => 'hvac-repair', 'description' => 'Expert HVAC repair for heating and cooling system problems in Naples, FL with emergency service available.', 'keywords' => ['HVAC repair Naples FL', 'heating and cooling repair', 'emergency HVAC', 'system repair']],
    ['name' => 'HVAC System Cleaning', 'slug' => 'hvac-system-cleaning', 'description' => 'Complete HVAC system cleaning including ductwork and components for improved efficiency and air quality.', 'keywords' => ['HVAC cleaning Naples FL', 'system cleaning', 'duct cleaning', 'HVAC maintenance']],
    ['name' => 'HVAC Ductwork', 'slug' => 'hvac-ductwork', 'description' => 'HVAC ductwork design, installation, repair, and maintenance for efficient air distribution in Naples, FL.', 'keywords' => ['HVAC ductwork Naples FL', 'ductwork installation', 'duct repair', 'air duct system']],
    ['name' => 'Air Duct Services', 'slug' => 'air-duct-services', 'description' => 'Professional air duct cleaning, repair, and sealing services for improved indoor air quality in Naples, FL.', 'keywords' => ['air duct service Naples FL', 'duct cleaning', 'air duct cleaning', 'ductwork repair']],
    ['name' => 'Air Purifiers', 'slug' => 'air-purifiers', 'description' => 'Air purifier installation and maintenance for cleaner, healthier indoor air quality in Naples, FL homes.', 'keywords' => ['air purifiers Naples FL', 'air purifier installation', 'indoor air quality', 'air filtration']],
    ['name' => 'Dehumidifiers', 'slug' => 'dehumidifiers', 'description' => 'Dehumidifier installation and service to control humidity levels for comfort and indoor air quality.', 'keywords' => ['dehumidifier service Naples FL', 'humidity control', 'dehumidifier installation', 'moisture control']],
    ['name' => 'Attic Fans', 'slug' => 'attic-fans', 'description' => 'Attic fan installation and repair to improve ventilation and reduce cooling costs in Naples, FL homes.', 'keywords' => ['attic fan Naples FL', 'attic fan installation', 'ventilation fan', 'whole house fan']],
    ['name' => 'Radiant Barriers', 'slug' => 'radiant-barriers', 'description' => 'Radiant barrier installation to reflect heat and reduce cooling costs in Naples, FL homes.', 'keywords' => ['radiant barrier Naples FL', 'radiant barrier installation', 'heat reflection', 'energy efficiency']],
    ['name' => 'Energy Audits', 'slug' => 'energy-audits', 'description' => 'Professional energy audits identify opportunities to improve efficiency and reduce utility bills in Naples, FL.', 'keywords' => ['energy audit Naples FL', 'home energy audit', 'HVAC efficiency', 'energy efficiency assessment']],
];

// ── Service areas (communities served per intake — verify before area pages) ─
$primaryCity  = 'Naples';
$serviceAreas = [
    ['city' => 'Naples', 'state' => 'FL', 'zip' => '34117', 'primary' => true],
    ['city' => 'Bonita Springs', 'state' => 'FL', 'zip' => '', 'primary' => false],
    ['city' => 'Marco Island', 'state' => 'FL', 'zip' => '', 'primary' => false],
];

// ── Social / external profiles ────────────────────────────────────────────
$socialLinks = [];   // none supplied at intake
$bbbUrl      = 'https://www.bbb.org/us/fl/naples/profile/air-conditioning-contractor/el-dorado-heating-and-cooling-llc-0653-90407720';

// ── Analytics ─────────────────────────────────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';   // placeholder — replaced post-launch

// ── Forms ─────────────────────────────────────────────────────────────────
$formAction = 'https://db.pageone.cloud/functions/v1/leads/el-dorado-heating-cooling-llc';

// ── Assets ────────────────────────────────────────────────────────────────
// framework.css cache-bust — SINGLE source of truth. Bump on every framework.css change.
$cssVersion = '2';

// ── Lead attribution (v6.3) — MUST be last. Sets first-touch cookie + p1_attribution_fields(). ──
require_once __DIR__ . '/attribution.php';
