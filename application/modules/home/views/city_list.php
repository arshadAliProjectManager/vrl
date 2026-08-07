<?php
$locations = [
    // Karnataka
    ["city" => "Bangalore", "state" => "karnataka"],
    ["city" => "Mysuru", "state" => "karnataka"],
    ["city" => "Mangalore", "state" => "karnataka"],
    ["city" => "Hubli-Dharwad", "state" => "karnataka"],

    // Haryana
    ["city" => "Gurugram", "state" => "haryana"],
    ["city" => "Faridabad", "state" => "haryana"],
    ["city" => "Ambala", "state" => "haryana"],
    ["city" => "Panipat", "state" => "haryana"],

    // Major Metros & Hubs
    ["city" => "Delhi", "state" => "delhi"],
    ["city" => "Mumbai", "state" => "maharashtra"],
    ["city" => "Navi Mumbai", "state" => "maharashtra"],
    ["city" => "Pune", "state" => "maharashtra"],
    ["city" => "Hyderabad", "state" => "telangana"],
    ["city" => "Chennai", "state" => "tamil-nadu"],
    ["city" => "Kolkata", "state" => "west-bengal"],
    ["city" => "Ahmedabad", "state" => "gujarat"],
    ["city" => "Surat", "state" => "gujarat"],
    ["city" => "Jaipur", "state" => "rajasthan"],
    ["city" => "Chandigarh", "state" => "chandigarh"],
    ["city" => "Ghaziabad", "state" => "uttar-pradesh"],
    ["city" => "Indore", "state" => "madhya-pradesh"],
    ["city" => "Coimbatore", "state" => "tamil-nadu"],
    ["city" => "Visakhapatnam", "state" => "andhra-pradesh"],
    ["city" => "Bhopal", "state" => "madhya-pradesh"],
];
$totalCities = count($locations);
?>

<section class="search-location-section py-4">
    <div class="container cute-location-container">

        <!-- Top Header & Search Control -->
        <div class="row align-items-end cute-location-header g-3">
            <div class="col-lg-7">
                <div class="cute-location-badge">
                    <i class="bi bi-geo-alt-fill"></i> PAN India Network
                </div>
                <h2 class="cute-location-title">
                    Search By <span class="vrl-red-accent">Location</span>
                </h2>
                <p class="cute-location-subtitle">
                    Find reliable &amp; affordable Packers &amp; Movers across top Indian cities
                </p>
            </div>
            
            <div class="col-lg-5 d-flex flex-column flex-sm-row align-items-sm-center justify-content-lg-end gap-2">
                <span class="cute-count-pill me-sm-1">
                    <i class="bi bi-pin-map-fill text-danger me-1"></i> Showing <?= $totalCities ?> Cities
                </span>

                <div class="cute-search-box-wrapper">
                    <div class="cute-search-box">
                        <input type="text" 
                               class="cute-search-input" 
                               placeholder="Search your city..."
                               autocomplete="off"
                               aria-label="Search city location"
                               oninput="const q=this.value.toLowerCase(); document.querySelectorAll('.cute-city-col').forEach(el=>el.style.display=el.dataset.city.includes(q)?'':'none');">
                        <i class="bi bi-search search-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- City Cards Grid -->
        <div class="row g-2 g-md-3">
            <?php foreach ($locations as $location): 
                $citySlug = strtolower(str_replace(' ', '-', $location['city']));
                $link = $citySlug . "-packers-movers-" . $location['state'];
                $citySearchKey = strtolower($location['city']);
            ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 cute-city-col" data-city="<?= $citySearchKey ?>">
                    <a href="<?= site_url($link) ?>" 
                       class="cute-city-card" 
                       aria-label="Packers and Movers in <?= $location['city'] ?>">
                        <div class="cute-city-card-left">
                            <div class="cute-city-icon-wrapper">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="cute-city-info">
                                <span class="cute-city-prefix">Packers &amp; Movers</span>
                                <span class="cute-city-name"><?= $location['city'] ?></span>
                            </div>
                        </div>
                        <div class="cute-city-arrow">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>