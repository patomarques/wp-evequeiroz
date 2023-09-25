<!--
Template Name: Sobre Mim
-->

<?php get_header(); ?>
<div class="site-content site-individual content-main" id="page-sobre">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag">Sobre Mim</h1>
            </div>
        </div>
        <div class="row">
            <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 text-justify">
                    <div class="content-text">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 text-center hidden">
                    <?//php echo get_the_post_thumbnail(); ?>
                    <div class="about-me js-tilt" data-tilt>
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/custom/libs/tilt.js/src/tilt.jquery.js"></script>
<script>

    jQuery(document).ready(function( $ ) {
        $('.wp-block-image img').tilt({
            axis: 'x',
            speed: 1000,
            transition: true
        });
    });

</script>
<?php get_footer(); ?>
