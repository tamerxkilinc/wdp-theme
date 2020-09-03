<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'wp-bootstrap-starter' ) . "1",
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'wp-bootstrap-starter' ) . "2",
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'wp-bootstrap-starter' ) . "3",
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );
	register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'wp-bootstrap-starter' ) . "4",
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );
	register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'wp-bootstrap-starter' ) . "5",
        'id'            => 'footer-5',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {

	// get selected bootstrap theme from database
	$bootstrap_theme = get_theme_mod( 'wdp_bootstrap_theme','one' );

	if ( $bootstrap_theme == 'one' ) {
		// load bootstrap css
		wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
	}else{
		$bsts = 'bootstrap_' . $bootstrap_theme . '.min.css';
		// load bootstrap theme css
		wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/' . $bsts );
	}
	
	// load fontawesome css
	wp_enqueue_style( 'wp-bootstrap-starter-font-awesome', get_template_directory_uri() . '/inc/assets/css/all.min.css', false, '5.8.2' );
	// load leaflet css
	wp_enqueue_style( 'wp-bootstrap-starter-leaflet-css', 'https://unpkg.com/leaflet@1.4.0/dist/leaflet.css', false, '1.4.0' );
	wp_script_add_data( 'wp-bootstrap-starter-leaflet-css', 'crossorigin', '' );
	wp_script_add_data( 'wp-bootstrap-starter-leaflet-css', 'integrity', 'sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==' );
	// load leaflet css gesture plugin
	wp_enqueue_style( 'wp-bootstrap-starter-leaflet-gesture-css', get_template_directory_uri() . '/inc/assets/css/leaflet-gesture-handling.min.css', false, '1.1.8');
	// load fancybox css
	wp_enqueue_style( 'wp-bootstrap-starter-fancybox-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', false, '3.5.7' );
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    
	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script( 'wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array() );
	wp_enqueue_script( 'wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array() );
    wp_enqueue_script( 'wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.js', array() );
	wp_enqueue_script( 'wp-bootstrap-starter-websitefunctions', get_template_directory_uri() . '/inc/assets/js/website-functions.js', array() );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	// load leaflet js
	wp_enqueue_script( 'wp-bootstrap-starter-leaflet-js', 'https://unpkg.com/leaflet@1.4.0/dist/leaflet.js', array() );
	wp_script_add_data( 'wp-bootstrap-starter-leaflet-js', 'integrity', 'sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==' );
	wp_script_add_data( 'wp-bootstrap-starter-leaflet-js', 'crossorigin', '' );

	// load leaflet js gesture plugin
	wp_enqueue_script( 'wp-bootstrap-starter-leaflet-gesture-js', get_template_directory_uri() . '/inc/assets/js/leaflet-gesture-handling.min.js', array(), '1.1.8' );

	// load fancybox js
	wp_enqueue_script( 'wp-bootstrap-starter-fancybox-js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );


function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );

function custom_excerpt_length( $length ) {
	return 55;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load multi page WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

/**
 * Load single page WordPress nav walker.
 */
if ( ! class_exists( 'wp_single_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_single_bootstrap_navwalker.php');
}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>');
			height:150px;
			width:300px;
			background-size: 300px 150px;
			background-repeat: no-repeat;
        	padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function wdp_remove_autop_pages() {
    if ( is_page() ) {
        remove_filter( 'the_content', 'wpautop' );
        remove_filter( 'the_excerpt', 'wpautop' );
    }
}
add_action( 'wp_head', 'wdp_remove_autop_pages' );

/* Woocommerce remove span element from input fields on checkout and account page */

function woocommerce_form_field( $key, $args, $value = null ) {
	$defaults = array(
		'type'              => 'text',
		'label'             => '',
		'description'       => '',
		'placeholder'       => '',
		'maxlength'         => false,
		'required'          => false,
		'autocomplete'      => false,
		'id'                => $key,
		'class'             => array(),
		'label_class'       => array(),
		'input_class'       => array(),
		'return'            => false,
		'options'           => array(),
		'custom_attributes' => array(),
		'validate'          => array(),
		'default'           => '',
		'autofocus'         => '',
		'priority'          => '',
	);
	$args = wp_parse_args( $args, $defaults );
	$args = apply_filters( 'custom_woocommerce_form_field_args', $args, $key, $value );
	if ( $args['required'] ) {
		$args['class'][] = 'validate-required';
		$required        = '&nbsp;<abbr class="required" title="' . esc_attr__( 'required', 'woocommerce' ) . '">*</abbr>';
	} else {
		$required = '&nbsp;<span class="optional">(' . esc_html__( 'optional', 'woocommerce' ) . ')</span>';
	}
	if ( is_string( $args['label_class'] ) ) {
		$args['label_class'] = array( $args['label_class'] );
	}
	if ( is_null( $value ) ) {
		$value = $args['default'];
	}
	// Custom attribute handling.
	$custom_attributes         = array();
	$args['custom_attributes'] = array_filter( (array) $args['custom_attributes'], 'strlen' );
	if ( $args['maxlength'] ) {
		$args['custom_attributes']['maxlength'] = absint( $args['maxlength'] );
	}
	if ( ! empty( $args['autocomplete'] ) ) {
		$args['custom_attributes']['autocomplete'] = $args['autocomplete'];
	}
	if ( true === $args['autofocus'] ) {
		$args['custom_attributes']['autofocus'] = 'autofocus';
	}
	if ( $args['description'] ) {
		$args['custom_attributes']['aria-describedby'] = $args['id'] . '-description';
	}
	if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
		foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
			$custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
		}
	}
	if ( ! empty( $args['validate'] ) ) {
		foreach ( $args['validate'] as $validate ) {
			$args['class'][] = 'validate-' . $validate;
		}
	}
	$field           = '';
	$label_id        = $args['id'];
	$sort            = $args['priority'] ? $args['priority'] : '';
	$field_container = '<p class="form-row %1$s" id="%2$s" data-priority="' . esc_attr( $sort ) . '">%3$s</p>';
	switch ( $args['type'] ) {
		case 'country':
			$countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();
			if ( 1 === count( $countries ) ) {
				$field .= '<strong>' . current( array_values( $countries ) ) . '</strong>';
				$field .= '<input type="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="' . current( array_keys( $countries ) ) . '" ' . implode( ' ', $custom_attributes ) . ' class="country_to_state" readonly="readonly" />';
			} else {
				$field = '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="country_to_state country_select form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . '><option value="">' . esc_html__( 'Select a country&hellip;', 'woocommerce' ) . '</option>';
				foreach ( $countries as $ckey => $cvalue ) {
					$field .= '<option value="' . esc_attr( $ckey ) . '" ' . selected( $value, $ckey, false ) . '>' . $cvalue . '</option>';
				}
				$field .= '</select>';
				$field .= '<noscript><button type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__( 'Update country', 'woocommerce' ) . '">' . esc_html__( 'Update country', 'woocommerce' ) . '</button></noscript>';
			}
			break;
		case 'state':
			/* Get country this state field is representing */
			$for_country = isset( $args['country'] ) ? $args['country'] : WC()->checkout->get_value( 'billing_state' === $key ? 'billing_country' : 'shipping_country' );
			$states      = WC()->countries->get_states( $for_country );
			if ( is_array( $states ) && empty( $states ) ) {
				$field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';
				$field .= '<input type="hidden" class="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '" readonly="readonly" />';
			} elseif ( ! is_null( $for_country ) && is_array( $states ) ) {
				$field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="state_select form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '">
						<option value="">' . esc_html__( 'Select a state&hellip;', 'woocommerce' ) . '</option>';
				foreach ( $states as $ckey => $cvalue ) {
					$field .= '<option value="' . esc_attr( $ckey ) . '" ' . selected( $value, $ckey, false ) . '>' . $cvalue . '</option>';
				}
				$field .= '</select>';
			} else {
				$field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . ' form-control" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';
			}
			break;
		case 'textarea':
			$field .= '<textarea name="' . esc_attr( $key ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . ' form-control" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>' . esc_textarea( $value ) . '</textarea>';
			break;
		case 'checkbox':
			$field = '<label class="checkbox ' . implode( ' ', $args['label_class'] ) . '" ' . implode( ' ', $custom_attributes ) . '>
						<input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) . ' form-control" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" ' . checked( $value, 1, false ) . ' /> ' . $args['label'] . $required . '</label>';
			break;
		case 'text':
		case 'password':
		case 'datetime':
		case 'datetime-local':
		case 'date':
		case 'month':
		case 'time':
		case 'week':
		case 'number':
		case 'email':
		case 'url':
		case 'tel':
			$field .= '<input type="' . esc_attr( $args['type'] ) . '" class="input-text form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '"  value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';
			break;
		case 'select':
			$field   = '';
			$options = '';
			if ( ! empty( $args['options'] ) ) {
				foreach ( $args['options'] as $option_key => $option_text ) {
					if ( '' === $option_key ) {
						// If we have a blank option, select2 needs a placeholder.
						if ( empty( $args['placeholder'] ) ) {
							$args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
						}
						$custom_attributes[] = 'data-allow_clear="true"';
					}
					$options .= '<option value="' . esc_attr( $option_key ) . '" ' . selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) . '</option>';
				}
				$field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '">
							' . $options . '
						</select>';
			}
			break;
		case 'radio':
			$label_id = current( array_keys( $args['options'] ) );
			if ( ! empty( $args['options'] ) ) {
				foreach ( $args['options'] as $option_key => $option_text ) {
					$field .= '<input type="radio" class="input-radio form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" ' . implode( ' ', $custom_attributes ) . ' id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
					$field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) . '">' . $option_text . '</label>';
				}
			}
			break;
	}
	if ( ! empty( $field ) ) {
		$field_html = '';
		if ( $args['label'] && 'checkbox' !== $args['type'] ) {
			$field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) . '">' . $args['label'] . $required . '</label>';
		}
		$field_html .= $field;
		if ( $args['description'] ) {
			$field_html .= '<span class="description" id="' . esc_attr( $args['id'] ) . '-description" aria-hidden="true">' . wp_kses_post( $args['description'] ) . '</span>';
		}
		//$field_html .= '</span>';
		$container_class = esc_attr( implode( ' ', $args['class'] ) );
		$container_id    = esc_attr( $args['id'] ) . '_field';
		$field           = sprintf( $field_container, $container_class, $container_id, $field_html );
	}
	/**
		 * Filter by type.
		 */
	$field = apply_filters( 'custom_woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );
	/**
		 * General filter on form fields.
		 *
		 * @since 3.4.0
		 */
	$field = apply_filters( 'custom_woocommerce_form_field', $field, $key, $args, $value );
	if ( $args['return'] ) {
		return $field;
	} else {
		echo $field; // WPCS: XSS ok.
	}
}

