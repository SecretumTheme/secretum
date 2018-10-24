<?php
/**
 * Secretum Theme: Register WordPress Taxonomies & Submenus
 */
if (! defined('ABSPATH')) { exit; }

/**
 * Register Taxonomy: documentation_topic
 */
if(!get_theme_mod('secretum_feature_documentation_taxonomy_topic')) {
    add_action('init', function() {
        register_taxonomy('documentation_topic', array('secretum_docs'), array(
            'public'            => false,
            'show_in_nav_menus' => true,
            'query_var'         => false,
            'show_ui'           => true,
            'hierarchical'      => true,
            'rewrite'           => array('with_front' => false),
            'labels'            => array(
                'name'              => _x('Documentation Topics', 'taxonomy general name', 'secretum'),
                'singular_name'     => _x('Documentation Topic', 'taxonomy singular name', 'secretum'),
                'new_item_name'     => __('New Documentation Topic', 'secretum'),
                'edit_item'         => __('Edit Documentation Topics', 'secretum'),
                'update_item'       => __('Update Documentation Topics', 'secretum'),
                'add_new_item'      => __('Add New Documentation Topic', 'secretum'),
                'search_items'      => __('Search Documentation Topics', 'secretum'),
                'all_items'         => __('All Documentation Topics', 'secretum'),
                'parent_item'       => __('Parent Documentation Topics', 'secretum'),
                'parent_item_colon' => __('Parent Documentation Topics:', 'secretum'),
                'not_found'         => __('No Documentation Topics Found', 'secretum'),
       )));
    });

    // Register Taxonomy Submenu
    add_action('admin_menu', function() {
        add_submenu_page(
            'edit.php?post_type=page',
            '',
            esc_html__('Documentation Topics', 'secretum'),
            'manage_options',
            'edit-tags.php?taxonomy=documentation_topic&post_type=page'
        );
    });
}


/**
 * Register Taxonomy: documentation_tag
 */
if(!get_theme_mod('secretum_feature_documentation_taxonomy_tag')) {
    add_action('init', function() {
        register_taxonomy('documentation_tag', array('secretum_docs'), array(
            'public'            => false,
            'show_in_nav_menus' => true,
            'query_var'         => false,
            'show_ui'           => true,
            'show_admin_column' => true,
            'hierarchical'      => false,
            'rewrite'           => array('with_front' => false),
            'labels'            => array(
                'name'              => _x('Documentation Tags', 'taxonomy general name', 'secretum'),
                'singular_name'     => _x('Documentation Tag', 'taxonomy singular name', 'secretum'),
                'new_item_name'     => __('New Documentation Tag', 'secretum'),
                'edit_item'         => __('Edit Documentation Tags', 'secretum'),
                'update_item'       => __('Update Documentation Tags', 'secretum'),
                'add_new_item'      => __('Add New Documentation Tag', 'secretum'),
                'search_items'      => __('Search Documentation Tags', 'secretum'),
                'all_items'         => __('All Documentation Tags', 'secretum'),
                'parent_item'       => __('Parent Documentation Tags', 'secretum'),
                'parent_item_colon' => __('Parent Documentation Tags:', 'secretum'),
                'not_found'         => __('No Documentation Tags Found', 'secretum'),
       )));
    });

    // Register Taxonomy Submenus: documentation_tag
    add_action('admin_menu', function() {
        add_submenu_page(
            'edit.php?post_type=page',
            '',
            esc_html__('Documentation Tags', 'secretum'),
            'manage_options',
            'edit-tags.php?taxonomy=documentation_tag&post_type=page'
        );
    });
}
