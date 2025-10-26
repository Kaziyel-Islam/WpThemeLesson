

<?php 


function footer_widgets(){

    register_sidebar([
        
        'name'          => esc_html__( 'Footer Logo', 'lessonlms' ),
		'id'            => 'footer-clmn-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ]);

    register_sidebar([
        
        'name'          => esc_html__( 'Company', 'lessonlms' ),
		'id'            => 'footer-clmn-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget widget-footer-menu %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ]);

    register_sidebar([
        
        'name'          => esc_html__( 'Support', 'lessonlms' ),
		'id'            => 'footer-clmn-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget widget-footer-menu %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ]);

    register_sidebar([
        
        'name'          => esc_html__( 'Address', 'lessonlms' ),
		'id'            => 'footer-clmn-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget widget-footer-address %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ]);
}

add_action('widgets_init', 'footer_widgets');



?>