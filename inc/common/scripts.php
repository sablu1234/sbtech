<?php

function sbtech_theme_scripts() {

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.5.1', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.1', 'all' );
        wp_enqueue_style( 'component', get_template_directory_uri() . '/assets/css/component.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.6.3', 'all' );
        wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), '2.1.5', 'all' );
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer-theme-default.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.3.2', 'all' );
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '4.0.1', 'all' );
        wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'sbtech-core', get_template_directory_uri() . '/assets/sass/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'scbootstrap-bundleript', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.0.1', true );
	wp_enqueue_script( 'jquery-plugin-collection', get_template_directory_uri() . '/assets/js/jquery-plugin-collection.js', array( 'jquery' ), '2.2.2', true );
	wp_enqueue_script( 'jquery-dlmenu', get_template_directory_uri() . '/assets/js/jquery.dlmenu.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), '3.6.0', true );
	wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array( 'jquery' ), '2.6.2', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sbtech_theme_scripts' );