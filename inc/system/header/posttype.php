<?php
/**
 * Register Custom WordPress Post Type
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Initialize Custom Post Type: secretum_headers
 * Adds sub-menu "Headers" to the Appearances Menu
 *
 * @return void
 */
add_action('init', function() {
    // Register Post Type
    register_post_type('secretum_headers', array(
        'public' 				=> false,
        'show_in_nav_menus' 	=> true,
        'exclude_from_search' 	=> false,
        'publicly_queryable' 	=> false,
        'query_var' 			=> true,
        'show_ui' 				=> true,
        'show_in_menu' 			=> 'themes.php',
        'show_in_admin_bar' 	=> false,
        'show_in_rest' 			=> false,
        'rest_base' 			=> "",
        'rewrite' 				=> array('with_front' => false),
        'has_archive' 			=> 'false',
        'capability_type' 		=> 'post',
        'hierarchical' 			=> true,
        'map_meta_cap' 			=> true,
        'description' 			=> 'false',
        'menu_position' 		=> null,
        'menu_icon' 			=> '',
        'taxonomies' 			=> array(),
        'supports' 				=> array('title', 'editor', 'revisions'),
        'labels' 				=> array(
            'name' 					=> _x('Headers', 'post type general name', 'secretum'),
            'singular_name' 		=> _x('Header', 'post type singular name', 'secretum'),
            'menu_name' 			=> _x('Headers', 'admin menu', 'secretum'),
            'name_admin_bar' 		=> _x('Headers', 'add new on admin bar', 'secretum'),
            'add_new' 				=> _x('Add New', 'doc', 'secretum'),
            'add_new_item' 			=> __('Add New Header', 'secretum'),
            'new_item' 				=> __('New Header', 'secretum'),
            'edit_item' 			=> __('Edit Header', 'secretum'),
            'view_item' 			=> __('View Header', 'secretum'),
            'all_items' 			=> __('Headers', 'secretum'),
            'search_items' 			=> __('Search Header', 'secretum'),
            'parent_item_colon' 	=> __('Parent Header:', 'secretum'),
            'not_found' 			=> __('No Header Found.', 'secretum'),
            'not_found_in_trash' 	=> __('No Header Found in Trash.', 'secretum'),
            'archives' 				=> __('Header Archives', 'secretum'),
            'attributes' 			=> __('Header Attributes', 'secretum'),
            'featured_image' 		=> __('Featured Header Image', 'secretum'),
            'set_featured_image' 	=> __('Set Featured Header Image', 'secretum'),
            'remove_featured_image' => __('Remove Featured Header Image', 'secretum'),
            'use_featured_image' 	=> __('Use As Featured Header Image', 'secretum'),
            'items_list' 			=> __('Header List', 'secretum'),
            'items_list_navigation' => __('Header List Navigation', 'secretum'),
            'insert_into_item' 		=> __('Insert Into Header', 'secretum'),
            'uploaded_to_this_item' => __('Uploaded To Header', 'secretum'),
            'filter_items_list' 	=> __('Filter Header', 'secretum'),
       ),
   ));
});
