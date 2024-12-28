 <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="<?=base_url()?>aassets/images/logo.png" alt="Logo">
                            </a>
                            <p class="mb-20">
Get a free consultation. Just leave your email below.
                            </p>
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i><?=$contact_details['footer_address']?></li>
                                    <li><a target="_blank" href="tel:<?=$contact_details['footer_phone']?>"><i class="far fa-phone"></i>+<?=$contact_details['footer_phone']?></a></li>
                                    <li><a target="_blank" href="mailto:<?=$contact_details['footer_email']?>"><i class="far fa-envelope"></i><span ><?=$contact_details['footer_email']?></span></a>                                        </li>
                                </ul>
                            </div>
                            <ul class="footer-social">
                                <li><a target="_blank" href="<?=$contact_details['footer_facebook']?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="<?=$contact_details['footer_instagram']?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="<?=$contact_details['footer_twitter']?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=91<?=$contact_details['footer_whatsapp']?>&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="<?=base_url()?>about"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="<?=base_url()?>faq"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="<?=base_url()?>terms"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="<?=base_url()?>privacy_policy"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="<?=base_url()?>services"><i class="fas fa-caret-right"></i> Our Services</a></li>
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Team Members</a></li>-->
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Latest Blog</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Services</h4>
                            <ul class="footer-list">
                                  <?php foreach($services as $key => $row){?>
                                <li><a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>"><i class="fas fa-caret-right"></i><?=$row['title']?></a></li>
                                <?php }?>
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Student Visa</a></li>-->
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Job Seeker Visa</a></li>-->
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Tourist Visa</a></li>-->
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Consular Closings</a></li>-->
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Transit Visa</a></li>-->
                                <!--<li><a href="#"><i class="fas fa-caret-right"></i> Migrate Visa</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Subscribe Our Newsletter To Get Latest Update And News And Stay Connected</p>
                                <div class="subscribe-form">
                                    <form id="create_newsletter" method="post">
                                        <input type="email" class="form-control"  id="nl_email" name="nl_email" placeholder="Your Email">
                                        <button class="theme-btn" type="submit">
Subscribe Now <i class="far fa-paper-plane"></i>
</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <a href="codexsolutions.in"></a>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="<?=base_url()?>"> Good Luck Immigration </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li><a href="<?=base_url()?>terms">Terms Of Services</a></li>
                            <li><a href="<?=base_url()?>privacy_policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>

<elevenlabs-convai class="aiCard" style="
left:32px!important;
right:auto!important;


" agent-id="NuftlSBIxVJCnKMY2Thc"></elevenlabs-convai>


<script src="https://elevenlabs.io/convai-widget/index.js" async type="text/javascript"></script>



    <!--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
    <!--<script src="<?=base_url()?>new_assets/js/jquery-3.6.0.min.js"></script>-->
    <script src="<?=base_url()?>new_assets/js/modernizr.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/jquery.appear.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/counter-up.js"></script>
    <script src="<?=base_url()?>new_assets/js/wow.min.js"></script>
    <script src="<?=base_url()?>new_assets/js/main.js"></script>
    
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HZ4YNN1RRV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HZ4YNN1RRV');
</script>
    
    
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
 
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/673067004304e3196adfc856/1icah4n5u';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

 
 

      
</body>

</html>