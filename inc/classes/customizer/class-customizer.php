<?php
/**
 * Wordpress Customizer Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-customizer.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Initilize Customizer Features
 */
class Customizer {

	/**
	 * Customizer Default Settings
	 *
	 * @var array
	public $defaults;
	 */

	/**
	 * WP_Customize_Manager Instance
	 *
	 * @var array
	 */
	public $wp_customize;


	/**
	 * Start Class
	 *
	 * @param object $wp_customize WP_Customize_Manager Instance.
	 */
	public function __construct( $wp_customize ) {
		if ( true === isset( $wp_customize ) && true === is_object( $wp_customize ) ) {
			$this->wp_customize = $wp_customize;
		}

	}//end __construct()


	/**
	 * Create Panel
	 *
	 * @param string $section_name Shortname for setting name/section name.
	 * @param string $title Title of section.
	 */
	final public function panel( $section_name, $title ) {
		$this->wp_customize->add_panel( 'secretum_' . sanitize_key( $section_name ) . '_panel', [
			'title' 	=> ':: ' . esc_html( $title ),
			'priority'  => 8,
		] );

	}//end panel()


	/**
	 * Create Section
	 *
	 * @param string $section_name Short section name.
	 * @param string $panel_name Short panel name.
	 * @param string $title Title of Section.
	 * @param string $description Description for Section.
	 */
	final public function section( $section_name, $panel_name, $title, $description ) {
		$this->wp_customize->add_section( 'secretum_' . sanitize_key( $section_name ) . '_section', [
			'panel' 		=> 'secretum_' . sanitize_key( $panel_name ) . '_panel',
			'title' 		=> esc_html( $title ),
			'description' 	=> esc_html( $description ),
			'priority' 		=> 10,
		] );

	}//end section()


	/**
	 * Add Partial
	 *
	 * @param string $setting_name Name of he setting to save.
	 * @param string $selector Class/Selector Name.
	 */
	final public function partial( $setting_name, $selector ) {
		$this->wp_customize->selective_refresh->add_partial( 'secretum_' . sanitize_key( $setting_name ) . '_partial', [
			'settings'				=> [ 'secretum[' . sanitize_key( $setting_name ) . ']' ],
			'selector'				=> esc_html( $selector ),
			'render_callback'	 	=> false,
			'container_inclusive' 	=> false,
		] );

	}//end partial()


	/**
	 * Checkbox
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 * @param string $default Default Display Value.
	 */
	final public function checkbox( $section_name, $setting_name, $label, $description, $default ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'Secretum\secretum_customizer_sanitize_checkbox',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key( $default ),
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 			=> esc_html( $label ),
			'description' 		=> esc_html( $description ),
			'section' 			=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 				=> 'checkbox',
		] );

	}//end checkbox()


	/**
	 * Background Image Control
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param int    $width Default width.
	 * @param int    $height Default height.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 */
	final public function background_image( $section_name, $setting_name, $width, $height, $label, $description ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'absint',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> false,
		] );

		$this->wp_customize->add_control( new \WP_Customize_Media_Control( $this->wp_customize, 'image_control', [
			'label' 		=> esc_html( $label ),
			'description' 	=> esc_html( $description ),
			'settings' 		=> 'secretum[' . sanitize_key( $setting_name ) . ']',
			'section' 		=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'mime_type' 	=> 'image',
			'flex_width' 	=> true,
			'flex_height' 	=> true,
			'width' 		=> absint( $width ),
			'height' 		=> absint( $height ),
		] ) );

	}//end background_image()


	/**
	 * Number Input
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 * @param array  $input_attrs Min/Max attributes.
	 * @param string $default Default Display Value.
	 */
	final public function number( $section_name, $setting_name, $label, $description, $input_attrs = [], $default ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'Secretum\secretum_customizer_sanitize_int',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> (int) $default,
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 			=> esc_html( $label ),
			'description' 		=> esc_html( $description ),
			'section' 			=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 				=> 'number',
			'input_attrs' 		=> $input_attrs,
		] );

	}//end number()


	/**
	 * Radio Select
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 * @param string $default Default Display Value.
	 * @param array  $choices Selection Values.
	 */
	final public function radio( $section_name, $setting_name, $label, $description, $default, $choices = [] ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key( $default ),
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 			=> esc_html( $label ),
			'description' 		=> esc_html( $description ),
			'section' 			=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 				=> 'radio',
			'choices'			=> $choices,
		] );

	}//end radio()


	/**
	 * Dropdown Select
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 * @param string $default Default Display Value.
	 * @param array  $select Selection Options.
	 */
	final public function select( $section_name, $setting_name, $label, $description, $default, $select = [] ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key( $default ),
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 			=> esc_html( $label ),
			'description' 		=> esc_html( $description ),
			'section' 			=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 				=> 'select',
			'choices' 			=> $select,
		] );

	}//end select()


	/**
	 * Text Input Field
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 * @param string $default Default Display Value.
	 */
	final public function input_text( $section_name, $setting_name, $label, $description, $default ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'sanitize_text_field',
			'type' 				=> 'option',
			'transport' 		=> 'refresh',
			'default' 			=> wp_kses_post( $default ),
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 		=> esc_html( $label ),
			'description' 	=> esc_html( $description ),
			'section' 		=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 			=> 'text',
		] );

	}//end input_text()


	/**
	 * Textarea
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 * @param string $default Default Display Value.
	 */
	final public function textarea( $section_name, $setting_name, $label, $description, $default ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_callback' => 'Secretum\secretum_customizer_sanitize_html',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> wp_kses_post( $default ),
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 			=> esc_html( $label ),
			'description' 		=> esc_html( $description ),
			'section' 			=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 				=> 'textarea',
		] );

	}//end textarea()


	/**
	 * Textarea For Scripts
	 *
	 * @param string $section_name Short section name.
	 * @param string $setting_name Name of he setting to save.
	 * @param string $label Label for Control.
	 * @param string $description Description for Control.
	 */
	final public function textarea_script( $section_name, $setting_name, $label, $description ) {
		$this->wp_customize->add_setting( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'sanitize_js_callback' 	=> 'Secretum\secretum_customizer_decode_script',
			'sanitize_callback' 	=> 'Secretum\secretum_customizer_sanitize_script',
			'transport' 			=> 'refresh',
			'type' 					=> 'option',
			'default' 				=> '',
		] );

		$this->wp_customize->add_control( 'secretum[' . sanitize_key( $setting_name ) . ']', [
			'label' 				=> esc_html( $label ),
			'description' 			=> esc_html( $description ),
			'section' 				=> 'secretum_' . sanitize_key( $section_name ) . '_section',
			'type' 					=> 'textarea',
		] );

	}//end textarea_script()


	/**
	 * Reset Field
	 *
	 * @return void
	 */
	final public function reset() {
		$this->wp_customize->add_setting( 'secretum[reset]', [
			'sanitize_callback' => 'Secretum\secretum_customizer_reset',
			'type' 				=> 'option',
			'transport' 		=> 'refresh',
		] );

		$this->wp_customize->add_control( 'secretum[reset]', [
			'label' 		=> __( 'Type the uppercase word: RESET', 'secretum' ),
			'description' 	=> __( '** Warning This Can Not Be Undone! **', 'secretum' ),
			'section' 		=> 'secretum_reset_section',
			'type' 			=> 'text',
		] );

	}//end reset()


}//end class
