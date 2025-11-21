<?php

function sbtech_theme_support(){
    add_theme_support( 'post-thumbnails' );


	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on harry, use a find and replace
	 * to change 'harry' to the name of your theme in all the template files.
	 */

	load_theme_textdomain( 'techub', get_template_directory() . '/languages' );


    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
    /** tag-title **/
    add_theme_support( 'title-tag' );
      /** HTML5 support **/
      add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
        /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
    /** post format **/
    add_theme_support( 'post-formats', array(
        'aside',
        'gallery',
        'video',
        'audio',
        'gallery',
        'quote',
        ) );

    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'sbtech' ),
    ) );

        // register_nav_menus( array(
	    // 	'main-menu' => __( 'Main Menu', 'techub' ),
		// ) );

    // remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'sbtech_theme_support' );


include_once get_template_directory() .'/inc/common/scripts.php';
include_once get_template_directory() .'/inc/template-function.php';
include_once get_template_directory() .'/inc/nav-walker.php';

if ( class_exists( 'Kirki' ) ) {
		include_once get_template_directory() .'/inc/techub-kirki.php';
}

