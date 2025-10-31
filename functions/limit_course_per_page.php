<?php

function lessonlms_course_posts_per_page( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('course') ) {
        $query->set('posts_per_page', 3);
    }
}
add_action('pre_get_posts', 'lessonlms_course_posts_per_page');
