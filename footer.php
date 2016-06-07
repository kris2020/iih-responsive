<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iih
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="site-directory" class="site-navigation  secondary-navigation">
            <h1 class="footer-heading">Site Directory</h1><tag></tag>
        	<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
        </div><!-- .site-directory -->
		<div class="site-info">
			<h1 class="footer-heading">Contact Us</h1>
			<p>Institute of Intellectual History<br/>
			University of St Andrews<br/>
			St Katharine&rsquo;s Lodge<br/>
			The Scores<br/>
			St Andrews<br/>
			Fife<br/>
			KY16 9BA</p>
			<p><a href="info@intellectualhistory.net">info@intellectualhistory.net</a></p>
			<p>Sign up to our <a href="mailing-list/">mailing list</a> to be informed first of our latest news and forthcoming events.</p>
		</div><!-- .site-info -->
        <div id="twitter-logo" class="footer-logo">
        	<a href="http://www.twitter.com/StAndrewsIIH"><img src="/assets/images/twitter-logo-white.png"/ id="twitter" alt="Follow us on Twitter @StAndrewsIIH"></a>
        </div>		
		<div id="university-logo" class="footer-logo">
		    <a href="http://www.st-andrews.ac.uk/"><img src="/assets/images/st-andrews-monochrome.png" id="logo" alt="University of St Andrews Logo"/></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
