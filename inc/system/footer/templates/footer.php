<?php
/**
 * Display Footer Wrapper & Container
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If A Sidebar Is Active
if(is_active_sidebar('footer-left') || is_active_sidebar('footer-center') || is_active_sidebar('footer-right')) {
?>
	<div class="wrapper footer<?php echo secretum_footer_wrapper(); ?>" id="wrapper-footer">

	<div class="container<?php echo secretum_footer_container(); ?>">

		<div class="row">

			<?php if (is_active_sidebar('footer-left')) { ?>

				<div class="col-md">

					<?php dynamic_sidebar('footer-left'); ?>

				</div><!-- .col-md -->

			<?php } ?>

			<?php if (is_active_sidebar('footer-center')) { ?>

				<div class="col-md">

					<?php dynamic_sidebar('footer-center'); ?>

				</div><!-- .col-md -->

			<?php } ?>

			<?php if (is_active_sidebar('footer-right')) { ?>

				<div class="col-md">

					<?php dynamic_sidebar('footer-right'); ?>

				</div><!-- .col-md -->


			<?php } ?>

		</div><!-- .row-->

	</div><!-- .container -->

	</div><!-- .wrapper -->

<?php }
