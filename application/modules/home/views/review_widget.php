<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Dynamic DB Query to fetch reviews from 'reviews' table
$db_reviews = [];
if (isset($this->db)) {
    $query = $this->db->order_by('r_id', 'DESC')->get_where('reviews', array('status' => 1), 12);
    if ($query && $query->num_rows() > 0) {
        $db_reviews = $query->result_array();
    }
}

// Default fallback testimonials if database table is empty
$default_testimonials = [
    [
        'name' => 'Rohit Sharma',
        'city' => 'Delhi',
        'review' => 'The team was punctual, professional and handled my belongings with great care. Highly recommended!',
        'stars' => 5,
        'image' => 'assets/images/reviews/rohit_avatar.jpg'
    ],
    [
        'name' => 'Priya Mehta',
        'city' => 'Gurugram',
        'review' => 'Excellent service from start to finish. They packed everything securely and delivered on time.',
        'stars' => 5,
        'image' => 'assets/images/reviews/priya_avatar.jpg'
    ],
    [
        'name' => 'Amit Verma',
        'city' => 'Noida',
        'review' => 'Very reliable and affordable service. The staff is friendly and very cooperative.',
        'stars' => 5,
        'image' => 'assets/images/reviews/amit_avatar.jpg'
    ]
];

// Normalize data array
$testimonials = [];
if (!empty($db_reviews)) {
    foreach ($db_reviews as $row) {
        $avatar = !empty($row['r_img']) ? base_url(explode(',', $row['r_img'])[0]) : base_url('assets/images/reviews/rohit_avatar.png');
        $testimonials[] = [
            'name' => !empty($row['name']) ? $row['name'] : 'Valued Customer',
            'city' => !empty($row['r_title']) ? $row['r_title'] : 'India',
            'review' => !empty($row['r_desc']) ? $row['r_desc'] : 'Great moving experience with Vince Road Line.',
            'stars' => !empty($row['stars']) ? (int)$row['stars'] : 5,
            'image' => $avatar
        ];
    }
} else {
    foreach ($default_testimonials as $item) {
        $item['image'] = base_url($item['image']);
        $testimonials[] = $item;
    }
}
?>

