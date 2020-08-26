<header id="masthead" class="site-header navbar-static-top" <?php if ( get_theme_mod('header_shadow',TRUE) == TRUE) : echo 'style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;"'; endif; ?> role="banner">	
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-brand img-fluid">
                <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                    <a href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>
                <?php else : ?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                <?php endif; ?>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
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
                    'container_class' => 'collapse navbar-collapse justify-content-end',
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
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
            }
            ?>
    
        </nav>
    </div>
</header><!-- #masthead -->