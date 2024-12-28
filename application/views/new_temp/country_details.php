<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('parts/head.php')?>
</head>

<body>

 

   <?php include('parts/header.php')?>
  

    <main class="main">

        <div class="site-breadcrumb" style="background: url(<?=base_url()?>new_assets/img/breadcrumb/breadcrumb.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title"><?=$locations_details['il_country']?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?=base_url()?>"><i class="far fa-home"></i> Home</a></li>
                    <li class="active"><?=$locations_details['il_country']?></li>
                </ul>
            </div>
        </div>


        <div class="service-single-area py-120">
            <div class="container-fluid">
                <div class="service-single-wrapper">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">All Country</h4>
                                    <div class="category-list">
                                        
                                       <?php foreach($locations as $key => $row){?>
                                        <a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>"><i class="far fa-angle-double-right"></i><?=$row['il_country']?></a>
                                        <?php }?>
                                        <!--<a href="united-states.html"><i class="far fa-angle-double-right"></i>United States</a>-->
                                        <!--<a href="canada.html"><i class="far fa-angle-double-right"></i>Canada</a>-->
                                        <!--<a href="new-zealand.html"><i class="far fa-angle-double-right"></i>New Zealand</a>-->
                                        <!--<a href="singapore.html"><i class="far fa-angle-double-right"></i>Singapore</a>-->
                                        <!--<a href="united-kingdom.html"><i class="far fa-angle-double-right"></i>United Kingdom</a>-->
                                    </div>
                                </div>
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
                        <div class="col-md-5">
                            <!--<div class="service-details">-->
                               
                                <!--<div class="service-details">-->
                                    <?=$locations_details['il_description']?>
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                         <div class="col-md-4">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">University List</h4>
                                    <div class="category-list">
                                        
                                       <?php foreach($universities as $row){ ?>
                                        <a href="<?=$row['uni_details']?>"><i class="far fa-angle-double-right"></i><?=$row['uni_name']?></a>
                                        <?php }?>
                                        <!--<a href="united-states.html"><i class="far fa-angle-double-right"></i>United States</a>-->
                                        <!--<a href="canada.html"><i class="far fa-angle-double-right"></i>Canada</a>-->
                                        <!--<a href="new-zealand.html"><i class="far fa-angle-double-right"></i>New Zealand</a>-->
                                        <!--<a href="singapore.html"><i class="far fa-angle-double-right"></i>Singapore</a>-->
                                        <!--<a href="united-kingdom.html"><i class="far fa-angle-double-right"></i>United Kingdom</a>-->
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
 <?php include('parts/footer.php')?>