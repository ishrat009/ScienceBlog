<?php

class Login_Model extends CI_Model {
    
        /* 
         * author name: Ishrat
         * created date: 7 Aug 2013
	 * parameter: $data
         * $data is an array containing basic user info.
         * This fucntion returns void as a value.
	 */
    
     public function save_user_info($data){
        $this->db->insert('tbl_user',$data);
    }    
        /* 
         * author name: Ishrat
         * created date: 7 Aug 2013
	 * parameter: $email_address
         * $email_address is a variable containing user email address.
         * This fucntion returns $result as a value.
	 */
    
    public function save_user_by_email_address($email_address){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address',$email_address);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
   }
        /* 
         * author name: Ishrat
         * created date: 7 Aug 2013
	 * parameter: $email_address, $password
         * $password is a variable containing user email password.
         * $email_address is a variable containing user email address.
         * This fucntion returns $result as a value.
	 */
    
   public function check_login_info($email_address,$password){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address',$email_address);
         $this->db->where('password',  md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
   }
}

?>
