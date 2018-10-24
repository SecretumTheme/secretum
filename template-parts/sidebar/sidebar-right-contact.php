<?php
/**
 * Sidebar Template Part
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
// If Sidebar Active
if (is_active_sidebar('sidebar-right-contact')) { ?>

	<div class="sidebar col-md widget-area<?php echo secretum_sidebar_wrapper(); ?>" id="sidebar-right-contact" role="complementary">

		<?php dynamic_sidebar('sidebar-right-contact'); ?>

	</div><!-- .sidebar -->

<?php
}
