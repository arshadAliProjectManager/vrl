<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic variables passed directly from Controller.php ($this->comp array)
$rating_num = (float) (isset($ratingValue) ? $ratingValue : '4.9');
$clients_raw = isset($happyClients) ? $happyClients : '19,850+';
$clients_num = (int) preg_replace('/\D+/', '', $clients_raw);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'CUSTOMER REVIEWS • VERIFIED TESTIMONIALS • 100% SATISFACTION',
    'bc_h1' => 'Customer Testimonials',
    'bc_desc' => 'Read authentic feedback and relocation reviews from over ' . $clients_num . '+ happy families and corporate clients across India.',
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- Main Testimonials Section -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- Flash Alert Notifications -->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 p-4 mb-4" role="alert">
        <div class="d-flex align-items-center gap-3">
          <i class="bi bi-check-circle-fill fs-2 text-success"></i>
          <div>
            <h5 class="fw-bold mb-1">Review Submitted Successfully!</h5>
            <p class="mb-0 small"><?= $this->session->flashdata('success') ?></p>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-warning alert-dismissible fade show border-0 shadow-sm rounded-4 p-4 mb-4" role="alert">
        <div class="d-flex align-items-center gap-3">
          <i class="bi bi-exclamation-triangle-fill fs-2 text-warning"></i>
          <div>
            <h5 class="fw-bold mb-1">Notice</h5>
            <p class="mb-0 small"><?= $this->session->flashdata('error') ?></p>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <!-- ============ HERO OVERVIEW CARD ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5 text-center">
      <div class="max-w-700 mx-auto">
        <span class="vrl-about-tag mb-2">
          <i class="bi bi-star-fill text-warning me-1"></i> VERIFIED REVIEWS
        </span>
        <h2 class="vrl-choose-heading mb-3">
          What Our Clients Say About <span class="vrl-about-highlight">Vince Roadline</span>
        </h2>
        <p class="vrl-about-prose text-muted mb-4">
          Real stories from homeowners, corporate executives, and vehicle owners who experienced zero-damage, stress-free shifting with Vince Roadline Packers and Movers.
        </p>

        <!-- Rating Score Capsule -->
        <div class="d-inline-flex align-items-center gap-3 bg-light border rounded-pill px-4 py-2 shadow-sm mb-2">
          <div class="d-flex align-items-center gap-1 text-warning fs-5">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span class="fw-extrabold text-dark fs-5 mb-0"><?= $rating_num ?> / 5.0</span>
          <span class="text-muted small">Based on <?= number_format($clients_num) ?>+ Moves</span>
        </div>
      </div>
    </div>

    <!-- ============ REVIEWS GRID ============ -->
    <div class="row g-4 mb-5" id="reviewsContainer">

      <!-- Testimonial 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Household Shifting</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“They took my concern seriously.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “I was worried about our TV and glass dining table more than anything else. I mentioned it once and didn't need to keep checking. Both were packed separately and reached safely. The team knew what they were doing.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">PA</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Priya Agarwal</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Household Shifting</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Car Transportation</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“The car arrived just as I handed it over.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “This was my first car transport, so I was a little nervous. I asked plenty of questions before booking. The staff explained things clearly, and most importantly, my car arrived safely and in good condition.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar bg-dark text-white">RT</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Rishab Thakur</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Car Transportation</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Corporate Relocation</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“Our office was ready for work again.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “We had computers, files, workstations and quite a lot of furniture to move. The team planned the work section by section instead of packing everything randomly. That made setting up the new office much easier.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">RR</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Rahul Reddy</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Corporate Relocation</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Local Shifting</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“Third floor and no lift!”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “I knew the refrigerator and sofa would be difficult because our old building had no lift. The workers checked the staircase first and didn't try to force anything through. It took some effort, but both came down without damage.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar bg-dark text-white">SK</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Sahil Khan</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Local Shifting</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Family Relocation</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“The packing was what impressed me.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “I've moved before, so I know how hurried packing can become. This time felt different. Crockery and decorative pieces got proper attention, and the fragile cartons were kept separately. Everything important reached safely.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">SS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Saurab Sen Gupta</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Family Relocation</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Interstate Move</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“They actually listened.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “We had an old wooden cabinet that belonged to my grandparents. I told the supervisor that it couldn't be treated like normal furniture. He understood immediately and asked the team to give it extra protection. That small thing meant a lot.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar bg-dark text-white">AG</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Aarti Gupta</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Interstate Move</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 7 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Residential Move</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“No unnecessary confusion.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “The thing I appreciated most was communication. I knew when the team would arrive, what they needed from us and how the shifting would happen. Moving day was busy, obviously, but we weren't left wondering what was going on.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">ES</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Esha Saha</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Residential Move</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimonial 8 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Bike Transportation</span>
            </div>

            <h5 class="fw-bold text-dark mb-2">“My bike reached safely.”</h5>
            <p class="vrl-about-prose text-dark mb-4">
              “I needed my bike shifted to another city after a job transfer. I was mainly concerned about scratches during transport. The process was explained beforehand, and the bike reached in good condition. Pretty straightforward experience.”
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar bg-dark text-white">PR</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Prity Rai</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Bike Transportation</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- ============ WRITE A REVIEW CTA CARD (OPEN REVIEW MODAL FROM REVIEWS MODULE) ============ -->
    <div class="vrl-review-form-card mb-5 p-4 p-md-5 rounded-4 shadow-sm position-relative overflow-hidden bg-white border" id="write-review-box">
      <!-- Top Red & Yellow Gradient Line -->
      <div class="vrl-review-gradient-line"></div>

      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 mb-2 fw-bold fs-8">SHARE YOUR FEEDBACK</span>
          <h3 class="fw-bold text-dark mb-1">Have You Used Our Relocation Services?</h3>
          <p class="text-muted mb-0">Help future families by sharing your moving experience with Vince Roadline Packers and Movers.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
          <button type="button" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold text-white shadow-sm d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#rvwmdl" data-toggle="modal" data-target="#rvwmdl">
            <i class="bi bi-pencil-square fs-5"></i> Write a Review
          </button>
        </div>
      </div>
    </div>

    <!-- ============ CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Experience Premium Relocation</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Join Over 50,000+ Satisfied Vince Roadline Customers</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our senior move manager for a free pre-move survey and customized discount estimate.</p>
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

<!-- Load Review Modal View from Reviews Module -->
<?php $this->load->view('reviews/reviewmodal'); ?>