<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Services grid widget
$this->load->view('service_widget');

// Load the Our Process widget
$this->load->view('process_widget');

// Load the About Us widget
$this->load->view('about_widget');

// Load the Reviews widget
$this->load->view('review_widget');
$this->load->view('city_list');
// Load the FAQs widget
$this->load->view('faqs_widget');
?>
