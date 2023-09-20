jQuery(document).ready(function ($) {

    $('.menu-bars-fullscreen').on('click', function (e) {
        e.preventDefault();

        $('.menu-bars-fullscreen').toggleClass("clicked");
        $(".menu-full-custom").toggleClass("open");

        return;
    });

    // fix on top
    $(window).bind('scroll', function () {
        let alturaContent = $('.site-header').outerHeight();
        let bodyHeight = $('#page').outerHeight();
        
        if ($(window).scrollTop() > alturaContent && bodyHeight > 1000) {
            $('.site-header').stop(true, false).addClass('fixed-nav', { duration: 200000 });
        } else {
            $('.site-header').stop(true, false).removeClass('fixed-nav', { duration: 200000 });
        }
    });

    //image lightbox
    $(function () {
        var $gallery = $('.content-lazy-loading a').simpleLightbox();
        var $gallery = $('.grid .grid-item a').simpleLightbox();
        
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
});
