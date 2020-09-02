<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class = "topbar py-2 py-md-2 px-1 px-md-3">
		<div class="d-block d-md-none" id="topbarToggler">
			<a class="btn btn-link text-left w-100" data-toggle="collapse" href="#topbarCollapse" role="button" aria-expanded="false" aria-controls="topbarCollapse" id="topbarTogglerText">
    			<?php echo get_theme_mod('topbar_toggler_text', 'Contact us'); ?><i class="fas fa-chevron-down float-right mt-1 ml-2"></i>
  			</a>
		</div>
		<div class="row align-items-center collapse" id="topbarCollapse">		
			<div class="col-md-6 col-12 text-center text-lg-left" id="topbar-left">
				<a class="d-block d-md-inline-block mr-md-2" href="https://support.bestellmahl.com/rueckruf" target="_blank">
					<i class="fas fa-phone text-secondary mr-2"></i>
					<?php echo get_theme_mod('topbar_text_left1', '0999 - 654 524'); ?>
				</a>
				<a class="d-block d-md-inline" href="mailto:<?php echo get_theme_mod('topbar_text_left2', 'info@webdesignpresse.com'); ?>">
					<i class="fas fa-envelope text-secondary mr-2"></i>
					<?php echo get_theme_mod('topbar_text_left2', 'info@webdesignpresse.com'); ?>
				</a>
			</div>
			<div class="col-md-6 col-12 text-center text-lg-right" id="topbar-right">
				<?php
					get_template_part( 'template-parts/social');
				?>
			</div>
		</div>
    </div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
	<?php
	// GET HEADER TEMPLATE AND DISPLAY
	if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )):
	
		$header_temp = get_theme_mod('header_template','one');

		switch ($header_temp) {
			case 'one': 
				get_header('one');
				break;
			
			case 'two':
				get_header('two');
				break;
				
			case 'three':
				get_header('three');
				break;
				
			default:
				get_header('one');
		}

		// PAGE SUB HEADER / HEADER BANNER START
		if ( is_front_page() && !get_theme_mod( 'header_banner_visibility' ) ): ?>
			<div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
				<div class="overlay">
					<!-- silence :) -->
				</div>
				<div class="container">
					<h1>
						<?php
						if(get_theme_mod( 'header_banner_title_setting' )){
							echo get_theme_mod( 'header_banner_title_setting' );
						}else{
							echo 'PORSCH';
						}
						?>
					</h1>
					<p>
						<?php
						if(get_theme_mod( 'header_banner_tagline_setting' )){
							echo get_theme_mod( 'header_banner_tagline_setting' );
						}else{
							echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
						}
						?>
					</p>
					<a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>