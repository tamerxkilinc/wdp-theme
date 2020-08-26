<header id="masthead" class="site-header navbar-static-top" role="banner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light p-0" id="centeredNav">
			<div class="row">
				<div class="col-12">
					<div class="navbar-brand img-fluid d-block">
					<?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
						<a href="<?php echo esc_url( home_url( '/' )); ?>">
							<img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="d-block mx-auto">
						</a>
					<?php else : ?>
						<a class="site-title d-block mx-auto text-center" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
					<?php endif; ?>
					</div>
				</div>
				
				<div class="col-12">

					<button class="navbar-toggler d-block d-lg-none mx-auto" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<?php

					$website_type = get_theme_mod( 'select_website_type', 'one' );
					
					if ( $website_type == 'two' ) {
						// Single Page
						wp_nav_menu(array(
							'theme_location'    => 'primary',
							'container'       => 'div',
							'container_id'    => '',
							'container_class' => 'collapse navbar-collapse',
							'menu_id'         => 'centeredNavbar',
							'menu_class'      => 'nav nav-pills d-block mx-auto',
							'depth'           => 3,
							'fallback_cb'     => 'wp_single_bootstrap_navwalker::fallback',
							'walker'          => new wp_single_bootstrap_navwalker()
						));
					}else{
						// Multi Page
						wp_nav_menu(array(
							'theme_location'    => 'primary',
							'container'       => 'div',
							'container_id'    => '',
							'container_class' => 'collapse navbar-collapse',
							'menu_id'         => 'centeredNavbar',
							'menu_class'      => 'navbar-nav d-block mx-auto',
							'depth'           => 3,
							'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							'walker'          => new wp_bootstrap_navwalker()
						));
					}
					
					?>
				</div>
			</div>
		</nav>
	</div>
</header><!-- #masthead -->