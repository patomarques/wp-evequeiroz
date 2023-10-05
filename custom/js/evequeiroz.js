jQuery(document).ready(function ($) {

    $('.menu-bars-fullscreen').on('click', function (e) {
        e.preventDefault();

        $('.menu-bars-fullscreen').toggleClass("clicked");
        $(".menu-full-custom").toggleClass("open");

        return;
    });

    let bodyHeight = $('#page').outerHeight();

    if (bodyHeight > 1200) {
        // fix on top
        $(window).bind('scroll', function () {
            let alturaContent = $('.site-header').outerHeight();

            if ($(window).scrollTop() > alturaContent) {
                $('.site-header').stop(true, false).addClass('fixed-nav', { duration: 200000 });
            } else {
                $('.site-header').stop(true, false).removeClass('fixed-nav', { duration: 200000 });
            }
        });
    } else {
        $('#page').css('margin-top', '120px');
        $('.site-header').stop(true, false).addClass('fixed-nav', { duration: 200000 });
    }

    //image lightbox
    $(function () {
        var $galleryHandpoke = $('.content-lazy-loading a').simpleLightbox();
        var $galleryGrid = $('.grid .grid-item a').simpleLightbox();

        loadLightBox($galleryHandpoke);
        loadLightBox($galleryGrid);
    });

    function loadLightBox(element) {
        element.on('show.simplelightbox', function(){});
    }

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
