<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iih
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="News and events from the Institute of Intellectual History at the University of St Andrews. Founded in 2013, the research centre boasts one of the largest concentrations of intellectual historians in the world."/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel='stylesheet' id='iih-print-css'  href='/wordpress/wp-content/themes/iih/print.css' type='text/css' media='print' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
if (top.location!= self.location) {
	top.location = self.location.href;
}

$(document).ready(function() {
    // Toggle the menu for mobile devices 
    $('.menu-toggle').click(function(){
        $('.menu-navigation-container').toggle(500);
        $('.menu-closed').toggle();    
        $('.menu-open').toggle();
    });
    
    /* Detect resizing of window, and force navigation to show after 
    580px break point in case menu has previously been hidden in the DOM */
    $(window).resize(function() {
        var width = $(window).width();
        if (width > 580) {
          $('.menu-navigation-container').show();
        }
    });
    
    /* If jQuery loads, collapse the navigation menu (this is a
    fallback: no Javascript = menu shows by default) */
    var width = $(window).width();
    if (width < 580) {
        $('.menu-navigation-container').hide();
    }    
});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'iih' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Institute <em>of</em> Intellectual History</a></h1>
			  <p class="site-description">University <em>of</em> St Andrews</p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-open">&#9662; </span><span class="menu-closed">&#9656; </span><?php esc_html_e( 'Navigation', 'iih' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
			
	<div id="site-banner">	<!-- #site-banner -->
	<?php
	if ( has_post_thumbnail() ) { ?>
		<img src="<?php	the_post_thumbnail_url(); ?>" class="banner-image wp-post-image" alt="Banner image"/> 
	<?php
	} else { ?>
	    <img src="<?php header_image(); ?>" class="banner-image wp-post-image"  alt="Banner image"/>
	<?php }
	?>
        <div id="image-credit" class="image-credit-link"><a href="/image-credits/">Image credits</a></div>
	</div> <!-- #site-banner -->		   

	<div id="content" class="site-content">
