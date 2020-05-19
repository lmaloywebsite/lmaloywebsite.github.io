<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Visual_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'visual-blog' ); ?></a>

	<header id="masthead" class="site-header">
<?php
$vblog_topmenu_show = get_theme_mod( 'vblog_topmenu_show', 1 );
 if($vblog_topmenu_show): ?>
		<div class="top-menu bg-dark text-light pb-2 pt-2">
			<div class="container">
				<?php 
		$vblog_address1 = get_theme_mod( 'vblog_address1',  esc_html__('Hello!!','visual-blog'));
		$vblog_address2 = get_theme_mod( 'vblog_address2');
				 ?>
				<div class="row">
					<div class="col-auto">
						<div class="address-one"><?php echo esc_html($vblog_address1); ?></div>
					</div>
					<div class="col-auto">
						<div class="address-two"><?php echo esc_html($vblog_address2); ?></div>
					</div>
					<div class="col-auto ml-auto text-right">
						<div class="top-menu">
					<nav id="top-navigation" class="top-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'top_menu',
								'menu_id'        => 'top-menu',
								'menu_class'        => 'top-container',
								'fallback_cb'     => '__return_false',
							) );
						?>
						
						
					</nav><!-- #site-navigation -->	
				</div>
					</div>
				</div>
				
			</div>
		</div>
	<?php endif; ?>
		<?php if(has_header_image()): ?>
	        <div class="header-img"> 
	        <?php the_header_image_tag(); ?>
        <?php endif; ?>
        <?php 
        $vblog_header_overlay = get_theme_mod( 'vblog_header_overlay' );
         ?>
		<div class="header-content <?php if($vblog_header_overlay): ?>vblog-overlay<?php endif; ?>">
		<div class="container">
		<div class="header-middle mb-5 mt-5">
<?php 
$vblog_header_search = get_theme_mod('vblog_header_search', '1');
$vblog_header_social = get_theme_mod('vblog_header_social', '1');
$vblog_facebook = get_theme_mod('vblog_facebook', 'https://facebook.com');
$vblog_twitter = get_theme_mod('vblog_twitter', 'https://twitter.com');
$vblog_linkedin = get_theme_mod('vblog_linkedin', 'https://linkedin.com');
$vblog_tumblr = get_theme_mod('vblog_tumblr', 'https://tumblr.com');
$vblog_youtube = get_theme_mod('vblog_youtube', 'https://youtube.com');
if($vblog_header_search == 1 || $vblog_header_social == 1){
	$vblog_logo_column = 6;
}else{
	$vblog_logo_column = 12;
}

?>
			<div class="row">
				
				<div class="col-lg-3">
					<?php if($vblog_header_social): ?>
					<div class="header-social mt-5">
						<ul>
						<?php if($vblog_facebook): ?>
							<li><a target="_blank" href="<?php echo esc_url($vblog_facebook); ?>"><i class="fab fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if($vblog_twitter): ?>
							<li><a target="_blank" href="<?php echo esc_url($vblog_twitter); ?>"><i class="fab fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if($vblog_linkedin): ?>
							<li><a target="_blank" href="<?php echo esc_url($vblog_linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
						<?php endif; ?>
						<?php if($vblog_tumblr): ?>
							<li><a target="_blank" href="<?php echo esc_url($vblog_tumblr); ?>"><i class="fab fa-tumblr"></i></a></li>
						<?php endif; ?>
						<?php if($vblog_youtube): ?>
							<li><a target="_blank" href="<?php echo esc_url($vblog_youtube); ?>"><i class="fab fa-youtube"></i></a></li>
						<?php endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			
				<div class="col-lg-<?php echo esc_attr($vblog_logo_column); ?>">
					<div class="site-branding text-center">
				<?php
				if ( has_custom_logo() ) :
					the_custom_logo();
				
				else :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				endif;
				$visual_blog_description = get_bloginfo( 'description', 'display' );
				if ( $visual_blog_description || is_customize_preview() ) :
					?>
					<p class="site-description">
						<?php echo esc_html($visual_blog_description);  ?>
					</p>
				<?php endif; ?>
			</div><!-- .site-branding -->
				</div>
				<div class="col-lg-3">
					<?php if($vblog_header_search): ?>
					<div class="header-search mt-5">
						<?php get_search_form(); ?>
					</div>
					<?php endif; ?>
				</div>
			
			</div><!-- .row -->
			</div><!-- .header-middle -->
			
		</div><!-- .container -->
		</div><!-- .header content -->
		<?php if(has_header_image()): ?>
	        </div><!-- .header image -->
        <?php endif; ?>

            <nav class="navbar navbar-expand-lg navbar-light bg-light text-center vblog-menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#visual-main" aria-controls="visual-main" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'visual-blog' ); ?>">
    <span class="navbar-toggler-icon"></span>
  </button>
 
    
    <?php
						wp_nav_menu( array(
						'theme_location'  => 'base_menu',
						'depth'	          => 2, 
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse justify-content-center',
						'container_id'    => 'visual-main',
						'menu_class'        => 'navbar-nav mr-auto mt-2 mt-lg-0 visul-menu',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    					'walker'          => new WP_Bootstrap_Navwalker(),
					) );
					?>


</nav>

		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
