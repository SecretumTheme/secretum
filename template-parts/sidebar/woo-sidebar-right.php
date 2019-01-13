<?php
/**
 * Sidebar Template Part
 *
 * @package Secretum
 */

namespace Secretum;

// @about If WooCommerce Shop Page & If Sidebar Is Active
if ( is_shop() && is_active_sidebar( 'sidebar-woo-storefront' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-woo-storefront" role="complementary">
	<?php dynamic_sidebar( 'sidebar-woo-storefront' ); ?>
</div><!-- .sidebar -->
<?php

// @about If WooCommerce Product Page & If Sidebar Is Active
} elseif ( is_product() && is_active_sidebar( 'sidebar-woo-product' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-woo-product" role="complementary">
	<?php dynamic_sidebar( 'sidebar-woo-product' ); ?>
</div><!-- .sidebar -->
<?php

// @about If WooCommerce Product Category or Tag Templates & If Sidebar Is Active
} elseif ( ( is_product_category() || is_product_tag() ) && is_active_sidebar( 'sidebar-woo-archives' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-woo-archives" role="complementary">
	<?php dynamic_sidebar( 'sidebar-woo-archives' ); ?>
</div><!-- .sidebar -->
<?php

// @about Default WooCommerce Sidebar
} elseif ( is_active_sidebar( 'sidebar-woo-default' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-woo-default" role="complementary">
	<?php dynamic_sidebar( 'sidebar-woo-default' ); ?>
</div><!-- .sidebar -->
<?php
}
