<?php
/**
 * Primary Navbar - Above
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Primary-Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/navbar-above.php
 * @since      1.0.0
 */

namespace Secretum;

// If Display Allowed & Menu Active.
if ( true !== secretum_mod( 'primary_nav_status' ) && true === has_nav_menu( 'secretum-navbar-primary-above' ) ) {
?>
<nav class="wrapper navbar navbar-expand-lg<?php secretum_primary_nav_color_scheme(); ?><?php secretum_primary_nav_wrapper(); ?>">
<div class="container<?php secretum_primary_nav_container(); ?>">
<?php
	// Display Toggler.
	get_template_part( 'template-parts/primary-nav/toggler' );

	// Display Nav.
	wp_nav_menu( [
		'depth' 			=> 2,
		'theme_location' 	=> 'secretum-navbar-primary-above',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id' 		=> 'navbarNavDropdown',
		'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
		'menu_id' 			=> 'main-menu',
		'divider'			=> secretum_primary_nav_items(),
		'walker' 			=> new \Secretum\Navwalker(
			'primary_nav',
			secretum_primary_nav_dropdown(),
			secretum_primary_nav_dropdown_textual()
		),
		'fallback_cb' 		=> false,
		'echo'				=> true,
	] );

	// Navbar Search Form.
	get_template_part( 'template-parts/primary-nav/search' );
?>
</div><!-- .container -->
</nav><!-- .navbar -->
<?php
}
