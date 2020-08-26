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
		<div class="container-fluid p-2 p-md-3">
			<div class="row align-items-center">
				<div class="col-md-10 col-12 text-center text-md-left order-2 order-md-1">
					<div class="site-info d-inline-block">
						&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
						<span>&nbsp;|&nbsp;<?php echo __('Alle Rechte vorbehalten.','wp-bootstrap-starter'); ?></span>
					</div><!-- close .site-info -->
					<div class="d-block d-md-inline text-center text-md-left">
					<?php $website_type = get_theme_mod( 'select_website_type', 'one' );
					if( $website_type == 'two' ) : ?>
						<!-- single page -->
						<a class="wdp_modal_link" data-toggle="modal" data-target="#impressumModal"><?php echo __('Impressum.','wp-bootstrap-starter'); ?></a>
						<a class="wdp_modal_link" data-toggle="modal" data-target="#datenschutzModal"><?php echo __('Datenschutz.','wp-bootstrap-starter'); ?></a>
					<?php else : ?>
						<!-- multi page -->
						<a href="/impressum"><?php echo __('Impressum.','wp-bootstrap-starter'); ?></a>
						<a href="/datenschutz"><?php echo __('Datenschutz.','wp-bootstrap-starter'); ?></a>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-md-2 col-12 text-center text-md-right order-1 order-md-2">
					<a id="scrollToTop" href="#page" class="page-scroll-tk"><i class="fas fa-chevron-up fa-2x"></i></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php endif; ?>
</div><!-- #page -->