<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iih
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="page-subheading">', '</h3>' );
			} else {
				the_title( '<h3 class="page-subheading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
            the_date('', '<p><em>First published on ', '</em></p>');
			the_excerpt();
        ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
