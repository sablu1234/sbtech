<?php

// sbtech header log
function sbtech_header_log(){
    $sbtech_header_logo_field = get_theme_mod( 'sbtech_header_logo_field', get_template_directory_uri().'/assets/images/logo.png'    );
    ?>
    <a class="navbar-brand" href="<?php echo home_url('/');?> "><img src="<?php echo esc_url($sbtech_header_logo_field); ?>" alt="<?php echo esc_attr('sbtech logo','sbtech'); ?>"></a>
    <?php
}

// sbtech footer text
function sbtech_footer_text(){
    $sbtech_footer_text = get_theme_mod( 'sbtech_footer_text', __('Copyright © 2022 Bloggar by Sbtech. All Rights Reserved.','sbtech'));
    ?>
    <p class="copyright"> <?php echo sbtech_kess($sbtech_footer_text); ?></p>
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


// 
/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function sbtech_kess( $svg = '' ) {
	$allowed_html = [
            'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $svg, $allowed_html );
}


// 
// sbtech_navigation
function sbtech_navigation(){
   $pages = paginate_links( array( 
       'type' => 'array',
       'prev_text'    => __('<i class="fi ti-angle-left"></i>','sbtech'),
       'next_text'    => __('<i class="fi ti-angle-right"></i>','sbtech'),
   ) );
       if( $pages ) {
       echo '<div class="pagination-wrapper pagination-wrapper-left"> <ul class="pg-pagination">';
       foreach ( $pages as $page ) {
           echo '<li>'. $page.'</li>';
       }
       echo '</ul></div>';
   }
}


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
// function sbtech_search_form( $form ) {
// 	$form = '<form role="search" method="get" action="' . home_url( '/' ) . '">
//    <div>
//       <input type="text" value="' . get_search_query() . '" name="s" class="form-control" placeholder="Search Post..">
//       <button type="submit"><i class="ti-search"></i></button>
//    </div>
// </form>';

// 	return $form;
// }
// add_filter( 'get_search_form', 'sbtech_search_form' );



function sbtech_tags(){
   $tags = get_the_tags();
   var_dump($tags);
}