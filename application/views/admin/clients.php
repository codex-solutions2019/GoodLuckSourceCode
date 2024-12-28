<!DOCTYPE html>
<html lang="en">

<head>
    
    
         <?php include('parts/head.php')?>
  

</head>

<body>
    
      <!-- Vertically Centered modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add client
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_client" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">client Name</label>
                                            <input type="text" id="client_name" name="client_name" class="form-control"
                                                placeholder="client Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">client email</label>
                                            <input type="text" id="client_email" name="client_email" class="form-control"
                                                placeholder="client Name" >
                                        </div>
                                    </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">client phone</label>
                                            <input type="text" id="client_phone" name="client_phone" class="form-control"
                                                placeholder="client Name" >
                                        </div>
                                    </div>
                                    
                                
                                    
                                  
                                
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="city-column">Image</label>
                                            <input class="form-control form-control-lg" id="client_file" name="client_file" type="file">
                                        </div>
                                    </div>
                                    
                                   
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         <select class="form-control" id="client_status" name="client_status">
                                             <option>active</option>
                                             <option>not active</option>
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
                                                <span class="d-none d-sm-block">Add Country</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
    
    <div class="modal fade" id="edit_immigration_locations" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit client
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_client" method="post">
                               <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">client Name</label>
                                              <input type="text" id="new_client_id" name="client_id" class="form-control"
                                                placeholder="client Name" >
                                            <input type="text" id="new_client_name" name="client_name" class="form-control"
                                                placeholder="client Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">client email</label>
                                            <input type="text" id="new_client_email" name="client_email" class="form-control"
                                                placeholder="client Name" >
                                        </div>
                                    </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">client phone</label>
                                            <input type="text" id="new_client_phone" name="client_phone" class="form-control"
                                                placeholder="client Name" >
                                        </div>
                                    </div>
                                    
                                
                                    
                                  
                                
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="city-column">Image</label>
                                            <input class="form-control form-control-lg" id="new_client_file" name="client_file" type="file">
                                        </div>
                                    </div>
                                    
                                   
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         <select class="form-control" id="new_client_status" name="client_status">
                                             <option>active</option>
                                             <option>not active</option>
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
                                                <span class="d-none d-sm-block">Update</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
    
    
    
    
    
    
    <div id="app">
           <?php include('parts/sidebar.php')?>
           
      
        
        
        <div id="main">
            
            <?php include('parts/header.php')?>
            
            
     
            
            
            
<div class="page-heading">
    <h3>client Type</h3>
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
                            <th>client name</th>
                            <th>client description</th>
                            <th>il_status</th>
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
     
	<script> type="text/javascript">
     
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
	          'url':'<?php echo base_url(); ?>Immigration_api/get_client'
	      	},
	      	'columns': [
                { data: 'clients_id' },
                { data: 'clients_name' },
                 { data: 'clients_phone' },
                { data: 'clients_email' },
                { data: 'action' },
                
                          

	      	]
	   	});
	 
	   
	 
 	
	});
	
	</script>
	<script>
	  $(document).ready(function(){  
      $('#add_client').on('submit', function(e){  
                e.preventDefault();  
                // var privacy_policy = $('#summernote').summernote('code');
                
                var privacy_editor = new FormData(this);
              
                // privacy_editor.append('client_details',privacy_policy);
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/add_client",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                        
                     }  
                });  
            
      });  
 });  
 
 
 </script>
 
 
    
   <script>function delete_client(id){
        //   alert(id);
        if(confirm('Are you sure to remove this record ?'))
        {
            
           
          $.post("<?=base_url()?>Immigration_api/delete_client",{'id':id},function(data)
             {
                location.reload();
             })
        }
    
      }</script>
  
  
  
   <script>
      function open_immigrationlocations_edit_modal(id){

$('#edit_immigration_locations').modal('show');

  $.post("<?=base_url()?>Immigration_api/get_client_details",{'id':id},function(data)
             {
                 
                 var data= JSON.parse(data);
                  console.log(data);
                  $('#new_client_id').val(data.clients_id);
                 $('#new_client_name').val(data.clients_name);
                  $('#new_client_email').val(data.clients_email);
                   $('#new_client_phone').val(data.clients_phone);
                //  $('#new_summernote').html(data.il_description);
                //  $('#summernote').summernote('code');
                // $(".summernote").ineer(data.il_description);
                // $('#new_summernote').summernote('code', ''+data.client_description+'');
                 $('#new_client_status').val(data.clients_status);
                //  $('#').val(data);
                // location.reload();
             })
}
</script>
<script>
	  $(document).ready(function(){  
      $('#update_client').on('submit', function(e){  
                e.preventDefault();  
                var privacy_policy = $('#new_summernote').summernote('code');
                var privacy_editor = new FormData(this);
              
                privacy_editor.append('client_details',privacy_policy);
                // alert(privacy_editor);
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/update_client",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                        
                     }  
                });  
            
      });  
 });  
 


      </script>
  
 
</body>

</html>
