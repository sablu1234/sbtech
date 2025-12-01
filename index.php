<?php get_header(); ?>







<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
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
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/about-widget.jpg" alt>
                            </div>
                            <h4>Jenny Watson</h4>
                            <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="aw-shape">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/ab.png" alt="">
                            </div>
                        </div>
                        <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="blog-single.html">Lifestyle<span>(05)</span></a></li>
                                <li><a href="blog-single.html">Inspiration <span>(07)</span></a></li>
                                <li><a href="blog-single.html">Fashion <span>(03)</span></a></li>
                                <li><a href="blog-single.html">Photography <span>(06)</span></a></li>
                                <li><a href="blog-single.html">Travel <span>(12)</span></a></li>
                                <li><a href="blog-single.html">Business <span>(08)</span></a></li>
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Related Posts</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-posts/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">19 Jun 2022 </span>
                                        <h4><a href="blog-single.html">Perfect Photo Clicking Idea You Must
                                                Know.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-posts/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">22 May 2022 </span>
                                        <h4><a href="blog-single.html">Best tourism site all over the world.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-posts/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Whats In Trend in Now Woman Fashion.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-posts/img-4.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Top 10 Healthy Food of Your Menu.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget wpo-instagram-widget">
                            <div class="widget-title">
                                <h3>Instagram</h3>
                            </div>
                            <ul class="d-flex">
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/13.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/14.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/15.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/16.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/17.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/18.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="widget tag-widget">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Idea</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Gym</a></li>
                            </ul>
                        </div>
                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->
</div>
<!-- end of page-wrapper -->






<?php get_footer();