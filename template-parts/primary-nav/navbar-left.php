<?php
/**
 * Primary Navbar - Left
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Primary-Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/navbar-left.php
 * @since      1.0.0
 */

namespace Secretum;

// If Display Allowed & Menu Active.
if ( true !== secretum_mod( 'primary_nav_status' ) && true === has_nav_menu( 'secretum-navbar-primary-left' ) ) { ?>
	<nav class="wrapper navbar navbar-expand-lg<?php secretum_wrapper( 'primary_nav' ); ?>">
	<div class="container<?php secretum_container( 'primary_nav', 'echo', [
		'textuals' => true,
	] ); ?>">
<?php
	// Display Toggler.
	get_template_part( 'template-parts/primary-nav/toggler' );

	// Display Nav.
	wp_nav_menu( [
		'depth' 			=> 2,
		'theme_location' 	=> 'secretum-navbar-primary-left',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id' 		=> 'navbarNavDropdown',
		'menu_class' 		=> 'navbar-nav primary' . secretum_alignment( 'primary_nav', 'return', [
			'text' => 'items',
		] ),
		'menu_id' 			=> 'main-menu',
		'divider'			=> secretum_nav_item( 'primary_nav' ),
		'walker' 			=> new \Secretum\Navwalker(
			'primary_nav',
			secretum_nav_dropdown( 'primary_nav' ),
			secretum_textual( 'primary_nav_dropdown', 'return' )
		),
		'fallback_cb' 		=> false,
		'echo'				=> true,
	] );
?>
	</nav><!-- .navbar -->
	</div><!-- .col-md -->

<?php
}// End if().
