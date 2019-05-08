<?php
/**
 * Primary Navbar - Above
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/navbar-above.php
 * @since      1.0.0
 */

namespace Secretum;

// If Display Allowed & Menu Active.
if ( false !== secretum_mod( 'primary_nav_status' ) && true === has_nav_menu( 'secretum-navbar-primary-above' ) ) { ?>
	<nav class="wrapper navbar <?php secretum_navbar_display( 'size' ); ?><?php secretum_wrapper( 'primary_nav' ); ?>">
	<div class="container<?php secretum_container( 'primary_nav', 'echo', [ 'textuals' => true ] ); ?>">
	<?php
		get_template_part( 'template-parts/primary-nav/toggler' );

		wp_nav_menu(
			[
				'depth'           => 5,
				'theme_location'  => 'secretum-navbar-primary-above',
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
				'fallback_cb'     => false,
				'echo'            => true,
			]
		);

		get_template_part( 'template-parts/primary-nav/search' );
	?>
		</nav><!-- .navbar -->
		</div><!-- .col-md -->

	<?php
}
