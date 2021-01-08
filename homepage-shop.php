<?php
/**
* 
* Template for Woocommerce Homepage 
*
* Template Name: Woocommerce Homepage Template
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="row">
		<section id="primary" class="content-area col-sm-12">
			<main id="main" class="site-main" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="woocommerce-notices-wrapper container mt-5">
						<?php wc_print_notices(); ?>
					</div>

					<?php the_content(); ?>
					
					<section class="wdp_new_products">
						<div class="container">
							<div class="row p-md-4 p-2">
								<div class="col-12">
									<h2 class="text-center mb-4">
										Unsere neuesten Produkte
									</h2>
								</div>
								<?php
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => 9
										);
									$loop = new WP_Query( $args );
									if ( $loop->have_posts() ) {
										while ( $loop->have_posts() ) : $loop->the_post();
											wc_get_template_part( 'content', 'product' );
										endwhile;
									} else {
										echo __( 'No products found' );
									}
									wp_reset_postdata();
								?>
							</div><!--/.products-->
						</div>
					</section>

					<section id="entry" class="py-5">
						<div class="text-center container">
							<h2 class="mb-5" id="entry-header">Porsche Header 1</h2>
							<p id="entry-paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
						</div>
					</section>

					<!-- <section class="wdp_featured_products">
						<div class="container">
							<div class="row p-md-4 p-2">
								<div class="col-12">
									<h2 class="text-center mb-4">
										Bestseller
									</h2>
								</div>
								<div class="col-12"> -->
								<?php //echo do_shortcode( '[featured_products limit="4"]' ); ?>
<!-- 								</div>
							</div>
						</div>
					</section> -->

					<section id="middle-text" class="py-5">
						<div class="text-center container">
							<h2 class="mb-5" id="middle-text-header">Porsche Header 2</h2>
							<p id="middle-text-paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
						</div>
					</section>

					<!-- Payments section -->
					<section id="payments-section">
					<div class="container">
						<div class="row py-5 text-center">
							<div class="col-12">
								<h4>Zahlungsmethoden</h4>
								<div class="wdp-row justify-content-center">
									<div><img class="footer-icon" src="/inc/assets/images/klarna2.png" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/images/klarna3.png" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/imagesKlarna-1.png" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/images/logo_electroniccash.jpg" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/images/pp.png" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/images/americanex.jpg" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/images/mastercard.png" alt=""></div>
									<div><img class="footer-icon" src="/inc/assets/images/visa.png" alt=""></div>
								</div>
							</div>

						</div>
					</div>
					</section>
					<!-- end payments -->
					

	
				</article>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div>
</div>

<?php get_footer();