
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
    <title>Honey Highlights</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/colours.css" rel="stylesheet">
    <!--Modal-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/login-register.js" type="text/javascript"></script>
    
</head>

<body>
    <!-- Header -->
    <header class="honey-site-header">
        <div class="header-container">
            <ul>
                <a href="index.html" class="honey-site-logo"><img src="img/logo-dark.png" alt="honey"></a>
                <li>
                    <!-- Menu -->
                    <nav class="honey-site-menu" id="honey-navbar-spy">
                        <div class="honey-site-menu-inner honey-menu-container" id="honey-navbar">
                            <ul class="list-unstyled">
                                <li><a href="index.html">Home</a></li>
                                <li class="giddy"><a href="about.php">About Us</a></li>
                                <!--<li><a href="services.html">Services</a></li>-->
                                <li><a href="catalogue.html">Catalogue</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li id="loginLink"><a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></li>
                                <li id="logoutLink" style="display: none;"><a href="php/logout.php" >Log Out</a>
                            </ul>
                        </div>
                    </nav>
                </li>
            </ul>
            
                
            <div class="row align-items-center">
                
            </div>    
            <!-- Menu Burger -->
            <div class="col-6 col-md-8 text-right honey-menu-burger-wrap"> <a href="#" class="honey-site-nav-toggle honey-js-honey-site-nav-toggle"><i></i></a> </div>
        </div>
        
    </header>
    <!-- About Us -->
    <?php include './php/loginmodal.php';?>
    <input type="hidden" id="google" name="google" value="./php/google.php">
    <section class="honey-about-section honey-about-inner-page">
        <div class="container intel">
            <div class="row honey-about-inner">
                <!--<div class="col-md-6"> <img class="honey-about-img" src="img/about me.jpeg" alt=""> </div>-->

                <div class="too xs-padding">
                    <div class="honey-about-info also">
                        <h2>About Us</h2>
                        <p>Hi, I'm honey a Professional Makeup Artist.</p>
                        <p>Do you want to look more beautiful and confident? </p>
                        <p> So do we. Here at <b>honeyhighlights</b> we have a passion for enhancing beauty and
                             are experienced in ensuring our models and clients have a suitable makeup 
                             before appearing in front of an audience or camera. We always want to give 
                             our customers the best of our services when it comes to <b>creativity</b>, 
                             <b>speed</b> in getting the job done, and <b>flexibility</b> especially when providing great 
                             looks and makeovers for them. We desire not only to make beauty but to teach it also, and that
                             is why we have created a platform on YouTube in order for our viewers to learn even with little to no knowledge of makeup.</p>
                        <p class="honey-signature-dark"><img src="img/signature.png" alt="Honey Highlights"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimional -->
    <section id="testimonial" class="honey-testimonial-section">
        <div class="container">
            <ul id="testimonial-carousel" class="testimonial-items owl-carousel">
                <li class="testimonial-item"> <i class="fa fa-quote-left"></i>
                    <p> ‎Lipstick is really magical.<br>
                     It holds more than a waxy bit of color - it holds the promise of a brilliant smile,
                      a brilliant day, both literally and figuratively.
                    </p>
                <h4>Roberta Gately</h4></li>
                <li class="testimonial-item"> <i class="fa fa-quote-left"></i>
                    <p>Makeup is the finishing touch
                        <br>The final accessory.</p>
                <h4> Marc Jacobs.</h4></li>
                <li class="testimonial-item"> <i class="fa fa-quote-left"></i>
                    <p>“Beauty is power”
                        <br>and Makeup is something that really enhances that; it’s a woman’s secret.</p>
                <h4>Charlotte Tilbury</h4></li>
                <li class="testimonial-item"> <i class="fa fa-quote-left"></i>
                    <p>Girls have always wanted to be pretty, even in Egyptian times.
                        <br>Cleopatra wore all the eyeliner, you know.</p>
                <h4>Rita Ora</h4></li>
                
            </ul>
        </div>
    </section>
    <!-- Team -->
    <section class="honey-team-section">
        <div class="container">
            <div class="honey-team-section-heading text-center">
                <h2>My Team</h2>
                <p>Makeup is meant to enhance, not to hide behind.
                    <br />I want my clients to feel like enhanced versions of themselves.</p>
            </div>
            <div class="row honey-team-wrap">
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="honey-team-content text-center">
                        <div class="honey-team-thumb"> <img src="img/team/team-01.jpg" alt="" style="border-radius: 50%;"> </div>
                        <h3>Oyindamola Ogundeji</h3> <span>Makeup Artist</span> </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="honey-team-content text-center">
                        <div class="honey-team-thumb"> <img src="img/team/team-01.jpg" alt="" style="border-radius: 50%;"> </div>
                        <h3>Sola Olagunju</h3> <span>Hype-man</span> </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="honey-team-content text-center">
                        <div class="honey-team-thumb"> <img src="img/team/team-01.jpg" alt="" style="border-radius: 50%;"> </div>
                        <h3>Mishael Abiola</h3> <span>Web Designer</span> </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-padding">
                    <div class="honey-team-content text-center">
                        <div class="honey-team-thumb"> <img src="img/team/team-01.jpg" alt="" style="border-radius: 50%;"> </div>
                        <h3>Sonia Ogungbe</h3> <span>Lighting Expert</span> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe -->
    <div class="subscribe" id="subscribe-form">
        <h2>Subscribe to our mailing list now <br> Be the first to know once a blog post is dropped</h2>

        <form class="subscribe-form" action="php/subscribe.php" method="POST" name="subscribersss">
            <input class="subscribe-input" type="email" name="email" id="email" placeholder="Email" required >
            <button id="subscribe-button" class="honey-btn2" type="submit">Subscribe</button>
        </form>
    </div>
    <div class="subscribe" id="subscribe-result"></div>
    </div>    
    <!-- Footer -->
    <div include-html="footer.html"></div> 
    <!-- Loader -->
    <!--<div id="ftco-loader" class="show fullscreen"><img src="img/gifgit.gif" class="circular"/></div>-->

    <!-- JS -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/include.js"></script>
    <script src="js/ajax.js"></script>
    <script>includeHTML();</script>
    <script>$(function(){event.preventDefault();subscribe();});</script>
    <script>$(function(){event.preventDefault();register();});</script>
    <script>$(function(){event.preventDefault();login();});</script>
    <script>$(function(){event.preventDefault();logout();});</script>
</body>
</html>
