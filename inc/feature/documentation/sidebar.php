<?php
/**
 * Secretum Theme: Register Sidebars
 */
if (! defined('ABSPATH')) { exit; }


/**
 * Documentation Sidebars
 */
add_action('widgets_init', function()
{
	// Sidebar Left
	register_sidebar(array(
	    'name'          => __('- Documentation Sidebar Left', 'secretum'),
	    'id'            => 'documentation-sidebar-left',
	    'description' 	=> __('Left sidebar widget area for documentation. Automatically displays if a widget is defined.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
	    'after_title'   => '</h3>',
	));

	// If ToC disabled, register sidebar
	if(get_theme_mod('secretum_feature_documentation_toc')) {
		// Sidebar Right
		register_sidebar(array(
		    'name'          => __('- Documentation Sidebar Right', 'secretum'),
		    'id'            => 'documentation-sidebar-right',
		    'description' 	=> __('Right sidebar widget area for documentation. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
		    'after_title'   => '</h3>',
		));
	}

	// Footer Left
	register_sidebar(array(
	    'name'          => __('- Documentation Footer Left', 'secretum'),
	    'id'            => 'documentation-footer-left',
	    'description' 	=> __('Left footer widgets area. Column 1 of 3.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
	    'after_title'   => '</h3>',
	));

	// Footer Center
	register_sidebar(array(
	    'name'          => __('- Documentation Footer Center', 'secretum'),
	    'id'            => 'documentation-footer-center',
	    'description'   => __('Center footer widgets area. Column 2 of 3.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
	    'after_title'   => '</h3>',
	));

	// Footer Right
	register_sidebar(array(
	    'name'          => __('- Documentation Footer Right', 'secretum'),
	    'id'            => 'documentation-footer-right',
	    'description'   => __('Right footer widgets area. Column 3 of 3.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title' 	=> '<h3 class="widget-title" data-toc-skip>',
	    'after_title'   => '</h3>',
	));
});
