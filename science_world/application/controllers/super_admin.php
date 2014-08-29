<?php

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
    }

    public function index() {
        $data = array();
        $data['admin_maincontent'] = '<h2>Welcome<h2>';
        $this->load->view('admin/admin_home', $data);
    }

    public function add_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category', '', true);
        $this->load->view('admin/admin_home', $data);
    }

    public function save_category() {
        $data = array();

        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);

        $result = $this->sa_model->save_category_by_category_name($data['category_name']);

        if ($result) {
            $sdata = array();

            $sdata['exception'] = "<h2>Category already exists!</h2>";
            $this->session->set_userdata($sdata);
            redirect("super_admin/add_category");
        } else {

            $sdata = array();

            $sdata['exception'] = "<h2>Category added!</h2>";
            $this->session->set_userdata($sdata);
            $this->sa_model->save_category_info($data);
            redirect("super_admin/add_category");
        }
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('login_status');
//        $sdata['exception'] = "<h2>Logout Successfully</h2>";
//        $this->session->set_userdata($sdata);
        redirect("admin_login");
    }

    public function change_logo() {
        $data = array();
        // $data['title'] = 'Change Logo';
        $data['site_logo'] = $this->sa_model->select_logo_image($data);
        $data['admin_maincontent'] = $this->load->view('admin/change_logo', $data, true);
        $this->load->view('admin/admin_home', $data);
    }

    public function update_logo() {
        $data = array();
        $data['logo_description'] = $this->input->post('logo_description', true);

        /* echo '<pre>';
          print_r($_FILES);
          exit(); */
        /* ------------------Start LOGO Image Upload---------------- */
        $config['upload_path'] = './images/logo_image';
        $config['allowed_types'] = 'gif|jpg|png|ogg';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $error = '';
        $udata = '';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('logo_image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $udata = array('upload_data' => $this->upload->data());
            $data['logo_image'] = "images/logo_image/" . $udata['upload_data']['file_name'];
            $data['image_file_name'] = $udata['upload_data']['file_name'];
        }

        $this->sa_model->update_logo_image($data);
        redirect("super_admin/change_logo");
    }

    public function view_category() {

        $data = array();

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_category/';

        $config['total_rows'] = $this->db->count_all('tbl_category');
        $config['per_page'] = '3';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);

        $data['all_category'] = $this->sa_model->selectCategory($config['per_page'], $this->uri->segment(3));
        $data['admin_maincontent'] = $this->load->view('admin/view_category', $data, true);
        // $data['title'] = 'My Blogs';

        $this->load->view('admin/admin_home', $data);
    }

    public function delete_category($category_id) {
        $this->sa_model->delete_category_by_category_id($category_id);
        redirect("super_admin/view_category");
    }

    public function edit_category($category_id) {
        $data = array();
        $data['result'] = $this->sa_model->select_category_by_category_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category', $data, true);
        // $data['title'] = 'Add category';
        $this->load->view("admin/admin_home", $data);
    }

    public function update_category() {

        $category_id = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);

        $data['category_description'] = $this->input->post('category_description', true);

        $this->sa_model->update_category_info($data, $category_id);
        redirect("super_admin/view_category");
    }

    public function show_all_comments() {
        $data = array();
        $data['all_comments'] = $this->sa_model->select_all_comments();
        $data['admin_maincontent'] = $this->load->view('admin/show_comments', $data, true);
        $this->load->view('admin/admin_home', $data);
    }

    public function edit_comments($comments_id) {
        $data = array();
        //$data['abcd'] = $this->data;
        $data['all_comments'] = $this->sa_model->select_all_comments_by_comments_id_and_blog_id($comments_id);
//        echo '<pre>';
//        print_r($data['all_comments']);
//        exit();
        $data['admin_maincontent'] = $this->load->view('admin/edit_comments', $data, true);
        $this->load->view('admin/admin_home', $data);
    }

    public function update_comments($comments_id) {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id', true);
        $data['name'] = $this->input->post('name', true);
        $data['comments_description'] = $this->input->post('comments_description', true);
        $data['status'] = $this->input->post('status', true);
        $this->sa_model->Update_comments($data, $comments_id);
        redirect("super_admin/show_all_comments", "refresh");
    }

    public function delete_comments($comments_id) {
        $this->sa_model->delete_comments_by_comments_id($comments_id);
        redirect("super_admin/show_all_comments", "refresh");
    }

    public function view_blogs() {

        $data = array();

        $data['all_blog'] = $this->sa_model->select_all_blog();
        $data['admin_maincontent'] = $this->load->view('admin/view_blogs', $data, true);
        $data['title'] = 'Blogs';

        $this->load->view('admin/admin_home', $data);
    }

    public function delete_blog($blog_id) {


        $this->sa_model->delete_blog_by_id($blog_id);
        redirect("super_admin/view_blogs");
    }

    public function blog_ajax_search($search_text = NULL) {

        $data = array();
        $data['all_blog'] = $this->sa_model->select_blog($search_text);
        $result = $this->load->view('admin/blog_ajax_search', $data, true);
        echo $result;
    }

    public function add_event() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_event', '', true);
        $this->load->view('admin/admin_home', $data);
    }

    public function save_event() {
        $data = array();

        $data['event_title'] = $this->input->post('event_title', true);
        $data['event_description'] = $this->input->post('event_description', true);
        $data['event_image'] = $this->input->post('event_image', true);
        $data['in_date'] = date('y-m-d');
        
        
        /* -----Start image upload... */
        $config['upload_path'] = './images/event_images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $error = '';
        $udata = '';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('event_image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $udata = array('upload_data' => $this->upload->data());
//            echo '<pre>';
//            print_r($udata);
            $data['event_image'] = "images/event_images/" . $udata['upload_data']['file_name'];
        }

        /* -----end image upload... */
        
        $this->sa_model->save_event_info($data);
        redirect("super_admin/add_event");
    }

    public function view_event() {
        $data = array();
        $data['all_events'] = $this->sa_model->select_all_events();
        $data['admin_maincontent'] = $this->load->view('admin/view_event', $data, true);
        $this->load->view('admin/admin_home', $data);
    }

    public function edit_event($event_id) {
        $data = array();

        $data['result'] = $this->sa_model->select_event_by_event_id($event_id);

        $data['admin_maincontent'] = $this->load->view('admin/edit_event', $data, true);
        $this->load->view('admin/admin_home', $data);
    }

    public function update_event() {

        $event_id = $this->input->post('event_id', true);
        $data['event_title'] = $this->input->post('event_title', true);

        $data['event_description'] = $this->input->post('event_description', true);
        
         
        /* -----Start image upload... */
        $config['upload_path'] = './images/event_images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $error = '';
        $udata = '';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('event_image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $udata = array('upload_data' => $this->upload->data());
//            echo '<pre>';
//            print_r($udata);
            $data['event_image'] = "images/event_images/" . $udata['upload_data']['file_name'];
        }

        /* -----end image upload... */

        $this->sa_model->update_event_info($data, $event_id);
        redirect("super_admin/view_event");
    }

    public function delete_event($event_id) {
        $this->sa_model->delete_event_by_id($event_id);
        redirect("super_admin/view_event");
    }

}

?>
