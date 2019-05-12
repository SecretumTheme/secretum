<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customize_Translations
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-customize-translations.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Text Translations
 *
 * @param object $customizer Secretum Customizer Object.
 *
 * @see     functions.php
 * @example $translate = new \Secretum\Customize_Translations( $wp_customize );
 * @example $translate->settings();
 *
 * @see  Trait_Translations
 * @link https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-trait-translations.php
 *
 * @since 1.0.0
 */
class Customize_Translations {
	/**
	 * Default Text Translation Strings.
	 *
	 * @since 1.0.0
	 */
	use Trait_Translations;

	/**
	 * Secretum Customizer Object
	 *
	 * @since 1.0.0
	 * @var object $wp_customize
	 */
	protected $wp_customize;


	/**
	 * Start Class
	 *
	 * @since 1.0.0
	 *
	 * @param object $wp_customize Secretum Customizer Object.
	 */
	public function __construct( $wp_customize ) {
		if ( true === isset( $wp_customize ) && true === is_object( $wp_customize ) ) {
			$this->wp_customize = $wp_customize;
		}

	}//end __construct()


	/**
	 * Display Secretum Cusomizer Section & Settings
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	final public function settings() {
		if ( true === empty( $this->wp_customize ) ) {
			return;
		}

		// Panel.
		$this->wp_customize->add_panel(
			'secretum_wordpress_text_panel',
			[
				'title'    => ':: ' . esc_html__( 'Translations', 'secretum' ),
				'priority' => 8,
			]
		);

		// Section.
		$this->wp_customize->add_section(
			'secretum_wordpress_text_section',
			[
				'panel'       => 'secretum_wordpress_text_panel',
				'title'       => esc_html__( 'WordPress Text', 'secretum' ),
				'description' => esc_html__( 'HTML Allowed! To reset: delete the text from the input, then publish. To remove from display: delete the text and add a single empty space, then publish.', 'secretum' ),
				'priority'    => 10,
			]
		);

		foreach ( (array) $this->defaults() as $key => $items ) {
			// Add Setting.
			$this->wp_customize->add_setting(
				'secretum[' . sanitize_key( $key ) . ']',
				[
					'default'           => esc_html( $items['default'] ),
					'sanitize_callback' => [ $this, 'sanitize' ],
				]
			);

			// Add Control.
			$this->wp_customize->add_control(
				'secretum[' . sanitize_key( $key ) . ']',
				[
					'section' => 'secretum_wordpress_text_section',
					'label'   => esc_html( $items['label'] ),
					'type'    => 'text',
				]
			);

			// Build Render Callback.
			if ( true === isset( $this->_option[ $key ] ) ) {
				$render_callback = wp_kses_post( $this->_option[ $key ] );
			} else {
				$render_callback = false;
			}

			// Add Partial Refresh.
			$this->wp_customize->selective_refresh->add_partial(
				'secretum[' . sanitize_key( $key ) . ']',
				[
					'render_callback'     => $render_callback,
					'container_inclusive' => true,
					'fallback_refresh'    => true,
				]
			);
		}

	}//end settings()


	/**
	 * Sanitize Text Translation String
	 * Return a blank space if a space was provided
	 * Strip all HTML tags including script and style
	 * Convert all applicable characters to HTML entities
	 *
	 * @since 1.0.0
	 *
	 * @param string $string HTML String.
	 *
	 * @return string Cleaned HTML
	 */
	final public function sanitize( $string ) {
		if ( ctype_space( $string ) === true ) {
			return ' ';
		} else {
			return htmlentities( wp_strip_all_tags( $string, true ) );
		}

	}//end sanitize()


}//end class
