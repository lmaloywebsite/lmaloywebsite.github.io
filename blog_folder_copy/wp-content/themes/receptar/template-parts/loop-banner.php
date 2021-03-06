<?php
/**
 * Banner / Featured content loop
 *
 * @package    Receptar
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.7.0
 */

?>

<div id="site-banner" class="site-banner<?php if ( ( is_front_page() || is_home() ) && receptar_has_banner_posts( 2 ) ) { echo ' enable-slider'; } else { echo ' no-slider'; } ?>">
	<div class="site-banner-inner">
		<?php

		do_action( 'wmhook_banner_content_top' );

		if ( $banner = apply_filters( 'wmhook_custom_banner', '' ) ) {

			// Display custom banner first
			echo $banner;

		} elseif ( receptar_has_banner_posts( 1 ) ) {

			// Display featured posts (only on homepage)
			$featured_posts = receptar_get_banner_posts();

			foreach ( (array) $featured_posts as $order => $post ) {
				setup_postdata( $post );
				get_template_part( 'template-parts/content', 'featured-post' );
			}

			wp_reset_postdata();

		} else {

			// Fall back to Custom Header
			get_template_part( 'template-parts/content', 'custom-header' );

		}

		do_action( 'wmhook_banner_content_bottom' );

		?>
	</div>
</div>
