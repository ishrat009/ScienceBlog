<?php
class Welcome_Model extends CI_Model{
    public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     public function save_comments_info($data)
    {
        $this->db->insert('tbl_comments',$data);
    }
}

?>
