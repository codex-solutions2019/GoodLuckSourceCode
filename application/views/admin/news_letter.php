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
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Newsletter
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_newsletter" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">nl name</label>
                                            <input type="text" id="nl_name" name="n1_name" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">nl phone</label>
                                            <input type="text" id="nl_phone" name="nl_phone" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">nl email</label>
                                         
                                        <input class="form-control form-control-lg" id="nl_email" name="nl_email" type="text">
                                        </div>
                                    </div>
                                    
                                 
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">nl status</label>
                                        <select class="form-control form-control-lg" id="nl_status" name="nl_status" >
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
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Newsletter
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_newsletter" method="post">
                                                
                                <div class="row">
                                 
                                
                                  
                                     
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">nl email</label>
                                         
                                        <input class="form-control form-control-lg" id="new_email" name="new_email" type="text">
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
    <h3>Newsletter</h3>
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
                <div class=" table table-responsive">
             <table class="table table-striped table-hover " id="eq_list">
                        <thead>
                          <tr>
                           <th>ref #</th>
                            <th>nlemail</th>
                            <th>action</th>
                            
                            
                            
                           
                          </tr>
                        </thead>
                        <tbody>
                       
                         
                        </tbody>
                      </table>
                      </div>
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
	          'url':'<?php echo base_url(); ?>Immigration_api/get_newsletter_table'
	      	},
	      	'columns': [
                    { data: 'nl_id' },
                    { data: 'nl_email' },
                    { data: 'action' }
	      	]
	   	});
	   	
	   	
	   	
	   	
	   	

	   
	   	
 	
	});
	
	</script>
      
 <script>
      function open_newsletter_edit_modal(id){
          //alert(id);
       $('#edit_immigration_locations').modal('show');
           
          $.post("<?=base_url()?>Immigration_api/get_newsletterbyid",{'id':id},function(data)
             {
              var value= JSON.parse(data);
                    console.log(value);
                    $("#new_email").val(value.data.nl_email);
             })
     
    
      }
 </script>           
<script>
      function delete_newsletter(id){
        if(confirm('Are you sure to remove this record ?'))
        {
        //   alert(id);
            
           
          $.post("<?=base_url()?>Immigration_api/delete_newsletterbyid",{'id':id},function(data)
             {
                console.log(data);
             })
        }
    
      }
  
  </script>
 
 
 
 
</body>

</html>
