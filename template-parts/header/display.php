<?php
/**
 * Display Header Area
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/display.php
 * @since      1.0.0
 */

namespace Secretum;

// If Navbar Location Above.
if ( true === secretum_navbar_display_location( 'above' ) ) {
	get_template_part( 'template-parts/primary-nav/navbar' );
}

// If Header Active.
if ( false !== secretum_mod( 'header_status' ) ) {
	// Custom Image/Video Header.
	if ( get_custom_header_markup() ) {
		?>
		<div class="custom-header">

			<div class="custom-header-media">
				<?php the_custom_header_markup(); ?>
			</div>

		</div><!-- .custom-header -->
		<?php
	}
}

// If Header Active.
if ( false !== secretum_mod( 'header_status' ) ) {
	?>
	<div class="header<?php secretum_wrapper( 'header' ); ?>" id="wrapper-header" itemscope itemtype="http://schema.org/WebSite">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'secretum' ); ?></a>
		<?php if ( true === secretum_navbar_display_location( 'left' ) || true === secretum_navbar_display_location( 'right' ) ) { ?>
			<nav class="navbar navbar-expand-lg p-0">
		<?php } ?>

			<div class="container<?php secretum_container( 'header' ); ?><?php secretum_alignment( 'site_identity', 'echo', [ 'margin' => true ] ); ?>">
				<?php
				if ( true === secretum_navbar_display_location( 'left' ) ) {
					get_template_part( 'template-parts/primary-nav/navbar' );
				}

				get_template_part( 'template-parts/header/logo' );

				if ( true === secretum_navbar_display_location( 'right' ) ) {
					get_template_part( 'template-parts/primary-nav/navbar' );
				}
				?>
			</div><!-- .container -->

		<?php if ( true === secretum_navbar_display_location( 'left' ) || true === secretum_navbar_display_location( 'right' ) ) { ?>
			</nav><!-- .navbar -->
		<?php } ?>

	</div><!-- .header -->

	<?php
}

// If Navbar Location Below.
if ( true === secretum_navbar_display_location( 'below' ) ) {
	get_template_part( 'template-parts/primary-nav/navbar' );
}
