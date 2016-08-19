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
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h2 class="page-heading">', '</h2>' );
			} else {
				the_title( '<h2 class="page-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
        ?>    		
	</header><!-- .entry-header -->
    <div class="entry-content">
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
    <?php foreach (get_the_category() as $c) {
        if ($c->cat_ID === 35) {
        /* If the post is part of the Intellectual History Archive, add a disclaimer */
            echo '<p><strong>Disclaimer:</strong> This post has been published under the auspices the <a href="/intellectual-history-network/">Intellectual History Network</a>. The Institute of Intellectual History is not responsible for the contents of the link.</p>';
        }
    } ?>
    	<?php iih_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php
    endif;
    ?>
   	</div><!-- .entry-content -->
</article><!-- #post-## -->
