<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area container">
	<div class="row">
		<div class="col-12 col-md-8 col-lg-7">
			<main id="main" class="site-main" role="main">

				<?php
				if (have_posts()): ?>

					<header class="page-header">
						<?php
						the_archive_title('<h1 class="page-title">', '</h1>');
						the_archive_description('<div class="archive-description">', '</div>');
						?>
					</header>

					<?php
					while (have_posts()):
						the_post();
						get_template_part('template-parts/content', get_post_format());
					endwhile;

					the_posts_navigation();

				else:

					get_template_part('template-parts/content', 'none');

				endif; ?>

			</main>
		</div>
		<div class="col-12 col-md-4 offset-lg-1">
			<?php get_sidebar(); ?>
		</div>
	</div>

</section>

<?php
get_footer();