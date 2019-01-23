<?php
/**
 * Default sidebar containing the main widget area
 *
 * @package    Secretum
 * @subpackage Sidebar
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/sidebar.php
 */

namespace Secretum;

// If Sidebar RIGHT Is Active.
if ( is_active_sidebar( 'sidebar-1' ) ) {
?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="secondary" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .sidebar -->
<?php
}
