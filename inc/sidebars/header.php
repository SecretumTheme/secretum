<?php
/**
 * Header Sidebar Area
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Setting
if ( secretum_mod( 'header_top_status' ) ) {
	// @about Register Sidebar Header Top
	register_sidebar( array(
		'name'		  	=> __( '- Top Header Widget Area', 'secretum' ),
		'id' 			=> 'secretum-sidebar-header-top',
		'description' 	=> __( 'A containerless, no html/styling, widget area above the header. Create a unique layout using the Custom HTML widget. Overrides top bar header menus if a widget is defined.', 'secretum' ),
		'before_widget' => '',
		'after_widget' 	=> '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
