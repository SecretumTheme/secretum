<?php
/**
 * Display Header Area
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Header
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/display.php
 * @since      1.0.0
 */

namespace Secretum;

// If Header Active.
if ( true !== secretum_mod( 'header_status' ) && true !== secretum_mod( 'custom_headers' ) ) {

// Custom Image/Video Header.
if ( get_custom_header_markup() ) { ?>
	<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>

	</div><!-- .custom-header -->
<?php }

// Default Header.
?>
<div class="header<?php secretum_wrapper( 'header' ); ?>" id="wrapper-header" itemscope itemtype="http://schema.org/WebSite">
<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'secretum' ); ?></a>
	<?php
	// Default Header.
	if ( true === has_nav_menu( 'secretum-navbar-primary-left' ) || true === has_nav_menu( 'secretum-navbar-primary-right' ) ) { ?>
		<nav class="navbar navbar-expand-lg p-0">
	<?php } ?>

		<div class="container<?php secretum_container( 'header' ); ?><?php secretum_alignment( 'site_identity', 'echo', [ 'margin' => true ] ); ?>">
			<?php get_template_part( 'template-parts/primary-nav/navbar-left' ); ?>
			<?php get_template_part( 'template-parts/header/logo' ); ?>
			<?php get_template_part( 'template-parts/primary-nav/navbar-right' ); ?>
		</div><!-- .container -->

	<?php if ( true === has_nav_menu( 'secretum-navbar-primary-left' ) || true === has_nav_menu( 'secretum-navbar-primary-right' ) ) { ?>
		</nav><!-- .navbar -->
	<?php } ?>

	</div><!-- .header -->
<?php
}
