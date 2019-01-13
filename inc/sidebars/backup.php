<?php
/**
 * Backup Sidebar Widget
 *
 * @package Secretum
 */

namespace Secretum;

// @about Register Backup Widget
register_sidebar( array(
	'name'		  	=> __( '== Backup Area', 'secretum' ),
	'id' 			=> 'backup-widget',
	'description'   => __( 'Widgets stored here will not be displayed.', 'secretum' ),
	'before_widget' => '',
	'after_widget' 	=> '',
	'before_title'  => '',
	'after_title'   => '',
) );
