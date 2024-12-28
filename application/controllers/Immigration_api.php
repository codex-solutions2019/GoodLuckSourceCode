<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Immigration_api extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
            date_default_timezone_set('asia/kolkata');
            // header("Access-Control-Allow-Origin: *");
            // header("Access-Control-Allow-Methods: GET, OPTIONS, POST, GET, PUT");
            // header("Content-Type: application/json; charset=UTF-8");
            // header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
            $this->load->model('Immigration_model');
    }

 function index()
    {

        $this->load->view('index');
        // $alert['type'] = 'error';
        // $alert['msg'] = 'No luck';
        // echo  json_encode($alert);
    }
    
    function create_contact()
    {
        
        
        // print_r($this->input->post());
        // die();
         $contact_name = $this->input->post('contact_name');
         $contact_phone = $this->input->post('contact_phone');
        $contact_email = $this->input->post('contact_email');
        $contact_destination=$this->input->post('contact_destination');
        $contact_interest=$this->input->post('contact_interest');
        $contact_intakeyear=$this->input->post('contact_year');
      
      

    $new=array(
              'contact_name'=>$contact_name,
              'contact_phone'=>$contact_phone,
              'contact_email'=>$contact_email,
              'contact_destination'=>$contact_destination,
              'contact_interest'=>$contact_interest,
              'contact_intakeyear'=>$contact_intakeyear
                );
           
        //   print_r($new);
        //   die();
     
                     
        $c= $this->Immigration_model->create_contact($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
     function get_contacts()
    {
        
         // $input = json_decode(file_get_contents("php://input"));
        
        $details=$this->Immigration_model->get_contacts();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo'<pre>';
       echo  json_encode($alert);
    }
    
     function get_contactsbyid()
     {
        
    //  $input = json_decode(file_get_contents("php://input"));
    
       //$id="2";
     $id=$this->input->post('id');
    //   print_r($id);
    //   die();
      
     $details=$this->Immigration_model->get_contactsbyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    //     print_r($alert);
    //   die();
    
    }
    
    function update_contactbyid()
    {
        
        $id=$this->input->post('new_update');
        $contact_name = $this->input->post('new_contact');
        $contact_phone = $this->input->post('new_contact_phone');
        $contact_email = $this->input->post('new_contact_email');
        $contact_destination=$this->input->post('new_contact_destination');
        $contact_education= $this->input->post('new_contact_education');
        $contact_interest=$this->input->post('new_contact_education');
        $contact_intakeyear=$this->input->post('new_contact_year');
      
      

    $new=array(
              'contact_name'=>$contact_name,
              'contact_phone'=>$contact_phone,
              'contact_email'=>$contact_email,
              'contact_destination'=>$contact_destination,
              'contact_education'=>$contact_education,
              'contact_education'=>$contact_interest,
              'contact_intakeyear'=>$contact_intakeyear
                );
                
          
    
        $details=$this->Immigration_model->update_contactsbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    
    
     function delete_coaching()
    {
        
         
        $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_coaching($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
      
     function delete_client()
    {
        
         
        $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_client($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    function delete_contactbyid()
    {
        
         
        $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_contactbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
      
    function delete_visa()
    {
        
         
        $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_visa($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }

    

    function create_ourservices()
    {
        
            
            
                    $heading =$this->input->post('service_name');
                    $subtitle = $this->input->post('service_sub_heading');
                    $status = $this->input->post('service_status');
                    $service_details = $this->input->post('service_details');
              
            
             $new=array(
                 
                    'title'=>$heading,
                    'subtitle'=>$subtitle,
                     'service_status'=>$status,
                     'service_details'=>$service_details
                     );
                     
                    //  print_r($new);
                    //  die();
        $c= $this->Immigration_model->create_ourservices($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
        
    
       echo  json_encode($alert);
    
    }
    
     function get_ourservices()
    {
        
        
        $details=$this->Immigration_model->get_ourservices();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo'<pre>';
       echo  json_encode($alert);
    }
    
     function get_ourservicesbyid()
     {
        
    
       $id=$this->input->post('id');
     $details=$this->Immigration_model->get_ourservicesbyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    
    }
    
    function update_ourservicesbyid()
    {
         $id=$this->input->post('n_service_id');
               $heading =$this->input->post('n_service_name');
                    $subtitle = $this->input->post('n_service_subheadign');
                    $status = $this->input->post('n_status');
               $service_details = $this->input->post('service_details');
              
            
             $new=array(
                 
                    'title'=>$heading,
                    'subtitle'=>$subtitle,
                     'service_status'=>$status,
                     'service_details'=>$service_details
                     );
        $details=$this->Immigration_model->update_ourservicesbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_ourservicesbyid()
    {
        
          
        $id=$this->input->post('id');
      
        $details=$this->Immigration_model->delete_ourservicesbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
     //12sep.,2022
     
        function create_faq(){
        
     
               $faq_que =$this->input->post('faq_que');
               $faq_ans =$this->input->post('faq_ans');
              $faq_status= $this->input->post('faq_status');
      
         $new=array(
                    'faq_que'=>$faq_que,
                    'faq_ans'=>$faq_ans,
                    'faq_status'=>$faq_status
                     );
                     
        $c= $this->Immigration_model->create_faq($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
     function get_faq()
    {
        
        
        
        $details=$this->Immigration_model->get_faq();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
      
       echo  json_encode($alert);
    }
    


    function update_faqbyid()
    {
        
        
            $id=$this->input->post('faq_que_id');
            $faq_que =$this->input->post('faq_que');
            $faq_ans =$this->input->post('faq_ans');
            $faq_status= $this->input->post('faq_status');
      
         $new=array(
                    'faq_que'=>$faq_que,
                    'faq_ans'=>$faq_ans,
                    'faq_status'=>$faq_status
                     );  
        $details=$this->Immigration_model->update_faqbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_faqbyid()
    {
        
        $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_faqbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
function create_whychooseus(){
        
        
               
               $wcsheading = $this->input->post('wcs_heading');
               $wcssubheading =$this->input->post('wcs_subheading');
              $wcsstatus= $this->input->post('wcs_status');
      
         $new=array(
                    'wcs_heading'=> $wcsheading,
                    'wcs_subheading'=> $wcssubheading,
                    'wcs_status'=> $wcsstatus
                     );
                    //  print_r($new);
                    //  die();
        $c= $this->Immigration_model->create_whychooseus($new);
        
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
     function get_whychooseus()
    {
        
        $details=$this->Immigration_model->get_whychooseus();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
   
       echo  json_encode($alert);
    }
    
   
    function update_whychooseusbyid()
    {
        
        $id = $this->input->post('wcs_id');
        $wcsheading = $this->input->post('wcs_heading');
        $wcssubheading =$this->input->post('wcs_subheading');
        $wcsstatus= $this->input->post('wcs_status');
      
         $new=array(
                    'wcs_heading'=> $wcsheading,
                    'wcs_subheading'=> $wcssubheading,
                    'wcs_status'=> $wcsstatus
            );
        $details=$this->Immigration_model->update_whychooseusbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_whychooseusbyid()
    {
        
        
         $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_whychooseusbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    
     function get_whychooseusbyid()
    {
        
        
         $id=$this->input->post('id');
        $details=$this->Immigration_model->get_whychooseusbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'data found';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    function create_immigrationlocations(){
 
    
        $il_country = $this->input->post('immigration_country');
        $il_description = $this->input->post('country_details');
        $il_status= $this->input->post('immigration_status');
    
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'counteries_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('immigraion_file'))
            {
                $data = $this->upload->data();
              
                $path = base_url().'counteries_images/'.$data['file_name'];
                
                 $new=array(
                    
                    'il_country'=>$il_country,
                     'il_image'=>$path,
                    'il_description'=>$il_description,
                    'il_status'=>$il_status
                );
                     
       
                $c= $this->Immigration_model->create_immigrationlocations($new);
                        
                       
                    $alert['msg'] = 'Location Added';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
    
    
    
    
        function add_portfolio_image(){
 
    
        $il_country = $this->input->post('country_list');
        $image_title = $this->input->post('image_title');
        $il_status= $this->input->post('portfolio_status');
    
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'portfolio_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('image'))
            {
                $data = $this->upload->data();
              
                $path = base_url().'portfolio_images/'.$data['file_name'];
                
                 $new=array(
                    'port_title'=>$image_title,
                    'port_image'=>$path,
                    'port_country'=>$il_country,
                    'port_status'=>$il_status
                );
                     
       
                $c= $this->Immigration_model->add_portfolio_image($new);
                        
                       
                    $alert['msg'] = 'Portfolio Added';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
    
    
    
    
    
    
    function get_immigrationlocationsbyid()
     {
        
    
      $id=$this->input->post('id');
      
  $locations = $this->Immigration_model->get_immigrationlocationsbyid($id);

               
    
        echo  json_encode($locations);
    
    }

    


   public function get_immigrationlocations_list(){
      
               $locations = $this->Immigration_model->get_immigrationlocations_list();
                echo json_encode($locations);
        }
        
        
         public function get_immigrationlocations_university_list(){
      
                $locations = $this->Immigration_model->get_immigrationlocations_list();
              
                $uni = array();
                
                foreach($locations as $row){
                    
                     $locations = $this->Immigration_model->get_immigrationlocations_university_list($row['il_id']);
                     
                     $uni[] = array(
                         'country_name'=>$row,
                         'university_list'=>$locations
                         
                         
                         );
                }
                
                
        }
	
	
	
	   public function get_client(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_client($postData);
                echo json_encode($locations);
        }
                
      public function get_immigrationlocations(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_immigrationlocations($postData);
                echo json_encode($locations);
        }
        public function get_skills(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_skills($postData);
                echo json_encode($locations);
        }
        
        
           public function get_visa(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_visa($postData);
                echo json_encode($locations);
        }
             public function get_coaching(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_coaching($postData);
                echo json_encode($locations);
        }
        
          public function get_portfolio_list(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_portfolio_list_data($postData);
                echo json_encode($locations);
        }
	
    
    
         public function get_ourservices_table(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_ourservices_table($postData);
                echo json_encode($locations);
        }
        
        public function get_contactus_table(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_contactus_table($postData);
                echo json_encode($locations);
        }
	
    public function get_newsletter_table(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_newsletter_table($postData);
                echo json_encode($locations);
        }
        
        public function get_whychooseus_table(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_whychooseus_table($postData);
                echo json_encode($locations);
        }
	
	public function get_queans_table(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_queans_table($postData);
                echo json_encode($locations);
        }
        
        public function get_faq_table(){
                $postData = $this->input->post();
                $locations = $this->Immigration_model->get_faq_table($postData);
                echo json_encode($locations);
        }
    
    
    
    function update_immigrationlocationsbyid()
    {
        // echo'<pre>';
        // print_r($this->input->post());
        // die();
    
    $img = $_FILES['immigraion_file']['name'];
    $id=$this->input->post('immigration_id');
    $country = $this->input->post('immigration_country');
    $description = $this->input->post('country_details');
    $status= $this->input->post('immigration_status');
          
          if($img == ''){
               $new=array(
                    'il_country'=> $country,
                    'il_description'=>$description,
                    'il_status'=> $status
                );
                     
          }
          else{
              
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'counteries_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('immigraion_file'))
            {
                $data = $this->upload->data();
                
                $path = base_url().'counteries_images/'.$data['file_name'];
                
                 $new=array(
                    'il_country'=> $country,
                    'il_description'=>$description,
                    'il_image'=>$path,
                    'il_status'=> $status
                );
  
                }
          }

                $c= $this->Immigration_model->update_immigrationlocationsbyid($id,$new);
                  if($c){
                      
                    $alert['msg'] = 'Location Added';
                    $alert['type'] = 'success';
                  }      
                       
                
                
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
    }
    
    
    
    
    
     function get_immigrationlocations_details()
     {
        
        
        $id= $this->input->post('id');
        $details=$this->Immigration_model->get_immigrationlocations_details($id);
        
        echo  json_encode($details);
    
    }
       function get_visa_details()
     {
        
        
        $id= $this->input->post('id');
        $details=$this->Immigration_model->get_visa_details($id);
        
        echo  json_encode($details);
    
    }
    
        function get_coaching_details()
     {
        
        
        $id= $this->input->post('id');
        $details=$this->Immigration_model->get_coaching_details($id);
        
        echo  json_encode($details);
    
    }
    
    
    
      function delete_portfolio()
    {
        
       $il_id=$this->input->post('id');

        $details=$this->Immigration_model->delete_portfolio($il_id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
           
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    
    
    function delete_immigrationlocations()
    {
        
       $il_id=$this->input->post('id');

        $details=$this->Immigration_model->delete_immigrationlocations($il_id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
           
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    function update_footerdetails(){
        
      

                $phone = $this->input->post('footer_mobile');
                $email = $this->input->post('footer_email');
                $address= $this->input->post('footer_address');
                
                $phone_uk = $this->input->post('footer_mobile_uk');
                $email_uk = $this->input->post('footer_email_uk');
                $address_uk= $this->input->post('footer_address_uk');
                $map= $this->input->post('footer_map');
                $footer_twitter = $this->input->post('footer_twitter');
                $footer_facebook = $this->input->post('footer_facebook');
                $footer_instagram = $this->input->post('footer_instagram');
                $footer_whatsapp = $this->input->post('footer_whatsapp');
      
         $new=array(
                    'footer_phone'=> $phone,
                    'footer_email'=> $email,
                    'footer_address'=>$address,
                     'footer_phone_uk'=> $phone_uk,
                    'footer_email_uk'=> $email_uk,
                    'footer_address_uk'=>$address_uk,
                     'footer_twitter'=>$footer_twitter,
                      'footer_facebook'=>$footer_facebook,
                       'footer_instagram'=>$footer_instagram,
                        'footer_whatsapp'=>$footer_whatsapp,
                    'footer_map'=> $map
                     );
                     
        $c= $this->Immigration_model->update_footerdetails($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
     function get_footerdetails()
    {
        
    
        $details=$this->Immigration_model->get_footerdetails();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo'<pre>';
       echo  json_encode($alert);
    }

     function create_newsletter(){
      
               
               $email = $this->input->post('nl_email');
             
      
         $new=array(
                    
                    'nl_email'=> $email
                   
                     );
             
        $c= $this->Immigration_model->create_newsletter($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
        
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
     function get_newsletter()
    {
        
      
        
        $details=$this->Immigration_model->get_newsletter();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo'<pre>';
       echo  json_encode($alert);
    }
    
     function get_newsletterbyid()
     {
        
    
       $id=$this->input->post('id');
     $details=$this->Immigration_model->get_newsletterbyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    
    }
    
    function update_newsletterbyid()
    {
        
         
          $nl_id=$this->input->post('new_id');
         $name=$this->input->post('new_name');
               $phone = $this->input->post('new_phone');
               $email = $this->input->post('new_email');
              $status= $this->input->post('new_status');
         $new=array(
                    'name'=>$name,
                    'phone'=> $phone,
                    'email'=> $email,
                    'status'=>$status
                     );
        $details=$this->Immigration_model->update_newsletterbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_newsletterbyid()
    {
        
         $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_newsletterbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    function update_policy(){
        
      

               $privacy_policy = $this->input->post('setting_privacy_policy');
               
               
               

      
         $new=array(
                    'privacy_policy'=> $privacy_policy
                     );
                     
        $c= $this->Immigration_model->update_policy($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Updated successfully';
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'not Updated';
        }
       echo  json_encode($alert);
        
    }
    
    
     function update_terms(){
       
               $terms = $this->input->post('terms');
               
               
               

      
         $new=array(
                    'terms'=> $terms
                     );
                     
        $c= $this->Immigration_model->update_policy($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Updated successfully';
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'not Updated';
        }
       echo  json_encode($alert);
        
    }
    
    
     function get_policy()
    {
        
        
        
        $details=$this->Immigration_model->get_policy();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo'<pre>';
       echo  json_encode($alert);
    }
    
     function get_policybyid()
     {
        
   
       $p_id="1";
       $id=$p_id;
     $details=$this->Immigration_model->get_policybyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    
    }
    
    function update_policybyid()
    {
        
          $p_id="1";
         $id=$p_id;
                 $privacy_policy = "ABC";
               $terms = "abc";
              
      
         $new=array(
                    'privacy_policy'=> $privacy_policy,
                    'terms'=>$terms
                     );
                     
        $details=$this->Immigration_model->update_policybyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_policybyid()
    {
        
        
       $p_id="2";
         $id=$p_id;
        $details=$this->Immigration_model->delete_policybyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
     function create_admin(){
        
        $mobile="9876543210";
        $username = "abc";
        $password = "123";
        $email="admin@gmail.com";
            
        $new=array(
            'mobile'=>$mobile,
            'username'=> $username,
            'password '=>$password,
            'email'=>$email
                     );
                     
        $c= $this->Immigration_model->create_admin($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
     function get_admin()
    {
        
         
        
        $details=$this->Immigration_model->get_admin();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo'<pre>';
       echo  json_encode($alert);
    }
    
     function get_adminbyid()
     {
        
    
    
       $a_id="1";
       $id=$a_id;
     $details=$this->Immigration_model->get_adminbyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    
    }
    
    function update_adminbyid()
    {
        
         
          $a_id="1";
         $id=$a_id;
         
                $mobile="9876543210";
               $username = "xyz";
               $password = "1234";
              
      
         $new=array(
                    'mobile'=>$mobile,
                    'username'=> $username,
                    'password '=>$password 
                     );
                     
                     
        $details=$this->Immigration_model->update_adminbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_adminbyid()
    {
        
          
       $a_id="2";
         $id=$a_id;
        $details=$this->Immigration_model->delete_adminbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    function adminlogin()
    {
        
       
        $mobile="9876543210";
        $password = "1234";
              
        
        if($mobile == "" || $password =="")
        {
            
            $alert['type'] = 'error';
            $alert['msg'] ='Enter required values. a_name & a_password cannot be empty';
        }

            else{
  
        $cp= $this->Immigration_model->adminlogin($mobile,$password);
        
        if($cp)
        {
            
            $alert['type'] = 'success';
             $alert['msg'] = 'Logged in successfully';
             $alert['user_data']=$cp;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Log in failed';
        }
   
    }
    echo  json_encode($alert);
    }
    
     function create_universities()
    {
        
                $country_name =$this->input->post('country_list');
                $uni_name=$this->input->post('university_name');
                $uni_details=$this->input->post('university_link');
                $status=$this->input->post('university_status');
              
         $new=array(
                    'immigration_id'=> $country_name,
                    'uni_name'=> $uni_name,
                    'uni_details'=>$uni_details,
                    'status'=>$status
                     );
        
        $c= $this->Immigration_model->create_universities($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
   
       echo  json_encode($alert);
    
    }
    
    
      function update_university()
    {
         $id =$this->input->post('university_id');
                $country_name =$this->input->post('country_list');
                $uni_name=$this->input->post('university_name');
                $uni_details=$this->input->post('university_link');
                $status=$this->input->post('university_status');
              
         $new=array(
                    'immigration_id'=> $country_name,
                    'uni_name'=> $uni_name,
                    'uni_details'=>$uni_details,
                    'status'=>$status
                     );
        
        $c= $this->Immigration_model->update_university($id,$new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
             $alert['data0']=$c;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
   
       echo  json_encode($alert);
    
    }
    
     function get_universities()
    {
        
      
        $details=$this->Immigration_model->get_universities();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        // echo'<pre>';
       echo  json_encode($alert);
    }
    
     function get_universitiesbyid()
     {
        
    
         $id=$this->input->get('uni_id');
     $details=$this->Immigration_model->get_universitiesbyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    
    }
    
    function update_universitiesbyid()
    {
        
        
         
                $id=$this->input->post('uni_id');
                $uni_name =$this->input->post('uni_name');
                $uni_details=$this->input->post('uni_details');
                $pincode=$this->input->post('pincode');
               $status=$this->input->post('status');
              
         $new=array(
                    //'immigration_id'=> $immigration_id,
                    'uni_name'=> $uni_name,
                    'uni_details'=>$uni_details,
                    'pincode'=> $pincode,
                    'status'=>$status
                     );
        
        $details=$this->Immigration_model->update_universitiesbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_universitiesbyid()
    {
        
        
         $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_universitiesbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
    function create_queans(){

            $que    =   $this->input->post('qa_que');
            $ans    =   $this->input->post('qa_ans');
           
      
             $new=array(
                 
                    'qa_que'=>$que,
                    'qa_ans'=>$ans,
                   
                    
                    );
                    
        $c= $this->Immigration_model->create_queans($new);
        
        if($c)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record created successfully';
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not created';
        }
       echo  json_encode($alert);
        
    }
    
    
    
    
    
    function get_faqbyid()
    {
        
         $id=$this->input->post('id');
        $details=$this->Immigration_model->get_faqbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
       }
       echo  json_encode($alert);
    }
    
    
    
    
    
    
    
    
    
    
     function get_queans()
    {
        
        
        $details=$this->Immigration_model->get_queans();
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
       }
       echo  json_encode($alert);
    }
    
     function get_queansbyid()
     {
        
   
          $id=$this->input->post('id');
     $details=$this->Immigration_model->get_queansbyid($id);
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record found successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not found';
        }
        echo  json_encode($alert);
    
    }
    
    function update_queansbyid()
    {
        
        
        $id     =   $this->input->post('qa_id');
        $que    =   $this->input->post('qa_que');
        $ans    =   $this->input->post('qa_ans');
        $status =   $this->input->post('qa_status');
      
         $new=array(
             
                'qa_que'=>$que,
                'qa_ans'=>$ans,
                'qa_status'=>$status
                
            );
                    
        $details=$this->Immigration_model->update_queansbyid($id,$new);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record updated successfully';
              $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not updated';
        }
        echo  json_encode($alert);
    }
    
    function delete_queansbyid()
    {
        
      
       $id=$this->input->post('id');
       
    
        $details=$this->Immigration_model->delete_queansbyid($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        
        echo  json_encode($alert);
    
    }
    
    function get_country_universities_details(){
	       
	     $id=$this->input->get('id');
	     $universities= $this->Immigration_model->get_universities_details($id);
	      
	   echo  json_encode($universities);
	     
	 }
	    function get_client_details(){
	       
	     $id=$this->input->post('id');
	     $universities= $this->Immigration_model->get_client_details($id);
	      
	   echo  json_encode($universities);
	     
	 }
	 
	 
	     function get_our_skills_details(){
	       
	     $id=$this->input->post('id');
	     $universities= $this->Immigration_model->get_our_skills_details($id);
	      
	   echo  json_encode($universities);
	     
	 }
	 
	 
	 
	 function  fetch_immigration_locations(){
        
        $data=$this->Immigration_model->fetch_immigration_locations();
   
        echo  json_encode($data);
        // echo"<pre>";
	       //print_r($data);
	       //die();
                
    }
    
     function add_visa(){
 
    
            $visa_name = $this->input->post('visa_name');
            $visa_sub_heading = $this->input->post('visa_sub_heading');
            $visa_status = $this->input->post('visa_status');
            $visa_details= $this->input->post('visa_details');
        
        
    
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'visa_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('visa_file'))
            {
                $data = $this->upload->data();
              
                $path = base_url().'visa_images/'.$data['file_name'];
                
                 $new=array(
                    
                        'vt_heading'=>$visa_name,
                        'vt_image'=>$path,
                        'vt_subheading'=>$visa_sub_heading,
                        'vt_status'=>$visa_status,
                        'vt_description'=>$visa_details
                );
				

       
                $c= $this->Immigration_model->add_visa($new);
                        
                       
                    $alert['msg'] = 'Visa Added';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
	
       
    function update_visa()
    {
        // echo'<pre>';
        // print_r($this->input->post());
        // die();
    
    $img = $_FILES['visa_file']['name'];
    $id=$this->input->post('visa_id');
     $visa_name = $this->input->post('visa_name');
            $visa_sub_heading = $this->input->post('visa_sub_heading');
            $visa_status = $this->input->post('visa_status');
            $visa_details= $this->input->post('visa_details');
          
          if($img == ''){
               $new=array(
                   'vt_heading'=>$visa_name,
                        // 'vt_image'=>$path,
                        'vt_subheading'=>$visa_sub_heading,
                        'vt_status'=>$visa_status,
                        'vt_description'=>$visa_details
                );
                     
          }
          else{
              
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'visa_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('visa_file'))
            {
                $data = $this->upload->data();
                
                $path = base_url().'visa_images/'.$data['file_name'];
                
                 $new=array(
                   
                        'vt_heading'=>$visa_name,
                        'vt_image'=>$path,
                        'vt_subheading'=>$visa_sub_heading,
                        'vt_status'=>$visa_status,
                        'vt_description'=>$visa_details
                );
  
                }
          }

                $c= $this->Immigration_model->update_visa($id,$new);
                  if($c){
                      
                    $alert['msg'] = 'Location Added';
                    $alert['type'] = 'success';
                  }      
                       
                
                
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
    }
    
      function add_coaching(){
          
        //   print_r($this->input->post());
        //   die();
 
    
            $visa_name = $this->input->post('coaching_name');
            $visa_sub_heading = $this->input->post('coaching_sub_heading');
            $visa_status = $this->input->post('coaching_status');
            $visa_details= $this->input->post('coaching_details');
        
        
    
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'coaching_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('coaching_file'))
            {
                $data = $this->upload->data();
              
                $path = base_url().'coaching_images/'.$data['file_name'];
                
                 $new=array(
                    
                        'coaching_heading'=>$visa_name,
                        'coaching_image'=>$path,
                        'coaching_sub_heading'=>$visa_sub_heading,
                        'coaching_status'=>$visa_status,
                        'coaching_description'=>$visa_details
                );
				
// coaching_id	coaching_heading	coaching_description	coaching_sub_heading	coaching_image	coaching_status

       
                $c= $this->Immigration_model->add_coaching($new);
                        
                       
                    $alert['msg'] = 'Visa Added';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
    
    
      function update_coaching()
    {
        // echo'<pre>';
        // print_r($this->input->post());
        // die();
        

    
    $img = $_FILES['coaching_file']['name'];
    $id=$this->input->post('coaching_id');
     $visa_name = $this->input->post('coaching_name');
            $visa_sub_heading = $this->input->post('coaching_sub_heading');
            $visa_status = $this->input->post('coaching_status');
            $visa_details= $this->input->post('coaching_details');
          
          if($img == ''){
               $new=array(
                    'coaching_heading'=>$visa_name,
                        // 'coaching_image'=>$path,
                        'coaching_sub_heading'=>$visa_sub_heading,
                        'coaching_status'=>$visa_status,
                        'coaching_description'=>$visa_details
                );
                     
          }
          else{
              
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'coaching_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('coaching_file'))
            {
                $data = $this->upload->data();
                
                $path = base_url().'coaching_images/'.$data['file_name'];
                
                 $new=array(
                   
                       
                        'coaching_heading'=>$visa_name,
                        'coaching_image'=>$path,
                        'coaching_sub_heading'=>$visa_sub_heading,
                        'coaching_status'=>$visa_status,
                        'coaching_description'=>$visa_details
                );
  
                }
          }

                $c= $this->Immigration_model->update_coaching($id,$new);
                  if($c){
                      
                    $alert['msg'] = 'Location Added';
                    $alert['type'] = 'success';
                  }      
                       
                
                
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
    }
    
        function add_skill(){
 
    
            $heading = $this->input->post('os_heading');
            $precentage = $this->input->post('os_precentage');
           
        
        
     $new=array(
                    
                        'os_heading'=>$heading,
                        'os_precentage'=>$precentage,
                      
                );
				

       
                $c= $this->Immigration_model->add_skill($new);
                        
                      if($c){
                    $alert['msg'] = 'Skill Added';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
    
     function update_skill(){
 
    $id = $this->input->post('os_id');
            $heading = $this->input->post('os_heading');
            $precentage = $this->input->post('os_precentage');
           
        
        
     $new=array(
                    
                        'os_heading'=>$heading,
                        'os_precentage'=>$precentage,
                      
                );
				

       
                $c= $this->Immigration_model->update_skill($id,$new);
                        
                      if($c){
                    $alert['msg'] = 'Skill Updated';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
    
     function delete_skill()
    {
        
         
        $id=$this->input->post('id');
        $details=$this->Immigration_model->delete_skill($id);
        
        if($details)
        {
            $alert['type'] = 'success';
             $alert['msg'] = 'Record deleted successfully';
             $alert['data']=$details;
        }
        else
        {
            $alert['type'] = 'error';
             $alert['msg'] = 'Record not deleted';
        }
        echo  json_encode($alert);
    
    }
    
      function add_client(){
          
        //   print_r($this->input->post());
        //   die();
        
 
 
    
            $client_name = $this->input->post('client_name');
            $client_phone = $this->input->post('client_phone');
            $client_status = $this->input->post('client_status');
            $client_email= $this->input->post('client_email');
        
        
    
        $this->load->helper(array('form', 'url'));
        $config['upload_path']   = 'client_images/'; 
        $config['allowed_types'] = 'jpeg|jpg|png'; 
        $config['max_size'] = '3520240';
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('client_file'))
            {
                $data = $this->upload->data();
              
                $path = base_url().'client_images/'.$data['file_name'];
                
                 $new=array(
                    
                        'clients_name'=>$client_name,
                        'clients_img'=>$path,
                        'clients_phone'=>$client_phone,
                        'clients_email'=>$client_email,
                        'clients_status'=>$client_status
                );
// clients_name	clients_img	clients_phone	clients_email	clients_status
       
                $c= $this->Immigration_model->add_client($new);
                        
                       
                    $alert['msg'] = 'client Added';
                    $alert['type'] = 'success';
                
                  
                }	
                else{
                    
                    $alert['msg'] = 'Something Went Wronge';
                    $alert['type'] = 'error';
                }
                
                echo json_encode($alert);
        
        

        
    }
}