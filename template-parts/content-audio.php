<?php
$post_format_url = function_exists('get_field') ? get_field('post_format_url') : '';

?>

<div id="post-<?php the_ID();?>" <?php post_class('post format-standard-image');?>>
    <div class="entry-media ratio ratio-16x9    ">
        <?php echo wp_oembed_get($post_format_url); ?>  
    </div>
    <?php echo get_template_part( 'template-parts/blog/meta' )?>
    <div class="entry-details">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <?php echo get_template_part( 'template-parts/blog/button' )?>
    </div>
</div>