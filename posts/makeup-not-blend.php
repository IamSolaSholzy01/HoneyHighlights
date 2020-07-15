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
                <a href="../index.html" class="honey-site-logo"><img src="../img/logo-dark.png" alt="honey"></a>
                <li>
                    <!-- Menu -->
                    <nav class="honey-site-menu" id="honey-navbar-spy">
                        <div class="honey-site-menu-inner" id="honey-navbar">
                            <ul class="list-unstyled honey-menu-container">
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../about.php">About Us</a></li>
                                <li><a href="../catalogue.html">Catalogue</a></li>
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
            <p class="blog-title">REASONS MAKEUP PRODUCTS DON'T BLEND</p>
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
                        <div class="padder-blog"> <!--<img src="img/blog/post.jpg" alt="Post">--> </div>
                        <p>Have you heard about blending in makeup? You’ve very likely heard a makeup artist say 
                            'ensure you blend this or that area properly'. Well, when applying products on your face, 
                            you want a seamless application. You want an effect that when someone looks at your face, 
                            they’ll be unable to tell on which area you used a contour or on which area you used a concealer.  
                            Similarly, when mixing colours on your eye lids or your lips, you need to blend the colours together. 
                            A failure to blend products well results in a sloppy, unprofessional finish, which is always 
                            contrary to the look you desire.
                        </p>
                        <p>Blending should be, and likely is, the first thing on your mind when you apply products to your 
                            face. However, has it happened that no matter how hard you try your products do not seem to blend 
                            to your skin? Depending on your situation, there are three possible reasons for this and these 
                            reasons are discussed below.
                        </p>
                        <hr />
                        <p class="heading-one" style="color: #c56765;">Fake Products</p>
                        <p>It is possible that you are using fake products, and let me just say that, my dear ladies, it is nearly 
                            impossible to blend fake products. Why? Well, because they are fake. Fake products will never give you the 
                            quality and finish that you could get from using the proper products. How then, can you identify and avoid 
                            fake products? For one, they’re usually ridiculously cheap. Also, especially when considering fake foundations 
                            and concealers, the first thing to pour out of them is usually water. So, before you purchase a makeup product, 
                            or choose a makeup brand, do research. Check reviews of users online. Or, you could even ask your makeup artist 
                            to acquire them for you, as your makeup artist is likely very experienced with these products, and has an eye 
                            for quality that comes from repeated usage.
                        </p>
                        <p class="heading-one" style="color: #c56765;">Wrong Tools</p>
                        <p>If you’re using the wrong tool for a product, girl, you’re in for a lot of stress. For example, imagine using a 
                            contour brush to apply concealer. No, no, no, it won’t work! It’s too big for your highlight area, and it will 
                            not blend. You need to learn how to use your brushes, what technique works best for you. You could even label 
                            them if you can’t easily tell them apart. Just make sure that you use the right brush. For more information, 
                            check out this article on <a href="tools-and-products.php">using the right tools and products</a>.</p>
                        <p class="heading-one" style="color: #c56765;">Different Shades</p>
                        <p>Foundation, concealers and contour come in different shades, because we all have differing skin colours. If you 
                            use the wrong shades of products for your skin, no matter how you try, even if you use original products and the 
                            right tools, they will not blend. That is just the honest truth!To solve this, test your products! before you 
                            buy them.Most beauty stores provide this opportunity, and if you still find that difficult, ask your makeup artist 
                            to get it for you; or ask her to tell you your skin shade so you can get them yourself.
                        </p>
                        <p>When it comes to makeup, the importance of blending cannot be overemphasized. I, personally, have multiple blending 
                            brushes, and its important that you have these tools to help you achieve the blend you’re looking for. It is vital.
                        </p>
                        <div class="added-comments">
                            <p>I hope you enjoyed the article? If you have any question or you need me to recommend brands for your makeup 
                                products, please let me know in the comment section below and I will reply as soon as I see your message, or
                                <a href="../contact.php">contact me</a>. You could also read my other article to get insights on 
                                <a href="tools-and-products.php">makeup tools and how to use them</a>.
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
                        <div class="honey-share-wrap">
                            <ul class="honey-share-icon">
                                <li><a href="post.html#" style="padding:8px 15px"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="post.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="post.html#"><i class="fa fa-google"></i></a></li>
                                <li><a href="post.html#" style="padding: 8px 13px"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="post.html#"><i class="fa fa-linkedin"></i></a></li>
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
                          <input type="hidden" id="post_id" name="post_id" value="2">
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
