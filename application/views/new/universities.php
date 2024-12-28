<!DOCTYPE html>
<html lang="en">
   <head>
     <?php include('parts/head.php')?>
   </head>
<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
         <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/website/Conquest_Immigration_Service-removebg-preview.png"  width="100%"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="<?=base_url()?>aaassets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
               <ul>
                  <li><a class="nav-link scrollto active" href="<?=base_url()?>">Home</a></li>
                  <li><a class="nav-link scrollto" href="<?=base_url()?>#about">About</a></li>
                  <li><a class="nav-link scrollto" href="<?=base_url()?>#services">Services</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?=base_url()?>">Home</a></li>
          <li>Universities</li>
        </ol>
        <h2>Universities</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    
     <section id="#" class="university">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
      <h2>Universities</h2>
      <p>Explore and choose any Top World Universities and Colleges</p>
      </div>
      <div class="row">
          
            <?php foreach($locations as $key => $row){?>
      <div class="col-md-3  mt-4" data-aos="zoom-in" data-aos-delay="<?=round($key*100)?>" >
      <a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>">
      <div class="icon-box">
      <div class="icon"><i class="bx bxl-dribbble"></i></div>
      <h4><a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>"><?=$row['il_country']?></a></h4>
      </div>
      </a>
      </div>
      <?php }?>
      
     
      </div>
      </div>
      </section>
  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php include('parts/footer.php')?>
   </body>
</html>