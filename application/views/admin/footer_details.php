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
    <h3>Footer Details</h3>
</div>
<div class="page-content">
     <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Footer Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" id="footer_details" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Email</label>
                                            <input type="text" id="footer_email" name="footer_email" value="<?=$footer['footer_email']?>" class="form-control"
                                                placeholder="Email" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Mobile</label>
                                            <input type="text" id="footer_mobile" name="footer_mobile" value="<?=$footer['footer_phone']?>" class="form-control"
                                                placeholder="Mobile" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Address</label>
                                            <textarea id="footer_address" name="footer_address" class="form-control"><?=$footer['footer_address']?>
                                              </textarea>
                                        </div>
                                    </div>
                                    
                                    
                                             <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Uk Email</label>
                                            <input type="text" id="footer_email_uk" name="footer_email_uk" value="<?=$footer['footer_email_uk']?>" class="form-control"
                                                placeholder="Email" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Uk Mobile</label>
                                            <input type="text" id="footer_mobile_uk" name="footer_mobile_uk" value="<?=$footer['footer_phone_uk']?>" class="form-control"
                                                placeholder="Mobile" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Address Uk</label>
                                            <textarea id="footer_address" name="footer_address_uk" class="form-control"><?=$footer['footer_address_uk']?>
                                              </textarea>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="city-column">Map Address</label>
                                            <textarea id="footer_map" class="form-control"
                                                name="footer_map"><?=$footer['footer_map']?></textarea>
                                        </div>
                                    </div>
                                    
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last-name-column">Twitter</label>
                                            <input type="text" id="footer_twitter" name="footer_twitter" value="<?=$footer['footer_twitter']?>" class="form-control"
                                                placeholder="twitter" >
                                        </div>
                                    </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last-name-column">Facebook</label>
                                            <input type="text" id="footer_facebook" name="footer_facebook" value="<?=$footer['footer_facebook']?>" class="form-control"
                                                placeholder="facebook" >
                                        </div>
                                    </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last-name-column">Instagram</label>
                                            <input type="text" id="footer_instagram" name="footer_instagram" value="<?=$footer['footer_instagram']?>" class="form-control"
                                                placeholder="instagram" >
                                        </div>
                                    </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last-name-column">Whatsapp</label>
                                            <input type="text" id="footer_whatsapp" name="footer_whatsapp" value="<?=$footer['footer_whatsapp']?>" class="form-control"
                                                placeholder="whatsapp" >
                                        </div>
                                    </div>
                                    
                                    
                                    
                            
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-block me-1 mb-1">Submit</button>
                                  
                                    </div>
                                </div>
                            </form>
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
      $('#footer_details').on('submit', function(e){  
                e.preventDefault();  
                // var privacy_policy = $('#summernote').summernote('code');
                var footer_details = new FormData(this);
              
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/update_footerdetails",
                     method:"POST",  
                     data:footer_details,  
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
