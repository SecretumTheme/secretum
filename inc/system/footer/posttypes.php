<?php
/**
 * Register WordPress Posttype: secretum_footers
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


// Initialize
add_action('init', function() {
    // Required
    if (!secretum_mod('custom_footers')) { return; }

    // Register Post Type
    register_post_type('secretum_footers', array(
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
            'name' 					=> _x('Footers', 'post type general name', 'secretum'),
            'singular_name' 		=> _x('Footer', 'post type singular name', 'secretum'),
            'menu_name' 			=> _x('Footers', 'admin menu', 'secretum'),
            'name_admin_bar' 		=> _x('Footers', 'add new on admin bar', 'secretum'),
            'add_new' 				=> _x('Add New', 'doc', 'secretum'),
            'add_new_item' 			=> __('Add New Footer', 'secretum'),
            'new_item' 				=> __('New Footer', 'secretum'),
            'edit_item' 			=> __('Edit Footer', 'secretum'),
            'view_item' 			=> __('View Footer', 'secretum'),
            'all_items' 			=> __('Footers', 'secretum'),
            'search_items' 			=> __('Search Footer', 'secretum'),
            'parent_item_colon' 	=> __('Parent Footer:', 'secretum'),
            'not_found' 			=> __('No Footer Found.', 'secretum'),
            'not_found_in_trash' 	=> __('No Footer Found in Trash.', 'secretum'),
            'archives' 				=> __('Footer Archives', 'secretum'),
            'attributes' 			=> __('Footer Attributes', 'secretum'),
            'featured_image' 		=> __('Featured Footer Image', 'secretum'),
            'set_featured_image' 	=> __('Set Featured Footer Image', 'secretum'),
            'remove_featured_image' => __('Remove Featured Footer Image', 'secretum'),
            'use_featured_image' 	=> __('Use As Featured Footer Image', 'secretum'),
            'items_list' 			=> __('Footer List', 'secretum'),
            'items_list_navigation' => __('Footer List Navigation', 'secretum'),
            'insert_into_item' 		=> __('Insert Into Footer', 'secretum'),
            'uploaded_to_this_item' => __('Uploaded To Footer', 'secretum'),
            'filter_items_list' 	=> __('Filter Footer', 'secretum'),
       ),
   ));
});
