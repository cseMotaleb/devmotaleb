<?php
function devmotaleb_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'devmotaleb-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'devmotaleb-style', 'rtl', 'replace' );

    // Enqueue additional CSS files
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0' );
    wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/fontawsome/css/all.min.css', array(), '5.15.3' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawsome/css/fontawesome.min.css', array(), '5.15.3' );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.8.1' );
    wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1.0' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );

    // Enqueue JS files
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );
    wp_enqueue_script( 'ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'clipboard', get_template_directory_uri() . '/assets/js/clipboard.min.js', array(), '2.0.6', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );

    // Navigation script
    wp_enqueue_script( 'devmotaleb-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'devmotaleb_scripts' );
