<header id="masthead" class="site-header navbar-static-top" <?php if ( get_theme_mod('header_shadow',TRUE) == TRUE) : echo 'style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;"'; endif; ?> role="banner">	
    <div class="container-fluid">
        <nav class="navbar navbar-expand-xl navbar-light p-0">
            <div class="navbar-brand img-fluid order-2 order-xl-1">
                <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                    <a href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>
                <?php else : ?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                <?php endif; ?>
                
            </div>

            <button class="navbar-toggler order-1 order-xl-2" type="button" data-toggle="offcanvas" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php

            $website_type = get_theme_mod( 'select_website_type', 'one' );

            if ( $website_type == 'two' ) {
                // Single Page
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => 'div',
                    'container_id'    => '',
                    'container_class' => 'navbar-collapse offcanvas-hide ml-xl-5',
                    'menu_id'         => false,
                    'menu_class'      => 'nav nav-pills',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_single_bootstrap_navwalker::fallback',
                    'walker'          => new wp_single_bootstrap_navwalker()
                ));
            }else{
                // Multi Page
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => 'div',
                    'container_id'    => '',
                    'container_class' => 'collapse navbar-collapse offcanvas-hide ml-xl-4 order-4 order-xl-3',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
            } ?>

            <?php
            $myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
            if ( $myaccount_page_id ) {
                $myaccount_page_url = get_permalink( $myaccount_page_id );
            } ?>
            
            <a class="navbar-icon text-dark order-5 order-xl-6 d-none d-xl-block" href="<?php echo $myaccount_page_url; ?>"> 
                <?php if ( is_user_logged_in() ) {
                    echo '<i class="fas fa-user-circle"></i>';
                }else{
                    echo '<i class="fas fa-sign-in-alt"></i>';
                }
                ?>
            </a>
            
            <?php if (!is_checkout()) : ?>
            <a class="navbar-icon text-dark order-3 order-xl-5" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="fa-layers c-pointer">
                    <i class="fas fa-shopping-basket"></i>
                    <span class="fa-layers-counter" id="mini-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </span>
            </a>
            <?php endif; ?>
			
			<a class="navbar-icon text-dark order-6 order-xl-4 d-none d-xl-block" data-toggle="modal" data-target="#productSearchModal">
                <i class="fas fa-search"></i>
            </a>
    
        </nav>
    </div>
</header><!-- #masthead -->

<!-- Offcanvas page -->
<div class="offcanvas-collapse shadow">
	<h3>Menü<span class="float-right" data-toggle="offcanvas"><i class="fas fa-times text-danger"></i></span></h3>
	
	<h4>Kategorien</h4>
	<?php
	wp_nav_menu( array(
		'theme_location'  => 'primary',
		'container'       => 'div',
		'container_id'    => '',
		'container_class' => '',
		'menu_id'         => false,
		'menu_class'      => 'navbar-nav',
		'depth'           => 3,
		'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
		'walker'          => new wp_bootstrap_navwalker()
	));
	?>
	
	<ul class="navbar-nav mt-5">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo $myaccount_page_url; ?>">
				<?php if ( is_user_logged_in() ) {
                    echo '<i class="fas fa-user-circle mr-2"></i>Mein Konto';
                }else{
                    echo '<i class="fas fa-sign-in-alt mr-2"></i>Anmelden';
                }
                ?>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"	href="<?php echo wc_get_cart_url(); ?>">
				 <i class="fas fa-shopping-basket mr-2"></i>Warenkorb
			</a>
		</li>
	</ul>
	
	<div class="sitename">
		<small><mute>© <?php echo esc_attr( get_bloginfo( 'name' ) ); ?></mute></small>
	</div>
	
</div>

<!-- Serach Modal -->
<div class="modal fade" id="productSearchModal" tabindex="-1" role="dialog" aria-labelledby="productSearchModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title m-0 p-0" id="productSearchModalTitle">
                    <?php echo __('Produktsuche', 'woocommerce'); ?>
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <?php if ( is_active_sidebar( 'header-1' )) :
                        dynamic_sidebar( 'header-1' );
                    endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Cart Modal -->
<?php global $woocommerce; ?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title m-0 p-0" id="exampleModalCenterTitle">
                    <?php echo __('Übersicht', 'woocommerce'); ?>
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>

				<div class="row justify-content-center no-gutters py-3">
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/klarna2.png" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/klarna3.png" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/Klarna-1.png" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/logo_electroniccash.jpg" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/pp.png" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/americanex.jpg" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/mastercard.png" alt=""></div>
                    <div class="col-auto"><img class="afooter-icon" src="/wp-content/uploads/2020/08/visa.png" alt=""></div>
                </div>

            </div>
            <div class="modal-footer">
                <a class="btn btn-dark" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
                    <?php echo __('Zum Warenkorb', 'wp-bootstrap-starter'); ?>
                </a>
                <a class="btn btn-dark" href="<?php echo $woocommerce->cart->get_checkout_url(); ?>">
                    <?php echo __('Zur Kasse', 'wp-bootstrap-starter'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="shipping_info_toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
    <div class="toast-header">
        <i class="fas fa-shipping-fast mr-2"></i><strong class="mr-auto">Kostenloser Versand</strong>
        <small class="text-muted">Jetzt</small>
        <button type="button" class="ml-2 mb-1 close" onclick="closeShippingInfoToast()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Ab einem Bestellwert von 100€ ist der Hin- &amp; Rückversand innerhalb Deutschlands kostenlos!
    </div>
</div>