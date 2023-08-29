<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12 text-center">
		<main id="main" class="site-main page-not-found" role="main">

			<section class="error-404 not-found">
                <p class="error404-label">404</p>
				<header class="page-header">
					<h1 class="title-not-found"><?php esc_html_e( 'Oxe, página não encontrada!', 'wp-bootstrap-starter' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<!--<p><?php /*esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-bootstrap-starter' ); */?></p>-->
                    <p>Parece que a página que você tentou acessar <br>não existe ou está com a url quebrada. </p>
                   <!-- <p>Tente fazer uma busca ou entre em contato.</p>-->

					<?php
						//get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
