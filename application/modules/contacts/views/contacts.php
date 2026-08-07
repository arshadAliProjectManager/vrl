<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => '24/7 SUPPORT • HEAD OFFICE & BRANCH LOCATIONS • INSTANT QUOTE',
    'bc_h1' => 'Contact Vince Roadline',
    'bc_desc' => 'Get in touch with India\'s trusted relocation experts. Visit our offices in Haryana & Bengaluru, call our 24/7 helpline, or send us a message for a free shifting quote.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Main Contact Section -->
<section class="contact-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: TWO OFFICE ADDRESS CARDS (HEAD OFFICE & BRANCH OFFICE) ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2"><i class="bi bi-geo-alt-fill me-1"></i> Our Locations</span>
        <h2 class="vrl-about-title mb-2">Visit Our <span class="vrl-about-highlight">Head Office &amp; Branch Office</span></h2>
        <p class="text-muted fs-6 mx-auto vrl-contact-subtitle-max">We operate corporate hubs in Haryana and Karnataka to serve customers across North &amp; South India.</p>
      </div>

      <div class="row g-4">

        <!-- CARD 1: HEAD OFFICE (HARYANA) -->
        <div class="col-lg-6">
          <div class="vrl-contact-office-card d-flex flex-column justify-content-between">
            <div>
              <!-- Card Header Badge & City -->
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-3">
                  <div class="vrl-contact-icon-box">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <div>
                    <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 fw-bold fs-8 mb-1">HEAD OFFICE</span>
                    <h4 class="fw-bold text-dark mb-0 fs-5">Adampur, Haryana</h4>
                  </div>
                </div>
                <i class="bi bi-patch-check-fill text-danger fs-4"></i>
              </div>

              <!-- Company Name Block -->
              <div class="mb-3 d-flex align-items-center justify-content-between">
                <span class="small text-muted fw-bold text-uppercase fs-8"><i class="bi bi-building-check text-danger me-1"></i> Company:</span>
                <span class="vrl-office-comp-pill"><?= htmlspecialchars($company3) ?></span>
              </div>

              <!-- Full Postal Address Block -->
              <div class="vrl-office-address-block mb-3">
                <small class="text-danger fw-bold text-uppercase fs-8 d-block mb-1">
                  <i class="bi bi-geo-alt-fill me-1"></i> Full Postal Address
                </small>
                <p class="text-dark fw-medium fs-6 mb-0 leading-relaxed">
                  <?= htmlspecialchars($address) ?>
                </p>
              </div>

              <!-- Location Metadata Badges -->
              <div class="d-flex flex-wrap gap-2 mb-3">
                <span class="vrl-office-meta-pill">
                  <i class="bi bi-pin-map-fill text-danger me-1"></i> Region: <?= $addressRegion ?>
                </span>
                <span class="vrl-office-meta-pill">
                  <i class="bi bi-mailbox text-danger me-1"></i> Pincode: <?= $postalCode ?>
                </span>
                <span class="vrl-office-meta-pill">
                  <i class="bi bi-flag-fill text-danger me-1"></i> State: <?= $companystate ?>
                </span>
              </div>
            </div>

            <!-- Direct Quick Contact Bar -->
            <div class="pt-3 border-top d-flex align-items-center justify-content-between">
              <a href="<?= $phonehtml ?>" class="vrl-office-link-call">
                <i class="bi bi-telephone-fill me-1"></i> Call Adampur Office
              </a>
            </div>

          </div>
        </div>

        <!-- CARD 2: BRANCH OFFICE (BENGALURU, KARNATAKA) -->
        <div class="col-lg-6">
          <div class="vrl-contact-office-card d-flex flex-column justify-content-between">
            <div>
              <!-- Card Header Badge & City -->
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-3">
                  <div class="vrl-contact-icon-box">
                    <i class="bi bi-building"></i>
                  </div>
                  <div>
                    <span class="badge bg-warning text-dark rounded-pill px-3 py-1.5 fw-bold fs-8 mb-1">BRANCH OFFICE</span>
                    <h4 class="fw-bold text-dark mb-0 fs-5">Bengaluru, Karnataka</h4>
                  </div>
                </div>
                <i class="bi bi-patch-check-fill text-warning fs-4"></i>
              </div>

              <!-- Company Name Block -->
              <div class="mb-3 d-flex align-items-center justify-content-between">
                <span class="small text-muted fw-bold text-uppercase fs-8"><i class="bi bi-building-check text-danger me-1"></i> Company:</span>
                <span class="vrl-office-comp-pill"><?= htmlspecialchars($company3) ?></span>
              </div>

              <!-- Full Postal Address Block -->
              <div class="vrl-office-address-block vrl-branch-border mb-3">
                <small class="text-warning fw-bold text-uppercase fs-8 d-block mb-1">
                  <i class="bi bi-geo-alt-fill me-1"></i> Full Postal Address
                </small>
                <p class="text-dark fw-medium fs-6 mb-0 leading-relaxed">
                  <?= htmlspecialchars($branchAddress) ?>
                </p>
              </div>

              <!-- Location Metadata Badges -->
              <div class="d-flex flex-wrap gap-2 mb-3">
                <span class="vrl-office-meta-pill">
                  <i class="bi bi-pin-map-fill text-warning me-1"></i> Region: <?= $branchAddressRegion ?>
                </span>
                <span class="vrl-office-meta-pill">
                  <i class="bi bi-mailbox text-warning me-1"></i> Pincode: <?= $branchPostalCode ?>
                </span>
                <span class="vrl-office-meta-pill">
                  <i class="bi bi-flag-fill text-warning me-1"></i> State: <?= $branchState ?>
                </span>
              </div>
            </div>

            <!-- Direct Quick Contact Bar -->
            <div class="pt-3 border-top d-flex align-items-center justify-content-between">
              <a href="<?= $phonehtml ?>" class="vrl-office-link-call">
                <i class="bi bi-telephone-fill me-1"></i> Call Bengaluru Branch
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- ============ SECTION 2: CLEAN LIGHT CONTACT CHANNELS & MESSAGE FORM ============ -->
    <div class="row g-4 g-lg-5 mb-5">

      <!-- Left Column: Clean Light Communication Channels Card -->
      <div class="col-lg-5">
        <div class="vrl-contact-light-card d-flex flex-column justify-content-between">
          <div>
            <div class="mb-4">
              <span class="vrl-about-tag mb-2">
                <i class="bi bi-headset me-1"></i> 24/7 HELPLINE &amp; CHAT
              </span>
              <h3 class="fw-bold text-dark mb-2 fs-4">Fast Communication Channels</h3>
              <p class="text-muted small mb-0">Reach our senior relocation advisors directly through phone, WhatsApp, or email.</p>
            </div>

            <div class="d-flex flex-column gap-3 mb-4">

              <!-- Channel 1: Phone -->
              <a href="<?= $phonehtml ?>" class="vrl-contact-clean-channel d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                  <div class="vrl-clean-icon">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div>
                    <small class="text-muted fw-bold text-uppercase fs-8 d-block">24/7 Toll-Free Helpline</small>
                    <span class="fw-bold text-dark fs-6 d-block"><?= htmlspecialchars($phone) ?></span>
                  </div>
                </div>
                <div class="vrl-channel-arrow">
                  <i class="bi bi-arrow-right"></i>
                </div>
              </a>

              <!-- Channel 2: WhatsApp -->
              <?php if (!empty($whatsapphtml)): ?>
              <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="vrl-contact-clean-channel d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                  <div class="vrl-clean-icon vrl-clean-icon-whatsapp">
                    <i class="bi bi-whatsapp"></i>
                  </div>
                  <div>
                    <small class="text-muted fw-bold text-uppercase fs-8 d-block">Instant WhatsApp Support</small>
                    <span class="fw-bold text-success fs-6 d-block">Chat on WhatsApp</span>
                  </div>
                </div>
                <div class="vrl-channel-arrow vrl-channel-arrow-whatsapp">
                  <i class="bi bi-arrow-right"></i>
                </div>
              </a>
              <?php endif; ?>

              <!-- Channel 3: Email -->
              <a href="<?= $mailhtml ?>" class="vrl-contact-clean-channel d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                  <div class="vrl-clean-icon">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div>
                    <small class="text-muted fw-bold text-uppercase fs-8 d-block">Official Email Support</small>
                    <span class="fw-bold text-dark fs-6 d-block"><?= htmlspecialchars($mail) ?></span>
                  </div>
                </div>
                <div class="vrl-channel-arrow">
                  <i class="bi bi-arrow-right"></i>
                </div>
              </a>

              <!-- Channel 4: Working Hours -->
              <div class="vrl-contact-clean-channel d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">
                  <div class="vrl-clean-icon">
                    <i class="bi bi-clock-history"></i>
                  </div>
                  <div>
                    <small class="text-muted fw-bold text-uppercase fs-8 d-block">Operating Hours</small>
                    <span class="fw-bold text-dark fs-6 d-block">Monday - Sunday: Open 24/7 (365 Days)</span>
                  </div>
                </div>
                <div class="vrl-channel-arrow">
                  <i class="bi bi-check-lg text-success"></i>
                </div>
              </div>

            </div>
          </div>

          <div class="pt-3 border-top text-muted small d-flex align-items-center gap-2">
            <i class="bi bi-shield-check text-danger fs-5"></i>
            <span>Verified 24/7 Customer Support &amp; Pre-Move Assistance</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Premium Form Card with Stylish Input Addons -->
      <div class="col-lg-7">
        <div class="vrl-contact-form-card">
          <div class="vrl-form-header-bar mb-4">
            <span class="vrl-about-tag mb-1"><i class="bi bi-send-fill me-1"></i> Fast Inquiry</span>
            <h3 class="fw-bold text-dark mb-1 fs-3">Send Us A Message</h3>
            <p class="text-muted small mb-0">Fill in your move details below, and our team will provide a free instant shifting estimate.</p>
          </div>

          <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
            <div class="row g-3">
              <!-- Full Name -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Your Full Name <span class="text-danger">*</span></label>
                <div class="vrl-input-group-stylish">
                  <div class="vrl-input-addon">
                    <i class="bi bi-person-fill"></i>
                  </div>
                  <input type="text" name="name" class="vrl-input-field" placeholder="e.g. Rahul Sharma" required>
                </div>
              </div>

              <!-- Phone Number -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Phone / Mobile Number <span class="text-danger">*</span></label>
                <div class="vrl-input-group-stylish">
                  <div class="vrl-input-addon">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <input type="tel" name="phone" class="vrl-input-field" placeholder="e.g. 9876543210" required>
                </div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Email Address</label>
                <div class="vrl-input-group-stylish">
                  <div class="vrl-input-addon">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <input type="email" name="email" class="vrl-input-field" placeholder="e.g. rahul@example.com">
                </div>
              </div>

              <!-- Required Service -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Required Service</label>
                <div class="vrl-input-group-stylish">
                  <div class="vrl-input-addon">
                    <i class="bi bi-truck-front-fill"></i>
                  </div>
                  <select name="service" class="vrl-input-field form-select border-0">
                    <option value="Home Shifting">Household Shifting</option>
                    <option value="Bike Transportation">Bike Transportation</option>
                    <option value="Car Transportation">Car Transportation</option>
                    <option value="Office Relocation">Office Relocation</option>
                    <option value="Packing & Moving">Packing &amp; Moving</option>
                    <option value="Loading & Unloading">Loading &amp; Unloading</option>
                  </select>
                </div>
              </div>

              <!-- Message -->
              <div class="col-12">
                <label class="form-label fw-bold text-dark small mb-1.5">Your Shifting Message / Requirements</label>
                <div class="vrl-input-group-stylish align-items-start">
                  <div class="vrl-input-addon pt-3">
                    <i class="bi bi-chat-left-text-fill"></i>
                  </div>
                  <textarea name="message" class="vrl-input-field" rows="4" placeholder="Tell us your pickup city, destination city, and preferred moving date..."></textarea>
                </div>
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="vrl-contact-submit-btn w-100 d-inline-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-send-fill"></i> Send Message &amp; Get Free Quote
                </button>
              </div>
            </div>

            <div id="contactformresults" class="mt-3"></div>
          </form>
        </div>
      </div>

    </div>

    <!-- ============ SECTION 3: HIGH-IMPACT CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Need Immediate Assistance?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Speak directly with our Move Supervisor</h3>
          <p class="text-white-50 mb-0 fs-6">Call our 24/7 hotline for instant booking, live shipment tracking, or free home survey scheduling.</p>
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