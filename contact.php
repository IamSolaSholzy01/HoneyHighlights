
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="985530739515-m4s7l3v4k5r7fu8vbfkm6p56ir1pb88d.apps.googleusercontent.com">
    <title>Honey Highlights</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/cataloguesss.css">
    <!--Modal-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/login-register.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <style>
        .honey-site-header.scrolled,.honey-site-header.awake{background-color: #fff !important;}
        .honey-contact-section{position: relative;z-index: 1;padding-top: 1px;padding-bottom: 60px}
        .honey-contact-wrap{background-color: #eee;padding: 40px 40px 0 40px}
        .honey-contact-wrap *{font-family: Raleway, sans-serif}
        @media (max-width:767px) {.honey-contact-wrap {padding: 30px 0 0 0}}
        @media (max-width:992px) {.honey-contact-wrap {padding: 30px 0 0 0}}
        .honey-contact-section h3 {font-weight: 600;font-size: 30px;line-height: 1.5em;color: #1b1b1b}
        .honey-contact-section p {font-size: 16px}
        .honey-contact-info ul li {line-height: 1.5em;display: flex;align-items: center;margin-bottom: 15px}
        .honey-contact-info ul li a {color: #888;align-items: center;line-height: 1.5em;display: flex;font-size: 18px}
        .honey-contact-info ul li i {margin-right: 10px;color: #ff69b4;font-size: 20px}
        .honey-contact-info ul li {font-size: 18px}
        .honey-contact-form .form-control {border-radius: 0;height: 45px;font-size: 18px;background-color: transparent;border-width: 0 0 1px;border-style: solid;border-color: #ececec;outline: 0}
        .form-control:focus, .honey-contact-form:focus {border-bottom-width: 2px;border-color: #ff69b4}
        .form-control:focus {border-color: inherit;-webkit-box-shadow: none;box-shadow: none}
        .honey-contact-form .form-control.message {height: 150px}
    </style>
</head>
<body>
    <!-- Header -->
    <header class="honey-site-header"><div class="header-container">
            <ul>
                <a href="index.html" class="honey-site-logo"><img src="img/logo-dark.webp" alt="honey"></a>
                <li>
                    <!-- Menu -->
                    <nav class="honey-site-menu" id="honey-navbar-spy">
                        <div class="honey-site-menu-inner" id="honey-navbar">
                        <ul class="list-unstyled honey-menu-container">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="catalogue.html">Catalogue</a></li>
                                <li ><a href="blog.php">Blog</a></li>
                                <li class="giddy"><a href="contact.php">Contact</a></li>
                                <li id="loginLink"><a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></li>
                                <li id="logoutLink" style="display: none;"><a href="php/logout.php">Log Out</a>
                            </ul>
                        </div>
                    </nav>
                </li>
            </ul>
            <!-- Menu Burger -->
            <div class="col-6 col-md-8 text-right honey-menu-burger-wrap"><a href="#" class="honey-site-nav-toggle honey-js-honey-site-nav-toggle"><i></i></a></div>
    </div></header>
    <!-- Contact Me -->
    <?php include './php/loginmodal.php';?>
    <input type="hidden" id="google" name="google" value="./php/google.php">
    <div class="header-image" style="background-image: url('img/about.jpg'); filter: blur(8px); position: fixed; z-index: -1;"></div>
    <section class="honey-page-section">
        <div class="container honey-margin">
            <div class="col-md-8 offset-md-2">
                <div class="honey-page-content text-center">
                    <h2 style="color: #fff;">Contact</h2>
                    <p class="excessfont" style="color: #fff; font-family: 'Coming Soon', cursive; font-size: 1.3em; font-weight: 400">Please reach out to me with your inquiry!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="honey-contact-section">
        <div id="honey-contactMap"></div>
        <div class="container">
            <div class="row honey-contact-wrap honey-card-extra honey-padding">
                <div class="col-md-6 xs-padding">
                    <div class="honey-contact-info">
                        <h3>Get in touch</h3><p>Do you have any question, request or complaint? Are you in need of our services wherever you are? Do you want to come to us, or, do you want us to come to you? Whatever you need, please, note that we are always reachable via the media below. We are eagerly expecting your call. 😁😁😊😊</p>
                        <ul>
                            <li><i class="fa fa-home"></i>Oyinda's house</li>
                            <li><i class="fa fa-mobile"></i>+234 708 881 0879</li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:olajumokeoyinda@gmail.com" style="text-decoration: none;">olajumokeoyinda@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="honey-contact-form">
                        <h3>Contact Form</h3>
                        <p>Please reach out to me with your inquiry! I am available within most of Lagos.</p>
                        <form id = "contact-form" action="php/submitform.php" method="post" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required> </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required> </div>
                            </div>
                            <div class="form-group colum-row row">
                                <div class="col-sm-12">
                                    <input type="text" id="text" name="text" class="form-control" placeholder="Service of interest" required> </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Enter your message" required></textarea>
                                </div>
                            </div>
                            <div class="contact-result"></div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="honey-btn2" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe -->
    <div class="subscribe" id="subscribe-form">
        <h2>Subscribe to our mailing list now <br>Be the first to know when we give discounts and deals on our services and our latest blog posts</h2>
        <form class="subscribe-form" action="php/subscribe.php" method="POST" name="subscribersss">
            <input class="subscribe-input" type="email" name="email" id="subscribe-email" placeholder="Email" required >
            <button id="subscribe-button" class="honey-btn2" type="submit">Subscribe</button>
        </form>
    </div>
    <div class="subscribe" id="subscribe-result"></div>    
    <!-- Footer -->
    <div include-html="footer.html"></div> 
    <!-- JS -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/owl.carousel.min.js" async></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js" async></script>
    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
    <script src="js/scripts.js" async></script>
    <script src="js/include.js"></script>
    <script src="js/ajax.js"></script>
    <script>includeHTML();</script>
    <script>$(function(){event.preventDefault();subscribe();register();login();logout();});</script>
</body>
</html>