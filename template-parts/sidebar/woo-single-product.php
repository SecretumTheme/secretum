<?php
/**
 * Sidebar Template Part
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Sidebar Is Active
if ( is_active_sidebar( 'sidebar-single-product' ) ) { ?>
	<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-right" role="complementary">
		<?php dynamic_sidebar( 'sidebar-single-product' ); ?>
	</div><!-- .sidebar -->
<?php
}
