<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-12 col-sm-4">
			<div class="post-thumbnail">
				<?= showThumbnail(); ?>
			</div>
		</div>
		<div class="col-12 col-sm-8 text-justify">
			<?php 
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;				
			?>

			<header class="entry-header mb-3">
				<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php wp_bootstrap_starter_posted_on(); ?>
				</div>
				<?php
				endif; ?>
			</header>

			<?php the_excerpt();?>

			<div class="d-block text-left">
				<a href="<?= get_permalink(); ?>" class="button-link">Continue lendo...</a>
			</div>
		</div>
	</div>

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer>
</article>
