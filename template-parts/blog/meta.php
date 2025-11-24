<div class="entry-meta">
    <ul>
        <li><i class="fi flaticon-user"></i> <?php echo esc_html__('By','sbtech')?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?></a> </li>
        <li><i class="fi flaticon-comment-white-oval-bubble"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a> </li>
        <li><i class="fi flaticon-calendar"></i><?php the_time( 'd M Y' );?></li>
    </ul>
</div>  