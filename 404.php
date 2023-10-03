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
				</header>

				<div class="page-content">
                    <p>Parece que a página que você tentou acessar <br>não existe ou está com a url quebrada. </p>

					<div class="d-block text-center">
						<a href="/" title="Botão de Voltar ao início" class="button-link">Voltar ao início</a>
					</div>

				</div>
			</section>
		</main>
	</section>

<?php
get_footer();
