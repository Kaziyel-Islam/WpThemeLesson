<?php 

function register_styles(){

    // Default Theme Stylesheet (style.css)

    wp_enqueue_style('style', get_stylesheet_uri());

    // Theme Style CSS

    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/themeStyle.css');

    // Responsive CSS

    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

    // Slick Slider CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    // Boxicons
    wp_enqueue_style('boxicon-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');

    // Font Awesome
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css', array(), '7.0.0');

    // Google Fonts

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&family=Poppins:wght@400;700&family=Sen:wght@400..800&display=swap', array(),null);

}

function register_scripts(){

    // jQuery (included in WordPress)

     wp_enqueue_script('jquery');

     // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

    // Main Theme JS
    wp_enqueue_script('main-js', get_template_directory_uri() . "/assets/js/main.js", array('jquery'), '1.0', true);


}



add_action('wp_enqueue_scripts', 'register_styles');

add_action('wp_enqueue_scripts', 'register_scripts');



?>