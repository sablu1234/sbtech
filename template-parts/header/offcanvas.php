<?php

$nav_address = get_theme_mod( 'nav_address', __('68D, Belsion Town 2365 Fna city, LH 3656, USA','sbtech') );
$nav_phone = get_theme_mod( 'nav_phone', __('+ 8 (123) 123 456 789','sbtech') );
$nav_email = get_theme_mod( 'nav_email', esc_html__('Bloggar@gmail.com','sbtech') );
$sbtech_offcanvas_logo = get_theme_mod( 'sbtech_offcanvas_logo', get_template_directory_uri().'/assets/images/logo2.png' );
$header_offcanvas_switch = get_theme_mod( 'header_offcanvas_switch', false );


?>

<?php if(!empty($header_offcanvas_switch)) : ?>
<div class="header-right-menu">
<div class="right-menu-toggle-btn">
    <span></span>
    <span></span>
    <span></span>
</div>
<div class="header-right-menu-wrap">
    <button class="right-menu-close"><i class="ti-close"></i></button>

    <?php if(!empty($sbtech_offcanvas_logo)) : ?>
    <div class="logo"><img src="<?php echo esc_url($sbtech_offcanvas_logo); ?>" alt=""></div>
    <?php endif; ?>

    <div class="header-right-sec">
        
        <div class="widget wpo-contact-widget">
            <div class="widget-title">
                <h3><?php echo esc_html__('Contact Us', 'sbtech'); ?></h3>
            </div>
            <div class="contact-ft">
                <ul>
                    <?php if(!empty($nav_address)) : ?>
                    <li><i class="fi flaticon-location"></i><?php echo esc_html($nav_address); ?></li>
                    <?php endif; ?>

                    <?php if(!empty($nav_phone)) : ?>
                    <li><i class="fi flaticon-telephone"></i><?php echo esc_html($nav_phone); ?></li>
                    <?php endif; ?>

                    <?php if(!empty($nav_email)) : ?>
                    <li><i class="fi flaticon-email"></i><a href="mailto:<?php echo esc_html($nav_email); ?>"><?php echo esc_html($nav_email); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
 <?php endif; ?>