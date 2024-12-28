<!DOCTYPE html>
<html lang="en">
   <head>
     <?php include('parts/head.php')?>
   </head>
   <body>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Raise Your Query</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="col-md-12" id='add_contect_alert'></div>
                  <form id="raise_query" methdo="post">
                     <div class="mb-3">
                        <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Name">
                     </div>
                     <div class="mb-3">
                        <input type="number" class="form-control" id="contact_phone" name="contact_phone" placeholder="Phone">
                     </div>
                     <div class="mb-3">
                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Email">
                     </div>
                     <select class="form-select mb-3" id="contact_destination" name="contact_destination"aria-label="Default select example">
                        <option selected hidden>Select Study Abroad Destination</option>
                        
                         <?php foreach($locations as $key => $row){?>
                          <option value="<?=$row['il_country']?>"><?=$row['il_country']?></option>
                         <?php }?>
                        
                     </select>
                       <select class="form-select mb-3" id="contact_interest" name="contact_interest"aria-label="Default select example">
                        <option selected hidden>Area of interest</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Diploma">Diploma</option>
                         <option value="Certificate">Certificate</option>
                     </select>
                     
                     
                    <input type="number" class="form-control" id="contact_year" name="contact_year" placeholder="Intake Year">
                     <!--<select class="form-select mb-3" id="contact_year" name="contact_year"aria-label="Default select example">-->
                     <!--   <option selected hidden>Intake Year</option>-->
                     <!--   <option value="1">One</option>-->
                     <!--   <option value="2">Two</option>-->
                     <!--   <option value="3">Three</option>-->
                     <!--</select>-->
                     
                     
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
                  </form>
            </div>
            
         </div>
      </div>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">
         <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/website/Conquest_Immigration_Service-removebg-preview.png"  width="100%"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="<?=base_url()?>aaassets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
               <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#services">Services</a></li>
                  <li class="dropdown">
                     <a href="#"><span>Countries</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         
                          <?php foreach($locations as $key => $row){?>
                        <li><a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>"><?=$row['il_country']?></a></li>
                         <?php }?>
                     </ul>
                  </li>
                  <li><a class="nav-link scrollto " href="<?=base_url()?>universities">Universities</a></li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  <li><a class="nav-link scrollto" href="<?=base_url();?>privacy_policy">Privacy-Policy</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
         </div>
      </header>
      <!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero">
         <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide 1 -->
               
               <?php foreach($slider as $row){?>
               <div class="carousel-item active" style="background-image: url(<?=$row['il_image']?>)">
                  <div class="carousel-container">
                     <div class="container">
                        
                          
                        <h2 class="animate__animated animate__fadeInDown">Study In<span> <?=$row['il_country']?></span></h2>
                        <!--<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>-->
                        <button type="button" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Raise Your Query</a>
                     </div>
                  </div>
               </div>
               <?php }?>
               
               <!-- Slide 2 -->
               <!--<div class="carousel-item" style="background-image: url(<?=base_url()?>aaassets/img/slider/zew_zealand.jpg)">-->
               <!--<div class="carousel-container">-->
               <!--<div class="container">-->
               <!--<h2 class="animate__animated animate__fadeInDown">Study In<span> New Zealand</span></h2>-->
               <!--<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>-->
               <!--<button type="button" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">  Raise Your Query</a>-->
               <!--</div>-->
               <!--</div>-->
               <!--</div>-->
               <!-- Slide 3 -->
               <!--<div class="carousel-item" style="background-image: url(<?=base_url()?>aaassets/img/slider/uk.jpg)">-->
               <!--<div class="carousel-container">-->
               <!--<div class="container">-->
               <!--<h2 class="animate__animated animate__fadeInDown">Study In<span> United Kingdom</span></h2>-->
               <!--<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>-->
               <!--<button type="button" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">  Raise Your Query</a>-->
               <!--</div>-->
               <!--</div>-->
               <!--</div>-->
               <!-- Slide 4 -->
               <!--<div class="carousel-item" style="background-image: url(<?=base_url()?>aaassets/img/slider/australlia.jpg)">-->
               <!--<div class="carousel-container">-->
               <!--<div class="container">-->
               <!--<h2 class="animate__animated animate__fadeInDown">Study In<span> Australia</span></h2>-->
               <!--<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>-->
               <!--<button type="button" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">  Raise Your Query</a>-->
               <!--</div>-->
               <!--</div>-->
               <!--</div>-->
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
            </a>
         </div>
      </section>
      <!-- End Hero -->
      <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>About Us</h2>
      <p>WELCOME TO Conquest Immigration Service</p>
      </div>
      <div class="row content">
      <div class="col-lg-12">
      <p>
      BEST OVERSEAS EDUCATION CONSULTANTS 
      </p>
      <ul>
      <li><i class="fa-solid fa-circle-check"></i> Conquest Immigration Service is known to provide one of the best educational consultancy services in India and for other countries like UK, Australia, Europe, Canada etc.. Our team is knowledgeable and takes meticulous care to guide the students towards the right future. Our team will analyse the students strengths and weaknesses along with their financial background before presenting a career option to them. Conquest Immigration Service follows a student centric approach by providing individual attention to every student. Because of this, Conquest Immigration Service is able to achieve good VISA and admission success rates thus making us one of the best educational consultants in India
      </li>
      <li><i class="fa-solid fa-circle-check"></i>
      This makes us unique and different from the other study abroad consultants In Delhi. We have developed our own systematic procedures through which we ensure that every application is checked in detail and verified that they are present as per the requirements of that university or country before proceeding ahead with admission or processing respectively. We have good partnerships with many reputed foreign universities present across the world where students enroll for pursuing their desired course every year. As one of the best overseas education consultants, we are on a mission to help Indian students achieve their goals of studying in any foreign country like the USA, UK, Canada, Australia, Newzealand, or any other country of their choice.</li>
      <!--<li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>-->
      <!--<li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>-->
      </ul>
      </div>
      <!--<div class="col-lg-6 pt-4 pt-lg-0">-->
      <!--  <p>-->
      <!--    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
      <!--    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
      <!--    culpa qui officia deserunt mollit anim id est laborum.-->
      <!--  </p>-->
      <!--  <a href="#" class="btn-learn-more">Learn More</a>-->
      <!--</div>-->
      </div>
      </div>
      </section><!-- End About Section -->
      <!-- ======= Counts Section ======= -->
      <!--<section id="counts" class="counts">-->
      <!--<div class="container" data-aos="fade-up">-->
      <!--<div class="row no-gutters">-->
      <!--<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">-->
      <!--<div class="count-box">-->
      <!--<i class="bi bi-emoji-smile"></i>-->
      <!--<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>-->
      <!--<p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>-->
      <!--<a href="#">Find out more &raquo;</a>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">-->
      <!--<div class="count-box">-->
      <!--<i class="bi bi-journal-richtext"></i>-->
      <!--<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>-->
      <!--<p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>-->
      <!--<a href="#">Find out more &raquo;</a>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">-->
      <!--<div class="count-box">-->
      <!--<i class="bi bi-headset"></i>-->
      <!--<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>-->
      <!--<p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>-->
      <!--<a href="#">Find out more &raquo;</a>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">-->
      <!--<div class="count-box">-->
      <!--<i class="bi bi-people"></i>-->
      <!--<span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>-->
      <!--<p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>-->
      <!--<a href="#">Find out more &raquo;</a>-->
      <!--</div>-->
      <!--</div>-->
      <!--</div>-->
      <!--</div>-->
      <!--</section>-->
      
      
      <!-- End Counts Section -->
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>Services</h2>
      <p>Check our Services</p>
      </div>
      <div class="row">
          
            <?php foreach($services as $key => $row){?>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="<?=round($key*100)?>" >
          
          <a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>">
              <div>
      <div class="icon-box">
      <div class="icon"><i class="bx bxl-dribbble"></i></div>
      <h4><a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>"><?=$row['title']?></a></h4>
      <p><?=$row['subtitle']?></p>
      </div>
      </div>
      </a>
      </div>
      <?php }?>
      
      
      <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">-->
      <!--<div class="icon-box">-->
      <!--<div class="icon"><i class="bx bx-file"></i></div>-->
      <!--<h4><a href="">Course Selection</a></h4>-->
      <!--<p>We assist in identifying what are the industry trends and guide you in subject selection based on parameters of skills required in the industry. We fulfill their requirement by providing them number of options available. </p>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">-->
      <!--<div class="icon-box">-->
      <!--<div class="icon"><i class="bx bx-tachometer"></i></div>-->
      <!--<h4><a href="">Admission Guidance</a></h4>-->
      <!--<p>We give special attention to your application whether it is paper based or online. We see to it that your required documents are thoroughly compiled, attested, highlighting the areas essential for a well presented error free</p>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">-->
      <!--<div class="icon-box">-->
      <!--<div class="icon"><i class="bx bx-world"></i></div>-->
      <!--<h4><a href="">Exam & Coaching</a></h4>-->
      <!--<p>Conquest Immigration Service has been widely acclaimed for its quality Test Coaching and teaching method. Be it be IELTS, TOEFL, SAT or GRE.</p>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">-->
      <!--<div class="icon-box">-->
      <!--<div class="icon"><i class="bx bx-slideshow"></i></div>-->
      <!--<h4><a href="">Test Preperation</a></h4>-->
      <!--<p>We provide the best training for IELTS, TOEFL,SAT and ACT. Our batch size is small and our faculty ensures that the students perform  the best </p>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">-->
      <!--<div class="icon-box">-->
      <!--<div class="icon"><i class="bx bx-arch"></i></div>-->
      <!--<h4><a href="">Visa Assistance</a></h4>-->
      <!--<p>As an International student it is very likely that you will require a valid visa before commencing study in most of the countries across world.</p>-->
      <!--</div>-->
      <!--</div>-->
      </div>
      </div>
      </section><!-- End Services Section -->
      <!-- ======= Why Us Section ======= -->
      <!--<section id="why-us" class="why-us section-bg">-->
      <!--  <div class="container-fluid" data-aos="fade-up">-->
      <!--    <div class="row">-->
      <!--      <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?=base_url()?>aaassets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="100">-->
      <!--        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
      <!--      </div>-->
      <!--      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">-->
      <!--        <div class="content">-->
      <!--          <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto</strong></h3>-->
      <!--          <p>-->
      <!--            t-->
      <!--          </p>-->
      <!--        </div>-->
      <!--        <div class="accordion-list">-->
      <!--          <ul>-->
      <!--            <li>-->
      <!--              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
      <!--              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">-->
      <!--                <p>-->
      <!--                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.-->
      <!--                </p>-->
      <!--              </div>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
      <!--              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">-->
      <!--                <p>-->
      <!--                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
      <!--                </p>-->
      <!--              </div>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>-->
      <!--              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">-->
      <!--                <p>-->
      <!--                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis-->
      <!--                </p>-->
      <!--              </div>-->
      <!--            </li>-->
      <!--          </ul>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->
      <!-- End Why Us Section -->
      <!-- ======= Testimonials Section ======= -->
      <section id="portfolio" class="portfolio">
   <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-title">
         <h2>Portfolio</h2>
         <p>Check our Portfolio</p>
      </div>
      <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
         <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
               <li data-filter="*" class="filter-active">All</li>
                <?php foreach($locations as $key => $row){?>
               <li data-filter=".filter-<?=$row['il_id']?>" class=""><?=$row['il_country']?></li>
                  <?php  }?>
               <!--<li data-filter=".filter-card" class="">Card</li>-->
               <!--<li data-filter=".filter-web" class="">Web</li>-->
            </ul>
         </div>
      </div>
      <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 3042px;">
            <?php foreach($portfolio as $key => $row){?>
         <div class="col-lg-4 col-md-6 portfolio-item filter-<?=$row['port_country']?>" style="position: absolute; ">
            <img src="<?=$row['port_image']?>" class="img-fluid" alt="">
            <div class="portfolio-info">
               <!--<h4>App 1</h4>-->
               <!--<p>App</p>-->
               <a href="<?=$row['port_image']?>"
                 class="portfolio-lightbox">
                   <i class="fas fa-eye"></i>
                   <!--<i class="bx bx-plus"></i>-->
                   </a>
            </div>
         </div>
          <?php  }?>
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 0px; top: 338px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>Web 3</h4>-->
         <!--      <p>Web</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 676px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>App 2</h4>-->
         <!--      <p>App</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 1014px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>Card 2</h4>-->
         <!--      <p>Card</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 0px; top: 1352px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>Web 2</h4>-->
         <!--      <p>Web</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 1690px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>App 3</h4>-->
         <!--      <p>App</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 2028px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>Card 1</h4>-->
         <!--      <p>Card</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 2366px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>Card 3</h4>-->
         <!--      <p>Card</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 0px; top: 2704px;">-->
         <!--   <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">-->
         <!--   <div class="portfolio-info">-->
         <!--      <h4>Web 3</h4>-->
         <!--      <p>Web</p>-->
         <!--      <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
   </div>
