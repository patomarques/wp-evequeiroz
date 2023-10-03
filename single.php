<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
            if(get_post_type() == 'post'){
                get_template_part( 'template-parts/content-post', get_post_format() );
            }else{
                get_template_part( 'template-parts/content', get_post_format() );
            }

			the_post_navigation();

		endwhile; 
		?>

	</main>	
</section>

<?php
get_footer();
