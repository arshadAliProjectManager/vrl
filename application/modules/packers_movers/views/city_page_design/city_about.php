<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>

<section class="pm-city-details-section py-5">
  <div class="container">
    
    <!-- ============ SECTION 1: FULL-WIDTH (col-12) ABOUT SECTION WITH SWAPPABLE IMAGE SLIDER ============ -->
    <div class="pm-city-about-full-card p-4 p-md-5 rounded-4 shadow-sm bg-white border mb-5">
      <div class="row g-4 align-items-center">

        <!-- Left col-lg-6: About Content -->
        <div class="col-lg-6">
          <div class="pm-city-section-header mb-3">
            <span class="pm-city-tag mb-2 d-inline-block"><i class="bi bi-award-fill me-1"></i> TOP RATED RELOCATION</span>
            <h2 class="pm-city-section-title fw-bold">
              Our safe Home and Office Shifting by VRL Packers and Movers
            </h2>
          </div>

          <div class="city-prose">
            <?php echo $htmlcontent; ?>  
          </div>

          <!-- Clean Action Buttons Pair -->
          <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
            <a href="<?= $phonehtml ?>" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow">
              <i class="bi bi-telephone-fill"></i> Call <?= htmlspecialchars($phone) ?>
            </a>
            <button type="button" class="btn btn-warning btn-lg rounded-pill px-4 py-3 fw-bold text-dark d-inline-flex align-items-center gap-2 border-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator-fill"></i> Get Free Quote
            </button>
          </div>

        </div>

        <!-- Right col-lg-6: Swappable Image Carousel / Slider -->
        <div class="col-lg-6">
          <div class="pm-city-about-slider-wrapper position-relative rounded-4 overflow-hidden shadow-sm border">
            
            <div id="aboutCityImageCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
              
              <!-- Carousel Indicators -->
              <div class="carousel-indicators mb-3">
                <button type="button" data-bs-target="#aboutCityImageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#aboutCityImageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#aboutCityImageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#aboutCityImageCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>

              <!-- Carousel Slides -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url('assets/images/services_modules/relocation_packing_team.jpg') ?>" class="d-block w-100 pm-about-slide-img" alt="Relocation Team in <?= htmlspecialchars($city) ?>" loading="lazy">
                  <div class="carousel-caption pm-about-slide-caption text-start p-3 rounded-3">
                    <span class="badge bg-danger mb-1">Expert Packing</span>
                    <h6 class="mb-0 text-white fw-bold">Multi-Layer Protective Packaging in <?= htmlspecialchars($city) ?></h6>
                  </div>
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/services_modules/home.jpg') ?>" class="d-block w-100 pm-about-slide-img" alt="Home Shifting in <?= htmlspecialchars($city) ?>" loading="lazy">
                  <div class="carousel-caption pm-about-slide-caption text-start p-3 rounded-3">
                    <span class="badge bg-warning text-dark mb-1">Household Moving</span>
                    <h6 class="mb-0 text-white fw-bold">Safe Local &amp; Interstate Relocation</h6>
                  </div>
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/services_modules/packing_unpacking.jpg') ?>" class="d-block w-100 pm-about-slide-img" alt="Packing Services in <?= htmlspecialchars($city) ?>" loading="lazy">
                  <div class="carousel-caption pm-about-slide-caption text-start p-3 rounded-3">
                    <span class="badge bg-danger mb-1">Careful Handling</span>
                    <h6 class="mb-0 text-white fw-bold">Special Care for Delicate &amp; Furniture Items</h6>
                  </div>
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/services_modules/loading_unloading.jpg') ?>" class="d-block w-100 pm-about-slide-img" alt="Loading Services in <?= htmlspecialchars($city) ?>" loading="lazy">
                  <div class="carousel-caption pm-about-slide-caption text-start p-3 rounded-3">
                    <span class="badge bg-success mb-1">Enclosed Fleet</span>
                    <h6 class="mb-0 text-white fw-bold">Weatherproof Container Trucks</h6>
                  </div>
                </div>
              </div>

              <!-- Prev / Next Controls -->
              <button class="carousel-control-prev pm-about-carousel-btn" type="button" data-bs-target="#aboutCityImageCarousel" data-bs-slide="prev">
                <span class="pm-carousel-icon"><i class="bi bi-chevron-left"></i></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next pm-about-carousel-btn" type="button" data-bs-target="#aboutCityImageCarousel" data-bs-slide="next">
                <span class="pm-carousel-icon"><i class="bi bi-chevron-right"></i></span>
                <span class="visually-hidden">Next</span>
              </button>

            </div>

            <!-- Floating Badge Overlay -->
            <div class="pm-about-badge-overlay">
              <i class="bi bi-shield-check text-warning me-1"></i> Verified Movers in <?= htmlspecialchars($city) ?>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- ============ SECTION 2: PROCESS & SIDEBAR LAYOUT ============ -->
    <div class="row g-4">

      <!-- LEFT: PROCESS, CHECKLIST, REVIEWS & FAQ (col-lg-8) -->
      <div class="col-lg-8">
        
        <div class="pm-city-main-card p-4 p-md-5 rounded-4 shadow-sm bg-white border">
          
          <?php echo $htmlcontent1; ?>   
          <?php echo $htmlcontent2; ?>      
          
          <!-- Map Section -->
          <div class="pm-city-map-wrapper my-4">
            <?php include 'city_map.php'; ?>
          </div>
          <?php echo $htmlcontent3; ?>   

          <!-- Swappable Testimonials Section -->
          <?php include 'city_reviews.php'; ?>

          <!-- FAQ Section -->
          <?php include 'city_faq.php'; ?>

        </div>

      </div><!-- /col-lg-8 -->

      <!-- RIGHT: REDESIGNED SIDEBAR (col-lg-4) -->
      <div class="col-lg-4">
        <div class="sticky-lg-top pm-sidebar-sticky">
          <?php include 'city_siderbar.php'; ?>
        </div>
      </div><!-- /col-lg-4 -->

    </div><!-- /row -->

    <!-- Services Cards Matrix Grid -->
   <!--- <div class="mt-5">
      <?php //include 'city_service.php'; ?>
    </div>-->

  </div><!-- /container -->
</section>
