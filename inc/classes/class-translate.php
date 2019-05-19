<?php
/**
 * Display Text Translation Strings
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Translate
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-translate.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Public Text Translation String Display
 *
 * @see  secretum_text()
 * @link https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions.php
 *
 * @see  Trait_Translations
 * @link https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-trait-translations.php
 * @link https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-translations.php
 *
 * @since 1.0.0
 */
class Translate {
	/**
	 * Default Text Translation Strings.
	 *
	 * @since 1.0.0
	 */
	use Trait_Translations;

	/**
	 * Instance Object
	 *
	 * @since 1.0.0
	 * @var object $instanc
	 */
	protected static $instance = null;

	/**
	 * Secretum Settings Option
	 *
	 * @since 1.0.0
	 * @var array $option
	 */
	private $option;


	/**
	 * Customizer Default Settings
	 *
	 * @since 1.0.0
	 * @var array $default
	 */
	private $default;


	/**
	 * Set Class Vars
	 *
	 * @since 1.0.0
	 */
	final public function init() {
		$theme_mod       = new \Secretum\Theme_Mod();
		$this->theme_mod = $theme_mod->settings();

		// Get Secretum Option.
		$this->default = $this->defaults();

	}//end init()


	/**
	 * Return Text Translation String
	 *
	 * @since 1.0.0
	 *
	 * @param string $key  Array Key To Get Value Of.
	 * @param bool   $echo True to echo results.
	 *
	 * @return string Sanitized Text String
	 */
	final public function get( $key, $echo = false ) {
		// Option Set.
		if ( true === isset( $this->theme_mod[ $key ] ) ) {
			// Get String From DB.
			$string = filter_var( html_entity_decode( $this->theme_mod[ $key ] ), FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH );
		} else {
			// Default To Defaults.
			$defaults = $this->defaults();

			$string = $defaults[ $key ]['default'];
		}

		// Return or Echo Results.
		if ( false === $echo ) {
			return wp_kses_post( $string );
		} else {
			echo wp_kses_post( $string );
		}

	}//end get()


	/**
	 * Create Instance
	 *
	 * @since 1.0.0
	 *
	 * @return object $instance Instance Object.
	 */
	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
			self::$instance->init();
		}

		return self::$instance;

	}//end instance()


}//end class
