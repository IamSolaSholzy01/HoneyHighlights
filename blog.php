
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
    <style>
        b {
            color: black;
        }
        body {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="honey-site-header">
        <div class="header-container">
            <ul>
                <a href="index.html" class="honey-site-logo"><img src="img/logo-dark.webp" alt="honey"></a>
                
                <li>
                    <!-- Menu -->
                    <nav class="honey-site-menu" id="honey-navbar-spy">
                        <div class="honey-site-menu-inner" id="honey-navbar">
                            <ul class="list-unstyled honey-menu-container">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <!--<li><a href="services.html">Services</a></li>-->
                                <li><a href="catalogue.min.html">Catalogue</a></li>
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
    <div class="" id="loginSection">
        
    <?php include './php/loginmodal.php';?>
    <input type="hidden" id="google" name="google" value="./php/google.php">

    <div class="honey-blog-row honey-page-section">
    <!-- Blog entries -->
    <div class="honey-col l8 s12">
    <!-- Blog entry -->
    <div class="honey-card-4 honey-margin bg-white">
        <img src="img\blog\blog-01.jpg" alt="Tools" style="width:100%">
        <div class="honey-container">
        <h3><b>TOOLS and PRODUCTS for MAKEUP</b></h3>
        <h5><span style="padding-right: 15px;" class="user"><i class="fa fa-user honey-opacity"></i> O. Ogundeji</span><span class="honey-opacity"><span class="date honey-opacity"><i class="fa fa-clock-o"></i> 04.06.2020</span></span></h5>
        </div>
        <input type="hidden" value="1" class="hidden-input" id="1">

        <div class="honey-container">
        <p>As an individual interested in makeup application, it can be challenging when considering the wide range of tools 
            and products you can apply. How can you know the right tool for your makeup project?</p>
        <div class="honey-row">
            <div class="honey-col m8 s12">
            <button onclick="window.location.href='posts/tools-and-products.php';" class="honey-button honey-padding-large bg-white honey-border"><b>READ MORE »</b></button>
            </div>
            <div class="honey-col m4 honey-hide-small">
            <p><span class="honey-padding-large honey-right"><b>Comments  </b> <span class="honey-badge"><span id="commentnum1"></span></span></span></p>
            </div>
        </div>
        </div>
    </div>
    <hr />

    <!-- Blog entry -->
    <div class="honey-card-4 honey-margin bg-white">
    <img src="#" alt="" style="width:100%">
        <div class="honey-container">
        <h3><b>Reasons Makeup Products Don't Blend</b></h3>
        <h5><span style="padding-right: 15px;" class="user"><i class="fa fa-user honey-opacity"></i> O. Ogundeji</span><span class="honey-opacity"><span class="date honey-opacity"><i class="fa fa-clock-o"></i> 13.07.2020</span></span></h5>
        </div>
        <input type="hidden" value="2" class="hidden-input" id="2">

        <div class="honey-container">
        <p>Blending is likely always on your mind when you apply products to your face. However, has it happened that 
            no matter how hard you try, your products do not seem to blend? What could be the reason?
        </p>
        <div class="honey-row">
            <div class="honey-col m8 s12">
            <button onclick="window.location.href='posts/makeup-not-blend.php';" class="honey-button honey-padding-large bg-white honey-border"><b>READ MORE »</b></button>
            </div>
            <div class="honey-col m4 honey-hide-small">
            <p><span class="honey-padding-large honey-right"><b>Comments  </b> <span class="honey-badge"><span id="commentnum2"></span></span></span></p>
            </div>
        </div>
        </div>
    </div>
    <hr />

    <!-- Blog entry -->
    <div class="honey-card-4 honey-margin bg-white">
    <img src="#" alt="" style="width:100%">
        <div class="honey-container">
        <h3><b>Importance of Skin Care</b></h3>
        <h5><span style="padding-right: 15px;" class="user"><i class="fa fa-user honey-opacity"></i> O. Ogundeji</span><span class="honey-opacity"><span class="date honey-opacity"><i class="fa fa-clock-o"></i> 14.07.2020</span></span></h5>
        </div>
        <input type="hidden" value="3" class="hidden-input" id="3">

        <div class="honey-container" style="width: 100%;">
        <p>The power of makeup is undeniable, truly. Yet, proper skin care is also essential for everyone. How can we do this correctly?</p>
        <div class="honey-row">
            <div class="honey-col m8 s12">
            <button onclick="window.location.href='posts/skin-care.php';" class="honey-button honey-padding-large bg-white honey-border"><b>READ MORE »</b></button>
            </div>
            <div class="honey-col m4 honey-hide-small">
            <p><span class="honey-padding-large honey-right"><b>Comments  </b> <span class="honey-badge"><span id="commentnum3"></span></span></span></p>
            </div>
        </div>
        </div>
    </div>
    <hr />
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- Introduction menu -->
    <div class="honey-col l4">
    <!-- About Card -->
    <div class="honey-card honey-margin honey-margin-top">
    <img src="img/about.jpg" style="width:100%">
        <div class="honey-container bg-white">
        <h4><b>About Me</b></h4>
        <p>Hi, there! I’m Oyin, a professional, freelance makeup artist living in Lagos. I have passion for 
            flawless skincare, beauty and music. I would describe my style of makeup as classy, modern and 
            always what suits my clients best.
            I love meeting new people which is one of the joy my job brings. I have a YouTube channel
            which was created so that I could meet and connect with people while teaching them makeup 
            routine and techniques.
            I am looking forward to meeting you and hopefully get in touch with you as time go on.
        </p>
        </div>
    </div><hr>
    
    <!-- Posts -->
    <div class="honey-card honey-margin">
        <div class="honey-container honey-padding">
            <h4>Popular Posts</h4>
        </div>
        <ul class="honey-ul honey-hoverable bg-white">
            <li class="honey-padding-16" style="cursor:pointer" onclick="window.location.href='posts/tools-and-products.php';" >
                <img src="img\blog\blog-01.jpg" alt="Image" class="honey-left honey-margin-right" style="width:50px">
                <span class="honey-large">Tools and Products for Makeup</span><br>
                <span>O. Ogundeji</span>
            </li>
            <li class="honey-padding-16" style="cursor:pointer" onclick="window.location.href='posts/makeup-not-blend.php';" >
                <img src="img\blog\blog-01.jpg" alt="Image" class="honey-left honey-margin-right" style="width:50px">
                <span class="honey-large">Reasons Makeup Don't Blend</span><br>
                <span>O. Ogundeji</span>
            </li> 
            <li class="honey-padding-16" style="cursor:pointer" onclick="window.location.href='posts/daily-makeup.php';" >
                <img src="img\blog\blog-01.jpg" alt="Image" class="honey-left honey-margin-right" style="width:50px">
                <span class="honey-large">Daily Makeup Routine</span><br>
                <span>O. Ogundeji</span>
            </li>  
            <li class="honey-padding-16" style="cursor:pointer" onclick="window.location.href='posts/skin-care.php';" >
                <img src="posts\skin_care_files\skin-care.jpg" alt="Image" class="honey-left honey-margin-right" style="width:50px">
                <span class="honey-large">Importance of Skin Care</span><br>
                <span>O. Ogundeji</span>
            </li>
            <li class="honey-padding-16" style="cursor:pointer" onclick="window.location.href='posts/brow-game.php';" >
                <img src="img\blog\blog-01.jpg" alt="Image" class="honey-left honey-margin-right" style="width:50px">
                <span class="honey-large">Improve Your Brow Game</span><br>
                <span>O. Ogundeji</span>
            </li>  
        </ul>
    </div>
    <hr> 
    
    <!-- Labels / tags -->
    <div class="honey-card honey-margin">
        <div class="honey-container honey-padding">
        <h4>Tags</h4>
        </div>
        <div class="honey-container bg-white">
        <p style="margin-block-start: 1em; margin-inline-end: 1em;"><span class="honey-tag bg-black honey-margin-bottom">Makeup</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Tools</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Products</span>
        <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Routine</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Beauty</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Face</span>
        <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Ideas</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Baby</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Family</span>
        <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">News</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Clothing</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Shopping</span>
        <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Sports</span> <span class="honey-tag bg-light-grey honey-small honey-margin-bottom">Games</span>
        </p>
        </div>
    </div>
    
    <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
    </div><br>

    <!-- END w3-content -->
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
    <script src="js/vendor/owl.carousel.min.js" async></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js" async></script>
    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
    <script src="js/scripts.js" async></script>
    <script src="js/include.js"></script>
    <script src="js/ajax.js"></script>
    <script>includeHTML();</script>
    <script>$(function(){event.preventDefault();subscribe();register();login();logout();});</script>
    <script>
        $(function(){
            //Comment form 
            url = 'php/load-comments.php';
            type = 'POST';
            var array = document.getElementsByClassName('hidden-input');
            var number = 0;
            for (const element of array) {
                number++;
                var comments;
                var id = element.id;
                var type = 'POST';
                var url = './php/load-comments.php';
                console.log(id);
                $.ajax({
                    type: type,
                    url: url,
                    async: false,
                    dataType: 'JSON',
                    data: {post_id: id},
                    success: function(response){
                        console.log(response.length);
                        console.log('success');
                        if(response.id == 'error'){
                            comments = 0;
                            console.log(comments);
                            $('#commentnum'+id).html(comments);
                        }
                        else{
                            console.log(response);
                            comment = response.length;
                            comments = comment.toString();
                            console.log(comments);
                            $('#commentnum'+id).html(comments);
                        }
                    },
                    error: function(response){
                        console.log('error');
                    }
                });
            }
            return false;  
        });
    </script>
</body>
</html>