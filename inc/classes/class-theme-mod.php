<?php
/**
 * Feature Class
 *
 * @package   Secretum
 * @author    SecretumTheme <author@secretumtheme.com>
 * @copyright 2018-2019 Secretum
 * @license   https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link      https://github.com/SecretumTheme/secretum/blob/master/inc/classes/theme-mod.php
 * @since     1.5.0
 */

namespace Secretum;

/**
 * Get Theme Mods & Merge With Default Settings
 *
 * @since 1.5.0
 */
class Theme_Mod {
	/**
	 * Default Settings
	 *
	 * @since 1.5.0
	 * @var array
	 */
	private $theme_defaults = [];

	/**
	 * Theme Mod
	 *
	 * @since 1.5.0
	 * @var array
	 */
	private $theme_mod = [];


	/**
	 * Set Filter & Theme Mod Var
	 *
	 * @since 1.5.0
	 */
	final public function __construct() {
		$this->theme_defaults = \Secretum\secretum_load_default_settings( [] );
		$this->theme_mod      = get_theme_mod( 'secretum', [] );

	}//end __construct()


	/**
	 * Return Merged Theme Settings
	 *
	 * @since 1.5.0
	 *
	 * @return array
	 */
	final public function settings() {
		return array_filter(
			array_merge(
				$this->theme_defaults,
				$this->theme_mod
			),
			'strlen'
		);

	}//end settings()

}//end class
