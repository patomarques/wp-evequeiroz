<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<header class="entry-header mb-5">
	<?php
	if (is_single()):
		the_title('<h1 class="title-blog-post">', '</h1>');
	else:
		the_title('<h2 class="title-blog-post"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
	endif;

	if ('post' === get_post_type()): ?>
		<div class="entry-meta text-center">
			<i class="fa fa-clock-o"></i> Postado em
			<?php the_date(); ?>
		</div>
	<?php endif; ?>
</header>

<div class="row">
	<article id="post-<?php the_ID(); ?>" class="col-12 col-lg-7">

		<div class="post-thumbnail">

			<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail();
				} else { 
					echo showNoImage();
				 } ?>

		</div>
		<div class="post-tags">
			<ul class="post-thumbnail__categories list-inline">
				<?php
				$categories = get_the_category();

				foreach ($categories as $category) {

					if ($category->category_nicename != 'sem-categoria') { ?>

						<li class="list-inline-item tags">
							<a href="<?= esc_url(get_category_link($category->term_id)) ?>"
								class="grid-post__categories__item__link">
								<?= $category->name ?>
							</a>
						</li>

					<?php } ?>

				<?php } ?>
			</ul>
		</div>
		<div class="entry-content">
			<?php
			if (is_single()):
				the_content();
			else:
				the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
			endif;

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-bootstrap-starter'),
					'after' => '</div>',
				)
			);
			?>
		</div>

		<footer class="entry-footer">
			<?php wp_bootstrap_starter_entry_footer(); ?>
		</footer>
	</article>
	<div class="col-12 col-lg-4 offset-lg-1">
		<?php get_sidebar(); ?>
	</div>
</div>