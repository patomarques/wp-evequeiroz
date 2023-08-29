<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <section id="home-quem-sou" class="content-section">
        <div class="container">
            <?php

            $about_me   = "";
            $photo_me   = "";

            // query for the about page
            $your_query = new WP_Query( 'pagename=home' );
            // "loop" through query (even though it's just one page)
            while ( $your_query->have_posts() ) : $your_query->the_post();
                $about_me   = get_the_content();
                $photo_me   = get_the_post_thumbnail();
            endwhile;

            wp_reset_postdata();
            ?>
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-4 text-center">
                    <div class="js-tilt" data-tilt>
                        <?= $photo_me ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 offset-lg-1 col-lg-7 text-center">
                    <p class="about-me-description">
                        <?= $about_me ?>
                    </p>
                    <a href="<?php echo get_site_url(); ?>/sobre-mim" class="button-effect">Continue Lendo...</a>
                </div>
            </div>
        </div>
    </section>

</div></div>
<section id="home-trampos" class="content-full clearfix">
    <?php
        $thumb_1    = "";
        $thumb_2    = "";
        $thumb_3    = "";

        $t1_query = new WP_Query( 'pagename=handpoke-tattoo');
        $t2_query = new WP_Query( 'pagename=street-art');
        $t3_query = new WP_Query( 'pagename=ilustracao');

        while ( $t1_query->have_posts() ) : $t1_query->the_post();          
            $thumb_1   = get_the_post_thumbnail();
        endwhile;

        wp_reset_postdata();
        while ( $t2_query->have_posts() ) : $t2_query->the_post();
            $thumb_2   = get_the_post_thumbnail();
        endwhile;

        wp_reset_postdata();
        while ( $t3_query->have_posts() ) : $t3_query->the_post();
            $thumb_3   = get_the_post_thumbnail();
        endwhile;

        wp_reset_postdata();

    ?>

    <div class="grid">
        <a href="<?php echo get_site_url(); ?>/handpoke-tattoo" class="link-trampos">
            <figure class="effect-negahamburguer">
                <?= $thumb_1 ?>
                <figcaption>
                    <h2>Handpoke</h2>
                    <p>Tattoo</p>
                </figcaption>
            </figure>
        </a>
        <a href="<?php echo get_site_url(); ?>/street-art" class="link-trampos">
            <figure class="effect-negahamburguer">
                <?= $thumb_2 ?>
                <figcaption>
                    <h2>Street</h2>
					<p>Art</p>
                </figcaption>
            </figure>
        </a>
    
        <a href="<?php echo get_site_url(); ?>/ilustracao" class="link-trampos">
            <figure class="effect-negahamburguer">
                <?= $thumb_3 ?>
                <figcaption>
                    <h2>Ilustração<span></span></h2>
                </figcaption>
            </figure>
        </a>
    </div>
</section>
</div>

    <script src="<?php echo get_template_directory_uri(); ?>/custom/libs/tilt.js/src/tilt.jquery.js"></script>
    <script>

        jQuery(document).ready(function( $ ) {
            $('.js-tilt').tilt({
                axis: 'x',
                speed: 1500,
                transition: true
            });
        });

    </script>
<?php
get_footer();
