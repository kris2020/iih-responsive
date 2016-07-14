<?php
/**
 * The events loop. Used by archive-events.php, taxonomy-event-venue.php,
 * taxonomy-event-category.php and taxonomy-event-tag.php
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory.
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 3.0.0
 */
?>

<p>The Institute of Intellectual History hosts an ever-widening series of lectures, seminars, and conferences, all of which are open to the public.</p>

<p>Previous events are listed in our archive organised by year: 2016 | 2015 | 2014 | 2013</p>

<p>Some events are recorded and published online for our podcast series, <a href="/lectures/">Lectures in Intellectual History</a>.</p>

<h1 class="entry-title">Upcoming Events</h1>	

<?php if ( have_posts() ) { ?>

	<?php eo_get_template_part( 'eo-events-nav' ); //Events navigation ?>

	<?php
	while ( have_posts() ) : the_post();
		eo_get_template_part( 'eo-loop-single-event' );
	endwhile;
	?>

	<?php eo_get_template_part( 'eo-events-nav' ); //Events navigation ?>

<?php } else { ?>

	<!-- If there are no events -->
	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'eventorganiser' ); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. ', 'eventorganiser' ); ?></p>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php };
