<nav class="navigation pagination" role="navigation">
	<h2 class="screen-reader-text">Posts navigation</h2>
	<div class="nav-links events-end">
<?php
global $wp_query;
if ( $wp_query->max_num_pages > 1 ) { 
    previous_posts_link( __( '&#171; Previous', 'eventorganiser' ) );
    echo ' ';
        next_posts_link( __( 'Next &#187;' , 'eventorganiser' ) );
};?>
    </div>
</nav>