<?php
/**
 * Primary Navbar - Below
 *
 * @package Secretum
 */

namespace Secretum;

// @about No Active Menus Display Fallback
if ( ! has_nav_menu( 'secretum-navbar-primary-below' ) && ! has_nav_menu( 'secretum-navbar-primary-above' ) && ! has_nav_menu( 'secretum-navbar-primary-left' ) && ! has_nav_menu( 'secretum-navbar-primary-right' ) ) {
	$secretum_menu_status = true;
} elseif ( has_nav_menu( 'secretum-navbar-primary-below' ) ) {
	// @about Primary Below Nav Is Active
	$secretum_menu_status = true;
} else {
	// @about Do Not Display
	$secretum_menu_status = false;
}


// @about If Display Allowed & Menu Active
if ( ! secretum_mod( 'primary_nav_status' ) && $secretum_menu_status ) {
?>
<nav class="wrapper navbar navbar-expand-lg<?php secretum_primary_nav_color_scheme(); ?><?php secretum_primary_nav_wrapper(); ?>">
<div class="container<?php secretum_primary_nav_container(); ?>">
<?php
	// @about Display Toggler
	get_template_part( 'template-parts/primary-nav/toggler' );

	// @about Display Nav
	wp_nav_menu( array(
		'depth' 			=> 2,
		'theme_location' 	=> 'secretum-navbar-primary-below',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id' 		=> 'navbarNavDropdown',
		'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
		'menu_id' 			=> 'main-menu',
		'divider'			=> secretum_primary_nav_divider_classes(),
		'walker' 			=> new \Secretum\navwalker(
			'primary_nav',
			secretum_primary_nav_dropdown_classes(),
			secretum_primary_nav_dropdown_textual_classes()
		),
		'fallback_cb' 		=> '\Secretum\secretum_primary_nav_fallback',
		'echo'				=> true,
	) );

	// @about Navbar Search Form
	get_template_part( 'template-parts/primary-nav/search' );
?>
</div><!-- .container -->
</nav><!-- .navbar -->
<?php
}
