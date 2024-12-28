<?php
class User_model extends CI_Model{
    function get_silder_details(){
    $query=$this->db->get('immigration_locations');
        if($query){
            return $query->result_array();  }
        else{
            return false;   }
        }
    
    function get_service_details(){
    $query=$this->db->get('ourservices');
        if($query){
            return $query->result_array();  }
        else{
            return false;   }
        }
    
    function get_whychooseus_details(){
    $query=$this->db->get('whychooseus');
        if($query){
            return $query->result_array();  }
        else{
            return false;   }
        }
    
    function get_faq_details(){
    $query=$this->db->get('frequentlyasked_ques');
        if($query){
            return $query->result_array();  }
        else{
            return false;   }
        }
    
    function get_contactus_details(){
    $query=$this->db->get('footerdetails');
        if($query){
            return $query->row_array(); }
        else{
            return false;   }
        }
    }
