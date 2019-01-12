<?php
/**
 * Footer Sidebar Area
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Setting
if ( secretum_mod( 'footer_full_status' ) ) {
	// @about Register Full Footer
	register_sidebar( array(
		'name' 			=> __( '- Above Footer Widget Area', 'secretum' ),
		'id' 			=> 'footer-full',
		'description'   => __( 'A full-width & fluid container above primary footer area. Create a unique layout using the Custom HTML widget. Automatically displays if a widget is defined.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col">',
		'after_widget' 	=> '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

// @about Register Left Footer
register_sidebar( array(
	'name'		   	=> __( '- Footer Left Widget Area', 'secretum' ),
	'id' 			=> 'footer-left',
	'description'   => __( 'Left footer widgets area. Column 1 of 3.', 'secretum' ),
	'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s' . secretum_footer_textuals() . '">',
	'after_widget' 	=> '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
) );

// @about Register Center Footer
register_sidebar( array(
	'name' 			=> __( '- Footer Center Widget Area', 'secretum' ),
	'id' 			=> 'footer-center',
	'description' 	=> __( 'Center footer widgets area. Column 2 of 3.', 'secretum' ),
	'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s' . secretum_footer_textuals() . '">',
	'after_widget' 	=> '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
) );

// @about Register Right Footer
register_sidebar( array(
	'name' 			=> __( '- Footer Right Widget Area', 'secretum' ),
	'id' 			=> 'footer-right',
	'description'   => __( 'Right footer widgets area. Column 3 of 3.', 'secretum' ),
	'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s' . secretum_footer_textuals() . '">',
	'after_widget' 	=> '</aside>',
	'before_title' 	=> '<h3 class="widget-title">',
	'after_title'   => '</h3>',
) );
