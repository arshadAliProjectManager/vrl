<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'LIVE WORK VIDEOS • PACKING DEMOS • CARRIER LOADING IN ACTION',
    'bc_h1' => 'Video Gallery',
    'bc_desc' => 'Watch live field videos of our multi-layer bubble packing, hydraulic car carrier loading, and safe household relocation procedures at Vince Roadline.',
    'breadcrumbs' => [
        ['name' => 'Video Gallery']
    ]
]); 
?>

<!-- Main Video Gallery Section -->
<section class="vrl-gallery-section py-5">
  <div class="container">

    <!-- Section Header -->
    <div class="text-center mb-5">
      <span class="vrl-about-tag mb-2">
        <i class="bi bi-play-btn-fill me-1"></i> Live Operational Footage
      </span>
      <h2 class="vrl-about-title mb-2">
        Relocation &amp; Packing <span class="vrl-about-highlight">In Action</span>
      </h2>
      <p class="text-muted fs-6 mx-auto vrl-contact-subtitle-max">
        At Vince Roadline, we maintain 100% transparency. Watch our authentic video clips recorded live during real shifting operations across India.
      </p>
    </div>

    <!-- Video Grid Container -->
    <div class="row g-4 mb-5">

      <!-- ================= DYNAMIC DATABASE VIDEOS FROM ADMIN PANEL ================= -->
      <?php if (!empty($videos)): ?>
        <?php foreach ($videos as $video): ?>
          <?php
            $title = !empty($video->title) ? htmlspecialchars($video->title) : 'Vince Roadline Relocation Video';
            $video_url = $video->video_url ?? '';
          ?>
          <div class="col-lg-6 col-12">
            <div class="vrl-gallery-card">
              <div class="ratio ratio-16x9">
                <iframe src="<?= $video_url ?>" title="<?= $title ?>" allowfullscreen class="border-0"></iframe>
              </div>
              <div class="vrl-gallery-info">
                <div>
                  <h5 class="vrl-gallery-title"><?= $title ?></h5>
                  <span class="vrl-gallery-sub">
                    <i class="bi bi-shield-check text-danger me-1"></i> Authentic On-Site Footage
                  </span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <!-- ================= SHOWCASE RELOCATION OPERATIONAL VIDEOS ================= -->
      
      <!-- Video 1: Household Packing -->
      <div class="col-lg-6 col-12">
        <div class="vrl-gallery-card">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ" title="Household Furniture 5-Layer Packing Demo" allowfullscreen class="border-0"></iframe>
          </div>
          <div class="vrl-gallery-info">
            <div>
              <h5 class="vrl-gallery-title">Household Furniture 5-Layer Packing Demo</h5>
              <span class="vrl-gallery-sub"><i class="bi bi-shield-check text-danger me-1"></i> Live Bubble Wrap &amp; Cushion Guarding</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Video 2: Car Carrier Loading -->
      <div class="col-lg-6 col-12">
        <div class="vrl-gallery-card">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ" title="Hydraulic Ramp Car Loading &amp; Wheel Securing" allowfullscreen class="border-0"></iframe>
          </div>
          <div class="vrl-gallery-info">
            <div>
              <h5 class="vrl-gallery-title">Hydraulic Ramp Car Loading &amp; Wheel Securing</h5>
              <span class="vrl-gallery-sub"><i class="bi bi-shield-check text-danger me-1"></i> Enclosed Car Carrier Operations</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Quality Commitment Banner -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">100% Real Field Footage</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Want your goods shifted with zero hassle?</h3>
          <p class="text-white-50 mb-0 fs-6">All video clips shown are recorded on-site during actual shifting operations across India.</p>
        </div>

        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-flex flex-column flex-sm-row justify-content-lg-end gap-3">
            <a href="<?= $phonehtml ?>" class="btn vrl-about-cta-btn-call rounded-pill text-decoration-none d-inline-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-telephone-fill text-danger"></i> Call <?= htmlspecialchars($phone) ?>
            </a>
            <button type="button" class="btn vrl-about-cta-btn-quote rounded-pill d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator-fill"></i> Get Free Quote
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
