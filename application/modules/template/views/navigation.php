<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-relocation', 'office-relocation', 'car-transportation', 'bike-transportation', 'packing-and-moving', 'loading-unloading', 'home-shifting'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || in_array($segment1, ['our-branches', 'packers-and-movers'])) {
    $active_tab = 'network';
  } elseif ($class === 'gallery' || in_array($segment1, ['photo-gallery', 'video-gallery'])) {
    $active_tab = 'gallery';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="vrl-top-bar py-2 text-white">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="d-none d-lg-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="vrl-top-item">
            <div class="vrl-top-icon-circle border-red">
              <i class="bi bi-envelope"></i>
            </div>
            <span class="vrl-top-text"><?= $mail ?></span>
          </a>

          <span class="vrl-top-divider"></span>

          <a href="<?= $phonehtml ?>" class="vrl-top-item">
            <div class="vrl-top-icon-circle border-red">
              <i class="bi bi-telephone"></i>
            </div>
            <span class="vrl-top-text"><?= $phone ?></span>
          </a>

          <span class="vrl-top-divider"></span>

          <div class="vrl-top-item">
            <div class="vrl-top-icon-circle border-yellow">
              <i class="bi bi-shield-check"></i>
            </div>
            <span class="vrl-top-text">Verified &amp; Trusted</span>
          </div>

          <span class="vrl-top-divider"></span>

          <div class="vrl-top-item">
            <div class="vrl-top-icon-circle border-red">
              <i class="bi bi-people"></i>
            </div>
            <span class="vrl-top-text"><?= $happyClients ?> Happy Customers</span>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3">
          <span class="vrl-top-divider me-1"></span>

          <div class="vrl-offer-badge d-flex align-items-center gap-2">
            <i class="bi bi-lightning-charge-fill text-warning fs-5"></i>
            <div class="d-flex flex-column leading-tight">
              <span class="vrl-offer-title">10% OFF</span>
              <span class="vrl-offer-subtitle">ON YOUR FIRST MOVE</span>
            </div>
          </div>

          <div class="vrl-rating-badge d-flex align-items-center gap-2">
            <i class="bi bi-star-fill text-warning fs-4"></i>
            <div class="d-flex flex-column leading-tight">
              <span class="vrl-rating-num"><?= $ratingValue ?></span>
              <span class="vrl-rating-label">Google Reviews</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="d-flex d-lg-none flex-column gap-2 py-1 text-center">
        <div class="d-flex justify-content-center align-items-center gap-2 flex-wrap">
          <a href="<?= $mailhtml ?>" class="vrl-top-item">
            <div class="vrl-top-icon-circle border-red sm">
              <i class="bi bi-envelope"></i>
            </div>
            <span class="vrl-top-text small"><?= $mail ?></span>
          </a>
          <span class="vrl-top-divider"></span>
          <a href="<?= $phonehtml ?>" class="vrl-top-item">
            <div class="vrl-top-icon-circle border-red sm">
              <i class="bi bi-telephone"></i>
            </div>
            <span class="vrl-top-text small"><?= $phone ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Network", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Tracking", "url" => site_url('tracking')],
      ["@type" => "SiteNavigationElement", "name" => "Gallery", "url" => site_url('photo-gallery')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-white sticky-top vrl-navbar">
    <div class="container align-items-center justify-content-between">
      
      <!-- Brand Logo -->
      <a class="navbar-brand p-0 m-0" href="<?= site_url() ?>">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="vrl-brand-logo" loading="lazy">
      </a>

      <!-- Desktop Navigation Menu -->
      <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex">
        <ul class="navbar-nav align-items-center gap-0 mb-0">
          
          <li class="nav-item">
            <a class="nav-link vrl-nav-link <?= $active_tab === 'home' ? 'active' : '' ?>" href="<?= site_url() ?>">HOME</a>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link vrl-nav-link dropdown-toggle <?= $active_tab === 'about' ? 'active' : '' ?>" href="<?= site_url('about-us') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ABOUT US <i class="bi bi-chevron-down ms-1 fs-7"></i>
            </a>
            <ul class="dropdown-menu vrl-dropdown-menu">
              <li><a class="dropdown-item <?= $segment1 === 'about-us' ? 'active' : '' ?>" href="<?= site_url('about-us') ?>">About Us</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'why-choose-us' ? 'active' : '' ?>" href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'faqs' ? 'active' : '' ?>" href="<?= site_url('faqs') ?>">FAQ</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'testimonials' ? 'active' : '' ?>" href="<?= site_url('testimonials') ?>">Testimonials</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'privacy-policy' ? 'active' : '' ?>" href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'terms-and-conditions' ? 'active' : '' ?>" href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a></li>
            </ul>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link vrl-nav-link dropdown-toggle <?= $active_tab === 'services' ? 'active' : '' ?>" href="<?= site_url('our-services') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SERVICES <i class="bi bi-chevron-down ms-1 fs-7"></i>
            </a>
            <ul class="dropdown-menu vrl-dropdown-menu">
              <li><a class="dropdown-item <?= $segment1 === 'home-relocation' ? 'active' : '' ?>" href="<?= site_url('home-relocation') ?>">Home Relocation</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'office-relocation' ? 'active' : '' ?>" href="<?= site_url('office-relocation') ?>">Office Relocation</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'car-transportation' ? 'active' : '' ?>" href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'bike-transportation' ? 'active' : '' ?>" href="<?= site_url('bike-transportation') ?>">Bike Transportation</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'packing-and-moving' ? 'active' : '' ?>" href="<?= site_url('packing-and-moving') ?>">Packing &amp; Moving Service</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'loading-unloading' ? 'active' : '' ?>" href="<?= site_url('loading-unloading') ?>">Loading Unloading Service</a></li>
            </ul>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item">
            <a class="nav-link vrl-nav-link <?= $active_tab === 'network' ? 'active' : '' ?>" href="<?= site_url('our-branches') ?>">NETWORK</a>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item">
            <a class="nav-link vrl-nav-link <?= $active_tab === 'tracking' ? 'active' : '' ?>" href="<?= site_url('tracking') ?>">TRACKING</a>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item">
            <a class="nav-link vrl-nav-link <?= $active_tab === 'gallery' ? 'active' : '' ?>" href="<?= site_url('photo-gallery') ?>">GALLERY</a>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item">
            <a class="nav-link vrl-nav-link <?= $active_tab === 'blog' ? 'active' : '' ?>" href="<?= site_url('blog') ?>">BLOG</a>
          </li>

          <li class="nav-item d-flex align-items-center">
            <span class="vrl-divider"></span>
          </li>

          <li class="nav-item">
            <a class="nav-link vrl-nav-link <?= $active_tab === 'contact' ? 'active' : '' ?>" href="<?= site_url('contact-us') ?>">CONTACT US</a>
          </li>

        </ul>
      </div>

      <!-- Right Side Call CTA Button -->
      <div class="d-none d-lg-flex align-items-center">
        <a href="<?= $phonehtml ?>" class="text-decoration-none d-flex align-items-center gap-2 vrl-phone-link">
          <div class="vrl-call-circle">
            <i class="bi bi-telephone-fill vrl-call-icon"></i>
          </div>
          <span class="vrl-phone-text"><?= $phone ?></span>
        </a>
      </div>

      <!-- Mobile / Tablet Header Controls (Toggler + Mobile Phone Icon) -->
      <div class="d-flex d-lg-none align-items-center gap-2">
        <a href="<?= $phonehtml ?>" class="vrl-call-circle text-decoration-none" aria-label="Call Us">
          <i class="bi bi-telephone-fill vrl-call-icon"></i>
        </a>
        <button class="navbar-toggler border-0 shadow-none p-2 vrl-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#vrlNavbarOffcanvas" aria-controls="vrlNavbarOffcanvas" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

    </div>
  </nav>

  <!-- Mobile & Tablet Offcanvas Drawer -->
  <div class="offcanvas offcanvas-start vrl-offcanvas" tabindex="-1" id="vrlNavbarOffcanvas" aria-labelledby="vrlNavbarOffcanvasLabel">
    <div class="offcanvas-header border-bottom py-3 px-3">
      <a class="navbar-brand m-0" href="<?= site_url() ?>">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?>" class="vrl-brand-logo-mobile" loading="lazy">
      </a>
      <button type="button" class="btn-close text-reset shadow-none vrl-offcanvas-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column justify-content-between p-3">
      <ul class="navbar-nav gap-2">
        
        <li class="nav-item">
          <a class="nav-link vrl-mobile-link <?= $active_tab === 'home' ? 'active' : '' ?>" href="<?= site_url() ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-house-door text-danger fs-6"></i> HOME
            </span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link vrl-mobile-link d-flex justify-content-between align-items-center <?= $active_tab === 'about' ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-info-circle text-danger fs-6"></i> ABOUT US
            </span>
            <i class="bi bi-chevron-down vrl-mobile-arrow"></i>
          </a>
          <ul class="dropdown-menu vrl-mobile-dropdown-menu border-0 p-2 shadow-sm rounded-3">
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('about-us') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> About Us</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('why-choose-us') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Why Choose Us</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('faqs') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> FAQ</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('testimonials') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Testimonials</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('privacy-policy') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Privacy Policy</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Terms &amp; Conditions</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link vrl-mobile-link d-flex justify-content-between align-items-center <?= $active_tab === 'services' ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-truck text-danger fs-6"></i> SERVICES
            </span>
            <i class="bi bi-chevron-down vrl-mobile-arrow"></i>
          </a>
          <ul class="dropdown-menu vrl-mobile-dropdown-menu border-0 p-2 shadow-sm rounded-3">
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('home-relocation') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Home Relocation</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('office-relocation') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Office Relocation</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('car-transportation') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Car Transportation</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('bike-transportation') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Bike Transportation</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Packing &amp; Moving Service</a></li>
            <li><a class="dropdown-item py-2 px-3 rounded-2" href="<?= site_url('loading-unloading') ?>"><i class="bi bi-arrow-right-short me-1 text-danger"></i> Loading Unloading Service</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link vrl-mobile-link <?= $active_tab === 'network' ? 'active' : '' ?>" href="<?= site_url('our-branches') ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-geo-alt text-danger fs-6"></i> NETWORK
            </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link vrl-mobile-link <?= $active_tab === 'tracking' ? 'active' : '' ?>" href="<?= site_url('tracking') ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-box-seam text-danger fs-6"></i> TRACKING
            </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link vrl-mobile-link <?= $active_tab === 'gallery' ? 'active' : '' ?>" href="<?= site_url('photo-gallery') ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-images text-danger fs-6"></i> GALLERY
            </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link vrl-mobile-link <?= $active_tab === 'blog' ? 'active' : '' ?>" href="<?= site_url('blog') ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-journal-text text-danger fs-6"></i> BLOG
            </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link vrl-mobile-link <?= $active_tab === 'contact' ? 'active' : '' ?>" href="<?= site_url('contact-us') ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-telephone-outbound text-danger fs-6"></i> CONTACT US
            </span>
          </a>
        </li>

      </ul>

      <!-- Mobile Offcanvas Footer CTA Buttons -->
      <div class="mt-4 pt-3 border-top d-flex flex-column gap-2">
        <button type="button" class="vrl-mobile-quote-btn text-decoration-none d-flex align-items-center justify-content-center gap-2 w-100" data-bs-toggle="modal" data-bs-target="#qteModal" data-bs-dismiss="offcanvas">
          <i class="bi bi-file-earmark-text-fill"></i> GET A FREE QUOTE
        </button>
        <a href="<?= $phonehtml ?>" class="vrl-mobile-cta-btn text-decoration-none d-flex align-items-center justify-content-center gap-2 w-100">
          <i class="bi bi-telephone-fill vrl-call-icon"></i> CALL <?= $phone ?>
        </a>
      </div>
    </div>
  </div>