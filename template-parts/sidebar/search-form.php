
<!-- Search Widget -->
 
 <div class="sidebar-widget search-widget">

     <h3 class="widget-title"><?php _e('Search', 'lessonlms') ?></h3>
                     
    <form role="search"  method="get" action="<?php echo esc_url(home_url('/')) ?>">
     <input type="search" name="s" id=""  placeholder="<?php esc_attr_e('Search...','lessonlms') ?>" value="<?php echo get_search_query(); ?>" required>
     <button type="submit"> <i class="fas fa-search"></i></button>
    </form>

</div>