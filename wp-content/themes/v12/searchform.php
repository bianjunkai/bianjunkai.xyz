<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _e('Search for', 'v12'); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e('Search', 'v12'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php _e('Search', 'v12'); ?></span></button>
</form>
