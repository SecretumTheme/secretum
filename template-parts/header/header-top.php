<?php
/**
 * Header Top Area
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Header
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/header-top.php
 * @since      1.0.0
 */

namespace Secretum;

// If Header Top Status & Sidebar Active.
if ( secretum_mod( 'header_top_status' ) && is_active_sidebar( 'sidebar-header-top' ) ) {
	// Top Header Widget Area.
	dynamic_sidebar( 'secretum-sidebar-header-top' );
} elseif ( secretum_mod( 'header_top_status' ) && ( has_nav_menu( 'secretum-navbar-top-left' ) || has_nav_menu( 'secretum-navbar-top-right' ) ) ) {
	// If Header Top Status Active & Has Navs.
?>
<nav class="wrapper navbar navbar-expand-lg<?php secretum_header_top_wrapper(); ?>">
<div class="container<?php secretum_header_top_container(); ?><?php secretum_header_top_text_alignment(); ?>">
<?php
	// Display Top Left Nav.
	wp_nav_menu( [
		'depth' 			=> 0,
		'theme_location' 	=> 'secretum-navbar-top-left',
		'container_class' 	=> 'navbar-nav w-100',
		'container_id' 		=> 'topNavLeft',
		'menu_class' 		=> 'navbar-nav primary-top mr-auto',
		'menu_id' 			=> 'navbarNavLeft',
		'divider'			=> secretum_header_top_divider_classes(),
		'walker' 			=> new \Secretum\Navwalker(),
		'fallback_cb'	   	=> false,
		'echo'				=> true,
	] );

	// Display Top Right Nav.
	wp_nav_menu( [
		'depth' 			=> 0,
		'theme_location' 	=> 'secretum-navbar-top-right',
		'container_class' 	=> 'navbar-nav w-100',
		'container_id' 		=> 'topNavRight',
		'menu_class' 		=> 'navbar-nav primary-top ml-auto',
		'menu_id' 			=> 'navbarNavRight',
		'divider'			=> secretum_header_top_divider_classes(),
		'walker' 			=> new \Secretum\Navwalker(),
		'fallback_cb'	   	=> false,
		'echo'				=> true,
	] );
?>
</div><!-- .container -->
</nav><!-- .navbar -->
<?php
}// End if().
