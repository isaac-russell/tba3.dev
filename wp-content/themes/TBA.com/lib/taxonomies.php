<?php 

/* 
 * 
 * Taxonomies
 *
 */

// Same as with Custom Types, you only need the arguments and register_taxonomy function here. They are hooked into WordPress in functions.php.

$labels = array(
		'name'                       => _x( 'Recipe Types', 'Taxonomy General Name', 'TBA' ),
		'singular_name'              => _x( 'Recipe Type', 'Taxonomy Singular Name', 'TBA' ),
		'menu_name'                  => __( 'Recipe Type', 'TBA' ),
		'all_items'                  => __( 'All Recipe Types', 'TBA' ),
		'parent_item'                => __( 'Parent Item', 'TBA' ),
		'parent_item_colon'          => __( 'Parent Item:', 'TBA' ),
		'new_item_name'              => __( 'New Item Name', 'TBA' ),
		'add_new_item'               => __( 'Add New Item', 'TBA' ),
		'edit_item'                  => __( 'Edit Item', 'TBA' ),
		'update_item'                => __( 'Update Item', 'TBA' ),
		'view_item'                  => __( 'View Item', 'TBA' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'TBA' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'TBA' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'TBA' ),
		'popular_items'              => __( 'Popular Items', 'TBA' ),
		'search_items'               => __( 'Search Items', 'TBA' ),
		'not_found'                  => __( 'Not Found', 'TBA' ),
		'items_list'                 => __( 'Items list', 'TBA' ),
		'items_list_navigation'      => __( 'Items list navigation', 'TBA' ),
	);
	$rewrite = array(
		'slug'                       => 'Recipe',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'recipe_type', array( 'recipes' ), $args );


	$labels = array(
		'name'                       => _x( 'Food Types', 'Taxonomy General Name', 'TBA' ),
		'singular_name'              => _x( 'Food Type', 'Taxonomy Singular Name', 'TBA' ),
		'menu_name'                  => __( 'Food Type', 'TBA' ),
		'all_items'                  => __( 'All Foods', 'TBA' ),
		'parent_item'                => __( 'Parent Item', 'TBA' ),
		'parent_item_colon'          => __( 'Parent Item:', 'TBA' ),
		'new_item_name'              => __( 'New Food Name', 'TBA' ),
		'add_new_item'               => __( 'Add New Food Item', 'TBA' ),
		'edit_item'                  => __( 'Edit Food Item', 'TBA' ),
		'update_item'                => __( 'Update Food Item', 'TBA' ),
		'view_item'                  => __( 'View Food Item', 'TBA' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'TBA' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'TBA' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'TBA' ),
		'popular_items'              => __( 'Popular Items', 'TBA' ),
		'search_items'               => __( 'Search Items', 'TBA' ),
		'not_found'                  => __( 'Not Found', 'TBA' ),
		'no_terms'                   => __( 'No items', 'TBA' ),
		'items_list'                 => __( 'Items list', 'TBA' ),
		'items_list_navigation'      => __( 'Items list navigation', 'TBA' ),
	);
$rewrite = array(
		'slug'                       => 'Food',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'food_type', array( 'foods' ), $args );

	$labels = array(
		'name'                       => _x( 'Reason Types', 'Taxonomy General Name', 'TBA' ),
		'singular_name'              => _x( 'Reason Type', 'Taxonomy Singular Name', 'TBA' ),
		'menu_name'                  => __( 'Reason Type', 'TBA' ),
		'all_items'                  => __( 'All Reason Types', 'TBA' ),
		'parent_item'                => __( 'Parent Item', 'TBA' ),
		'parent_item_colon'          => __( 'Parent Item:', 'TBA' ),
		'new_item_name'              => __( 'New Item Name', 'TBA' ),
		'add_new_item'               => __( 'Add New Item', 'TBA' ),
		'edit_item'                  => __( 'Edit Item', 'TBA' ),
		'update_item'                => __( 'Update Item', 'TBA' ),
		'view_item'                  => __( 'View Item', 'TBA' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'TBA' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'TBA' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'TBA' ),
		'popular_items'              => __( 'Popular Items', 'TBA' ),
		'search_items'               => __( 'Search Items', 'TBA' ),
		'not_found'                  => __( 'Not Found', 'TBA' ),
		'items_list'                 => __( 'Items list', 'TBA' ),
		'items_list_navigation'      => __( 'Items list navigation', 'TBA' ),
	);
	$rewrite = array(
		'slug'                       => 'Reason',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'reason_type', array( 'reasons' ), $args );