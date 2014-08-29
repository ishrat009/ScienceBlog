<?php
if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
          $this->load->model('super_admin_model', 'sa_model', true);
          $this->load->model('welcome_model', 'w_model', true);
         $user_id=$this->session->userdata('user_id');
        //echo "-----------".$user_id;
        if($user_id!=NULL)
        {
           redirect("blogger","refresh"); 
        }
    }
    public function sign_up(){
        $data = array();
        $data['title'] = 'Sign up';
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['all_events']=  $this->sa_model->select_all_events();
        $data['maincontent'] = $this->load->view('sign_up', '', true);
        $this->load->view('home', $data);
    }
    
        public function save_user() {

        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = $this->input->post('password', true);
        $data['password'] = md5($data['password']);
        $data['address'] = $this->input->post('address', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['city'] = $this->input->post('city', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
        $data['profile_image'] = $this->input->post('profile_image', true);
        $data['in_date']=date('y-m-d');

        /* -----Start image upload... */
        $config['upload_path'] = './images/profile_images';
        $config['allowed_types'] = 'gif|jpg|png';
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
            //echo '<pre>';
            //print_r($udata);
            $data['profile_image'] = "images/profile_images/" . $udata['upload_data']['file_name'];
        }

        /* -----end image upload... */


        $result = $this->login_model->save_user_by_email_address($data['email_address']);
        if ($result) {
            $sdata = array();

            $sdata['message'] = "<h2>User already exists!</h2>";
            $this->session->set_userdata($sdata);
            redirect("index.php/login/sign_up");
        } else {

            $user_id = $this->login_model->save_user_info($data);
            /* -------Start activation emai---------- */
//            $mdata = array();
//            $mdata['user_id'] = $user_id;
//            $mdata['from_address'] = "shamvilhossain@ymail.com";
//            $mdata['admin_full_name'] = "Blog batch 06";
//            $mdata['to_address'] = $data['email_address'];
//            $mdata['subject'] = "Activation email";
//            $mdata['last_name'] = $data['last_name'];
//            $mdata['password'] = $this->input->post('password', true);
//            $this->m_model->sendEmail($mdata, 'activation_email', true);
          /* -------End activation emai---------- */
            redirect("index.php/login/save_successfully");
        }
    }
    
      public function save_successfully() {
        $data = array();
        $data['maincontent'] = "<h2>Save successfully</h2>";
        $data['title'] = 'Save';
        $this->load->view('home', $data);
    }
      public function user_login() {

        $data = array();
        $data['title'] = 'Login';
         $data['all_events']=  $this->sa_model->select_all_events();
         $data['all_category'] = $this->w_model->select_all_category();
        $data['site_logo'] = $this->sa_model->select_logo_image();
        $data['maincontent'] = $this->load->view('login', '', true);
        $this->load->view('home', $data);
    }
    public function check_login(){
        $email_address=$this->input->post('email_address', true);
        $password=$this->input->post('password', true);
        $result=$this->login_model->check_login_info($email_address,$password);
        $sdata=array();
        
        if($result){
            $sdata['full_name']=$result->first_name.' '.$result->last_name;
            $sdata['user_id']=$result->user_id;
            $sdata['login_status']=TRUE;
            $this->session->set_userdata($sdata);
            redirect("blogger","refresh");
            
        }  else {
            $sdata['exception']="User Email Or Password Invalide !";
            $this->session->set_userdata($sdata);
            redirect("login/user_login");
            
        }
    }
}

?>
