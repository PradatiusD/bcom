jQuery(function($) {
    "use strict";


    /**
     * Initialization of Slicknav
     */
     $('#mainnav').slicknav({
        closeOnClick: true,
        allowParentLinks: true,
        prependTo: '#header',
        closedSymbol: '<i class="fa fa-plus"></i>',
        openedSymbol: '<i class="fa fa-minus"></i>',
    });
     $('.navbar-toggler').on('click', function() {
        $(this).toggleClass('in');
        $('.slicknav_menu').toggleClass('show');
    });
    $('.slicknav_nav').removeClass('slicknav_hidden').change(['aria-hidden="false"']).show();
    $('.slicknav_btn').remove();


    /**
     * Side Menu
     */
    $('#sidemenu_toggle').on('click', function() {
        $('.side-menu').addClass('side-menu-active');
        $('#close_side_menu').fadeIn(700);
    })

    $('#close_side_menu').on('click', function() {
        $('.side-menu').removeClass('side-menu-active');
        $(this).fadeOut(400);
    });

    $('#btn_sideNavClose').on('click', function() {
        $('.side-menu').removeClass('side-menu-active');
        $('#close_side_menu').fadeOut(300);
    });


    /**
     * Bootstrap Scrollspy
     */
    $('body').scrollspy({
        offset: 65
    });


    /**
     * Window Load Event
     */
    $(window).on('load', function(){

        //Preloader
        $('#pageLoad').fadeOut('fast');

        //smooth scroll to anchor
        $('a.nav-link[href*=#]:not([href=#]), a.scroll-indicator[href*=#]:not([href=#]), #view-more[href*=#]:not([href=#]), .logo[href*=#]:not([href=#]), #scroll_to_id[href*=#]:not([href=#])').on('click', function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if ($(window).width() >= 992) {
                    if (target.length) {
                        $('html, body').animate({ scrollTop: target.offset().top - 65 + 'px' }, 1000, 'easeInOutExpo');
                        return false;
                    }
                } else  {
                    if (target.length) {
                        $('html, body').animate({ scrollTop: target.offset().top }, 1000, 'easeInOutExpo');
                        return false;
                    }
                }
            }
        });

    });


    /**
     * Window Load Event
     */
    $(window).on('scroll', function(){
        //Sticky Header
        if ($(document).scrollTop() < $("#header").height()) {
            $('#header').removeClass('fixed-position');
            $('#header.header-bg-light').removeClass('bg-light');
            $('#header.header-bg-light .navbar').addClass('navbar-dark').removeClass('navbar-light');
            $('#header.header-bg-light navbar').removeClass('navbar-dark');
            $('#header.header-bg-dark').removeClass('bg-dark');
        } else{
            $('#header').addClass('fixed-position');
            $('#header.header-bg-light').addClass('bg-light')
            $('#header.header-bg-light .navbar').removeClass('navbar-dark').addClass('navbar-light');
            $('#header.header-bg-dark').addClass('bg-dark');

        }

        //slick nav remove when scroll page
        $('.slicknav_menu').removeClass('show');

    });


    /**
     * Background image will updater as window resize
     */
    $(window).on('load resize orientationchange', function() {
        setTimeout(function() {
            $(window).trigger('fontresize');
            $('.bg-stretch').each(function() {
                var container = $(this),
                    img = container.find('img');
                ImageStretcher.resizeImage(img, container);
            });
        }, 200);

        var ImageStretcher = {
            getDimensions: function(data) {
                // calculate element coords to fit in mask
                var ratio = data.imageRatio || (data.imageWidth / data.imageHeight),
                    slideWidth = data.maskWidth,
                    slideHeight = slideWidth / ratio;

                if (slideHeight < data.maskHeight) {
                    slideHeight = data.maskHeight;
                    slideWidth = slideHeight * ratio;
                }
                return {
                    width: slideWidth,
                    height: slideHeight,
                    top: (data.maskHeight - slideHeight) / 2,
                    left: (data.maskWidth - slideWidth) / 2
                };
            },
            getRatio: function(image) {
                if (image.prop('naturalWidth')) {
                    return image.prop('naturalWidth') / image.prop('naturalHeight');
                } else {
                    var img = new Image();
                    img.src = image.prop('src');
                    return img.width / img.height;
                }
            },
            imageLoaded: function(image, callback) {
                var self = this;
                var loadHandler = function() {
                    callback.call(self);
                };
                if (image.prop('complete')) {
                    loadHandler();
                } else {
                    image.one('load', loadHandler);
                }
            },
            resizeHandler: function() {
                var self = this;
                $.each(this.imgList, function(index, item) {
                    if (item.image.prop('complete')) {
                        self.resizeImage(item.image, item.container);
                    }
                });
            },
            resizeImage: function(image, container) {
                this.imageLoaded(image, function() {
                    var styles = this.getDimensions({
                        imageRatio: this.getRatio(image),
                        maskWidth: container.width(),
                        maskHeight: container.height()
                    });
                    image.css({
                        width: styles.width,
                        height: styles.height,
                        marginTop: styles.top,
                        marginLeft: styles.left
                    });
                });
            },
            add: function(options) {
                var container = $(options.container ? options.container : window),
                    image = typeof options.image === 'string' ? container.find(options.image) : $(options.image);

                // resize image
                this.resizeImage(image, container);

                // add resize handler once if needed
                if (!this.win) {
                    this.resizeHandler = $.proxy(this.resizeHandler, this);
                    this.imgList = [];
                    this.win = $(window);
                    this.win.on('resize orientationchange', this.resizeHandler);
                }

                // store item in collection
                this.imgList.push({
                    container: container,
                    image: image
                });
            }
        };
    });


    /**
     * jqBootstrapValidation and ajax for contact form
     */
    $("#contactUs input,#contactUs textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault();
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var firstName = name;

            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }

            $.ajax({
                url: "././php/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },

                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong> your message has been sent successfully. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },

                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },

        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").on('click', function(e) {
        e.preventDefault();
        $(this).tab("show");
    });

    /*When clicking on Full hide fail/success boxes */
    $('#name').on('focus', function() {
        $('#success').html('');
    });


    /**
     * Initialization of Same Height Plugin
     */
    $('body').addClass('js-ready');
    var byRow = $('body').hasClass('js-ready');

    $('.same-height').each(function() {
        $('.height').matchHeight({
            byRow: byRow
        });
    });


    /**
     * Initialization of Wow Script
     */
    new WOW().init();


    /**
     * Initialization of Flex Slider Plugin
     */
    $('.flexslider').flexslider({
        animation: "fade",
        prevText: "",
        nextText: "",
        controlNav: true,
        directionNav: false,
        slideshowSpeed: 30000,
        animationSpeed: 2500,
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });


    /**
     * Initialization of owl Carousel
     */
     //Call to client item slide
    var owl = $(".client-list");
    owl.owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [768, 4],
        itemsTabletSmall: true,
        itemsMobile: [479, 4],
        navigation: false,
        pagination: false,
        autoPlay: true
    });

    //Call to team item slide
    var owl = $(".team-list");
    owl.owlCarousel({
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [768, 3],
        itemsTabletSmall: true,
        itemsMobile: [479, 3],
        navigation: false,
        pagination: true,
        navigationText: ["<i class='glyphicon glyphicon-menu-left'></i>", "<i class='glyphicon glyphicon-menu-right'></i>"],
    });

    //Call to review item slide
    var owl = $("#review-list");
    owl.owlCarousel({
        items: 1,
        navigationText: ["", ""],
        navigation: true,
        singleItem: true,
    });


    /**
     * Initialization of counter plugin
     */
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });


    /**
     * Initialization of msnry  and imagesLoaded  script
     */
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
    });
    $grid.imagesLoaded().progress(function() {
        $grid.masonry();
    });


    /**
     * Initialization of slimScroll
     */
    $(function() {
        $('.inner-wrapper').slimScroll({
            height: '100%',
            allowPageScroll: true,
            opacity: 0,
        });
    });


    /**
     * Initialization of magnificPopup
     */
    //magnificPopup image gallery
    $('.lightbox').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('data-title') + '&middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank"></a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });


    // magnific video Popup 
    $('#video_popup').magnificPopup({
        type: 'iframe',

        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '<div class="mfp-title">Some caption</div>' +
                '</div>'
        },
        callbacks: {
            markupParse: function(template, values, item) {
                values.title = item.el.attr('title');
            }
        }

    });


    /**
     * Initialization of Jquery Filterizr
     */

    //Filterizr sorting nav
    $('.sorting-nav ul li').on('click', function() {
        $('.sorting-nav ul li').removeClass('active');
        $(this).addClass('active');
    });

    //Filterizr default
    if ($('.filtr-container') && $('.filtr-container').length) {
        $('.filtr-container').imagesLoaded(function() {
            $('.filtr-container').filterizr({

                layout: 'sameSize'
            });
        });
    }

    //Filterizr  packed layout
    if ($('.filtr-container.packed') && $('.filtr-container.packed').length) {
        $('.filtr-container').imagesLoaded(function() {
            $('.filtr-container.packed').filterizr({
                layout: 'packed'
            });
        });
    }



}, 'jQuery');