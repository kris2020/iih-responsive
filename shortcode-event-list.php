<?php
/**
 * Event List Widget: Standard List
 *
 * The template is used for displaying the [eo_event] shortcode *unless* it is wrapped around a placeholder: e.g. [eo_event] {placeholder} [/eo_event].
 *
 * You can use this to edit how the output of the eo_event shortcode. See http://docs.wp-event-organiser.com/shortcodes/events-list
 * For the event list widget see widget-event-list.php
 *
 * For a list of available functions (outputting dates, venue details etc) see http://codex.wp-event-organiser.com/
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://docs.wp-event-organiser.com/theme-integration for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.7
 */
global $eo_event_loop,$eo_event_loop_args;

//The list ID / classes
$id = ( $eo_event_loop_args['id'] ? 'id="'.$eo_event_loop_args['id'].'"' : '' );
$classes = $eo_event_loop_args['class'];

?>

<?php if ( $eo_event_loop->have_posts() ) :  ?>

	<div <?php echo $id; ?> class="<?php echo esc_attr( $classes );?>" > 

		<?php while ( $eo_event_loop->have_posts() ) :  $eo_event_loop->the_post(); ?>

			<?php
				//Generate HTML classes for this event
				$eo_event_classes = eo_get_event_classes();

				//For non-all-day events, include time format
				$format = eo_get_event_datetime_format();
			?>

			<div class="eo-events-shortcode-event <?php echo esc_attr( implode( ' ',$eo_event_classes ) ); ?>" >
    			
    			<p>
    				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
    			</p>
    			
                <?php if ( the_meta() ) { ?>
                	<?php echo the_meta();?>
                <?php } ?>
    			
    			<p><?php echo eo_format_event_occurrence();?></p>
    			
    			<?php if ( eo_get_venue() ) {
    				$tax = get_taxonomy( 'event-venue' ); ?>
    				<p><strong><?php echo esc_html( $tax->labels->singular_name ) ?>:</strong> <a href="<?php eo_venue_link(); ?>"> <?php eo_venue_name(); ?></a></p>
    			<?php } ?>
    			
    			<?php if ( get_the_terms( get_the_ID(), 'event-category' ) ) { ?>
    				<p><strong><?php esc_html_e( 'Type', 'eventorganiser' ); ?>:</strong> <?php echo get_the_term_list( get_the_ID(),'event-category', '', ', ', '' ); ?></p>
    			<?php } ?>              
    			      			
    			<?php if ( the_excerpt() ) { ?>
    				<p><?php the_excerpt(); ?></p>
    			<?php } ?>
    			
            </div>
		<?php endwhile; ?>

	</div>

<?php elseif ( ! empty( $eo_event_loop_args['no_events'] ) ) :  ?>

	<div id="<?php echo esc_attr( $id );?>" class="<?php echo esc_attr( $classes );?>" > 
		<p class="eo-no-events" > <?php echo $eo_event_loop_args['no_events']; ?> </p>
	</div>

<?php endif;
