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
                <h2 class="breadcrumb-title">Terms & Condition</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?=base_url()?>"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Terms & Condition</li>
                </ul>
            </div>
        </div>


        <div class="pt-120 pb-120">
            <div class="container-fluid">
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
                                <div class="widget service-download">
                                    <h4 class="widget-title">Download</h4>
                                    <a href="#"><i class="far fa-file-pdf"></i> Download Brochure</a>
                                    <a href="#"><i class="far fa-file-alt"></i> Download Application</a>
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
                    <div class="col">
                        <div class="terms-content">
                            <h3>Terms & Condition</h3>
                            <p>
                                Aenean ullamcorper est est, ac bibendum ipsum tincidunt vehicula. Nulla faucibus vulputate lorem, vitae placerat felis blandit ut. Nam sem quam, euismod sit amet augue et, mollis congue nisi. Vestibulum fringilla lobortis nunc ac tincidunt. Cras nec convallis
                                quam. Maecenas non sem ut enim facilisis rhoncus. Sed odio ex, efficitur ac commodo sed, convallis vitae lectus. Aenean at urna ac tellus ullamcorper pretium. Aliquam erat volutpat. Aliquam sit amet tellus in tortor posuere
                                convallis quis nec tellus. Nulla eu mauris sit amet enim eleifend congue. Quisque aliquam, turpis quis elementum tempus, velit arcu dignissim dui, a vehicula lectus nisi non felis.
                            </p>
                        </div>
                        <div class="terms-content">
                            <h3>Collect Information</h3>
                            <p>
                                Donec ac pulvinar diam, ac mollis augue. Etiam interdum fringilla magna, at placerat libero malesuada sed. Proin tincidunt a sapien at facilisis. Cras nec lectus pretium, convallis tellus eu, placerat augue. Curabitur luctus odio efficitur elit volutpat,
                                quis venenatis tellus vestibulum. Nam ultrices massa id tellus commodo, at mollis elit mattis. Etiam eget ultrices lectus, at faucibus mauris. Integer at mauris ex. Vivamus interdum cursus mi quis venenatis. Sed pulvinar
                                efficitur quam quis congue. Ut vel ornare lorem. Vivamus mi mi, vestibulum nec eleifend eu, lobortis ac neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit augue dui, non rutrum enim ultrices vel.
                                Fusce mattis ullamcorper nisl, sit amet venenatis odio tincidunt eget.
                            </p>
                        </div>
                        <div class="terms-content">
                            <h3>Usage of Information</h3>
                            <p>
                                Phasellus commodo venenatis erat, et vestibulum mi fringilla in. Proin elit urna, condimentum ut elit id, imperdiet rutrum orci. Praesent vehicula velit at est rutrum lacinia. Nullam accumsan at tortor in ullamcorper. Proin semper sagittis nisl, vitae
                                finibus nisl maximus non. Cras dictum risus quis augue tempor egestas. Proin luctus fermentum nunc, eget pretium dolor tristique id.
                            </p>
                            <p>
                                Suspendisse hendrerit ex sit amet augue lobortis ullamcorper. Maecenas dignissim facilisis orci, non imperdiet sapien ornare at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Nam ultrices mi mauris, eget tempus massa ornare id. Aenean rhoncus vestibulum diam, ut dapibus dolor vehicula non. Proin rhoncus convallis commodo.
                            </p>
                        </div>
                        <div class="terms-content">
                            <h3>Security Of User Data</h3>
                            <p>Integer justo neque imperdiet vitae consequat in vehicula quis dolor orbi lorem leo volutpat a tristique :</p>
                            <ul class="terms-list ms-4">
                                <li>1. Ut scelerisque hendrerit venenatis</li>
                                <li>2. Proin fermentum lacus nec augue blandit placerat</li>
                                <li>3. Ut vestibulum elit justo suscipit sem ultricies</li>
                                <li>4. Integer fermentum vitae magna in condimentum</li>
                                <li>5. Aenean ultrices neque id pellentesque tincidunt</li>
                                <li>6. Donec ut vestibulum sem, in faucibus mauris.</li>
                            </ul>
                        </div>
                        <div class="terms-content">
                            <h3>Copyright and Security</h3>
                            <p>
                                Vestibulum bibendum metus quis purus sagittis ultricies. Vestibulum fringilla urna volutpat eros pharetra consectetur. Integer rutrum eu odio et pulvinar. Sed hendrerit pellentesque faucibus. In venenatis lacus sit amet vehicula efficitur. Suspendisse
                                pulvinar malesuada dui non mollis. Aliquam urna massa, rutrum vel luctus in, facilisis a turpis. Ut aliquet accumsan turpis, eget egestas sem pellentesque nec. Phasellus faucibus congue tempor. Mauris ac massa scelerisque
                                metus pulvinar feugiat in ut leo. Proin congue felis orci. Suspendisse consectetur nisl at faucibus venenatis. Quisque pretium rhoncus dui, porttitor varius mi iaculis nec.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
 
     <?php include('parts/footer.php')?>
