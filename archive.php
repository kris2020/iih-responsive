<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iih
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-heading">News Archive</h1>
			</header><!-- .page-header -->
			
            <?php
            the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( '&#171; Previous', 'textdomain' ),
                'next_text' => __( 'Next &#187;', 'textdomain' ),
            ) );
            
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => __( '&#171; Previous', 'textdomain' ),
			    'next_text' => __( 'Next &#187;', 'textdomain' ),
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
