<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SAFE • RELIABLE • VEHICLE CARRIER',
    'bc_h1' => 'Car Transportation in ' . $city,
    'bc_desc' => 'Professional car carrier & enclosed vehicle transport services in ' . $city . ' with zero damage guarantee.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Car Transportation in ' . $city]
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
                    <h2 class="service-section-title">Precision in Car Transportation Excellence in <?= $city ?></h2>
                    <div class="about-service-text">
                        <p>
                            Are you looking for reliable car relocation services in <?= $city ?>? <strong><?= $company3 ?></strong> offers the safest and most reliable car transportation solutions for you. We transport your car to anywhere within the city or all over India with full security and efficiency in <?= $city ?>.
                        </p>
                        <p>
                            We know how much care you take of your vehicle and therefore take extra care as we relocate your vehicle in <?= $city ?>. With our specialized carriers, your vehicle is protected from any chance of damage during transit, be it a luxury or family car in <?= $city ?>.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/car.jpg') ?>" alt="car shifting in <?= $city ?>" class="img-fluid rounded my-3 w-100">
                        <p>
                            We will be ensuring that your door-to-door service, and as per request, the track is online in real-time to deliver promptly in <?= $city ?>. Our pleasure is delivering personalized, value-for-money car-moving solutions that do not inconvenience either your time or pocket in any which way in <?= $city ?>.
                        </p>

                        <h3 class="mt-4">Check Our Affordable Car Transportation Prices Below:</h3>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped table-hover text-center align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Move type</th>
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
                                        <td class="fw-bold">Hatchback Car</td>
                                        <td>Rs. 5,500 - 11,000</td>
                                        <td>Rs. 7,500 - 14,000</td>
                                        <td>Rs. 9,000 - 17,000</td>
                                        <td>Rs. 11,000 - 13,000</td>
                                        <td>Rs. 13,000 - 23,000</td>
                                        <td>Rs. 15,000 - 26,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Sedan Car</td>
                                        <td>Rs. 7,000 - 10,000</td>
                                        <td>Rs. 10,000 - 15,000</td>
                                        <td>Rs. 13,000 - 18,000</td>
                                        <td>Rs. 15,000 - 20,000</td>
                                        <td>Rs. 18,000 - 24,000</td>
                                        <td>Rs. 21,000 - 27,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">SUV Car</td>
                                        <td>Rs. 13,000 - 15,000</td>
                                        <td>Rs. 15,000 - 19,000</td>
                                        <td>Rs. 18,000 - 22,000</td>
                                        <td>Rs. 21,000 - 24,000</td>
                                        <td>Rs. 23,000 - 27,000</td>
                                        <td>Rs. 25,000 - 30,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Luxury Car</td>
                                        <td>Rs. 17,000 - 21,000</td>
                                        <td>Rs. 20,000 - 25,000</td>
                                        <td>Rs. 23,000 - 27,000</td>
                                        <td>Rs. 26,000 - 31,000</td>
                                        <td>Rs. 29,000 - 35,000</td>
                                        <td>Rs. 31,000 - 40,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Sports Car</td>
                                        <td>Rs. 20,000 - 24,000</td>
                                        <td>Rs. 24,000 - 28,000</td>
                                        <td>Rs. 27,000 - 31,000</td>
                                        <td>Rs. 30,000 - 35,000</td>
                                        <td>Rs. 33,000 - 40,000</td>
                                        <td>Rs. 35,000 - 45,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Car Relocation Process in <?= $city ?></h2>
                    <p class="text-muted">We execute a rigorous loading and transit process for vehicle safety:</p>
                    <div class="process-timeline">
                        <!-- Step 1 -->
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Detailed Pre-Move Audit</h4>
                            <p>We check the tires, engine oil, fuel levels, and note down all pre-existing scratches or dents on a standard car condition report.</p>
                        </div>
                        <!-- Step 2 -->
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Parts Wrapping &amp; Preparation</h4>
                            <p>We wrap key exterior components like side-view mirrors, antenna, and body spoilers with thick foam padding to prevent scratching.</p>
                        </div>
                        <!-- Step 3 -->
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Hydraulic Loading &amp; Anchoring</h4>
                            <p>The car is carefully driven onto our double-deck car carrier trailer. The wheels are locked with chocks and tied securely to the truck deck.</p>
                        </div>
                        <!-- Step 4 -->
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Safe Destination Drop-Off</h4>
                            <p>Upon arriving in the destination city, we safely unload and deliver the car to your doorstep. You verify its condition against the audit report.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h5>Safety-First Loading</h5>
                                <p>Heavy-duty tire locks and safety harnesses prevent vehicle movement.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck-flatbed"></i></div>
                            <div class="choose-content">
                                <h5>Modern Car Trailers</h5>
                                <p>Well-maintained open and enclosed double-deck car carriers.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-geo-alt-fill"></i></div>
                            <div class="choose-content">
                                <h5>GPS Real-Time Tracking</h5>
                                <p>Know where your vehicle is throughout its highway transit.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-person-fill-check"></i></div>
                            <div class="choose-content">
                                <h5>Licensed Operators</h5>
                                <p>Highly skilled trailer drivers specializing in vehicle freight.</p>
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
                            "I shipped my Hyundai Creta from <?= $city ?> using <?= $company3 ?>. The process was super smooth, they updated me every day with transit locations, and the vehicle was delivered scratch-free. Highly recommended!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">P</div>
                            <div class="user-name">
                                <h6>Priya Mehta</h6>
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
                                <span class="flex-grow-1">Can I keep personal goods inside the car during transit from <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-s-1" class="collapse">
                                <div class="faq-card-body">
                                    No. Packing personal items, luggage, or valuables inside the vehicle is strictly prohibited due to cargo regulations and safety policies. This also prevents internal items from shifting and causing damage.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2 -->
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-s-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How much fuel should be left in the car tank?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-s-2" class="collapse">
                                <div class="faq-card-body">
                                    We recommend keeping the fuel level at around one-quarter (1/4) of the tank capacity. This is sufficient for driving the car during loading, unloading, and local delivery while minimizing extra weight and hazard risks.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3 -->
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-s-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How long does it take to ship a car to another state?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-s-3" class="collapse">
                                <div class="faq-card-body">
                                    The delivery timeline varies based on distance. Usually, local intercity deliveries take 2-3 days, while long-distance state-to-state relocations (e.g. <?= $city ?> to Delhi/Bangalore) can take 5-8 days.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'car-transport-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
