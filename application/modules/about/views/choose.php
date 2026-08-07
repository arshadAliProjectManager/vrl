<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic variables passed directly from Controller.php ($this->comp array)
$exp_raw = isset($experience) ? $experience : (isset($yearsExperience) ? $yearsExperience : '20+');
$exp_num = (int) preg_replace('/\D+/', '', $exp_raw);

$clients_raw = isset($happyClients) ? $happyClients : '19,850+';
$clients_num = (int) preg_replace('/\D+/', '', $clients_raw);

$states_raw = isset($statesCovered) ? $statesCovered : '20+';
$states_num = (int) preg_replace('/\D+/', '', $states_raw);

$rating_num = (float) (isset($ratingValue) ? $ratingValue : '4.9');
$start_year_val = isset($startYear) ? $startYear : '2006';
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'UNMATCHED RELIABILITY • TRANSPARENT PRICING • 100% SAFETY',
    'bc_h1' => 'Why Choose Vince Roadline',
    'bc_desc' => 'Discover why over ' . $clients_num . '+ happy families and corporate clients choose Vince Roadline for safe, hassle-free relocation across India.',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- Main Why Choose Us Section (Full Width Executive Layout) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: EXECUTIVE SPOTLIGHT HERO ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5">
      <div class="row g-4 g-lg-5 align-items-center">

        <!-- Left Column: Executive Checklist & Narrative -->
        <div class="col-lg-6">
          <div class="mb-3">
            <span class="vrl-about-tag mb-2">
              <i class="bi bi-patch-check-fill me-1"></i> 100% RELIABILITY GUARANTEE
            </span>
            <h2 class="vrl-choose-heading mb-3">
              Why Smart Movers Choose <span class="vrl-about-highlight">Vince Roadline</span>
            </h2>
          </div>

          <p class="vrl-about-prose text-muted mb-4">
            Deciding whether to choose Packers and Movers is not just about comparing the price. You choose who will come to your house, pack your items, handle valuable furniture and appliances and take all responsibilities for transporting them.
          </p>
          <p class="fw-bold">Such a decision should not be made with the aim of saving money only.</p>
          <p>Founded in 2006, <strong><?= $company3 ?></strong> has <?= $yearsExperience ?> years of relocation experience in moving household, corporate properties and vehicles throughout India. During these years we managed to realize something important about relocation services: a good relocation cannot be based on a single great promise. It should include dozens of correctly performed small things.</p>
        </div>

        <!-- Right Column: Visual Feature Showcase -->
        <div class="col-lg-6">
          <div class="vrl-about-img-container">
            <img src="<?= base_url('assets/images/services_modules/packing_unpacking.jpg') ?>" class="img-fluid w-100 vrl-about-main-img" alt="<?= htmlspecialchars($company3) ?> Quality Relocation Team" loading="lazy">
            
            <!-- Top Left Rating Badge -->
            <div class="vrl-about-exp-float text-center">
              <div class="vrl-exp-num"><?= $rating_num ?></div>
              <small class="text-white-50 fw-semibold text-uppercase fs-8 d-block">★ Customer Rating</small>
            </div>

            <!-- Bottom Right Guarantee Pill -->
            <div class="vrl-about-gps-float d-flex align-items-center gap-2">
              <i class="bi bi-shield-check text-warning fs-5"></i>
              <span>100% Transit Insured Move</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ============ SECTION 2: 7 WHY CHOOSE US COMMITMENT BOXES ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Our Commitments</span>
        <h3 class="vrl-about-title mb-2">Why Customers Choose <span class="vrl-about-highlight"><?= $company3 ?></span></h3>
        <p class="text-muted fs-6 mx-auto">Built on uncompromised safety, fixed transparent pricing, and 24x7 customer support.</p>
      </div>

      <div class="row g-4">
        <!-- Box 1 -->
        <div class="col-lg-6 col-12 d-flex">
          <div class="vrl-about-content-box w-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-about-box-badge">
                  <i class="bi bi-award-fill"></i>
                </div>
                <h3 class="vrl-about-box-title vrl-about-box-subtitle mb-0">20+ Years of Experience For Every Move</h3>
              </div>
              <div class="vrl-about-box-text">
                <p>Experience changes the perception of relocation.</p>
                <p>Inexperienced people can see a cupboard, television and dining table as three items to be loaded. An experienced moving specialist sees three items, each of them requires different handling. This is the practical experience we've gathered since 2006.</p>
                <p>All these years our team has been working in a variety of moving situations such as relocation of households, offices, furniture, interstate transportation and vehicle moving. This experience helps to foresee the issues related to handling and plan the work in advance. There is no other way of learning it.</p>
                <p class="mb-0">For clients, who are looking for the <b>Top Packers and Movers</b>, experience of the company should not be just the number presented on the website. It should affect the way of relocation.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="col-lg-6 col-12 d-flex">
          <div class="vrl-why-choose-box w-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-why-choose-badge">
                  <i class="bi bi-box-seam-fill"></i>
                </div>
                <h3 class="vrl-why-choose-title vrl-about-box-subtitle mb-0">We Do Not Treat Every Belonging in the Same Way</h3>
              </div>
              <div class="vrl-why-choose-text">
                <p>Many moving services perform packing in the same way. We do not treat belongings in such a way.</p>
                <p>While clothing and books can be packed in suitable cartons, glassware requires additional cushioning. Electronics should be protected from impacts and movements. Special attention should be paid to furniture corners, while appliances require careful handling. There are also unusual belongings.</p>
                <p>For example, a huge mirror. An old cabinet. Temple unit. Glass dining table which is of particular concern for the client.</p>
                <p class="mb-0">These are the moments when the experience of movers becomes critical. The Packers and Movers team considers the nature, weight, size and fragile characteristics of belongings while performing their preparation for relocation.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="col-lg-6 col-12 d-flex">
          <div class="vrl-why-choose-box w-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-why-choose-badge">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h3 class="vrl-why-choose-title vrl-about-box-subtitle mb-0">Staff Who Respects Your Home and Belongings</h3>
              </div>
              <div class="vrl-why-choose-text">
                <p>Professionalism of packing is essential, but the behavior also counts.</p>
                <p>Clients let the moving staff enter their houses, sometimes for hours. It seems necessary for the team to work responsibly, communicate properly and respect the property of the customer.</p>
                <p>Our moving staff includes packing personnel, supervisors, drivers and other people who are involved in the process of relocation. And we expect this professionalism from all of them.</p>
                <p>It means that we listen when a customer tells us about his or her delicate item. It means that we ask for permission to move an unusual item. And also that we try to keep the workplace as organized as possible, instead of creating unnecessary confusion in the house.</p>
                <p class="mb-0">Good people make moving easier.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 4 -->
        <div class="col-lg-6 col-12 d-flex">
          <div class="vrl-about-content-box w-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-about-box-badge">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h3 class="vrl-about-box-title vrl-about-box-subtitle mb-0">Hygiene Is an Important Component of Our Working Practices</h3>
              </div>
              <div class="vrl-about-box-text">
                <p>You wouldn't want to touch your kitchenware, clothing or personal belongings with improperly handled packing material.</p>
                <p>Neither would we.</p>
                <p>Hygiene and clean working practices are important for us when moving Shifting Services. Our employees are supposed to keep proper personal hygiene, work in an organized way and manage the packing material correctly.</p>
                <p class="mb-0">It seems to be quite elementary, but it should be. Such small things say a lot about the philosophy of a moving company.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 5 -->
        <div class="col-lg-6 col-12 d-flex">
          <div class="vrl-about-content-box w-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-about-box-badge">
                  <i class="bi bi-journal-check"></i>
                </div>
                <h3 class="vrl-about-box-title vrl-about-box-subtitle mb-0">Planning Before Lifting</h3>
              </div>
              <div class="vrl-about-box-text">
                <p>Physical work begins on the day of moving. But the thinking should start earlier.</p>
                <p>Before moving, a range of important issues should be considered: the approximate volume of goods, the possibility of access to the property, the floor level, the presence or absence of the lift, the restrictions of parking and the travel distance.</p>
                <p>Imagine how disappointing it can be, when you realize only after the arrival of the vehicle that it cannot get inside of the society lane.</p>
                <p>Avoidable situations. Our approach is to learn all moving conditions in advance and plan the manpower, packing and transportation accordingly.</p>
                <p class="mb-0">For those who search for Packers and Movers Near Me, this planning is much more useful than making a decision to book the moving contractor only because he is quick with prices.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 6 -->
        <div class="col-lg-6 col-12 d-flex">
          <div class="vrl-why-choose-box w-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-why-choose-badge">
                  <i class="bi bi-chat-left-dots-fill"></i>
                </div>
                <h3 class="vrl-why-choose-title vrl-about-box-subtitle mb-0">Proper Communication Without Creating Unnecessary Confusion</h3>
              </div>
              <div class="vrl-why-choose-text">
                <p>Relocation gives you many things to think about.</p>
                <p>You should not think additionally about the necessity of chasing your moving company for getting some information.</p>
                <p>We believe that a client should be aware about the scope of booked moving services, about expected arrangements and important requirements before the work begins. If an item needs special handling, let us know. If the access to the property can be difficult, we would better know it earlier.</p>
                <p class="mb-0">Clear conversation prevents moving day surprises. Such a straightforward approach is still important for <?= $company3 ?>.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 7 (Full Width) -->
        <div class="col-12">
          <div class="vrl-about-content-box w-100">
            <div>
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="vrl-about-box-badge">
                  <i class="bi bi-truck-front-fill"></i>
                </div>
                <h3 class="vrl-about-box-title vrl-about-box-subtitle mb-0">Experience in Households, Offices and Vehicles</h3>
              </div>
              <div class="vrl-about-box-text">
                <p>A good relocator understands that different moves require different approaches.</p>
                <p>Household shifting includes personal belongings and furniture. Corporate moving can include workstations, files, equipment and strict schedules. Vehicle transportation requires another issue to be considered: careful handling with the goal of avoiding any scratches and other types of avoidable damage.</p>
                <p>Our experience includes all mentioned types of relocation requirements.</p>
                <p class="mb-0">Thus, it provides clients with one professional moving company instead of coordination with several service providers.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ============ WHY CLIENTS PREFER EXPERIENCE TO PROMISES (FULL WIDTH CARD BOX) ============ -->
    <div class="row mb-5">
      <div class="col-12">
        <div class="vrl-why-choose-box">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="vrl-why-choose-badge">
              <i class="bi bi-star-fill"></i>
            </div>
            <h3 class="vrl-why-choose-title vrl-about-box-subtitle mb-0">Why Clients Prefer Experience to Promises</h3>
          </div>
          
          <div class="vrl-why-choose-text">
            <p>There are many moving companies which can call themselves the <b>Best Packers and Movers</b>. We prefer to explain what makes us so.</p>
            <p>20+ years in the relocation industry. Experienced staff. Item-specific packing. Responsible handling. Hygiene-conscious working practices. Practical planning. Clear communication.</p>
            <p class="mb-0">This is what we bring to the job. Your belongings have a story. Your move has a reason. Let experienced hands take care of the journey.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: COMPARISON MATRIX TABLE ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Clear Difference</span>
        <h3 class="vrl-about-title mb-2"><span class="vrl-about-highlight">Vince Roadline</span> vs Unorganized Movers</h3>
        <p class="text-muted fs-6 mx-auto">See how our professional standards compare against unorganized local operators.</p>
      </div>

      <div class="vrl-choose-table-card table-responsive">
        <table class="table vrl-choose-table text-start align-middle">
          <thead>
            <tr>
              <th scope="col">Relocation Feature</th>
              <th scope="col" class="text-center text-warning"><i class="bi bi-trophy-fill me-1"></i> Vince Roadline</th>
              <th scope="col" class="text-center text-white-50">Local Unorganized Movers</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-receipt me-2 text-danger"></i> Written Fixed Quote</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> Fixed Itemized Price</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Post-Move Extra Charges</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-box-seam me-2 text-danger"></i> Packing Material Quality</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> 3-Layer Bubble Cushion &amp; Crates</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Thin Used Cardboard</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-people me-2 text-danger"></i> Crew Verification</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> 100% In-House Verified Staff</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Daily Casual Laborers</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-truck me-2 text-danger"></i> Transport Fleet</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> Enclosed Weatherproof GPS Containers</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Open Tarpaulin Trucks</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-shield-check me-2 text-danger"></i> Goods Transit Insurance</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> Full Transit Policy Coverage</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> No Insurance Policy</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ============ SECTION 4: HIGH-IMPACT CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Ready To Relocate?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Choose Peace of Mind with Vince Roadline Today</h3>
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