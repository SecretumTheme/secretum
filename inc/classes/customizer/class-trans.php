<?php
/**
 * Display Text Translation Strings
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Trans
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-trans.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Public Text Translation String Display
 *
 * @since 1.0.0
 *
 * @see  TransTrait
 * @link https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-transtrait.php
 */
class Trans {

	// Default Text Strings.
	use TransTrait;

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
	 * @var array $_option
	 */
	private $_option;


	/**
	 * Customizer Default Settings
	 *
	 * @since 1.0.0
	 * @var array $_default
	 */
	private $_default;


	/**
	 * Set Class Vars
	 *
	 * @since 1.0.0
	 */
	final public function init() {
		// Get Secretum Option.
		$this->_option = get_option( 'secretum', array() );

		// Get Secretum Option.
		$this->_default = $this->defaults();

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
		if ( true === isset( $this->_option[ $key ] ) ) {
			// Get String From DB.
			$string = filter_var( html_entity_decode( $this->_option[ $key ] ), FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH );
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
		if ( false === self::$instance ) {
			self::$instance = new self();
			self::$instance->init();
		}

		return self::$instance;

	}//end instance()


}//end class
