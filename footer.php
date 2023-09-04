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
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->

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
<<<<<<< HEAD
                <span class="devby">desenvolvido por</span> <a href="http://patomarques.com" class="link-devby" target="_blank">pato marques</a>
=======
                <span class="devby">desenvolvido por</span> <a href="http://patomarques.com.br" class="link-devby" target="_blank">pato marques</a>
>>>>>>> main
            </div>
        </div>
		</div>

	</footer><!-- #colophon -->

<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/custom/js/negahamburguer.js"></script>
</body>
</html>
