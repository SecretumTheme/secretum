<?php
/**
 * Default sidebar containing the main widget area
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Sidebar RIGHT Is Active
if ( is_active_sidebar( 'sidebar-1' ) ) {
?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="secondary" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .sidebar -->
<?php
}
