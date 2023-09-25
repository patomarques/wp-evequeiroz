<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8 offset-lg-2 mt-5">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
            if(get_post_type() == 'post'){
                get_template_part( 'template-parts/content-post', get_post_format() );
            }else{
                get_template_part( 'template-parts/content', get_post_format() );
            }

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
