

<?php 

function lessonlms_support(){

    add_theme_support( 'title-tag' );
    
    add_theme_support( 'post-thumbnails' );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('automatic-feed-links');

    add_theme_support('html5');

    add_editor_style();

    add_theme_support('wp-block-styles');

    add_theme_support('align-wide');

    register_nav_menus([

        'primary_menu' => __('Primary Menu','lessonlms'),
    ]);

}

add_action('after_setup_theme', 'lessonlms_support');


?>