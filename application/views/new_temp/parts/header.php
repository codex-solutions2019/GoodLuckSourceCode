<div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>

  <header class="header">

        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="#"><i class="far fa-map-marker-alt"></i><?=$contact_details['footer_address']?></a>
                                </li>
                                <li><a href="tel:+<?=$contact_details['footer_phone']?>"><i class="far fa-phone"></i>+<?=$contact_details['footer_phone']?></a></li>
                                <li><a href="mailto:<?=$contact_details['footer_email']?>"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="a7cec9c1c8e7c2dfc6cad7cbc289c4c8ca"><?=$contact_details['footer_email']?></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <a href="<?=$contact_details['footer_facebook']?>"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?=$contact_details['footer_twitter']?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?=$contact_details['footer_instagram']?>"><i class="fab fa-instagram"></i></a>
                    
                            <a href="https://api.whatsapp.com/send/?phone=91<?=$contact_details['footer_whatsapp']?>&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                            
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
<img style="height :100px!important;width:auto!important; " src="<?=base_url()?>aassets/images/logo.png" alt="logo">
</a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
</button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="<?=base_url()?>" >Home</a>
                                <!--<ul class="dropdown-menu fade-up">-->
                                <!--    <li><a class="dropdown-item" href="index.html">Home Page 01</a></li>-->
                                <!--    <li><a class="dropdown-item" href="index-2.html">Home Page 02</a></li>-->
                                <!--    <li><a class="dropdown-item" href="index-3.html">Home Page 03</a></li>-->
                                <!--</ul>-->
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blogs</a>
                                <ul class="dropdown-menu fade-up">
                                    
                                 
                                    
                                    <li><a class="dropdown-item" style="overflow" href="">How to get schengen study visa or schengen tourist visa for European Countries </a></li>
                                    <!--<li><a class="dropdown-item" href="united-states.html">United States</a></li>-->
                                    <!--<li><a class="dropdown-item" href="united-kingdom.html">United Kingdom</a></li>-->
                                    <!--<li><a class="dropdown-item" href="canada.html">Canada</a></li>-->
                                    <!--<li><a class="dropdown-item" href="singapore.html">Singapore</a></li>-->
                                    <!--<li><a class="dropdown-item" href="new-zealand.html">New Zealand</a></li>-->
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?=base_url()?>about">About</a>
                                <!--<ul class="dropdown-menu fade-up">-->
                                <!--    <li><a class="dropdown-item" href="coaching.html">All Coaching</a></li>-->
                                <!--    <li><a class="dropdown-item" href="ielts-coaching.html">IELTS Coaching</a></li>-->
                                <!--    <li><a class="dropdown-item" href="toefl.html">TOEFL</a></li>-->
                                <!--    <li><a class="dropdown-item" href="pte-coaching.html">PTE Coaching</a></li>-->
                                <!--    <li><a class="dropdown-item" href="graduate-re-exam.html">Graduate Re-Exam</a></li>-->
                                <!--    <li><a class="dropdown-item" href="management-test.html">Management Test</a></li>-->
                                <!--    <li><a class="dropdown-item" href="scholastic-apti.html">Scholastic Apti</a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?=base_url()?>gallery">Gallery</a>
                              
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?=base_url()?>services">Services</a>
                              
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Country</a>
                                <ul class="dropdown-menu fade-up">
                                    
                                       <?php foreach($locations as $key => $row){?>
                        <!--<li><a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>"><?=$row['il_country']?></a></li>-->
                        <li><a class="dropdown-item" href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>"><?=$row['il_country']?></a></li>
                         <?php }?>
                                    
                                    
                                    <!--<li><a class="dropdown-item" href="australia.html">Australia</a></li>-->
                                    <!--<li><a class="dropdown-item" href="united-states.html">United States</a></li>-->
                                    <!--<li><a class="dropdown-item" href="united-kingdom.html">United Kingdom</a></li>-->
                                    <!--<li><a class="dropdown-item" href="canada.html">Canada</a></li>-->
                                    <!--<li><a class="dropdown-item" href="singapore.html">Singapore</a></li>-->
                                    <!--<li><a class="dropdown-item" href="new-zealand.html">New Zealand</a></li>-->
                                </ul>
                            </li>
                            <!--<li class="nav-item dropdown">-->
                            <!--    <a class="nav-link " href="<?=base_url()?>universites" >University</a>-->
                                <!--<ul class="dropdown-menu fade-up">-->
                                <!--    <li><a class="dropdown-item" href="about.html">About Us</a></li>-->
                                <!--    <li><a class="dropdown-item" href="team.html">Our Team</a></li>-->
                                <!--    <li><a class="dropdown-item" href="service.html">Services</a></li>-->
                                <!--    <li><a class="dropdown-item" href="service-single.html">Service Single</a></li>-->
                                <!--    <li><a class="dropdown-item" href="faq.html">Faq</a></li>-->
                                <!--    <li><a class="dropdown-item" href="login.html">Login</a></li>-->
                                <!--    <li><a class="dropdown-item" href="register.html">Register</a></li>-->
                                <!--    <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>-->
                                <!--    <li><a class="dropdown-item" href="404.html">404 Error</a></li>-->
                                <!--    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>-->
                                <!--    <li><a class="dropdown-item" href="terms.html">Terms Of Service</a></li>-->
                                <!--    <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>-->
                                <!--</ul>-->
                            <!--</li>-->
                            <!--<li class="nav-item dropdown">-->
                            <!--    <a class="nav-link " href="<?=base_url()?>contact_us" >Contact Us</a>-->
                                <!--<ul class="dropdown-menu fade-up">-->
                                <!--    <li><a class="dropdown-item" href="blog.html">Blog</a></li>-->
                                <!--    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>-->
                                <!--</ul>-->
                            <!--</li>-->
                            <!--<li class="nav-item"><a class="nav-link" href="<?=base_url();?>privacy_policy">Privacy Policy</a></li>-->
                            
                        </ul>
                        <div class="header-nav-right">
                            <!--<div class="header-nav-search">-->
                            <!--    <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>-->
                            <!--</div>-->
                            <div class="header-btn">
                                <a href="<?=base_url()?>contact_us" class="theme-btn">Contact Us<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>