<?php
if (strtolower($city) == "") {
   $htmlcontent = "";
   $htmlcontent1 = "";
   $htmlcontent2 = "";
} else {
   $htmlcontent = "
<!-- Main Intro Prose -->
<div class='pm-about-intro-text mb-4'>
    <p class='mb-3'>
       Looking for Packers and Movers in $city? Pricing for a local relocation varies from case to case. In many cases, the price will depend on volume of goods, distance, floor level, lift availability, packing requirement and vehicle. Small shifting of 1 BHK house will cost between ₹3,500 to ₹7,000, and a bigger house or apartment is usually costly. Inter-state relocation cost depends on route and goods volume.
    </p>
    <p class='mb-2'>
       We offer services related to home shifting, office shifting, packing, loading, transportation and vehicle shifting. Clients can discuss their inventory first and get quotations based on actual relocation requirements.
    </p>
    <p>Looking for a shifting estimate? Please call $phone and provide pick-up, drop location and approximate household size.</p>
</div>
";

$htmlcontent1 = "
<!-- Normal Content Relocation Process Workflow -->
<div class='pm-process-section'>
    <div class='mb-4'>
        <h3>What Packers and Movers in $city Actually do</h3>
        <p>Typical home relocation includes bed, wardrobes, fridge, washing machine, television, sofa, kitchen articles, clothes and other items. Each item requires different treatment.</p>

        <p>Concerned about fragile items? It is natural. Our packing professionals examine the goods before starting the job and segregate the delicate articles. Some furniture may require dismantling, some appliances require special packaging, and some glass products may need extra cushioning.</p>

        <p>Household shifting is only one part of the services. Other <b>Shifting Services in $city</b> include office shifting, goods moving for businesses, car and bike transportation, packing support and loading/unloading assistance.</p>

        <p>Worker behaviour plays a significant role in any shifting operation. The workers enter the client's premises and handle his personal belongings for some hours. The worker should communicate respectfully, keep the work area organized and have basic cleanliness. Clean work clothing, proper handling and communication seems minor things but in the client's premises, it becomes very important.</p>
    </div>
</div>

<!-- Spacious & Elegant Relocation Services Matrix -->
<div class='pm-services-matrix-section mt-5 pt-4 border-top'>
    <div class='mb-4'>
        <h4>Which Vehicles We Use for Shifting in $city?</h4>
        <p>Choosing the right vehicle depends on volume of the goods and road accessibility.</p>

        <p>In case of a smaller relocation, a goods vehicle or Tata Ace-type goods vehicle may be an ideal choice. Larger households may require larger covered trucks, and big household and commercial relocations may require 14 ft, 17 ft or other appropriate goods vehicles depending on inventory.</p>

        <p>Not always, the smallest vehicle becomes the most cost-effective choice. Before dispatching the vehicle, our team considers the approximate volume of the goods, road accessibility of both addresses and travel distance. A big vehicle will cause issues when approaching a small residential road; in that case, a small vehicle or tempo will be a more practical choice.</p>

        <p>Long distances from $city affect transportation cost based on fuel cost, travel time and distance. The route planning is done based on destination and road connectivity rather than charging one fixed kilometre rate for each consignment.</p>

        <h4>How We Resolve the Common Relocation Issues in $city</h4>
        <p>The fact is relocation planning is rarely foolproof.</p>

        <p>The lift may not be available at the last moment, society permission restricts shifting hours, parking facility of the vehicle may not be available, and three more cupboards may be added in the inventory which were not informed previously.</p>

        <p>Experienced Local Relocating Services in $city resolve all these kinds of situations.</p>

        <p>If the vehicle accessibility is difficult, the team considers a smaller loading vehicle. If the lift is not available, manpower and carrying time will be reconsidered. Fragile or unusual goods are identified before loading. If the inventory has changed significantly, it is better to inform the team about the new requirement before the job rather than arguing about it during work.</p>

        <span class='fs-4 fw-bold text-dark mb-1'>Our Relocation Process</span>
        <p>Our process begins with a client's query. Our team asks for the pickup address, destination, shifting date, floor, lift availability and approximate inventory of the household. For large relocation, inventory checking or survey will be helpful to make more accurate estimation.</p>

        <p>On the day of the shifting, our moving professionals arrange the packing according to the type of the goods. The furniture and appliances receive the necessary protection and the smaller goods are packed in boxes. Goods are moved properly to the loading point.</p>

        <p>Loading planning is done based on weight and fragility of the goods; the fragile boxes should not be kept underneath the heavy furniture (it seems obvious, but improper loading causes unnecessary damages).</p>

        <p>Once the loading is completed, the vehicle takes the planned route. On reaching the destination, the team unloads the consignment and places the goods based on the service.</p>
    </div>
</div>
";

$htmlcontent2 = "
<!-- Modern Why Choose Us Section -->
<div class='pm-why-choose-section mt-5 pt-4 border-top'>
    <div class='mb-4'>
        <span class='badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 fw-bold fs-7 text-uppercase mb-2 d-inline-block'><i class='bi bi-award-fill me-1'></i> Why Choose Us</span>
        <h3 class='pm-section-title fw-bold text-dark mb-1'>Why Choose <span class='text-danger'>{$company3}</span> in {$city}?</h3>
        <p class='text-muted small mb-0'>We understand local routes, society rules, parking regulations, and apartment elevator restrictions in {$city}:</p>
    </div>
    
    <div class='row g-3 g-md-4'>
        <!-- Card 1 -->
        <div class='col-md-4'>
            <div class='pm-why-card p-4 rounded-4 bg-white border position-relative text-center h-100 d-flex flex-column align-items-center justify-content-center'>
                <div class='pm-why-icon-box mb-3'>
                    <i class='bi bi-people-fill'></i>
                </div>
                <h6 class='fw-bold text-dark mb-2 fs-6'>Trained In-House Staff</h6>
                <p class='small text-muted mb-0'>No casual day laborers. Only background-verified professional packers.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class='col-md-4'>
            <div class='pm-why-card p-4 rounded-4 bg-white border position-relative text-center h-100 d-flex flex-column align-items-center justify-content-center'>
                <div class='pm-why-icon-box mb-3'>
                    <i class='bi bi-shield-check'></i>
                </div>
                <h6 class='fw-bold text-dark mb-2 fs-6'>Transparent Pricing</h6>
                <p class='small text-muted mb-0'>Zero hidden taxes or surprise loading fees after job completion.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class='col-md-4'>
            <div class='pm-why-card p-4 rounded-4 bg-white border position-relative text-center h-100 d-flex flex-column align-items-center justify-content-center'>
                <div class='pm-why-icon-box mb-3'>
                    <i class='bi bi-person-badge-fill'></i>
                </div>
                <h6 class='fw-bold text-dark mb-2 fs-6'>Dedicated Move Manager</h6>
                <p class='small text-muted mb-0'>Single point of contact from packing day to final delivery at your doorstep.</p>
            </div>
        </div>
    </div>
</div>
";
$htmlcontent3 = "
        <h5>Packing Materials We Use</h5>
        <p>Depending on the type of the goods and distance, the packing includes:</p>
        <ul>
        <li>Corrugated boxes for household articles</li>
        <li>Bubble wrap for glass and fragile goods</li>
        <li>Foam sheets and protective cushioning</li>
        <li>Stretch film for furniture and appliances</li>
        <li>Packing tape and corner protection</li>
        <li>Protective covers for selected bulky items</li>
        </ul>
        <p>Long distance transportation requires stronger packing than <b>Local Moving in $city</b>, and material requirements will be accordingly planned.</p>

        <h6>Transparent Packers and Movers Charges in $city</h6>
        <p>Moving can be costly, but how do we ensure fairness? Quotation will be based on the actual work requirement.</p>

        <p>Distance is an important factor but so are manpower, household size, packing material, stairs, lift availability, vehicle and additional handling.</p>

        <p>Do not compare quotations based on the final figure. Compare what is included in it. Clients searching for <em>Best Packers and Movers $city, Top Packers and Movers $city or Packers and Movers Near Me</em> usually worry about hidden charges. Inventory check before booking the service minimizes the risk to a great extent.</p>

        <h6>A Typical Moving Scenario</h6>
        <p>Consider a common scenario of a 2BHK relocation in $city. The client says that the household has around 25 cartons, one fridge, one washing machine, one television, two beds and one sofa.</p>

        <p>Actual inventory turns out to be larger because the inventory does not include kitchen articles and wardrobe contents.</p>

        <p>Rather than providing an undersized vehicle, the moving team revises the requirement of the load before dispatch. Packing begins earlier, bulky furniture is prepared separately, fragile boxes are marked, and appropriate vehicles are chosen. This small inventory checking can save extra trips, improper loading and price disputes at the last moment.</p>

";
}
?>