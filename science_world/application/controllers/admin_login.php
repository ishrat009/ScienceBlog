<?php
class Admin_Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
            $this->load->model('super_admin_model', 'sa_model', true);
    }
    public function index(){
        $this->load->view('admin/login');
    }
    public function check_admin_login(){
      $admin_email_address = $this->input->post('admin_email_address', true);
        $admin_password = $this->input->post('admin_password', true);
        // check email & password are in database...
        $result = $this->sa_model->check_admin_login_info($admin_email_address, $admin_password);
//      echo '<pre>';
//        print_r($result);
//       exit();

        $sdata = array();
        if ($result) {
            $sdata['admin_name'] = $result->admin_name;
            $sdata['admin_id'] = $result->admin_id;
            $sdata['login_status'] = TRUE;

            $this->session->set_userdata($sdata);
            redirect("super_admin");
        } else {

            $sdata['exception'] = "Admin email or password invalid";
            $this->session->set_userdata($sdata);

            redirect("admin_login");
        }
    }
    
   
}

?>
