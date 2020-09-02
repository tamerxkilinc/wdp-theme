<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

	$footer_temp = get_theme_mod('footer_template','one');

	switch ($footer_temp) {
		case 'one': 
			get_footer('one');
			break;
		
		case 'two':
			get_footer('two');
			break;
			
		default:
			get_footer('one');
	}

wp_footer(); ?>

</body>
</html>