<?php 

// Register Taxonomy CoCategory
function create_cocategory_tax() {

	$labels = array(
		'name'              => _x( 'CoCategories', 'taxonomy general name', 'lmslesson' ),
		'singular_name'     => _x( 'CoCategory', 'taxonomy singular name', 'lmslesson' ),
		'search_items'      => __( 'Search CoCategories', 'lmslesson' ),
		'all_items'         => __( 'All CoCategories', 'lmslesson' ),
		'parent_item'       => __( 'Parent CoCategory', 'lmslesson' ),
		'parent_item_colon' => __( 'Parent CoCategory:', 'lmslesson' ),
		'edit_item'         => __( 'Edit CoCategory', 'lmslesson' ),
		'update_item'       => __( 'Update CoCategory', 'lmslesson' ),
		'add_new_item'      => __( 'Add New CoCategory', 'lmslesson' ),
		'new_item_name'     => __( 'New CoCategory Name', 'lmslesson' ),
		'menu_name'         => __( 'CoCategory', 'lmslesson' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'lmslesson' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'cocategory', array('course'), $args );

}
add_action( 'init', 'create_cocategory_tax' );