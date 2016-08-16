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
	
			<p>It looks like no events were found for the requested archive. You can try searching the site using the box below.</p>			<p>If you believe this to be an error, please <a href="mailto:info@intellectualhistory.net">contact us</a>.</p>
			
			<?php get_search_form(); ?>	

<?php };
