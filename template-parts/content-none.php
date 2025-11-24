<div id="post-<?php the_ID();?>" <?php post_class('post format-standard-image');?>>
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