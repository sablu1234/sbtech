<?php

$button_text = get_theme_mod( 'button_text', __('New Update','sbtech') );
$button_desc = get_theme_mod( 'button_desc', __('Betting against meme stocks could get you seriously burned','sbtech') );
$top_header_switch = get_theme_mod( 'top_header_switch', false );

?>

<!-- Start header -->
<header id="header" class="wpo-site-header">
    <!-- start topbar -->
    <?php if(!empty($top_header_switch)) : ?>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-lg-7 col-md-9 col-sm-12 col-12">
                    <div class="contact-intro">
                        <ul>
                            <?php if(!empty($button_text)) : ?>
                            <li class="update"><span><?php echo esc_html($button_text); ?></span></li>
                            <?php endif; ?>
                            <?php if(!empty($button_desc)) : ?>
                            <li><?php echo esc_html($button_desc); ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col  col-lg-5 col-md-3 col-sm-12 col-12">
                    <div class="contact-info">
                        <ul>
                            <?php sbtech_header_social(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
     <!-- end topbar -->
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                    <div class="mobail-menu">
                        <button type="button" class="navbar-toggler open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar first-angle"></span>
                            <span class="icon-bar middle-angle"></span>
                            <span class="icon-bar last-angle"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="navbar-header">
                        <?php sbtech_header_log(); ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-1 col-1">
                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                        <button class="menu-close"><i class="ti-close"></i></button>
                        <!-- Main menu display function -->
                        <?php echo sbtech_header_menu(); ?>
                    </div><!-- end of nav-collapse -->
                </div>
                <div class="col-lg-2 col-md-2 col-2">
                    <div class="header-right">
                        <!-- searbar start -->
                        <?php echo get_template_part( 'template-parts/header/header-search' )?>
                        <!-- searbar end -->
                            <!-- offcanvas start -->
                        <div class="header-right-menu-wrapper">
                        <?php echo get_template_part( 'template-parts/header/offcanvas' )?>
                        <!-- offcanvas end -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->