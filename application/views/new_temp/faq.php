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
                <h2 class="breadcrumb-title">Faq</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Faq</li>
                </ul>
            </div>
        </div>


        <div class="faq-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Faq's</span>
                                <h2 class="site-title my-3">General <span>frequently</span> asked questions</h2>
                            </div>
                            <p class="about-text">FAQ stands for frequently-asked questions, and it’s a page on a website that gives quick answers to customer questions. The idea is to keep the answers short and direct so that people find info quickly.</p>
                            
                            <!--<a href="#" class="theme-btn mt-5">Ask Question <i class="far fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            
                            <?php foreach($faq as $key =>$row) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo_<?=$key?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_<?=$key?>" aria-expanded="false" aria-controls="collapseTwo_<?=$key?>">
<span><i class="far fa-question"></i></span> <?=$row['faq_que']?>?
</button>
                                </h2>
                                <div id="collapseTwo_<?=$key?>" class="accordion-collapse collapse" aria-labelledby="headingTwo_<?=$key?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <?=$row['faq_ans']?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<!--                            <div class="accordion-item">-->
<!--                                <h2 class="accordion-header" id="headingTwo">-->
<!--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
<!--<span><i class="far fa-question"></i></span> How Long Should A Business Plan Be-->
<!--?-->
<!--</button>-->
<!--                                </h2>-->
<!--                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
<!--                                    <div class="accordion-body">-->
<!--                                        We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="accordion-item">-->
<!--                                <h2 class="accordion-header" id="headingThree">-->
<!--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--<span><i class="far fa-question"></i></span> What Payment Gateway You Support ?-->
<!--</button>-->
<!--                                </h2>-->
<!--                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
<!--                                    <div class="accordion-body">-->
<!--                                        We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

     <?php include('parts/footer.php')?>