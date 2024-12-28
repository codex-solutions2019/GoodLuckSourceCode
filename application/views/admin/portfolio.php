<!DOCTYPE html>
<html lang="en">

<head>
    
    
         <?php include('parts/head.php')?>
  

</head>

<body>
    
      <!-- Vertically Centered modal Modal -->
<div class="modal fade" id="add_portfolio" tabindex="-1" aria-labelledby="add_portfolio" style="display: none;" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="add_portfolio">Add Portfolio
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_portfolio_image" method="post">
                                <div class="row">
                                    
                                    
                                    
                                    
                                  <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="first-name-column">Select Country</label>
                                            <select id="country_list" name="country_list" class="form-control" >
                                                 </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="first-name-column">Image Title</label>
                                            <input type="text" id="image_title" name="image_title" class="form-control"
                                                placeholder="Image Title" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="city-column">Image</label>
                                            <input class="form-control form-control-lg" id="image" name="image" type="file">
                                        </div>
                                    </div>
                                    
                                   
                                  <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         <select class="form-control" id="portfolio_status" name="portfolio_status">
                                             <option value="active">Active</option>
                                              <option value="inactive">InActive</option>
                                             <!--<option>inactive</option>-->
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
                                                <span class="d-none d-sm-block">Add Portfolio</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
    
    <div class="modal fade" id="edit_portfolio" tabindex="-1" aria-labelledby="edit_portfolio" style="display: none;" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit_portfolio">Edit Country
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_immigration" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Country Name</label>
                                              <input type="text" id="new_immigration_id" hidden name="immigration_id" class="form-control"
                                                placeholder="Email" >
                                            <input type="text" id="new_immigration_country" name="immigration_country" class="form-control"
                                                placeholder="Email" >
                                        </div>
                                    </div>
                     
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="city-column">Image</label>
                                            <input class="form-control form-control-lg" id="new_immmigration_file" name="immigraion_file" type="file">
                                        </div>
                                    </div>
                                    
                                    <!--<div class="col-md-12 mt-2">-->
                                    <!--    <div class="form-group">-->
                                    <!--        <label for="city-column">il discription</label>-->
                                    <!--        <input class="form-control form-control-lg" id="new_immmigration_des" name="immigraion_file" type="file">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         <select class="form-control" id="new_immigration_status" name="immigration_status">
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
    <h3>Protfolio</h3>
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
              
              
              
                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#add_portfolio">
                                Add
                            </button>
              

            </div>
            <div class="card-body">
             <table class="table table-striped table-hover" id="eq_list" style="width:100%;">
                        <thead>
                          <tr>
                           <th>ref #</th>
                            <th>Image tile</th>
                            <th>View Image</th>
                           <!--// <th>il_description</th>-->
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
         getcountry();
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
	          'url':'<?php echo base_url(); ?>Immigration_api/get_portfolio_list'
	      	},
	      	'columns': [
	      	    
	      	    
                { data: 'port_id' },
                { data: 'port_title' },
                { data: 'port_image' },
                { data: 'port_status' },
                { data: 'action' },
                
                          
	         
	      	]
	   	});
	 
	   
	   	
 	
	});
	
	</script>
	<script>
	  $(document).ready(function(){  
      $('#add_portfolio_image').on('submit', function(e){  
                e.preventDefault();  
               
                
                var privacy_editor = new FormData(this);
              
              
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/add_portfolio_image",
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
 
 
    <script>
         function getcountry()
         {
             $("#country_list").html('');
                    $.get(
             '<?=base_url()?>Immigration_api/fetch_immigration_locations',function(data){
                 
                  var data= JSON.parse(data);
              $.each(data,function(index,value){
    
            // console.log(value);
            $("#country_list").append("<option value='"+value.il_id+"'>"+value.il_country+"</option>");
    
    });
             $.each(data,function(index,value){
    
            // console.log(value);
            $("#new_country_list").append("<option value='"+value.il_id+"'>"+value.il_country+"</option>");
    
    });
    
    
             })
         }
     </script>
 
 
    
   <script>function delete_portfolio(id){
        //   alert(id);
        if(confirm('Are you sure to remove this record ?'))
        {
            
           
          $.post("<?=base_url()?>Immigration_api/delete_portfolio",{'id':id},function(data)
             {
                location.reload();
             })
        }
    
      }</script>
  
  
  
<script>
    function open_immigrationlocations_edit_modal(id){
        
        $('#edit_immigration_locations').modal('show');
        
          $.post("<?=base_url()?>Immigration_api/get_immigrationlocations_details",{'id':id},function(data)
                     {
                         
                         var data= JSON.parse(data);
                          console.log(data);
                          $('#new_immigration_id').val(data.il_id);
                         $('#new_immigration_country').val(data.il_country);
                        //  $('#new_summernote').html(data.il_description);
                        //  $('#summernote').summernote('code');
                        // $(".summernote").ineer(data.il_description);
                        $('#new_summernote').summernote('code', ''+data.il_description+'');
                         $('#new_immigration_status').val(data.il_status);
                        //  $('#').val(data);
                        // location.reload();
            })
        }
</script>
<script>
	  $(document).ready(function(){  
      $('#update_immigration').on('submit', function(e){  
                e.preventDefault();  
                var privacy_policy = $('#new_summernote').summernote('code');
                var privacy_editor = new FormData(this);
              
                privacy_editor.append('country_details',privacy_policy);
                // alert(privacy_editor);
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/update_immigrationlocationsbyid",
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
