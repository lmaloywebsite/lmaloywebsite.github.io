<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'visual-blog' )?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search &hellip;', 'visual-blog' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
</form>