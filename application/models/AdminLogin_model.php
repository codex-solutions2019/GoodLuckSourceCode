<?php
class AdminLogin_model extends CI_model{
    
    function check_admin($admin_username,$admin_password){
        
        
     
    $this->db->where('admin_email',$admin_username);
    $this->db->where('admin_password',$admin_password);
    $query=$this->db->get('admin');
    if($query){
        return $query->row_array(); }
    else{
        return false;   }
    }

   
}