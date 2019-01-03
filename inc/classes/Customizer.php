<?php
namespace Secretum;

/**
 * 
 *
 * @package WordPress
 * @subpackage Secretum
 */
class Customizer
{
    // Holds Instance Object
    protected static $instance = NULL;

    // Object WP_Customize_Manager Instance
    public $wp_customize;


    /**
     * Set Var
     */
    final public function init($wp_customize)
    {
        $this->wp_customize = $wp_customize;
    }


	/**
	 * Create Panel
	 *
	 * @param string $section Shortname for setting name/section name
	 * @param string $title Title of section
	 * @return void
	 */
	final public function panel($section_name, $title)
	{
		$this->wp_customize->add_panel('secretum_' . sanitize_key($section_name) . '_panel', array(
	        'title'     => ':: ' .  esc_html($title),
	        'priority'  => 8,
	    ));
	}


	/**
	 * Create Section
	 *
	 * @param string $section_name Short section name
	 * @param string $panel_name Short panel name
	 * @param string $title Title of Section
	 * @param string $description Description for Section
	 */
	final public function section($section_name, $panel_name, $title, $description)
	{
		$this->wp_customize->add_section('secretum_' . sanitize_key($section_name) . '_section', array(
	        'panel'             => 'secretum_' . sanitize_key($panel_name) . '_panel',
	        'title'             => esc_html($title),
	        'description'       => esc_html($description),
	        'priority'          => 10,
	    ));
	}


	/**
	 * Create Pro Section
	 *
	 * @param string $section_name Short section name
	 * @param string $panel_name Short panel name
	 * @param string $title Title of Section
	 * @param string $description Description for Section
	 */
	final public function sectionPro()
	{
		$this->wp_customize->add_section(
			new CustomizerProSection(
				$this->wp_customize,
				'secretum_pro_panel',
				array(
					'title'    => esc_html__( 'Secretum Pro', 'secretum' ),
					'pro_text' => esc_html__( 'Instant Upgrade!',         'secretum' ),
					'pro_url'  => 'https://secretumtheme.com/secretum/',
					'priority' => 0
				)
			)
		);
	}


	/**
	 * Add Partial
	 *
	 * @param string $setting_name Name of he setting to save
	 * @param string $selector Class/Selector Name
	 * @return void
	 */
	final public function partial($setting_name, $selector)
	{
		$this->wp_customize->selective_refresh->add_partial('secretum_' . sanitize_key($setting_name) . '_partial', array(
			'settings'            => array('secretum[' . sanitize_key($setting_name) . ']'),
			'selector'            => esc_html($selector),
			'render_callback'     => false,
			'container_inclusive' => false
		));
	}


