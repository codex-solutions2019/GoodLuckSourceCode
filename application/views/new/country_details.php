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
          <li><?=$locations_details['il_country']?></li>
        </ol>
        <h2><?=$locations_details['il_country']?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
   <section id="portfolio-details" class="portfolio-details">
      <div class="container-fluid  p-3">

        <div class="row ">

          <div class="col-md-3">
              
                 <div class="card rounded">
                  <div class="card-header">
                      <h2>Contact Us</h2>
                  </div>
                  <div class="card-body p-2">
                        <div class="col-md-12" id='add_contect_alert'></div>
                  <form id="raise_query" methdo="post">
                      
                     <div class="form-group-row mt-2">
                        <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Name">
                     </div>
                    <div class="form-group-row mt-2">
                        <input type="number" class="form-control" id="contact_phone" name="contact_phone" placeholder="Phone">
                     </div>
                   <div class="form-group-row mt-2">
                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Email">
                     </div>
                     
                     
                     
                     <div class="form-group-row mt-2">
                         <select class="form-select " id="contact_destination" name="contact_destination"aria-label="Default select example">
                        <option selected hidden>Select Study Abroad Destination</option>
                        
                         <?php foreach($locations as $key => $row){?>
                          <option value="<?=$row['il_country']?>"><?=$row['il_country']?></option>
                         <?php }?>
                        
                     </select>
                     </div>
                     
                     
                     <div class="form-group-row mt-2">
                       <select class="form-select " id="contact_interest" name="contact_interest"aria-label="Default select example">
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
                        <div class="col-12 d-flex">
                            
                       <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                     </div>
                       
                     
                     
                  
                     <!--<select class="form-select mb-3" id="contact_year" name="contact_year"aria-label="Default select example">-->
                     <!--   <option selected hidden>Intake Year</option>-->
                     <!--   <option value="1">One</option>-->
                     <!--   <option value="2">Two</option>-->
                     <!--   <option value="3">Three</option>-->
                     <!--</select>-->
                     
                     
                          
               </div>
              
                  </form>
                  </div>
                  <br> <br> 
                     <h4>University Lists</h4>
                     <ul>
                         <?php foreach($universities as $row){ ?>
                                                  <li><i class="bx bx-chevron-right"></i> <a href="<?=$row['uni_details']?>"><?=$row['uni_name']?></a></li>
                                                  
                                                  <?php }?>
                                               
                                            </ul>
          </div>
   
          <div class="col-md-9">
            <?=$locations_details['il_description']?>
          </div>

        

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php include('parts/footer.php')?>
   </body>
</html>