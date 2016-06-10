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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
function toggle() {
    var check = document.getElementById('js-menu-toggle-collapse').style;
    if (argument = 'collapse') {
        document.getElementById('js-menu-toggle-collapse').style.display = 'none';
        document.getElementById('js-menu-toggle-expand').style.display = 'block';        
    } else if (argument = 'expand') {
        document.getElementById('js-menu-toggle-collapse').style.display = 'block';
        document.getElementById('js-menu-toggle-expand').style.display = 'none';        
    }
}
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'iih' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Institute <em>of</em> Intellectual History</a></h1>
			  <p class="site-description">University <em>of</em> St Andrews</p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="site-navigation  main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="toggle();"><span class="menu-toggle-expand  js-menu-toggle-expand">&#9662; </span><span class="menu-toggle-collapse  js-menu-toggle-collapse">&#9666; </span><?php esc_html_e( 'Navigation', 'iih' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
			
	<div id="site-banner">	<!-- #site-banner -->
	<?php
	if ( has_post_thumbnail() ) { ?>
		<img src="<?php	the_post_thumbnail_url(); ?>" class="wp-post-image" /> 
	<?php
	} else { ?>
	    <img src="<?php header_image(); ?>" class="wp-post-image" />
	<?php }
	?>
        <div id="image-credit" class="image-credit-link"><a href="/image-credits/">Image credits</a></div>
	</div> <!-- #site-banner -->		   

	<div id="content" class="site-content">
