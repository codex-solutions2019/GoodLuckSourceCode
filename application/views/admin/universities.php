 <?php include('parts/head.php')?>
  
<body>
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Universities
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="add_immigration" method="post">
                                <div class="row">
                                    
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Select Country</label>
                                         <select class="form-control" id="country_list" name="country_list">
                                       <option  disabled >Select your option</option>
                                         </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">University Name</label>
                                            <input type="text" id="university_name" name="university_name" class="form-control"
                                                placeholder="University Name" >
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">University details</label>
                                            <textarea  id="university_link" name="university_link" class="form-control"></textarea>
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         <select class="form-control" id="university_status" name="university_status">
                                             <option>active</option>
                                             <option>Inactive</option>
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
                                                <span class="d-none d-sm-block">Add University</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
    
     <div class="modal fade" id="edit_immigration_locations" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit universities
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_ourservices" method="post">
                                <div class="row">
                                     <div class="col-md-12">
                                         <ul class="list-group" id="university_list">
                                
                              
                            </ul>
                                       
                                    </div>
                                 
                                </div>
                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                         
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
   
   
   
    <div class="modal fade" id="edit_university" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Update Universities
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" id="update_university" method="post">
                                <div class="row">
                                    
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Select Country</label>
                                            <input type="text" id="new_uni_id" hidden name="university_id">
                                         <select class="form-control" id="new_country_list" name="country_list">
                                       <option  disabled >Select your option</option>
                                         </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">University Name</label>
                                            <input type="text" id="new_university_name" name="university_name" class="form-control"
                                                placeholder="University Name" >
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">University details</label>
                                            <textarea  id="new_university_link" name="university_link" class="form-control"></textarea>
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                         <select class="form-control" id="new_university_status" name="university_status">
                                             <option>active</option>
                                             <option>Inactive</option>
                                             
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
                                                <span class="d-none d-sm-block">Update University</span>
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
    <h3>Universities</h3>
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
                            <th>il_country</th>
                            <!--<th>il_image</th>-->
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
   <script>function delete_university(id,c_id){
        //   alert(id);
        //   alert(c_id);
        if(confirm('Are you sure to remove this record ?'))
        {
            
           
          $.post("<?=base_url()?>Immigration_api/delete_universitiesbyid",{'id':id},function(data)
             {
                open_immigrationlocations_edit_modal(c_id);
             })
        }
    
      }</script>
     
	<script> type="text/javascript">
     
     $(document).ready(function() {
         getcountry();
  $('.summernote').summernote({
    tabsize: 2,
    height: 250,
});
});

	$(document).ready(function(){
	   // getcountry();
	     $('#eq_list').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'post',
	      	'ajax': {
	          'url':'<?php echo base_url(); ?>Immigration_api/get_immigrationlocations'
	      	},
	      	'columns': [
                { data: 'il_id' },
                { data: 'il_country' },
                { data: 'il_status' },
                { data: 'action' }
            
	      	]
	   	});
	 
	   
	   	
 	
	});
	
	</script>
	
	
	<script>
	  $(document).ready(function(){  
      $('#add_immigration').on('submit', function(e){  
                e.preventDefault();  
          
                var formdata = new FormData(this);
              
                
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/create_universities",
                     method:"POST",  
                     data:formdata,  
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
	  $(document).ready(function(){  
      $('#update_university').on('submit', function(e){  
                e.preventDefault();  
          
                var formdata = new FormData(this);
              
                
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/update_university",
                     method:"POST",  
                     data:formdata,  
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
      function open_immigrationlocations_edit_modal(id){
           $("#university_list").html('');

$('#edit_immigration_locations').modal('show');


 $.get('<?=base_url()?>Immigration_api/get_country_universities_details',{"id":id},function(data){
                 
    var data= JSON.parse(data);
        $.each(data,function(index,value){
        
        // console.log(value);
        $("#university_list").append('<li class="list-group-item d-flex justify-content-between align-items-center"> \
                    <span><a href="'+value.uni_details+'" target="_blank">'+value.uni_name+'</a></span><div><span class="badge bg-danger badge-pill badge-round ml-1" onclick="delete_university('+value.uni_id+', \'' + value.immigration_id + '\')"><i class="fas fa-trash"></i></span> <span class="badge bg-success badge-pill badge-round ml-1" onclick="edit_university('+value.uni_id+')"><i class="fas fa-edit"></i></span></div> \
                </li> ');
        
        });
             })





}

</script>

<script>
    function edit_university(id){
$('#edit_immigration_locations').modal('hide');

 $.get('<?=base_url()?>Immigration_api/get_universitiesbyid',{"uni_id":id},function(data){
                 
    var data= JSON.parse(data);
       
         $('#new_uni_id').val(data.data.uni_id);
       $('#new_country_list').val(data.data.immigration_id);
       $('#new_university_name').val(data.data.uni_name);
       $('#new_university_link').val(data.data.uni_details);
       $('#new_university_status').val(data.data.status);
             })
$('#edit_university').modal('show');


        

    }
</script>
<script>
	  $(document).ready(function(){  
      $('#add_exampleModalCenter').on('submit', function(e){  
                e.preventDefault();  
                var privacy_policy = $('#summernote').summernote('code');
                var privacy_editor = new FormData(this);
              
                privacy_editor.append('country_details',privacy_policy);
              
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
 


    
      }
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
  
 
</body>

</html>
