<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/colors.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Text Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_text_colors() {
	return [
		''                   => __( 'Stylesheet Default', 'secretum' ),
		'none'               => __( 'Remove Default', 'secretum' ),
		'text'               => __( 'Theme Text Color', 'secretum' ),
		'text-alt'           => __( 'Theme Alt-Text Color', 'secretum' ),
		'text-primary'       => __( 'Primary Brand Color', 'secretum' ),
		'text-primary-dark'  => __( 'Primary Brand "Dark" Color', 'secretum' ),
		'text-primary-light' => __( 'Primary Brand "Light" Color', 'secretum' ),
		'text-secondary'     => __( 'Secondary Brand Color', 'secretum' ),
		'text-light'         => __( 'Light Color Base', 'secretum' ),
		'text-dark'          => __( 'Dark Color Base', 'secretum' ),
		'text-black-50'      => __( '50% Opacity - Black', 'secretum' ),
		'text-white-50'      => __( '50% Opacity - White', 'secretum' ),
		'text-muted'         => __( 'Mute Text', 'secretum' ),
		'text-white'         => __( 'White', 'secretum' ),
		'text-whitish'       => __( 'Whitish', 'secretum' ),
		'text-black'         => __( 'Black', 'secretum' ),
		'text-blackish'      => __( 'Blackish', 'secretum' ),
		'text-gray'          => __( 'Gray', 'secretum' ),
		'text-gray-100'      => __( 'Gray 100', 'secretum' ),
		'text-gray-200'      => __( 'Gray 200', 'secretum' ),
		'text-gray-300'      => __( 'Gray 300', 'secretum' ),
		'text-gray-400'      => __( 'Gray 400', 'secretum' ),
		'text-gray-500'      => __( 'Gray 500', 'secretum' ),
		'text-gray-600'      => __( 'Gray 600', 'secretum' ),
		'text-gray-700'      => __( 'Gray 700', 'secretum' ),
		'text-gray-800'      => __( 'Gray 800', 'secretum' ),
		'text-gray-900'      => __( 'Gray 900', 'secretum' ),
		'text-blue'          => __( 'Blue', 'secretum' ),
		'text-cyan'          => __( 'Cyan', 'secretum' ),
		'text-green'         => __( 'Green', 'secretum' ),
		'text-indigo'        => __( 'Indigo', 'secretum' ),
		'text-orange'        => __( 'Orange', 'secretum' ),
		'text-purple'        => __( 'Purple', 'secretum' ),
		'text-pink'          => __( 'Pink', 'secretum' ),
		'text-red'           => __( 'Red', 'secretum' ),
		'text-teal'          => __( 'Teal', 'secretum' ),
		'text-yellow'        => __( 'Yellow', 'secretum' ),
	];

}//end secretum_customizer_text_colors()


