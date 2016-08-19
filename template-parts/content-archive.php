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
    				the_title( '<h2 class="page-subheading">', '</h2>' );
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
       	<div class="entry-content">
        <div class="entry-summary">
        	<?php
        	$ihn = false;
            foreach (get_the_category() as $c) {
                if ($c->cat_ID === 35) {
                    $ihn = true;
                }
            }
            
            if (!$ihn) {
                the_excerpt();
            } else {
                echo 'Posted in <a href="/intellectual-history-network/">Intellectual History Network</a>';
            }
        	?>
        </div><!-- .entry-summary -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
