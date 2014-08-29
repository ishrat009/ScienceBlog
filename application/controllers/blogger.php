<?php
session_start();

class Blogger extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('blogger_model','b_model',true);
         $this->load->model('welcome_model', 'w_model', true);
           $this->load->model('super_admin_model', 'sa_model', true);
         $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {

            redirect("login/user_login", "refresh");
        }
          $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'scripts/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "500px", //Setting a custom width
                'height' => '300px', //Setting a custom height
            ),
        );
    }
      public function index()
    {
        $data=array();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['maincontent']=$this->load->view('welcome','',true);
        $data['title']=$this->session->userdata('full_name');
        $this->load->view('home',$data);
    }
    
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    
     public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('login_status');
        $sdata['exception'] = "<h2>Logout Successfully</h2>";
        $this->session->set_userdata($sdata);
        redirect("login/user_login");
    }
    
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    
     public function profile() {

        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['result'] = $this->b_model->select_user_by_user_id($user_id);
        $data['title'] = $this->session->userdata('full_name');
        $data['maincontent'] = $this->load->view('view_profile', $data, true);
       
        $this->load->view('home', $data);
    }
    
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data and $user_id.
	 */
    
      public function edit_profile() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['result'] = $this->b_model->select_user_by_user_id($user_id);
        $data['title'] = $this->session->userdata('full_name');
        $data['maincontent'] = $this->load->view('edit_profile', $data, true);
        $this->load->view('home', $data);
    }
    
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This return void value
	 */
    
    public function update_user() {
        $data = array();
        $user_id = $this->session->userdata('user_id');

        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['address'] = $this->input->post('address', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['city'] = $this->input->post('city', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
        //$data['profile_image'] = $this->input->post('profile_image', true);



        /* ------------------Start LOGO Image Upload---------------- */
        $config['upload_path'] = './images/profile_images';
        $config['allowed_types'] = 'gif|jpg|png|ogg';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $error = '';
        $udata = '';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('profile_image')) {
            $error = array('error' => $this->upload->display_errors());
          
        } else {
            $udata = array('upload_data' => $this->upload->data());
            $data['profile_image'] = "images/profile_images/" . $udata['upload_data']['file_name'];
            
        }

        /* ------------------end LOGO Image Upload---------------- */


        $this->b_model->update_user($data, $user_id);
        redirect("blogger/profile");
    }
    
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    
       public function add_blog() {
        $data = array();
        $data['abcd'] = $this->data;
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['all_category'] = $this->w_model->select_all_category();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['maincontent'] = $this->load->view('add_blog', $data, true);
        $data['title'] = 'Add Blog';
        $this->load->view('home', $data);
    }
    
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    
     public function save_blog() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
         $data['category_id'] = $this->input->post('category_id');
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['status'] = $this->input->post('status', true);
        $data['created_date_time'] = date('Y-m-d H:m:s');
        $this->b_model->save_blog_info($data);
        redirect("blogger/save_blog_succesfully");
    }
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    
 public function save_blog_succesfully()
    {
        $data=array();
        $data['title'] = 'Blog Saved';
        $data['maincontent']="<h2>Blog added Successfully !</h2>";
        $this->load->view('home',$data);
        
    }
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    
     public function my_blogs() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['all_category'] = $this->w_model->select_all_category();
        $data['result'] = $this->b_model->select_blogs_by_user_id($user_id);
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['maincontent'] = $this->load->view('my_blogs', $data, true);
        $data['title'] = 'My Blogs';

        $this->load->view('home', $data);
    }
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: $blog_id
         * $blog_id is a variable containing unique id no of a single blog.
         * This function returns $blog_id and $user_id.
	 */
    
        public function delete_blog($blog_id) {
        $user_id = $this->session->userdata('user_id');
        $this->b_model->delete_blog_by_blog_id($blog_id, $user_id);
        redirect("blogger/my_blogs");
    }
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: $blog_id
         * $blog_id is a variable containing unique id no of a single blog.
         * This function returns $data as a value.
	 */
    public function edit_blog($blog_id) {
        $data = array();
        
        $data['result'] = $this->b_model->select_blog_by_blog_id($blog_id);
         $data['all_category'] = $this->w_model->select_all_category();
        $data['abcd'] = $this->data;
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['maincontent'] = $this->load->view('edit_blog', $data, true);
        $data['title'] = 'Add Blog';
        $this->load->view('home', $data);
    }
    	/* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data and $blog_id.
	 */
    public function update_blog() {
        $blog_id = $this->input->post('blog_id', true);
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['status'] = $this->input->post('status', true);
        $this->b_model->update_blog_info($data, $blog_id);
        redirect("blogger/my_blogs");
    }
         /* 
         * author name: Shamvil
         * created date: 7 Aug 2013
	 * parameter: null
         * This function returns $data as a value.
	 */
    public function save_participate(){
       // $user_id = $this->session->userdata('user_id');
        $data = array();
         $data['user_id'] = $this->session->userdata('user_id');
        $data['event_id'] = $this->input->post('event_id', true);
         $data['user_name'] = $this->input->post('user_name', true);
        $data['join_status'] = $this->input->post('join_status', true);
        $this->b_model->save_participate_info($data);
         redirect("welcome/event_blog/" . $data['event_id']);
    }
}

?>
