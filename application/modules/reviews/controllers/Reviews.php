<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    function index()
    {
        $data['reviews'] = FALSE;
        $data['pagination'] = '';
        $old_err = error_reporting();
        
        try {
            @error_reporting(0);
            $this->load->database();
            $db_debug = isset($this->db->db_debug) ? $this->db->db_debug : FALSE;
            $this->db->db_debug = FALSE;
            $this->load->library('pagination');
            
            $star_filter = $this->input->get('star');
            
            // Count total active reviews for pagination
            $this->db->where('status', 1);
            if ($star_filter) {
                $this->db->where('stars', $star_filter);
            }
            $total_rows = (int) @$this->db->count_all_results('reviews');
            
            // Pagination Config
            $config['base_url'] = site_url('reviews');
            $config['total_rows'] = $total_rows;
            $config['per_page'] = 9;
            $config['page_query_string'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            
            $config['full_tag_open'] = '<ul class="pagination justify-content-center" style="margin-top: 30px;">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '&laquo;';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0)" class="page-link" style="background:#002446; border-color:#002446; color:#fff;">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['attributes'] = array('class' => 'page-link');
            
            $this->pagination->initialize($config);
            
            $offset = $this->input->get('per_page') ? (int) $this->input->get('per_page') : 0;

            // Fetch data
            $this->db->order_by('r_id', 'desc');
            $this->db->where('status', 1);
            if ($star_filter) {
                $this->db->where('stars', $star_filter);
            }
            
            $query = @$this->db->get('reviews', $config['per_page'], $offset);
            $data['reviews'] = ($query && is_object($query)) ? $query : FALSE;
            $data['pagination'] = $this->pagination->create_links();
            $this->db->db_debug = $db_debug;
            @error_reporting($old_err);
        } catch (Throwable $e) {
            $data['reviews'] = FALSE;
            $data['pagination'] = '';
            @error_reporting($old_err);
        } catch (Exception $e) {
            $data['reviews'] = FALSE;
            $data['pagination'] = '';
            @error_reporting($old_err);
        }
        
        $data['title'] = "Customer Reviews & Ratings | Verified Moving Feedback | " . $this->comp['company3'];
        $data['description'] = "Read authentic client reviews and ratings for home shifting, vehicle transportation, and office relocation services provided by " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers reviews, customer ratings, verified feedback, relocation experience, " . $this->comp['company3'];
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->database();
            
            $email = $this->input->post('email');
            $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url('testimonials');
            
            // Check if email already exists
            $this->db->where('email', $email);
            $existing = $this->db->get('reviews');
            
            if ($existing->num_rows() > 0) {
                $this->session->set_flashdata('error', 'You have already submitted a review with this email address.');
                redirect($redirect_url);
                return;
            }
            
            $uploaded_images = [];
            if (isset($_FILES['review_images']) && !empty($_FILES['review_images']['name'][0])) {
                $upload_path = FCPATH . 'assets/images/reviews/';
                if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);
                
                $files = $_FILES['review_images'];
                $count = count($files['name']);
                
                for($i=0; $i<$count; $i++) {
                    $tmp_name = $files['tmp_name'][$i];
                    $name = $files['name'][$i];
                    $error = $files['error'][$i];
                    $size = $files['size'][$i];
                    
                    if ($error === UPLOAD_ERR_OK) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mime = finfo_file($finfo, $tmp_name);
                        finfo_close($finfo);
                        
                        $allowed_mimes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
                        if (in_array($mime, $allowed_mimes)) {
                            $new_name = uniqid('rev_') . '.jpg';
                            $dest = $upload_path . $new_name;
                            
                            if ($size > 150000) {
                                $info = getimagesize($tmp_name);
                                if ($info) {
                                    $image = null;
                                    if ($mime == 'image/jpeg' || $mime == 'image/jpg') $image = @imagecreatefromjpeg($tmp_name);
                                    elseif ($mime == 'image/png') $image = @imagecreatefrompng($tmp_name);
                                    elseif ($mime == 'image/webp') $image = @imagecreatefromwebp($tmp_name);
                                    
                                    if ($image) {
                                        if ($mime == 'image/png' || $mime == 'image/webp') {
                                            $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
                                            imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
                                            imagealphablending($bg, TRUE);
                                            imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
                                            imagedestroy($image);
                                            $image = $bg;
                                        }
                                        
                                        $width = imagesx($image);
                                        $height = imagesy($image);
                                        if ($width > 800) {
                                            $new_width = 800;
                                            $new_height = floor($height * (800 / $width));
                                            $tmp_img = imagecreatetruecolor($new_width, $new_height);
                                            imagecopyresampled($tmp_img, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                                            $image = $tmp_img;
                                        }
                                        imagejpeg($image, $dest, 60);
                                        imagedestroy($image);
                                        $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                                    }
                                }
                            } else {
                                $ext = pathinfo($name, PATHINFO_EXTENSION);
                                $new_name = uniqid('rev_') . '.' . $ext;
                                $dest = $upload_path . $new_name;
                                move_uploaded_file($tmp_name, $dest);
                                $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                            }
                        }
                    }
                }
            }
            
            $r_img_val = implode(',', $uploaded_images);
            $service_type = $this->input->post('r_type') ? $this->input->post('r_type') : 'Household Shifting';
            
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'r_title' => $this->input->post('city'),
                'r_type' => $service_type,
                'r_desc' => $this->input->post('review'),
                'stars' => (int) $this->input->post('rating'),
                'status' => 1, // Visible on website by default
                'b_id' => 0,
                'r_img' => $r_img_val,
                'views' => 0,
                'posted_date' => date('Y-m-d H:i:s')
            );
            
            $this->db->insert('reviews', $data);
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted successfully.');
            redirect($redirect_url);
        }
    }
}