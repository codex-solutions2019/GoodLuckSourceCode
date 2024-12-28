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
                  <h5 class="modal-title" id="exampleModalCenterTitle">Add Contact US
                  </h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </button>
               </div>
               <div class="modal-body">
                  <form class="form" id="add_contect" method="post">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="first-name-column">contact Name</label>
                           <input type="text" id="contact_name" name="contact_name" class="form-control"
                              placeholder="name" >
                        </div>
                     </div>
                     <div class="col-md-12">
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="city-column">contact phone</label>
                           <input class="form-control form-control-lg" id="contact_phone" name="contact_phone" type="text">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="city-column">contact email</label>
                           <input class="form-control form-control-lg" id="contact_email" name="contact_email" type="email">
                        </div>
                     </div>
                     <div class="mb-3">
                        <label class="form-label">contact destination</label>
                        <select name="contact_destination"  id="contact_destination"   class="form-control">
                           <option value="option 1">option 1</option>
                           <option value="option 2">option 2</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label class="form-label">contact education</label>
                        <select name="contact_education"  id="contact_education"   class="form-control">
                           <option value="option 1">option 1</option>
                           <option value="option 2">option 2</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label class="form-label">contact interest</label>
                        <select name="contact_interest"  id="contact_interest"   class="form-control">
                           <option value="option 1">option 1</option>
                           <option value="option 2">option 2</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="city-column">contact intakeyear</label>
                           <input class="form-control form-control-lg" id="contact_year" name="contact_year" type="text">
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
                  <h5 class="modal-title" id="exampleModalCenterTitle">Edit contact
                  </h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                     </svg>
                  </button>
               </div>
               <div class="modal-body">
                  <form class="form" id="update_contact" method="post">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <input type="hidden"  id="new_update" name="new_update">
                              <label for="first-name-column">contact Name</label>
                              <input type="text" id="new_contact" name="new_contact" class="form-control"
                                 placeholder="Enter name" >
                           </div>
                        </div>
                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="city-column">contact phone</label>
                              <input class="form-control form-control-lg" id="new_contact_phone" name="new_contact_phone" type="text">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="city-column">contact email</label>
                              <input class="form-control form-control-lg" id="new_contact_email" name="new_contact_email" type="email">
                           </div>
                        </div>
                        <div class="mb-3">
                           <label class="form-label">contact destination</label>
                           <select name="new_contact_destination"  id="new_contact_destination"   class="form-control">
                              <option value="option 1">option 1</option>
                              <option value="option 2">option 2</option>
                           </select>
                        </div>
                        <div class="mb-3">
                           <label class="form-label">contact education</label>
                           <select name="new_contact_education"  id="new_contact_education"   class="form-control">
                              <option value="option 1">option 1</option>
                              <option value="option 2">option 2</option>
                           </select>
                        </div>
                        <div class="mb-3">
                           <label class="form-label">contact interest</label>
                           <select name="new_contact_interest"  id="new_contact_interest"   class="form-control">
                              <option value="option 1">option 1</option>
                              <option value="option 2">option 2</option>
                           </select>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="city-column">contact intakeyear</label>
                              <input class="form-control form-control-lg" id="new_contact_year" name="new_contact_year" type="text">
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
         <h3>Query Request</h3>
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
                              <th>contactname</th>
                              <th>contactphone</th>
                              <th>contactemail</th>
                              <th>contactdestination</th>
                              <th>contacteducation</th>
                              <th>contactinterest</th>
                              <th>contactintakeyear</th>
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
               'url':'<?php echo base_url(); ?>Immigration_api/get_contactus_table'
           	},
           	'columns': [
                    { data: 'contact_id'},
                    { data: 'contact_name'},
                    { data: 'contact_phone'},
                    { data: 'contact_email'},
                    { data: 'contact_destination'},
                    { data: 'contact_education'},
                    { data: 'contact_interest' },
                    { data: 'contact_intakeyear'},
                    { data: 'action'},
                     
                
                
                              
              
           	]
         });
         
         });
         
      </script>
      <script>
         $(document).ready(function(){  
            $('#add_contect').on('submit', function(e){  
                      e.preventDefault();  
                     
                      var privacy_editor = new FormData(this);
                    
                     
                      $.ajax({  
                           url:"<?php echo base_url(); ?>Immigration_api/create_contact",
                           method:"POST",  
                           data:privacy_editor,  
                           contentType: false,  
                           cache: false,  
                           processData:false,  
                           success:function(data)  
                           {  
                               var data= JSON.parse(data);
                               if(data.type == "success"){
                           $("#add_contect_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                         
                       }else{
                      $("#add_contect_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                    
                  }
                   window.location.href='<?=base_url()?>contect';
                       
                       
                              
                           }  
                      });  
                  
            });  
         });  
         
         
      </script>  
      <script>
         $('#update_contact').on('submit', function(e){  
               e.preventDefault();  
               
         
               // console.log(features_array);
               var fd = new FormData(this);
              
         
           
               $.ajax({  
                    url:"<?=base_url()?>Immigration_api/update_contactbyid",
                    method:"POST",  
                    data:fd,  
                    contentType: false,  
                    cache: false,  
                    processData:false,  
                    success:function(data)  
                    {  
                            var data= JSON.parse(data);
                if(data.type == "success"){
                    $("#edit_contact_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                  
                }else{
               $("#edit_contact_alert").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
             
           }
                
                    }  
               });  
           
         });  
      </script>
      </script>
      <script>
         function open_contact_edit_modal(id){
            //  alert(id);
             $('#edit_immigration_locations').modal('show');
            
             $.post(
                 "<?=base_url()?>Immigration_api/get_contactsbyid",
                 {'id':id},
                 function(data){
                 var value= JSON.parse(data);
                 console.log(value);
                        $("#new_update").val(value.data.contact_id);
                        $("#new_contact").val(value.data.contact_name);
                        $("#new_contact_phone").val(value.data.contact_phone);
                        $("#new_contact_email").val(value.data.contact_email);
                        $("#new_contact_destination").val(value.data.contact_destination);
                        $("#new_contact_education").val(value.data.contact_education);
                        $("#new_contact_interest").val(value.data.contact_interest);
                        $("#new_contact_year").val(value.data.contact_intakeyeyear);
                     
         
             })
         
         }
         
      </script>  
      <script>
         function delete_contact(id){
           if(confirm('Are you sure to remove this record ?'))
           {
           //   alert(id);
               
              
             $.post("<?=base_url()?>Immigration_api/delete_contactbyid",{'id':id},function(data)
                {
                   console.log(data);
                   window.location.reload();
                })
           }
         
         }
         
      </script>
   </body>
</html>