<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="pm-city-sidebar d-flex flex-column gap-4">

  <!-- Widget 1: Premium Logo-Themed Shifting Rate Card -->
  <div class="pm-rate-guide-card">
    
    <!-- Dark & Crimson Gradient Header -->
    <div class="pm-rate-guide-header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-2">
        <i class="bi bi-tag-fill text-warning fs-5"></i>
        <div>
          <h5 class="fw-bold mb-0 text-white fs-6"><?= htmlspecialchars($city) ?> Rate Guide</h5>
          <span class="text-white-50 fs-7">Standard Relocation Charges</span>
        </div>
      </div>
      <span class="badge bg-warning text-dark fw-bold px-2.5 py-1 rounded-pill fs-7">Verified</span>
    </div>

    <div class="p-4 d-flex flex-column gap-3">
      <!-- Item 1 -->
      <div class="pm-rate-item-box d-flex align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-3">
          <div class="pm-rate-item-icon">
            <i class="bi bi-house-door-fill"></i>
          </div>
          <div>
            <strong class="d-block text-dark small">1 BHK Household</strong>
            <span class="text-muted fs-7">Local shifting in <?= htmlspecialchars($city) ?></span>
          </div>
        </div>
        <div class="pm-rate-price-tag">
          ₹3,500 - ₹6,500
        </div>
      </div>

      <!-- Item 2 -->
      <div class="pm-rate-item-box d-flex align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-3">
          <div class="pm-rate-item-icon">
            <i class="bi bi-houses-fill"></i>
          </div>
          <div>
            <strong class="d-block text-dark small">2 - 3 BHK Home</strong>
            <span class="text-muted fs-7">Full family relocation</span>
          </div>
        </div>
        <div class="pm-rate-price-tag">
          ₹7,500 - ₹14,000
        </div>
      </div>

      <!-- Item 3 -->
      <div class="pm-rate-item-box d-flex align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-3">
          <div class="pm-rate-item-icon">
            <i class="bi bi-truck-front-fill"></i>
          </div>
          <div>
            <strong class="d-block text-dark small">Car / Bike Transport</strong>
            <span class="text-muted fs-7">Enclosed vehicle carriers</span>
          </div>
        </div>
        <div class="pm-rate-price-tag">
          ₹2,500 - ₹9,000
        </div>
      </div>

      <button type="button" class="btn pm-rate-cta-btn w-100 border-0 d-flex align-items-center justify-content-center gap-2 mt-1" data-bs-toggle="modal" data-bs-target="#qteModal">
        <i class="bi bi-calculator-fill text-warning"></i> Get Exact Price Quote
      </button>
    </div>
  </div>

  <!-- Widget 2: Vince Roadline Brand Guarantee Card -->
  <div class="pm-sidebar-widget p-4 rounded-4 bg-white border shadow-sm">
    <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom">
      <i class="bi bi-shield-check text-danger fs-4"></i>
      <h5 class="fw-bold text-dark mb-0 fs-6">Vince Roadline Guarantee</h5>
    </div>

    <div class="d-flex flex-column gap-3">
      <div class="d-flex align-items-start gap-3">
        <i class="bi bi-patch-check-fill text-danger fs-5 flex-shrink-0 mt-1"></i>
        <div>
          <strong class="d-block text-dark small">Government Licensed &amp; Insured</strong>
          <span class="text-muted fs-7">100% safe move with zero risk of loss or damage.</span>
        </div>
      </div>

      <div class="d-flex align-items-start gap-3">
        <i class="bi bi-box-seam-fill text-danger fs-5 flex-shrink-0 mt-1"></i>
        <div>
          <strong class="d-block text-dark small">3-Layer Bubble Cushion Packing</strong>
          <span class="text-muted fs-7">Specialized packing for glass, electronics &amp; furniture.</span>
        </div>
      </div>

      <div class="d-flex align-items-start gap-3">
        <i class="bi bi-truck text-danger fs-5 flex-shrink-0 mt-1"></i>
        <div>
          <strong class="d-block text-dark small">Dedicated Container Trucks</strong>
          <span class="text-muted fs-7">Waterproof enclosed vehicles with live GPS tracking.</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Widget 3: High-Impact Black & Crimson Animated Live Support Card -->
  <div class="pm-sidebar-live-card p-4 p-md-4.5 rounded-4 text-center position-relative overflow-hidden shadow-lg">
    <!-- Radial Gold Glow Overlay -->
    <div class="pm-live-card-glow"></div>
    
    <!-- Top Live Status Pill -->
    <div class="d-inline-flex align-items-center gap-2 bg-black bg-opacity-60 border border-warning border-opacity-25 text-white rounded-pill px-3.5 py-1.5 fs-7 mb-3 shadow-sm">
      <span class="pm-live-dot"></span>
      <span class="fw-bold text-warning pm-helpline-tag-text">24x7 Live Helpline</span>
    </div>

    <h5 class="fw-bold text-white mb-2 fs-6">Need Immediate Shifting Help?</h5>
    <p class="text-white small mb-4 pm-live-card-desc">Speak directly with our senior move manager for instant bookings or custom discounts in <strong><?= htmlspecialchars($city) ?></strong>.</p>

    <div class="d-grid gap-3 position-relative z-2">
      <a href="<?= $phonehtml ?>" class="btn pm-live-call-btn rounded-pill py-3 fw-bold text-decoration-none d-flex align-items-center justify-content-center gap-2">
        <i class="bi bi-telephone-fill pm-phone-ring-icon text-danger"></i> Call <?= htmlspecialchars($phone) ?>
      </a>
      <a href="https://api.whatsapp.com/send?phone=919992771352&text=Hi,%20I%20need%20packers%20and%20movers%20in%20<?= urlencode($city) ?>" target="_blank" class="btn pm-live-wa-btn rounded-pill py-3 fw-bold text-decoration-none d-flex align-items-center justify-content-center gap-2">
        <i class="bi bi-whatsapp pm-wa-icon fs-5"></i> Chat on WhatsApp
      </a>
    </div>
  </div>

</aside>
