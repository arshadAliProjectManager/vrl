<?php
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));

$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
?>

<?php include 'city_page_design/city_slider.php'; ?>

<?php include 'city_page_design/city_about.php'; ?>
