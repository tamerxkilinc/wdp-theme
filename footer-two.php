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

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )):
	get_template_part( 'footer-widget' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 pt-3 pb-4 text-center text-white">
				<div class="site-info sm-12">
					<a href="#page" class="page-scroll-tk d-block mb-2"><i class="fas fa-angle-double-up fa-2x"></i></a>
					
                	&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					|
					<span class="col-12 p-0" id="footer-social-icons">
						<a href="https://facebook.com/" target="_blank">
							<i class="fab fa-facebook-square" aria-hidden="true"></i>
						</a>
						<a href="https://instagram.com/" target="_blank">
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
						<a href="https://snapchat.com/" target="_blank">
							<i class="fab fa-snapchat-ghost" aria-hidden="true"></i>
						</a>
					</span>
				</div><!-- close .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->