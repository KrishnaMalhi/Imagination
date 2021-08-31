<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Mintech  IT Solutions &  Services Template">
    <meta name="description"
        content="Software development, Mobile app, Website, Web development, Graphic design, Internet services and equipment, Digital Marketing, SEO, CCTV and much more.">
    <meta name="keywords"
        content="software developer, software company, software design, software development company, web design software, mobile development, software companies near me, website design, IT company, it consulting companies">
    <meta name="author" content="Inventic Solutions" />

    <title>Best Website Designing | Software | Solutions | Marketing</title>

    <link rel="shortcut icon" href="assets/images/logo/logo-shortcut.png" type="image/x-icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
        </div><!-- /.preloader -->

        <!-- =========================
        Header 
    =========================== -->
        <header class="header header-light">
            <!-- NAVBAR  -->
            <?php require "navbar.php"?>

        </header><!-- /.Header -->

        <!-- ========================= 
            Google Map
    =========================  -->
        <section class="google-map py-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28960.68592922892!2d67.05459591633303!3d24.860921025637033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x248333919412017e!2sInventic%20Solutions!5e0!3m2!1sen!2s!4v1611232751456!5m2!1sen!2s"
                width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </section><!-- /.GoogleMap -->

        <!-- ==========================
        contact layout 1
    =========================== -->
        <section class="contact-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <form action="form.php" method="POST" id="myForm">

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Get In Touch</h4>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label >Name (required)</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name"
                                            name="name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label >Email (required)</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email"
                                            name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label >Phone (required)</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="phone"
                                            name="phone" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label >City</label>
                                        <input type="text" class="form-control" placeholder="City"
                                            id="city" name="city">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <label >Message (optional)</label>
                                        <textarea class="form-control" placeholder="Describe your inquirey!"
                                            id="message" name="message"></textarea>
                                    </div>
                                   
                                    <button type="submit" class="btn btn__secondary btn__block ">Submit Request</button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                        <div class="contact-panel__info bg-overlay bg-overlay-primary">
                            <div class="bg-img"><img src="assets/images/contact/1.jpg" alt="banner"></div>
                            <div class="contact-block">
                                <h5 class="contact-block__title">Our Location</h5>
                                <ul class="contact-block__list list-unstyled">
                                    <li>Office 207, Progressive Square,
                                        Shahrah-e-Faisal, Block 6 PECHS,
                                        Karachi, Pakistan.</li>
                                </ul>
                            </div><!-- /.contact-panel__info__block -->
                            <div class="contact-block">
                                <h5 class="contact-block__title">Quick Contact</h5>
                                <ul class="contact-block__list list-unstyled">
                                    <li><a href="mailto:Mintech@7oroof.com"></a>Email: info@inventicsol.com</li>
                                    <li><a href="mailto:Mintech@7oroof.com"></a>Support: +92-21-38884247</li>
                                </ul>
                            </div><!-- /.contact-panel__info__block -->
                            <div class="contact-block">
                                <h5 class="contact-block__title">Opening Hours</h5>
                                <ul class="contact-block__list list-unstyled">
                                    <li>Monday - Friday</li>
                                    <li>09:00 AM - 07:00 PM</li>
                                </ul>
                            </div><!-- /.contact-panel__info__block -->
                            <a href="contact-us.php" class="btn btn__white btn__bordered btn__icon btn__xl">
                                <span>Find Your Solution</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact layout 1 -->

        <!-- ==========================
       Contact Info
    ============================ -->


        <!-- ========================
      Footer
    ========================== -->
        <?php require "footer.php" ?>

        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
        <?php require "slidbar.php" ?>




        <div class="login-popup" id="login-popup">
            <div class="login-popup-wrapper">
                <form class="login-popup__form">
                    <h3 class="login-popup__title">Login!</h3>
                    <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.
                    </p>
                    <div class="form-group mb-30">
                        <label>Email (required)</label>
                        <input type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group mb-20">
                        <label>Password (required)</label>
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-20">
                        <div class="custom-control custom-checkbox d-flex align-items-center">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember Me!</label>
                        </div>
                        <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__block">Login</button>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-20">
                    <span class="color-white fz-14 font-weight-bold">Don’t Have An Account?</span>
                    <button id="go-register" class="go-register fz-14 font-weight-bold">
                        <span>Register Here</span><i class="icon-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div><!-- /.login-popup -->

        <div class="login-popup" id="register-popup">
            <div class="login-popup-wrapper">
                <form class="login-popup__form">
                    <h3 class="login-popup__title">Register!</h3>
                    <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.
                    </p>
                    <div class="form-group mb-30">
                        <label>Email (required)</label>
                        <input type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group mb-20">
                        <label>Password (required)</label>
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-20">
                        <div class="custom-control custom-checkbox d-flex align-items-center">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">I read & agree to <a href="#">Terms &
                                    Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__block">Register</button>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-20">
                    <span class="color-white fz-14 font-weight-bold">Have An Account?</span>
                    <button id="go-login" class="go-login fz-14 font-weight-bold">
                        <span>Login Here</span><i class="icon-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div><!-- /.login-popup -->
    </div><!-- /.wrapper -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>