<?php
/**
 * Display Primary Nav Menu
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/wp-nav-menu.php
 * @since      1.6.0
 */

namespace Secretum;

$secretum_primary_nav_theme_location = 'secretum-navbar-primary';
if ( true !== has_nav_menu( 'secretum-navbar-primary' ) && true === has_nav_menu( 'secretum-navbar-primary-below' ) ) {
	$secretum_primary_nav_theme_location = 'secretum-navbar-primary-below';
}

?>
<nav class="wrapper navbar <?php secretum_navbar_toggler_display( 'size' ); ?><?php secretum_wrapper( 'primary_nav' ); ?>" aria-label="<?php secretum_text( 'primary_nav_aria_label_text', true ); ?>" role="navigation">
<div class="container<?php secretum_container( 'primary_nav', 'echo', [ 'textuals' => true ] ); ?>">
<?php
if ( false !== secretum_mod( 'primary_nav_toggler_status' ) ) {
	get_template_part( 'template-parts/primary-nav/toggler' );
}

wp_nav_menu(
	[
		'depth'           => 5,
		'theme_location'  => $secretum_primary_nav_theme_location,
		'container_class' => secretum_navbar_toggler_display( 'class' ),
		'container_id'    => 'navbarNavDropdown',
		'menu_class'      => 'navbar-nav' . secretum_alignment( 'primary_nav', 'return', [ 'margin' => true ] ),
		'menu_id'         => 'main-menu',
		'divider'         => secretum_nav_item( 'primary_nav' ),
		'walker'          => new \Secretum\Navwalker(
			'primary_nav',
			secretum_nav_dropdown( 'primary_nav' ),
			secretum_textual( 'primary_nav_dropdown', 'return' )
		),
		'fallback_cb'     => '\Secretum\Navwalker::fallback',
		'echo'            => true,
	]
);

get_template_part( 'template-parts/primary-nav/search' );
?>
</nav><!-- .navbar -->
</div><!-- .col-md -->
