<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Visual_Blog
 */

get_header();
?>
<div class="container">
		<div id="primary" class="content-area">
		<main id="main" class="site-main mt-5 pt-5 mb-5 pb-5">
			
			<section class="error-404 not-found">
				<header class="page-header text-center mb-4">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'visual-blog' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="content-404 text-center pb-5">
						<p class="pb-5" ><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'visual-blog' ); ?></p>

					<?php
					get_search_form();

					?>

					</div>
					<div class="row mt-5">
						<div class="col-md-6 mb-5">
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						</div>
						<div class="col-md-6 mb-5">
							<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'visual-blog' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->
						</div>
						<div class="col-md-6 mb-5">
							<?php
					/* translators: %1$s: smiley */
					$visual_blog_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'visual-blog' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$visual_blog_archive_content" );
					?>
						</div>
						<div class="col-md-6 mb-5">
						<?php

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>	
						</div>
					</div>

					
					
					

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php
get_footer();
