<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
         if(!$this->session->userdata('admin_id')){
                    redirect(base_url().'admin');
                }
        
            date_default_timezone_set('asia/kolkata');
            $this->load->model('Immigration_model');
        }
    
    
     function index()
    {

        $this->load->view('admin/index');
       
    }
    
      function services()
    {

        $this->load->view('admin/services');
       
    }
      function contact_us()
    {

        $this->load->view('admin/contact_us');
       
    }
    
      function news_letter()
    {

        $this->load->view('admin/news_letter');
       
    }
    
      function portfolio()
    {

        $this->load->view('admin/portfolio');
       
    }
    
      function countries()
    {

        $this->load->view('admin/countries');
       
    }
    
         function visa_type()
    {

        $this->load->view('admin/visa_type');
       
    }
         function coaching()
    {

        $this->load->view('admin/coaching');
       
    }
         function our_skills()
    {

        $this->load->view('admin/our_skills');
       
    }
    
             function clients()
    {

        $this->load->view('admin/clients');
       
    }
    
    
      function universities()
    {

        $this->load->view('admin/universities');
       
    }
    
      function why_choose_us()
    {

        $this->load->view('admin/why_choose_us');
       
    }
    
      function event_questions()
    {

        $this->load->view('admin/event_questions');
       
    }
    
    
      function faq()
    {

        $this->load->view('admin/faq');
       
    }
      function footer_details()
    {
  $data['footer'] = $this->Immigration_model->get_footerdetails();
  
//   echo'<pre>';
//   print_r( $data['footer']);
//   die();

        $this->load->view('admin/footer_details',$data);
       
    }
    
    //   function privacy_policies()
    // {

    //     $this->load->view('admin/privacy_policies');
       
    // }
    
    function privacy_policies()
    {

    
        $data['policy'] = $this->Immigration_model->get_policy_list();
        $this->load->view('admin/privacy_policies',$data);
       
    }
    
      function terms_conditions()
    {
 $data['policy'] = $this->Immigration_model->get_policy_list();
        $this->load->view('admin/terms_conditions',$data);
       
    }
    
   
}