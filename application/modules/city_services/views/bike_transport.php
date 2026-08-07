<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SECURE • FAST • TWO WHEELER RELOCATION',
    'bc_h1' => 'Bike Transportation in ' . $city,
    'bc_desc' => 'Door-to-door bike shipping and two-wheeler transport services in ' . $city . ' with multi-layer protective packaging.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Bike Transportation in ' . $city]
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
                    <h2 class="service-section-title">Expert Bike Transportation Services in <?= $city ?></h2>
                    <div class="about-service-text">
                        <p>
                            Do you need safe and surety bike shifting services in <?= $city ?>? <strong><?= $company3 ?></strong> provide bike transportation services for sure delivery of your two-wheeler at the right destination within the time frame decided by you in <?= $city ?>. Whether within a city or between different cities, we have expert skills and facilities to perform safe and reliable bike transporting in <?= $city ?>.
                        </p>
                        <p>
                            We use top class packing material to avoid any damage at transshipment, and advanced techniques ensure utmost care at the time of transit. Our bike shifters provide door-to-door pickup and delivery facilities in <?= $city ?>. Peace of mind is given from picking up from one location in <?= $city ?> to any other for a stress-free two-wheeler move. It doesn't matter what kind of bike, scooter, and high end motorcycles we transfer; they all receive attention in <?= $city ?>.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/bike.jpg') ?>" alt="bike shifting in <?= $city ?>" class="img-fluid rounded my-3 w-100">
                        <p>
                            <strong><?= $company3 ?></strong> will ensure your bike is in good hands in <?= $city ?>. Our transparent pricing and commitment to timely delivery make us one of the most trusted bike relocation companies in <?= $city ?>.
                        </p>

                        <h3 class="mt-4">Check Our Affordable Bike Transportation Prices Below:</h3>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped table-hover text-center align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Bike Type</th>
                                        <th>Up to 400 Km</th>
                                        <th>400 - 800 Km</th>
                                        <th>800 - 1300 Km</th>
                                        <th>1300 - 1900 Km</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">100cc - 150cc Bike</td>
                                        <td>Rs. 2,000 - 3,500</td>
                                        <td>Rs. 3,000 - 4,000</td>
                                        <td>Rs. 3,500 - 4,500</td>
                                        <td>Rs. 4,000 - 5,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">150cc - 200cc Bike</td>
                                        <td>Rs. 2,400 - 3,600</td>
                                        <td>Rs. 3,400 - 4,100</td>
                                        <td>Rs. 3,900 - 4,600</td>
                                        <td>Rs. 4,400 - 4,900</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">200cc - 250cc Bike</td>
                                        <td>Rs. 2,700 - 3,900</td>
                                        <td>Rs. 3,700 - 4,400</td>
                                        <td>Rs. 4,200 - 4,900</td>
                                        <td>Rs. 4,700 - 5,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">250cc - 350cc Bike</td>
                                        <td>Rs. 2,800 - 3,800</td>
                                        <td>Rs. 3,800 - 4,300</td>
                                        <td>Rs. 4,300 - 4,800</td>
                                        <td>Rs. 4,800 - 5,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">350cc - 500cc Bike</td>
                                        <td>Rs. 2,800 - 3,800</td>
                                        <td>Rs. 3,800 - 4,300</td>
                                        <td>Rs. 4,300 - 4,800</td>
                                        <td>Rs. 4,800 - 5,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Sports Bike</td>
                                        <td>Rs. 4,500 - 7,000</td>
                                        <td>Rs. 6,000 - 9,000</td>
                                        <td>Rs. 8,000 - 12,000</td>
                                        <td>Rs. 11,000 - 15,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Cruiser Sports Bike</td>
                                        <td>Rs. 5,000 - 8,500</td>
                                        <td>Rs. 7,000 - 10,500</td>
                                        <td>Rs. 9,000 - 13,500</td>
                                        <td>Rs. 12,000 - 16,500</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Off Road Sports Bike</td>
                                        <td>Rs. 6,000 - 9,000</td>
                                        <td>Rs. 7,500 - 11,500</td>
                                        <td>Rs. 10,000 - 14,500</td>
                                        <td>Rs. 13,000 - 17,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Bike Relocation Process in <?= $city ?></h2>
                    <p class="text-muted">We follow a structured 4-step process to ensure damage-free bike delivery:</p>
                    <div class="process-timeline">
                        <!-- Step 1 -->
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Inspection &amp; Paperwork</h4>
                            <p>We document your bike's condition, note existing scratches, verify documents (RC, Insurance), and prepare a vehicle inspection report.</p>
                        </div>
                        <!-- Step 2 -->
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Multi-Layer Packing</h4>
                            <p>We wrap sensitive parts (headlights, mirrors, speedometer) with bubble wrap, cover the body with foam sheets, and lock them in place with stretch wrap.</p>
                        </div>
                        <!-- Step 3 -->
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Safe Loading &amp; Transit</h4>
                            <p>Your bike is loaded using ramps into a specialized enclosed vehicle carrier. It is anchored securely with heavy-duty safety belts to prevent movement.</p>
                        </div>
                        <!-- Step 4 -->
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Doorstep Delivery &amp; Inspection</h4>
                            <p>We deliver the bike straight to your home in the destination city. You inspect the vehicle and sign off the delivery receipt.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h5>Scratch-Free Guarantee</h5>
                                <p>Multi-layered bubble and foam wrapping for maximum safety.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck"></i></div>
                            <div class="choose-content">
                                <h5>Specialized Carriers</h5>
                                <p>Enclosed truck carriers equipped with secure anchoring straps.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-clock-fill"></i></div>
                            <div class="choose-content">
                                <h5>On-Time Delivery</h5>
                                <p>Efficient tracking and committed delivery timelines.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-journal-check"></i></div>
                            <div class="choose-content">
                                <h5>Full Insurance Options</h5>
                                <p>Transit insurance covers any accidental damages or theft.</p>
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
                            "Excellent bike transportation service! My Royal Enfield bullet was delivered safely from <?= $city ?> to Bangalore. Not a single scratch, and the team kept me updated throughout. Very professional team."
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">R</div>
                            <div class="user-name">
                                <h6>Rohit Sharma</h6>
                                <span><?= $city ?>, India</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <!-- FAQ 1 -->
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-s-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are required for shipping my bike from <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-s-1" class="collapse">
                                <div class="faq-card-body">
                                    You need to submit copies of the Registration Certificate (RC), a valid Insurance copy, and a government ID proof (Aadhar Card or Driving License).
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2 -->
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-s-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do I need to empty the petrol tank?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-s-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes, for safety regulations during transport, the petrol tank must be almost empty. Keeping less than 1 liter of petrol is recommended to prevent any hazardous leakages in the cargo.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3 -->
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-s-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Is transit insurance included for bike shipping?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-s-3" class="collapse">
                                <div class="faq-card-body">
                                    We offer comprehensive transit insurance options at a small percentage of your bike's declared value. This safeguards you from financial losses in case of unforeseen road accidents.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'bike-transport-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
