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
    				the_title( '<h1 class="page-heading">', '</h1>' );
    			} else {
    				the_title( '<h2 class="page-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    			}
            ?>    		
    	</header><!-- .entry-header -->

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'iih' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iih' ),
				'after'  => '</div>',
			) );
		    
		    if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
        	<?php iih_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
   	</div><!-- .entry-content -->
</article><!-- #post-## -->
