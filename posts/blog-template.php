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
            <p class="blog-title">POST TITLE</p>
            <div class="col-md-8 offset-md-2">
                <div class="honey-page-content text-center">
                    <div class="honey-meta-info"> <img src="img/icons/dark_brown/user.png" class="icon xsm" alt=""></i><span id="post_author"></span> <img src="img/icons/dark_brown/clock.png" class="icon xsm" alt=""></i><span id="post_date"></span> </div>
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
                        <div class="entry-thumb"> <img src="img/blog/post.jpg" alt="Post"> </div>
                        <p class="heading-one" style="color: #c56765;">Section Title</p>
                        <p>Fusce non ornare quam. Morbi imperdiet mauris eu nunc feugiat, sed accumsan ex tristique. Praesent tincidunt, purus quis vulputate aliquet, tellus massa viverra nisl, in tempus ipsum libero et nunc. Maecenas nulla velit, vehicula eu arcu et, ultrices dapibus lectus. Maecenas gravida efficitur nunc, faucibus facilisis quam tempus in. Integer rutrum lectus vel nisl laoreet viverra.</p>
                        <p>Pellentesque id lobortis elit, nec venenatis eros. Suspendisse aliquam porttitor libero non molestie. Duis ligula enim, interdum et dui eget, pretium venenatis lectus. Donec posuere iaculis libero vel ultricies. Donec massa arcu, euismod ut justo id, rutrum mattis eros. Morbi at porta lacus, vel sagittis lacus. Proin at lectus imperdiet, interdum neque a, ullamcorper sapien.</p>
                        <p>Sed cursus sem ac augue faucibus bibendum. Nulla eget consequat mi. Maecenas dignissim, erat at mattis bibendum, elit mi mollis nisi, et sagittis dolor eros eget diam. Pellentesque id ipsum a ex porttitor interdum. In at nibh egestas, porttitor quam sed, placerat risus. Pellentesque sollicitudin finibus enim, vel convallis massa porta nec. Proin at risus eget mi imperdiet gravida. Maecenas eget iaculis justo. Aliquam turpis ipsum, finibus varius egestas eget, tempus ac velit. Sed non magna pretium, venenatis nisl quis, vulputate nibh.</p>
                        <hr />
                        <!--Reactions-->
                        <div class="honey-share-wrap">
                        <h3>What do you think about this post?</h3>
                            <ul class="honey-reaction-icon">
                            <a id="like" onclick="reaction(this)" style="cursor: pointer;"><img src="img/icons/dark_brown/thumb-up.png" alt=""></a><span id="thumbup"></span>
                            <a id="dislike" onclick="reaction(this)" style="cursor: pointer;"><img src="img/icons/dark_brown/thumb-down.png" alt=""></a><span id="thumbdown"></span>
                            </ul>
                        </div>
                        <!-- Share Wrap -->
                        <div class="honey-share"><a onclick="share();"><img src="img/icons/dark_brown/share.png" alt="share" class="icon sm">Share post</a></div>
                        <div class="honey-share-wrap share-icons" style="display: none;">
                            <ul class="honey-share-icon">
                                <li><a href="post.html#"><img src="img/icons/dark_brown/facebook.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/twitter-blue.png" alt=""></a></li>
                                <li><a href="post.html#"><img src="img/icons/dark_brown/gmail.png" alt="gmail"></a></li>
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
                          <input type="hidden" id="post_id" name="post_id" value="post_id">
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
    <script src="../js/ajax.min.js"></script>
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
