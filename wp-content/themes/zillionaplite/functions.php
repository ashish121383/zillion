<?php
/**
 * zillionAplite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zillionAplite
 */


if ( ! function_exists( 'zillionaplite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zillionaplite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on zillionAplite, use a find and replace
		 * to change 'zillionaplite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zillionaplite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__('Header Menu', 'zillionaplite' ),
			'footer-menu' => esc_html__('Footer Menu', 'zillionaplite' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'zillionaplite_custom_background_args', array(
			'default-color' => 'A5A5A5',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'zillionaplite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zillionaplite_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'zillionaplite_content_width', 640 );
}
add_action( 'after_setup_theme', 'zillionaplite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zillionaplite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zillionaplite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zillionaplite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	)
);

	register_sidebar( array(
		'name'          => esc_html__( 'Copywrite Menu ', 'zillionaplite' ),
		'id'            => 'copywrite-1',
		'description'   => esc_html__( 'Add Copywrite Menu', 'zillionaplite' ),
		'before_widget' => '<div class="copyright-section">',
		'after_widget'  => '</div>',
		'before_title'  => ' ',
		'after_title'   => ' ',
		) 
	);
}
add_action( 'widgets_init', 'zillionaplite_widgets_init' );

function get_dynamic_sidebar($i = 1) {
	$c = '';
	ob_start();
	dynamic_sidebar($i);
	$c = ob_get_clean();
	return $c;
 }

/**
 * Enqueue scripts and styles.
 */
function zillionaplite_scripts() {
	wp_enqueue_style( 'zillionaplite-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');

	wp_enqueue_style( 'zillionaplite-flexslider', get_template_directory_uri().'/css/flexslider.css');

	wp_enqueue_style( 'zillionaplite-animate', get_template_directory_uri().'/css/animate.css');

	wp_enqueue_style( 'zillionaplite-font-awesome', 'https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css');

	wp_enqueue_style( 'zillionaplite-google-fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap');

	wp_enqueue_style( 'zillionaplite-style', get_template_directory_uri().'/css/style.css');

	wp_enqueue_style( 'zillionaplite-responsive', get_template_directory_uri().'/css/responsive.css');
	//wp_enqueue_style( 'zillionaplite-style', get_stylesheet_uri() );
	

	wp_enqueue_script( 'zillionaplite-jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );

	wp_enqueue_script( 'zillionaplite-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true );

	wp_enqueue_script( 'zillionaplite-flexslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js', array(), '2.7.2', true );

	wp_enqueue_script( 'zillionaplite-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.1.0', true );

}
add_action( 'wp_enqueue_scripts', 'zillionaplite_scripts' );

/*
	Create custom walker class
*/

require get_template_directory() . '/inc/custom-walker.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

