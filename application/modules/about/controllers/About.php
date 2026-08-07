<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us - Reliable Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . ", our " . $this->comp['experience'] . " years legacy, infrastructure, expert team, mission, and vision in household shifting and relocation services.";
        $data['keywords'] = "about " . $this->comp['company3'] . ", packers and movers company, reliable moving services, household relocation experts";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | Trusted Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Discover why thousands trust " . $this->comp['company3'] . " for safe, reliable, and transparently priced shifting, vehicle transport, and corporate relocation services.";
        $data['keywords'] = "why choose " . $this->comp['company3'] . ", safe packers movers, transparent relocation pricing, verified moving company";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | Relocation Guide | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about packing and shifting charges, transit insurance, delivery timeline, tracking, and restricted items at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers faqs, shifting cost query, transit insurance moving, relocation questions, " . $this->comp['company3'];
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['db_reviews'] = array();
        $old_err = error_reporting();
        try {
            @error_reporting(0);
            $this->load->database();
            $db_debug = isset($this->db->db_debug) ? $this->db->db_debug : FALSE;
            $this->db->db_debug = FALSE;
            $this->db->order_by('r_id', 'desc');
            $this->db->where('status', 1);
            $query = @$this->db->get('reviews');
            if ($query && is_object($query)) {
                $data['db_reviews'] = $query->result_array();
            }
            $this->db->db_debug = $db_debug;
            @error_reporting($old_err);
        } catch (Throwable $e) {
            $data['db_reviews'] = array();
            @error_reporting($old_err);
        } catch (Exception $e) {
            $data['db_reviews'] = array();
            @error_reporting($old_err);
        }

        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . " home shifting, vehicle transportation, and office relocation services.";
        $data['keywords'] = "packers movers reviews, customer feedback, client testimonials, " . $this->comp['company3'] . " ratings";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "Read the Privacy Policy of " . $this->comp['company3'] . " to understand how we collect, handle, and protect your personal data during your relocation.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "Review the terms and conditions governing packing, household shifting, vehicle transport, and warehousing services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}
