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
    	<header class="entry-header">
    		<?php
    			if ( is_single() ) {
    				the_title( '<h2 class="page-subheading">', '</h3>' );
    			} else {
    				the_title( '<h2 class="page-subheading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    			}
    		?>
            <?php if ( 'post' === get_post_type() ) : ?>
        	<div class="entry-meta">
        		<?php iih_posted_on(); ?>
        	</div><!-- .entry-meta -->
        	<?php endif; ?>
        </header><!-- .entry-header -->
        <div class="entry-summary">
        	<?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
