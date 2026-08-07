<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Interactive FAQ Section -->
<div class="pm-faq-section mt-5 pt-4 border-top">

  <!-- Interactive Section Header -->
  <div class="mb-4">
    <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 fw-bold fs-7 text-uppercase mb-2 d-inline-block">
      <i class="bi bi-question-circle-fill me-1"></i> Help &amp; FAQs
    </span>
    <h3 class="pm-section-title fw-bold text-dark mb-1">
      Frequently Asked Questions in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
    </h3>
    <p class="text-muted small mb-0">Everything you need to know about booking Vince Roadline Packers and Movers in <?= htmlspecialchars($city) ?></p>
  </div>

  <!-- Accordion List -->
  <div class="city-faq-accordion accordion" id="cityFaqAccordion">
    <?php
    $faqs = [
      [
        "q" => "How much do Packers and Movers in $city charge?",
        "a" => "Cost depends on distance, volume of the goods, manpower, floor level, lift availability, packing and vehicle. Small local relocation will be started from ₹3,500 to ₹7,000, but actual quotation will give a clearer idea."
      ],
      [
        "q" => "Which vehicle is suitable for home shifting?",
        "a" => "Smaller loads can fit into a Tata Ace-type goods vehicle. Larger households may require larger covered trucks like 14 ft or 17 ft vehicles. Right choice depends on volume and road accessibility."
      ],
      [
        "q" => "How early should I book my moving professionals?",
        "a" => "Booking 7 to 10 days in advance is preferred if you have fixed the date. Slots near weekends and the end of the month can be booked fast."
      ],
      [
        "q" => "Do your staff pack fragile household items?",
        "a" => "Yes. Fragile articles require separate packing and careful loading. You should inform them about the delicate or valuable goods during the initial inventory discussion."
      ],
      [
        "q" => "How can I choose a reliable moving professional in $city?",
        "a" => "Quotation, service inclusions, vehicle arrangement, packing method and communication before advance payment are the factors which you should check before choosing."
      ],
    ];

    foreach ($faqs as $i => $faq):
      $isFirst = ($i === 0);
    ?>
      <div class="accordion-item pm-faq-item mb-3 rounded-4 overflow-hidden border shadow-sm">
        <h2 class="accordion-header" id="headingFaq<?= $i ?>">
          <button class="accordion-button pm-faq-button <?= $isFirst ? '' : 'collapsed' ?> fw-semibold" 
                  type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseFaq<?= $i ?>" 
                  aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" 
                  aria-controls="collapseFaq<?= $i ?>">
            <i class="bi bi-patch-question-fill text-danger me-3 fs-5 flex-shrink-0"></i>
            <span class="pm-faq-q-text"><?= htmlspecialchars($faq['q']) ?></span>
          </button>
        </h2>
        <div id="collapseFaq<?= $i ?>" 
             class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" 
             aria-labelledby="headingFaq<?= $i ?>" 
             data-bs-parent="#cityFaqAccordion">
          <div class="accordion-body pm-faq-answer text-muted border-start border-danger border-3 bg-white ms-3 my-2 ps-3">
            <?= htmlspecialchars($faq['a']) ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>