<!-- FOOTER SECTION -->
<footer class="vrl-footer">
  <div class="vrl-footer-pattern-left"></div>
  <div class="vrl-footer-pattern-right"></div>

  <div class="container pt-5 pb-4">
    <div class="row g-4">
      
      <!-- Col 1: Logo & Company Bio & Social Links -->
      <div class="col-lg-3 col-md-6">
        <div class="vrl-footer-col">
          <div class="vrl-footer-brand-box mb-4">
            <a href="<?= site_url() ?>" class="d-inline-block flex-shrink-0 mb-3 mb-md-0">
              <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="vrl-footer-logo" loading="lazy">
            </a>
            <p class="vrl-footer-desc mb-0">
              <?= $company3 ?> is a trusted name in the relocation industry. We provide safe, reliable and affordable moving services across India.
            </p>
          </div>
          <div class="vrl-social-links d-flex gap-2">
            <a href="<?= $facebookhtml ?>" class="vrl-social-icon facebook" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?= $instagramhtml ?>" class="vrl-social-icon instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="<?= $twitterhtml ?>" class="vrl-social-icon twitter" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
            <a href="<?= $linkedinhtml ?>" class="vrl-social-icon linkedin" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="<?= $youtubehtml ?>" class="vrl-social-icon youtube" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>

      <!-- Col 2: QUICK LINKS -->
      <div class="col-lg-2 col-md-6 col-6 vrl-footer-border-start">
        <div class="vrl-footer-col">
          <h5 class="vrl-footer-title">QUICK LINKS</h5>
          <ul class="vrl-footer-links">
            <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
            <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-chevron-right me-1"></i> About Us</a></li>
            <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right me-1"></i> Why Choose Us</a></li>
            <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right me-1"></i> Testimonials</a></li>
            <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-chevron-right me-1"></i> FAQs</a></li>
            <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-chevron-right me-1"></i> Network</a></li>
            <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right me-1"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>

      <!-- Col 3: OUR SERVICES -->
      <div class="col-lg-2 col-md-6 col-6 vrl-footer-border-start">
        <div class="vrl-footer-col">
          <h5 class="vrl-footer-title">OUR SERVICES</h5>
          <ul class="vrl-footer-links">
            <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-door me-2"></i> Household Shifting</a></li>
            <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-building me-2"></i> Office Relocation</a></li>
            <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front me-2"></i> Car Transportation</a></li>
            <li><a href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam me-2"></i> Packing &amp; Unpacking</a></li>
            <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-truck-flatbed me-2"></i> Loading &amp; Unloading</a></li>
            <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-archive me-2"></i> Bike Transportation</a></li>
          </ul>
        </div>
      </div>

      <!-- Col 4: USEFUL LINKS -->
      <div class="col-lg-2 col-md-6 col-6 vrl-footer-border-start">
        <div class="vrl-footer-col">
          <h5 class="vrl-footer-title">USEFUL LINKS</h5>
          <ul class="vrl-footer-links">
            <li><a href="<?= site_url('tracking') ?>"><i class="bi bi-chevron-right me-1"></i> Track Shipment</a></li>
            <li><a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-chevron-right me-1"></i> Terms &amp; Conditions</a></li>
            <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-chevron-right me-1"></i> Privacy Policy</a></li>
            <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right me-1"></i> Blog</a></li>
            <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-chevron-right me-1"></i> Gallery</a></li>
          </ul>
        </div>
      </div>

      <!-- Col 5: CONTACT INFO (Head Office & Branch Office) -->
      <div class="col-lg-3 col-md-6 vrl-footer-border-start">
        <div class="vrl-footer-col">
          <h5 class="vrl-footer-title">CONTACT INFO</h5>
          <ul class="vrl-contact-info">
            <li class="d-flex align-items-start gap-3 mb-3">
              <div class="vrl-contact-icon border-yellow mt-1"><i class="bi bi-geo-alt-fill"></i></div>
              <div>
                <span class="d-block fw-bold text-white small mb-1">HEAD OFFICE:</span>
                <span class="vrl-contact-text"><?= $address ?></span>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3 mb-3">
              <div class="vrl-contact-icon border-red mt-1"><i class="bi bi-building"></i></div>
              <div>
                <span class="d-block fw-bold text-white small mb-1">BRANCH OFFICE:</span>
                <span class="vrl-contact-text"><?= $branchAddress ?></span>
              </div>
            </li>
            <li class="d-flex align-items-center gap-3 mb-2">
              <div class="vrl-contact-icon border-red"><i class="bi bi-telephone-fill"></i></div>
              <a href="<?= $phonehtml ?>" class="vrl-contact-text text-decoration-none fw-bold"><?= $phone ?></a>
            </li>
            <li class="d-flex align-items-center gap-3">
              <div class="vrl-contact-icon border-yellow"><i class="bi bi-envelope-fill"></i></div>
              <a href="<?= $mailhtml ?>" class="vrl-contact-text text-decoration-none"><?= $mail ?></a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <!-- Red-bordered Centered Copyright Strip -->
  <div class="vrl-footer-copyright-bar py-3 mt-4 text-center text-white-50">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center gap-2">
      <span>&copy; <?= date('Y') ?> <strong class="text-white"><?= $company3 ?> Packers &amp; Movers</strong>. All Rights Reserved.</span>
      <span class="d-none d-md-inline text-white-50">|</span>
      <span class="text-white-50"><i class="bi bi-heart-fill text-danger me-1"></i> Moving Memories with Care</span>
    </div>
  </div>

  <!-- Floating Action Buttons (Dual Capsule Badge: WhatsApp + Get Quote Horizontal Row) -->
  <div class="floating-actions d-flex">
    <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="float-btn float-whatsapp">
      <div class="icon-wrap">
        <i class="bi bi-whatsapp"></i>
      </div>
      <span>WhatsApp</span>
    </a>
    <button type="button" class="float-btn float-quote" data-bs-toggle="modal" data-bs-target="#qteModal" data-toggle="modal" data-target="#qteModal">
      <div class="icon-wrap">
        <i class="bi bi-calculator-fill"></i>
      </div>
      <span>Get Quote</span>
    </button>
  </div>
</footer>

<!-- Global Quote Modal -->
<?php $this->load->view('contacts/quotemodal'); ?>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>