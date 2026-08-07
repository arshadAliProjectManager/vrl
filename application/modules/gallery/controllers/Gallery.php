<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery | Household & Car Relocation Photos | " . $this->comp['company3'];
        $data['description'] = "Explore real photos of our packing material, container transport trucks, household goods loading, and warehouse storage operations at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers gallery, home shifting images, vehicle packing photos, " . $this->comp['company3'];
        
        $data['photos'] = array();
        $old_err = error_reporting();
        try {
            @error_reporting(0);
            $db_debug = isset($this->db->db_debug) ? $this->db->db_debug : FALSE;
            $this->db->db_debug = FALSE;
            $this->db->where('status', 1);
            $this->db->order_by('auto_id', 'DESC');
            $query = @$this->db->get('gallery');
            if ($query && is_object($query)) {
                $data['photos'] = $query->result();
            }
            $this->db->db_debug = $db_debug;
            @error_reporting($old_err);
        } catch (Throwable $e) {
            $data['photos'] = array();
            @error_reporting($old_err);
        } catch (Exception $e) {
            $data['photos'] = array();
            @error_reporting($old_err);
        }
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery | Moving & Packing Live Work | " . $this->comp['company3'];
        $data['description'] = "Watch live videos of our multi-layer bubble packing, car carrier loading, and safe household relocation procedures at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers videos, shifting work video, car transport video, " . $this->comp['company3'];
        
        $data['videos'] = array();
        $old_err = error_reporting();
        try {
            @error_reporting(0);
            $db_debug = isset($this->db->db_debug) ? $this->db->db_debug : FALSE;
            $this->db->db_debug = FALSE;
            $this->db->where('status', 1);
            $this->db->order_by('auto_id', 'DESC');
            $query = @$this->db->get('video_gallery');
            if ($query && is_object($query)) {
                $data['videos'] = $query->result();
            }
            $this->db->db_debug = $db_debug;
            @error_reporting($old_err);
        } catch (Throwable $e) {
            $data['videos'] = array();
            @error_reporting($old_err);
        } catch (Exception $e) {
            $data['videos'] = array();
            @error_reporting($old_err);
        }
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}