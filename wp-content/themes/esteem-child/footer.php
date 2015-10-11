<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
</div><!--#main -->
<?php do_action( 'esteem_before_footer' ); ?>
<footer id="colophon" class="clearfix">
	
	<div id="site-generator" class="inner-wrap">
		Copyright © 2015 webstract.ca <br> <a href="http://webstract.ca/?page_id=4">Privacy Policy</a>
	</div><!-- #site-generator -->
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>