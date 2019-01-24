<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Body
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/body.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'body',
	__( 'Body', 'secretum' )
);


// Wrapper.
$wrapper->settings( [
	'section' => 'body',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'body_wrapper',
] );


// Container.
$container->settings( [
	'section' => 'body',
] );


// Container Borders.
$borders->settings( [
	'section' => 'body_container',
] );
