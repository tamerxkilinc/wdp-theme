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
	
				</article>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div>
</div>
	
<?php get_footer();