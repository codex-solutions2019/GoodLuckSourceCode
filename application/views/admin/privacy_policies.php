<!DOCTYPE html>
<html lang="en">

<head>
    
    
         <?php include('parts/head.php')?>
  

</head>

<body>
    <div id="app">
           <?php include('parts/sidebar.php')?>
           
      
        
        
        <div id="main">
            
            <?php include('parts/header.php')?>
            
            
     
            
            
            
<div class="page-heading">
    <h3>Privacy Policy</h3>
</div>
<div class="page-content">
     <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <div class="col-12">
                                <div class="card">
                                  
                                    <div class="card-body">
                                        <form id="privacy_policy" class="mb-3" method="POST"> 
                                        <div class="row">
                                        
                                        <div class="col-md-12">
                                       
                                        
                                     
                                          <div id="summernote"><?=$policy['privacy_policy']?></div>

                                        
                                        </div>
                                         <div class="col-md-12 mt-2">
                                        <button class="btn btn-success btn-block">Submit</button>
                                        </div>
                                        </div>
                                        </form>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



     <?php include('parts/footer.php')?>


 <script>


        $(document).ready(function(){  
      $('#privacy_policy').on('submit', function(e){  
                e.preventDefault();  
                var privacy_policy = $('#summernote').summernote('code');
                var privacy_editor = new FormData(this);
              
                privacy_editor.append('setting_privacy_policy',privacy_policy);

            
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/update_policy",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                       
                        Swal.fire({
                          title: data.msg,
                          icon: data.type
                        });
                     }  
                });  
            
      });  
 });  
 </script>    

