<?php
/**
 * Header Sidebar Area
 *
 * @package    Secretum
 * @subpackage Core\Sidebars\Headers
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/sidebars/headers.php
 *
 * @see        register_sidebar
 * @link       https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @since      1.0.0
 */

namespace Secretum;

// If Setting.
if ( secretum_mod( 'header_top_status' ) ) {
	// Register Sidebar Header Top.
	register_sidebar( [
		'name'		  	=> __( '- Top Header Widget Area', 'secretum' ),
		'id' 			=> 'secretum-sidebar-header-top',
		'description' 	=> __( 'A containerless, no html/styling, widget area above the header. Create a unique layout using the Custom HTML widget. Overrides top bar header menus if a widget is defined.', 'secretum' ),
		'before_widget' => '',
		'after_widget' 	=> '',
		'before_title'  => '',
		'after_title'   => '',
	] );
}
