<?php
/**
 * WooCommerce Sidebar Area
 *
 * @package    Secretum
 * @subpackage Core\Sidebars\WooCommerce
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/sidebars/woocommerce.php
 *
 * @see        register_sidebar
 * @link       https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @see        secretum_sidebar_container
 * @see        secretum_sidebar_textuals
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/sidebars.php
 *
 * @since 1.0.0
 */

namespace Secretum;

// If WooCommerce Active.
if ( true === secretum_is_woocomerce() ) {
	// Product Page Widget Area.
	register_sidebar(
		[
			'name'          => __( '- WooCommerce Product Page', 'secretum' ),
			'id'            => 'sidebar-woo-product',
			'description'   => __( 'Displays right sidebar widget area on WooCommerce single product pages. Automatically displays if a widget is defined.', 'secretum' ),
			'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]
	);

	// Storefront Widget Area.
	register_sidebar(
		[
			'name'          => __( '- WooCommerce Storefront', 'secretum' ),
			'id'            => 'sidebar-woo-storefront',
			'description'   => __( 'Displays right sidebar widget area on WooCommerce storefront page. Automatically displays if a widget is defined.', 'secretum' ),
			'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]
	);

	// Register Product Archives Widget Area.
	register_sidebar(
		[
			'name'          => __( '- WooCommerce Archives', 'secretum' ),
			'id'            => 'sidebar-woo-archives',
			'description'   => __( 'Displays right sidebar widget area on WooCommerce Category & Tag archive pages. Automatically displays if a widget is defined.', 'secretum' ),
			'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]
	);

	// Register Default WooCommerce Widget Area.
	register_sidebar(
		[
			'name'          => __( '- WooCommerce Default', 'secretum' ),
			'id'            => 'sidebar-woo-default',
			'description'   => __( 'Displays right sidebar widget area on all WooCommerce pages if an above widget area is not defined. Automatically displays if a widget is defined.', 'secretum' ),
			'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col' . secretum_container( 'sidebar', 'return', [ 'textuals' => true ] ) . '">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]
	);

}
