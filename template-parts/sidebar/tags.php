

<div class="sidebar-widget tags">

    <h3 class="widget-title"><?php _e('Tags', 'lessonlms'); ?></h3>
    
        <div class="tag-cloud">
            <?php
            wp_tag_cloud(array(

                'smallest' => 12,
                'largest'  => 12,
                'unit'     => 'px',
                'number'   => 10,
                'format'   => 'flat'
                ));

                ?>
        </div>
</div>