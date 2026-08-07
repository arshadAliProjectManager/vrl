<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'REAL FIELD WORK • SAFE PACKING • WAREHOUSE & FLEET SHOWCASE',
    'bc_h1' => 'Photo Gallery',
    'bc_desc' => 'Explore real-time operational photos of our multi-layer bubble packing, vehicle transportation, household goods loading, and corporate warehouse facilities across India.',
    'breadcrumbs' => [
        ['name' => 'Photo Gallery']
    ]
]); 

// Build unified items list (Admin Panel DB Photos + Services Module Photos)
$gallery_items = [];

// 1. Add photos uploaded via Admin Panel Database
if (!empty($photos)) {
    foreach ($photos as $p) {
        $img_name = $p->image ?? '';
        $src = base_url('assets/uploads/gallery/' . $img_name);
        if (!empty($img_name) && filter_var($img_name, FILTER_VALIDATE_URL)) {
            $src = $img_name;
        }

        $gallery_items[] = [
            'src'   => $src,
            'title' => !empty($p->title) ? $p->title : 'Vince Roadline Relocation Work',
            'album' => !empty($p->album_name) ? $p->album_name : 'Household Shifting',
            'sub'   => 'Vince Roadline Admin Upload',
            'icon'  => 'bi-tag-fill'
        ];
    }
}

// 2. Add Showcase Photos from Services Modules
$showcase_photos = [
    [
        'src'   => base_url('assets/images/services_modules/home.jpg'),
        'title' => 'Household Goods & Furniture Relocation',
        'album' => 'Household Shifting',
        'sub'   => 'Bubble Wrap & Corrugated Sheet Padding',
        'icon'  => 'bi-house-door-fill'
    ],
    [
        'src'   => base_url('assets/images/services_modules/car.jpg'),
        'title' => 'Enclosed Hydraulic Car Carrier Loading',
        'album' => 'Vehicle Transport',
        'sub'   => 'Wheel-Lock Fastened Transit',
        'icon'  => 'bi-truck-front-fill'
    ],
    [
        'src'   => base_url('assets/images/services_modules/packing_unpacking.jpg'),
        'title' => 'Multi-Layer Safety Packing & Unpacking',
        'album' => 'Packing Standards',
        'sub'   => 'Custom Plywood & Foam Wrapping',
        'icon'  => 'bi-box-seam-fill'
    ],
    [
        'src'   => base_url('assets/images/services_modules/office.jpg'),
        'title' => 'Corporate IT & Office Relocation Setup',
        'album' => 'Office Relocation',
        'sub'   => 'Zero-Downtime Server & Desk Shifting',
        'icon'  => 'bi-building-fill-check'
    ],
    [
        'src'   => base_url('assets/images/services_modules/bike.jpg'),
        'title' => '4-Layer Bike Armor Guard Packing',
        'album' => 'Bike Transport',
        'sub'   => 'Scratch-Proof Foam & Film Wrap',
        'icon'  => 'bi-truck-front-fill'
    ],
    [
        'src'   => base_url('assets/images/services_modules/loading_unloading.jpg'),
        'title' => 'Professional Loading & Unloading Crew',
        'album' => 'Loading & Unloading',
        'sub'   => 'Background Verified Heavy Duty Team',
        'icon'  => 'bi-house-door-fill'
    ],
    [
        'src'   => base_url('assets/images/services_modules/relocation_packing_team.jpg'),
        'title' => 'Relocation Packing Experts Team',
        'album' => 'Packing Team',
        'sub'   => 'Certified Uniformed Movers',
        'icon'  => 'bi-box-seam-fill'
    ]
];

foreach ($showcase_photos as $sp) {
    $gallery_items[] = $sp;
}
?>

<!-- Main Photo Gallery Section -->
<section class="vrl-gallery-section py-5">
  <div class="container">

    <!-- Section Header -->
    <div class="text-center mb-5">
      <span class="vrl-about-tag mb-2">
        <i class="bi bi-images me-1"></i> Visual Operations Showcase
      </span>
      <h2 class="vrl-about-title mb-2">
        Real Relocation <span class="vrl-about-highlight">Photos &amp; Field Work</span>
      </h2>
      <p class="text-muted fs-6 mx-auto vrl-contact-subtitle-max">
        Our gallery showcases real photos of Vince Roadline operations — from 5-layer cushion wrapping to hydraulic car loading and warehouse logistics.
      </p>
    </div>

    <!-- Gallery Grid Container -->
    <div class="row g-4" id="galleryGrid">
      <?php foreach ($gallery_items as $item): ?>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="vrl-gallery-card">
            <div class="vrl-gallery-img-box">
              <span class="vrl-gallery-album-pill">
                <i class="bi <?= $item['icon'] ?> text-warning me-1"></i> <?= htmlspecialchars($item['album']) ?>
              </span>
              <img src="<?= $item['src'] ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="vrl-gallery-img" loading="lazy">
              
              <div class="vrl-gallery-overlay">
                <button type="button" class="vrl-gallery-zoom-btn" onclick="openLightbox('<?= $item['src'] ?>', '<?= addslashes($item['title']) ?>', '<?= addslashes($item['album']) ?>')" title="Zoom Photo">
                  <i class="bi bi-zoom-in"></i>
                </button>
              </div>
            </div>

            <div class="vrl-gallery-info">
              <div>
                <h5 class="vrl-gallery-title"><?= htmlspecialchars($item['title']) ?></h5>
                <span class="vrl-gallery-sub">
                  <i class="bi bi-shield-check text-danger me-1"></i> <?= htmlspecialchars($item['sub']) ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom CTA Banner -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start mt-5">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Need Professional Shifting?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Want your goods packed with the same high standards?</h3>
          <p class="text-white-50 mb-0 fs-6">Contact Vince Roadline today for free home survey, instant pricing quote, and premium relocation service.</p>
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

<!-- Image Lightbox Modal -->
<div class="modal fade" id="galleryLightboxModal" tabindex="-1" aria-labelledby="galleryLightboxModalLabel" aria-hidden="true">
  <div class="modal-dialog vrl-lightbox-dialog modal-dialog-centered">
    <div class="modal-content vrl-lightbox-content">
      <div class="vrl-lightbox-header d-flex align-items-center justify-content-between">
        <div>
          <span id="lightboxCategory" class="badge bg-warning text-dark fw-bold rounded-pill px-3 py-1 fs-8 mb-1">
            <i class="bi bi-image me-1"></i> Vince Roadline Gallery
          </span>
          <h5 id="lightboxTitle" class="modal-title fw-bold text-white fs-5 mb-0">Photo Preview</h5>
        </div>
        <button type="button" class="vrl-modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <div class="vrl-lightbox-img-box">
        <img id="lightboxImage" src="" alt="Gallery Image Preview" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<!-- JavaScript Lightbox Functionality -->
<script>
function openLightbox(imgSrc, title, category) {
    document.getElementById('lightboxImage').src = imgSrc;
    document.getElementById('lightboxTitle').innerText = title || 'Vince Roadline Operational Photo';
    document.getElementById('lightboxCategory').innerHTML = '<i class="bi bi-image me-1"></i> ' + (category || 'Gallery Showcase');
    
    var lightboxModal = new bootstrap.Modal(document.getElementById('galleryLightboxModal'));
    lightboxModal.show();
}
</script>
