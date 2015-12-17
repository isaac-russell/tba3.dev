<?php 

/* 
 * 
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.

$labels = array(
		'name'                => _x( 'advertisment', 'Post Type General Name', 'ctl' ),
		'singular_name'       => _x( 'advertisment', 'Post Type Singular Name', 'ctl' ),
		'menu_name'           => __( 'advertisment', 'ctl' ),
		'name_admin_bar'      => __( 'advertisment', 'ctl' ),
		'parent_item_colon'   => __( 'Parent advertisment:', 'ctl' ),
		'all_items'           => __( 'All advertisment', 'ctl' ),
		'add_new_item'        => __( 'Add New advertisment', 'ctl' ),
		'add_new'             => __( 'Add New', 'ctl' ),
		'new_item'            => __( 'New advertisment', 'ctl' ),
		'edit_item'           => __( 'Edit advertisment', 'ctl' ),
		'update_item'         => __( 'Update advertisment', 'ctl' ),
		'view_item'           => __( 'View advertisment', 'ctl' ),
		'search_items'        => __( 'Search advertisment', 'ctl' ),
		'not_found'           => __( 'Not found', 'ctl' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ctl' ),
	);
	$args = array(
		'label'               => __( 'advertisment', 'ctl' ),
		'description'         => __( 'new ad', 'ctl' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'advertisment', $args );

	//New CPT Recipes

	$labels = array(
		'name'                  => _x( 'Recipes', 'Post Type General Name', 'TBA' ),
		'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'TBA' ),
		'menu_name'             => __( 'Recipes', 'TBA' ),
		'name_admin_bar'        => __( 'Recipes', 'TBA' ),
		'parent_item_colon'     => __( 'Parent Item:', 'TBA' ),
		'all_items'             => __( 'All Recipes', 'TBA' ),
		'add_new_item'          => __( 'Add New Recipe', 'TBA' ),
		'add_new'               => __( 'Add Recipe', 'TBA' ),
		'new_item'              => __( 'New Recipe', 'TBA' ),
		'edit_item'             => __( 'Edit Recipe', 'TBA' ),
		'update_item'           => __( 'Update Recipe', 'TBA' ),
		'view_item'             => __( 'View Recipe', 'TBA' ),
		'search_items'          => __( 'SearchRecipes', 'TBA' ),
		'not_found'             => __( 'Not found', 'TBA' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'TBA' ),
		'items_list'            => __( 'Recipes list', 'TBA' ),
		'items_list_navigation' => __( 'Recipes list navigation', 'TBA' ),
		'filter_items_list'     => __( 'Filter Recipes list', 'TBA' ),
	);
	$args = array(
		'label'                 => __( 'Recipe', 'TBA' ),
		'description'           => __( 'recipes', 'TBA' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'recipes', $args );

	//New CPT Foods

	$labels = array(
		'name'                  => _x( 'Foods', 'Post Type General Name', 'TBA' ),
		'singular_name'         => _x( 'Food', 'Post Type Singular Name', 'TBA' ),
		'menu_name'             => __( 'Foods', 'TBA' ),
		'name_admin_bar'        => __( 'Foods', 'TBA' ),
		'archives'              => __( 'Item Archives', 'TBA' ),
		'parent_item_colon'     => __( 'Parent Item:', 'TBA' ),
		'all_items'             => __( 'All Items', 'TBA' ),
		'add_new_item'          => __( 'Add New food item', 'TBA' ),
		'add_new'               => __( 'Add New', 'TBA' ),
		'new_item'              => __( 'New Item', 'TBA' ),
		'edit_item'             => __( 'Edit food Item', 'TBA' ),
		'update_item'           => __( 'Update food Item', 'TBA' ),
		'view_item'             => __( 'View food Item', 'TBA' ),
		'search_items'          => __( 'Search food Item', 'TBA' ),
		'not_found'             => __( 'Not found', 'TBA' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'TBA' ),
		'featured_image'        => __( 'Featured Image', 'TBA' ),
		'set_featured_image'    => __( 'Set featured image', 'TBA' ),
		'remove_featured_image' => __( 'Remove featured image', 'TBA' ),
		'use_featured_image'    => __( 'Use as featured image', 'TBA' ),
		'insert_into_item'      => __( 'Insert into item', 'TBA' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'TBA' ),
		'items_list'            => __( 'food list', 'TBA' ),
		'items_list_navigation' => __( 'foods list navigation', 'TBA' ),
		'filter_items_list'     => __( 'Filter foods list', 'TBA' ),
	);
	$args = array(
		'label'                 => __( 'Food', 'TBA' ),
		'description'           => __( 'Foods that fight for you.', 'TBA' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'foods', $args );

// New CPT Reasons

		$labels = array(
		'name'                  => _x( 'Reasons', 'Post Type General Name', 'TBA' ),
		'singular_name'         => _x( 'Reason', 'Post Type Singular Name', 'TBA' ),
		'menu_name'             => __( 'Reasons', 'TBA' ),
		'name_admin_bar'        => __( 'Reasons', 'TBA' ),
		'parent_item_colon'     => __( 'Parent Item:', 'TBA' ),
		'all_items'             => __( 'All Reasons', 'TBA' ),
		'add_new_item'          => __( 'Add New Reason', 'TBA' ),
		'add_new'               => __( 'Add Reason', 'TBA' ),
		'new_item'              => __( 'New Reason', 'TBA' ),
		'edit_item'             => __( 'Edit Reason', 'TBA' ),
		'update_item'           => __( 'Update Reason', 'TBA' ),
		'view_item'             => __( 'View Reason', 'TBA' ),
		'search_items'          => __( 'SearchReasons', 'TBA' ),
		'not_found'             => __( 'Not found', 'TBA' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'TBA' ),
		'items_list'            => __( 'Reasons list', 'TBA' ),
		'items_list_navigation' => __( 'Reasons list navigation', 'TBA' ),
		'filter_items_list'     => __( 'Filter Recipes list', 'TBA' ),
	);
	$args = array(
		'label'                 => __( 'Reason', 'TBA' ),
		'description'           => __( 'reason', 'TBA' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-help',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'reasons', $args );







	