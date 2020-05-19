<?php
/**
 * The full width template file
 *
 * Template Name: Full Width Template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Visual Blog
 */

get_header();

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main <?php if( !is_front_page()): ?> mt-5 pt-5 mb-5 pb-5<?php endif; ?>">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
		</div>
	</div><!-- #row -->
</div><!-- Container -->
<?php
get_footer();