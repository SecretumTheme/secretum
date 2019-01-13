<?php
/**
 * Primary Navbar - Right
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Display Allowed & Menu Active
if ( ! secretum_mod( 'primary_nav_status' ) && has_nav_menu( 'secretum-navbar-primary-right' ) ) {
?>
<nav class="wrapper navbar navbar-expand-lg<?php secretum_primary_nav_color_scheme(); ?><?php secretum_primary_nav_wrapper(); ?>">
<div class="container<?php secretum_primary_nav_container(); ?>">
<?php
	// @about Display Toggler
	get_template_part( 'template-parts/primary-nav/toggler' );

	// @about Display Nav
	wp_nav_menu( array(
		'depth' 			=> 2,
		'theme_location' 	=> 'secretum-navbar-primary-right',
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
		'fallback_cb' 		=> false,
		'echo'				=> true,
	) );
?>
</div><!-- .container -->
</nav><!-- .navbar -->
<?php
}
