<?php
/**
 * Primary Navbar - Below
 *
 * @package WordPress
 * @subpackage Secretum
 */

// No Active Menus Display Fallback
if (!has_nav_menu('secretum-navbar-primary-below') && !has_nav_menu('secretum-navbar-primary-above') && !has_nav_menu('secretum-navbar-primary-left') && !has_nav_menu('secretum-navbar-primary-right')) {
	$secretum_menu_status = true;

// Primary Below Nav Is Active
} elseif (has_nav_menu('secretum-navbar-primary-below')) {
	$secretum_menu_status = true;

// Do Not Display
} else {
	$secretum_menu_status = false;
}


// If Display Allowed & Menu Active
if (!secretum_mod('primary_nav_status') && $secretum_menu_status) {
?>
<nav class="wrapper navbar navbar-expand-lg<?php echo secretum_primary_nav_color_scheme(); echo secretum_primary_nav_wrapper(); ?>">
<div class="container<?php echo secretum_primary_nav_container(); ?>">
<?php
	// Display Toggler
	get_template_part('template-parts/primary-nav/toggler');

	// Display Nav
	wp_nav_menu(array(
		'depth' 			=> 2,
		'theme_location' 	=> 'secretum-navbar-primary-below',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id' 		=> 'navbarNavDropdown',
		'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
		'menu_id' 			=> 'main-menu',
		'divider'			=> secretum_primary_nav_divider_classes(),
		'walker' 			=> new \Secretum\Navwalker(),
	    'fallback_cb'       => secretum_primary_nav_fallback(),
	    'echo'				=> true
	));
?>
</div><!-- .container -->
</nav><!-- .navbar -->
<?php 
}
