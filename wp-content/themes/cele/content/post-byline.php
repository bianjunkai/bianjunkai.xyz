<?php
$author_display = get_theme_mod( 'display_post_author' );
$date_display   = get_theme_mod( 'display_post_date' );

if ( $author_display == 'hide' && $date_display == 'hide' ) {
	return;
}

$author = "<a class='author' href='" . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . "'>" . get_the_author() . "</a>";
$date   = "<a class='date' href='" . esc_url( get_month_link( get_the_date( 'Y' ), get_the_date( 'n' ) ) ) . "'>" . date_i18n( get_option( 'date_format' ), strtotime( get_the_date( 'r' ) ) ) . "</a>";

echo '<div class="post-byline">';
	echo '<span>';
		if ( $author_display == 'hide' ) {
			printf( _x( 'Published %s', 'This blog post was published on some date', 'cele' ), $date );
		} elseif ( $date_display == 'hide' ) {
			printf( _x( 'Published by %s', 'This blog post was published by some author', 'cele' ), $author );
		} else {
			printf( _x( 'Published %1$s by %2$s', 'This blog post was published on some date by some author', 'cele' ), $date, $author );
		}
	echo '</span>';
echo '</div>';
