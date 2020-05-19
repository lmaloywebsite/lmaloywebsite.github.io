<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Visual_Blog
 */
$vblog_footer_copy = get_theme_mod( 'vblog_footer_copy' );
$vblog_footer_position = get_theme_mod( 'vblog_footer_position','text-center' );
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-light pb-4 pt-4">
		<div class="container">
		<div class="site-info <?php echo esc_attr($vblog_footer_position); ?>">
			<div class="footer-copytext">
				<p><?php echo esc_html($vblog_footer_copy); ?></p>
			</div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'visual-blog' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'visual-blog' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s', 'visual-blog' ), 'Visual Blog', '<a href="'.esc_url('https://themescool.com').'">themescool.com</a>' );
				?>
		</div><!-- .site-info -->
		</div><!-- .site container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
