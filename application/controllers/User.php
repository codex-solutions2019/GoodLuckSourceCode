<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('asia/kolkata');
        $this->load->model('User_model');
        }
    function index(){
      $this->load->view('index');
     }
  
    function fetch_details(){
    $input=json_decode(file_get_contents("php://input"));
    $data['slider']=$this->User_model->get_silder_details();
    $data['services']=$this->User_model->get_service_details();
    $data['why_choose_us']=$this->User_model->get_whychooseus_details();
    $data['faq']=$this->User_model->get_faq_details();
    $data['contactUs']=$this->User_model->get_contactus_details();
    // echo'<pre>';
    // print_r($data);
    // die();
    if($data){
        $alert['type']='Success';
        $alert['msg']='Data found';
        $alert['result']=$data;
    }
    else{
        $alert['type']='Failure';
        $alert['msg']='Data not found';
    }
    echo json_encode($alert);
  }
}