<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'DATA PRIVACY • SECURITY • CONFIDENTIALITY',
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => 'Learn how Vince Roadline Packers and Movers protects your personal information, address records, and shipment data.',
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- Main Privacy Policy Section (Full Width Layout) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ POLICY HERO CARD ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5 text-center text-md-start">
      <div class="row align-items-center g-4">
        <div class="col-lg-9">
          <span class="vrl-about-tag mb-2">
            <i class="bi bi-shield-lock-fill me-1"></i> PRIVACY COMMITMENT
          </span>
          <h2 class="vrl-choose-heading mb-2">
            Privacy Policy &amp; Data Protection
          </h2>
          <p class="vrl-about-prose text-muted mb-0">
            At <strong><?= htmlspecialchars($company3) ?></strong>, we are committed to upholding your privacy and ensuring your personal contact details, move addresses, and shipment records remain completely secure.
          </p>
        </div>

        <div class="col-lg-3 text-center text-lg-end">
          <div class="p-3 rounded-4 bg-light border d-inline-block">
            <i class="bi bi-calendar-check text-danger fs-4 d-block mb-1"></i>
            <span class="small fw-bold text-dark d-block">Effective Date</span>
            <span class="small text-muted">January 2026</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ STRUCTURED POLICY CONTENT CARDS ============ -->
    <div class="max-w-900 mx-auto mb-5 d-flex flex-column gap-4">

      <!-- Section 1 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-person-vcard-fill"></i></div>
          1. Information We Collect
        </div>
        <div class="vrl-policy-text">
          When you request a quotation or book a relocation service with Vince Roadline Packers and Movers, we collect minimal necessary information to execute your move:
          <ul class="vrl-policy-list mt-2">
            <li><strong>Personal Contact Details:</strong> Name, phone number, email address.</li>
            <li><strong>Location Data:</strong> Origin pickup address, destination delivery address, floor elevation, and elevator access details.</li>
            <li><strong>Move Inventory Data:</strong> Item lists, vehicle registration details (for car/bike transport), and special packing requests.</li>
          </ul>
        </div>
      </div>

      <!-- Section 2 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-gear-wide-connected"></i></div>
          2. How We Use Your Information
        </div>
        <div class="vrl-policy-text">
          Your information is strictly used for legitimate logistics and customer service purposes:
          <ul class="vrl-policy-list mt-2">
            <li>Generating accurate written cost estimates and binding contracts.</li>
            <li>Dispatching packing crews, container trucks, and move supervisors to your location.</li>
            <li>Sending real-time GPS tracking links and milestone status SMS/WhatsApp updates.</li>
            <li>Processing transit insurance documentation for goods protection.</li>
          </ul>
        </div>
      </div>

      <!-- Section 3 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-lock-fill"></i></div>
          3. Data Protection &amp; Non-Disclosure
        </div>
        <div class="vrl-policy-text">
          We strictly enforce a <strong>Zero Third-Party Data Selling Policy</strong>. We do not sell, trade, or rent your personal contact details or home addresses to third-party telemarketers or marketing agencies. Your records are only accessible to authorized Vince Roadline move coordinators.
        </div>
      </div>

      <!-- Section 4 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-shield-check"></i></div>
          4. Security Infrastructure &amp; Cookies
        </div>
        <div class="vrl-policy-text">
          Our website uses standard SSL (Secure Sockets Layer) encryption technology to protect data transmitted during online quote requests. Cookies are used solely to improve website performance, retain user session preferences, and analyze anonymized site traffic metrics.
        </div>
      </div>

      <!-- Section 5 -->
      <div class="vrl-policy-card">
        <div class="vrl-policy-section-title">
          <div class="vrl-policy-icon"><i class="bi bi-envelope-at-fill"></i></div>
          5. Contact Privacy Officer
        </div>
        <div class="vrl-policy-text">
          If you have any questions or wish to update or remove your personal contact details from our records, please contact our Data Privacy Officer:
          <div class="p-3 mt-3 rounded-3 bg-light border d-flex align-items-center gap-3">
            <i class="bi bi-telephone-fill text-danger fs-4"></i>
            <div>
              <strong class="d-block text-dark"><?= htmlspecialchars($company3) ?> Privacy Helpline</strong>
              <a href="<?= $phonehtml ?>" class="text-danger fw-bold text-decoration-none"><?= htmlspecialchars($phone) ?></a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- ============ CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Safe &amp; Secure Relocation</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Trust Vince Roadline for 100% Confidential Shifting</h3>
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