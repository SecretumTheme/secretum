<?php
/**
 * Primary Sidebar Area
 *
 * @package    Secretum
 * @subpackage Core\Sidebars\Primary
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/sidebars/primary.php
 * @since      1.0.0
 */

namespace Secretum;

// Sidebar Right.
register_sidebar(
	[
		'name'          => __( '1 ) Sidebar Right', 'secretum' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Right sidebar widget area. Automatically displays if a widget is defined.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col ' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	]
);

// Sidebar Left.
register_sidebar(
	[
		'name'          => __( '2 ) Sidebar Left', 'secretum' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Left sidebar widget area. Must be activated to be used, to activate click on the Appearance Menu > Customize > Theme: Sidebar Area > Sidebar Container > Default Sidebar Display Location.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	]
);

// Sidebar Contact Page.
register_sidebar(
	[
		'name'          => __( '3 ) Sidebar Contact Page', 'secretum' ),
		'id'            => 'sidebar-right-contact',
		'description'   => __( 'Displays right sidebar widget area on the contact us page template. Automatically displays if a widget is defined. Defaults to Sidebar Right Widgets.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	]
);

// Sidebar Blog & Archive.
register_sidebar(
	[
		'name'          => __( '4 ) Sidebar Blog & Archives', 'secretum' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Displays right sidebar widget area on blog posts and archive pages. Automatically displays if a widget is defined. Defaults to Sidebar Right Widgets.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	]
);
