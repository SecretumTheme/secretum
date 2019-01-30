<?php
/**
 * Copyright Navbar
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Copyright
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/copyright/navbar.php
 * @since      1.0.0
 */

namespace Secretum;

// If Nav Menu Has Items.
if ( has_nav_menu( 'secretum-navbar-copyright' ) && ! secretum_mod( 'copyright_nav_status' ) ) {
?>
<div class="col-md">
<nav class="navbar navbar-expand<?php secretum_copyright_nav_wrapper(); ?>">
	<?php
		wp_nav_menu( [
			'depth' 			=> 0,
			'theme_location' 	=> 'secretum-navbar-copyright',
			'container_class' 	=> 'navbar-nav w-100',
			'container_id' 		=> 'navCopyright',
			'menu_class' 		=> 'navbar-nav primary-copyright' . secretum_copyright_nav_alignment(),
			'menu_id' 			=> 'navbarNavCopyright',
			'divider'			=> secretum_copyright_nav_items(),
			'walker' 			=> new \Secretum\Navwalker(),
			'fallback_cb'       => false,
			'echo'				=> true,
		] );
	?>
</nav><!-- .navbar -->
</div><!-- .col-md -->
<?php
}
