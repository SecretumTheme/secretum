<?php
/**
 * Sidebar Template Part
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Sidebars Active && Sidebar Location Set
if ( ! is_active_sidebar( 'sidebar-1' ) && is_active_sidebar( 'sidebar-right' ) && secretum_sidebar_location( 'right' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-right" role="complementary">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</div><!-- .sidebar -->
<?php
}

// @about If Sidebars Active && Sidebar Location Set
if ( is_active_sidebar( 'sidebar-1' ) && secretum_sidebar_location( 'right' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-right" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .sidebar -->
<?php
}
