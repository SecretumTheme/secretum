<?php
/**
 * Backup Sidebar Widget
 *
 * @package    Secretum
 * @subpackage Core\Sidebars\Backup
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/sidebars/backup.php
 *
 * @see        register_sidebar
 * @link       https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @since      1.0.0
 */

namespace Secretum;

// Register Backup Widget.
register_sidebar(
	[
		'name'          => __( '== Backup Area', 'secretum' ),
		'id'            => 'backup-widget',
		'description'   => __( 'Widgets stored here will not be displayed.', 'secretum' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	]
);
