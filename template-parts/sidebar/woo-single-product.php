<?php
/**
 * Sidebar Template Part
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Sidebar
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/sidebar/woo-sidebar-product.php
 * @since      1.0.0
 */

namespace Secretum;

// If Sidebar Is Active.
if ( is_active_sidebar( 'sidebar-single-product' ) ) { ?>
	<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-right" role="complementary">
		<?php dynamic_sidebar( 'sidebar-single-product' ); ?>
	</div><!-- .sidebar -->
<?php
}
