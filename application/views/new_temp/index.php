<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('parts/head.php')?>
</head>

<body>

    

   <?php include('parts/header.php')?>
  

    <main class="main">

        <div class="hero-section hero-slider owl-carousel owl-theme">
             <?php foreach($slider as $row){?>
            <div class="hero-single" style="background-image: url(<?=$row['il_image']?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">Best Visa Consulting Agency</h6>
                                <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                                    We Are Trusted  <span>Immigration</span> Agency
                                    <br>
                                    Study In <span><?=$row['il_country']?></span> 
                                </h1>
                                <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                    Every country has their own different cultures, different sets of understandings and various other impactful scenarios that vary from a nation to another. Thus, the education provided by different nations is different as well. Despite having these differences in their education system, their sole purpose is somewhat similar. It depends on a human mind how well it adapts and perceives the way of education he/she’s been taught. The students who choose to go overseas for their higher education have a different mindset and very often tend to adopt a practical approach towards learning
                                </p>
                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                    <a href="<?=base_url()?>contact_us" class="theme-btn">Contact Us<i class="far fa-arrow-right"></i></a>
                                    <a href="<?=base_url()?>about" class="theme-btn theme-btn2">About Us<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php }?>
            <!--<div class="hero-single" style="background-image: url(<?=base_url()?>new_assets/img/slider/slider-2.jpg)">-->
            <!--    <div class="container">-->
            <!--        <div class="row align-items-center">-->
            <!--            <div class="col-md-7 col-lg-7">-->
            <!--                <div class="hero-content">-->
            <!--                    <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">Best Visa Consulting Agency</h6>-->
            <!--                    <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">-->
            <!--                        We Are Trusted Visa And <span>Immigration</span> Agency-->
            <!--                    </h1>-->
            <!--                    <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">-->
            <!--                        There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.-->
            <!--                    </p>-->
            <!--                    <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">-->
            <!--                        <a href="contact.html" class="theme-btn">Contact Us<i class="far fa-arrow-right"></i></a>-->
            <!--                        <a href="<?=base_url()?>" class="theme-btn theme-btn2">About Us<i class="far fa-arrow-right"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="hero-single" style="background-image: url(<?=base_url()?>new_assets/img/slider/slider-3.jpg)">-->
            <!--    <div class="container">-->
            <!--        <div class="row align-items-center">-->
            <!--            <div class="col-md-7 col-lg-7">-->
            <!--                <div class="hero-content">-->
            <!--                    <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">Best Visa Consulting Agency</h6>-->
            <!--                    <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">-->
            <!--                        We Are Trusted Visa And <span>Immigration</span> Agency-->
            <!--                    </h1>-->
            <!--                    <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">-->
            <!--                        There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.-->
            <!--                    </p>-->
            <!--                    <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">-->
            <!--                        <a href="contact.html" class="theme-btn">Contact Us<i class="far fa-arrow-right"></i></a>-->
            <!--                        <a href="<?=base_url()?>" class="theme-btn theme-btn2">About Us<i class="far fa-arrow-right"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>


        <div class="feature-area">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Services</span>
                            <h2 class="site-title">What We <span>Offers</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <?php foreach($services as $key => $row){?>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-technology"></i>
                            </div>
                            <div class="feature-content">
                                <h4><a href="<?=base_url()?>Services/<?=str_replace(" ","-",$row['title'])?>"><?=$row['title']?></a></h4>
                                <p><?=$row['subtitle']?>.</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <?php }?>
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="feature-item active">-->
                    <!--        <div class="feature-icon">-->
                    <!--            <i class="flaticon-education"></i>-->
                    <!--        </div>-->
                    <!--        <div class="feature-content">-->
                    <!--            <h4><a href="#">Visa Information</a></h4>-->
                    <!--            <p>There are many variations of the passages available but the majority have suffered to the alteration in some form injected humour.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="feature-item">-->
                    <!--        <div class="feature-icon">-->
                    <!--            <i class="flaticon-education-1"></i>-->
                    <!--        </div>-->
                    <!--        <div class="feature-content">-->
                    <!--            <h4><a href="#">Immigration Resources</a></h4>-->
                    <!--            <p>There are many variations of the passages available but the majority have suffered to the alteration in some form injected humour.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>


        <div class="about-area ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img src="<?=base_url()?>new_assets/img/about/01.jpg" alt="">
                            </div>
                            <div class="about-experience">
                                <h1>25 <span>+</span></h1>
                                <span class="about-experience-text">Years Experience</span>
                            </div>
                            <div class="about-shape">
                                <img src="<?=base_url()?>new_assets/img/about/shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">About Us</span>
                                <h2 class="site-title">We Provide Immigration <span>And Visa</span> Services</h2>
                            </div>
                            <p class="about-text">
                                Conquest Immigrations is committed to providing international students and scholars with the highest level of expertise in advising and immigration services.
