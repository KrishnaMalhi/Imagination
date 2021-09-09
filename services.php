<!DOCTYPE html>
<html lang="en">
<?php require "header.php"?>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <?php require "navbar.php"?>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="page-title page-title-layout1 bg-overlay bg-parallax">
            <div class="bg-img"><img src="assets/images/backgrounds/g1.jpeg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6" style="height: 150px">
                        <h5 class="pagetitle__heading">Our Services</h5>
                        <!-- <p class="pagetitle__desc">
                            We are a solutions & services company with focus on digital technologies.
                        </p> -->


                        </a>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

    <section class="services-layout2 bg-no-repeat bg-size-auto bg-top-right pt-130 pb-90">
    <div id="portfolio" class="our-portfolio section">
 
        <div class="container" style=" margin-bottom: 120px;">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="web.php">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                            <p class="service-item__desc">
                                    Web applications for its clients for many years. We have been developing websites,
                                    dashboards, reportings, ecommerce solutions and various customized web based
                                    projects as per our client’s requirements
                                </p>
                            </div>
                            <div class="showed-content">
                                 <div class="service-item__icon">
                                    <i class="icon-cloud"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Web Development
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="softdevelopment.php">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                               <p class="service-item__desc">
                                    We bring expertise in all stages from proof-of-concept prototyping to complete
                                    mobile/web solution transformation by using latest available technology to create
                                    these customized Software and Web Applications.
                                </p> 
                            </div>
                            <div class="showed-content">
                            <div class="service-item__icon">
                                    <i class="icon-programming"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Software Development
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-sm-6">
                    <a href="graphic1.php">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                            <p class="service-item__desc">
                                    Be it Logo, Banner, Flyer, Business Card, Layout, Brochure, ebook or any other
                                    design, we are at your service to provide you everything from initial concept to
                                    final outcome
                                </p> 
                            </div>
                            <div class="showed-content">
                            <div class="service-item__icon">
                                    <i class="icon-presentation"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Graphics Designing
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-sm-6">
                    <a href="digitalmarketing.php">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                            <p class="service-item__desc">
                                    According to your package, we design posts, add content to these posts and post on
                                    your behalf, we will market your page to relevant audience to boost up your
                                    business.
                                </p>
                            </div>
                            <div class="showed-content">
                            <div class="service-item__icon">
                                    <i class="icon-statistic"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Digital Marketing
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
         
               
            </div>
        </div>
    </div>

 
    <?php require "footer.php"?>
    <?php require "script.php"?>

</body>

</html>