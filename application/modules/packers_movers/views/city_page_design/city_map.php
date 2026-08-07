<?php 
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} 

if (!empty($lat) && !empty($lon)) { ?>
    <iframe
        width="100%"
        height="400"
        class="pm-city-map-iframe"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
    </iframe>
<?php } ?>