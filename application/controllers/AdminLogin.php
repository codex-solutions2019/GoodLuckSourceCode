<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminLogin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('AdminLogin_model');
    }
    function index(){
         $this->load->view('auth/admin_login');
    }
    
    
    function check_admin(){

        
    $admin_username=$this->input->post('admin_username');
    $admin_password=$this->input->post('admin_password');
    
   
         
   
        if($admin_username == '' || $admin_password == ''){
           
            redirect(base_url().'admin');   
               
        }
        else{
              
             $r=$this->AdminLogin_model->check_admin($admin_username,$admin_password);
             
              
         
            if($r){
                
                	 
	    
	     $data = array(
            'admin_id'=>$r['admin_id'],
            'admin_email'=>$r['admin_email']
	       
	        );
	 
	
            $this->session->set_userdata($data);
                
                $alert['type'] = 'success';
        $alert['msg'] = 'Login Success';

    } 
                
          else{
             $alert['type'] = 'error';
        $alert['msg'] = 'Check Credientials';
        }       
                
                
             
            
            
        }
       echo json_encode($alert);
  
    }
    
    function logout_admin(){

    
	
            $this->session->unset_userdata('admin_id');
            redirect(base_url()."");
           
    }
    }
