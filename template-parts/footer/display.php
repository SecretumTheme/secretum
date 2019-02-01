<?php
/**
 * Display Footer Area
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Footer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/footer/display.php
 * @since      1.0.0
 */

namespace Secretum;

// If Active.
if ( true !== secretum_mod( 'footer_display_status' ) && true !== secretum_mod( 'custom_footers' ) && ( true === is_active_sidebar( 'footer-left' ) || true === is_active_sidebar( 'footer-center' ) || true === is_active_sidebar( 'footer-right' ) ) ) {
?>
<div class="wrapper footer<?php secretum_footer_wrapper(); ?>" id="wrapper-footer">
	<div class="container<?php secretum_footer_container(); ?>">
		<div class="row">
			<?php if ( is_active_sidebar( 'footer-left' ) ) { ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer-left' ); ?>
				</div><!-- .col-md -->
			<?php } ?>

			<?php if ( is_active_sidebar( 'footer-center' ) ) { ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer-center' ); ?>
				</div><!-- .col-md -->
			<?php } ?>

			<?php if ( is_active_sidebar( 'footer-right' ) ) { ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer-right' ); ?>
				</div><!-- .col-md -->
			<?php } ?>
		</div><!-- .row-->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
}
