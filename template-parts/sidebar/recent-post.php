
<div class="sidebar-widget recent-posts">
      <h3 class="widget-title">Recent Posts</h3>
        <ul>

            <?php 
            $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 4,
            'post_status' => 'publish'
            ));
            ?>

            <?php foreach( $recent_posts as $post ) : ?>

            <li>

            <a href="<?php echo get_permalink($post['ID']); ?>">
            <?php echo esc_html($post['post_title']); ?>
            </a>

            <span class="post-date"><?php echo get_the_date('M d, Y', $post['ID']); ?></span>

            </li>
            <?php endforeach; ?>

        </ul>
</div>