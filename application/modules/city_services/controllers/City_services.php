<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class City_services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    private function format_city($city_slug) {
        $city = str_replace("_", " ", $city_slug);
        return urldecode(ucwords(str_replace("-", " ", $city)));
    }

    function home_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Best Home Shifting Services in $city | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services in $city from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates.";
        $data['keywords'] = "home shifting in $city, household movers $city, house relocation $city, packers movers $city, " . $this->comp['company3'];
        $data['module'] = "city_services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Professional Office Relocation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services in $city by " . $this->comp['company3'] . ". Minimize downtime with our experienced office relocation experts.";
        $data['keywords'] = "office shifting in $city, commercial moving $city, corporate relocation $city, office packers movers $city, " . $this->comp['company3'];
        $data['module'] = "city_services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Safe Car Transportation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services in $city by " . $this->comp['company3'] . ". On-time and damage-free vehicle delivery across India.";
        $data['keywords'] = "car transport in $city, car carrier service $city, vehicle shifting $city, car moving company $city, " . $this->comp['company3'];
        $data['module'] = "city_services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Reliable Bike Transportation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services in $city from " . $this->comp['company3'] . ". We ensure scratch-free and timely delivery.";
        $data['keywords'] = "bike transport in $city, two wheeler shifting $city, bike parcel service $city, bike movers $city, " . $this->comp['company3'];
        $data['module'] = "city_services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }
}
