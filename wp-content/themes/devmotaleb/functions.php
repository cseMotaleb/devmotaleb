<?php
/**
 * devmotaleb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package devmotaleb
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function devmotaleb_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on devmotaleb, use a find and replace
		* to change 'devmotaleb' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'devmotaleb', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'devmotaleb' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'devmotaleb_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'devmotaleb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function devmotaleb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'devmotaleb_content_width', 640 );
}
add_action( 'after_setup_theme', 'devmotaleb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function devmotaleb_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'devmotaleb' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'devmotaleb' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'devmotaleb_widgets_init' );


require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Navwalker additions.
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function register_custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_custom_menus' );

// Add an action for the AJAX request
add_action( 'wp_ajax_submit_contact_form', 'handle_contact_form' );
add_action( 'wp_ajax_nopriv_submit_contact_form', 'handle_contact_form' );

function handle_contact_form() {
    // Parse the form data
    parse_str($_POST['formData'], $formData);

    // Example: Perform validation or sending an email
    if ( empty( $formData['name'] ) || empty( $formData['email'] ) ) {
        echo 'Please fill out all required fields.';
        wp_die(); // Important to stop the execution after response
    }

    // Send email or handle the data
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $message = 'Name: ' . sanitize_text_field( $formData['name'] ) . "\n";
    $message .= 'Email: ' . sanitize_email( $formData['email'] ) . "\n";
    $message .= 'Message: ' . sanitize_textarea_field( $formData['message'] );

    // Use WordPress mail function to send the email
    wp_mail( $to, $subject, $message );

    // Send a success response
    echo 'Thank you for your message. We will get back to you soon!';
    wp_die(); // WordPress requires this at the end of AJAX handlers
}
