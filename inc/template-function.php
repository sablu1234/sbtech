<?php

// sbtech header log
function sbtech_header_log(){
    $sbtech_header_logo_field = get_theme_mod( 'sbtech_header_logo_field', get_template_directory_uri().'/assets/images/logo.png'    );
    ?>
    <a class="navbar-brand" href="<?php echo home_url('/');?> "><img src="<?php echo esc_url($sbtech_header_logo_field); ?>" alt="<?php echo esc_attr('sbtech logo','sbtech'); ?>"></a>
    <?php
}

// Header Social link
function sbtech_header_social(){ 

        $nav_facebook_url = get_theme_mod( 'nav_facebook_url', __('#','sbtech') );
        $nav_twitter_url = get_theme_mod( 'nav_twitter_url', __('#','sbtech') );
        $nav_instagram_url = get_theme_mod( 'nav_instagram_url',__('#','sbtech') );
        $nav_google_url = get_theme_mod( 'nav_google_url', __('#','sbtech') );

    ?>


    <?php if(!empty($nav_facebook_url)) : ?>
    <li><a href="https://www.facebook.com/"><i class="ti-facebook"></i></a></li>
    <?php endif; ?>

    <?php if(!empty($nav_twitter_url)) : ?>
    <li><a href="<?php echo esc_url($nav_twitter_url); ?>"><i class="ti-twitter-alt"></i></a></li>
    <?php endif; ?>
    
    <?php if(!empty($nav_instagram_url)) : ?>
    <li><a href="<?php echo esc_url($nav_instagram_url); ?>"><i class="ti-instagram"></i></a></li>
    <?php endif; ?>

    <?php if(!empty($nav_google_url)) : ?>
    <li><a href="<?php echo esc_url($nav_google_url); ?>"><i class="ti-google"></i></a></li>
    <?php endif; ?>

    <?php
}

// Main menu display funciton
function sbtech_header_menu(){
    ?>
    <?php
    wp_nav_menu( 
        array(
        'theme_location' => 'main_menu',
        'menu_class'      => 'nav navbar-nav mb-2 mb-lg-0', 
        'menu_id'         => '',
        'container'         => '',
        'fallback_cb'     => 'Sbtech_Walker_Nav_Menu::fallback',
        'walker'          => new Sbtech_Walker_Nav_Menu,
    ) );
    ?>
    <?php
}