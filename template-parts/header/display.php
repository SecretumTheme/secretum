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
 */

namespace Secretum;

// If Active.
if ( ! secretum_mod( 'header_status' ) && ! secretum_mod( 'custom_headers' ) ) {
?>
<div class="header<?php secretum_header_wrapper(); ?>" id="wrapper-header" itemscope itemtype="http://schema.org/WebSite">
<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'secretum' ); ?></a>

<?php if ( has_nav_menu( 'secretum-navbar-primary-left' ) || has_nav_menu( 'secretum-navbar-primary-right' ) ) { ?>
	<nav class="navbar navbar-expand-lg p-0">
<?php } ?>

	<div class="container<?php secretum_header_container(); ?><?php secretum_site_identity_alignment(); ?>">
		<?php get_template_part( 'template-parts/primary-nav/navbar-left' ); ?>
		<?php get_template_part( 'template-parts/header/logo' ); ?>
		<?php get_template_part( 'template-parts/primary-nav/navbar-right' ); ?>
	</div><!-- .container -->

<?php if ( has_nav_menu( 'secretum-navbar-primary-left' ) || has_nav_menu( 'secretum-navbar-primary-right' ) ) { ?>
	</nav><!-- .navbar -->
<?php } ?>

</div><!-- .header -->
<?php
}
