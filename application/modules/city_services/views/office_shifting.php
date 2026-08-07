<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'EFFICIENT • ZERO DOWNTIME • COMMERCIAL',
    'bc_h1' => 'Office Shifting in ' . $city,
    'bc_desc' => 'Seamless corporate office relocation, IT equipment moving, and commercial desk shifting in ' . $city . '.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Office Shifting in ' . $city]
    ]
]); 
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Professional Office Relocation in <?= $city ?> for Minimal Downtime</h2>
                    <div class="about-service-text">
                        <p>
                            Looking for hassle-free office relocation solutions in <?= $city ?>? <strong><?= $company3 ?></strong> ensures that all your Corporate relocation needs are met smoothly. We offer professional moving services for offices, causing the least possible disruption to businesses in <?= $city ?>. Whether one is shifting a small-sized office or an entire corporate set-up, we take care of everything with utmost precision in <?= $city ?>.
                        </p>
                        <p>
                            Our highly skilled team ensures all your office equipment, furniture, IT systems, and even documents are properly packed and transported to the new address and set up there too. We know that in business time is of great importance so we offer fast and prompt office moving solutions to create a smooth transition without altering your workflow in <?= $city ?>.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/office.jpg') ?>" alt="office relocation in <?= $city ?>" class="img-fluid rounded my-3 w-100">
                        <p>
                            <strong><?= $company3 ?></strong> is one of the best office relocation companies in <?= $city ?> because we have services tailored according to your business needs. Every step of our process—from packing and labeling to safe transportation and reinstalling—is carefully planned so that the relocation process can be free of stress in <?= $city ?>.
                        </p>

                        <h3 class="mt-4">Check Our Affordable Office Shifting Prices Below:</h3>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped table-hover text-center align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Office Size</th>
                                        <th>100 - 350 km</th>
                                        <th>350 - 750 km</th>
                                        <th>750 - 1200 km</th>
                                        <th>1200 - 1700 km</th>
                                        <th>1700 - 2300 km</th>
                                        <th>2300 - 3000 km</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">Micro Office (1-5 Setup)</td>
                                        <td>Rs. 14,000 - 25,000</td>
                                        <td>Rs. 17,000 - 28,000</td>
                                        <td>Rs. 20,000 - 32,000</td>
                                        <td>Rs. 24,000 - 35,000</td>
                                        <td>Rs. 28,000 - 40,000</td>
                                        <td>Rs. 32,000 - 45,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Small Office (6-15 Setup)</td>
                                        <td>Rs. 20,000 - 35,000</td>
                                        <td>Rs. 25,000 - 42,000</td>
                                        <td>Rs. 28,000 - 48,000</td>
                                        <td>Rs. 32,000 - 55,000</td>
                                        <td>Rs. 38,000 - 65,000</td>
                                        <td>Rs. 45,000 - 75,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Medium Office (16-30 Setup)</td>
                                        <td>Rs. 30,000 - 50,000</td>
                                        <td>Rs. 38,000 - 60,000</td>
                                        <td>Rs. 45,000 - 70,000</td>
                                        <td>Rs. 52,000 - 80,000</td>
                                        <td>Rs. 60,000 - 95,000</td>
                                        <td>Rs. 70,000 - 1,10,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Large Corporate/IT Setup</td>
                                        <td>Rs. 50,000+</td>
                                        <td>Rs. 65,000+</td>
                                        <td>Rs. 80,000+</td>
                                        <td>Rs. 95,000+</td>
                                        <td>Rs. 1,15,000+</td>
                                        <td>Rs. 1,35,000+</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Office Relocation Process in <?= $city ?></h2>
                    <p class="text-muted">A carefully planned process to move your office without business interruption:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Pre-Move Survey</h4>
                            <p>Our team visits your current office in <?= $city ?> to assess the volume of items, map the new office layout, and prepare a detailed relocation plan and timeline.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Labelling & Inventory</h4>
                            <p>Every item — from computers and printers to files and chairs — is tagged and catalogued to ensure nothing is misplaced or mixed during transit.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Systematic Packing</h4>
                            <p>IT equipment is packed in anti-static bubble wrap. Furniture is disassembled, wrapped, and loaded onto our commercial trucks safely.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Setup at New Office</h4>
                            <p>We unload, unpack, reassemble furniture, and help arrange workstations so your team can resume work as quickly as possible.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-building-gear"></i></div>
                            <div class="choose-content">
                                <h5>Zero Business Downtime</h5>
                                <p>We work on weekends and nights to ensure your business never stops.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-pc-display-horizontal"></i></div>
                            <div class="choose-content">
                                <h5>IT Equipment Experts</h5>
                                <p>Servers, desktops, and network cables packed safely in anti-static materials.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-journal-check"></i></div>
                            <div class="choose-content">
                                <h5>Inventory Management</h5>
                                <p>Every item is tracked, labeled, and delivered to its exact designated location.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-check"></i></div>
                            <div class="choose-content">
                                <h5>Insurance Coverage</h5>
                                <p>Transit insurance available for high-value office equipment and assets.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "We moved our entire office of 45 workstations, server room, and conference setup over a single weekend. The team was disciplined, organized, and professional. Monday morning we were up and running without any issue. Highly recommended!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">R</div>
                            <div class="user-name">
                                <h6>Rajesh Agarwal</h6>
                                <span><?= $city ?>, India</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-or-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can you move our office in <?= $city ?> without disrupting operations?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-or-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We plan the relocation meticulously and execute during off-hours or weekends to ensure your daily operations are not interrupted.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-or-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you handle server rooms and IT infrastructure?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-or-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We have experience safely moving servers, UPS systems, networking equipment, and desktop workstations with proper anti-static packaging.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-or-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you provide an inventory list of moved items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-or-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We prepare a complete labelled inventory before the move and provide you with a checklist after delivery so every item can be verified.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'office-shifting-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
