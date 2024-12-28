<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('parts/head.php')?>
   </head>
   <body>
      <?php include('parts/header.php')?>
      <main class="main">
         <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/breadcrumb.jpg)">
            <div class="container">
               <h1 class="breadcrumb-title">Contact Us</br></h1>
               <!--<ul class="breadcrumb-menu">-->
               <!--   <li><a href="<?=base_url()?>"><i class="far fa-home"></i> Home</a></li>-->
                  <!--<li class="active">Contact Us</li>-->
               <!--</ul>-->
            <!--<h2 class="breadcrumb-title">Contact Us</h2>-->
             <h2 class="breadcrumb-title">HOW CAN WE HELP?</br></h2>
             <h3 class="breadcrumb-title">We are ready to make your Dreams Possible</h3>
            </div>
         </div>
         <div class="contact-area py-120">
         <div class="container-fluid">
            <div class="contact-wrapper">
               <div class="row">
                  <div class="col-md-6 align-self-center">
                     <div class="contact-form">
                        <div class="contact-form-header">
                           <h2>Get In Touch</h2>
                           
                        </div>
                        <form  method="post"  id="contact-form">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Name">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="number" class="form-control" id="contact_phone" name="contact_phone" placeholder="Phone">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <select class="form-select mb-3" id="contact_destination" name="contact_destination"aria-label="Default select example">
                                 <option selected hidden>Select Study Abroad Destination</option>
                                 <?php foreach($locations as $key => $row){?>
                                 <option value="<?=$row['il_country']?>"><?=$row['il_country']?></option>
                                 <?php }?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <select class="form-select mb-3" id="contact_interest" name="contact_interest"aria-label="Default select example">
                                    <option selected hidden>Area of interest</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Certificate">Certificate</option>
                                 </select>
                              </div>
                              
                               <div class="form-group-row mt-2">
                         <input type="number" class="form-control" id="contact_year" name="contact_year" placeholder="Intake Year">
                     </div>
                     
                               <div class="form-group-row mt-2">
                        <button type="submit" class="theme-btn">Send
                              Message <i class="far fa-paper-plane"></i></button>
                     </div>
                              
                              <div class="col-md-12 mt-3" id=>
                                 <div class="form-messege text-success" id="add_contect_alert"></div>
                              </div>
                        </form>
                        </div>
                     </div>
                     
                    
                     <div class="col-md-6">
                        <div class="contact-content">
                           <div class="contact-info">
                              <div class="contact-info-icon">
                                 <i class="fal fa-map-marker-alt"></i>
                              </div>
                              <div class="contact-info-content">
                                 <h5>Office Address</h5>
                                 <p><?=$contact_details['footer_address']?></p>
                              </div>
                               <div class="contact-info-content">
                                 <h5>Uk Address</h5>
                                 <p><?=$contact_details['footer_address_uk']?></p>
                              </div>
                           </div>
                           <div class="contact-info">
                              <div class="contact-info-icon">
                                 <i class="fal fa-phone"></i>
                              </div>
                              <div class="contact-info-content">
                                 <h5>Call Us</h5>
                                 <p><?=$contact_details['footer_phone']?></p>
                              </div>
                           </div>
                           <div class="contact-info">
                              <div class="contact-info-icon">
                                 <i class="fal fa-envelope"></i>
                              </div>
                              <div>
                                  
                              <div class="contact-info-content">
                                 <h5>Email Us</h5>
                                 <p><a href=""><?=$contact_details['footer_email']?></a></p>
                              </div>
                               
                              </div>
                           </div>
                       
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-map">
            <iframe src="<?=$contact_details['footer_map']?>"
               style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>
      </main>
      <?php include('parts/footer.php')?>
      <script>
         $(document).ready(function(){  
            $('#contact-form').on('submit', function(e){  
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
                  
                       
                       
                              
                           }  
                      });  
                  
            });  
         });  
         
         
      </script>