// Change Woocommerce variable product price display
function wdp_variation_price_format( $price, $product ) {
    $prices = $product->get_variation_prices( true );
	$prices = $prices['price'];
    $min_price = current( $prices );
	$max_price = end($prices);
	if ( $min_price != $max_price ) {
		$price = sprintf( __( 'Ab %1$s', 'wp-bootstrap-starter' ), wc_price( $min_price ) );
		if ( is_single( ) ) {
			$price .= ' ';
		}
		$price .= '<small class="woocommerce-price-suffix d-block">';
		$price .= sprintf( __( 'inkl. MwSt.', 'wp-bootstrap-starter' ) );
		$price .= '</small>';
		return $price;
	}
	return $price;
}

// Remove zoom of Woocommerce single product gallery
function wdp_remove_zoom_lightbox_theme_support() { 
	remove_theme_support( 'wc-product-gallery-zoom' );
}

add_action( 'after_setup_theme', 'wdp_remove_zoom_lightbox_theme_support', 99 );

// Change place order button text
function wdp_custom_place_order_button_text( $button_text ) {
	return 'Kostenpflichtig bestellen';
}
add_filter( 'woocommerce_order_button_text', 'wdp_custom_place_order_button_text' );

function wdp_custom_price_suffix( $price ) {
    return $price . ' <span class="price-description"><small><a href="/versandkosten" target="_blank">zzgl. Versandkosten</a></small></span>';
}
add_filter( 'woocommerce_get_price_html', 'wdp_custom_price_suffix' );