	/**
	 * Checkbox
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @param string $default Default Display Value
	 * @return void
	 */
	final public function checkbox($section_name, $setting_name, $label, $description, $default)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name). ']', array(
			'sanitize_callback' => 'Secretum\Customizer\sanitizeCheckbox',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key($default)
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name). ']', array(
			'label' 			=> esc_html($label),
   			'description' 		=> esc_html($description),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'checkbox'
		));
	}


	/**
	 * Background Image Control
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param int $width Default width
	 * @param int $height Default height
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @return void
	 */
	final public function backgroundImage($section_name, $setting_name, $width, $height, $label, $description)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'absint',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> false
		));

		$this->wp_customize->add_control(new \WP_Customize_Media_Control( 
			$this->wp_customize, 'image_control', array( 
				'label' 		=> esc_html($label),
				'description' 	=> esc_html($description),
				'settings' 		=> 'secretum[' . sanitize_key($setting_name) . ']',
				'section' 		=> 'secretum_' . sanitize_key($section_name) . '_section',
				'mime_type' 	=> 'image',
			    'flex_width' 	=> true,
			    'flex_height' 	=> true,
			    'width' 		=> absint($width),
			    'height' 		=> absint($height)
			)
		));
	}


	/**
	 * Radio Select
	 *
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @param string $default Default Display Value
	 * @param array $choices Selection Values
	 * @return void
	 */
	final public function radio($section_name, $setting_name, $label, $description, $default, $choices = array())
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key($default)
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 			=> esc_html($label),
   			'description' 		=> esc_html($description),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'radio',
			'choices'			=> $choices
		));
	}


	/**
	 * Dropdown Select
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @param string $default Default Display Value
	 * @param array $select Selection Options
	 * @return void
	 */
	final public function select($section_name, $setting_name, $label, $description, $default, $select = array())
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key($default)
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 			=> esc_html($label),
			'description' 		=> esc_html($description),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> $select
		));
	}


	/**
	 * Number Input
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @param array $input_attrs Min/Max attributes
	 * @param string $default Default Display Value
	 * @return void
	 */
	final public function number($section_name, $setting_name, $label, $description, $input_attrs = array(), $default)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'Secretum\Customizer\sanitizeInt',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> (int) $default
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 			=> esc_html($label),
			'description' 		=> esc_html($description),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'number',
			'input_attrs' 		=> $input_attrs
		));
	}


	/**
	 * Text Input Field
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @param string $default Default Display Value
	 * @return void
	 */
	final public function inputText($section_name, $setting_name, $label, $description, $default)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'sanitize_text_field',
			'type' 				=> 'option',
			'transport' 		=> 'refresh',
			'default' 			=> wp_kses_post($default),
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 		=> esc_html($label),
			'description' 	=> esc_html($description),
			'section' 		=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 			=> 'text'
		));
	}


	/**
	 * Text Translation Field
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @return void
	 */
	final public function textTranslate($section_name, $setting_name, $label, $description)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'Secretum\Customizer\sanitizeTranslate',
			'type' 				=> 'option',
			'transport' 		=> 'refresh',
			'default' 			=> htmlentities(secretum_text($setting_name)),
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 		=> esc_html($label),
			'description' 	=> esc_html($description),
			'section' 		=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 			=> 'text'
		));
	}


	/**
	 * Textarea
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @param string $default Default Display Value
	 * @return void
	 */
	final public function textarea($section_name, $setting_name, $label, $description, $default)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'Secretum\Customizer\sanitizeHtml',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> wp_kses_post($default),
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 			=> esc_html($label),
			'description' 		=> esc_html($description),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'textarea'
		));
	}


	/**
	 * Textarea For Scripts
	 *
	 * @param string $section_name Short section name
	 * @param string $setting_name Name of he setting to save
	 * @param string $title Label for Control
	 * @param string $description Description for Control
	 * @return void
	 */
	final public function textareaScript($section_name, $setting_name, $label, $description)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_js_callback' 	=> 'Secretum\Customizer\escapeScript',
			'sanitize_callback' 	=> 'Secretum\Customizer\sanitizeScript',
			'transport' 			=> 'refresh',
			'type' 					=> 'option',
			'default' 				=> '',
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($setting_name) . ']', array(
			'label' 				=> esc_html($label),
			'description' 			=> esc_html($description),
			'section' 				=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 					=> 'textarea'
		));
	}


	/**
	 * Reset Field
	 *
	 * @return void
	 */
	final public function reset()
	{
		$this->wp_customize->add_setting('secretum[reset]' , array(
			'sanitize_callback' => 'Secretum\Customizer\reset',
			'type' 				=> 'option',
			'transport' 		=> 'refresh'
		));

		$this->wp_customize->add_control('secretum[reset]', array(
			'label' 		=> __('Type the uppercase word: RESET', 'secretum'),
			'description' 	=> __('** Warning This Can Not Be Undone! **', 'secretum'),
			'section' 		=> 'secretum_reset_section',
			'type' 			=> 'text'
		));
	}


    /**
     * Create Instance
     */
    public static function instance($wp_customize)
    {
        if (! self::$instance) {
            self::$instance = new self();
            self::$instance->init($wp_customize);
        }

        return self::$instance;
    }
}
