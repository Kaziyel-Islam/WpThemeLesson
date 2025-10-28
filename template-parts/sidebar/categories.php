

<div class="sidebar-widget categories">
    
    <h3 class="widget-title"><?php _e('Categories','lessonlms'); ?></h3>
        <ul>
            <?php 

             wp_list_categories(array(

                 'title_li' => '',
                 'show_count' => true

                 )); 
            ?>
                        
        </ul>
</div>