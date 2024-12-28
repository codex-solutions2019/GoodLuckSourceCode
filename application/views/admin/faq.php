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
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add FAQ
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_faq" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">faq que</label>
                                            <input type="text" id="faq_que" name="faq_que" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">faq ans</label>
                                            <input type="text" id="faq_ans" name="faq_ans" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">faq status</label>
                                        <select class="form-control form-control-lg" id="faq_status" name="faq_status" >
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
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit FAQ
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_faq" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">faq que</label>
                                            <input type="text" id="new_faq_id"  hidden name="faq_que_id" class="form-control"
                                                placeholder="Country Name" >
                                            <input type="text" id="new_faq_que" name="faq_que" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">faq ans</label>
                                            <input type="text" id="new_faq_ans" name="faq_ans" class="form-control"
                                                placeholder="Country Name" >
                                        </div>
                                    </div>
                                 
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">faq status</label>
                                        <select class="form-control form-control-lg" id="new_faq_status" name="faq_status" >
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
    <h3>Faq</h3>
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
                            <th>faqqus</th>
                            <th>faqans</th>
                            <th>faqstatus</th>
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
	          'url':'<?php echo base_url(); ?>Immigration_api/get_faq_table'
	      	},
	      	'columns': [
                { data: 'faq_id' },
                { data: 'faq_que' },
                { data: 'faq_ans' },
                 { data: 'faq_status' },
                  { data: 'action' },
            
                          
	         
	      	]
	   	});
	   	
	   	
	   	
	   	
	   	

	   
	   	
 	
	});
	
	</script>
	<script>
	  $(document).ready(function(){  
      $('#add_faq').on('submit', function(e){  
                e.preventDefault();  
               
                var privacy_editor = new FormData(this);
              
               
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/create_faq",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                         if(data.type == "success"){
                     $("#add_faq_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                   
                 }else{
                $("#add_faq_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
             location.reload();
                 
                 
                        
                     }  
                });  
            
      });  
 });  
 
 
 </script>
 
<script>
          $('#update_faq').on('submit', function(e){  
                e.preventDefault();  
                
         
                // console.log(features_array);
                var fd = new FormData(this);
               
       
            
                $.ajax({  
                     url:"<?=base_url()?>Immigration_api/update_faqbyid",
                     method:"POST",  
                     data:fd,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                             var data= JSON.parse(data);
                 if(data.type == "success"){
                     $("#edit_questionanswers_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                //   window.location.reload();
                 }else{
                $("#edit_questionanswers_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
                 
                     }  
                });  
            
      });  
 </script> 
 
 <script>
      function open_faq_edit_modal(id){
          //alert(id);
       $('#edit_immigration_locations').modal('show');
           
          $.post("<?=base_url()?>Immigration_api/get_faqbyid",{'id':id},function(data)
             {
                var value= JSON.parse(data);
                console.log(value);
                $("#new_faq_id").val(value.data.faq_id);
                $("#new_faq_que").val(value.data.faq_que);
                $("#new_faq_ans").val(value.data.faq_ans);
                $("#new_faq_status").val(value.data.faq_status);
             })
     
    
      }
 </script>   
	
    
     

 
 

 
 
  
  
 <script>
         function delete_faq(id){
if(confirm('Are you sure to remove this account type ?'))
        {
            
            //   alert(id);
          $.post("<?=base_url()?>Immigration_api/delete_faqbyid",{'id':id},function(data)
             {
                console.log(data);
             })
            
        }
           
  
    }
             
</script>
 
 
 
</body>

</html>
