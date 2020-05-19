<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Visual_Blog
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses visual_blog_header_style()
 */
function visual_blog_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'visual_blog_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'visual_blog_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'visual_blog_custom_header_setup' );

if ( ! function_exists( 'visual_blog_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see visual_blog_custom_header_setup().
	 */
	function visual_blog_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}
		$header_style = 'body{background-color:red}';
   
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		$header_style .= '.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}';
		else :	
		$header_style .= '.site-title a,
			.site-description {
				color: #'.$header_text_color.';
			}';
		endif;

		wp_add_inline_style( 'visual-blog-style', $header_style );
	
	}
endif;
