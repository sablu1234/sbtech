<?php if(is_single()) :?>

    <div id="post-<?php the_ID();?>" <?php post_class('post format-standard-image');?>>
            <?php if(has_post_thumbnail()) : ?>    
            <div class="entry-media">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
        <?php echo get_template_part( 'template-parts/blog/meta' )?>
            <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
            <div class="gallery">
                <div>
                    <img src="assets/images/blog/img-3.jpg" alt="">
                </div>
                <div>
                    <img src="assets/images/blog/img-2.jpg" alt="">
                </div>
            </div>
    </div>

    <div class="tag-share clearfix">
        <div class="tag">
            <span>Share: </span>
            <ul>
                <?php sbtech_tags(); ?>
            </ul>
        </div>
    </div> <!-- end tag-share -->

    

<?php else :?>

<div id="post-<?php the_ID();?>" <?php post_class('post format-standard-image');?> >
    <?php if(has_post_thumbnail()) : ?>    
    <div class="entry-media">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <?php echo get_template_part( 'template-parts/blog/meta' )?>
    <div class="entry-details">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <?php echo get_template_part( 'template-parts/blog/button' )?>
    </div>
</div>

<?php endif ?>