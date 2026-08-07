<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function loadBlogs() {
        $old_err = error_reporting();
        try {
            @error_reporting(0);
            $db_debug = isset($this->db->db_debug) ? $this->db->db_debug : FALSE;
            $this->db->db_debug = FALSE;
            
            // Fetch blogs dynamically from the database table 'blog'
            if (@$this->db->table_exists('blog')) {
                $this->db->order_by('b_id', 'DESC');

                // Filter to only display blogs marked as 'show' / active (Exclude status = 0, 'hide', 'inactive')
                if (@$this->db->field_exists('status', 'blog')) {
                    $this->db->group_start();
                    $this->db->where('status IS NULL', null, false);
                    $this->db->or_where('status', 1);
                    $this->db->or_where('status', '1');
                    $this->db->or_where('status', 'show');
                    $this->db->or_where('status', 'active');
                    $this->db->or_where('status', '');
                    $this->db->group_end();
                }

                $query = @$this->db->get('blog');
                $db_blogs = ($query && is_object($query)) ? $query->result_array() : [];
                $this->db->db_debug = $db_debug;
                @error_reporting($old_err);
                if (!empty($db_blogs)) {
                    return $db_blogs;
                }
            }
            @error_reporting($old_err);
        } catch (Throwable $e) {
            @error_reporting($old_err);
        } catch (Exception $e) {
            @error_reporting($old_err);
        }

        // Fallback to JSON file if database is empty or unavailable
        $path = FCPATH . 'admin_data/blogs.json';
        if (file_exists($path)) {
            $json_blogs = json_decode(file_get_contents($path), true) ?: [];
            return array_values(array_filter($json_blogs, function($b) {
                $st = strtolower((string)($b['status'] ?? '1'));
                return !in_array($st, ['0', 'hide', 'hidden', 'inactive', 'disabled']);
            }));
        }

        return [];
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = $this->loadBlogs();
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Relocation Blog & Packing Guides | " . $this->comp['company3'];
        $data['description'] = "Explore expert moving tips, household shifting checklists, car transportation advice, and relocation guides on the official blog of " . $this->comp['company3'] . ".";
        $data['keywords'] = "relocation blog, moving tips, packing guides, home shifting advice, " . $this->comp['company3'];
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title'] ?? '');
            
            // Handle CI's translate_uri_dashes by replacing _ back to - in incoming slug
            $search_slug = str_replace('_', '-', $slug);

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (!empty($auto_slug) && strtolower($auto_slug) == strtolower($search_slug)) ||
                (($b['b_id'] ?? $b['id'] ?? '') == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $data['title'] = ucfirst($selected_blog->title ?? 'Blog Article') . " | " . $this->comp['company3'];
            $blog_desc = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : (!empty($selected_blog->description) ? word_limiter(strip_tags($selected_blog->description), 25) : "Read our article at " . $this->comp['company3'] . ".");
            $data['description'] = $blog_desc;
            $data['keywords'] = strtolower(implode(', ', array_filter(explode(' ', preg_replace('/[^a-zA-Z0-9\s]/', '', $selected_blog->title ?? ''))))) . ", " . $this->comp['company3'];
            
            $image_file = $selected_blog->image ?? '';
            $img_src = base_url('assets/images/about/packers_movers.jpg');
            if (!empty($image_file)) {
                if (filter_var($image_file, FILTER_VALIDATE_URL)) {
                    $img_src = $image_file;
                } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                    $img_src = base_url('assets/uploads/blog/' . $image_file);
                } elseif (file_exists(FCPATH . 'assets/uploads/blogs/' . $image_file)) {
                    $img_src = base_url('assets/uploads/blogs/' . $image_file);
                } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                    $img_src = base_url('uploads/blogs/' . $image_file);
                }
            }
            $data['img'] = $img_src;
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
