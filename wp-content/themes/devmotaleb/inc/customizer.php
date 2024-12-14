<?php
/**
 * devmotaleb Theme Customizer
 *
 * @package devmotaleb
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function devmotaleb_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'devmotaleb_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'devmotaleb_customize_partial_blogdescription',
			)
		);
	}
	// Home Section
    $wp_customize->add_section('homepage_settings', array(
        'title' => __('Home Content Settings', 'book-influencers'),
        'priority' => 37,
    ));

    // Page header Text
    $wp_customize->add_setting('page_header_text', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('page_header_text', array(
        'label' => __('Home Page Header Text', 'book-influencers'),
        'section' => 'homepage_settings',
        'settings' => 'page_header_text',
        'type' => 'text',
    ));

     // Page header description
     $wp_customize->add_setting('page_header_desc', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('page_header_desc', array(
        'label' => __('Page Header Text', 'book-influencers'),
        'section' => 'homepage_settings',
        'settings' => 'page_header_desc',
        'type' => 'textarea',
    ));

 // Social Media Section
 $wp_customize->add_section('social_media_links', array(
        'title' => __('Social Media Links', 'book-influencers'),
        'priority' =>38,
    ));

    // Facebook
    $wp_customize->add_setting('facebook_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('facebook_link', array(
        'label' => __('Facebook URL', 'book-influencers'),
        'section' => 'social_media_links',
        'settings' => 'facebook_link',
        'type' => 'url',
    ));

    // Twitter
    $wp_customize->add_setting('twitter_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('twitter_link', array(
        'label' => __('Twitter URL', 'book-influencers'),
        'section' => 'social_media_links',
        'settings' => 'twitter_link',
        'type' => 'url',
    ));

	 // Linkedin
	 $wp_customize->add_setting('linkedin_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('linkedin_link', array(
        'label' => __('Linkedin URL', 'book-influencers'),
        'section' => 'social_media_links',
        'settings' => 'linkedin_link',
        'type' => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('instagram_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_link', array(
        'label' => __('Instagram URL', 'book-influencers'),
        'section' => 'social_media_links',
        'settings' => 'instagram_link',
        'type' => 'url',
    ));

	// Footer Section
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'book-influencers'),
        'priority' => 40,
    ));

    // Footer Logo
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Footer Logo', 'book-influencers'),
        'section' => 'footer_settings',
        'settings' => 'footer_logo',
        'width' => 150,
        'height' => 50,
    )));

     // Fotter about Text
     $wp_customize->add_setting('footerabout_text', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('footerabout_text', array(
        'label' => __('Footer About', 'book-influencers'),
        'section' => 'footer_settings',
        'settings' => 'footerabout_text',
        'type' => 'textarea',
    ));

    // Copyright Text
    $wp_customize->add_setting('copyright_text', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('copyright_text', array(
        'label' => __('Copyright Text', 'book-influencers'),
        'section' => 'footer_settings',
        'settings' => 'copyright_text',
        'type' => 'textarea',
    ));

    // Create a panel for "Post Sidebar"
    $wp_customize->add_panel('post_sidebar', array(
        'priority' => 39,  // You might want to adjust this priority
        'capability' => 'edit_theme_options',
        'title' => __('Post Sidebar', 'book-influencers'),
        'description' => __('Settings for the post sidebar.', 'book-influencers'),
    ));

    // Add subsection: "Recent Posts"
    $wp_customize->add_section('recent_posts', array(
        'title' => __('Recent Posts', 'book-influencers'),
        'description' => __('Options for the Recent Posts sidebar widget.', 'book-influencers'),
        'panel' => 'post_sidebar',
    ));

    // Add setting to hide or display the widget
    $wp_customize->add_setting('display_recent_posts', array(
        'default' => 'yes',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    // Add control for the display setting
    $wp_customize->add_control('display_recent_posts', array(
        'label' => __('Display Related Post Widget?', 'book-influencers'),
        'section' => 'recent_posts',
        'type' => 'radio',
        'choices' => array(
            'yes' => __('Yes', 'book-influencers'),
            'no' => __('No', 'book-influencers'),
        ),
    ));

    // Add setting for the number of posts to show
    $wp_customize->add_setting('number_of_posts', array(
        'default' => 3,
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    // Add control for the number of posts
    $wp_customize->add_control('number_of_posts', array(
        'label' => __('Number of posts to display', 'book-influencers'),
        'section' => 'recent_posts',
        'type' => 'number',
    ));

    // Add a subsection: "Category Widget"
    $wp_customize->add_section('category_widget_section', array(
        'title' => __('Category Widget', 'book-influencers'),
        'panel' => 'post_sidebar', // Assuming you named the panel as 'post_sidebar' as provided in the previous example.
    ));

    // Add setting to hide or display the category widget
    $wp_customize->add_setting('display_category_widget', array(
        'default' => 'yes',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    // Add control for the display setting
    $wp_customize->add_control('display_category_widget', array(
        'label' => __('Display Category Widget?', 'book-influencers'),
        'section' => 'category_widget_section',
        'type' => 'radio',
        'choices' => array(
            'yes' => __('Yes', 'book-influencers'),
            'no' => __('No', 'book-influencers'),
        ),
    ));

    // Add a subsection: "Author Section"
    $wp_customize->add_section('author_section', array(
        'title' => __('Author Section', 'book-influencers'),
        'panel' => 'post_sidebar',
    ));

    // Add setting to hide or display the author section
    $wp_customize->add_setting('display_author_section', array(
        'default' => 'yes',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    // Add control for the display setting
    $wp_customize->add_control('display_author_section', array(
        'label' => __('Display Author Section?', 'book-influencers'),
        'section' => 'author_section',
        'type' => 'radio',
        'choices' => array(
            'yes' => __('Yes', 'book-influencers'),
            'no' => __('No', 'book-influencers'),
        ),
    ));
}
add_action( 'customize_register', 'devmotaleb_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function devmotaleb_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function devmotaleb_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function devmotaleb_customize_preview_js() {
	wp_enqueue_script( 'devmotaleb-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'devmotaleb_customize_preview_js' );



