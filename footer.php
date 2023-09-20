<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div>
		</div>
	</div>

    <?php get_template_part( 'footer-widget' ); ?>

  <div class="div-transition"></div>

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="/" class="link">
					<img src="<?php echo get_template_directory_uri(); ?>/custom/img/eve-queiroz-logo.png" alt="" class="logo-footer">
				</a>
            </div>
        </div>
    </div>

		<div class="container">
        <div class="site-info">
            <div class="pull-left site-nome">
                 <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?> <!--®--> <i class="fa fa-heart ml-1 mr-1"></i> <?php echo date('Y'); ?>
            </div>
            <div class="pull-right dev-sign">
                <span class="devby">desenvolvido por</span> <a href="http://patomarques.com.br" class="link-devby" target="_blank">pato marques</a>
            </div>
        </div>
		</div>

	</footer>
<?php endif; ?>

</div>

<?php wp_footer(); ?>

</body>
</html>
