<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "karnataka.jpg",
        "category" => "Karnataka",
        "link" => "karnataka"
    ],
    [
        "image" => "haryana.jpg",
        "category" => "Haryana",
        "link" => "haryana"
    ],
];
?>

<!-- Branch Section -->
<section class="pm-states-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5 pm-states-header">
            <h2 class="fw-bold pm-states-title">
                Our Presence Across <span class="pm-states-title-highlight">India</span>
            </h2>
            <p class="pm-states-subtitle mx-auto">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row justify-content-center g-4">

            <?php foreach ($state as $item): ?>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a href="<?= site_url($item['link']) ?>" class="pm-states-card-link text-decoration-none">
                        <div class="pm-states-card">

                            <!-- Image Wrapper -->
                            <div class="pm-states-img-wrapper">
                                <img class="pm-states-img" src="<?= base_url() ?>assets/images/state/<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['category']) ?>">
                                <div class="pm-states-overlay"></div>
                                <div class="pm-states-top-badge">
                                    <i class="bi bi-geo-alt-fill"></i> State Hub
                                </div>
                            </div>

                            <!-- Content Body -->
                            <div class="pm-states-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="pm-states-accent-bar"></span>
                                        <div>
                                            <h5 class="pm-states-name mb-0"><?= htmlspecialchars($item['category']) ?></h5>
                                            <span class="pm-states-subtext">View Services &amp; Routes</span>
                                        </div>
                                    </div>
                                    <div class="pm-states-circle-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>