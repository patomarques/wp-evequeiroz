<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head>
 * section and everything up until
 * <div id="content">
  * * @link
  * * https://developer.wordpress.org/themes/basics/template-files/#template-partials
  * * @package WP_Bootstrap_Starter */ ?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>
    >

    <head>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      <?php wp_head(); ?>

      <link
        rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/custom/sass/negahamburguer.css"
      />
    </head>

    <body <?php body_class(); ?>
      >

      <nav class="menu-full-custom"> 
        <div class="menu-bars-fullscreen">
          <span class="menu"> 
            <span class="hamburger"></span> 
          </span>                  
        </div>

        <?php
          wp_nav_menu(array(
            'theme_location'    =>
            'primary', 'container' => 'menu-header-mobile',
            'container_id' => '', 'container_class' => '', 'menu_id' =>
            false, 'menu_class' => 'navbar-nav menu-mobile', 'depth' =>
            3, 'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker() )); 
        ?>
      </nav> 

      <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"
          ><?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?></a
        >

        <?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')) : ?>

        <header
          class="site-header navbar-static-top mb-5"
          role="banner"
        >
          <div class="full-top-bar d-none">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 text-right hidden">
                  <ul class="list-inline list-top-social-icons mb-0">
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        href="https://pt-br.facebook.com/olanegahamburguer/"
                        title="Facebook"
                        ><i class="fa fa-facebook" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        target="_blank"
                        href="https://www.instagram.com/evequeiroz___/"
                        title="Instagram"
                        ><i class="fa fa-instagram" aria-hidden="true"></i
                      ></a>
                    </li>
                    <!--<li class="list-inline-item"><a href="#" title="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>-->
                    <li class="list-inline-item">
                      <a
                        href="https://evequeiroz.minhalojanouol.com.br/"
								target="_blank"
                        title="Loja Online"
                        ><i class="fa fa-shopping-cart" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li class="list-inline-item hidden">
                      <!--<span>pesquisar algo...</span>-->
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-lg-4">
                <div class="navbar-brand">
                  <?php if (get_theme_mod('wp_bootstrap_starter_logo')) : ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/custom/img/eve-queiroz-logo.png"
                      alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    />
                  </a>
                  <?php else : ?>
                  <a
                    class="site-title"
                    href="<?php echo esc_url(home_url('/')); ?>"
                    ><?php esc_url(bloginfo('name')); ?></a
                  >
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-sm-4 d-lg-none">
                <div class="menu-bars-fullscreen">
                  <span class="menu"> 
                    <span class="hamburger"></span> 
                  </span>                  
                </div>
              </div>

              <div class="col-lg-8 d-none d-lg-block text-right">
                <nav class="navbar navbar-toggleable-md navbar-light">
                  <?php
                    wp_nav_menu(array(
                      'theme_location'    =>
                      'primary', 'container' => 'div', 'container_id' =>
                      'menu-menu-header', 'container_class' => 'collapse
                      navbar-collapse justify-content-end menu-desktop', 'menu_id'
                      => false, 'menu_class' => 'navbar-nav', 'depth' => 3,
                      'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker'
                      => new wp_bootstrap_navwalker() )); 
                  ?>
                </nav>
              </div>
            </div>
          </div>
        </header>

        <?php endif; ?>
