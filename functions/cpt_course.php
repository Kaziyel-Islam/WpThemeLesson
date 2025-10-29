<?php 
// Register Custom Post Type Course
function create_course_cpt() {

	$labels = array(
		'name' => _x( 'Courses', 'Post Type General Name', 'lmslesson' ),
		'singular_name' => _x( 'Course', 'Post Type Singular Name', 'lmslesson' ),
		'menu_name' => _x( 'Courses', 'Admin Menu text', 'lmslesson' ),
		'name_admin_bar' => _x( 'Course', 'Add New on Toolbar', 'lmslesson' ),
		'archives' => __( 'Course Archives', 'lmslesson' ),
		'attributes' => __( 'Course Attributes', 'lmslesson' ),
		'parent_item_colon' => __( 'Parent Course:', 'lmslesson' ),
		'all_items' => __( 'All Courses', 'lmslesson' ),
		'add_new_item' => __( 'Add New Course', 'lmslesson' ),
		'add_new' => __( 'Add New', 'lmslesson' ),
		'new_item' => __( 'New Course', 'lmslesson' ),
		'edit_item' => __( 'Edit Course', 'lmslesson' ),
		'update_item' => __( 'Update Course', 'lmslesson' ),
		'view_item' => __( 'View Course', 'lmslesson' ),
		'view_items' => __( 'View Courses', 'lmslesson' ),
		'search_items' => __( 'Search Course', 'lmslesson' ),
		'not_found' => __( 'Not found', 'lmslesson' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'lmslesson' ),
		'featured_image' => __( 'Featured Image', 'lmslesson' ),
		'set_featured_image' => __( 'Set featured image', 'lmslesson' ),
		'remove_featured_image' => __( 'Remove featured image', 'lmslesson' ),
		'use_featured_image' => __( 'Use as featured image', 'lmslesson' ),
		'insert_into_item' => __( 'Insert into Course', 'lmslesson' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Course', 'lmslesson' ),
		'items_list' => __( 'Courses list', 'lmslesson' ),
		'items_list_navigation' => __( 'Courses list navigation', 'lmslesson' ),
		'filter_items_list' => __( 'Filter Courses list', 'lmslesson' ),
	);
	$args = array(
		'label' => __( 'Course', 'lmslesson' ),
		'description' => __( '', 'lmslesson' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'course', $args );

}
add_action( 'init', 'create_course_cpt', 0 );