<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package WP_Bootstrap_Starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themeslug_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function wp_bootstrap_starter_customize_register( $wp_customize ) {



    //Style Preset
/*
    $wp_customize->add_section(
        'typography',
        array(
            'title' => __( 'Preset Styles', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the typography', 'wp-bootstrap-starter' ),
            'priority' => 20,
        )
    );

    $wp_customize->add_setting( 'preset_style_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_style_setting', array(
        'label' => __( 'Typography', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'preset_style_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'arbutusslab-opensans' => 'Arbutus Slab / Opensans',
            'montserrat-merriweather' => 'Montserrat / Merriweather',
            'montserrat-opensans' => 'Montserrat / Opensans',
            'oswald-muli' => 'Oswald / Muli',
            'poppins-lora' => 'Poppins / Lora',
            'poppins-poppins' => 'Poppins / Poppins',
            'roboto-roboto' => 'Roboto / Roboto',
            'robotoslab-roboto' => 'Roboto Slab / Roboto',
			'limelight-reem+kufi' => 'Limelight / Reem Kufi',
        )
    ) ) );

    $wp_customize->add_setting( 'preset_color_scheme_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_color_scheme_setting', array(
        'label' => __( 'Color Scheme', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'preset_color_scheme_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'red' => 'Red',
            'green' => 'Green',
            'orange' => 'Orange',
            'pink' => 'Pink',
        )
    ) ) );

*/
	
	/* COLORS AND CO */
	$wp_customize->add_section(
        'colours',
        array(
            'title' => __( 'Colors', 'wp-bootstrap-starter' ),
            'priority' => 50,
        )
    );
	
	$wp_customize->add_setting( 'all_p_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'all_p_clr',
            array(
                'label'      => __( 'Paragraph color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of the paragraph text', 'wp-bootstrap-starter' ),
                'section'    => 'colours',
                'settings'   => 'all_p_color',
            ) )
    );
	
	$wp_customize->add_setting( 'all_a_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'all_a_clr',
            array(
                'label'      => __( 'Link color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of links', 'wp-bootstrap-starter' ),
                'section'    => 'colours',
                'settings'   => 'all_a_color',
            ) )
    );
	
	$wp_customize->add_setting( 'all_h_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'all_h_clr',
            array(
                'label'      => __( 'Headings color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of headings', 'wp-bootstrap-starter' ),
                'section'    => 'colours',
                'settings'   => 'all_h_color',
            ) )
    );
	
    /*Banner*/
    $wp_customize->add_section(
        'header_image',
        array(
            'title' => __( 'Header Banner', 'wp-bootstrap-starter' ),
			'description' => __( 'The header banner will only be shown on the home page','wp-bootstrap-starter' ),
            'priority' => 90,
        )
    );

	$wp_customize->add_setting( 'header_banner_h1', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_banner_color',
            array(
                'label'      => __( 'Header banner heading color', 'wp-bootstrap-starter' ),
				'description' => __( 'Choose a color for the header banner heading','wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_banner_h1',
            ) )
    );
	
	$wp_customize->add_setting( 'header_banner_tagline', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_banner_tagline_color',
            array(
                'label'      => __( 'Header banner heading color', 'wp-bootstrap-starter' ),
				'description' => __( 'Choose a color for the header banner tagline','wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_banner_tagline',
            ) )
    );
	
	$wp_customize->add_setting( 'header_banner_scroller', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_banner_scroller_color',
            array(
                'label'      => __( 'Header banner scroller color', 'wp-bootstrap-starter' ),
				'description' => __( 'Choose a color for the header banner scroller','wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_banner_scroller',
            ) )
    );

    /*
    $wp_customize->add_control(
        'header_img',
        array(
            'label' => __( 'Header Image', 'wp-bootstrap-starter' ),
			'description' => __( 'Choose a background-image for the header banner','wp-bootstrap-starter' ),
            'section' => 'header_images',
            'type' => 'text',
        )
    );
    */

    $wp_customize->add_setting(
        'header_bg_color_setting',
        array(
            'default'     => '#f9f9f9',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
	
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg_color',
            array(
                'label'      => __( 'Header Banner Background Color', 'wp-bootstrap-starter' ),
				'description' => __( 'Choose a background-color for the header banner','wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_bg_color_setting',
            ) )
    );

    $wp_customize->add_setting(
        'header_overlay_transparency_setting',
        array(
            'default'     => 40,
            'sanitize_callback' => 'absint',
        )
    );
	
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'header_overlay_transparency',
            array(
                'type' => 'number',
                'label'      => __( 'Header Banner Overlay Transparency', 'wp-bootstrap-starter' ),
                'description' => __( 'Choose a number between 0 and 100','wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_overlay_transparency_setting',
                'input_attrs' => array(
                    'min' => 0,
                    'max' => 100,
                    'step'  => 1
                ),
            )
        )
    );

    $wp_customize->add_setting( 'header_banner_title_setting', array(
        'default' => __( 'PORSCH', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_title_setting', array(
        'label' => __( 'Banner Title', 'wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_title_setting',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_banner_tagline_setting', array(
        'default' => __( 'To customize the contents of this header banner and other elements of your site go to Dashboard - Appearance - Customize','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_tagline_setting', array(
        'label' => __( 'Banner Tagline', 'wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_tagline_setting',
        'type' => 'text'
    ) ) );
	
    $wp_customize->add_setting( 'header_banner_visibility', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_visibility', array(
        'settings' => 'header_banner_visibility',
        'label'    => __('Remove Header Banner', 'wp-bootstrap-starter'),
		'description' => __( 'Enable or disable the header banner','wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'type'     => 'checkbox',
    ) ) );




    //Site Name Text Color
   $wp_customize->add_section(
        'site_name_text_color',
        array(
            'title' => __( 'Other Customizations', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 40,
        )
    );
    $wp_customize->add_section(
        'colors',
        array(
            'title' => __( 'Background Color', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 50,
            'panel' => 'styling_option_panel',
        )
    );
    $wp_customize->add_section(
        'background_image',
        array(
            'title' => __( 'Background Image', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 60,
            'panel' => 'styling_option_panel',
        )
    );
    $wp_customize->add_section(
        'website_type',
        array(
            'title' => __( 'Website Presets', 'wp-bootstrap-starter' ),
            'description' => __( 'Do you want to have your content on sub pages or on a single home page?', 'wp-bootstrap-starter' ),
            'priority' => 20,
        )
    );

    $wp_customize->add_setting( 'select_website_type', array(
		'default' => 'one',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control(
		'website_type_selector',
		array(
			'label'      => __( 'Header template', 'wp-bootstrap-starter' ),
			'description' => __('Choose a template for your header', 'wp-bootstrap-starter'),
			'type' => 'select',
			'choices'  => array(
				'one'  => 'Multi Pages (Standard)',
				'two' => 'Single Page (Landing Page)',
			),
			'section'    => 'website_type',
			'settings'   => 'select_website_type',
		)
    );

    $wp_customize->add_setting( 'wdp_bootstrap_theme', array(
        'default' => 'one',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control(
        'bootstrap_theme_control',
        array(
            'label' => __( 'Bootstrap Theme', 'wp-bootstrap-starter' ),
            'description' => __( 'Choose a pre-defined Bootstrap theme for your website.', 'wp-bootstrap-starter' ),
            'type' => 'select',
            'choices' => array(
                'one' => 'Bootstrap',
                'cosmo' => 'Cosmo',
                'cyborg' => 'Cyborg',
                'flatly' => 'Flatly',
                'litera' => 'Litera',
                'lumen' => 'Lumen',
                'lux' => 'Lux',
                'materia' => 'Materia',
                'minty' => 'Minty',
                'pulse' => 'Pulse',
                'sandstone' => 'Sandstone',
                'darkly' => 'Darkly',
                'simplex' => 'Simplex',
                'sketchy' => 'Sketchy',
                'slate' => 'Slate',
                'solar' => 'Solar',
                'superhero' => 'Superhero',
                'united' => 'United',
                'yeti' => 'Yeti'
            ),
            'section'    => 'website_type',
			'settings'   => 'wdp_bootstrap_theme',
        )
    );

	
	//Topbar Colors and Text
	
	$wp_customize->add_section(
		'topbar',
		array(
			'title' => __( 'Topbar', 'wp-bootstrap-starter' ),
			'description' => __( 'You can define colors and content of the topbar here.', 'wp-bootstrap-starter' ),
			'priority' => 70,
		)
	);
	
	$wp_customize->add_setting( 'topbar_background_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'topbar_bg_color',
            array(
                'label'      => __( 'Topbar background color', 'wp-bootstrap-starter' ),
                'section'    => 'topbar',
                'settings'   => 'topbar_background_color',
            ) )
    );
	
	$wp_customize->add_setting( 'topbar_text_color', array(
        'default'   => '#fff',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'topbar_txt_color',
            array(
                'label'      => __( 'Topbar text color', 'wp-bootstrap-starter' ),
                'section'    => 'topbar',
                'settings'   => 'topbar_text_color',
            ) )
    );
	
	$wp_customize->add_setting( 'topbar_text_left1', array(
        'default'   => '02255 - 420 584',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'topbar_txt_left_1',
		array(
			'label'      => __( 'Topbar text-left 1', 'wp-bootstrap-starter' ),
			'description' => __('Text with link. HTML allowed.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'topbar',
			'settings'   => 'topbar_text_left1',
		)
    );
	
	$wp_customize->add_setting( 'topbar_text_left2', array(
        'default'   => 'info@webdesignpresse.com',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'topbar_txt_left_2',
		array(
			'label'      => __( 'Topbar text-left 2', 'wp-bootstrap-starter' ),
			'description' => __('Text with link. HTML allowed.', 'wp-bootstrap-starter'),
			'section'    => 'topbar',
			'settings'   => 'topbar_text_left2',
		)
    );
	
	$wp_customize->add_setting( 'topbar_text_right1', array(
        'default'   => 'Stadt 12, 41366 Musterstadt',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'topbar_txt_right_1',
		array(
			'label'      => __( 'Topbar text-right 1', 'wp-bootstrap-starter' ),
			'description' => __('Standard text without link. HTML allowed.', 'wp-bootstrap-starter'),
			'section'    => 'topbar',
			'settings'   => 'topbar_text_right1',
		)
    );
	
	$wp_customize->add_setting( 'topbar_toggler_text', array(
        'default'   => 'Contact us',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'topbar_toggler_txt',
		array(
			'label'      => __( 'Topbar toggler text', 'wp-bootstrap-starter' ),
			'description' => __('Only visible on mobile devices', 'wp-bootstrap-starter'),
			'section'    => 'topbar',
			'settings'   => 'topbar_toggler_text',
		)
    );
	
	$wp_customize->add_setting( 'topbar_toggler_border_color', array(
        'default'   => '#666',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'topbar_toggler_brdr_color',
            array(
                'label'      => __( 'Topbar toggler border-color', 'wp-bootstrap-starter' ),
				'description' => __( 'Only visible on mobile devices', 'wp-bootstrap-starter' ),
                'section'    => 'topbar',
                'settings'   => 'topbar_toggler_border_color',
            ) )
    );
	
	//Header and Navbar Colors and style
	$wp_customize->add_section(
		'header',
		array(
			'title' => __( 'Header', 'wp-bootstrap-starter' ),
			'description' => __( 'You can define colors and styles of the header here', 'wp-bootstrap-starter' ),
			'priority' => 80,
		)
	);
	
	$wp_customize->add_setting( 'header_template', array(
		'default' => 'one',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control(
		'header_temp',
		array(
			'label'      => __( 'Header template', 'wp-bootstrap-starter' ),
			'description' => __('Choose a template for your header', 'wp-bootstrap-starter'),
			'type' => 'select',
			'choices'  => array(
				'one'  => 'Standard',
				'two' => 'Centered Logo and Navigation',
				'three' => 'Mobile Menu',
			),
			'section'    => 'header',
			'settings'   => 'header_template',
		)
    );
	
	$wp_customize->add_setting( 'header_shadow', array(
        'default'   => TRUE,
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'header_shdw',
            array(
                'label'      => __( 'Header Box Shadow', 'wp-bootstrap-starter' ),
				'description' => __( 'Enable or disable box shadow for the header','wp-bootstrap-starter'),
				'type' => 'checkbox',
                'section'    => 'header',
                'settings'   => 'header_shadow',
            )
    );
	
	$wp_customize->add_setting( 'header_background', array(
        'default'   => '#fff',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg',
            array(
                'label'      => __( 'Header background color', 'wp-bootstrap-starter' ),
                'section'    => 'header',
                'settings'   => 'header_background',
            ) )
    );
	
	$wp_customize->add_setting( 'navbar_active_link_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'navbar_active_link_clr',
            array(
                'label'      => __( 'Navbar active link color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the link color of the site the user is currently viewing', 'wp-bootstrap-starter' ),
                'section'    => 'header',
                'settings'   => 'navbar_active_link_color',
            ) )
    );
	
	$wp_customize->add_setting( 'navbar_active_link_background', array(
        'default'   => '#fff',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'navbar_active_link_bg',
            array(
                'label'      => __( 'Navbar active link background-color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the link background of the site the user is currently viewing', 'wp-bootstrap-starter' ),
                'section'    => 'header',
                'settings'   => 'navbar_active_link_background',
            ) )
    );
	
	$wp_customize->add_setting( 'navbar_link_color', array(
        'default'   => '#666',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'navbar_link_clr',
            array(
                'label'      => __( 'Navbar link color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the link color of all links in the navbar', 'wp-bootstrap-starter' ),
                'section'    => 'header',
                'settings'   => 'navbar_link_color',
            ) )
    );
	
	$wp_customize->add_setting( 'navbar_link_background', array(
        'default'   => '#fff',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'navbar_link_bg',
            array(
                'label'      => __( 'Navbar link background-color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the link background-color of all links in the navbar', 'wp-bootstrap-starter' ),
                'section'    => 'header',
                'settings'   => 'navbar_link_background',
            ) )
    );
	
	$wp_customize->add_setting( 'navbar_brand_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'navbar_brand_clr',
            array(
                'label'      => __( 'Navbar brand color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of your site-name', 'wp-bootstrap-starter' ),
                'section'    => 'header',
                'settings'   => 'navbar_brand_color',
            ) )
    );
		
	//Footer colors and style
	$wp_customize->add_section(
		'footer',
		array(
			'title' => __( 'Footer', 'wp-bootstrap-starter' ),
			'description' => __( 'You can define colors and styles of the footer here', 'wp-bootstrap-starter' ),
			'priority' => 100,
		)
	);
	
	$wp_customize->add_setting( 'footer_widgets_background', array(
        'default'   => '#eee',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_widgets_bg',
            array(
                'label'      => __( 'Footer widgets background-color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the background-color of the footer', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_widgets_background',
            ) )
    );
	
	$wp_customize->add_setting( 'footer_widgets_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_widgets_clr',
            array(
                'label'      => __( 'Footer widgets color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of the footer (text, links, ..)', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_widgets_color',
            ) )
    );
	
	$wp_customize->add_setting( 'footer_widgets_h_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_widgets_h_clr',
            array(
                'label'      => __( 'Footer widgets heading color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of the headings in the footer', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_widgets_h_color',
            ) )
    );
	
	$wp_customize->add_setting( 'footer_widgets_h_b_color', array(
        'default'   => '#666',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_widgets_h_b_clr',
            array(
                'label'      => __( 'Footer widgets heading border color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of the border of the headings in the footer-widgets-area', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_widgets_h_b_color',
            ) )
    );

	$wp_customize->add_setting( 'footer_widgets_h_b_style', array(
        'default'   => 'style1',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'footer_widgets_h_b_style',
		array(
			'label'      => __( 'Footer widgets heading border style', 'wp-bootstrap-starter' ),
			'description' => __('Define the style of the border of the headings of the footer widget area', 'wp-bootstrap-starter'),
			'type' => 'select',
			'choices'  => array(
				'style1'  => 'Border on left',
				'style2' => 'Border bottom',
				'no_border' => 'No border',
			),
			'section'    => 'footer',
			'settings'   => 'footer_widgets_h_b_style',
		)
    );
	
	$wp_customize->add_setting( 'footer_template', array(
		'default' => 'one',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control(
		'footer_temp',
		array(
			'label'      => __( 'Footer template', 'wp-bootstrap-starter' ),
			'description' => __('Choose a template for your footer', 'wp-bootstrap-starter'),
			'type' => 'select',
			'choices'  => array(
				'one'  => 'Standard',
				'two' => 'Centered credits',
			),
			'section'    => 'footer',
			'settings'   => 'footer_template',
		)
    );
	
	$wp_customize->add_setting( 'footer_background_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_background_clr',
            array(
                'label'      => __( 'Footer background color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the background-color of the bottom footer', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_background_color',
            ) )
    );
	
	$wp_customize->add_setting( 'footer_color', array(
        'default'   => '#eee',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_clr',
            array(
                'label'      => __( 'Footer color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of links and text in the bottom footer', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_color',
            ) )
    );
	
	$wp_customize->add_setting( 'footer_scroller_color', array(
        'default'   => '#eee',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_scroller_clr',
            array(
                'label'      => __( 'Footer scroller color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the color of to-the-top scrollerin the bottom footer', 'wp-bootstrap-starter' ),
                'section'    => 'footer',
                'settings'   => 'footer_scroller_color',
            ) )
    );

	//Navbar Colors and style
	$wp_customize->add_section(
		'sidebar',
		array(
			'title' => __( 'Sidebar', 'wp-bootstrap-starter' ),
			'description' => __( 'You can define colors and styles of the sidebar here', 'wp-bootstrap-starter' ),
			'priority' => 110,
		)
	);
	
	$wp_customize->add_setting( 'sidebar_style', array(
        'default'   => 'style1',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'sidebar_stl',
		array(
			'label'      => __( 'Sidebar style', 'wp-bootstrap-starter' ),
			'description' => __('Define the style of the sidebar', 'wp-bootstrap-starter'),
			'type' => 'select',
			'choices'  => array(
				'style1'  => 'Border on left',
				'style2' => 'Background with padding',
				'no_bg_no_border' => 'No background and no border',
			),
			'section'    => 'sidebar',
			'settings'   => 'sidebar_style',
		)
    );
	
	$wp_customize->add_setting( 'sidebar_border_color', array(
        'default'   => '#eaecef',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sidebar_border_clr',
            array(
                'label'      => __( 'Sidebar border color', 'wp-bootstrap-starter' ),
				'description' => __( 'Only available when choosing ,,Border on left" as sidebar style', 'wp-bootstrap-starter' ),
                'section'    => 'sidebar',
                'settings'   => 'sidebar_border_color',
            ) )
    );
	
	$wp_customize->add_setting( 'sidebar_widgets_background', array(
        'default'   => '#eee',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sidebar_widgets_background_clr',
            array(
                'label'      => __( 'Sidebar widgets background color', 'wp-bootstrap-starter' ),
				'description' => __( 'Only available when choosing ,,Background with padding" as sidebar style', 'wp-bootstrap-starter' ),
                'section'    => 'sidebar',
                'settings'   => 'sidebar_widgets_background',
            ) )
    );
	
	$wp_customize->add_setting( 'sidebar_widgets_heading_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sidebar_widgets_heading_clr',
            array(
                'label'      => __( 'Sidebar widgets heading color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the colors of the widget headings', 'wp-bootstrap-starter' ),
                'section'    => 'sidebar',
                'settings'   => 'sidebar_widgets_heading_color',
            ) )
    );
	
	$wp_customize->add_setting( 'sidebar_widgets_color', array(
        'default'   => '#2b2b2b',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sidebar_widgets_clr',
            array(
                'label'      => __( 'Sidebar widgets color', 'wp-bootstrap-starter' ),
				'description' => __( 'Define the colors of the widget texts (links, texts, icons, ...)', 'wp-bootstrap-starter' ),
                'section'    => 'sidebar',
                'settings'   => 'sidebar_widgets_color',
            ) )
    );
	
	$wp_customize->add_setting( 'sidebar_widgets_shadow', array(
        'default'   => FALSE,
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'sidebar_widgets_shdw',
		array(
			'label' => __('Sidebar widgets box shadow','wp-bootstrap-starter','wp-bootstrap-starter'),
			'description' => __('Enable or disable box shadow for the sidebar widget boxes','wp-bootstrap-starter'),
			'type' => 'checkbox',
			'section' => 'sidebar',
			'settings' => 'sidebar_widgets_shadow',
		)
	);
	
	// Social
	$wp_customize->add_section(
		'social',
		array(
			'title' => __( 'Social', 'wp-bootstrap-starter' ),
			'description' => __( 'You can insert your social media channels here.', 'wp-bootstrap-starter' ),
			'priority' => 130,
		)
	);
	
	$wp_customize->add_setting( 'social_icon_size', array(
		'default' => 'one',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control(
		'social_icon_sz',
		array(
			'label'      => __( 'Social icon\'s size', 'wp-bootstrap-starter' ),
			'description' => __('Choose a size for your icons', 'wp-bootstrap-starter'),
			'type' => 'select',
			'choices'  => array(
				'one'  => 'Standard',
				'two' => 'Medium',
				'three' => 'Big',
			),
			'section'    => 'social',
			'settings'   => 'social_icon_size',
		)
    );
	
	$wp_customize->add_setting( 'social_fb_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_fb_a',
		array(
			'label'      => __( 'Facebook', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your facebook site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_fb_link',
		)
    );
	
	$wp_customize->add_setting( 'social_fb_color', array(
        'default'   => '#2244aa',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_fb_clr',
            array(
                'label'      => __( 'Facebook icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_fb_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_insta_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_insta_a',
		array(
			'label'      => __( 'Instagram', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your instagram site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_insta_link',
		)
    );
	
	$wp_customize->add_setting( 'social_insta_color', array(
        'default'   => '#8942f4',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_insta_clr',
            array(
                'label'      => __( 'Instagram icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_insta_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_snap_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_snap_a',
		array(
			'label'      => __( 'Snapchat', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your snapchat site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_snap_link',
		)
    );
	
	$wp_customize->add_setting( 'social_snap_color', array(
        'default'   => '#f4e542',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_snap_clr',
            array(
                'label'      => __( 'Snapchat icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_snap_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_gplus_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_gplus_a',
		array(
			'label'      => __( 'Google Plus', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your Google Plus site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_gplus_link',
		)
    );
	
	$wp_customize->add_setting( 'social_gplus_color', array(
        'default'   => '#c11919',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_gplus_clr',
            array(
                'label'      => __( 'Google plus icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_gplus_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_youtube_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_youtube_a',
		array(
			'label'      => __( 'YouTube', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your YouTube channel. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_youtube_link',
		)
    );
	
	$wp_customize->add_setting( 'social_youtube_color', array(
        'default'   => '#ff0000',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_youtube_clr',
            array(
                'label'      => __( 'YouTube icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_youtube_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_twitter_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_twitter_a',
		array(
			'label'      => __( 'Twitter', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your twitter site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_twitter_link',
		)
    );
	
	$wp_customize->add_setting( 'social_twitter_color', array(
        'default'   => '#42c9ff',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_twitter_clr',
            array(
                'label'      => __( 'Twitter icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_twitter_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_pinterest_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_pinterest_a',
		array(
			'label'      => __( 'Pinterest', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your Pinterest site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_pinterest_link',
		)
    );
	
	$wp_customize->add_setting( 'social_pinterest_color', array(
        'default'   => '#aa0a0a',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_pinterest_clr',
            array(
                'label'      => __( 'Pinterest icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_pinterest_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_tumblr_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_tumblr_a',
		array(
			'label'      => __( 'Tumblr', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your Tumblr site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_tumblr_link',
		)
    );
	
	$wp_customize->add_setting( 'social_tumblr_color', array(
        'default'   => '#354e7a',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_tumblr_clr',
            array(
                'label'      => __( 'Tumblr icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_tumblr_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_linkedin_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_linkedin_a',
		array(
			'label'      => __( 'LinkedIn', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your LinkedIn site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_linkedin_link',
		)
    );
	
	$wp_customize->add_setting( 'social_linkedin_color', array(
        'default'   => '#4873bf',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_linkedin_clr',
            array(
                'label'      => __( 'LinkedIn icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_linkedin_color',
            ) )
    );
	
	$wp_customize->add_setting( 'social_xing_link', array(
        'default'   => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ) );
	
	$wp_customize->add_control(
		'social_xing_a',
		array(
			'label'      => __( 'Xing', 'wp-bootstrap-starter' ),
			'description' => __('Insert the link to your Xing site. Leave empty if you wish not to display this icon.', 'wp-bootstrap-starter'),
			'type' => 'text',
			'section'    => 'social',
			'settings'   => 'social_xing_link',
		)
    );
	
	$wp_customize->add_setting( 'social_xing_color', array(
        'default'   => '#185941',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
	
	$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'social_xing_clr',
            array(
                'label'      => __( 'Xing icon color', 'wp-bootstrap-starter' ),
                'section'    => 'social',
                'settings'   => 'social_xing_color',
            ) )
    );
	
	
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
    $wp_customize->get_control( 'header_textcolor'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_image'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_color'  )->section = 'site_name_text_color';

    // Add control for logo uploader
    $wp_customize->add_setting( 'wp_bootstrap_starter_logo', array(
        //'default' => __( '', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_bootstrap_starter_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'wp-bootstrap-starter' ),
        'section'  => 'title_tagline',
        'settings' => 'wp_bootstrap_starter_logo',
    ) ) );

}
add_action( 'customize_register', 'wp_bootstrap_starter_customize_register' );

add_action( 'wp_head', 'wp_bootstrap_starter_customizer_css');
function wp_bootstrap_starter_customizer_css()
{
    ?>
    <style type="text/css">
		h1, h2, h3, h4, h5, h6, th { color: <?php echo get_theme_mod('all_h_color','#2b2b2b'); ?>; }
		a { color: <?php echo  get_theme_mod('all_a_color','#2b2b2b'); ?>; }
		body, p, small { color: <?php echo  get_theme_mod('all_p_color','#2b2b2b'); ?>; }
        #page-sub-header { background: <?php echo get_theme_mod('header_bg_color_setting', '#f9f9f9'); ?>; }
		#page-sub-header h1 { color: <?php echo get_theme_mod('header_banner_h1', '#2b2b2b' ); ?>; }
		#page-sub-header p { color: <?php echo get_theme_mod('header_banner_tagline', '#2b2b2b'); ?>; }
		#page-sub-header a.page-scroller { color: <?php echo get_theme_mod('header_banner_scroller', '#2b2b2b'); ?>; }
		<?php if ( get_theme_mod('sidebar_widgets_shadow',FALSE) == TRUE ) : ?>
			aside#secondary .widget { box-shadow: 0 .125rem .25rem rgba(0,0,0,.075); }
		<?php else : ?>
			aside#secondary .widget { box-shadow: none!important; }
		<?php endif; ?>
		.topbar { background: <?php echo get_theme_mod('topbar_background_color', '#2b2b2b');?>; color: <?php echo get_theme_mod('topbar_text_color', '#fff'); ?>; }
		.topbar a, .topbar p, #topbarTogglerText { color: <?php echo get_theme_mod('topbar_text_color', '#fff'); ?>!important; }
		.topbar a { border-bottom-color: <?php echo get_theme_mod('topbar_toggler_border_color', '#666'); ?>; }
		#masthead { background: <?php echo get_theme_mod('header_background', '#fff'); ?>; }
		#masthead .navbar-nav .nav-item .nav-link { background: <?php echo get_theme_mod('navbar_link_background', '#fff'); ?>; color: <?php echo get_theme_mod('navbar_link_color', '#666'); ?>; }
		#masthead .navbar-nav .nav-item.active .nav-link { background: <?php echo get_theme_mod('navbar_active_link_background', '#fff'); ?>; color: <?php echo get_theme_mod('navbar_active_link_color', '#666'); ?>; }
		#masthead .navbar-brand > a { color: <?php echo get_theme_mod('navbar_brand_color', '#2b2b2b'); ?>; }
		#footer-widget { background: <?php echo get_theme_mod('footer_widgets_background', '#eee' ); ?>; }
		#footer-widget, #footer-widget li, #footer-widget i, #footer-widget tr, #footer-widget td, #footer-widget th, #footer-widget table a, #footer-widget .widget-title { color: <?php echo get_theme_mod('footer_widgets_color','#2b2b2b'); ?>;}
		#footer-widget h1, #footer-widget h2, #footer-widget h3, #footer-widget h4, #footer-widget h5, #footer-widget h6,  { color: <?php echo get_theme_mod('footer_widgets_h_color','#2b2b2b'); ?>;}
		<?php if ( get_theme_mod('footer_widgets_h_b_style') == 'style2' ) : ?>
			#footer-widget .widget-title { border-bottom: 1px solid <?php echo get_theme_mod('footer_widgets_h_b_color', '#666'); ?>; }
		<?php elseif( get_theme_mod('footer_widgets_h_b_style') == 'no_border' ) : ?>
			<!-- Silence is gold -->
		<?php else : ?>
			#footer-widget .widget-title { border-left: 3px solid <?php echo get_theme_mod('footer_widgets_h_b_color', '#666'); ?>; padding-left:10px; }
		<?php endif; ?>
		<?php if ( get_theme_mod('sidebar_style') == 'style2' ) : ?>
			aside#secondary .widget { background: <?php echo get_theme_mod('sidebar_widgets_background','#eee'); ?>; padding:20px; }
		<?php elseif ( get_theme_mod('sidebar_style') == 'no_bg_no_border' ) : ?>
			aside#secondary .widget a, aside#secondary .widget p, aside#secondary .widget th, aside#secondary .widget td, aside#secondary .widget i, aside#secondary .widget { color: <?php echo get_theme_mod('sidebar_widgets_color','#2b2b2b'); ?>; }
		<?php else : ?>
			aside#secondary { border-left-width:1px; border-left-style:solid; border-left-color: <?php echo get_theme_mod('sidebar_border_color','#eaecef'); ?>; }
		<?php endif; ?>
		aside#secondary .widget a, aside#secondary .widget p, aside#secondary .widget th, aside#secondary .widget td, aside#secondary .widget i, aside#secondary .widget { color: <?php echo get_theme_mod('sidebar_widgets_color','#2b2b2b'); ?>; }
		aside#secondary h1, aside#secondary h2, aside#secondary h3, aside#secondary h4, aside#secondary h5, aside#secondary h6, aside#secondary .widget-title { color: <?php echo get_theme_mod('sidebar_widgets_heading_color','#2b2b2b'); ?>}
		footer#colophon, footer#colophon p { background: <?php echo get_theme_mod('footer_background_color','#2b2b2b'); ?>; color: <?php echo get_theme_mod('footer_color','#eee'); ?>!important; }
		footer#colophon a, footer#colophon p, footer#colophon h1, footer#colophon h2, footer#colophon h3, footer#colophon h4, footer#colophon h5, footer#colophon h6 { color: <?php echo get_theme_mod('footer_color','#eee'); ?>; }
		footer#colophon a.page-scroll-tk i { color: <?php echo get_theme_mod('footer_scroller_color','#eee'); ?>; }
		<?php if ( get_theme_mod('social_icon_size', 'one') == 'two' ) : ?>
			a.social_links i { font-size:1.3rem; }
		<?php elseif ( get_theme_mod('social_icon_size', 'one') == 'three' ) : ?>
			a.social_links i { font-size:1.8rem; }
		<?php endif; ?>
		#page-sub-header .overlay { background: rgba(0,0,0,<?php echo ( get_theme_mod( 'header_overlay_transparency_setting', 40 ) / 100 ); ?>)!important; }
    </style>
    <?php
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_bootstrap_starter_customize_preview_js() {
    wp_enqueue_script( 'wp_bootstrap_starter_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_bootstrap_starter_customize_preview_js' );