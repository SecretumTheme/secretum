<?php
/**
 * Register Custom WordPress Post Type
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Initialize Custom Post Type: secretum_frontpages
 * Adds sub-menu "Frontpages" to the Appearances Menu
 *
 * @return void
 */
add_action('init', function() {
    // Register Post Type
    register_post_type('secretum_frontpages', array(
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
            'name' 					=> _x('Frontpages', 'post type general name', 'secretum'),
            'singular_name' 		=> _x('Frontpage', 'post type singular name', 'secretum'),
            'menu_name' 			=> _x('Frontpages', 'admin menu', 'secretum'),
            'name_admin_bar' 		=> _x('Frontpages', 'add new on admin bar', 'secretum'),
            'add_new' 				=> _x('Add New', 'doc', 'secretum'),
            'add_new_item' 			=> __('Add New Frontpage', 'secretum'),
            'new_item' 				=> __('New Frontpage', 'secretum'),
            'edit_item' 			=> __('Edit Frontpage', 'secretum'),
            'view_item' 			=> __('View Frontpage', 'secretum'),
            'all_items' 			=> __('Frontpages', 'secretum'),
            'search_items' 			=> __('Search Frontpage', 'secretum'),
            'parent_item_colon' 	=> __('Parent Frontpage:', 'secretum'),
            'not_found' 			=> __('No Frontpage Found.', 'secretum'),
            'not_found_in_trash' 	=> __('No Frontpage Found in Trash.', 'secretum'),
            'archives' 				=> __('Frontpage Archives', 'secretum'),
            'attributes' 			=> __('Frontpage Attributes', 'secretum'),
            'featured_image' 		=> __('Featured Frontpage Image', 'secretum'),
            'set_featured_image' 	=> __('Set Featured Frontpage Image', 'secretum'),
            'remove_featured_image' => __('Remove Featured Frontpage Image', 'secretum'),
            'use_featured_image' 	=> __('Use As Featured Frontpage Image', 'secretum'),
            'items_list' 			=> __('Frontpage List', 'secretum'),
            'items_list_navigation' => __('Frontpage List Navigation', 'secretum'),
            'insert_into_item' 		=> __('Insert Into Frontpage', 'secretum'),
            'uploaded_to_this_item' => __('Uploaded To Frontpage', 'secretum'),
            'filter_items_list' 	=> __('Filter Frontpage', 'secretum'),
       ),
   ));
});
