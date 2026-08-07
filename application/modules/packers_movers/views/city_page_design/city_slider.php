<?php
$phone = isset($phone) ? $phone : '+91 9996340820';
$phonehtml = isset($phonehtml) ? $phonehtml : 'tel:' . preg_replace('/\D+/', '', (string)$phone);
$slider_bg_url = base_url('assets/images/slider/slider.jpg');
?>

<section class="pm-city-slider home-page-slider" style="background-image: url('<?= $slider_bg_url ?>');" itemscope itemtype="https://schema.org/WPHeader">
  <div class="vrl-dot-pattern"></div>

  <div class="home-page-slider-content">
    <div class="container position-relative">

      <!-- Breadcrumb Navigation -->
      <div class="row mb-3">
        <div class="col-12">
          <nav class="bc-nav pm-city-slider-nav">
            <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill me-1 text-warning"></i>Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <span class="bc"><?= $state ?></span>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $city ?></span>
          </nav>
        </div>
      </div>

      <!-- Hero Header & Info Row -->
      <div class="row align-items-end pb-4 pb-lg-5">
        <div class="col-lg-8 col-xl-8 text-start hero-text-col position-relative ps-lg-4">
          
          <div class="vrl-hero-eyebrow mb-3" itemprop="headline">
            INDIA'S TRUSTED RELOCATION PARTNER
          </div>

          <h1 class="vrl-hero-title mb-3" itemprop="name">
            <span class="text-white">Best Packers and Movers in</span>
            <span class="vrl-text-yellow ms-2"><?= $city ?></span>
            <span class="vrl-location-pin-wrap ms-2">
              <svg class="vrl-route-curve" width="70" height="30" viewBox="0 0 70 30" fill="none">
                <path d="M5 25 C 18 25, 22 6, 38 10 C 50 14, 48 24, 60 16 C 65 12, 67 6, 69 3" stroke="rgba(255,255,255,0.7)" stroke-width="2" stroke-dasharray="3 3" fill="none"/>
              </svg>
              <i class="bi bi-geo-alt-fill vrl-pin-icon"></i>
            </span>
          </h1>

          <p class="vrl-hero-subtitle mb-4" itemprop="description">
            Best movers &amp; packers in <?= htmlspecialchars($city) ?>. Safe, affordable, and reliable packing, moving and storage services. Get your free quote now.
          </p>

          <!-- Key Features Pills -->
          <div class="vrl-hero-features d-flex align-items-center flex-wrap mb-4">
            <div class="vrl-feature-item">
              <div class="vrl-feature-ring"><i class="bi bi-shield-check"></i></div>
              <span>Safe &amp;<br>Secure</span>
            </div>
            <div class="vrl-feature-divider"></div>
            <div class="vrl-feature-item">
              <div class="vrl-feature-ring"><i class="bi bi-people-fill"></i></div>
              <span>Experienced<br>Team</span>
            </div>
            <div class="vrl-feature-divider"></div>
            <div class="vrl-feature-item">
              <div class="vrl-feature-ring"><i class="bi bi-truck"></i></div>
              <span>On-time<br>Delivery</span>
            </div>
          </div>

          <!-- Call Capsule & Testimonial Card -->
          <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 gap-lg-4 mt-3">
            
            <div class="vrl-hero-call-capsule d-inline-flex align-items-center flex-shrink-0">
              <div class="vrl-hero-call-icon-circle flex-shrink-0">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <span class="vrl-hero-call-text ms-2">Call Now</span>
              <a href="<?= $phonehtml ?>" class="vrl-hero-call-badge ms-2"><?= $phone ?></a>
            </div>

            <div class="vrl-hero-testimonial-card">
              <div class="vrl-stars mb-1">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <p class="vrl-testimonial-text mb-2 text-white fw-medium">
                "The team was professional, on-time and handled everything with care in <?= htmlspecialchars($city) ?>."
              </p>
              <div class="d-flex align-items-center gap-2">
                <div class="vrl-avatar-initial">R</div>
                <span class="vrl-testimonial-name text-white fw-bold">— Rajesh Verma</span>
              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- Quote Form Card -->
      <div class="row mt-3">
        <div class="col-12">
          <?php $this->load->view('contacts/quoteform.php') ?>
        </div>
      </div>

    </div>
  </div>
</section>