We are the team of experts experienced in offering permanent immigration and visa services by taking care of all aspects involved in the processes. Our services are available for applying for residential and student visa. Our customers have been able to immigrate abroad and are successfully settled abroad.</p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>We are always available through various channels like email, phone, etc and provide the responsibility</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>We provide all the services required for helping you</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p> We have good partnerships with many reputed foreign universities present across the world</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?=base_url()?>" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="service-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Visa Type</span>
                            <h2 class="site-title">What We <span>Offers</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                       
                    <?php foreach($visa_type as $row){ ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?=$row['vt_image']?>" alt="">
                            </div>
                            <div class="service-icon">
                                <i class="flaticon-technology"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">
                                    <a href="#"><?=$row['vt_heading']?></a>
                                </h4>
                                <p class="service-text">
                                   <?=$row['vt_subheading']?>
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php }?>
                    <!--<div class="col-md-6 col-lg-4">-->
                    <!--    <div class="service-item">-->
                    <!--        <div class="service-img">-->
                    <!--            <img src="<?=base_url()?>new_assets/img/service/02.jpg" alt="">-->
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
                    <!--            <img src="<?=base_url()?>new_assets/img/service/03.jpg" alt="">-->
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
                    <!--            <img src="<?=base_url()?>new_assets/img/service/04.jpg" alt="">-->
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
                    <!--            <img src="<?=base_url()?>new_assets/img/service/05.jpg" alt="">-->
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
                    <!--            <img src="<?=base_url()?>new_assets/img/service/06.jpg" alt="">-->
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


        <div class="skill-area py-120">
            <div class="container">
                <div class="skill-wrapper">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="skill-left">
                                <div class="skill-img">
                                    <img src="<?=base_url()?>new_assets/img/skill/01.jpg" alt="thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="skill-right">
                                <span class="site-title-tagline">Our Skills</span>
                                <h2 class="site-title">We Offers You The <span>Best Immigration</span> Service</h2>
                                <p class="skill-details">
                                   We provide support, advice and legal help to people who want to go to abroad for study, work, travel or business purpose, or immigrate to abroad and obtain citizenship.
</br>1. Knowledge of Laws : Our experienced immigration consultants know all the rules, and regulations of the countries and their legal documentation needs.</br></br>
2. Excellent communicators : An immigration consultant’s job consists of explaining the immigration processes, documentation and other legal formalities. Our consultants have good speaking and listening skills.</br></br>

3. Team player : Being a consultant is quite complicated, as you have to do counseling, make people aware of the documents, and many more things. Moreover, this being a lengthy process, you need to communicate with different team members regarding the immigration case of your client. Having a good conversation with other fellow members our consultants give you the advantage of communication with different team members regarding your immigration case .</br></br>

4. Educational background : Our immigration counselor hold a formal degree and a profound knowledge similar to this position. And provides the best counseling to the students who want to study abroad.</br></br>