</section>
      <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>Why Choose Us</h2>
      <p>Why Choose Us</p>
      </div>
      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
          
          <?php foreach($why_choose_us as $row){?>
      <div class="swiper-slide">
      <div class="testimonial-wrap">
      <div class="testimonial-item">
      <img src="<?=base_url()?>aaassets/img/badge_check.png" class="testimonial-img" alt="">
      <h3><?=$row['wcs_heading']?></h3>
      <!--<h4>Ceo &amp; Founder</h4>-->
      <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      <?=$row['wcs_subheading']?>
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
      </div>
      </div>
      </div><!-- End testimonial item -->
       <?php }?>
      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
      </section><!-- End Testimonials Section -->
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
      <div class="text-center">
      <h3>Call To Action</h3>
      <p> Get a free consultation. Just leave your email Or Call Us.</p>
      <!--<a class="cta-btn" href="#">Call To Action</a>-->
      <a class="cta-btn align-middle" href="mailto:<?=$contact_details['footer_email']?>">Email</a>
      <a class="cta-btn align-middle" href="tel:+91<?=$contact_details['footer_phone']?>">Call To Action</a>
      </div>
      </div>
      </section><!-- End Cta Section -->
      <!-- ======= Portfolio Section ======= -->
      
      
      
      

      <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>F.A.Q</h2>
      <p>Frequently Asked Questions</p>
      </div>
      <div class="row">
      <div class="col-lg-7 d-flex flex-column ">
      <div class="accordion accordion-flush " id="faqlist">
          
          <?php foreach($faq as $key =>$row){?>
      <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="<?=round($key*100)?>">
        <h3 class="accordion-header"> 
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-contentt-<?=$key?>">
                <i class="bi bi-question-circle question-icon"></i> <?=$row['faq_que']?>
            </button>
        </h3>
        <div id="faq-contentt-<?=$key?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body"> 
              <?=$row['faq_ans']?>
            </div>
        </div>
      </div>
      <?php }?>
     
      </div>
      </div>
      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" >
          <img src="<?=base_url()?>assets/img/website/about.jpg" width="100%">
      </div>
      </div>
      </div>
      </section><!-- End Frequently Asked Questions Section -->
      <!-- ======= Contact Section ======= -->
      
      
      
      <?php include('parts/footer.php')?>
   </body>
</html>