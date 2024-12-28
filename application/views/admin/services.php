<!DOCTYPE html>
<html lang="en">

<head>
    
    
         <?php include('parts/head.php')?>
  

</head>

<body>
    
      <!-- Add modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Services
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_services" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Service Name</label>
                                            <input type="text" id="service_name" name="service_name" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Service SubHeadign</label>
                                            <input type="text" id="service_sub_heading" name="service_sub_heading" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-12">
                                       
                                        
                                     
                                          <div id="summernote"></div>

                                        
                                        </div>
                                 
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                        <select class="form-control form-control-lg" id="service_status" name="service_status" >
                                            
                                            <option value="active">Active</option>
                                              <option  value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                            
                                  
                                </div>
                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Submit</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                            
        <!--  end Add modal Modal -->                          
                            
                            
    <!-- Edit modal Modal -->
    <div class="modal fade" id="edit_immigration_locations" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Services
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_ourservices" method="post">
                                <div class="row">
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <!--<label for="first-name-column"> Service id</label>-->
                                            <input type="text" id="n_service_id" hidden name="n_service_id" class="form-control"
                                                placeholder="Email" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column"> Service Name</label>
                                            <input type="text" id="n_service_name" name="n_service_name" class="form-control"
                                                placeholder="Email" >
                                        </div>
                                    </div>
                                
                                  
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Service SubHeadign</label>
                                         
                                        <input class="form-control form-control-lg" id="n_service_subheadign" name="n_service_subheadign" type="text">
                                        </div>
                                    </div>
                                    
                                       <div class="col-md-12">
                                       
                                        
                                     
                                          <div class="summernote"id="new_summernote"></div>

                                        
                                        </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         
                                   <select name="n_status"  id="n_status"   class="form-control">
                                  <option value="active">Active</option>
                                  <option value="inactive">Inactive</option>
                                 
                                </select>                                        </div>
                                    </div>
                                    
                                 
                                </div>
                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Update</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
    
    
    
    
    <!-- end edit modal Modal -->
    
    <div id="app">
           <?php include('parts/sidebar.php')?>
           
      
        
        
        <div id="main">
            
            <?php include('parts/header.php')?>
            
            
     
            
            
            
<div class="page-heading">
    <h3>Services</h3>
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
              
              
              
                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                Add
                            </button>
              
              
          
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            </div>
            <div class="card-body">
             <table class="table table-striped table-hover" id="eq_list" style="width:100%;">
                        <thead>
                          <tr>
                           <th>ref #</th>
                            <th>title</th>
                            <th>subtitle</th>
                            <th>image</th>
                            <th>action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                       
                         
                        </tbody>
                      </table>
            </div>
        </div>

    </section>
</div>



     <?php include('parts/footer.php')?>
     
	<script type="text/javascript">
     
     $(document).ready(function() {
  $('.summernote').summernote({
    tabsize: 2,
    height: 250,
});
});

	$(document).ready(function(){
	     $('#eq_list').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'post',
	      	'ajax': {
	          'url':'<?php echo base_url(); ?>Immigration_api/get_ourservices_table'
	      	},
	      	'columns': [
                { data: 'os_id' },
                { data: 'heading' },
                { data: 'subtitle' },
                 { data: 'status' },
                  { data: 'action' },
            
                          
	         
	      	]
	   	});
	   	
	   	
	   	
	   	
	   	

	   
	   	
 	
	});
	
	</script>   
	
	
	
	
	<script>
	  $(document).ready(function(){  
      $('#add_services').on('submit', function(e){  
                e.preventDefault();  
               
                      var privacy_policy = $('#summernote').summernote('code');
                
                var privacy_editor = new FormData(this);
              
                privacy_editor.append('service_details',privacy_policy);
              
               
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/create_ourservices",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                         if(data.type == "success"){
                     $("#add_ourservices_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                   
                 }else{
                $("#add_ourservices_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
             // window.location.href='<?=base_url()?>ourservices';
                 
                 
                        
                     }  
                });  
            
      });  
 });  
 
 
 </script>   
 <script>
          $('#update_ourservices').on('submit', function(e){  
                e.preventDefault();  
                
         
                // console.log(features_array);
            var privacy_policy = $('#new_summernote').summernote('code');
                
                var privacy_editor = new FormData(this);
              
                privacy_editor.append('service_details',privacy_policy);
               
       
            
                $.ajax({  
                     url:"<?=base_url()?>Immigration_api/update_ourservicesbyid",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                             var data= JSON.parse(data);
                 if(data.type == "success"){
                     $("#edit_ourservices_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                //   window.location.reload();
                 }else{
                $("#edit_ourservices_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
                 
                     }  
                });  
            
      });  
 </script> 
 
 <script>
      function open_ourservicesedit_modal(id){
          //alert(id);
       $('#edit_immigration_locations').modal('show');
           
          $.post("<?=base_url()?>Immigration_api/get_ourservicesbyid",{'id':id},function(data)
             {
              var value= JSON.parse(data);
                  console.log(value);
                    $("#n_service_id").val(value.data.os_id);
                    $("#n_service_name").val(value.data.title);
                    $("#n_service_subheadign").val(value.data.subtitle);
                    $("#n_status").val(value.data.service_status);
                     $('#new_summernote').summernote('code', ''+value.data.service_details+'');

             })
     
    
      }
 </script>   
 <script>
      function delete_ourservices(id){
        if(confirm('Are you sure to remove this record ?'))
        {
        //   alert(id);
            
           
          $.post("<?=base_url()?>Immigration_api/delete_ourservicesbyid",{'id':id},function(data)
             {
                console.log(data);
             })
        }
    
      }
  
  </script>   

 
 
 
</body>

</html>
