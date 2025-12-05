<?php
/*
Plugin Name: Custom Category Limit Widget
Description: Show limited categories with post count & right arrow icon.
Version: 1.0
Author: Hasan
*/

class Custom_Category_Limit_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_category_limit_widget',
            __('Category List (Limit)', 'text_domain'),
            array('description' => __('Show limited categories with post count & arrow icon', 'text_domain'))
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        // Title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];
        }

        // Limit
        $limit = !empty($instance['limit']) ? intval($instance['limit']) : 5;

        // Get categories
        $cats = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'number'  => $limit
        ));

        echo '<ul class="custom-cat-widget">';

        foreach ($cats as $cat) {
            $link = get_category_link($cat->term_id);
            echo '<li>
                    <a href="'. esc_url($link) .'">
                        '. esc_html($cat->name) .' 
                        <span>(' . $cat->count . ')</span>
                        <span class="arrow-icon">→</span>
                    </a>
                  </li>';
        }

        echo '</ul>';

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : 'Categories';
        $limit = isset($instance['limit']) ? $instance['limit'] : 5;
        ?>

        <!-- Title -->
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input class="widefat"
                   id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>"
                   type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>

        <!-- Limit -->
        <p>
            <label for="<?php echo $this->get_field_id('limit'); ?>">How many categories to show:</label>
            <input class="widefat"
                   id="<?php echo $this->get_field_id('limit'); ?>"
                   name="<?php echo $this->get_field_name('limit'); ?>"
                   type="number"
                   min="1" max="50"
                   value="<?php echo esc_attr($limit); ?>">
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['limit'] = intval($new_instance['limit']);
        return $instance;
    }
}

function register_custom_category_limit_widget() {
    register_widget('Custom_Category_Limit_Widget');
}
add_action('widgets_init', 'register_custom_category_limit_widget');
