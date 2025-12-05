<?php


if (!defined('ABSPATH')) exit;

class Hasan_Recent_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'hasan_recent_posts_widget',
            __('Sbtech Recent Posts', 'text_domain'),
            array('description' => __('Displays recent posts with custom HTML markup', 'text_domain'))
        );
    }

    public function widget($args, $instance) {

        echo $args['before_widget'];

        // Heading option
        $heading = !empty($instance['heading']) ? $instance['heading'] : '';

        if ($heading) {
            echo '<h3 class="recent-posts-heading">' . esc_html($heading) . '</h3>';
        }

        // Number of posts
        $post_count = !empty($instance['post_count']) ? $instance['post_count'] : 3;

        // Query posts
        $recent_posts = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => $post_count,
        ));

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>

                <div class="post" style="display:flex; gap:15px; margin-bottom:20px; align-items:flex-start;">
                    
                    <div class="img-holder" style="flex-shrink:0;">
                        <?php 
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail');
                            } else {
                                // fallback image
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/recent-posts/img-1.jpg" alt>';
                            }
                        ?>
                    </div>

                    <div class="details">
                        <span class="date"><?php echo get_the_date('d M Y'); ?></span>
                        <h4 style="margin:5px 0 0;">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo wp_trim_words( get_the_title(), 5 ); ?>
                            </a>
                        </h4>
                    </div>

                </div>

            <?php endwhile;
            wp_reset_postdata();
        endif;

        echo $args['after_widget'];
    }

    public function form($instance) {

        // Heading field
        $heading = !empty($instance['heading']) ? $instance['heading'] : '';

        // Post count field
        $post_count = !empty($instance['post_count']) ? $instance['post_count'] : 3;
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('heading'); ?>">Heading:</label>
            <input 
                class="widefat" 
                id="<?php echo $this->get_field_id('heading'); ?>" 
                name="<?php echo $this->get_field_name('heading'); ?>" 
                type="text" 
                value="<?php echo esc_attr($heading); ?>" 
            />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('post_count'); ?>">How many posts?</label>
            <input 
                class="widefat" 
                id="<?php echo $this->get_field_id('post_count'); ?>" 
                name="<?php echo $this->get_field_name('post_count'); ?>" 
                type="number" 
                min="1"
                value="<?php echo esc_attr($post_count); ?>" 
            />
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['heading'] = (!empty($new_instance['heading'])) ? sanitize_text_field($new_instance['heading']) : '';
        $instance['post_count'] = (!empty($new_instance['post_count'])) ? intval($new_instance['post_count']) : 3;
        return $instance;
    }
}

// Register widget
function register_hasan_recent_posts_widget() {
    register_widget('Hasan_Recent_Posts_Widget');
}
add_action('widgets_init', 'register_hasan_recent_posts_widget');
