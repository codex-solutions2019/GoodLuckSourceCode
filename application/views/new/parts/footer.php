  <section id="cta" class="cta">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>Ask Your Questions</h2>
      <p>Ask Your Questions</p>
      </div>
      <div class="row">
           <div class="col-lg-6">
      <form id="ask_questions" method="post" role="form" class="contact-email-form">
      <div class="row">
      <div class="form-group mt-3">
      <textarea class="form-control" name="qa_que" id="qa_que" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
      </div>
     
      </div>
      
      <div class="col-lg-6">
          <div class="accordion accordion-flush px-xl-5" id="faqlist">
          
          <?php foreach($que_ans as $key =>$row){?>
      <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="<?=round($key*100)?>">
        <h3 class="accordion-header"> 
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?=$key?>">
                <i class="bi bi-question-circle question-icon"></i> <?=$row['qa_que']?>
            </button>
        </h3>
        <div id="faq-content-<?=$key?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body"> 
              <?=$row['qa_ans']?>
            </div>
        </div>
      </div>
      <?php }?>
      
      
      </div>
      </div>
      </div>
      </section>
      
      
      <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Us</p>
      </div>
      <div class="row">
          
      <div class="col-lg-6">
      <div class="row">
      <div class="col-md-12">
      <div class="info-box">
      <i class="bx bx-map"></i>
      <h3>Our Address</h3>
      <p><?=$contact_details['footer_address']?></p>
       <h3>UK Address</h3>
      <p><?=$contact_details['footer_address_uk']?></p>
      </div>
      </div>
      <div class="col-md-6">
      <div class="info-box mt-4">
      <i class="bx bx-envelope"></i>
      <h3>Email Us</h3>
      <p><?=$contact_details['footer_email']?></p>
       <p><?=$contact_details['footer_email_uk']?></p>
      </div>
      </div>
      <div class="col-md-6">
      <div class="info-box mt-4">
      <i class="bx bx-phone-call"></i>
      <h3>Call Us</h3>
      <p><?=$contact_details['footer_phone']?></p>
      <p><?=$contact_details['footer_phone_uk']?></p>
      </div>
      </div>
      </div>
      </div>
     
      <div class="col-lg-6">
      <div class="row">
      <div class="col-md-12">
      <div class="card p-2">
      <iframe src="<?=$contact_details['footer_map']?>" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section><!-- End Contact Section -->
      </main><!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="footer-info">
                        <img src="<?=base_url()?>assets/img/website/Conquest_Immigration_Service-removebg-preview.png"  width="15%">
                        <p class="pb-3 mt-2"><em>Company Details</em></p>
                        <p>
                          <?=$contact_details['footer_address']?><br><hr>
                           <?=$contact_details['footer_address_uk']?><br><hr>
                           <strong>Phone:</strong> <?=$contact_details['footer_phone']?><br>
                            <strong>Phone Uk:</strong> <?=$contact_details['footer_phone_uk']?><br>
                           <strong>Email:</strong> <?=$contact_details['footer_email']?><br>
                           <strong>Email Uk:</strong> <?=$contact_details['footer_email_uk']?><br>
                        </p>
                        <div class="social-links mt-3">
                           <a href="<?=$contact_details['footer_twitter']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                           <a href="<?=$contact_details['footer_facebook']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                           <a href="<?=$contact_details['footer_instagram']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                           <a href="https://api.whatsapp.com/send/?phone=91<?=$contact_details['footer_whatsapp']?>&text&type=phone_number&app_absent=0" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                           
                
      
      
              </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url();?>terms">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url();?>privacy_policy">Privacy policy</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Our Services</h4>
                     <ul>
                          <?php foreach($services as $key => $row){?>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>"><?=$row['title']?></a></li>
                       <?php }?>
                     </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 footer-newsletter">
                     <h4>Our Newsletter</h4>
                    <div id="newsletter_message"></div>
                     <form id="create_newsletter" method="post">
                        <input type="email" id="nl_email" name="nl_email"><input type="submit" value="Subscribe">
                     </form>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="copyright">
               &copy; Copyright <strong><span>Multi</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
               <!-- All the links in the footer should remain intact. -->
               <!-- You can delete the links only if you purchased the pro version. -->
               <!-- Licensing information: https://bootstrapmade.com/license/ -->
               <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
               Designed by <a href="https://codexsolutions.in/">Codex Solutions</a>
            </div>
         </div>
      </footer>
      
      	<script>
	  $(document).ready(function(){  
      $('#raise_query').on('submit', function(e){  
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
 	<script>
	  $(document).ready(function(){  
      $('#create_newsletter').on('submit', function(e){  
                e.preventDefault();  
               
                var privacy_editor = new FormData(this);
              
               
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/create_newsletter",
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
 
 
 	<script>
	  $(document).ready(function(){  
      $('#ask_questions').on('submit', function(e){  
                e.preventDefault();  
               
                var privacy_editor = new FormData(this);
              
               
                $.ajax({  
                     url:"<?php echo base_url(); ?>Immigration_api/create_queans",
                     method:"POST",  
                     data:privacy_editor,  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         var data= JSON.parse(data);
                         if(data.type == "success"){
                     $("#newsletter_message").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
                   
                 }else{
                $("#newsletter_message").html('<div class=" d-flex justify-content-between alert alert-'+data.type+' alert-dismissible show fade "><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspX</span></button></div>');
              
            }
    
                 
                 
                        
                     }  
                });  
            
      });  
 });  
 
 
 </script>  
      
      
      
      
      
      
      
      <!-- End Footer -->
      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Vendor JS Files -->
      <script src="<?=base_url()?>aaassets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="<?=base_url()?>aaassets/vendor/aos/aos.js"></script>
      <script src="<?=base_url()?>aaassets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?=base_url()?>aaassets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?=base_url()?>aaassets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="<?=base_url()?>aaassets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?=base_url()?>aaassets/vendor/php-email-form/validate.js"></script>
      <!-- Template Main JS File -->
      <script src="<?=base_url()?>aaassets/js/main.js"></script>