<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
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
            <p class="blog-title">MY EVERYDAY MAKEUP ROUTINE</p>
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
                        <p>Hey there, gorgeous. Glad you could find your way here. The truth is that every day, we seek to appear beautiful 
                            and elegant. But we are all busy people. Women are also students, bankers, teachers, office workers, managers, 
                            and anything you can think of, we simply do not have the time for a professional makeup done each day, or even 
                            the resources. And, it really isn’t necessary to. Instead, we need a simple routine that still achieves the set 
                            goal for our appearance. However, it can prove to be challenging to establish a fixed makeup routine as our 
                            circumstances differ each day. Yet, I have found a technique that has been working really well for me. It is 
                            simple, short and easy to learn and execute. As such, I’ll be sharing my everyday makeup routine with you.
                        </p>
                        <hr />
                        <p><img src="daily_makeup_files/moisturizer.jpg" alt=""/> So, the first step I take (after the usual in the morning, 
                            of course), is <b>moisturizer application</b>. This is important to protect my skin. I move a lot during the 
                            day, and I’m frequently in the sun. If I didn’t use moisturizer, my skin would become too dry, and from there, 
                            breakouts, such as acne, could form. Thus, I apply my moisturizer on my face before any other makeup product.
                        </p>
                        <hr />
                        <p><img src="daily_makeup_files/primer.jpg" style="transform: rotate(90deg);" alt=""/>After using the moisturizer, the next thing I do, is to use a 
                            <b>primer</b> on my face. It’s important that I use a primer because it allows the makeup to sit smoothly on my face, as 
                            well as to last longer. 
                        </p>
                        <hr />
                        <p><img src="daily_makeup_files/foundations.jpg" alt=""/>At this stage, it is time to use <b>foundation</b>. I apply a very 
                            thin and even layer of foundation all over my face using either a foundation brush or a beauty sponge (whichever I 
                            find first 😄).It is critical that I use a foundation that is the same colour with my skin tone.
                        </p>
                        <hr />
                        <p><img src="daily_makeup_files/highlight.jpg" alt=""/>Sincerely I don’t <b>highlight</b> often, but I apply concealer to my 
                            problem areas like under my eyes (it’s usually darker than the rest of my face) and areas on which I have dark spots due 
                            to pimples. Unlike foundation, the concealer I use is one to two shades lighter than my skin tone and I use a beauty 
                            sponge to apply this. Then I use a translucent powder to set my highlighted area using a beauty blender. I normally apply 
                            this on my T-zone.
                        </p>
                        <hr />
                        <p><img src="daily_makeup_files/brow-define.jpg" alt=""/>For <b>brow definition</b> I go ahead and fill my brows with either a 
                            brow pencil and highlight them with a concealer using a very precise angled brush, this gives definition to my brows.
                        </p>
                        <p>Want a detailed brow tutorial? Check it out below: https://youtu.be/wX5TtjoNBvss</p>
                        <div style="overflow:hidden;position: relative;">
                            <iframe allowfullscreen frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="443px" type="text/html" src="https://www.youtube.com/embed/wX5TtjoNBvs?autoplay=0&fs=1&iv_load_policy=3&showinfo=1&rel=0&cc_load_policy=3&start=0&end=0"></iframe>
                            <div style="position: absolute;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"></small></div>
                            <style>.newst{position:relative;text-align:right;height:420px;width:520px;} @media all and (max-width:768px) {iframe {height: 240px;}} #gmap_canvas img{max-width:none!important;background:none!important}</style>
                        </div><br />
                        <hr />
                        <p><img src="daily_makeup_files/eye-shadow.jpg" alt="">When it comes to <b>eye shadow</b>, I really do not like adding color to my eyes. Particularly 
                            when there’s no occasion, and even if I wanted to, there really isn’t time. So here is a little trick I use all the time, that works 
                            wonders! I use my setting powder and apply it to my eye creasethen I use a dark face powder to contour my eyelid.That gives it a little depth. 
                            Then, to make my eyes pop a little, I use a gel eye liner to line my top lid and also apply some mascara to my lashes.
                        </p>
                        <hr />
                        <p><img src="daily_makeup_files/powder.jpg" style="transform: rotate(90deg);" alt="">Then I finish off the rest of my face with a pressed <b>powder</b> using my powder brush.</p>
                        <hr />
                        <p><img src="daily_makeup_files/lip-gloss.jpg" alt="">I use <b>lip gloss</b> because I don’t really like adding colors to my lips as it tends to attract 
                            too much attention for me.But if you do, please by all means, go ahead. I like to go with gloss, they are life savers. So, the first thing I do is to 
                            draw my lip outline using a brow pencil.Sometimes, I use the same one that I used to fill my brows, this gives my lips definition and prevents sloppy 
                            application.Then I use my lip gloss and gently rub my lips together.
                        </p>
                        <hr />
                        <p>And that is it. Finally made it to the end! Once my lips are all done, I set my face with a makeup setting spray and call it a day! Whew! Reading all 
                            these again made me feel like it takes an hour each morning, but it actually takes little or no time at all. If I have less time in the morning (we 
                            all wake late sometimes), I adjust my routine by skipping steps 3 and 4. It still looks simple, polished and most importantly beautiful, trust me. 
                            I really enjoyed sharing my daily routine with you ‘m excited to hear your experiences trying these out and establishing your own routine.
                        </p>
                        <div class="added-comments">
                            <p>I did not write this article for the sake of promoting any makeup brand. That is why I did not include any brand name in the products I listed above. 
                                If you want me to recommend brand products for you, however, or you want to know the ones I personally use let me know in the comment section and I 
                                would reply as soon as I can. Much love to you guys.
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
                          <input type="hidden" id="post_id" name="post_id" value="4">
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
