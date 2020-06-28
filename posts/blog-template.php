<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="985530739515-m4s7l3v4k5r7fu8vbfkm6p56ir1pb88d.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Honey Highlights - Blog</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/themify-icons.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

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
        <div class="container">
            <ul>
                <a href="../index.html" class="honey-site-logo"><img src="../img/logo-dark.png" alt="honey"></a>
                <li>
                    <!-- Menu -->
                    <nav class="honey-site-menu" id="honey-navbar-spy">
                        <div class="honey-site-menu-inner" id="honey-navbar">
                            <ul class="list-unstyled">
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../about.php">About Us</a></li>
                                <li><a href="../services.html">Services</a></li>
                                <li><a href="../catalogue.html">Catalogue</a></li>
                                <li><a href="../blog.php">Blog</a></li>
                                <li><a href="../contact.php">Contact</a></li>
                                <li><a  data-toggle="modal" id="loginLink" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></li>
                                <li><a href="../php/logout.php" id="logoutLink" style="display: none;">Log Out</a>
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
            <div class="col-md-8 offset-md-2">
                <div class="honey-page-content text-center">
                    <h2>POST TITLE</h2>
                    <div class="honey-meta-info"> <i class="fa fa-users"></i><span id="post_author"></span> <i class="fa fa-clock-o"></i><span id="post_date"></span> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="honey-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="honey-blog-items honey-single-post">
                        <div class="entry-thumb"> <img src="img/blog/post.jpg" alt="Post"> </div>
                        <p>Fusce non ornare quam. Morbi imperdiet mauris eu nunc feugiat, sed accumsan ex tristique. Praesent tincidunt, purus quis vulputate aliquet, tellus massa viverra nisl, in tempus ipsum libero et nunc. Maecenas nulla velit, vehicula eu arcu et, ultrices dapibus lectus. Maecenas gravida efficitur nunc, faucibus facilisis quam tempus in. Integer rutrum lectus vel nisl laoreet viverra.</p>
                        <p>Pellentesque id lobortis elit, nec venenatis eros. Suspendisse aliquam porttitor libero non molestie. Duis ligula enim, interdum et dui eget, pretium venenatis lectus. Donec posuere iaculis libero vel ultricies. Donec massa arcu, euismod ut justo id, rutrum mattis eros. Morbi at porta lacus, vel sagittis lacus. Proin at lectus imperdiet, interdum neque a, ullamcorper sapien.</p>
                        <p>Sed cursus sem ac augue faucibus bibendum. Nulla eget consequat mi. Maecenas dignissim, erat at mattis bibendum, elit mi mollis nisi, et sagittis dolor eros eget diam. Pellentesque id ipsum a ex porttitor interdum. In at nibh egestas, porttitor quam sed, placerat risus. Pellentesque sollicitudin finibus enim, vel convallis massa porta nec. Proin at risus eget mi imperdiet gravida. Maecenas eget iaculis justo. Aliquam turpis ipsum, finibus varius egestas eget, tempus ac velit. Sed non magna pretium, venenatis nisl quis, vulputate nibh.</p>
                        <hr />
                        <!--Reactions-->
                        <div class="honey-share-wrap">
                        <h3>What do you think about this post?</h3>
                            <ul class="honey-reaction-icon">
                            <i onclick="reaction(this)" class="fa fa-thumbs-o-up"></i><span id="like"></span>
                            <i onclick="reaction(this)" class="fa fa-thumbs-o-down"></i><span  id="dislike"></span>
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
                                        <p class="honey-comment-body"></p>
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
                          <input type="hidden" id="post_id" name="post_id" value="1">
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
    <h2>Subscribe to our mailing list now <br> Be the first to know once a blog post is dropped</h2>

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
    <script src="../js/vendor/owl.carousel.min.js"></script>
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
    <script>$(function(){loadData(); });</script>
    <script>$(function(){runn();runner();});</script>
    <script>$(function(){event.preventDefault();postComment();});</script>
</body>
</html>
