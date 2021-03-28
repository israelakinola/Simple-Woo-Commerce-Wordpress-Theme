<?php
/**
 * one-toronto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package one-toronto
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'one_toronto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function one_toronto_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on one-toronto, use a find and replace
		 * to change 'one-toronto' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'one-toronto', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'one-toronto' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'one_toronto_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'one_toronto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function one_toronto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'one_toronto_content_width', 640 );
}
add_action( 'after_setup_theme', 'one_toronto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function one_toronto_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'one-toronto' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'one-toronto' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'one_toronto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function z_store_scripts() {

	
	wp_enqueue_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'Normalize Style', get_theme_file_uri('/css/normalize.css'));
	wp_enqueue_style( 'Main Style', get_theme_file_uri('/css/z-store.css'));
	
	wp_enqueue_script('Bootstrap js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', 'jquery-core-js', NULL, true);
	wp_enqueue_script( 'webflow Js', get_template_directory_uri() . '/js/webflow.js', array(), _S_VERSION, true );
	


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'z_store_scripts' );



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 3,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 3,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


//Register Menu Location
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function z_store_register_nav_menu(){

        register_nav_menus( array(
            'header_menu' => __( 'Header Menu', 'This Menu is assigned to the Top Navigation' ),
			'help_menu'  => __( 'Help Menu', 'This Menu is assigned to the Footer Help Navigation' ),
			'social_menu'  => __( 'Social Menu', 'This Menu is assigned to the Footer Socail Navigation' ),

        ) );
    }

    add_action( 'after_setup_theme', 'z_store_register_nav_menu', 0 );
}


function convert_image_to_appropraite_file_extension($image_url,$size ){
	$path = $image_url; 
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if($ext == 'png'){
		$size = '-'. $size . '.png';
		$bodytag = str_replace(".png", $size, $image_url);
	}
	else if ($ext == 'jpg'){
		$size = '-'. $size . '.jpg';
		$bodytag = str_replace(".jpg", $size, $image_url);
	}
	
	return $bodytag;
}
