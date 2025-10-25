<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'THEME_FUNCTIONS_PATH', get_template_directory() . '/functions/' );

foreach ( glob( THEME_FUNCTIONS_PATH . '*.php' ) as $file ) {
    
    require_once $file;
}



?>