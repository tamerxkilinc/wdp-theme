<?php
 require_once(get_template_directory() . '/inc/class-tgm-plugin-activation.php');

 function tgm_plugins(){
     $shop_plugins=array(
         array(
             'name'             =>   'WooCommerce',
             'slug'             =>   '/woocommerce',
             'recommended'         =>   'true',
         ),

        array(
            'name'             =>   'Customer verification for WooCommerce',
            'slug'             =>   '/customer-email-verification-for-woocommerce',
            'required'         =>   'true',
        ),

        array(
            'name'             =>   'DHL for WooCommerce',
            'slug'             =>   '/dhl-for-woocommerce',
            'required'         =>   'true',
        ),

        array(
            'name'             =>   'Facebook for WooCommerce',
            'slug'             =>   '/facebook-for-woocommerce',
            'recommended'         =>   'true',
        ),

        array(
            'name'             =>   'Klarna Order Management for WooCommerce',
            'slug'             =>   '/klarna-order-management-for-woocommerce',
            'required'         =>   'true',
        ),

        array(
            'name'             =>   'Klarna Payments for WooCommerce',
            'slug'             =>   '/klarna-payments-for-woocommerce',
            'required'         =>   'true',
        ),

        array(
            'name'             =>   'PayPal Plus for WooCommerce',
            'slug'             =>   '/woo-paypalplus',
            'required'         =>   'true',
        ),

        array(
            'name'             =>   'Smash Balloon Social Photo Feed',
            'slug'             =>   '/instagram-feed',
            'recommended'         =>   'true',
        ),

        array(
            'name'             =>   'WooCommerce Stripe Payment Gateway',
            'slug'             =>   '/woocommerce-gateway-stripe',
            'required'         =>   'true',
        ),

        array(
            'name'             =>   'YITH WooCommerce Wishlist',
            'slug'             =>   '/yith-woocommerce-wishlist',
            'recommended'         =>   'true',
        ),

        array(
            'name'             =>   'YITH Infinite Scrolling',
            'slug'             =>   '/yith-infinite-scrolling',
            'recommended'         =>   'true',
        ),

        array(
            'name'             =>   'WooCommerce PDF Invoices & Packing Slips',
            'slug'             =>   '/woocommerce-pdf-invoices-packing-slips',
            'recommended'         =>   'true',
        ),

        array(
            'name'             =>   'Jetpack – WP Security, Backup, Speed, & Growth',
            'slug'             =>   '/jetpack',
            'recommended'         =>   'true',
        ),
       
    );

     $plugins=array(
        array(
            'name'      =>   'Hide Updates',
            'slug'      =>   'hide-updates',
            'required'  =>   'true',
        ),

        array(
            'name'      =>   'Hide Updates',
            'slug'      =>   '/html-editor-syntax-highlighter',
            'required'  =>   'true',
        ),

        array(
            'name'      =>   'Html Editor Syntax Highlighter',
            'slug'      =>   '/html-editor-syntax-highlighter',
            'required'  =>   'true',
        ),

        array(
            'name'         =>   'Contact Form 7',
            'slug'         =>   '/contact-form-7',
            'recommended'  =>   'true',
        ),

        array(
            'name'         =>   'Leaflet Map',
            'slug'         =>   '/leaflet-map',
            'recommended'  =>   'true',
        ),

        array(
            'name'         =>   'Complianz | GDPR/CCPA Cookie-Einwilligung',
            'slug'         =>   '/complianz-gdpr',
            'required'  =>   'true',
        ),

        array(
            'name'         =>   'Maintenance',
            'slug'         =>   '/maintenance',
            'required'  =>   'true',
        ),

        array(
            'name'         =>   'Smart Slider 3',
            'slug'         =>   '/smart-slider-3',
            'recommended'  =>   'true',
        ),

        array(
            'name'             =>   'Jetpack – WP Security, Backup, Speed, & Growth',
            'slug'             =>   '/jetpack',
            'recommended'         =>   'true',
        ),

        array(
            'name'             =>   'Newsletter',
            'slug'             =>   '/newsletter',
            'recommended'         =>   'true',
        ),

     );

     if(get_theme_mod('header_template', 'one') ==' shop'){
         array_push($plugins, $shop_plugins);
     }

     $config=array(
             'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to bundled plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'parent_slug'  => 'themes.php',            // Parent menu slug.
            'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => true,                   // Automatically activate plugins after installation or not.
            'message'      => '',                      // Message to output right before the plugins table.

    );

     tgmpa($plugins,$config);

 }

 add_action('tgmpa_register', 'tgm_plugins');