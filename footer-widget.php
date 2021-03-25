<!-- Payments section -->
					<section id="payments-section" class="bg-white">
					<div class="container">
						<div class="row py-5 text-center">
							<div class="col-12">
								<h4 class="mt-0 mb-5">Zahlungsmethoden</h4>
								<div class="wdp-row justify-content-center">
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/klarna2.png" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/klarna3.png" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/Klarna-1.png" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/logo_electroniccash.jpg" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/pp.png" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/americanex.jpg" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/mastercard.png" alt=""></div>
									<div><img class="footer-icon" src="<?=get_template_directory_uri();?>/inc/assets/images/visa.png" alt=""></div>
								</div>
							</div>

						</div>
					</div>
					</section>
					<!-- end payments -->


<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {?>
        <div id="footer-widget" class="row m-0">

                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-3 p-3 p-md-5"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-3 p-3 p-md-5"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-3 p-3 p-md-5"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
					 <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div class="col-12 col-md-3 p-3 p-md-5"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?>

        </div>

<?php }
