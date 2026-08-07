<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Build Schema for Breadcrumbs (SEO Best Practices)
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];

// Title formatting (split last word for accent styling if multi-word)
if (!isset($bc_h1) || empty($bc_h1)) {
    if (isset($bc_title_white) || isset($bc_title_orange)) {
        $bc_h1 = trim((isset($bc_title_white) ? $bc_title_white : '') . ' ' . (isset($bc_title_orange) ? $bc_title_orange : ''));
    }
}
$title_raw = isset($bc_h1) && !empty($bc_h1) ? trim($bc_h1) : 'Vince Road Line';
$words = explode(' ', $title_raw);
if (count($words) > 1) {
    $last_word = array_pop($words);
    $title_html = htmlspecialchars(implode(' ', $words)) . ' <span class="vrl-title-accent">' . htmlspecialchars($last_word) . '</span>';
} else {
    $title_html = '<span class="vrl-title-accent">' . htmlspecialchars($title_raw) . '</span>';
}

// Eyebrow & Description default fallbacks
$eyebrow = isset($bc_eyebrow) && !empty($bc_eyebrow) ? $bc_eyebrow : 'SAFE • RELIABLE • STRESS-FREE';
$description = isset($bc_desc) && !empty($bc_desc) ? $bc_desc : 'We make your relocation experience smooth, safe and hassle-free with our professional moving solutions.';
$logo_url = base_url('assets/images/logo/logo.png');
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Dynamic Breadcrumbs Hero Full-Width Section -->
<section class="dynamic-bc-section">
    <div class="vrl-bc-card">

        <!-- Right Red Swoosh SVG & Dot Watermark Background -->
        <div class="vrl-bc-swoosh-bg">
            <svg viewBox="0 0 500 300" preserveAspectRatio="none" fill="none">
                <!-- Yellow Accent Wave -->
                <path d="M120,0 C220,100 180,200 300,300 L500,300 L500,0 Z" fill="#ffb800" />
                <!-- Main Deep Red Swoosh -->
                <path d="M140,0 C240,110 200,210 320,300 L500,300 L500,0 Z" fill="url(#vrlRedGrad)" />
                <defs>
                    <linearGradient id="vrlRedGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#d9232d" />
                        <stop offset="100%" stop-color="#a8030f" />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <!-- Circular Logo Badge Overlay (Desktop Only) -->
        <div class="vrl-bc-logo-badge d-none d-md-block">
            <img src="<?= $logo_url ?>" alt="<?= $company3 ?> Logo" loading="lazy">
        </div>

        <!-- Content Column inside standard Container -->
        <div class="container">
            <div class="vrl-bc-content">

                <!-- Top Breadcrumb Capsule Navigation -->
                <div class="vrl-bc-pill-nav" aria-label="breadcrumb">
                    <div class="vrl-bc-home-icon">
                        <i class="bi bi-house-door-fill"></i>
                    </div>
                    <a href="<?= site_url() ?>">Home</a>

                    <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                        <?php foreach ($breadcrumbs as $crumb): ?>
                            <span class="vrl-bc-sep">›</span>
                            <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                                <a href="<?= $crumb['url'] ?>"><?= htmlspecialchars(isset($crumb['name']) ? $crumb['name'] : $crumb['title']) ?></a>
                            <?php else: ?>
                                <span class="vrl-bc-current-pill">
                                    <?= htmlspecialchars(isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '')) ?>
                                </span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="vrl-bc-sep">›</span>
                        <span class="vrl-bc-current-pill"><?= htmlspecialchars(isset($bc_current) ? $bc_current : $title_raw) ?></span>
                    <?php endif; ?>
                </div>

                <!-- Eyebrow Header -->
                <div class="vrl-bc-eyebrow">
                    <?= htmlspecialchars($eyebrow) ?>
                </div>

                <!-- Main H1 Title -->
                <h1 class="vrl-bc-title">
                    <?= $title_html ?>
                </h1>

                <!-- Red & Yellow Underline Graphic -->
                <div class="vrl-bc-title-underline">
                    <span class="vrl-bc-line-red"></span>
                    <span class="vrl-bc-line-yellow"></span>
                </div>

                <!-- Subtitle / Description -->
                <p class="vrl-bc-desc">
                    <?= htmlspecialchars($description) ?>
                </p>

                <!-- Bottom Features Capsule Bar -->
                <div class="vrl-bc-features-capsule">
                    
                    <!-- Feature 1 -->
                    <div class="vrl-bc-feature-item">
                        <div class="vrl-bc-feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <div class="vrl-bc-feature-title">Safe Handling</div>
                            <div class="vrl-bc-feature-sub">Your belongings are in safe hands.</div>
                        </div>
                    </div>

                    <div class="vrl-bc-feature-divider"></div>

                    <!-- Feature 2 -->
                    <div class="vrl-bc-feature-item">
                        <div class="vrl-bc-feature-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div>
                            <div class="vrl-bc-feature-title">On Time Delivery</div>
                            <div class="vrl-bc-feature-sub">We deliver on time, every time.</div>
                        </div>
                    </div>

                    <div class="vrl-bc-feature-divider"></div>

                    <!-- Feature 3 -->
                    <div class="vrl-bc-feature-item">
                        <div class="vrl-bc-feature-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div>
                            <div class="vrl-bc-feature-title">Care &amp; Protection</div>
                            <div class="vrl-bc-feature-sub">We treat your items like our own.</div>
                        </div>
                    </div>

                </div>

                <!-- Bottom Center Divider Line -->
                <div class="vrl-bc-bottom-line">
                    <span class="line-left"></span>
                    <i class="bi bi-box-seam"></i>
                    <span class="line-right"></span>
                </div>

            </div>
        </div>

    </div>
</section>