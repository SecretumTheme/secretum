<?php
/**
 * Display Footer Area
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/footer/display.php
 * @since      1.0.0
 */

namespace Secretum;

// If Active.
if ( false !== secretum_mod( 'footer_status' ) ) {
	if ( true === is_active_sidebar( 'footer-left' ) || true === is_active_sidebar( 'footer-center' ) || true === is_active_sidebar( 'footer-right' ) ) {
		?>
		<div class="wrapper footer<?php secretum_wrapper( 'footer' ); ?>" id="wrapper-footer">
			<div class="container<?php secretum_container( 'footer' ); ?>">
				<div class="row">
						<div class="col-md">
						<?php
						if ( true === is_active_sidebar( 'footer-left' ) ) {
							dynamic_sidebar( 'footer-left' );
						}
						?>
						</div><!-- .col-md -->

						<div class="col-md">
						<?php
						if ( true === is_active_sidebar( 'footer-center' ) ) {
							dynamic_sidebar( 'footer-center' );
						}
						?>
						</div><!-- .col-md -->

						<div class="col-md">
						<?php
						if ( true === is_active_sidebar( 'footer-right' ) ) {
							dynamic_sidebar( 'footer-right' );
						}
						?>
						</div><!-- .col-md -->
				</div><!-- .row-->
			</div><!-- .container -->
		</div><!-- .wrapper -->
		<?php
	}
}
