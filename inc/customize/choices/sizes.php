<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/sizes.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Textual Sizing
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_font_sizes() {
	return [
		''         => __( 'Stylesheet Default', 'secretum' ),
		'text-1'   => __( '1px / 0.0625rem', 'secretum' ),
		'text-2'   => __( '2px / 0.125rem', 'secretum' ),
		'text-3'   => __( '3px / 0.1875rem', 'secretum' ),
		'text-4'   => __( '4px / 0.25rem', 'secretum' ),
		'text-5'   => __( '5px / 0.3125rem', 'secretum' ),
		'text-6'   => __( '6px / 0.375rem', 'secretum' ),
		'text-7'   => __( '7px / 0.4375rem', 'secretum' ),
		'text-8'   => __( '8px / 0.5rem', 'secretum' ),
		'text-9'   => __( '9px / 0.5625rem', 'secretum' ),
		'text-10'  => __( '10px / 0.625rem', 'secretum' ),
		'text-11'  => __( '11px / 0.6875rem', 'secretum' ),
		'text-12'  => __( '12px / 0.75rem', 'secretum' ),
		'text-13'  => __( '13px / 0.8125rem', 'secretum' ),
		'text-14'  => __( '14px / 0.875rem', 'secretum' ),
		'text-15'  => __( '15px / 0.9375rem', 'secretum' ),
		'text-16'  => __( '16px / 1rem (base size)', 'secretum' ),
		'text-18'  => __( '18px / 1.125rem', 'secretum' ),
		'text-20'  => __( '20px / 1.25rem', 'secretum' ),
		'text-22'  => __( '22px / 1.375rem', 'secretum' ),
		'text-24'  => __( '24px / 1.5rem', 'secretum' ),
		'text-26'  => __( '26px / 1.625rem', 'secretum' ),
		'text-28'  => __( '28px / 1.75rem', 'secretum' ),
		'text-30'  => __( '30px / 1.875rem', 'secretum' ),
		'text-32'  => __( '32px / 2rem', 'secretum' ),
		'text-34'  => __( '34px / 2.125rem', 'secretum' ),
		'text-36'  => __( '36px / 2.25rem', 'secretum' ),
		'text-38'  => __( '38px / 2.375rem', 'secretum' ),
		'text-40'  => __( '40px / 2.5rem', 'secretum' ),
		'text-48'  => __( '48px / 3rem', 'secretum' ),
		'text-50'  => __( '50px / 3.125rem', 'secretum' ),
		'text-60'  => __( '60px / 3.75rem', 'secretum' ),
		'text-64'  => __( '64px / 4rem', 'secretum' ),
		'text-70'  => __( '70px / 4.375rem', 'secretum' ),
		'text-80'  => __( '80px / 5rem', 'secretum' ),
		'text-90'  => __( '90px / 5.625rem', 'secretum' ),
		'text-100' => __( '100px / 6.25rem', 'secretum' ),
	];

}//end secretum_customizer_font_sizes()


/**
 * Display Sizing
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_display_sizes() {
	return [
		''          => __( 'Stylesheet Default', 'secretum' ),
		'display-1' => __( 'Display Size 1 (largest)', 'secretum' ),
		'display-2' => __( 'Display Size 2', 'secretum' ),
		'display-3' => __( 'Display Size 3', 'secretum' ),
		'display-4' => __( 'Display Size 4 (large)', 'secretum' ),
	];

}//end secretum_customizer_display_sizes()


/**
 * Heading Sizing
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_heading_sizes() {
	return [
		''   => __( 'Stylesheet Default', 'secretum' ),
		'h1' => __( 'Heading Size 1 (largest)', 'secretum' ),
		'h2' => __( 'Heading Size 2', 'secretum' ),
		'h3' => __( 'Heading Size 3', 'secretum' ),
		'h4' => __( 'Heading Size 4', 'secretum' ),
		'h5' => __( 'Heading Size 5', 'secretum' ),
		'h6' => __( 'Heading Size 6 (smallest)', 'secretum' ),
	];

}//end secretum_customizer_heading_sizes()
