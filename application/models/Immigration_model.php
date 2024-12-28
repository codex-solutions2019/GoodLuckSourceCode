<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Immigration_model extends CI_Model
{

    function create_contact($new)
    {
        $ok = $this->db->insert('contactus', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
    
     function add_profile_visit($data){
        $q = $this->db->insert('profile_visit',$data);
        
        if ($q) {
            return true;
        }
        else {
            return false;
        }
        
    }
    
    function check_ip($ip){
        
        $this->db->where('pv_ipaddress', $ip);
        $q = $this->db->get('profile_visit');
        
        if ($q->num_rows() > 0) {
            return $q->row_array();
        }
        else {
            return false;
        }
        
    }
        function add_visa($new)
    {
        $ok = $this->db->insert('visa_type', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
          function get_visa_details($new)
    {
        $this->db->where('vt_id',$new);
        $ok = $this->db->get('visa_type');

        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }
    
        
          function update_visa($id,$new)
    {
        $this->db->where('vt_id',$id);
        $ok = $this->db->update('visa_type',$new);

        if ($ok) {
             return true;
        }
        else {
            return false;
        }
    }
    
      function get_visa_type()
    {
 
        $ok = $this->db->get('visa_type');

        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }
        function get_all_skills()
    {
 
        $ok = $this->db->get('our_skills');

        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }
         function get_all_coaching()
    {
 
        $ok = $this->db->get('coaching');

        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }
    
    
    
        function add_portfolio_image($new)
    {
        $ok = $this->db->insert('portfolio', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
        function get_portfolio_list()
            {
                $ok = $this->db->get('portfolio');
        
                if ($ok) {
                    return $ok->result_array();
                }
                else {
                    return false;
                }
          }
            
    
    

    function get_contacts()
    {

        $ok = $this->db->get('contactus');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_contactsbyid($id)
    {
        $this->db->where('contact_id', $id);
        $ok = $this->db->get('contactus');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_contactsbyid($id, $new)
    {

        $this->db->where('contact_id', $id);
        $ok = $this->db->update('contactus', $new);
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_contactbyid($id)
    {
        $this->db->where('contact_id', $id);
        $ok = $this->db->delete('contactus');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
       function delete_client($id)
    {
        $this->db->where('clients_id', $id);
        $ok = $this->db->delete('clients');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function create_homeslider($new)
    {
        $ok = $this->db->insert('homepageslider', $new);

        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function get_homeslider()
    {

        $ok = $this->db->get('homepageslider');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_homesliderbyid($id)
    {
        $this->db->where('hs_id', $id);

        $ok = $this->db->get('homepageslider');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_homesliderbyid($id, $new)
    {

        $this->db->where('hs_id', $id);
        $ok = $this->db->update('homepageslider', $new);
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_homesliderbyid($id)
    {
        $this->db->where('hs_id', $id);
        $ok = $this->db->delete('homepageslider');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function create_ourservices($new)
    {

        $ok = $this->db->insert('ourservices', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
        function get_service_details_list($service)
    {
        $this->db->where('title', $service);
        $ok = $this->db->get('ourservices');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    
    

    // function get_ourservices()
    // {

    //      $ok=$this->db->get('ourservices');
    //      if($ok)
    //      {
    //          return $ok->result_array();
    //      }
    //      else
    //      {
    //          return false;
    //      }
    // }

    function get_ourservicesbyid($id)
    {
        $this->db->where('os_id', $id);

        $ok = $this->db->get('ourservices');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_ourservicesbyid($id, $new)
    {

        $this->db->where('os_id', $id);
        $ok = $this->db->update('ourservices', $new);
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_ourservicesbyid($id)
    {
        $this->db->where('os_id', $id);
        $ok = $this->db->delete('ourservices');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function create_faq($new)
    {
        $ok = $this->db->insert('frequentlyasked_ques', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_faq()
    {

        $ok = $this->db->get('frequentlyasked_ques');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_faqbyid($id)
    {


        $this->db->where('faq_id', $id);

        $ok = $this->db->get('frequentlyasked_ques');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }
    function update_faqbyid($id, $new)
    {

        $this->db->where('faq_id', $id);
        $ok = $this->db->update('frequentlyasked_ques', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_faqbyid($id)
    {
        $this->db->where('faq_id', $id);
        $ok = $this->db->delete('frequentlyasked_ques');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function create_whychooseus($new)
    {
        $ok = $this->db->insert('whychooseus', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_whychooseus()
    {

        $ok = $this->db->get('whychooseus');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_whychooseusbyid($id)
    {
        $this->db->where('wcs_id', $id);

        $ok = $this->db->get('whychooseus');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_whychooseusbyid($id, $new)
    {

        $this->db->where('wcs_id', $id);
        $ok = $this->db->update('whychooseus', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_whychooseusbyid($id)
    {
        $this->db->where('wcs_id', $id);
        $ok = $this->db->delete('whychooseus');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function create_immigrationlocations($new)
    {
        $ok = $this->db->insert('immigration_locations', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_immigrationlocationsbyid($id)
    {


        $this->db->where('il_id', $id);

        $ok = $this->db->get('immigration_locations');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function get_country_details($country)
    {


        $this->db->where('il_country', $country);

        $ok = $this->db->get('immigration_locations');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function delete_immigrationlocationsbyid($id)
    {
        $this->db->where('il_id', $id);
        $ok = $this->db->delete('immigration_locations');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
       function delete_visa($id)
    {
        $this->db->where('vt_id', $id);
        $ok = $this->db->delete('visa_type');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }



    function get_immigrationlocations_list()
    {

        return $this->db->get('immigration_locations')->result_array();


    }



function get_visa($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (visa_name like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('visa_type')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('visa_type')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('visa_type')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "vt_id" => $record->vt_id,
                "vt_heading" => $record->vt_heading,
                "vt_subheading"=>$record->vt_subheading,
                "vt_image"=>'<a href="'.$record->vt_image.'" target="_blank" class="btn btn-info btn-xs">View Image </a>',
                "vt_status" => $record->vt_status,
                "action" => '<a onclick="open_immigrationlocations_edit_modal('. $record->vt_id.')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>
                <a onclick="delete_visa('. $record->vt_id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }


function get_coaching($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (coaching_heading like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('coaching')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('coaching')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('coaching')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "coaching_id" => $record->coaching_id,
                "coaching_heading" => $record->coaching_heading,
                "coaching_sub_heading"=>$record->coaching_sub_heading,
                "coaching_image"=>'<a href="'.$record->coaching_image.'" target="_blank" class="btn btn-info btn-xs">View Image </a>',
                "coaching_status" => $record->coaching_status,
                "action" => '<a onclick="open_immigrationlocations_edit_modal('. $record->coaching_id.')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>
                <a onclick="delete_coaching('. $record->coaching_id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }





   function get_portfolio_list_data($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (port_title like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('portfolio')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('portfolio')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('portfolio')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "port_id" => $record->port_id,
                "port_title" => $record->port_title,
                "port_image"=>'<a href="'.$record->port_image.'" target="_blank" class="btn btn-danger btn-xs">View Image </a>',
                "port_status" => $record->port_status,
                "action" => '<a onclick="delete_portfolio('. $record->port_id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }


    function delete_portfolio($id)
    {

        $this->db->where('port_id', $id);
        $ok = $this->db->delete('portfolio');

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_immigrationlocations($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (il_title like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('immigration_locations')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('immigration_locations')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('immigration_locations')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "il_id" => $record->il_id,
                "il_country" => $record->il_country,
                // "il_image"=>$record->il_image,
                //"il_description"=>$record->il_description,
                "il_status" => $record->il_status,
                "action" => '<a onclick="delete_immigration_locations(' . $record->il_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_immigrationlocations_edit_modal(' . $record->il_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_immigrationlocations_details($id)
    {
        $this->db->where('il_id', $id);

        $ok = $this->db->get('immigration_locations');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_immigrationlocationsbyid($id, $new)
    {

        $this->db->where('il_id', $id);
        $ok = $this->db->update('immigration_locations', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_immigrationlocations($id)
    {
        $this->db->where('il_id', $id);
        $ok = $this->db->delete('immigration_locations');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_ourservices_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (title like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('ourservices')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('ourservices')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('ourservices')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "os_id" => $record->os_id,
                "heading" => $record->title,
                "subtitle" => $record->subtitle,
                "status" => $record->service_status,
                "action" => '<a onclick="delete_ourservices(' . $record->os_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_ourservicesedit_modal(' . $record->os_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_contactus_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (contact_name like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('contactus')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('contactus')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('contactus')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "contact_id" => $record->contact_id,
                "contact_name" => $record->contact_name,
                "contact_phone" => $record->contact_phone,
                "contact_email" => $record->contact_email,
                "contact_destination" => $record->contact_destination,
                "contact_education" => $record->contact_education,
                "contact_interest" => $record->contact_interest,
                "contact_intakeyear" => $record->contact_intakeyear,
                "action" => '<a onclick="delete_contact(' . $record->contact_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>',

            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_newsletter_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (nl_name like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('newsletter')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('newsletter')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('newsletter')->result();
        //   echo'<pre>';
        //   print_r($records);
        //   die();

        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "nl_id" => $record->nl_id,
                "nl_email" => $record->nl_email,
                "action" => '<a onclick="delete_newsletter(' . $record->nl_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_newsletter_edit_modal(' . $record->nl_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_whychooseus_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (wcsheading like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('whychooseus')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('whychooseus')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('whychooseus')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "wcs_id" => $record->wcs_id,
                "wcs_heading" => $record->wcs_heading,
                "wcs_subheading" => $record->wcs_subheading,
                "wcs_status" => $record->wcs_status,
                "action" => '<a onclick="delete_whychooseus(' . $record->wcs_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_whychooseus_modal(' . $record->wcs_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }
    function get_universities_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (uni_name like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('universities')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('universities')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('universities')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "uni_id" => $record->uni_id,
                "immigration_id" => $record->immigration_id,
                "uni_name" => $record->uni_name,
                "uni_details" => $record->uni_details,
                "pincode" => $record->pincode,
                "status" => $record->status,
                "action" => '<a onclick="delete_universities(' . $record->uni_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_universities_edit_modal (' . $record->uni_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_queans_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (title like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('questionanswers')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('questionanswers')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('questionanswers')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "qa_id" => $record->qa_id,
                "qa_que" => $record->qa_que,
                "qa_ans" => $record->qa_ans,
                "qa_status" => $record->qa_status,
                "action" => '<a onclick="delete_queansbyid(' . $record->qa_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_questionanswers_edit_modal(' . $record->qa_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function get_faq_table($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (title like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('frequentlyasked_ques')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('frequentlyasked_ques')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('frequentlyasked_ques')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "faq_id" => $record->faq_id,
                "faq_que" => $record->faq_que,
                "faq_ans" => $record->faq_ans,
                "faq_status" => $record->faq_status,
                "action" => '<a onclick="delete_faq(' . $record->faq_id . ')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    <a onclick="open_faq_edit_modal(' . $record->faq_id . ')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }


        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }


    // function delete_ourservices($id)
    // {
    //     $this->db->where('os_id',$id);
    //     $ok=$this->db->delete('ourservices');
    //      if($ok)
    //      {
    //          return true;
    //      }
    //      else
    //      {
    //          return false;
    //      }
    // }

    function update_footerdetails($new)
    {
        $ok = $this->db->update('footerdetails', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_footerdetails()
    {

        $ok = $this->db->get('footerdetails');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function get_footerdetailbyid($id)
    {
        $this->db->where('footer_id', $id);

        $ok = $this->db->get('footerdetails');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_footerdetailsbyid($id, $new)
    {

        $this->db->where('footer_id', $id);
        $ok = $this->db->update('footerdetails', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_footerdetailsbyid($id)
    {
        $this->db->where('footer_id', $id);
        $ok = $this->db->delete('footerdetails');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function create_newsletter($new)
    {

        $ok = $this->db->insert('newsletter', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
        function add_coaching($new)
    {

        $ok = $this->db->insert('coaching', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
           function update_coaching($id,$new)
    {
$this->db->where('coaching_id',$id);
        $ok = $this->db->update('coaching', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
function get_coaching_details($id)
    {
            $this->db->where('coaching_id',$id);
        $ok = $this->db->get('coaching');

        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }
    
    function get_our_skills_details($id)
    {
            $this->db->where('os_id',$id);
        $ok = $this->db->get('our_skills');

        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }
    
            function delete_coaching($id)
    {
$this->db->where('coaching_id',$id);
        $ok = $this->db->delete('coaching');

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
    
            function delete_skill($id)
    {
$this->db->where('os_id',$id);
        $ok = $this->db->delete('our_skills');

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
      function update_skill($id,$new)
    {
$this->db->where('os_id',$id);
        $ok = $this->db->update('our_skills',$new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    
          function add_skill($new)
    {
// $this->db->where('os_id',$id);
        $ok = $this->db->insert('our_skills',$new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function get_newsletter()
    {

        $ok = $this->db->get('newsletter');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_newsletterbyid($id)
    {
        $this->db->where('nl_id', $id);

        $ok = $this->db->get('newsletter');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_newsletterbyid($id, $new)
    {

        $this->db->where('nl_id', $id);
        $ok = $this->db->update('newsletter', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_newsletterbyid($id)
    {
        $this->db->where('nl_id', $id);
        $ok = $this->db->delete('newsletter');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function update_policy($new)
    {
        $ok = $this->db->update('policies', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }


    function get_policy_details()
    {
        $ok = $this->db->get('policies');

        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }



    function get_policy_list()
    {
        $ok = $this->db->get('policies');

        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }



    function get_policy()
    {

        $ok = $this->db->get('policies');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_policybyid($id)
    {
        $this->db->where('p_id', $id);

        $ok = $this->db->get('policies');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_policybyid($id, $new)
    {

        $this->db->where('p_id', $id);
        $ok = $this->db->update('policies', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_policybyid($id)
    {
        $this->db->where('p_id', $id);
        $ok = $this->db->delete('policies');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function create_admin($new)
    {
        $ok = $this->db->insert('admin', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_admin()
    {

        $ok = $this->db->get('admin');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_adminbyid($id)
    {
        $this->db->where('a_id', $id);

        $ok = $this->db->get('admin');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_adminbyid($id, $new)
    {

        $this->db->where('a_id', $id);
        $ok = $this->db->update('admin', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_adminbyid($id)
    {
        $this->db->where('a_id', $id);
        $ok = $this->db->delete('admin');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function adminlogin($mobile, $a_password)
    {
        $this->db->where('mobile', $mobile);
        $this->db->where('password', $a_password);
        $ok = $this->db->get('admin');

        if ($ok) {

            return $ok->row_array();

        }


        else {
            return false;
        }
    }

    function create_universities($new)
    {
        $ok = $this->db->insert('universities', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_universities()
    {

        $ok = $this->db->get('universities');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_immigrationlocations_university_list($id)
    {
        $this->db->where('immigration_id', $id);

        $ok = $this->db->get('universities');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function update_universitiesbyid($id, $new)
    {

        $this->db->where('uni_id', $id);
        $ok = $this->db->update('universities', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_universitiesbyid($id)
    {
        $this->db->where('uni_id', $id);
        $ok = $this->db->delete('universities');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function update_university($id, $data)
    {
        $this->db->where('uni_id', $id);
        $ok = $this->db->update('universities', $data);
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_universitiesbyid($id)
    {
        $this->db->where('uni_id', $id);
        $ok = $this->db->get('universities');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }



 function add_client($new)
    {
        $ok = $this->db->insert('clients', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }


    function create_queans($new)
    {
        $ok = $this->db->insert('questionanswers', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_queans()
    {

        $ok = $this->db->get('questionanswers');
        if ($ok) {
            return $ok->result_array();
        }
        else {
            return false;
        }
    }

    function get_queansbyid($id)
    {
        $this->db->where('qa_id', $id);

        $ok = $this->db->get('questionanswers');
        if ($ok) {
            return $ok->row_array();
        }
        else {
            return false;
        }
    }

    function update_queansbyid($id, $new)
    {

        $this->db->where('qa_id', $id);
        $ok = $this->db->update('questionanswers', $new);

        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }
    function delete_queansbyid($id)
    {
        $this->db->where('qa_id', $id);
        $ok = $this->db->delete('questionanswers');
        if ($ok) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_universities_details($id)
    {

        $this->db->where('immigration_id', $id);
        $this->db->join('immigration_locations', 'immigration_locations.il_id = universities.immigration_id');

        $q = $this->db->get('universities');
        if ($q) {
            return $q->result_array();
        }
        else {
            return false;
        }
    }

    function get_silder_details()
    {
        $query = $this->db->get('immigration_locations');
        if ($query) {
            return $query->result_array();
        }
        else {
            return false;
        }
    }

    function get_service_details()
    {
        $query = $this->db->get('ourservices');
        if ($query) {
            return $query->result_array();
        }
        else {
            return false;
        }
    }

    function get_whychooseus_details()
    {
        $query = $this->db->get('whychooseus');
        if ($query) {
            return $query->result_array();
        }
        else {
            return false;
        }
    }

    function get_faq_details()
    {
        $query = $this->db->get('frequentlyasked_ques');
        if ($query) {
            return $query->result_array();
        }
        else {
            return false;
        }
    }

    function get_contactus_details()
    {
        $query = $this->db->get('footerdetails');
        if ($query) {
            return $query->row_array();
        }
        else {
            return false;
        }
    }

    function fetch_immigration_locations()
    {
        // $this->db->select('il_country');
        $data = $this->db->get('immigration_locations');
        if ($data) {
            return $data->result_array();
        }
        else {
            return false;
        }
    }
    
    
    function get_skills($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (os_heading like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('our_skills')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('our_skills')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('our_skills')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "os_id" => $record->os_id,
                "os_heading" => $record->os_heading,
                "os_precentage" => $record->os_precentage,
                "action" => '<a onclick="open_immigrationlocations_edit_modal('. $record->os_id.')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>
                <a onclick="delete_skills('. $record->os_id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>',


                // <button type="submit"  onClick="delete_task('.$record->project_id.')"  class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
            );


        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }
    
     function get_client_details($id)
    {
        $this->db->where('clients_id',$id);
        $data = $this->db->get('clients');
        if ($data) {
            return $data->row_array();
        }
        else {
            return false;
        }
    }
    
    
     function get_client($postData = null)
    {

        //  print_r($postData);
        //  die();

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (clients_name like '%" . $searchValue . "%') ";
        }


        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('clients')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('clients')->result();
        $totalRecordwithFilter = $records[0]->allcount;


        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('clients')->result();



        $data = array();

        foreach ($records as $record) {


            $data[] = array(
                "clients_id" => $record->clients_id,
                 "clients_name" => $record->clients_name,
                "clients_phone" => $record->clients_phone,
                "clients_email" => $record->clients_email,
                "action" => '<a onclick="open_immigrationlocations_edit_modal('. $record->clients_id.')" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></a>
                <a onclick="delete_client('. $record->clients_id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>',
            );



                
                

        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }
}