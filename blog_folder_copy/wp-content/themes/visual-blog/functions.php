<?php
/**
 * Visual Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Visual_Blog
 */

if ( ! function_exists( 'visual_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function visual_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Visual Blog, use a find and replace
		 * to change 'visual-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'visual-blog', get_template_directory() . '/languages' );

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
			'base_menu' => esc_html__( 'Main menu', 'visual-blog' ),
			'top_menu' => esc_html__( 'Top Menu', 'visual-blog' ),
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
		add_theme_support( 'custom-background', apply_filters( 'visual_blog_custom_background_args', array(
			'default-color' => 'ffffff',
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
		add_theme_support( 'align-wide' );
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );


		// Gutenberg support
		add_theme_support( 'editor-color-palette', array(
	       	array(
				'name' => esc_html__( 'Blue', 'visual-blog' ),
				'slug' => 'blue',
				'color' => '#2c7dfa',
	       	),
	       	array(
	           	'name' => esc_html__( 'Green', 'visual-blog' ),
	           	'slug' => 'green',
	           	'color' => '#07d79c',
	       	),
	       	array(
	           	'name' => esc_html__( 'Orange', 'visual-blog' ),
	           	'slug' => 'orange',
	           	'color' => '#ff8737',
	       	),
	       	array(
	           	'name' => esc_html__( 'Black', 'visual-blog' ),
	           	'slug' => 'black',
	           	'color' => '#2f3633',
	       	),
	       	array(
	           	'name' => esc_html__( 'Grey', 'visual-blog' ),
	           	'slug' => 'grey',
	           	'color' => '#82868b',
	       	),
	   	));


		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'visual-blog' ),
		       	'shortName' => esc_html__( 'S', 'visual-blog' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'visual-blog' ),
		       	'shortName' => esc_html__( 'M', 'visual-blog' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'larger', 'visual-blog' ),
		       	'shortName' => esc_html__( 'L', 'visual-blog' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'huge', 'visual-blog' ),
		       	'shortName' => esc_html__( 'XL', 'visual-blog' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_editor_style( array( '/assets/css/editor-style.css', visual_blog_fonts_url() ) );
		

	}
endif;
add_action( 'after_setup_theme', 'visual_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function visual_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'visual_blog_content_width', 1170 );
}
add_action( 'after_setup_theme', 'visual_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function visual_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'visual-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'visual-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'visual_blog_widgets_init' );

if ( ! function_exists( 'visual_blog_fonts_url' ) ) :
/**
 * Register Google fonts
 *
 * @return string Google fonts URL for the theme.
 */
function visual_blog_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	
		$fonts[] = 'Roboto:400,700';
		$fonts[] = 'PT Serif:400,500,700';

	$query_args = array(
		'family' => urlencode( implode( '|', $fonts ) ),
		'subset' => urlencode( $subsets ),
	);

	if ( $fonts ) {
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
endif;

/**
 * Enqueue scripts and styles.
 */
function visual_blog_scripts() {
	wp_enqueue_style( 'visual-blog-fonts', visual_blog_fonts_url(), array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),'4.4.1 ','all' );
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/all.css', array(),'5.13.0 ','all' );
	wp_enqueue_style( 'visual-blog-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );
	wp_enqueue_style( 'visual-main', get_template_directory_uri() . '/assets/css/visual-main.css', array(),'1.0.3 ','all' );
	wp_enqueue_style( 'visual-blog-style', get_stylesheet_uri() );

	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
	wp_enqueue_script( 'visual-blog-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '1.0.0', true );
	wp_enqueue_script( 'visual-blog-js', get_template_directory_uri() . '/assets/js/visual-blog.js', array('jquery'), '1.0.3', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'visual_blog_scripts' );

 function visual_blog_admin_scripts(){
	wp_enqueue_script( 'vb-admin-script', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), '1.0.0', true );
 }
add_action( 'admin_enqueue_scripts', 'visual_blog_admin_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 */
function visual_blog_block_editor_styles() {
	wp_enqueue_style( 'visual-blog-fonts', visual_blog_fonts_url(), array(), null );
	wp_enqueue_style( 'vosia-blog-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.css' ) );

}
add_action( 'enqueue_block_editor_assets', 'visual_blog_block_editor_styles' );

if( ! function_exists( 'wp_body_open' ) ){
        function wp_body_open() {
            do_action( 'wp_body_open' );
        }
    }

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Customizer pro info .
 */
require get_template_directory() . '/inc/info/class-customize.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Bootstrap Navwalker
 */
require get_template_directory() . '/inc/bootstrap-navwalker.php';

/**
 * tgm-plugin-activation
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * recomend plugin
 */
require get_template_directory() . '/inc/recomend-plugin.php';


