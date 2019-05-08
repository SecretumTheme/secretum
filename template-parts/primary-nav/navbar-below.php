<?php
/**
 * Primary Navbar - Below
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/navbar-below.php
 * @since      1.0.0
 */

namespace Secretum;

// No Active Menus Display Fallback.
if ( true !== has_nav_menu( 'secretum-navbar-primary-below' ) && true !== has_nav_menu( 'secretum-navbar-primary-above' ) && true !== has_nav_menu( 'secretum-navbar-primary-left' ) && true !== has_nav_menu( 'secretum-navbar-primary-right' ) ) {
	$secretum_menu_status = true;
} elseif ( true === has_nav_menu( 'secretum-navbar-primary-below' ) ) {
	// Primary Below Nav Is Active.
	$secretum_menu_status = true;
} else {
	// Default - Do Not Display.
	$secretum_menu_status = false;
}


// If Display Allowed & Menu Active.
if ( false !== secretum_mod( 'primary_nav_status' ) && true === $secretum_menu_status ) { ?>
	<nav class="wrapper navbar <?php secretum_navbar_display( 'size' ); ?><?php secretum_wrapper( 'primary_nav' ); ?>">
	<div class="container<?php secretum_container( 'primary_nav', 'echo', [ 'textuals' => true ] ); ?>">
	<?php
		get_template_part( 'template-parts/primary-nav/toggler' );

		wp_nav_menu(
			[
				'depth'           => 5,
				'theme_location'  => 'secretum-navbar-primary-below',
				'container_class' => secretum_navbar_display( 'class' ),
				'container_id'    => secretum_navbar_display( 'id' ),
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

	<?php
}
