<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
  public function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('blogger_model', 'b_model', true);
        $this->load->model('super_admin_model', 'sa_model', true);
       $this->load->model('welcome_model', 'w_model', true);
    }
	
    public function index()
	{
        $data = array();
        $data['title'] = 'home';
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['all_category'] = $this->w_model->select_all_category();
         $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['result'] = $this->b_model->select_all_blogs();
        $data['maincontent'] = $this->load->view('home_message', $data, true);
     
        $this->load->view('home', $data);
	}
        public function single_blog($blog_id) {
        $data = array();
        $data['result'] = $this->b_model->select_blog_by_blog_id($blog_id);
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['comments'] = $this->b_model->select_comments_by_blog_id($blog_id);
        $data['all_comments'] = $this->b_model->count_comments_info($blog_id);
        $data['maincontent'] = $this->load->view('single_blog', $data, true);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['title'] = 'Blog';
       // $data['archive'] = 'true';
        $this->load->view('home', $data);
    }
     public function save_comments() {
        $data = array();
        $data['name'] = $this->input->post('name', true);
        $data['blog_id'] = $this->input->post('blog_id', true);
        $data['comments_description'] = $this->input->post('comments_description', true);
       $sdata = array();

            $sdata['exception'] = "<h3>Your comment is waiting for appoval!</h3>";
            $this->session->set_userdata($sdata);

        $this->w_model->save_comments_info($data);

        redirect("welcome/single_blog/" . $data['blog_id']);
    }
      public function category_blog($category_id) {
        $data = array();
       $data['site_logo'] = $this->sa_model->select_logo_image();
       $data['all_events']=  $this->sa_model->select_all_events();
        $data['result'] = $this->b_model->select_blogs_by_category_id($category_id);
        $data['maincontent'] = $this->load->view('home_message', $data, true);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['title'] = 'Blog';
        $this->load->view('home', $data);
    }
    
      public function event_blog($event_id) {
        $data = array();
       $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['result'] = $this->sa_model->select_event_by_event_id($event_id);
        $data['maincontent'] = $this->load->view('event_message', $data, true);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['title'] = 'Event';
        $this->load->view('home', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */