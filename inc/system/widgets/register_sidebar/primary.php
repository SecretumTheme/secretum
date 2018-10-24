<?php
/**
 * Primary Sidebar Area
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


// Sidebar Right
register_sidebar(array(
    'name'          => __('1) Sidebar Right', 'secretum'),
    'id'            => 'sidebar-right',
    'description'   => __('Right sidebar widget area. Automatically displays if a widget is defined.', 'secretum'),
    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
    'after_widget' 	=> '</aside>',
    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
    'after_title'   => '</h3>',
));

// Sidebar Left
register_sidebar(array(
    'name'          => __('2) Sidebar Left', 'secretum'),
    'id'            => 'sidebar-left',
    'description'   => __('Left sidebar widget area. Must be activated to be used, to activate click on the Appearance Menu > Customize > Theme: Sidebar Area > Sidebar Container > Default Sidebar Display Location.', 'secretum'),
    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s">',
    'after_widget' 	=> '</aside>',
    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
    'after_title'   => '</h3>',
));

// Sidebar Contact Page
register_sidebar(array(
    'name'          => __('3) Sidebar Contact Page', 'secretum'),
    'id'            => 'sidebar-right-contact',
    'description'   => __('Displays right sidebar widget area on the contact us page template. Automatically displays if a widget is defined. Defaults to Sidebar Right Widgets.', 'secretum'),
    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
    'after_widget' 	=> '</aside>',
    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
    'after_title'   => '</h3>',
));

// Sidebar Blog & Archive
register_sidebar(array(
    'name'          => __('4) Sidebar Blog & Archives', 'secretum'),
    'id'            => 'sidebar-1',
    'description'   => __('Displays right sidebar widget area on blog posts and archive pages. Automatically displays if a widget is defined. Defaults to Sidebar Right Widgets.', 'secretum'),
    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
    'after_widget' 	=> '</aside>',
    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
    'after_title'   => '</h3>',
));