5. Bi-lingual : Being a conquest immigrations consultant, our consultants know at least 2-3 languages. Other than English, talking in the language in which the client feels comfortable throws a positive impact. This is because people from different regions can feel more connected when you talk in the same language. 
                                </p>
                                <div class="skills-section">
                                      <?php foreach($skills as $row){ ?>
                                    <div class="progress-box">
                                        <h5><?=$row['os_heading']?><span class="pull-right"><?=$row['os_precentage']?>%</span></h5>
                                        <div class="progress" data-value="<?=$row['os_precentage']?>">
                                            <div class="progress-bar" role="progressbar"></div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <!--<div class="progress-box">-->
                                    <!--    <h5>Immigration Consultency <span class="pull-right">65%</span></h5>-->
                                    <!--    <div class="progress" data-value="65">-->
                                    <!--        <div class="progress-bar" role="progressbar"></div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="progress-box">-->
                                    <!--    <h5>Tourist Consultency <span class="pull-right">75%</span></h5>-->
                                    <!--    <div class="progress" data-value="75">-->
                                    <!--        <div class="progress-bar" role="progressbar"></div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                                <a href="#" class="theme-btn mt-5">Learn More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="counter-area pb-120">
            <div class="container">
                <div class="counter-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-people-2"></i></div>
                                <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                                <h6 class="title">+ Happy Clients</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-worldwide"></i></div>
                                <span class="counter" data-count="+" data-to="190" data-speed="3000">190</span>
                                <h6 class="title">+ Countries</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-technology"></i></div>
                                <span class="counter" data-count="+" data-to="620" data-speed="3000">620</span>
                                <h6 class="title">+ Immigrations</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-interface"></i></div>
                                <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                                <h6 class="title">+ Win Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="coaching-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Coaching</span>
                            <h2 class="site-title">Best Coaching <span>From Us</span></h2>
                        </div>
                    </div>
                </div>
                <div class="coaching-slider owl-carousel owl-theme">
                    <?php foreach($coaching as $row){ ?>
                    
                    <div class="coaching-item">
                        <div class="coaching-img">
                            <img src="<?=$row['coaching_image']?>" alt="">
                        </div>
                        <div class="coaching-content">
                            <div class="coaching-meta">
                                <ul>
                                    <li><i class="far fa-clock"></i> 03 Months</li>
                                    <li><i class="far fa-book"></i> 25 Classes</li>
                                </ul>
                            </div>
                            <h4><a href="#"><?=$row['coaching_heading']?></a></h4>
                            <p>
                                <?=$row['coaching_sub_heading']?>.
                            </p>
                            <a href="#" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                     <?php }?>
                    
                    <!--<div class="coaching-item">-->
                    <!--    <div class="coaching-img">-->
                    <!--        <img src="<?=base_url()?>new_assets/img/coaching/02.jpg" alt="">-->
                    <!--    </div>-->
                    <!--    <div class="coaching-content">-->
                    <!--        <div class="coaching-meta">-->
                    <!--            <ul>-->
                    <!--                <li><i class="far fa-clock"></i> 03 Months</li>-->
                    <!--                <li><i class="far fa-book"></i> 25 Classes</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <h4><a href="#">TOEFL Coaching</a></h4>-->
                    <!--        <p>-->
                    <!--            There are many variations of passages but the majority have suffered alteration in humour.-->
                    <!--        </p>-->
                    <!--        <a href="#" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="coaching-item">-->
                    <!--    <div class="coaching-img">-->
                    <!--        <img src="<?=base_url()?>new_assets/img/coaching/03.jpg" alt="">-->
                    <!--    </div>-->
                    <!--    <div class="coaching-content">-->
                    <!--        <div class="coaching-meta">-->
                    <!--            <ul>-->
                    <!--                <li><i class="far fa-clock"></i> 03 Months</li>-->
                    <!--                <li><i class="far fa-book"></i> 25 Classes</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <h4><a href="#">PTE Coaching</a></h4>-->
                    <!--        <p>-->
                    <!--            There are many variations of passages but the majority have suffered alteration in humour.-->
                    <!--        </p>-->
                    <!--        <a href="#" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="coaching-item">-->
                    <!--    <div class="coaching-img">-->
                    <!--        <img src="<?=base_url()?>new_assets/img/coaching/04.jpg" alt="">-->
                    <!--    </div>-->
                    <!--    <div class="coaching-content">-->
                    <!--        <div class="coaching-meta">-->
                    <!--            <ul>-->
                    <!--                <li><i class="far fa-clock"></i> 03 Months</li>-->
                    <!--                <li><i class="far fa-book"></i> 25 Classes</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <h4><a href="#">Graduate Re-Exam</a></h4>-->
                    <!--        <p>-->
                    <!--            There are many variations of passages but the majority have suffered alteration in humour.-->
                    <!--        </p>-->
                    <!--        <a href="#" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="coaching-item">-->
                    <!--    <div class="coaching-img">-->
                    <!--        <img src="<?=base_url()?>new_assets/img/coaching/05.jpg" alt="">-->
                    <!--    </div>-->
                    <!--    <div class="coaching-content">-->
                    <!--        <div class="coaching-meta">-->
                    <!--            <ul>-->
                    <!--                <li><i class="far fa-clock"></i> 03 Months</li>-->
                    <!--                <li><i class="far fa-book"></i> 25 Classes</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <h4><a href="#">Scholastic Apti</a></h4>-->
                    <!--        <p>-->
                    <!--            There are many variations of passages but the majority have suffered alteration in humour.-->
                    <!--        </p>-->
                    <!--        <a href="#" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="coaching-item">-->
                    <!--    <div class="coaching-img">-->
                    <!--        <img src="<?=base_url()?>new_assets/img/coaching/06.jpg" alt="">-->
                    <!--    </div>-->
                    <!--    <div class="coaching-content">-->
                    <!--        <div class="coaching-meta">-->
                    <!--            <ul>-->
                    <!--                <li><i class="far fa-clock"></i> 03 Months</li>-->
                    <!--                <li><i class="far fa-book"></i> 25 Classes</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <h4><a href="#">Management Test</a></h4>-->
                    <!--        <p>-->
                    <!--            There are many variations of passages but the majority have suffered alteration in humour.-->
                    <!--        </p>-->
                    <!--        <a href="#" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>


        <div class="choose-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-content">
                            <div class="site-heading">
                                <span class="site-title-tagline text-white">Why Choose Us</span>
                                <h2 class="site-title text-white mb-10">We Build The <span>Dream With Passion</span> For You
                                </h2>
                                <p class="text-white">
                                    We believe with right exposure you can do wonders for yourself and your family hence we help you make choices that resonate with your aspirations and dreams. Once that happens your chances of realising your potential increases exponentially. You control and determine your destiny, not your birthplace. You become a #global-citizen.

                                </p>
                            </div>
                            <div class="choose-content-wrapper">
                                
                                 <?php foreach($why_choose_us as $row){?>
                                <div class="choose-item">
                                    <div class="choose-item-icon">
                                        <i class="flaticon-checking"></i>
                                    </div>
                                    <div class="choose-item-info">
                                        <h3><?=$row['wcs_heading']?></h3>
                                        <!--<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected.</p>-->
                                    </div>
                                </div>
                                <?php }?>
                                <!--<div class="choose-item">-->
                                <!--    <div class="choose-item-icon">-->
                                <!--        <i class="flaticon-education"></i>-->
                                <!--    </div>-->
                                <!--    <div class="choose-item-info">-->
                                <!--        <h3>Required Documents Support</h3>-->
                                <!--        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected.</p>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="choose-item">-->
                                <!--    <div class="choose-item-icon">-->
                                <!--        <i class="flaticon-technology"></i>-->
                                <!--    </div>-->
                                <!--    <div class="choose-item-info">-->
                                <!--        <h3>Legal Immigration Success</h3>-->
                                <!--        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected.</p>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
<i class="fas fa-play"></i>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="coaching-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Country</span>
                            <h2 class="site-title">Best Country <span>For Study</span></h2>
                        </div>
                    </div>
                </div>
                <div class="coaching-slider owl-carousel owl-theme">
                     <?php foreach($locations as $key => $row){?>
                    <div class="coaching-item">
                        <div class="coaching-img">
                            <img src="<?=$row['il_image']?>" alt="">
                        </div>
                        <div class="coaching-content">
                            <div class="coaching-meta">
                                <!--<ul>-->
                                <!--    <li><i class="far fa-clock"></i> 03 Months</li>-->
                                <!--    <li><i class="far fa-book"></i> 25 Classes</li>-->
                                <!--</ul>-->
                            </div>
                            <h4><a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>"><?=$row['il_country']?></a></h4>
                            <!--<p>-->
                            <!--    There are many variations of passages but the majority have suffered alteration in humour.-->
                            <!--</p>-->
                            <a href="<?=base_url()?><?=str_replace(" ","-",$row['il_country'])?>" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php }?>
                    
                   
                </div>
            </div>
        </div>


   
                    
                   
                    
                    </main>
      <?php include('parts/footer.php')?>
  