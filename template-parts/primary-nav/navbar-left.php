<?php
/**
 * Primary Navbar - Left
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Display Allowed & Menu Active
if (!secretum_mod('primary_nav_status') && has_nav_menu('secretum-navbar-primary-left')) {
?>
<nav class="wrapper navbar navbar-expand-lg<?php echo secretum_primary_nav_color_scheme(); echo secretum_primary_nav_wrapper(); ?>">
<div class="container<?php echo secretum_primary_nav_container(); ?>">
<?php
	// Display Toggler
	get_template_part('template-parts/primary-nav/toggler');

	// Display Nav
	wp_nav_menu(array(
		'depth' 			=> 2,
		'theme_location' 	=> 'secretum-navbar-primary-left',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id' 		=> 'navbarNavDropdown',
		'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
		'menu_id' 			=> 'main-menu',
		'divider'			=> secretum_primary_nav_divider_classes(),
		'walker' 			=> new \Secretum\Navwalker(),
	    'fallback_cb'       => false,
	    'echo'				=> true
	));
?>
</div><!-- .container -->
</nav><!-- .navbar -->
<?php 
}
