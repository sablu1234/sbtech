<!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>

                        <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                            <?php dynamic_sidebar( 'footer-4' ); ?>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <?php endif; ?>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <?php sbtech_footer_text(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->