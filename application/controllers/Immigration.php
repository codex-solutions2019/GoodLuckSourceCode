<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Immigration extends CI_Controller {

 function __construct(){
        parent::__construct();
        date_default_timezone_set('asia/kolkata');
        $this->load->model('User_model');
        $this->load->model('Immigration_model');
        
        }
//  function index()
//     {

//         $this->load->view('index');
       
//     }
    
    
     function index()
    {
         $this->add_profile_visit();
        $data['locations'] = $this->Immigration_model->get_immigrationlocations_list();
        $data['portfolio'] = $this->Immigration_model->get_portfolio_list();
        $data['slider']=$this->Immigration_model->get_silder_details();
         $data['visa_type'] = $this->Immigration_model->get_visa_type();
          $data['skills'] = $this->Immigration_model->get_all_skills();
            $data['coaching'] = $this->Immigration_model->get_all_coaching();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['why_choose_us']=$this->Immigration_model->get_whychooseus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
          $data['que_ans']=$this->Immigration_model->get_queans();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        
        $this->load->view('new_temp/index',$data);
       
    }
    
      function index2()
    {
        $this->add_profile_visit();
        $data['locations'] = $this->Immigration_model->get_immigrationlocations_list();
        $data['portfolio'] = $this->Immigration_model->get_portfolio_list();
        $data['visa_type'] = $this->Immigration_model->get_visa_type();
        $data['coaching'] = $this->Immigration_model->get_coaching();
        $data['slider']=$this->Immigration_model->get_silder_details();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['why_choose_us']=$this->Immigration_model->get_whychooseus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
        $data['que_ans']=$this->Immigration_model->get_queans();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        
        $this->load->view('new/index',$data);
       
    }
    
     function add_profile_visit(){
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
       
        
        $check_ip = $this->Immigration_model->check_ip($ip);
          
        if($check_ip){
              $new = array(
                'pv_ipaddress'=>$ip,
                'pv_type'=>'old',
                 'pv_status'=>'old',
                  'pv_date'=>$date
            );
                  
         
              
          }
          else{
                 $new = array(
                'pv_ipaddress'=>$ip,
                 'pv_date'=>$date
              
            );
              
          }
        //   print_r($new);
        // die();
          
             $check_ip = $this->Immigration_model->add_profile_visit($new);
          
          
     }
    
    function faq()
    {
         $data['locations'] = $this->Immigration_model->get_immigrationlocations_list();
        $data['portfolio'] = $this->Immigration_model->get_portfolio_list();
        $data['slider']=$this->Immigration_model->get_silder_details();
         $data['visa_type'] = $this->Immigration_model->get_visa_type();
          $data['skills'] = $this->Immigration_model->get_all_skills();
            $data['coaching'] = $this->Immigration_model->get_all_coaching();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['why_choose_us']=$this->Immigration_model->get_whychooseus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
          $data['que_ans']=$this->Immigration_model->get_queans();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $this->load->view('new_temp/faq',$data);
       
    }
     function privacy_policy()
    {
        $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
        $data['que_ans']=$this->Immigration_model->get_queans();
        $data['policy']=$this->Immigration_model->get_policy_details();
        
        // echo '<pre>';
        // print_r($data);
        // die();
        
        $this->load->view('new_temp/privacy_policy',$data);
       
    }
    
    function universities()
    {
        $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
        $data['que_ans']=$this->Immigration_model->get_queans();
        $data['policy']=$this->Immigration_model->get_policy_details();
        $this->load->view('new/universities',$data);
       
    }
       
    
    
    
          function about_us()
    {
        $data['locations'] = $this->Immigration_model->get_immigrationlocations_list();
        $data['portfolio'] = $this->Immigration_model->get_portfolio_list();
        $data['slider']=$this->Immigration_model->get_silder_details();
         $data['visa_type'] = $this->Immigration_model->get_visa_type();
          $data['skills'] = $this->Immigration_model->get_all_skills();
            $data['coaching'] = $this->Immigration_model->get_all_coaching();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['why_choose_us']=$this->Immigration_model->get_whychooseus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
          $data['que_ans']=$this->Immigration_model->get_queans();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $this->load->view('new_temp/about',$data);
       
    }
    
      function terms()
    {
        $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
               $data['que_ans']=$this->Immigration_model->get_queans();
        $data['policy']=$this->Immigration_model->get_policy_details();
        $this->load->view('new_temp/terms',$data);
       
    }
         function services()
    {
        $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
               $data['que_ans']=$this->Immigration_model->get_queans();
        $data['policy']=$this->Immigration_model->get_policy_details();
        $this->load->view('new_temp/services',$data);
       
    }
    
    
    function gallery(){
        echo 'Gallery';
    }
    
    function blog(){
        $blog = $this->uri->segment('2');
        echo $blog;
    }
    
    
    function country_details()
    {
        
    $country = $this->uri->segment('1');

    $country = str_replace("-"," ",$country);
    $data['locations_details'] = $this->Immigration_model->get_country_details($country);
    $data['universities'] = $this->Immigration_model->get_universities_details($data['locations_details']['il_id']);
    $data['services']=$this->Immigration_model->get_service_details();
    $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
    $data['faq']=$this->Immigration_model->get_faq_details();
    $data['que_ans']=$this->Immigration_model->get_queans();
    
        $data['contact_details']=$this->Immigration_model->get_contactus_details();

    if($data['locations_details']){
        $this->load->view('new_temp/country_details',$data);
    }
    
    else{
        redirect(base_url().'');
    }
          
       
    }
    
     function contact_us()
    {
        

       
$data['services']=$this->Immigration_model->get_service_details();
$data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
$data['faq']=$this->Immigration_model->get_faq_details();
$data['que_ans']=$this->Immigration_model->get_queans();

$data['contact_details']=$this->Immigration_model->get_contactus_details();

  
        $this->load->view('new_temp/contact',$data);
   
       
    }
    
    
    
     function country()
    {
        $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
        $data['services']=$this->Immigration_model->get_service_details();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();
        $data['faq']=$this->Immigration_model->get_faq_details();
               $data['que_ans']=$this->Immigration_model->get_queans();
        $data['policy']=$this->Immigration_model->get_policy_details();
        $this->load->view('new_temp/country',$data);
       
    }
    
     
    function service_details()
    {
        
    $service = $this->uri->segment('2');
    // print_r($service);
    // die();

        $service = str_replace("-"," ",$service);
        $data['service_details'] = $this->Immigration_model->get_service_details_list($service);
        $data['services']=$this->Immigration_model->get_service_details();
        $data['locations'] =  $this->Immigration_model->get_immigrationlocations_list();
        $data['faq']=$this->Immigration_model->get_faq_details();
               $data['que_ans']=$this->Immigration_model->get_queans();
        $data['contact_details']=$this->Immigration_model->get_contactus_details();

    if($data['service_details']){
        $this->load->view('new_temp/service_details',$data);
    }
    
    else{
        redirect(base_url().'');
    }
          
       
    }
}
