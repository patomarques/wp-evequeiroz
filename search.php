<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */
//wp_redirect( 404 );
//exit();

get_header(); ?>

<section id="primary" class="content-area content-section content-search container mt-5">
	<div class="row">
		<main id="main" class="site-main col-12 col-md-8 col-lg-7" role="main">

			<?php
			if (have_posts()): ?>

				<header class="page-header mb-5">
					<h1 class="page-title">
						<?php printf(esc_html__('Resultados da pesquisa para: %s', 'wp-bootstrap-starter'), '<span class="bold">' . get_search_query() . '</span>'); ?>
					</h1>
				</header>

				<?php
				while (have_posts()):
					the_post();

					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();

			else:

				get_template_part('template-parts/content', 'none');

			endif; ?>

		</main>
		<div class="col-12 col-lg-4 offset-lg-1">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php
get_footer();