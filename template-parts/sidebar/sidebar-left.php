<?php
/**
 * Sidebar Template Part
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If Sidebars Active && Sidebar Location Set
if (is_active_sidebar('sidebar-left') && secretum_sidebar_location('left')) { ?>

	<div class="sidebar col-md widget-area<?php echo secretum_sidebar_wrapper(); ?>" id="sidebar-left" role="complementary">

		<?php dynamic_sidebar('sidebar-left'); ?>

	</div><!-- .sidebar -->

<?php
}
