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
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Skill
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_skills" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Skill Name</label>
                                            <input type="text" id="os_heading" name="os_heading" class="form-control"
                                                placeholder="Skill Name" >
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Skill Subheading</label>
                                            <input type="text" id="os_precentage" name="os_precentage" class="form-control"
                                                placeholder="Skill Name" >
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
                                                <span class="d-none d-sm-block">Add Skill </span>
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
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Skill
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_skills" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Skill Name</label>
                                             <input type="text" id="new_os_id" hidden name="os_id" class="form-control"
                                                placeholder="Skill Name" >
                                            <input type="text" id="new_os_heading" name="os_heading" class="form-control"
                                                placeholder="Skill Name" >
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Skill Subheading</label>
                                            <input type="text" id="new_os_precentage" name="os_precentage" class="form-control"
                                                placeholder="Skill Name" >
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
                                                <span class="d-none d-sm-block">Add Skill </span>
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
    <h3>Skill Type</h3>
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
                            <th>Skill name</th>
                            <th>Skill precentage</th>
              
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
	          'url':'<?php echo base_url(); ?>Immigration_api/get_skills'
	      	},
	      	'columns': [
                { data: 'os_id' },
                { data: 'os_heading' },
                { data: 'os_precentage' },
                //  { data: 'vt_image' },
                // { data: 'vt_status' },
                { data: 'action' },
                
                          
	         
	      	]
	   	});
	 
	   
	 
 	
	});
	
	</script>
	<script>
	  $(document).ready(function(){  
      $('#add_skills').on('submit', function(e){  
                e.preventDefault();  
                // var privacy_policy = $('#summernote').summernote('code');
                
                var privacy_editor = new FormData(this);
              
                // privacy_editor.append('visa_details',privacy_policy);
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/add_skill",
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
 
 
    
   <script>function delete_skills(id){
        //   alert(id);
        if(confirm('Are you sure to remove this record ?'))
        {
            
           
          $.post("<?=base_url()?>Immigration_api/delete_skill",{'id':id},function(data)
             {
                location.reload();
             })
        }
    
      }</script>
  
  
  
   <script>
      function open_immigrationlocations_edit_modal(id){

$('#edit_immigration_locations').modal('show');

  $.post("<?=base_url()?>Immigration_api/get_our_skills_details",{'id':id},function(data)
             {
                 
                 var data= JSON.parse(data);
                  console.log(data);
                  $('#new_os_id').val(data.os_id);
                 $('#new_os_heading').val(data.os_heading);
                  $('#new_os_precentage').val(data.os_precentage);
                //  $('#new_summernote').html(data.il_description);
                //  $('#summernote').summernote('code');
                // $(".summernote").ineer(data.il_description);
                // $('#new_summernote').summernote('code', ''+data.vt_description+'');
                //  $('#new_visa_status').val(data.vt_status);
                //  $('#').val(data);
                // location.reload();
             })
}
</script>
<script>
	  $(document).ready(function(){  
      $('#update_skills').on('submit', function(e){  
                e.preventDefault();  
                // var privacy_policy = $('#new_summernote').summernote('code');
                var privacy_editor = new FormData(this);
              
                // privacy_editor.append('visa_details',privacy_policy);
                // alert(privacy_editor);
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/update_skill",
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
