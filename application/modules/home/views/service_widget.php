<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'HOME RELOCATION',
        'icon' => 'bi bi-house-door-fill',
        'icon_theme' => 'vrl-icon-bg-red',
        'desc' => 'Planned relocation of household items such as furniture, appliances, kitchenware, electronics and personal items.',
        'image' => 'home.jpg',
        'link' => 'home-relocation'
    ],
    [
        'title' => 'OFFICE SHIFTING',
        'icon' => 'bi bi-building',
        'icon_theme' => 'vrl-icon-bg-yellow',
        'desc' => 'Organised relocation of workstations, computers, furniture, documents and office equipment.',
        'image' => 'office.jpg',
        'link' => 'office-relocation'
    ],
    [
        'title' => 'CAR TRANSPORTATION',
        'icon' => 'bi bi-car-front-fill',
        'icon_theme' => 'vrl-icon-bg-red',
        'desc' => 'Safe and planned car shifting according to the transportation route.',
        'image' => 'car.jpg',
        'link' => 'car-transportation'
    ],
    [
        'title' => 'BIKE TRANSPORTATION',
        'icon' => 'bi bi-bicycle',
        'icon_theme' => 'vrl-icon-bg-yellow',
        'desc' => 'Moving help for motorcycles and scooters according to the serviceable transportation route.',
        'image' => 'bike.jpg',
        'link' => 'bike-transportation'
    ],
    [
        'title' => 'PACKING & MOVING',
        'icon' => 'bi bi-box-seam-fill',
        'icon_theme' => 'vrl-icon-bg-red',
        'desc' => 'Appropriate packing material and careful preparation of the items before transportation.',
        'image' => 'packing_unpacking.jpg',
        'link' => 'packing-and-moving'
    ],
    [
        'title' => 'LOADING & UNLOADING',
        'icon' => 'bi bi-truck-flatbed',
        'icon_theme' => 'vrl-icon-bg-yellow',
        'desc' => 'Professional manpower for careful handling during picking up and delivering.',
        'image' => 'loading_unloading.jpg',
        'link' => 'loading-unloading'
    ],
];
?>

<section class="vrl-services-section py-4">
  <div class="container position-relative">
    
    <!-- Top Branch Location Cards (Adampur & Bengaluru) -->
    <div class="row g-3 g-lg-4 mb-4">
      <div class="col-md-6 col-12 d-flex">
        <div class="vrl-location-box w-100">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div class="vrl-location-badge vrl-loc-red">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h3 class="vrl-location-title mb-0">Packers and Movers in Adampur</h3>
          </div>
          <p class="vrl-location-text mb-0">
            If you are looking for Packers and Movers in Adampur, then our headquarters is at: <strong>H.No. 07, Vikaas Colony, near Loha Mandi, Vikas Nagar, Adampur, Haryana 125052</strong>. Clients can reach out to us for domestic moves, office shifts, vehicles shifting and packing services.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-12 d-flex">
        <div class="vrl-location-box w-100">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div class="vrl-location-badge vrl-loc-yellow">
              <i class="bi bi-building"></i>
            </div>
            <h3 class="vrl-location-title mb-0">Packers and Movers in Bengaluru</h3>
          </div>
          <p class="vrl-location-text mb-0">
            We provide our Packers and Movers in Bengaluru via our Whitefield branch: <strong>No. 4, 4th Cross Road, N 7 KIADB Export Promotion, 4th Cross Industrial Area, Whitefield, Opp. to OPPO Showroom, Bengaluru, Karnataka 560066</strong>.
          </p>
        </div>
      </div>
    </div>

    <!-- Section Header -->
    <div class="vrl-sec-header text-center mb-4 mb-lg-5">
      <div class="vrl-sec-eyebrow mb-2">
        <span class="vrl-eyebrow-line"></span>
        <span>OUR SERVICES</span>
        <span class="vrl-eyebrow-line"></span>
      </div>
      
      <h2 class="vrl-sec-title mb-2">
        OUR <span class="vrl-text-red">PACKING AND MOVING</span> SERVICES
      </h2>
      
      <!-- Dashed Route Line + Truck Graphic -->
      <div class="vrl-sec-route-wrap mb-3">
        <span class="vrl-sec-route-line"></span>
        <i class="bi bi-truck vrl-sec-route-icon"></i>
        <span class="vrl-sec-route-line"></span>
      </div>
      
      <p class="vrl-sec-subtitle">
       As professional Packers and Movers, we provide:
      </p>
    </div>

    <!-- 6 Service Cards Grid (3 columns x 2 rows on desktop) -->
    <div class="row g-4 justify-content-center">
      <?php foreach ($services as $service): ?>
        <div class="col-lg-4 col-md-6 col-6 d-flex">
          <a href="<?= site_url($service['link']) ?>" class="vrl-service-card w-100">
            
            <!-- Top Content Area -->
            <div class="vrl-service-content">
              <div class="vrl-service-header">
                <div class="vrl-service-icon-box <?= $service['icon_theme'] ?>">
                  <i class="<?= $service['icon'] ?>"></i>
                </div>
                <h3 class="vrl-service-title"><?= htmlspecialchars($service['title']) ?></h3>
              </div>
              
              <p class="vrl-service-desc"><?= htmlspecialchars($service['desc']) ?></p>
              <div class="vrl-service-underline"></div>
            </div>

            <!-- Card Accent Gradient Divider -->
            <div class="vrl-service-card-divider"></div>

            <!-- Real Service Image Container -->
            <div class="vrl-service-img-wrap">
              <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="vrl-service-img" loading="lazy">
            </div>

          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Dark Trust Badge Bar -->
    <div class="vrl-trust-bar">
      <div class="row g-3 align-items-center text-start text-md-start">
        
        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-shield-check"></i></div>
            <div>
              <h6 class="vrl-trust-title">Safe &amp; Secure</h6>
              <p class="vrl-trust-sub mb-0">Your belongings are in safe hands.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-people-fill"></i></div>
            <div>
              <h6 class="vrl-trust-title">Experienced Team</h6>
              <p class="vrl-trust-sub mb-0">Skilled professionals for smooth move.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-clock-history"></i></div>
            <div>
              <h6 class="vrl-trust-title">On-Time Delivery</h6>
              <p class="vrl-trust-sub mb-0">We deliver on promised schedule.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-currency-rupee"></i></div>
            <div>
              <h6 class="vrl-trust-title">Affordable Pricing</h6>
              <p class="vrl-trust-sub mb-0">Best services at competitive rates.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-headset"></i></div>
            <div>
              <h6 class="vrl-trust-title">24/7 Support</h6>
              <p class="vrl-trust-sub mb-0">We are here to assist you anytime.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