<section class="vrl-testimonial-section position-relative py-4">

  <!-- Top-Right Dark Truck Background Graphic Watermark -->
  <div class="vrl-testimonial-truck-bg"></div>

  <div class="container position-relative z-2">

    <!-- Section Header (Reuses SAME classes as Service Section) -->
    <div class="vrl-sec-header text-center mb-4 mb-lg-5">
      <div class="vrl-sec-eyebrow mb-2">
        <span class="vrl-eyebrow-line"></span>
        <span class="vrl-text-red">TESTIMONIALS</span>
        <span class="vrl-eyebrow-line"></span>
      </div>

      <h2 class="vrl-sec-title mb-2">
        What Our <span class="vrl-text-yellow">Customers</span> Say
      </h2>

      <!-- Dashed Route Line + Truck Graphic -->
      <div class="vrl-sec-route-wrap mb-3">
        <span class="vrl-sec-route-line"></span>
        <i class="bi bi-truck vrl-sec-route-icon"></i>
        <span class="vrl-sec-route-line"></span>
      </div>

      <p class="vrl-sec-subtitle">
        Real experiences from real people who trusted<br class="d-none d-sm-inline"> Vince Road Line Packers &amp; Movers.
      </p>
    </div>

    <!-- Testimonial Slider Outer Wrapper -->
    <div class="vrl-testimonial-slider-wrap">
      
      <!-- Slider Viewport -->
      <div class="vrl-testimonial-viewport">
        <div class="vrl-testimonial-track" id="vrlTestimonialTrack">

          <?php foreach ($testimonials as $index => $item): ?>
            <!-- Card Slide <?= $index + 1 ?>: <?= htmlspecialchars($item['name']) ?> -->
            <div class="vrl-testimonial-slide">
              <div class="vrl-testimonial-card-wrapper">
                <div class="vrl-testimonial-card">
                  
                  <!-- Overlapping Top Quote Badge -->
                  <div class="vrl-quote-badge">
                    <span class="vrl-quote-icon">“</span>
                  </div>

                  <div class="vrl-testimonial-card-inner">
                    <div class="vrl-testimonial-avatar-wrap">
                      <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="vrl-testimonial-avatar" loading="lazy">
                    </div>

                    <p class="vrl-testimonial-text">
                      <?= htmlspecialchars($item['review']) ?>
                    </p>

                    <h3 class="vrl-testimonial-author"><?= htmlspecialchars($item['name']) ?></h3>

                    <div class="vrl-testimonial-stars">
                      <?php 
                      $stars_count = max(1, min(5, (int)$item['stars']));
                      for ($s = 0; $s < $stars_count; $s++): 
                      ?>
                        <i class="bi bi-star-fill"></i>
                      <?php endfor; ?>
                    </div>

                    <span class="vrl-testimonial-location"><?= htmlspecialchars($item['city']) ?></span>
                  </div>

                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

    </div>

    <!-- Bottom Controls: Prev Button - Dots - Next Button -->
    <div class="vrl-testimonial-controls d-flex align-items-center justify-content-center gap-3">
      <button type="button" class="vrl-testimonial-nav-btn" onclick="vrlSlide(-1)" aria-label="Previous Testimonial">
        <i class="bi bi-chevron-left"></i>
      </button>

      <div class="vrl-testimonial-dots m-0" id="vrlTestimonialDots">
        <?php for ($d = 0; $d < count($testimonials); $d++): ?>
          <button type="button" class="vrl-dot <?= $d === 0 ? 'active' : '' ?>" onclick="vrlSlideTo(<?= $d ?>)" aria-label="Slide <?= $d + 1 ?>"></button>
        <?php endfor; ?>
      </div>

      <button type="button" class="vrl-testimonial-nav-btn" onclick="vrlSlide(1)" aria-label="Next Testimonial">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>

    <!-- Bottom Trusted By Thousands Badge Bar -->
    <div class="vrl-trusted-bar-wrap">
      <div class="vrl-trusted-line line-left"></div>

      <div class="vrl-trusted-badge">
        <div class="vrl-trusted-shield">
          <i class="bi bi-shield-fill-check"></i>
        </div>
        <div class="vrl-trusted-text">
          <span class="vrl-trusted-title">TRUSTED BY</span>
          <span class="vrl-trusted-highlight">THOUSANDS</span>
        </div>
      </div>

      <div class="vrl-trusted-line line-right"></div>
    </div>

  </div>

</section>

<!-- Minimal Lightweight JS (< 15 lines) for Testimonial Swap & Navigation -->
<script>
let vrlIdx = 0;
function vrlSlideTo(i) {
  const track = document.getElementById('vrlTestimonialTrack');
  if (!track || !track.children.length) return;
  const slides = Array.from(track.children);
  const visible = window.innerWidth < 768 ? 1 : (window.innerWidth < 992 ? 2 : 3);
  const max = Math.max(0, slides.length - visible);
  vrlIdx = i < 0 ? max : (i > max ? 0 : i);
  track.style.transform = `translateX(-${vrlIdx * (slides[0].offsetWidth + 24)}px)`;
  slides.forEach((s, idx) => {
    s.classList.remove('vrl-testimonial-swap');
    if (idx >= vrlIdx && idx < vrlIdx + visible) {
      void s.offsetWidth;
      s.classList.add('vrl-testimonial-swap');
    }
  });
  document.querySelectorAll('#vrlTestimonialDots .vrl-dot').forEach((d, idx) => d.classList.toggle('active', idx === vrlIdx));
}
function vrlSlide(dir) { vrlSlideTo(vrlIdx + dir); }
window.addEventListener('resize', () => vrlSlideTo(vrlIdx));
</script>
