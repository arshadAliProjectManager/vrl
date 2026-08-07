<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "404 Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The requested page was not found at " . $this->comp['company3'] . ". Please return to our homepage or contact us for relocation assistance.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Best Packers and Movers in India | " . $this->comp['company3'];
        $data['description'] = "Hire top-rated packers and movers at " . $this->comp['company3'] . ". We offer safe household shifting, office relocation, vehicle transport, and warehousing across India.";
        $data['keywords'] = "packers and movers, home shifting services, office relocation, vehicle transport, moving company India, " . $this->comp['company3'];

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
