<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if (!function_exists('wp_bootstrap_starter_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_bootstrap_starter_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on WP Bootstrap Starter, use a find and replace
         * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
         */
        load_theme_textdomain('wp-bootstrap-starter', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wp_bootstrap_starter_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }
        add_action('admin_init', 'wp_boostrap_starter_add_editor_styles');

    }
endif;
add_action('after_setup_theme', 'wp_bootstrap_starter_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_bootstrap_starter_content_width', 1170);
}
add_action('after_setup_theme', 'wp_bootstrap_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'wp-bootstrap-starter'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer 1', 'wp-bootstrap-starter'),
            'id' => 'footer-1',
            'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer 2', 'wp-bootstrap-starter'),
            'id' => 'footer-2',
            'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer 3', 'wp-bootstrap-starter'),
            'id' => 'footer-3',
            'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'wp_bootstrap_starter_widgets_init');

function wp_bootstrap_starter_scripts()
{
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css');
    wp_enqueue_style('wp-bootstrap-starter-font-awesome', get_template_directory_uri() . '/inc/assets/css/font-awesome.min.css', false, '4.1.0');

    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri());
    if (get_theme_mod('preset_style_setting') === 'poppins-lora') {
        wp_enqueue_style('wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700');
    }
    if (get_theme_mod('preset_style_setting') === 'montserrat-merriweather') {
        wp_enqueue_style('wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800');
    }
    if (get_theme_mod('preset_style_setting') === 'poppins-poppins') {
        wp_enqueue_style('wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    }
    if (get_theme_mod('preset_style_setting') === 'roboto-roboto') {
        wp_enqueue_style('wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i');
    }
    if (get_theme_mod('preset_style_setting') === 'arbutusslab-opensans') {
        wp_enqueue_style('wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800');
    }
    if (get_theme_mod('preset_style_setting') && get_theme_mod('preset_style_setting') !== 'default') {
        wp_enqueue_style('wp-bootstrap-starter-' . get_theme_mod('preset_style_setting'), get_template_directory_uri() . '/inc/assets/css/presets/' . get_theme_mod('preset_style_setting') . '.css', false, '');
    }

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-tether', get_template_directory_uri() . '/inc/assets/js/tether.min.js', array());
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array());
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.js', array());
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('simplelightbox', get_template_directory_uri() . '/custom/css/simplelightbox.min.css');

}
add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');


function wp_bootstrap_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter('the_password_form', 'wp_bootstrap_starter_password_form');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

show_admin_bar(false);

function create_post_type()
{
    register_post_type(
        'aquarela',
        array(
            'labels' => array(
                'name' => __('Ilustração'),
                'singular_name' => __('Ilustração')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'aquarela'),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes'
            )
        )
    );

    register_post_type(
        'handpoke-tatto',
        array(
            'labels' => array(
                'name' => __('Handpoke Tattoo'),
                'singular_name' => __('Handpoke Tattoo')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes'
            )
        )
    );

    register_post_type(
        'lambe-lambe-stickers',
        array(
            'labels' => array(
                'name' => __('Lambe-Lambe / Sticker'),
                'singular_name' => __('Lambe-Lambe Stickers')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes',
            )
        )
    );

    register_post_type(
        'graffiti',
        array(
            'labels' => array(
                'name' => _('Graffiti'),
                'singular_name' => _('graffiti')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes'
            )
        )
    );

    register_post_type(
        'Social Media',
        array(
            'labels' => array(
                'name' => _('Social Media'),
                'singular_name' => _('social-media')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes'
            )
        )
    );
}

add_action('init', 'create_post_type');

function showNoImage()
{
    return "<img src='" . esc_url(get_template_directory_uri() . '/custom/img/no-image.jpg') . "' alt='Nenhuma Imagem' title='Nenhuma Imagem' />";
}

function showThumbnail()
{
    if (has_post_thumbnail()) {
        return the_post_thumbnail();
    } else {
        return showNoImage();
    }
}
function wp_add_import_scripts()
{
    // Register the script like this for a plugin:
    //wp_register_script( 'custom-script', plugins_url( '/js/custom-script.js', __FILE__ ), array( 'jquery' ) );
    // or
    // Register the script like this for a theme:
    wp_register_script('modernizr-script', get_template_directory_uri() . '/custom/js/modernizr.js', array('jquery'));
    wp_enqueue_script('modernizr-script');

    wp_register_script('parallaxie-script', get_template_directory_uri() . '/bower_components/parallaxie/parallaxie.js', array('jquery'));
    wp_enqueue_script('parallaxie-script');

    wp_register_script('simple-lightbox', get_template_directory_uri() . '/custom/js/simple-lightbox.js');
    wp_enqueue_script('simple-lightbox');

    wp_register_script('scrollbar-js', get_template_directory_uri() . '/custom/js/Scrollbar.js');
    wp_enqueue_script('scrollbar-js');

    wp_register_script('theme-script', get_template_directory_uri() . '/custom/js/evequeiroz.js', array('jquery'));
    wp_enqueue_script('theme-script');

    wp_register_script('lazy-loading-script', get_template_directory_uri() . '/custom/js/lazy-loading.js');
    wp_enqueue_script('lazy-loading-script');

    // For either a plugin or a theme, you can then enqueue the script:
    //wp_enqueue_script( 'custom-script' );
}
add_action('wp_enqueue_scripts', 'wp_add_import_scripts');

add_theme_support('post-thumbnails', array('post', 'Midia'));

function custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function custom_pagination($numpages = '', $pagerange = '', $paged = '')
{

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    global $paged;

    if (empty($paged)) {
        $paged = 1;
    }

    if ($numpages == '') {
        global $wp_query;

        $numpages = $wp_query->max_num_pages;

        if (!$numpages) {
            $numpages = 1;
        }
    }

    $pagination_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'total' => $numpages,
        'current' => $paged,
        'show_all' => False,
        'end_size' => 1,
        'mid_size' => $pagerange,
        'prev_next' => True,
        'prev_text' => _('&laquo;'),
        'next_text' => _('&raquo;'),
        'type' => 'plain',
        'add_args' => false,
        'add_fragment' => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<div class='pagination text-center'>";
        echo "<div class='label'>Página " . $paged . " de " . $numpages . "</div> ";
        echo "<div class='buttons'>" . $paginate_links . "</div> ";
        echo "</div>";
    }
}

function remove_pages_from_search($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'remove_pages_from_search');