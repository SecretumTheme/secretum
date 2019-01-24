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
 */

namespace Secretum;

/**
 * Public Text Translation String Display
 */
class Trans {

	// Default Text Strings.
	use TransTrait;

	/**
	 * Instance Object
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Secretum Settings Option
	 *
	 * @var array
	 */
	private $_option;


	/**
	 * Customizer Default Settings
	 *
	 * @var array
	 */
	private $_default;


	/**
	 * Set Class Vars
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
	 * @return object $instance Instance Object.
	 */
	public static function instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
			self::$instance->init();
		}

		return self::$instance;

	}//end instance()


}//end class
