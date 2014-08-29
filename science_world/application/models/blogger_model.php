<?php


class Blogger_Model extends CI_Model{
      public function select_user_by_user_id($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function update_user($data, $user_id) {

        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_user', $data);
    }
      public function save_blog_info($data) {
        $this->db->insert('tbl_blog', $data);
    }
    public function select_blogs_by_user_id($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
       public function delete_blog_by_blog_id($blog_id, $user_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_blog');
    }

    public function select_blog_by_blog_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_blog_info($data, $blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $data);
    }
      public function select_all_blogs() {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_comments_by_blog_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('blog_id', $blog_id);
        $this->db->where('status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_blogs_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
        /** count _comments_info function problem.....
     * retrive the noumber of comments in a blog using 
     * blog_id but i am not capable to display comments noumber.
     * in view page.
     * another attempt to display it in home message page,but the needed
     * parameter blog_id can't pass .
     */
    public function count_comments_info($blog_id) {
      $this->db->where('blog_id', $blog_id);
        $this->db->where('status', 1);
        $this->db->from('tbl_comments');
        
        //$query_result = $this->db->get('');

//        echo '<pre>';
//    print_r($result);
//    exit();
//        if ($query_result->num_rows() === 0) {
//            return FALSE;
//        }
//
//
//
//        return $result = $query_result->row('comments_id');
        $result=  $this->db->count_all_results();
        return $result;
    }
    public function save_participate_info($data){
        $this->db->insert('tbl_attend',$data);
    }
}

?>
