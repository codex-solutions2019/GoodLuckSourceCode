<!DOCTYPE html>
<html lang="en">

<head>
    
    
         <?php include('parts/head.php')?>
  

</head>

<body>
    
      <!-- Add modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Why Choose Us
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_whychooseus" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">wcs heading</label>
                                            <input type="text" id="wcs_heading" name="wcs_heading" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">wcs subheadign</label>
                                            <input type="text" id="wcs_subheading" name="wcs_subheading" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">wcs status</label>
                                        <input class="form-control form-control-lg" id="wcs_status" name="wcs_status" type="text">
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
    <div class="modal fade" id="edit_why_choose_us" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Why choose us
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_why_choose_us" method="post">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">wcs heading</label>
                                            <input type="text" id="new_wcs_id" name="wcs_id"  hidden class="form-control"
                                                placeholder="Country Name" >
                                            <input type="text" id="new_wcs_heading" name="wcs_heading" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">wcs subheadign</label>
                                            <input type="text" id="new_wcs_subheading" name="wcs_subheading" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">wcs status</label>
                                        <input class="form-control form-control-lg" id="new_wcs_status" name="wcs_status" type="text">
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
    <h3>Why Choose Us</h3>
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
                            <th>wcsheading</th>
                            <th>wcssubheading</th>
                            <th>wcsstatus</th>
                            <th>image</th>
                           
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
	          'url':'<?php echo base_url(); ?>Immigration_api/get_whychooseus_table'
	      	},
	      	'columns': [
                { data: 'wcs_id' },
                { data: 'wcs_heading' },
                { data: 'wcs_subheading' },
                 { data: 'wcs_status' },
                  { data: 'action' },
            
                          
	         
	      	]
	   	});
	   	
	   	
	   	
	   	
	   	

	   
	   	
 	
	});
	
	</script>
	
	
	<script>
      function open_whychooseus_modal(id){
          //alert(id);
          
          $('#edit_why_choose_us').modal('show');
     
           
          $.post("<?=base_url()?>Immigration_api/get_whychooseusbyid",{'id':id},function(data)
             {
                var value= JSON.parse(data);
                 console.log(value);
                    $("#new_wcs_id").val(value.data.wcs_id);
                    $("#new_wcs_heading").val(value.data.wcs_heading);
                    $("#new_wcs_subheading").val(value.data.wcs_subheading);
                    $("#new_wcs_status").val(value.data.wcs_status);
             })
     
    
      }
 </script>
	<script>
	  $(document).ready(function(){  
      $('#add_whychooseus').on('submit', function(e){  
                e.preventDefault();  
               
                var privacy_editor = new FormData(this);
              
               
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/create_whychooseus",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                         if(data.type == "success"){
                     $("#add_whychooseus_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                   
                 }else{
                $("#add_whychooseus_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
             location.reload();
                 
                 
                        
                     }  
                });  
            
      });  
 });  
 
 
 </script>
 <script>
          $('#update_why_choose_us').on('submit', function(e){  
                e.preventDefault();  
                
         
                // console.log(features_array);
                var fd = new FormData(this);
               
       
            
                $.ajax({  
                     url:"<?=base_url()?>Immigration_api/update_whychooseusbyid",
                     method:"POST",  
                     data:fd,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                             var data= JSON.parse(data);
                 if(data.type == "success"){
                     $("#edit_whychooseus_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                   
                 }else{
                $("#edit_whychooseus_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
                 
                     }  
                });  
            
      });  
 </script>
 

 
 
   <script>
      function delete_whychooseus(id){
        if(confirm('Are you sure to remove this record ?'))
        {
        //   alert(id);
            
           
          $.post("<?=base_url()?>Immigration_api/delete_whychooseusbyid",{'id':id},function(data)
             {
                console.log(data);
             })
        }
    
      }
  
  </script>
  
   <script>
         function open_edit_modal(id){
            //  alert(id);
             $('#edit_whychooseus').modal('show');
            
             $.post(
                 "<?=base_url()?>Immigration_api/delete_whychooseusbyid",
                 {'id':id},
                 function(data){
                 var value= JSON.parse(data);
                 console.log(value);
                    $("#wcs_id").val(value.data.wcs_id);
                    $("#wcs_heading").val(value.data.wcs_heading);
                    $("#wcs_subheading").val(value.data.wcs_subheading);
                    $("#wcs_status").val(value.data.wcs_status);
                     
         
             })
       
         }
     
     </script>  
 <script>
         function delete_whychooseusbyid(id){
if(confirm('Are you sure to remove this account type ?'))
        {
            
            //   alert(id);
          $.post("<?=base_url()?>immigration/delete_whychooseusbyid",{'id':id},function(data)
             {
                 location.reload();
             })
        }
           
  
    }
             
</script>
 
 
 
</body>

</html>
