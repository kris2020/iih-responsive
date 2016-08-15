<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package iih
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-heading"><?php esc_html_e( 'Page Not Found', 'iih' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					<p>It looks like nothing was found at this location. You can try searching the site using the box below.</p>
					<p>If you believe this to be an error, please <a href="mailto:info@intellectualhistory.net">contact us</a>.</p>
					
					<?php get_search_form(); ?>		

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
