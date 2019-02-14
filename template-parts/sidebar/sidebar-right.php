<?php
/**
 * Sidebar Template Part
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Sidebar
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/sidebar/sidebar-right.php
 * @since      1.0.0
 */

namespace Secretum;

// If Sidebar Right Active && Sidebar Right Location Set.
if ( true === is_active_sidebar( 'sidebar-right' ) && true === secretum_sidebar_location( 'right' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_wrapper( 'sidebar' ); ?>" id="sidebar-right" role="complementary">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</div><!-- .sidebar -->
<?php
}

// Default : Sidebar 1 Set - No Sidebar Right.
if ( true !== is_active_sidebar( 'sidebar-right' ) && true === is_active_sidebar( 'sidebar-1' ) && true === secretum_sidebar_location( 'right' ) ) { ?>
<div class="sidebar col-md widget-area<?php secretum_wrapper( 'sidebar' ); ?>" id="sidebar-right" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .sidebar -->
<?php
}
