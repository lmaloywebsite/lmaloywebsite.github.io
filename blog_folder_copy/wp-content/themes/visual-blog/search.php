<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'visual-blog' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
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