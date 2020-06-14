<?php get_header(); ?>

<?php $graffiti = new WP_Query( 'post_type=graffiti&orderby=data&order=DESC&posts_per_page=999' ); ?>
<?php $lambes = new WP_Query( 'post_type=lambe-lambe-stickers&orderby=data&order=DESC&posts_per_page=999' ); ?>

    <div class="col-sm-12 text-center">
         <h1 class="title-tag"><?php echo get_the_title(); ?></h1>
    </div>
    <div class="gallery">
        <div class="grid">
            <?php while ( $graffiti->have_posts() ) : $graffiti->the_post(); ?>

                <div class="grid-item">
                    <a href="<?php echo the_post_thumbnail_url(); ?>"><?php echo the_post_thumbnail(); ?></a>
                </div>
            <?php endwhile; ?>
            
            <?php while ( $lambes->have_posts() ) : $lambes->the_post(); ?>

                <div class="grid-item">
                    <a href="<?php echo the_post_thumbnail_url(); ?>"><?php echo the_post_thumbnail(); ?></a>
                </div>
            <?php endwhile; ?>
            
            
        </div>
    </div>
    

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/isotope-layout/dist/isotope.pkgd.min.js"></script>
<!--<script src="<?php /*echo get_template_directory_uri(); */?>/bower_components/packery/dist/packery.pkgd.min.js"></script>-->
<script>
    jQuery(document).ready(function( $ ) {
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


    jQuery(window).load(function( $ ) {
        var elem = document.querySelector('.grid');
        var iso = new Isotope( elem, {
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });

// element argument can be a selector string
//   for an individual element
        var iso = new Isotope( '.grid', {
            // options
        });
    });
</script>

<?php get_footer(); ?>
