<?php

class Super_Admin_Model extends CI_Model {

    public function save_category_by_category_name($category_name) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_name', $category_name);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }

    public function check_admin_login_info($admin_email_address, $admin_password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address', $admin_email_address);
        $this->db->where('admin_password', md5($admin_password));
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    public function select_logo_image() {
        $this->db->select('*');
        $this->db->from('tbl_logo');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_logo_image($data) {
        $this->db->update('tbl_logo', $data);
    }

    public function selectCategory($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_category');

        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }

    public function delete_category_by_category_id($category_id) {
        $this->db->where('category_id', $category_id);

        $this->db->delete('tbl_category');
    }

    public function select_category_by_category_id($category_id) {

        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info($data, $category_id) {

        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function select_all_comments() {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_comments_by_comments_id_and_blog_id($comments_id) {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('comments_id', $comments_id);
        //$this->db->where('blog_id',$blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function Update_comments($data, $comments_id) {
        $this->db->where('comments_id', $comments_id);
        $this->db->update('tbl_comments', $data);
    }

    public function delete_comments_by_comments_id($comments_id) {

        $this->db->where('comments_id', $comments_id);
        $this->db->delete('tbl_comments');
    }

    public function select_all_blog() {
        $this->db->select('*');
        $this->db->from('tbl_blog');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_blog_by_id($blog_id) {

        $this->db->where('blog_id', $blog_id);

        $this->db->delete('tbl_blog');
    }

    public function select_blog($search_text) {
        $sql = "select * from tbl_blog where blog_title like '%$search_text%'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function save_event_info($data) {
        $this->db->insert('tbl_event', $data);
    }

    public function select_all_events() {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_event_by_event_id($event_id) {

        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('event_id', $event_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function Update_event_info($data, $event_id) {
        $this->db->where('event_id', $event_id);
        $this->db->update('tbl_event', $data);
    }

    public function delete_event_by_id($event_id) {

        $this->db->where('event_id', $event_id);
        $this->db->delete('tbl_event');
    }

}

?>
