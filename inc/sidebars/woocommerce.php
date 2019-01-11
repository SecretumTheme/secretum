<?php
/**
 * WooCommerce Sidebar Area
 *
 * @package Secretum
 */

namespace Secretum;

// @about If WooCommerce Active
if ( class_exists( 'woocommerce' ) ) {
	// @about Product Page Widget Area
	register_sidebar( array(
		'name' 			=> __( '- WooCommerce Product Page', 'secretum' ),
		'id' 			=> 'sidebar-woo-product',
		'description'   => __( 'Displays right sidebar widget area on WooCommerce single product pages. Automatically displays if a widget is defined.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_sidebar_container() . secretum_sidebar_textuals() . '">',
		'after_widget' 	=> '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// @about Storefront Widget Area
	register_sidebar( array(
		'name'		  	=> __( '- WooCommerce Storefront', 'secretum' ),
		'id' 			=> 'sidebar-woo-storefront',
		'description'   => __( 'Displays right sidebar widget area on WooCommerce storefront page. Automatically displays if a widget is defined.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_sidebar_container() . secretum_sidebar_textuals() . '">',
		'after_widget' 	=> '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// @about Register Product Archives Widget Area
	register_sidebar( array(
		'name'		  	=> __( '- WooCommerce Archives', 'secretum' ),
		'id' 			=> 'sidebar-woo-archives',
		'description'   => __( 'Displays right sidebar widget area on WooCommerce Category & Tag archive pages. Automatically displays if a widget is defined.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_sidebar_container() . secretum_sidebar_textuals() . '">',
		'after_widget' 	=> '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// @about Register Default WooCommerce Widget Area
	register_sidebar( array(
		'name'		  	=> __( '- WooCommerce Default', 'secretum' ),
		'id' 			=> 'sidebar-woo-default',
		'description'   => __( 'Displays right sidebar widget area on all WooCommerce pages if an above widget area is not defined. Automatically displays if a widget is defined.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_sidebar_container() . secretum_sidebar_textuals() . '">',
		'after_widget' 	=> '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}// End if().
