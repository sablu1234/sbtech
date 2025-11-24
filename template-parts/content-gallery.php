<?php
$post_format_gallery = function_exists('get_field') ? get_field('post_format_gallery') : '';
?>

<div id="post-<?php the_ID();?>" <?php post_class('post format-gallery');?>>

         <?php if(!empty($post_format_gallery)) : ?>
        <div class="swiper tp-post-slider hidden" style="overflow: hidden !important;">
        <div class="swiper-wrapper">
            <?php foreach($post_format_gallery as $item) : ?>
            <div class="swiper-slide">
                 <img src="<?php echo esc_url($item['url']); ?>" alt="<?php echo esc_url($item['alt']); ?>">
            </div>
           <?php endforeach; ?>
        </div>
        </div>
         <?php endif; ?>

  
    <?php echo get_template_part( 'template-parts/blog/meta' )?>
    <div class="entry-details">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <?php echo get_template_part( 'template-parts/blog/button' )?>
    </div>
</div>