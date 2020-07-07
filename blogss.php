
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">

    <!--Modal-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/login-register.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
                        <div class="honey-site-menu-inner" id="honey-navbar">
                            <ul class="list-unstyled honey-menu-container">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <!--<li><a href="services.html">Services</a></li>-->
                                <li><a href="catalogue.html">Catalogue</a></li>
                                <li class="giddy"><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li id="loginLink"><a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></li>
                                <li id="logoutLink" style="display: none;"><a href="php/logout.php">Log Out</a>
                            </ul>
                        </div>
                    </nav>
                </li>
            </ul>
            <!-- Menu Burger -->
            <div class="col-6 col-md-8 text-right honey-menu-burger-wrap"> <a href="#" class="honey-site-nav-toggle honey-js-honey-site-nav-toggle"><i></i></a> </div>
        </div>
        
    </header>
    <!--<div include-html="login_register_modal.html"></div> -->
    <!--Beginning of Modal-->
    <div class="container" id="loginSection">
        
    <?php include './php/loginmodal.php';?>
    <input type="hidden" id="google" name="google" value="./php/google.php">


    <!-- Blog -->
    <section class="honey-page-section" style="padding-top: calc(44px + 5vh); padding-bottom: 5vh;">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="honey-page-content text-center" id="blog-quote-section">
                    <h2>Blog</h2>
                    <p>If you do good work for good clients,
                        <br />it will lead to other good work for other good clients.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="honey-blog-section">
        <div class="container">
            <div class="honey-blog-items grid-list row">
                <div class="col-md-6">
                    <div class="honey-blog-post"> <img src="img/blog/blog-01.jpg" alt="blog post">
                        <div class="honey-blog-content">
                            <p class="honey-date-user"> <span class="date"><i class="fa fa-clock-o"></i> 04.06.2020</span> <span class="user"><i class="fa fa-users"></i></i> O. Ogundeji</span> </p>
                            <h3><a href="posts/tools-and-products.php">Tools and Products for Makeup</a></h3>
                            <p class="actual-blog-post">As an individual interested in makeup application, it can be challenging when considering the wide range of tools and products you can apply. How can you know the right tool for your makeup project?</p> <a href="posts/tools-and-products.php" class="honey-post-meta">Read More <i class="fa fa-arrow-right"></i></a> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="honey-blog-post"> <img src="img/blog/blog-02.jpg" alt="blog post">
                        <div class="honey-blog-content">
                            <p class="honey-date-user"> <span class="date"><i class="fa fa-clock-o"></i> 13.11.2019</span> <span class="user"><i class="fa fa-users"></i> C. Litora</span> </p>
                            <h3><a href="posts/post.html">Aptent Tacition</a></h3>
                            <p class="actual-blog-post">Class aptent taciti sociosqu ad litora. Vestibulum quis sapien metus. In mauris enim, facilisis quis fermentum non, varius vel erat. Duis rutrum lorem sit amet nisl blandit sagittis. Fusce prules tincidunt ornare.</p> <a href="post.html" class="honey-post-meta">Read More <i class="fa fa-arrow-right"></i></a> </div>
                    </div>
                </div>
                <!--<div class="col-md-6">
                    <div class="honey-blog-post"> <img src="img/blog/blog-01.jpg" alt="">
                        <div class="honey-blog-content">
                            <p class="honey-date-user"> <span class="date"><i class="fa fa-clock-o"></i> 13.11.2019</span> <span class="user"><i class="fa fa-users"></i> A. Duis</span> </p>
                            <h3><a href="post.html">Duis Rutrum</a></h3>
                            <p>Duis rutrum lorem sit amet nisl blandit sagittis. Vestibulum quis sapien metus. In mauris enim, facilisis quis fermentum non, varius vel erat. Fusce prules tincidunt ornare. Class aptent taciti sociosqu ad litora.</p> <a href="post.html" class="honey-post-meta">Read More <span class="ti-shift-right-alt"></span></a> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="honey-blog-post"> <img src="img/blog/blog-04.jpg" alt="blog post">
                        <div class="honey-blog-content">
                            <p class="honey-date-user"> <span class="date"><i class="fa fa-clock-o"></i> 13.11.2019</span> <span class="user"><i class="fa fa-users"></i> S. Blandit</span> </p>
                            <h3><a href="post.html">Aptent Tacition</a></h3>
                            <p>Vestibulum quis sapien metus. Duis rutrum lorem sit amet nisl blandit sagittis. In mauris enim, facilisis quis fermentum non, varius vel erat. Fusce prules tincidunt ornare. Class aptent taciti sociosqu ad litora.</p> <a href="post.html" class="honey-post-meta">Read More <span class="ti-shift-right-alt"></span></a> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="honey-blog-post"> <img src="img/blog/blog-05.jpg" alt="">
                        <div class="honey-blog-content">
                            <p class="honey-date-user"> <span class="date"><i class="fa fa-clock-o"></i> 13.11.2019</span> <span class="user"><i class="fa fa-users"></i> F. Mauris</span> </p>
                            <h3><a href="post.html">Fermentum Mauris</a></h3>
                            <p>Vestibulum quis sapien metus. Duis rutrum lorem sit amet nisl blandit sagittis. In mauris enim, facilisis quis fermentum non, varius vel erat. Fusce prules tincidunt ornare. Class aptent taciti sociosqu ad litora.</p> <a href="post.html" class="honey-post-meta">Read More <span class="ti-shift-right-alt"></span></a> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="honey-blog-post"> <img src="img/blog/blog-06.jpg" alt="blog post">
                        <div class="honey-blog-content">
                            <p class="honey-date-user"> <span class="date"><i class="fa fa-clock-o"></i> 13.11.2019</span> <span class="user"><i class="fa fa-users"></i> B. Erat</span> </p>
                            <h3><a href="post.html">Blandit Varius</a></h3>
                            <p>In mauris enim, facilisis quis fermentum non, varius vel erat. Vestibulum quis sapien metus. Duis rutrum lorem sit amet nisl blandit sagittis. Fusce prules tincidunt ornare. Class aptent taciti sociosqu ad litora.</p> <a href="post.html" class="honey-post-meta">Read More <span class="ti-shift-right-alt"></span></a> </div>
                    </div>
                </div>-->
            </div>
            <!-- Pagination -->
            <ul class="honey-pagination-wrap align-center mt-30">
                <li><a href="blog.html#"><i class="fa fa-arrow-left"></i></a></li>
                <li><a href="blog.html#" class="active">1</a></li>
                <!--<li><a href="blog.html#">2</a></li>
                <li><a href="blog.html#">3</a></li>-->
                <li><a href="blog.html#"><i class="fa fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- About Me in Blog -->
    <section id = "honey-blog-about">
        <div class="container">
            <div class="honey-blog-about-me">
                <div id="honey-blog-about-header">
                    <h2>About Me</h2>
                </div>
                <div id="honey-blog-about-content">
                    <p>Hi, there! I’m Oyin, a professional, freelance makeup artist living in Lagos. I have passion for 
                        flawless skincare, beauty and music. I would describe my style of makeup as classy, modern and 
                        always – always what suits my clients best.
                        I love meeting new people which is one of the joy my job brings. I have a YouTube channel
                        which was created so that I could meet and connect with people while teaching them makeup 
                        routine and techniques.
                        I am looking forward to meeting you and hopefully get in touch with you as time go on.
                        </p>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- Subscribe -->
    <div class="subscribe" id="subscribe-form">
        <h2>Subscribe to our mailing list now <br>Be the first to know when we give discounts and deals on our services and our latest blog posts</h2>

        <form class="subscribe-form" action="php/subscribe.php" method="POST" name="subscribersss">
            <input class="subscribe-input" type="email" name="email" id="email" placeholder="Email" required >
            <button id="subscribe-button" class="honey-btn2" type="submit">Subscribe</button>
        </form>
    </div>
    <div class="subscribe" id="subscribe-result"></div>
    
    <!-- Footer -->
    <div include-html="footer.html"></div> 
    <!-- Loader -->
    <!--<div id="ftco-loader" class="show fullscreen"><img src="img/gifgit.gif" class="circular"/></div>-->

    <!-- JS -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
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
