<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Testimonials Carousel Section -->
<div class="pm-tst-section mt-5 pt-4 border-top">

  <!-- Header Row: Heading Left, Prev/Next Controls Right -->
  <div class="d-flex align-items-end justify-content-between flex-wrap gap-3 mb-4 pb-2">
    
    <!-- Left: Heading & Rating Eyebrow -->
    <div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill pm-tst-eyebrow mb-2">
        <div class="pm-stars-gold small">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <span class="fw-bold text-dark fs-7">4.9 / 5.0</span>
        <span class="text-muted fs-7">(1,200+ Verified Moves)</span>
      </div>

      <h3 class="pm-tst-heading fw-bold text-dark mb-1">
        What Customers Say in <span class="pm-tst-accent-text"><?= htmlspecialchars($city) ?></span>
      </h3>
      <p class="text-muted small mb-0">Genuine reviews from recent home, office &amp; vehicle relocation clients</p>
    </div>

    <!-- Right: Prev & Next Arrow Controls -->
    <div class="d-flex align-items-center gap-2">
      <button class="pm-tst-nav-btn" type="button" data-bs-target="#cityTestimonialsCarousel" data-bs-slide="prev" aria-label="Previous Testimonial">
        <i class="bi bi-arrow-left"></i>
      </button>
      <button class="pm-tst-nav-btn" type="button" data-bs-target="#cityTestimonialsCarousel" data-bs-slide="next" aria-label="Next Testimonial">
        <i class="bi bi-arrow-right"></i>
      </button>
    </div>

  </div>

  <!-- Testimonials Swiper Carousel -->
  <div id="cityTestimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
    
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row g-3">
          
          <!-- Testimonial 1 (Visible on Desktop & Mobile) -->
          <div class="col-12 col-md-6">
            <div class="pm-tst-card p-4 rounded-4 position-relative h-100 d-flex flex-column">
              <i class="bi bi-quote pm-tst-watermark"></i>

              <div class="d-flex align-items-center justify-content-between mb-3 position-relative pm-tst-z2">
                <div class="review-stars text-warning fs-6">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="pm-tst-badge">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified Move
                </span>
              </div>

              <p class="pm-tst-quote-text mb-4 flex-grow-1 position-relative pm-tst-z2">
                "Shifted my 3BHK flat inside <?= htmlspecialchars($city) ?>. Their team arrived sharp at 8 AM and finished packing within 3 hours. Not a single scratch on my glass dining table!"
              </p>

              <div class="d-flex align-items-center justify-content-between pt-3 border-top position-relative pm-tst-z2">
                <div class="d-flex align-items-center gap-3">
                  <div class="pm-tst-avatar">RS</div>
                  <div>
                    <h6 class="fw-bold text-dark mb-0 fs-6">Rohit Sharma</h6>
                    <small class="text-muted fs-7"><?= htmlspecialchars($city) ?>, <?= htmlspecialchars($state) ?></small>
                  </div>
                </div>
                <span class="badge bg-light text-dark border fs-7">3BHK Flat Shift</span>
              </div>

            </div>
          </div>

          <!-- Testimonial 2 (Visible on Desktop only, Hidden on Mobile) -->
          <div class="col-12 col-md-6 d-none d-md-block">
            <div class="pm-tst-card p-4 rounded-4 position-relative h-100 d-flex flex-column">
              <i class="bi bi-quote pm-tst-watermark"></i>

              <div class="d-flex align-items-center justify-content-between mb-3 position-relative pm-tst-z2">
                <div class="review-stars text-warning fs-6">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="pm-tst-badge">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified Move
                </span>
              </div>

              <p class="pm-tst-quote-text mb-4 flex-grow-1 position-relative pm-tst-z2">
                "Relocated our IT office furniture and servers over the weekend in <?= htmlspecialchars($city) ?>. Excellent coordination with society security. Zero work interruption."
              </p>

              <div class="d-flex align-items-center justify-content-between pt-3 border-top position-relative pm-tst-z2">
                <div class="d-flex align-items-center gap-3">
                  <div class="pm-tst-avatar pm-tst-avatar-alt">AG</div>
                  <div>
                    <h6 class="fw-bold text-dark mb-0 fs-6">Ananya Gupta</h6>
                    <small class="text-muted fs-7"><?= htmlspecialchars($city) ?>, <?= htmlspecialchars($state) ?></small>
                  </div>
                </div>
                <span class="badge bg-light text-dark border fs-7">Corporate Office</span>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row g-3">
          
          <!-- Testimonial 3 (Visible on Desktop & Mobile) -->
          <div class="col-12 col-md-6">
            <div class="pm-tst-card p-4 rounded-4 position-relative h-100 d-flex flex-column">
              <i class="bi bi-quote pm-tst-watermark"></i>

              <div class="d-flex align-items-center justify-content-between mb-3 position-relative pm-tst-z2">
                <div class="review-stars text-warning fs-6">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="pm-tst-badge">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified Move
                </span>
              </div>

              <p class="pm-tst-quote-text mb-4 flex-grow-1 position-relative pm-tst-z2">
                "Booked them for bike transportation from <?= htmlspecialchars($city) ?>. They used thick corrugated sheets and bubble wrap. Bike was delivered in pristine condition."
              </p>

              <div class="d-flex align-items-center justify-content-between pt-3 border-top position-relative pm-tst-z2">
                <div class="d-flex align-items-center gap-3">
                  <div class="pm-tst-avatar">SV</div>
                  <div>
                    <h6 class="fw-bold text-dark mb-0 fs-6">Sandeep Verma</h6>
                    <small class="text-muted fs-7"><?= htmlspecialchars($city) ?>, <?= htmlspecialchars($state) ?></small>
                  </div>
                </div>
                <span class="badge bg-light text-dark border fs-7">Bike Transport</span>
              </div>

            </div>
          </div>

          <!-- Testimonial 4 (Visible on Desktop only, Hidden on Mobile) -->
          <div class="col-12 col-md-6 d-none d-md-block">
            <div class="pm-tst-card p-4 rounded-4 position-relative h-100 d-flex flex-column">
              <i class="bi bi-quote pm-tst-watermark"></i>

              <div class="d-flex align-items-center justify-content-between mb-3 position-relative pm-tst-z2">
                <div class="review-stars text-warning fs-6">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="pm-tst-badge">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified Move
                </span>
              </div>

              <p class="pm-tst-quote-text mb-4 flex-grow-1 position-relative pm-tst-z2">
                "Very honest pricing with no hidden charges. Quotation given before booking matched final bill to the rupee. Highly recommended packers in <?= htmlspecialchars($city) ?>!"
              </p>

              <div class="d-flex align-items-center justify-content-between pt-3 border-top position-relative pm-tst-z2">
                <div class="d-flex align-items-center gap-3">
                  <div class="pm-tst-avatar pm-tst-avatar-alt">PN</div>
                  <div>
                    <h6 class="fw-bold text-dark mb-0 fs-6">Priya Nair</h6>
                    <small class="text-muted fs-7"><?= htmlspecialchars($city) ?>, <?= htmlspecialchars($state) ?></small>
                  </div>
                </div>
                <span class="badge bg-light text-dark border fs-7">2BHK Relocation</span>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Carousel Indicators -->
    <div class="carousel-indicators position-relative mt-4 mb-0">
      <button type="button" data-bs-target="#cityTestimonialsCarousel" data-bs-slide-to="0" class="active pm-tst-dot" aria-current="true" aria-label="Review Slide 1"></button>
      <button type="button" data-bs-target="#cityTestimonialsCarousel" data-bs-slide-to="1" class="pm-tst-dot" aria-label="Review Slide 2"></button>
    </div>

  </div>

</div>