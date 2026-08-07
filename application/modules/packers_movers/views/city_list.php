<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],

    ]
]);
?>

<div class="pm-list-service-page py-5">
    <div class="container pm-list-feature-section">

        <!-- Section Header -->
        <div class="pm-list-header text-center mb-5">
            <span class="pm-list-tag mb-2 d-inline-block">Major Hubs</span>
            <h2 class="fw-bold pm-list-title">
                Packers & Movers in <span class="pm-list-title-highlight"><?= htmlspecialchars($state) ?></span>
            </h2>
            <p class="pm-list-subtitle mx-auto">
                Select your city to explore professional packing, moving, and storage services.
            </p>
        </div>

        <div class="row g-3 g-md-4">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="pm-list-city-card-link text-decoration-none">
                        <div class="pm-list-city-card">
                            <div class="pm-list-card-body d-flex align-items-center gap-3">
                                
                                <!-- Sharp Crisp Icon Container -->
                                <div class="pm-list-icon-wrapper">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <!-- City Info -->
                                <div class="pm-list-city-info flex-grow-1">
                                    <span class="pm-list-label d-block">Packers and Movers</span>
                                    <h5 class="pm-list-city-name mb-0"><?= htmlspecialchars($ct['nm']) ?></h5>
                                </div>

                                <!-- Arrow Indicator -->
                                <div class="pm-list-arrow-box">
                                    <i class="bi bi-arrow-right"></i>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>