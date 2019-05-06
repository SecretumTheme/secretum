<?php
/**
 * Sidebar Template Part
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/sidebar/woo-sidebar-right.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true === is_shop() && true === is_active_sidebar( 'sidebar-woo-storefront' ) ) {
	?>
	<div class="sidebar col-md widget-area<?php secretum_wrapper( 'sidebar' ); ?>" id="sidebar-woo-storefront" role="complementary">
		<?php dynamic_sidebar( 'sidebar-woo-storefront' ); ?>
	</div><!-- .sidebar -->
	<?php

} elseif ( true === is_product() && true === is_active_sidebar( 'sidebar-woo-product' ) ) {
	?>
	<div class="sidebar col-md widget-area<?php secretum_wrapper( 'sidebar' ); ?>" id="sidebar-woo-product" role="complementary">
		<?php dynamic_sidebar( 'sidebar-woo-product' ); ?>
	</div><!-- .sidebar -->
	<?php

} elseif ( ( true === is_product_category() || true === is_product_tag() ) && true === is_active_sidebar( 'sidebar-woo-archives' ) ) {
	?>
	<div class="sidebar col-md widget-area<?php secretum_wrapper( 'sidebar' ); ?>" id="sidebar-woo-archives" role="complementary">
		<?php dynamic_sidebar( 'sidebar-woo-archives' ); ?>
	</div><!-- .sidebar -->
	<?php

} elseif ( true === is_active_sidebar( 'sidebar-woo-default' ) ) {
	?>
	<div class="sidebar col-md widget-area<?php secretum_wrapper( 'sidebar' ); ?>" id="sidebar-woo-default" role="complementary">
		<?php dynamic_sidebar( 'sidebar-woo-default' ); ?>
	</div><!-- .sidebar -->
	<?php
}