// Display one, some or all product via shortcode
function wdp_display_products( $atts ) {

	$args = [
		"post_type" => "produkt",
	];

	if ( isset( $atts['id'] ) ) {

		$post_ids = explode( "," , $atts["id"] );
		if( !empty( $post_ids ) ) {
			$args["post__in"] = $post_ids;
		}
		
	}else{
		$args["orderby"] = "title";
		$args["order"] = "ASC";
		$args["posts_per_page"] = -1;
	}

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		ob_start();
		while ( $query->have_posts() ) {
			$query->the_post();
			?>
			<div class="card">
				<img class="card-img-top" src="<?=wp_get_attachment_url( get_post_thumbnail_id() );?>">
				<div class="card-body">
					<h4><?=get_the_title();?></h4>
					<p><?=get_the_content();?>
				</div>
			</div>
			<?php
		}
		return ob_get_clean();
	}

	return 'Keine Produkte verfügbar';
}
add_shortcode( 'wdp_produkte', 'wdp_display_products' );

/* Add meta box for product information to post type produkt */
add_filter( 'rwmb_meta_boxes', 'wdp_produkt_register_meta_boxes' );
function wdp_produkt_register_meta_boxes( $meta_boxes ) {
    $prefix = 'wdproduct-';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Produktinformationen', 'wp-bootstrap-starter' ),
        'id'         => 'produktinformationen',
        'post_types' => ['produkt'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
			[
                'type' => 'image_advanced',
                'id'   => $prefix . 'image1',
                'name' => esc_html__( 'Bild Sektion 1', 'wp-bootstrap-starter' ),
					 'max_status' => false,
					 'max_file_uploads' => 1,
			],
			[
				'name'    => 'Beschreibung Sektion 1',
				'id'      => $prefix . 'description1',
				'type'    => 'wysiwyg',
				'raw'     => false,
			
				'options' => array(
					'textarea_rows' => 8,
					'teeny'         => true,
				),
			],
            [
                'type' => 'image_advanced',
                'id'   => $prefix . 'image2',
                'name' => esc_html__( 'Bild Sektion 2', 'wp-bootstrap-starter' ),
					 'max_status' => false,
					 'max_file_uploads' => 1,
			],
			[
				'name'    => 'Beschreibung Sektion 2',
				'id'      => $prefix . 'description2',
				'type'    => 'wysiwyg',
				'raw'     => false,
			
				'options' => array(
					'textarea_rows' => 8,
					'teeny'         => true,
				),
			],
            [
                'type'       => 'image_advanced',
                'id'         => $prefix . 'gallery',
                'name'       => esc_html__( 'Bildergalerie', 'wp-bootstrap-starter' ),
                'max_status' => false,
					 'max_file_uploads' => 8,
            ],
            [
                'type'    => 'text_list',
                'id'      => $prefix . 'specs',
                'name'    => esc_html__( 'Produktspezifikationen', 'wp-bootstrap-starter' ),
					 'clone'   => true,
                'options' => [
                    'zB. Version' => 'Eigenschaft',
						  'zB. 1.2.1' => 'Wert'
                ],
            ],
        ],
    ];

    return $meta_boxes;
}