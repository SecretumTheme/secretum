<?php
/**
 * Secretum Theme: Register WordPress Posttype: Testimonial
 */
if (! defined('ABSPATH')) { exit; }

/**
 * Register Post Type
 */
add_action('init', function() {
    register_post_type('secretum_testimonial', array(
        'public'                => false,
        'show_in_nav_menus'     => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'query_var'             => true,
        'show_ui'               => true,
        'show_in_menu'          => 'edit-comments.php',
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
            'name' 					=> _x('Testimonials', 'post type general name', 'secretum'),
            'singular_name' 		=> _x('Testimonial', 'post type singular name', 'secretum'),
            'menu_name' 			=> _x('Testimonials', 'admin menu', 'secretum'),
            'name_admin_bar' 		=> _x('Testimonials', 'add new on admin bar', 'secretum'),
            'add_new' 				=> _x('Add New', 'testimonial', 'secretum'),
            'add_new_item' 			=> __('Add New Testimonial', 'secretum'),
            'new_item' 				=> __('New Testimonial', 'secretum'),
            'edit_item' 			=> __('Edit Testimonial', 'secretum'),
            'view_item' 			=> __('View Testimonial', 'secretum'),
            'all_items' 			=> __('Testimonials', 'secretum'),
            'search_items' 			=> __('Search Testimonial', 'secretum'),
            'parent_item_colon' 	=> __('Parent Testimonial:', 'secretum'),
            'not_found' 			=> __('No Testimonial Found.', 'secretum'),
            'not_found_in_trash' 	=> __('No Testimonial Found in Trash.', 'secretum'),
            'archives' 				=> __('Testimonial Archives', 'secretum'),
            'attributes' 			=> __('Testimonial Attributes', 'secretum'),
            'featured_image' 		=> __('Featured Testimonial Image', 'secretum'),
            'set_featured_image' 	=> __('Set Featured Testimonial Image', 'secretum'),
            'remove_featured_image' => __('Remove Featured Testimonial Image', 'secretum'),
            'use_featured_image' 	=> __('Use As Featured Testimonial Image', 'secretum'),
            'items_list' 			=> __('Testimonial List', 'secretum'),
            'items_list_navigation' => __('Testimonial List Navigation', 'secretum'),
            'insert_into_item' 		=> __('Insert Into Testimonial', 'secretum'),
            'uploaded_to_this_item' => __('Uploaded To Testimonial', 'secretum'),
            'filter_items_list' 	=> __('Filter Testimonial', 'secretum'),
       ),
   ));
});
