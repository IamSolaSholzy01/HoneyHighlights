<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="985530739515-m4s7l3v4k5r7fu8vbfkm6p56ir1pb88d.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Honey Highlights - Blog</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="css/blog-styles.min.css" rel="stylesheet">
    <link href="../css/icons.css" rel="stylesheet">
    <!--Modal-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="../assets/js/login-register.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <!-- Header -->
    <header class="honey-site-header">
        <div class="header-container">
            <ul>
                <a href="../index.html" class="honey-site-logo"><img src="../img/logo-dark.webp" alt="honey"></a>
                <li>
                    <!-- Menu -->
                    <nav class="honey-site-menu" id="honey-navbar-spy">
                        <div class="honey-site-menu-inner" id="honey-navbar">
                            <ul class="list-unstyled honey-menu-container">
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../about.php">About Us</a></li>
                                <li><a href="../catalogue.min.html">Catalogue</a></li>
                                <li><a href="../blog.php">Blog</a></li>
                                <li><a href="../contact.php">Contact</a></li>
                                <li id="loginLink"><a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></li>
                                <li id="logoutLink" style="display: none;"><a href="../php/logout.php">Log Out</a>
                            </ul>
                        </div>
                    </nav>
                </li>
            </ul>   
            <!-- Menu Burger -->
            <div class="col-6 col-md-8 text-right honey-menu-burger-wrap"> <a href="#" class="honey-site-nav-toggle honey-js-honey-site-nav-toggle"><i></i></a> </div>
        </div>
        
    </header>
    <!--Beginning of Modal-->
    <?php include '../php/loginmodalposts.php';?>
    <input type="hidden" id="google" name="google" value="../php/google.php">
    <section class="honey-page-section">
        <div class="container">
            <p class="blog-title">IMPORTANCE OF SKIN CARE</p>
            <div class="col-md-8 offset-md-2">
                <div class="honey-page-content text-center">
                    <div class="honey-meta-info"> <i class="fa fa-user"></i><span id="post_author"></span> <i class="fa fa-clock-o"></i><span id="post_date"></span> </div>
                </div>
            </div>
            <div>
                <hr/>
            </div>
        </div>
    </section>
    <section class="honey-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="honey-blog-items honey-single-post">
                        <div class="entry-thumb"><img src="skin_care_files/skin-care.jpg" alt="skin care"> </div>
                        <p>The power of makeup is undeniable, and for now I don’t see it being replaced when it comes 
                            to beauty enhancement. And yet, like an artist performs his art on a quality canvas for it 
                            to be appreciated, you are also applying these products on a quality surface - <b>your skin</b>. And 
                            this means, you must protect and take care of your skin, for your physical health, as well as 
                            to achieve your targeted physical appearance. This means that your makeup up routine shouldn’t 
                            be just a bath and lotion; your skincare must go beyond that. Even if you use the most expensive 
                            products, you should establish a reasonable skincare routine, one you’ll use even before you 
                            use your makeup.
                        </p>
                        <p>Here are some skincare procedures you <b>must</b> follow before any makeup application.</p>
                        <hr />
                        <p class="heading-one" style="color: #c56765;">Cleanse</p>
                        <p>This is the very first step. Cleansing helps to remove dirt and oil from the face and leaves your 
                            skin feeling very fresh.Ever experienced that relief that comes from taking a clean bath? Well, your 
                            skin experiences that each time you cleanse it. Cleansing techniques are also useful when you don’t 
                            really have access to water, but you need to clean your face. Products like micellar water, or even 
                            regular face wipes, can be used to achieve this cleansing effect. I recommend taking this step 
                            <b>always</b> before your makeup, it is that important.
                        </p>
                        <p class="heading-one" style="color: #c56765;">Moisturise</p>
                        <p>After cleansing your skin, moisturizer is the next thing you need to apply. This is a necessity as moisturizer 
                            performs two important jobs. One, it smoothens your skin which paves way for better application of your 
                            foundation and concealer. Secondly, it hydrates the skin under your makeup and makes it appear less dull. 
                        </p>
                        <p>It is also important to note that applying foundation on dry skin will make it look cakey. Hence, moisturizer 
                            should be your best friend.
                        </p>
                        <p class="heading-one" style="color: #c56765;">Prime</p>
                        <p>You may wonder - What exactly is a primer? A primer is a product that acts as a base for foundation and other makeup, 
                            and helps whatever you apply after to go on smoother and stay longer. If you are going to wear your makeup for long 
                            hours, a primer will help you achieve this, also by using a primer you can get away with less foundation.
                        </p>
                        <hr />
                        <div class="added-comments">
                            <p>I hope you enjoyed the article? If you have any question or you need further advice on skin care products, feel
                                free to drop a comment below, or <a href="../contact.php">contact me</a>. Feel free to check out other articles
                                too.
                            </p>
                        </div>
                        <hr />
                        <!--Reactions-->
                        <div class="honey-share-wrap">
                        <h3>What do you think about this post?</h3>
                        <ul class="honey-reaction-icon">
                            <i id="like" onclick="reaction(this)" style="cursor: pointer;" class="fa fa-thumbs-up"></i><span id="thumbup"></span>
                            <i id="dislike" onclick="reaction(this)" style="cursor: pointer;" class="fa fa-thumbs-down"></i><span  id="thumbdown"></span>
                            </ul>
                        </div>
                        <!-- Share Wrap -->
                        <div class="honey-share"><a href="" onclick="share();"><img src="" alt=""></a></div>
                        <div class="honey-share-wrap" style="display: none;">
                            <ul class="honey-share-icon">
                                <li><a href="post.html#"><img src="img/icons/dark_brown/facebook.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/twitter-blue.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/gmail.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/instagram-red.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/linkedin.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/whatsapp.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Comment -->
    <section class="honey-comment-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="honey-comments-wrapper">
                    <h4>There are <span class="commentnum"></span> comments</h4>
                    <input id="hidden-id" type="hidden">
                    <ul id="honey-comments" class="honey-comments-list">
                        <li>
                            <div class="honey-comment-main-level">
                                <div class="honey-comment-avatar"></div>
                                <div class="honey-comment-box">
                                    <div class="honey-comment-head" onclick="showreply(this)">
                                        <h6 class="honey-comment-name by-author"><a href="#"></a></h6><i class="fa fa-reply honey-reply-icon" onclick="replyclicked(this.id)"></i></div>
                                    <div class="honey-comment-content">
                                    <p></span><span class="honey-comment-body"></span><span class="honey-comment-time"></p>
                                    </div>
                                    <div id="reply-div">
                                    </div> 
                                    <div id="reply-input">
                                        <input class="reply-input" type="text" placeholder="reply here" name="reply">
                                        <input type="submit" class ="reply-button" value="Send" onclick="postreply()">
                                      </div>                                   
                                </div>
                            </div>
                        </li>
                        <div class="honey-reply-box">
                              <div class="honey-reply-head">
                                 <h6 class="honey-reply-name by-author"><a href="#"></a></h6>
                               </div>
                              <div class="honey-reply-content">
                                 <p class="honey-reply-body"></p>
                             </div>
                        </div>
                    </ul>
                    
                    <span id="empty"></span>
                    <ul id="honey-comments-list"></ul>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Comment Form -->
                <div class="honey-comments-form-wrapper">
                    <div class="honey-comment-form">
                        <h4>Leave a comment</h4>
                        <form action="../php/comment.php" method="post" id="ajax-form" class="form-horizontal row">
                          <input type="hidden" id="post_id" name="post_id" value="3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" id="comment-email" name="email" class="form-control" placeholder="Email" required> </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="response"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="honey-btn2" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
    <div include-html="../footer.html"></div> 
    <!-- JS -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="../js/vendor/jquery.isotope.v3.0.2.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/include.js"></script>
    <script src="../js/ajax.js"></script>
    <script>includeHTML();</script>
    <script>$(function(){event.preventDefault();subscribe();});</script>
    <script>$(function(){event.preventDefault();register();});</script>
    <script>$(function(){event.preventDefault();login();});</script>
    <script>$(function(){event.preventDefault();logout();});</script>
    <script>$(function(){loadData(); loadreaction(); });</script>
    <script>$(function(){runn();runner();});</script>
    <script>$(function(){event.preventDefault();postComment();});</script>
</body>
</html>
