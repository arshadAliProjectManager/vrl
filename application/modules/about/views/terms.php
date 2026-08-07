<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'TERMS OF SERVICE • TRANSPARENT CONTRACT • POLICIES',
    'bc_h1' => 'Terms & Conditions',
    'bc_desc' => 'Read the operational terms, service conditions, payment guidelines, transit insurance rules, and cancellation policies of Vince Roadline Packers and Movers.',
    'breadcrumbs' => [
        ['name' => 'Terms & Conditions']
    ]
]);
?>

<!-- Main Terms & Conditions Section (Full Width Layout) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ TERMS HERO CARD ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5 text-center text-md-start">
      <div class="row align-items-center g-4">
        <div class="col-lg-9">
          <span class="vrl-about-tag mb-2">
            <i class="bi bi-file-earmark-text-fill me-1"></i> SERVICE AGREEMENT
          </span>
          <h2 class="vrl-choose-heading mb-2">
            Terms &amp; Conditions of Relocation
          </h2>
          <p class="vrl-about-prose text-muted mb-0">
            Welcome to <strong><?= htmlspecialchars($company3) ?></strong>. By booking a household shifting, corporate move, or vehicle transportation service with us, you agree to the transparent terms and operational conditions outlined below.
          </p>
        </div>

        <div class="col-lg-3 text-center text-lg-end">
          <div class="p-3 rounded-4 bg-light border d-inline-block">
            <i class="bi bi-patch-check-fill text-danger fs-4 d-block mb-1"></i>
            <span class="small fw-bold text-dark d-block">Effective Date</span>
            <span class="small text-muted">January 2026</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ STRUCTURED TERMS CONTENT CARDS ============ -->
    <div class="max-w-900 mx-auto mb-5 d-flex flex-column gap-4">

      <!-- Section 1 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-truck-front-fill"></i></div>
          1. Scope of Relocation Services
        </div>
        <div class="vrl-policy-text">
          Vince Roadline provides end-to-end door-to-door relocation services, including inventory packing, loading, enclosed container transportation, unloading, unpacking, and basic furniture placement at the destination address specified in the written order.
        </div>
      </div>

      <!-- Section 2 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-receipt"></i></div>
          2. Quotation, Payments &amp; Deposit
        </div>
        <div class="vrl-policy-text">
          <ul class="vrl-policy-list">
            <li>All quotations are provided in writing after a physical or virtual inventory assessment.</li>
            <li>A booking advance is payable upon order confirmation to reserve trucks and packing crews.</li>
            <li>The remaining balance is payable upon loading completion at origin or before final unloading at the destination.</li>
            <li>We guarantee zero post-move hidden fees, toll surprises, or unannounced labor surcharges.</li>
          </ul>
        </div>
      </div>

      <!-- Section 3 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
          3. Restricted &amp; Prohibited Items
        </div>
        <div class="vrl-policy-text">
          For safety and legal compliance, Vince Roadline strictly prohibits the transport of:
          <ul class="vrl-policy-list mt-2">
            <li>Flammable liquids, gas cylinders, fireworks, and hazardous chemicals.</li>
            <li>Perishable food items, plants, and live animals/pets.</li>
            <li>Cash, jewelry, original property deeds, passports, and high-value negotiable instruments (customers must carry these personally).</li>
          </ul>
        </div>
      </div>

      <!-- Section 4 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-shield-check"></i></div>
          4. Transit Insurance &amp; Damage Claims
        </div>
        <div class="vrl-policy-text">
          <ul class="vrl-policy-list">
            <li>Optional or mandatory transit insurance covers declared items against road accidents, fire, or overturning during transit.</li>
            <li>Any visible damage must be noted on the consignment copy during unloading and reported to your Move Manager within <strong>48 hours</strong> of delivery.</li>
          </ul>
        </div>
      </div>

      <!-- Section 5 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-arrow-counterclockwise"></i></div>
          5. Cancellation &amp; Rescheduling Policy
        </div>
        <div class="vrl-policy-text">
          We offer flexible scheduling options for our customers:
          <ul class="vrl-policy-list mt-2">
            <li><strong>Rescheduling:</strong> Free date changes when requested at least 24 hours before the scheduled packing time.</li>
            <li><strong>Cancellation:</strong> Full refund of booking advance if cancelled 48 hours prior to move date.</li>
          </ul>
        </div>
      </div>

    </div>

    <!-- ============ CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Have Questions About Our Terms?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Our Relocation Managers Are Here to Assist You</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our team for clear explanations on insurance, quotation terms, and booking guidelines.</p>
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