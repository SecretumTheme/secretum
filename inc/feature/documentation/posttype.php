<?php
/**
 * Secretum Theme: Register WordPress Posttype: Documentation
 */
if (! defined('ABSPATH')) { exit; }

/**
 * Register Post Type
 */
add_action('init', function() {
    register_post_type('secretum_docs', array(
        'public'                => true,
        'show_in_nav_menus'     => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=page',
        'show_in_admin_bar'     => false,
        'show_in_rest'          => false,
        'rest_base'             => "",
        'rewrite'               => array('slug' => 'documentation', 'with_front' => true),
        'has_archive'           => 'false',
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'map_meta_cap'          => true,
        'description'           => 'false',
        'menu_position'         => null,
        'menu_icon'             => '',
        'taxonomies'            => array('documentation_topic', 'documentation_tag'),
        'supports'              => array('custom-fields', 'editor', 'page-attributes', 'revisions', 'thumbnail', 'title'),
        'labels'                => array(
            'name'                  => _x('Documentation', 'post type general name', 'secretum'),
            'singular_name'         => _x('Documentation', 'post type singular name', 'secretum'),
            'menu_name'             => _x('Documentation', 'admin menu', 'secretum'),
            'name_admin_bar'        => _x('Documentation', 'add new on admin bar', 'secretum'),
            'add_new'               => _x('Add New', 'doc', 'secretum'),
            'add_new_item'          => __('Add New Documentation', 'secretum'),
            'new_item'              => __('New Documentation', 'secretum'),
            'edit_item'             => __('Edit Documentation', 'secretum'),
            'view_item'             => __('View Documentation', 'secretum'),
            'all_items'             => __('Documentation', 'secretum'),
            'search_items'          => __('Search Documentation', 'secretum'),
            'parent_item_colon'     => __('Parent Documentation:', 'secretum'),
            'not_found'             => __('No Documentation Found.', 'secretum'),
            'not_found_in_trash'    => __('No Documentation Found in Trash.', 'secretum'),
            'archives'              => __('Documentation Archives', 'secretum'),
            'attributes'            => __('Documentation Attributes', 'secretum'),
            'featured_image'        => __('Featured Documentation Image', 'secretum'),
            'set_featured_image'    => __('Set Featured Documentation Image', 'secretum'),
            'remove_featured_image' => __('Remove Featured Documentation Image', 'secretum'),
            'use_featured_image'    => __('Use As Featured Documentation Image', 'secretum'),
            'items_list'            => __('Documentation List', 'secretum'),
            'items_list_navigation' => __('Documentation List Navigation', 'secretum'),
            'insert_into_item'      => __('Insert Into Documentation', 'secretum'),
            'uploaded_to_this_item' => __('Uploaded To Documentation', 'secretum'),
            'filter_items_list'     => __('Filter Documentation', 'secretum'),
       ),
   ));
});
