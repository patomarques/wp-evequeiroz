jQuery(document).ready(function ($) {

    $('.content-lazy-loading__link').on('click', function () {

    });

    $('.menu-bars-fullscreen').on('click', function (e) {
        e.preventDefault();
        console.log('menu click');

        $('.menu-bars-fullscreen').toggleClass("clicked");
        $(".menu-full-custom").toggleClass("open");

        return;
    });

    if ($('.home-banner-video').length > 0) {
        var alturaContent = $('.home-banner-video').height();


        if ($('#masthead').length > 0) {
            var alturaMenu = $('#masthead').outerHeight();

            alturaContent = alturaContent - alturaMenu;
        }

        // fix on top
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > alturaContent) {
                //$('.site-header').addClass('fixed-nav');
                $('.site-header').stop(true, false).addClass('fixed-nav', { duration: 200000 });

            } else {
                $('.site-header').stop(true, false).removeClass('fixed-nav', { duration: 200000 });
            }
        });
    }

    // Establish default settings
    var parallaxElements = [];
    var windowHeight = 0;
    var speed = 4;

    var requestAnimationFrame =
        window.requestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.msRequestAnimationFrame;

    window.requestAnimationFrame = requestAnimationFrame;

    $(document).ready(function () {
        windowHeight = $(window).height();

        //touch event check
        var touchSupported =
            "ontouchstart" in window ||
            (window.DocumentTouch && document instanceof DocumentTouch);

        if (touchSupported) {
            $(window).bind("touchmove", function (e) {
                var scroll = e.currentTarget.scrollY;
                Parallax(scroll);
            });
        } else {
            $(window).bind("scroll", function (e) {
                var scroll = $(this).scrollTop();
                Parallax(scroll);
            });
        }

        $(window).resize(function () {
            windowHeight = $(window).height();
        });
    });

    function Parallax(scrollTop) {
        // for each of content parallax element
        $('[data-type="parallax"]').each(function () {
            // Save a reference to the element
            var $this = $(this);
            var speed = $this.data("speed") || 0;
            var offset = $this.offset().top;
            var height = $this.outerHeight(true);

            // Check if above or below viewport
            if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
                return;
            }

            var yPos = Math.round((scrollTop - offset) / speed);

            // Apply the Y Position to Set the Parallax Effect
            window.requestAnimationFrame(function () {
                $this.css("transform", "translate3d(0, " + yPos + "px, 0)");
                $this.css("-webkit-transform", "translate3d(0, " + yPos + "px, 0)");
            });
        });
    }


    //image lightbox
    $(function () {
        var $gallery = $('.content-lazy-loading a').simpleLightbox();

        $gallery.on('show.simplelightbox', function () { })
            .on('shown.simplelightbox', function () {
                // console.log('Shown');
            })
            .on('close.simplelightbox', function () {
                // console.log('Requested for closing');
            })
            .on('closed.simplelightbox', function () {
                // console.log('Closed');
            })
            .on('change.simplelightbox', function () {
                // console.log('Requested for change');
            })
            .on('next.simplelightbox', function () {
                // console.log('Requested for next');
            })
            .on('prev.simplelightbox', function () {
                // console.log('Requested for prev');
            })
            .on('nextImageLoaded.simplelightbox', function () {
                // console.log('Next image loaded');
            })
            .on('prevImageLoaded.simplelightbox', function () {
                // console.log('Prev image loaded');
            })
            .on('changed.simplelightbox', function () {
                // console.log('Image changed');
            })
            .on('nextDone.simplelightbox', function () {
                // console.log('Image changed to next');
            })
            .on('prevDone.simplelightbox', function () {
                // console.log('Image changed to prev');
            })
            .on('error.simplelightbox', function (e) {
                // console.log('No image found, go to the next/prev');
                // console.log(e);
            });
    });

    $('ul.dropdown-menu').bind('mouseleave', function () {
        var dropdown = $(this);
        var liParent = dropdown.parent();

        var li = liParent[0].id;
        if ($('#' + li).hasClass('show')) {
            liParent.removeClass('show');
            console.log(liParent);
            $('li.nav-item').removeClass('show');
        }
    });

    // window.onscroll = menuFixed;

    // function menuFixed() {
    //     console.log('menu fixed check');
    //     //document.querySelector('.site-header').toggleClass('.site-header--fixed');
    // }

});