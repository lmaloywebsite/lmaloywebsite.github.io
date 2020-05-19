<?php
/**
 * Visual Blog Theme Customizer
 *
 * @package Visual_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function visual_blog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section('vblog_topmenu', array(
		'title' => __('Top Menu', 'visual-blog'),
		'capability'     => 'edit_theme_options',
		'priority'       => 10,

	));
	$wp_customize->add_setting( 'vblog_topmenu_show' , array(
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'default'       =>  '',
    'sanitize_callback' => 'absint',
    'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'vblog_topmenu_show_control', array(
        'label'      => __('Show top menu bar? ', 'visual-blog'),
        'description'=> __('You can show or hide top menu bar.', 'visual-blog'),
        'section'    => 'vblog_topmenu',
        'settings'   => 'vblog_topmenu_show',
        'type'       => 'checkbox',
        
    ) );

	$wp_customize->add_setting('vblog_address1', array(
        'default'        => esc_html__('Hello!!','visual-blog'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_address1_control', array(
        'label'      => __('Top menu bar text one', 'visual-blog'),
        'description'     => __('Enter top bar text here.', 'visual-blog'),
        'section'    => 'vblog_topmenu',
        'settings'   => 'vblog_address1',
        'type'       => 'text',
    ));
	$wp_customize->add_setting('vblog_address2', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_address2_control', array(
        'label'      => __('Top menu bar text two', 'visual-blog'),
        'description'     => __('Enter menu text two.', 'visual-blog'),
        'section'    => 'vblog_topmenu',
        'settings'   => 'vblog_address2',
        'type'       => 'text',
    ));
 
	$wp_customize->add_section('vblog_social_search', array(
		'title' => __('Header social and search', 'visual-blog'),
		'capability'     => 'edit_theme_options',
		'priority'       => 15,

	));
	$wp_customize->add_setting( 'vblog_header_search' , array(
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'default'       =>  '1',
    'sanitize_callback' => 'absint',
    'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'vblog_header_search', array(
        'label'      => __('Show header search? ', 'visual-blog'),
        'description'=> __('You can show or hide header search.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_header_search',
        'type'       => 'checkbox',
        
    ) );
	$wp_customize->add_setting( 'vblog_header_social' , array(
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'default'       =>  '1',
    'sanitize_callback' => 'absint',
    'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'vblog_header_social', array(
        'label'      => __('Show header Social icons? ', 'visual-blog'),
        'description'=> __('You can show or hide header search.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_header_social',
        'type'       => 'checkbox',
        
    ) );

	$wp_customize->add_setting('vblog_facebook', array(
        'default'        => 'https://facebook.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_facebook', array(
        'label'      => __('Facebook url', 'visual-blog'),
        'description'     => __('Enter Facebook url here.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_facebook',
        'type'       => 'url',
    ));
	$wp_customize->add_setting('vblog_twitter', array(
        'default'        => 'https://twitter.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_twitter', array(
        'label'      => __('Twitter url', 'visual-blog'),
        'description'     => __('Enter Twitter url here.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_twitter',
        'type'       => 'url',
    ));
	$wp_customize->add_setting('vblog_linkedin', array(
        'default'        => 'https://linkedin.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_linkedin', array(
        'label'      => __('Linkedin url', 'visual-blog'),
        'description'     => __('Enter Linkedin url here.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_linkedin',
        'type'       => 'url',
    ));
	$wp_customize->add_setting('vblog_tumblr', array(
        'default'        => 'https://tumblr.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_tumblr', array(
        'label'      => __('Tumblr url', 'visual-blog'),
        'description'     => __('Enter tumblr url here.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_tumblr',
        'type'       => 'url',
    ));
	$wp_customize->add_setting('vblog_youtube', array(
        'default'        => 'https://youtube.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_youtube', array(
        'label'      => __('Youtube url', 'visual-blog'),
        'description'     => __('Enter Youtube url here.', 'visual-blog'),
        'section'    => 'vblog_social_search',
        'settings'   => 'vblog_youtube',
        'type'       => 'url',
    ));
	
 


		/*
	* Create header background color
	*/
	// Add setting
	$wp_customize->add_setting('vb_menu_bgcolor', array(
		'default' => '#f8f9fa',
		'type' =>'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'refresh',
	));
	// Add color control 
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, 'vb_menu_bgcolor', array(
				'label' => __('Menu Background Color','visual-blog'),
				'section' => 'colors'
			)
		)
	);
	// Add setting
	$wp_customize->add_setting('vb_menu_color', array(
		'default' => '#333',
		'type' =>'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'refresh',
	));
	// Add color control 
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, 'vb_menu_color', array(
				'label' => __('Menu text Color','visual-blog'),
				'section' => 'colors'
			)
		)
	);
	// Add setting
	$wp_customize->add_setting('vb_menu_hcolor', array(
		'default' => '#555',
		'type' =>'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'refresh',
	));
	// Add color control 
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, 'vb_menu_hcolor', array(
				'label' => __('Menu text hover Color','visual-blog'),
				'section' => 'colors'
			)
		)
	);

	$wp_customize->add_setting( 'vblog_header_overlay' , array(
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'default'       =>  '',
    'sanitize_callback' => 'absint',
    'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'vblog_header_overlay_control', array(
        'label'      => __('Header image overlay? ', 'visual-blog'),
        'description'=> __('You can active or hide Header image overlay.', 'visual-blog'),
        'section'    => 'header_image',
        'settings'   => 'vblog_header_overlay',
        'type'       => 'checkbox',
        
    ) );

    $wp_customize->add_section('vblog_footer', array(
		'title' => __('Footer Settings', 'visual-blog'),
		'capability'     => 'edit_theme_options',

	));
	      //select sanitization function
    function vblog_sanitize_select( $input, $setting ){
        $input = sanitize_key($input);
        $choices = $setting->manager->get_control( $setting->id )->choices;
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
              
    }
	$wp_customize->add_setting('vblog_footer_copy', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('vblog_footer_copy_control', array(
        'label'      => __('Footer Copyright text', 'visual-blog'),
        'description'     => __('You can write footer copyright text.', 'visual-blog'),
        'section'    => 'vblog_footer',
        'settings'   => 'vblog_footer_copy',
        'type'       => 'text',
    ));
 //add setting to your section
        $wp_customize->add_setting( 'vblog_footer_position', array(
				'default'        => 'text-center',
                'sanitize_callback' => 'vblog_sanitize_select'
            )
        );
          
        $wp_customize->add_control( 
            'vblog_footer_position', 
            array(
                'label' => esc_html__( 'Your Setting with select', 'visual-blog' ),
                'section' => 'vblog_footer',
                'type' => 'select',
                'choices' => array(
                    'text-left' => esc_html__('Left','visual-blog'),
                    'text-center' => esc_html__('Center','visual-blog'),
                    'text-right' => esc_html__('Right','visual-blog')               
                )
            )
        ); 


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'visual_blog_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'visual_blog_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'visual_blog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function visual_blog_customize_partial_blogname() {
	esc_html(bloginfo( 'name' ));
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function visual_blog_customize_partial_blogdescription() {
	esc_html(bloginfo( 'description' ));
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function visual_blog_customize_preview_js() {
	wp_enqueue_script( 'visual-blog-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'visual_blog_customize_preview_js' );
