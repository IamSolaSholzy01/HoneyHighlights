﻿/*var loader = function() {
    setTimeout(function() { 
        if($('#ftco-loader').length > 0) {
            $('#ftco-loader').removeClass('show');
        }
    }, 1500);
};
loader();*/


(function($) {
    "use strict";

    $(window).on('load', function() {
        $('body').addClass('loaded');
    });
    /* *** Menu Navigation *** */
    var OnePageNav = function() {
        var navToggler = $('.honey-js-honey-site-nav-toggle');
        $(".smoothscroll[href^='#'], #honey-navbar ul li a[href^='#']").on('click', function(e) {
            e.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, 'easeInOutExpo', function() {
                window.location.hash = hash;
            });
        });
        $("#honey-navbar ul li a[href^='#']").on('click', function(e) {
            if (navToggler.is(':visible')) {
                navToggler.click();
            }
        });
    };
    OnePageNav();
    $(window).scroll(function() {
        var $this = $(this),
            st = $this.scrollTop(),
            navbar = $('.honey-site-header'),
            scrollprogress = $('.scrollprogress');
        if (st > 150) {
            if (!navbar.hasClass('scrolled')) {
                navbar.addClass('scrolled');
            }
        }
        if (st < 150) {
            if (navbar.hasClass('scrolled')) {
                navbar.removeClass('scrolled sleep');
            }
        }
        if (st > 350) {
            if (!navbar.hasClass('awake')) {
                navbar.addClass('awake');
            }
        }
        if (st < 350) {
            if (navbar.hasClass('awake')) {
                navbar.removeClass('awake');
                navbar.addClass('sleep');
            }
        }
    });
    $('.honey-js-honey-site-nav-toggle').on('click', function(e) {
        var $this = $(this);
        e.preventDefault();
        if ($('body').hasClass('menu-open')) {
            $this.removeClass('active');
            $('.honey-site-menu .honey-site-menu-inner > ul > li').each(function(i) {
                var that = $(this);
                setTimeout(function() {
                    that.removeClass('is-show');
                }, i * 100);
            });
            setTimeout(function() {
                $('.honey-site-menu').removeClass('honey-site-menu-show');
            }, 800);
            $('body').removeClass('menu-open');
        } else {
            $('.honey-site-menu').addClass('honey-site-menu-show');
            $this.addClass('active');
            $('body').addClass('menu-open');
            setTimeout(function() {
                $('.honey-site-menu .honey-site-menu-inner > ul > li').each(function(i) {
                    var that = $(this);
                    setTimeout(function() {
                        that.addClass('is-show');
                    }, i * 100);
                });
            }, 500);
        }
    });
    $('nav .dropdown').hover(function() {
        var $this = $(this);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        $this.find('.dropdown-menu').addClass('show');
    }, function() {
        var $this = $(this);
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        $this.find('.dropdown-menu').removeClass('show');
    });
    $('#dropdown04').on('show.bs.dropdown', function() {
        ////console.log('show');
    });
    /* *** Main Slider *** */
    $('.honey-main-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        items: 1,
        animateIn: "fadeIn",
        animateOut: "fadeOut"
    });
    /* *** Catalogue *** */
    (function() {
        $(document).on("click", ".click-to-expand", function() {
            var imageSrc = $(this).parents(".image-grid").find("img").attr("src");
            $(".js-modal-image").attr("src", imageSrc);
        });
    })();

    /* *** Isotope Active *** */
    $('.catalogue-items').imagesLoaded(function() {
        // Add isotope click function
        $('.honey-catalogue-filter li').on('click', function() {
            $(".honey-catalogue-filter li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".catalogue-items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
        $(".catalogue-items").isotope({
            itemSelector: '.single-item',
            layoutMode: 'masonry',
        });
    });
    /* *** Testimonial Carousel *** */
    $('#testimonial-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        items: 1,
        nav: false
    });
    /* *** Button *** */
    var buttons = document.querySelectorAll(".honey-btn .honey-btn2");
    for (var i = 0; i < buttons.length; i++) {
        var button = buttons[i];
        button.addEventListener("click", function() {
            if (!button.classList.contains("active")) button.classList.add("active");
            else button.classList.remove("active");
        });
    }
})(jQuery);