<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Household Shifting Services | Home Relocation | " . $this->comp['company3'];
        $data['description'] = "Secure and stress-free household shifting services by " . $this->comp['company3'] . ". Door-to-door home packing, loading, moving, and setup at affordable rates.";
        $data['keywords'] = "home shifting services, household relocation, house packing moving, residential shifting, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Office Relocation Services | Commercial Moving | " . $this->comp['company3'];
        $data['description'] = "Fast and safe corporate office shifting services by " . $this->comp['company3'] . ". We ensure minimal business downtime with expert packing and heavy equipment handling.";
        $data['keywords'] = "office relocation services, commercial moving, corporate shifting, office packers and movers, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Bike Transportation Services | Two-Wheeler Shifting | " . $this->comp['company3'];
        $data['description'] = "Safe bike shipping and two-wheeler transport across India with " . $this->comp['company3'] . ". Scratch-free multi-layer packing and covered carrier delivery.";
        $data['keywords'] = "bike transportation services, two wheeler shifting, bike parcel service, bike transport India, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Car Transportation Services | Car Carrier Service | " . $this->comp['company3'];
        $data['description'] = "Reliable door-to-door car carrier services nationwide with " . $this->comp['company3'] . ". Fully insured, enclosed car transport with real-time tracking.";
        $data['keywords'] = "car transportation services, car carrier service, vehicle transport India, car shifting company, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Professional Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Top-quality packing and moving solutions by " . $this->comp['company3'] . ". High-grade bubble wrap, wooden crating, and safe transit for all household and commercial goods.";
        $data['keywords'] = "packing and moving services, professional packing, bubble wrap packing, goods moving company, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading and Unloading Services | Safe Cargo Handling | " . $this->comp['company3'];
        $data['description'] = "Professional labor and equipment for heavy item loading and unloading services by " . $this->comp['company3'] . ". Scratchless loading with expert care and safety.";
        $data['keywords'] = "loading and unloading services, heavy item loading, shifting labor services, cargo handling, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }
}
