<?php
/**
 * Sidebar Template Part
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Sidebar
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/sidebar/sidebar-left.php
 * @since      1.0.0
 */

namespace Secretum;

// If Sidebars Active && Sidebar Location Set.
if ( true === is_active_sidebar( 'sidebar-left' ) && true === secretum_sidebar_location( 'left' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_sidebar_wrapper(); ?>" id="sidebar-left" role="complementary">
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
</div><!-- .sidebar -->
<?php
}
