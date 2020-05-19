<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Visual_Blog
 */

get_header();
if ( is_active_sidebar( 'sidebar-1' ) ) {
		$visual_blog_content_column = 8;
		$visual_blog_widget_column = 4;
	}else{
		$visual_blog_content_column = 12;
		$visual_blog_widget_column = 0;
	}
?>
<div class="container">
	<div class="row">
		<div class="col-lg-<?php echo esc_attr($visual_blog_content_column); ?>">
	<div id="primary" class="content-area">
		<main id="main" class="site-main mt-5 pt-5 mb-5 pb-5">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
		</div>
	<?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
		<div class="col-lg-<?php echo esc_attr($visual_blog_widget_column); ?>">
	<?php get_sidebar(); ?>	
		</div>
	<?php endif; ?>

	</div><!-- #row -->
</div><!-- Container -->
<?php
get_footer();
