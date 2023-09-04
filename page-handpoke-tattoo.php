<?php get_header(); ?>

<?php $tattos = new WP_Query( 'post_type=handpoke-tatto&orderby=title&order=ASC&posts_per_page=999' ); ?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag"><?php echo the_title(); ?></h1>
            </div>
        </div>
        <div class="gallery">
            <div class="grid">
                <?php while ( $tattos->have_posts() ) : $tattos->the_post(); ?>

<<<<<<< HEAD
                    <div class="grid-item">
                        <a href="<?php echo the_post_thumbnail_url(); ?>"><?php echo the_post_thumbnail(); ?></a>
                    </div>
=======
                <div class="grid-item">
                    <a
                        href="<?php echo the_post_thumbnail_url('full'); ?>"><?php echo the_post_thumbnail('medium_large'); ?></a>
                </div>
>>>>>>> main
                <?php endwhile; ?>
            </div>
            <!--<div class="grid-item grid-item--width2"></div>-->
        </div>
    </div>
</div>


<<<<<<< HEAD
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/isotope-layout/dist/isotope.pkgd.min.js"></script>
<!--<script src="<?php /*echo get_template_directory_uri(); */?>/bower_components/packery/dist/packery.pkgd.min.js"></script>-->
<script>
    jQuery(document).ready(function( $ ) {
=======
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/isotope-layout/dist/isotope.pkgd.min.js">
</script>
<!--<script src="<?php /*echo get_template_directory_uri(); */?>/bower_components/packery/dist/packery.pkgd.min.js"></script>-->
<script>
    jQuery(document).ready(function ($) {
>>>>>>> main
        /* $('.grid').isotope({
         // options
         itemSelector: '.grid-item',
         layoutMode: 'mansory'
         /!*,
         percentPosition: true,
         gutter: '.grid',
         columnWidth: '.grid-item'*!/
         });*/
    });


<<<<<<< HEAD
    jQuery(window).load(function( $ ) {
        var elem = document.querySelector('.grid');
        var iso = new Isotope( elem, {
=======
    jQuery(window).load(function ($) {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
>>>>>>> main
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });

        // element argument can be a selector string
        //   for an individual element
<<<<<<< HEAD
        var iso = new Isotope( '.grid', {
=======
        var iso = new Isotope('.grid', {
>>>>>>> main
            // options
        });
    });
</script>
<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> main
