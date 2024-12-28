<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('parts/head.php')?>
</head>

<body>

 

   <?php include('parts/header.php')?>
  

    <main class="main">

        <div class="site-breadcrumb" style="background: url(<?=base_url()?>new_assets/img/breadcrumb/breadcrumb.jpg)">
            <div class="container-fluid">
                <h2 class="breadcrumb-title"><?=$service_details['title']?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?=base_url()?>"><i class="far fa-home"></i> Home</a></li>
                    <li class="active"><?=$service_details['title']?></li>
                </ul>
            </div>
        </div>


        <div class="service-single-area py-120">
            <div class="container-fluid">
                <div class="service-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">Services</h4>
                                    <div class="category-list">
                                        <?php foreach($services as $key => $row){?>
                                        <a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>"><i class="far fa-angle-double-right"></i><?=$row['title']?></a>
                                        
                                         <?php }?>
                                        <!--<a href="#"><i class="far fa-angle-double-right"></i>Student Visa</a>-->
                                        <!--<a href="#"><i class="far fa-angle-double-right"></i>Job Seeker Visa</a>-->
                                        <!--<a href="#"><i class="far fa-angle-double-right"></i>Tourist Visa</a>-->
                                        <!--<a href="#"><i class="far fa-angle-double-right"></i>Consular Closings</a>-->
                                        <!--<a href="#"><i class="far fa-angle-double-right"></i>Transit Visa</a>-->
                                        <!--<a href="#"><i class="far fa-angle-double-right"></i>Migrate Visa</a>-->
                                    </div>
                                </div>
                                <!--<div class="widget service-download">-->
                                <!--    <h4 class="widget-title">Download</h4>-->
                                <!--    <a href="#"><i class="far fa-file-pdf"></i> Download Brochure</a>-->
                                <!--    <a href="#"><i class="far fa-file-alt"></i> Download Application</a>-->
                                <!--</div>-->
                                <div class="service-quote">
                                    <div class="quote-content">
                                        <h1 class="mb-10">
                                            Get Free Consultation
                                        </h1>
                                        <div class="quote-form">
                                            <form method="post" id="raise_query">
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
                                                    <div class="form-group">
                                                        <button type="submit" class="theme-btn">Get Quote <i class="far fa-arrow-right"></i></button>
                                                    </div>
                                                   
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="service-details">
                                <!--<div class="service-details-img mb-30">-->
                                <!--    <img src="<?=base_url()?>new_assets/img/service/single.jpg" alt="thumb">-->
                                <!--</div>-->
                                <div class="service-details">
                                      <?=$service_details['service_details']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

     <?php include('parts/footer.php')?>