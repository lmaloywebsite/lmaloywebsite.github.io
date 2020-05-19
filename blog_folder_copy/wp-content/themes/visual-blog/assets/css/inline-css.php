<?php
/**
 * Add inline css 
 *
 * 
 */
if ( ! function_exists( 'visual_blog_inline_css' ) ) :
function visual_blog_inline_css() {
 $vb_menu_bgcolor = get_theme_mod('vb_menu_bgcolor','#f8f9fa');
 $vb_menu_color = get_theme_mod('vb_menu_color','#333');
 $vb_menu_hcolor = get_theme_mod('vb_menu_hcolor','#555');

    
        $style = '';
   
		
         if($vb_menu_bgcolor != '#f8f9fa'){ 
         	$style .= 'body nav.vblog-menu{
                    background: '.esc_attr($vb_menu_bgcolor).' !important;
                }';
         }
         if($vb_menu_color != '#f8f9fa'){ 
         	$style .= '.navbar-light .navbar-nav .nav-link{
                    color: '.esc_attr($vb_menu_color).' !important;
                }';
         }
         if($vb_menu_hcolor != '#f8f9fa'){ 
         	$style .= '.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link,.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
                    color: '.esc_attr($vb_menu_hcolor).' !important;
                }';
         }


   
        wp_add_inline_style( 'visual-main', $style );
}
add_action( 'wp_enqueue_scripts', 'visual_blog_inline_css' );
endif;