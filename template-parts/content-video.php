<?php
$post_format_url = function_exists('get_field') ? get_field('post_format_url') : '';

?>

<div id="post-<?php the_ID();?>" <?php post_class('post format-video');?>>
    <?php if(has_post_thumbnail()) : ?>
    <div class="entry-media video-holder">
        <?php the_post_thumbnail(); ?>
        <?php if(!empty($post_format_url)) : ?>
        <a href="<?php echo esc_url( $post_format_url ); ?>" class="video-btn" data-type="iframe">
            <i class="fi flaticon-play"></i>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php echo get_template_part( 'template-parts/blog/meta' )?>
    <div class="entry-details">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <?php echo get_template_part( 'template-parts/blog/button' )?>
    </div>
</div>