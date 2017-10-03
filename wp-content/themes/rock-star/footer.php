<?php
/**
 * The template for displaying the footer
 *
 * @package Catch Themes
 * @subpackage Rock Star
 * @since Rock Star 0.3
 */


/**
 * rock_star_after_content hook
 *
 * @hooked rock_star_content_end - 10
 * @hooked rock_star_after_content_sidebar - 20
 *
 */
do_action( 'rock_star_after_content' );


/**
 * rock_star_footer hook
 *
 * @hooked rock_star_footer_content_start - 10
 * @hooked rock_star_footer_sidebar - 20
 * @hooked rock_star_footer_menu - 50
 * @hooked rock_star_mobile_footer_nav_anchor - 60
 * @hooked rock_star_get_footer_content - 100
 * @hooked rock_star_footer_content_end - 110
 * @hooked rock_star_site_inner_end - 190
 * @hooked rock_star_page_end - 200
 *
 */
do_action( 'rock_star_footer' );


/**
 * rock_star_after hook
 *
 * @hooked rock_star_scrollup - 10
 *
 */
do_action( 'rock_star_after' );

wp_footer(); ?>

<div id="footer">
	<ul>
		<li><a href="http://www.facebook.com/bodhicittaband/" target="_blank"></a></li>
		<li><a href="http://www.jambase.com/band/bodhicitta" target="_blank"></a></li>
		<li><a href="http://www.youtube.com/channel/UCsTCvTAP3CFj3nV3jfY5_vw" target="_blank"></a></li>
	</ul>
	<p>Copyright © 2017 Bodhicitta | <a href="booking@bodhicittamusic.com">booking@bodhicittamusic.com</a></p>
</div>

</body>
</html>