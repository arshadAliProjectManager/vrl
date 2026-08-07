<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$phone = isset($phone) ? $phone : '+91 9996340820';
$phonehtml = isset($phonehtml) ? $phonehtml : 'tel:' . preg_replace('/\D+/', '', (string)$phone);

$process_steps = [
    [
        'step' => '01',
        'title' => 'ENQUIRY & BOOKING',
        'icon' => 'bi bi-headset',
        'desc' => 'Inform us about your pickup location, destination, moving date and moving requirements. Get a quick quotation and make the booking.',
        'theme' => 'vrl-step-navy',
        'has_arrow' => true
    ],
    [
        'step' => '02',
        'title' => 'SURVEY & PLANNING',
        'icon' => 'bi bi-clipboard-check',
        'desc' => 'Our team assesses the moving requirements and makes the plan of packing, manpower, handling and transportation accordingly.',
        'theme' => 'vrl-step-yellow',
        'has_arrow' => true
    ],
    [
        'step' => '03',
        'title' => 'PACKING & PREPARATION',
        'icon' => 'bi bi-box-seam',
        'desc' => 'Appropriate packing material is used to pack your items for transportation.',
        'theme' => 'vrl-step-red',
        'has_arrow' => true
    ],
    [
        'step' => '04',
        'title' => 'TRANSPORT & MOVING',
        'icon' => 'bi bi-truck',
        'desc' => 'The packed items are transported according to the moving arrangements which were made previously.',
        'theme' => 'vrl-step-navy',
        'has_arrow' => true
    ],
    [
        'step' => '05',
        'title' => 'DELIVERY & UNLOADING',
        'icon' => 'bi bi-box2-heart',
        'desc' => 'The items are delivered and unloaded carefully at your destination.',
        'theme' => 'vrl-step-yellow',
        'has_arrow' => true
    ],
    [
        'step' => '06',
        'title' => 'SETUP & SETTLEMENT',
        'icon' => 'bi bi-house-check',
        'desc' => 'If you choose the setup and settlement service during the selection of your moving services, we can assist you in placing the items after delivery.',
        'theme' => 'vrl-step-red',
        'has_arrow' => false
    ],
];
?>

<section class="vrl-process-section py-4">
  <div class="container position-relative">
    
    <!-- Section Header (Reuses SAME classes as Service Section) -->
    <div class="vrl-sec-header text-center mb-4 mb-lg-5">
      <div class="vrl-sec-eyebrow mb-2">
        <span class="vrl-eyebrow-line"></span>
        <span>OUR PROCESS</span>
        <span class="vrl-eyebrow-line"></span>
      </div>
      
      <h2 class="vrl-sec-title mb-2">
        HOW <span class="vrl-text-red">OUR MOVING PROCESS</span> WORKS
      </h2>
      
      <!-- Dashed Route Line + Truck Graphic -->
      <div class="vrl-sec-route-wrap mb-3">
        <span class="vrl-sec-route-line"></span>
        <i class="bi bi-truck vrl-sec-route-icon"></i>
        <span class="vrl-sec-route-line"></span>
      </div>
      
      <p class="vrl-sec-subtitle">
        We follow a proven process to ensure your relocation is safe, efficient and hassle-free.
      </p>
    </div>

    <!-- 6 Process Steps Timeline Grid -->
    <div class="vrl-process-timeline-wrap mb-4 mb-lg-5">
      <div class="row g-3 g-lg-4 justify-content-center">
        <?php foreach ($process_steps as $step): ?>
          <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center">
            
            <div class="vrl-process-card w-100 <?= $step['theme'] ?>">
              <!-- Step Number Badge -->
              <div class="vrl-process-badge"><?= $step['step'] ?></div>
              
              <!-- Icon Circle -->
              <div class="vrl-process-icon-circle">
                <i class="<?= $step['icon'] ?>"></i>
              </div>

              <!-- Title & Description -->
              <h3 class="vrl-process-card-title"><?= htmlspecialchars($step['title']) ?></h3>
              <p class="vrl-process-card-desc"><?= htmlspecialchars($step['desc']) ?></p>

              <!-- Step Arrow Badge -->
              <?php if ($step['has_arrow']): ?>
                <div class="vrl-process-arrow-btn d-none d-lg-flex">
                  <i class="bi bi-chevron-right"></i>
                </div>
              <?php endif; ?>
            </div>

            <!-- Bottom Timeline Dot -->
            <div class="vrl-process-timeline-dot <?= $step['theme'] ?>"></div>

          </div>
        <?php endforeach; ?>
      </div>

      <!-- Connecting Dashed Line on Desktop with Animated Moving Truck -->
      <div class="vrl-process-track-line d-none d-lg-block">
        <div class="vrl-moving-truck">
          <i class="bi bi-truck"></i>
        </div>
      </div>
    </div>

    <!-- Bottom Interactive Process CTA Banner -->
    <div class="vrl-process-cta-banner">
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3 text-center text-lg-start">
        
        <div class="d-flex align-items-center gap-3">
          <div class="vrl-process-cta-icon flex-shrink-0">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <div>
            <h5 class="vrl-process-cta-title mb-1">Ready for a Seamless Relocation?</h5>
            <p class="vrl-process-cta-sub mb-0">Get your instant moving estimate &amp; expert guidance in 2 minutes.</p>
          </div>
        </div>

        <div class="d-flex align-items-center gap-2 flex-shrink-0">
          <a href="<?= $phonehtml ?>" class="btn vrl-btn-cta-phone d-inline-flex align-items-center gap-2">
            <i class="bi bi-telephone-fill"></i>
            <span>Call <?= $phone ?></span>
          </a>
          <a href="#quoteform" class="btn vrl-btn-cta-quote d-inline-flex align-items-center gap-2">
            <span>Get Free Quote</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>
