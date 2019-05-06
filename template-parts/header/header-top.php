<?php
/**
 * Header Top Area
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/header-top.php
 * @since      1.0.0
 */

namespace Secretum;

// If Header Top Not Hidden.
if ( false !== secretum_mod( 'header_top_status' ) ) {
	// If Header Top Sidebar Active.
	if ( true === is_active_sidebar( 'secretum-sidebar-header-top' ) ) {
		?>
		<div class="wrapper<?php secretum_wrapper( 'header_top' ); ?>">
		<div class="container<?php secretum_container( 'header_top', 'echo', [ 'textuals' => true ] ); ?>">

		<?php
			// Header Top Sidebar Widget Area.
			dynamic_sidebar( 'secretum-sidebar-header-top' );
		?>

		</div><!-- .container -->
		</div><!-- .wrapper -->
		<?php
	}

	// If Header Top Menu Active.
	if ( true === has_nav_menu( 'secretum-navbar-top' ) && true !== is_active_sidebar( 'secretum-sidebar-header-top' ) ) {
		?>
		<div class="wrapper<?php secretum_wrapper( 'header_top' ); ?>">
		<div class="container<?php secretum_container( 'header_top', 'echo', [ 'textuals' => true ] ); ?>">
		<nav class="navbar navbar-expand">

		<?php
			wp_nav_menu(
				[
					'depth'           => 0,
					'theme_location'  => 'secretum-navbar-top',
					'container_class' => secretum_alignment( 'header_top', 'return', [ 'margin' => true ] ),
					'container_id'    => 'navTopContainer',
					'menu_class'      => 'navbar-nav' . secretum_alignment( 'header_top', 'return', [ 'text' => 'items' ] ),
					'menu_id'         => 'navTopMenuId',
					'divider'         => secretum_nav_item( 'header_top' ),
					'walker'          => new \Secretum\Navwalker(),
					'fallback_cb'     => false,
					'echo'            => true,
				]
			);
		?>

		</nav><!-- .navbar -->
		</div><!-- .container -->
		</div><!-- .wrapper -->

		<?php
	}
}