/**
 * Link Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_link_colors() {
	return [
		''                   => __( 'Stylesheet Default', 'secretum' ),
		'none'               => __( 'Remove Default', 'secretum' ),
		'link'               => __( 'Theme Link Color', 'secretum' ),
		'link-alt'           => __( 'Theme Alt-Link Color', 'secretum' ),
		'link-primary'       => __( 'Primary Brand Color', 'secretum' ),
		'link-primary-dark'  => __( 'Primary Brand "Dark" Color', 'secretum' ),
		'link-primary-light' => __( 'Primary Brand "Light" Color', 'secretum' ),
		'link-secondary'     => __( 'Secondary Brand Color', 'secretum' ),
		'link-light'         => __( 'Light Color Base', 'secretum' ),
		'link-dark'          => __( 'Dark Color Base', 'secretum' ),
		'link-black-50'      => __( '50% Opacity - Black', 'secretum' ),
		'link-white-50'      => __( '50% Opacity - White', 'secretum' ),
		'link-white'         => __( 'White', 'secretum' ),
		'link-whitish'       => __( 'Whitish', 'secretum' ),
		'link-black'         => __( 'Black', 'secretum' ),
		'link-blackish'      => __( 'Blackish', 'secretum' ),
		'link-gray'          => __( 'Gray', 'secretum' ),
		'link-gray-100'      => __( 'Gray 100', 'secretum' ),
		'link-gray-200'      => __( 'Gray 200', 'secretum' ),
		'link-gray-300'      => __( 'Gray 300', 'secretum' ),
		'link-gray-400'      => __( 'Gray 400', 'secretum' ),
		'link-gray-500'      => __( 'Gray 500', 'secretum' ),
		'link-gray-600'      => __( 'Gray 600', 'secretum' ),
		'link-gray-700'      => __( 'Gray 700', 'secretum' ),
		'link-gray-800'      => __( 'Gray 800', 'secretum' ),
		'link-gray-900'      => __( 'Gray 900', 'secretum' ),
		'link-blue'          => __( 'Blue', 'secretum' ),
		'link-cyan'          => __( 'Cyan', 'secretum' ),
		'link-green'         => __( 'Green', 'secretum' ),
		'link-indigo'        => __( 'Indigo', 'secretum' ),
		'link-orange'        => __( 'Orange', 'secretum' ),
		'link-purple'        => __( 'Purple', 'secretum' ),
		'link-pink'          => __( 'Pink', 'secretum' ),
		'link-red'           => __( 'Red', 'secretum' ),
		'link-teal'          => __( 'Teal', 'secretum' ),
		'link-yellow'        => __( 'Yellow', 'secretum' ),
	];

}//end secretum_customizer_link_colors()


/**
 * Link Hover Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_link_hover_colors() {
	return [
		''                         => __( 'Stylesheet Default', 'secretum' ),
		'none'                     => __( 'Remove Default', 'secretum' ),
		'link-hover'               => __( 'Theme Hover Color', 'secretum' ),
		'link-alt-hover'           => __( 'Theme Alt-Hover Color', 'secretum' ),
		'link-primary-hover'       => __( 'Primary Brand Color', 'secretum' ),
		'link-primary-dark-hover'  => __( 'Primary Brand "Dark" Color', 'secretum' ),
		'link-primary-light-hover' => __( 'Primary Brand "Light" Color', 'secretum' ),
		'link-secondary-hover'     => __( 'Secondary Brand Color', 'secretum' ),
		'link-light-hover'         => __( 'Light Color Base', 'secretum' ),
		'link-dark-hover'          => __( 'Dark Color Base', 'secretum' ),
		'link-black-50-hover'      => __( '50% Opacity - Black', 'secretum' ),
		'link-white-50-hover'      => __( '50% Opacity - White', 'secretum' ),
		'link-white-hover'         => __( 'White', 'secretum' ),
		'link-whitish-hover'       => __( 'Whitish', 'secretum' ),
		'link-black-hover'         => __( 'Black', 'secretum' ),
		'link-blackish-hover'      => __( 'Blackish', 'secretum' ),
		'link-gray-hover'          => __( 'Gray', 'secretum' ),
		'link-gray-100-hover'      => __( 'Gray 100', 'secretum' ),
		'link-gray-200-hover'      => __( 'Gray 200', 'secretum' ),
		'link-gray-300-hover'      => __( 'Gray 300', 'secretum' ),
		'link-gray-400-hover'      => __( 'Gray 400', 'secretum' ),
		'link-gray-500-hover'      => __( 'Gray 500', 'secretum' ),
		'link-gray-600-hover'      => __( 'Gray 600', 'secretum' ),
		'link-gray-700-hover'      => __( 'Gray 700', 'secretum' ),
		'link-gray-800-hover'      => __( 'Gray 800', 'secretum' ),
		'link-gray-900-hover'      => __( 'Gray 900', 'secretum' ),
		'link-blue-hover'          => __( 'Blue', 'secretum' ),
		'link-cyan-hover'          => __( 'Cyan', 'secretum' ),
		'link-green-hover'         => __( 'Green', 'secretum' ),
		'link-indigo-hover'        => __( 'Indigo', 'secretum' ),
		'link-orange-hover'        => __( 'Orange', 'secretum' ),
		'link-purple-hover'        => __( 'Purple', 'secretum' ),
		'link-pink-hover'          => __( 'Pink', 'secretum' ),
		'link-red-hover'           => __( 'Red', 'secretum' ),
		'link-teal-hover'          => __( 'Teal', 'secretum' ),
		'link-yellow-hover'        => __( 'Yellow', 'secretum' ),
	];

}//end secretum_customizer_link_hover_colors()


/**
 * Background Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_background_colors() {
	return [
		''                 => __( 'Stylesheet Default', 'secretum' ),
		'none'             => __( 'Remove Default', 'secretum' ),
		'bg-transparent'   => __( 'Transparent Background', 'secretum' ),
		'body-bg'          => __( 'Body Background Color', 'secretum' ),
		'content-bg'       => __( 'Content Background Color', 'secretum' ),
		'bg-primary'       => __( 'Primary Brand Color', 'secretum' ),
		'bg-primary-dark'  => __( 'Primary Brand "Dark" Color', 'secretum' ),
		'bg-primary-light' => __( 'Primary Brand "Light" Color', 'secretum' ),
		'bg-secondary'     => __( 'Secondary Brand Color', 'secretum' ),
		'bg-black-50'      => __( '50% Opacity - Black', 'secretum' ),
		'bg-white-50'      => __( '50% Opacity - White', 'secretum' ),
		'bg-white'         => __( 'White', 'secretum' ),
		'bg-whitish'       => __( 'Whitish', 'secretum' ),
		'bg-black'         => __( 'Black', 'secretum' ),
		'bg-blackish'      => __( 'Blackish', 'secretum' ),
		'bg-gray'          => __( 'Gray', 'secretum' ),
		'bg-gray-100'      => __( 'Gray 100', 'secretum' ),
		'bg-gray-200'      => __( 'Gray 200', 'secretum' ),
		'bg-gray-300'      => __( 'Gray 300', 'secretum' ),
		'bg-gray-400'      => __( 'Gray 400', 'secretum' ),
		'bg-gray-500'      => __( 'Gray 500', 'secretum' ),
		'bg-gray-600'      => __( 'Gray 600', 'secretum' ),
		'bg-gray-700'      => __( 'Gray 700', 'secretum' ),
		'bg-gray-800'      => __( 'Gray 800', 'secretum' ),
		'bg-gray-900'      => __( 'Gray 900', 'secretum' ),
		'bg-blue'          => __( 'Blue', 'secretum' ),
		'bg-cyan'          => __( 'Cyan', 'secretum' ),
		'bg-green'         => __( 'Green', 'secretum' ),
		'bg-indigo'        => __( 'Indigo', 'secretum' ),
		'bg-orange'        => __( 'Orange', 'secretum' ),
		'bg-purple'        => __( 'Purple', 'secretum' ),
		'bg-pink'          => __( 'Pink', 'secretum' ),
		'bg-red'           => __( 'Red', 'secretum' ),
		'bg-teal'          => __( 'Teal', 'secretum' ),
		'bg-yellow'        => __( 'Yellow', 'secretum' ),
	];

}//end secretum_customizer_background_colors()


/**
 * Background Hover Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_background_hover_colors() {
	return [
		''                       => __( 'Stylesheet Default', 'secretum' ),
		'none'                   => __( 'Remove Default', 'secretum' ),
		'bg-transparent-hover'   => __( 'Transparent Background', 'secretum' ),
		'body-bg-hover'          => __( 'Body Background Color', 'secretum' ),
		'content-bg-hover'       => __( 'Content Background Color', 'secretum' ),
		'bg-primary-hover'       => __( 'Primary Brand Color', 'secretum' ),
		'bg-primary-dark-hover'  => __( 'Primary Brand "Dark" Color', 'secretum' ),
		'bg-primary-light-hover' => __( 'Primary Brand "Light" Color', 'secretum' ),
		'bg-secondary-hover'     => __( 'Secondary Brand Color', 'secretum' ),
		'bg-black-50-hover'      => __( '50% Opacity - Black', 'secretum' ),
		'bg-white-50-hover'      => __( '50% Opacity - White', 'secretum' ),
		'bg-white-hover'         => __( 'White', 'secretum' ),
		'bg-whitish-hover'       => __( 'Whitish', 'secretum' ),
		'bg-black-hover'         => __( 'Black', 'secretum' ),
		'bg-blackish-hover'      => __( 'Blackish', 'secretum' ),
		'bg-gray-hover'          => __( 'Gray', 'secretum' ),
		'bg-gray-100-hover'      => __( 'Gray 100', 'secretum' ),
		'bg-gray-200-hover'      => __( 'Gray 200', 'secretum' ),
		'bg-gray-300-hover'      => __( 'Gray 300', 'secretum' ),
		'bg-gray-400-hover'      => __( 'Gray 400', 'secretum' ),
		'bg-gray-500-hover'      => __( 'Gray 500', 'secretum' ),
		'bg-gray-600-hover'      => __( 'Gray 600', 'secretum' ),
		'bg-gray-700-hover'      => __( 'Gray 700', 'secretum' ),
		'bg-gray-800-hover'      => __( 'Gray 800', 'secretum' ),
		'bg-gray-900-hover'      => __( 'Gray 900', 'secretum' ),
		'bg-blue-hover'          => __( 'Blue', 'secretum' ),
		'bg-cyan-hover'          => __( 'Cyan', 'secretum' ),
		'bg-green-hover'         => __( 'Green', 'secretum' ),
		'bg-indigo-hover'        => __( 'Indigo', 'secretum' ),
		'bg-orange-hover'        => __( 'Orange', 'secretum' ),
		'bg-purple-hover'        => __( 'Purple', 'secretum' ),
		'bg-pink-hover'          => __( 'Pink', 'secretum' ),
		'bg-red-hover'           => __( 'Red', 'secretum' ),
		'bg-teal-hover'          => __( 'Teal', 'secretum' ),
		'bg-yellow-hover'        => __( 'Yellow', 'secretum' ),
	];

}//end secretum_customizer_background_hover_colors()


/**
 * Button Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_button_colors() {
	return [
		''                  => __( 'Default Theme Color', 'secretum' ),
		'none'              => __( 'Remove Default', 'secretum' ),
		'btn-transparent'   => __( 'Transparent Background', 'secretum' ),
		'btn-primary'       => __( 'Primary Button Color', 'secretum' ),
		'btn-primary-dark'  => __( 'Primary "Button Dark" Color', 'secretum' ),
		'btn-primary-light' => __( 'Primary Button "Light" Color', 'secretum' ),
		'btn-secondary'     => __( 'Secondary Button Color', 'secretum' ),
		'btn-white'         => __( 'White', 'secretum' ),
		'btn-whitish'       => __( 'Whitish', 'secretum' ),
		'btn-black'         => __( 'Black', 'secretum' ),
		'btn-blackish'      => __( 'Blackish', 'secretum' ),
		'btn-gray'          => __( 'Gray', 'secretum' ),
		'btn-gray-100'      => __( 'Gray 100', 'secretum' ),
		'btn-gray-200'      => __( 'Gray 200', 'secretum' ),
		'btn-gray-300'      => __( 'Gray 300', 'secretum' ),
		'btn-gray-400'      => __( 'Gray 400', 'secretum' ),
		'btn-gray-500'      => __( 'Gray 500', 'secretum' ),
		'btn-gray-600'      => __( 'Gray 600', 'secretum' ),
		'btn-gray-700'      => __( 'Gray 700', 'secretum' ),
		'btn-gray-800'      => __( 'Gray 800', 'secretum' ),
		'btn-gray-900'      => __( 'Gray 900', 'secretum' ),
		'btn-blue'          => __( 'Blue', 'secretum' ),
		'btn-cyan'          => __( 'Cyan', 'secretum' ),
		'btn-green'         => __( 'Green', 'secretum' ),
		'btn-indigo'        => __( 'Indigo', 'secretum' ),
		'btn-orange'        => __( 'Orange', 'secretum' ),
		'btn-purple'        => __( 'Purple', 'secretum' ),
		'btn-pink'          => __( 'Pink', 'secretum' ),
		'btn-red'           => __( 'Red', 'secretum' ),
		'btn-teal'          => __( 'Teal', 'secretum' ),
		'btn-yellow'        => __( 'Yellow', 'secretum' ),
		'btn-danger'        => __( 'Danger', 'secretum' ),
		'btn-info'          => __( 'Info', 'secretum' ),
		'btn-success'       => __( 'Success', 'secretum' ),
		'btn-warning'       => __( 'Warning', 'secretum' ),
	];

}//end secretum_customizer_button_colors()
