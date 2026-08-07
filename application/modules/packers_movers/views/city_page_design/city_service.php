<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Section Header -->
<div class="text-center mb-4">
    <span class="pm-list-tag mb-2 d-inline-block">Services Matrix</span>
    <h3 class="fw-bold text-dark fs-2">Specialized Relocation Services in <span class="text-danger"><?= htmlspecialchars($city) ?></span></h3>
    <p class="text-muted mx-auto pm-service-section-desc">Tailored packing and moving solutions for every type of relocation requirement.</p>
</div>

<div class="row g-4">
    <!-- Home Shifting -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 p-4 rounded-4 bg-white border shadow-sm d-flex flex-column">
            <div class="pm-city-srv-icon-wrap mb-3 overflow-hidden rounded-3">
                <img src="<?= base_url('assets/images/services_modules/home-shifting-services.webp') ?>" alt="Home Shifting in <?= htmlspecialchars($city) ?>" class="img-fluid w-100 object-fit-cover" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <h5 class="fw-bold text-dark mb-2">Home Shifting<br><small class="text-muted fs-7">in <?= htmlspecialchars($city) ?></small></h5>
            <p class="pm-city-srv-desc text-muted small flex-grow-1 mb-3">Safe packing, loading, and door-to-door transport of household goods with full insurance protection.</p>
            <a href="<?= site_url('home-shifting-in-'.$ctlink) ?>" class="btn btn-outline-danger btn-sm rounded-pill mt-auto fw-semibold">
                Learn More <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
    
    <!-- Office Shifting -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 p-4 rounded-4 bg-white border shadow-sm d-flex flex-column">
            <div class="pm-city-srv-icon-wrap mb-3 overflow-hidden rounded-3">
                <img src="<?= base_url('assets/images/services_modules/office-relocation-services.webp') ?>" alt="Office Shifting in <?= htmlspecialchars($city) ?>" class="img-fluid w-100 object-fit-cover" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <h5 class="fw-bold text-dark mb-2">Office Relocation<br><small class="text-muted fs-7">in <?= htmlspecialchars($city) ?></small></h5>
            <p class="pm-city-srv-desc text-muted small flex-grow-1 mb-3">Systematic office moving with minimal downtime, handling workstations, servers, and official records.</p>
            <a href="<?= site_url('office-shifting-in-'.$ctlink) ?>" class="btn btn-outline-danger btn-sm rounded-pill mt-auto fw-semibold">
                Learn More <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
    
    <!-- Car Transport -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 p-4 rounded-4 bg-white border shadow-sm d-flex flex-column">
            <div class="pm-city-srv-icon-wrap mb-3 overflow-hidden rounded-3">
                <img src="<?= base_url('assets/images/services_modules/car-transportation-services.webp') ?>" alt="Car Shifting in <?= htmlspecialchars($city) ?>" class="img-fluid w-100 object-fit-cover" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <h5 class="fw-bold text-dark mb-2">Car Carrier Service<br><small class="text-muted fs-7">in <?= htmlspecialchars($city) ?></small></h5>
            <p class="pm-city-srv-desc text-muted small flex-grow-1 mb-3">Door-to-door car transport using enclosed auto carriers with hydraulic ramps and insurance.</p>
            <a href="<?= site_url('car-transport-in-'.$ctlink) ?>" class="btn btn-outline-danger btn-sm rounded-pill mt-auto fw-semibold">
                Learn More <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
    
    <!-- Bike Transport -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 p-4 rounded-4 bg-white border shadow-sm d-flex flex-column">
            <div class="pm-city-srv-icon-wrap mb-3 overflow-hidden rounded-3">
                <img src="<?= base_url('assets/images/services_modules/bike-transportation-services.webp') ?>" alt="Bike Shifting in <?= htmlspecialchars($city) ?>" class="img-fluid w-100 object-fit-cover" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <h5 class="fw-bold text-dark mb-2">Two-Wheeler Transport<br><small class="text-muted fs-7">in <?= htmlspecialchars($city) ?></small></h5>
            <p class="pm-city-srv-desc text-muted small flex-grow-1 mb-3">Scratch-free bike packaging and safe transport to any location from <?= htmlspecialchars($city) ?>.</p>
            <a href="<?= site_url('bike-transport-in-'.$ctlink) ?>" class="btn btn-outline-danger btn-sm rounded-pill mt-auto fw-semibold">
                Learn More <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>