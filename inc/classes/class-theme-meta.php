<?php
/**
 * Feature Class
 *
 * @package   Secretum
 * @author    SecretumTheme <author@secretumtheme.com>
 * @copyright 2018-2019 Secretum
 * @license   https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link      https://github.com/SecretumTheme/secretum/blob/master/inc/classes/theme-meta.php
 * @since     1.7.0
 */

namespace Secretum;

/**
 * Get Theme Meta Data
 *
 * @since 1.7.0
 */
class Theme_Meta {
	/**
	 * Post Meta Array
	 *
	 * @since 1.7.0
	 * @var array
	 */
	private $post_meta = [];


	/**
	 * Set Post Meta
	 *
	 * @since 1.7.0
	 */
	final public function __construct() {
		$this->post_meta = '';
		$get_post_meta   = get_post_meta( get_the_ID(), 'secretum' );

		if ( true !== empty( $get_post_meta[0] ) ) {
			$this->post_meta = $get_post_meta[0];
		}

	}//end __construct()


	/**
	 * Return Merged Theme Settings
	 *
	 * @param string $setting_name Post Meta Setting Name Within Array.
	 * @param string $section_name Customizer Section Key From Meta Array.
	 *
	 * @return empty|string
	 *
	 * @since 1.7.0
	 */
	final public function settings( $setting_name = '', $section_name = '' ) {
		if ( true === empty( $setting_name ) ) {
			return '';
		}

		if ( true !== empty( $section_name ) && true !== empty( $this->post_meta[ $section_name ][ $setting_name ] ) ) {
			return $this->post_meta[ $section_name ][ $setting_name ];
		}

		if ( true !== empty( $this->post_meta[ $setting_name ] ) ) {
			return $this->post_meta[ $setting_name ];
		}

		return '';
	}//end settings()

}//end class
