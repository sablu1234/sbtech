<?php get_header(); ?>







<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    
                    <div class="wpo-blog-content">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template-parts/content', get_post_format()); ?>
                        <?php endwhile; else : ?>
                            <p><?php _e( 'No Posts To Display.' ); ?></p>
                        <?php endif; ?> 

                        <?php sbtech_navigation(); ?>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->
</div>
<!-- end of page-wrapper -->






<?php get_footer();