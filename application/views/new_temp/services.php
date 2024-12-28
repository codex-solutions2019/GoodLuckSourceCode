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
                <h2 class="breadcrumb-title">Services</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="<?=base_url()?>"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>


        <div class="service-area bg py-120">
            <div class="container">
                <div class="row">
                     <?php foreach($services as $key => $row){?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/01.jpg" alt="">
                            </div>
                            <div class="service-icon">
                                <i class="flaticon-technology"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">
                                    <a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>"><?=$row['title']?></a>
                                </h4>
                                <p class="service-text">
                                  <?=$row['subtitle']?>
                                </p>
                                <div class="service-arrow">
                                    <a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php }?>
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="service-item">-->
                    <!--        <div class="service-img">-->
                    <!--            <img src="assets/img/service/02.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="service-icon">-->
                    <!--            <i class="flaticon-people-1"></i>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--            <h4 class="service-title">-->
                    <!--                <a href="#">Student Visa</a>-->
                    <!--            </h4>-->
                    <!--            <p class="service-text">-->
                    <!--                There are many variations of passages available but the majority have suffered to the alteration in some form by injected.-->
                    <!--            </p>-->
                    <!--            <div class="service-arrow">-->
                    <!--                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="service-item">-->
                    <!--        <div class="service-img">-->
                    <!--            <img src="assets/img/service/03.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="service-icon">-->
                    <!--            <i class="flaticon-electronics"></i>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--            <h4 class="service-title">-->
                    <!--                <a href="#">Job Seeker Visa</a>-->
                    <!--            </h4>-->
                    <!--            <p class="service-text">-->
                    <!--                There are many variations of passages available but the majority have suffered to the alteration in some form by injected.-->
                    <!--            </p>-->
                    <!--            <div class="service-arrow">-->
                    <!--                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="service-item">-->
                    <!--        <div class="service-img">-->
                    <!--            <img src="assets/img/service/04.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="service-icon">-->
                    <!--            <i class="flaticon-profession"></i>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--            <h4 class="service-title">-->
                    <!--                <a href="#">Tourist Visa</a>-->
                    <!--            </h4>-->
                    <!--            <p class="service-text">-->
                    <!--                There are many variations of passages available but the majority have suffered to the alteration in some form by injected.-->
                    <!--            </p>-->
                    <!--            <div class="service-arrow">-->
                    <!--                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="service-item">-->
                    <!--        <div class="service-img">-->
                    <!--            <img src="assets/img/service/05.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="service-icon">-->
                    <!--            <i class="flaticon-house"></i>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--            <h4 class="service-title">-->
                    <!--                <a href="#">Migrate Visa</a>-->
                    <!--            </h4>-->
                    <!--            <p class="service-text">-->
                    <!--                There are many variations of passages available but the majority have suffered to the alteration in some form by injected.-->
                    <!--            </p>-->
                    <!--            <div class="service-arrow">-->
                    <!--                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="service-item">-->
                    <!--        <div class="service-img">-->
                    <!--            <img src="assets/img/service/06.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="service-icon">-->
                    <!--            <i class="flaticon-people-4"></i>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--            <h4 class="service-title">-->
                    <!--                <a href="#">Transit Visa</a>-->
                    <!--            </h4>-->
                    <!--            <p class="service-text">-->
                    <!--                There are many variations of passages available but the majority have suffered to the alteration in some form by injected.-->
                    <!--            </p>-->
                    <!--            <div class="service-arrow">-->
                    <!--                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

    </main>

      <?php include('parts/footer.php')?>