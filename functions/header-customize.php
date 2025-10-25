
<?php 

function header_customize(){

    add_theme_support('custom-logo', [

        'height' => 30,
        'width' => 80,
        
        'flex-height' => true,
        'flex-width'  => true,
    ]);

}

add_action('after_setup_theme', 'header_customize');


?>