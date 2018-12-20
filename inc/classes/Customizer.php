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
     * Init Admin Menus
     */
    final public function init($wp_customize)
    {
        $this->wp_customize = $wp_customize;
    }


	/**
	 * Create Panel
	 *
	 * @return string $section Shortname for setting name/section name
	 * @return string $title Title of section
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
	 * @return string $section_name Short section name
	 * @return string $panel_name Short panel name
	 * @return string $title Title of section
	 * @return string $description Description for section
	 */
	final public function section($section_name, $panel_name, $title, $description = '')
	{
		$this->wp_customize->add_section('secretum_' . sanitize_key($section_name) . '_section', array(
	        'panel'             => 'secretum_' . sanitize_key($panel_name) . '_panel',
	        'title'             => esc_html($title),
	        'description'       => esc_html($description),
	        'priority'          => 10,
	    ));
	}


	/**
	 * Add Partial
	 *
	 * @return string $setting_name Name of he setting to save
	 * @return string $selector Class/Selector Name
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
	 * @return string $section_name Short section name
	 * @return string $setting_name Name of he setting to save
	 * @return string $title Label for control
	 * @return string $description Description for control
	 */
	final public function checkbox($section_name, $setting_name, $label, $description = '', $default = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name). ']', array(
			'sanitize_callback' => 'secretum_sanitize_checkbox',
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
	 * Status Checkbox
	 *
	 * @return string $section Shortname for setting name/section name
	 * @return string $section Theme location (container, wrapper, etc)
	 * @return string $title Label for control
	 * @return string $description Description for control
	 */
	final public function status($section_name = '', $label, $description = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_status]', array(
			'sanitize_callback' => 'secretum_sanitize_checkbox',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_status]', array(
			'label' 			=> esc_html($label),
   			'description' 		=> esc_html($description),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'checkbox'
		));
	}


	/**
	 * Container Type
	 *
	 * @return string $section Shortname for setting name/section name
	 */
	final public function containerType($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_container_type]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_container_type]', array(
			'label' 			=> __('Container Type', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_container',
			'type' 				=> 'radio',
			'choices' 			=> secretum_customizer_container_types()
		));
	}


	/**
	 * Background Image Control
	 *
	 * @return string $section_name Short section name
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
			    'width' 		=> $width,
			    'height' 		=> $height
			)
		));
	}


	/**
	 * Radio Select
	 *
	 * @return string $section_name Short section name
	 * @return string $setting_name Name of he setting to save
	 * @return string $title Label for control
	 * @return string $description Description for control
	 */
	final public function radio($section_name, $setting_name, $label, $description = '', $default = '', $choices = array())
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_' . sanitize_key($setting_name) . ']', array(
			'sanitize_callback' => 'secretum_sanitize_checkbox',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key($default)
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_' . sanitize_key($setting_name) . ']', array(
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
	 * @return string $section_name Short section name
	 */
	final public function select($section_name, $setting_name, $label, $description = '', $default = '', $select = array())
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
	 * @return string $section_name Short section name
	 */
	final public function number($section_name, $setting_name, $label, $description = '', $input_attrs = array(), $default = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'absint',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> sanitize_key($default)
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
	 * Background Color
	 *
	 * @return string $section_name Short section name
	 */
	final public function backgroundColor($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_background_color]' , array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_background_color]', array(
			'label' 			=> __('Background Color', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_background_colors()
		));
	}


	/**
	 * Background Hover Color
	 *
	 * @return string $section_name Short section name
	 */
	final public function backgroundHoverColor($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_background_hover_color]' , array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_background_hover_color]', array(
			'label' 			=> __('Background Hover Color', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_background_hover_colors()
		));
	}


	/**
	 * Padding X - Left & Right
	 *
	 * @return string $section_name Short section name
	 */
	final public function paddingX($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_padding_x]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_padding_x]', array(
			'label' 			=> __('Padding - Left & Right', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_padding_left_right()
		));
	}


	/**
	 * Padding Y - Top & Bottom
	 *
	 * @return string $section_name Short section name
	 */
	final public function paddingY($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_padding_y]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_padding_y]', array(
			'label' 			=> __('Padding - Top & Bottom', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_padding_top_bottom()
		));
	}


	/**
	 * Margin X - Left & Right
	 *
	 * @return string $section_name Short section name
	 */
	final public function marginX($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_margin_x]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_margin_x]', array(
			'label' 			=> __('Margin - Left & Right', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_margin_left_right()
		));
	}


	/**
	 * Margin Y - Top & Bottom
	 *
	 * @return string $section_name Short section name
	 */
	final public function marginY($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_margin_y]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_margin_y]', array(
			'label' 			=> __('Margin - Top & Bottom', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_margin_top_bottom()
		));
	}


	/**
	 * Margin Bottom
	 *
	 * @return string $section_name Short section name
	 */
	final public function marginBottom($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_margin_bottom]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_margin_bottom]', array(
			'label' 			=> __('Bottom Margin', 'secretum'),
			'description' 		=> __('Increases the spacing after section.', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_margin_bottom()
		));
	}


	/**
	 * Margin Top
	 *
	 * @return string $section_name Short section name
	 */
	final public function marginTop($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_margin_top]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_margin_top]', array(
			'label' 			=> __('Top Margin', 'secretum'),
			'description' 		=> __('Increases the spacing before section.', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_margin_top()
		));
	}


	/**
	 * Border Type
	 *
	 * @return string $section_name Short section name
	 */
	final public function borderType($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_border_type]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_border_type]', array(
			'label' 			=> __('Border Type', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_border()
		));
	}


	/**
	 * Border Radius
	 *
	 * @return string $section_name Short section name
	 */
	final public function borderRadius($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_border_radius]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_border_radius]', array(
			'label' 			=> __('Border Radius', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_border_radius()
		));
	}


	/**
	 * Border Color
	 *
	 * @return string $section_name Short section name
	 */
	final public function borderColor($section_name)
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_border_color]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_border_color]', array(
			'label' 			=> __('Border Color', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_border_colors()
		));
	}


	/**
	 * Text Alignment
	 *
	 * @example $customizer->textAlignment('header-top');
	 *
	 * @return string $section_name Short section name
	 */
	final public function textAlignment($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_text_alignment]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_text_alignment]', array(
			'label' 			=> __('Text Alignment', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_text_alignments()
		));
	}


	/**
	 * Margin Alignment
	 *
	 * @return string $section_name Short section name
	 */
	final public function marginAlignment($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_alignment]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_alignment]', array(
			'label' 			=> __('Alignment', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_margin_alignments()
		));
	}


	/**
	 * Font Family
	 *
	 * @return string $section_name Short section name
	 */
	final public function fontFamily($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_font_family]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_font_family]', array(
			'label' 			=> __('Font Family', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_font_families()
		));
	}


	/**
	 * Font Size
	 *
	 * @example $customizer->fontSize('header-top');
	 *
	 * @return string $section_name Short section name
	 */
	final public function fontSize($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_font_size]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_font_size]', array(
			'label' 			=> __('Font Size', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_font_sizes()
		));
	}


	/**
	 * Font Style
	 *
	 * @example $customizer->fontStyle('header-top');
	 *
	 * @return string $section_name Short section name
	 */
	final public function fontStyle($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_font_style]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_font_style]', array(
			'label' 			=> __('Font Style', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_font_styles()
		));
	}


	/**
	 * Text Transform
	 *
	 * @example $customizer->textTransform('header-top');
	 *
	 * @return string $section_name Short section name
	 */
	final public function textTransform($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_text_transform]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_text_transform]', array(
			'label' 			=> __('Text Transform', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_text_transform()
		));
	}


	/**
	 * Text Color
	 *
	 * @return string $section_name Short section name
	 */
	final public function textColor($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_text_color]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_text_color]', array(
			'label' 			=> __('Text Color', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_text_colors()
		));
	}


	/**
	 * Link Color
	 *
	 * @return string $section_name Short section name
	 */
	final public function linkColor($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_link_color]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_link_color]', array(
			'label' 			=> __('Link Color', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_link_colors()
		));
	}


	/**
	 * Link Hover Color
	 *
	 * @return string $section_name Short section name
	 */
	final public function linkHoverColor($section_name = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($section_name) . '_link_hover_color]', array(
			'sanitize_callback' => 'sanitize_key',
			'transport' 		=> 'refresh',
			'type' 				=> 'option',
			'default' 			=> ''
		));

		$this->wp_customize->add_control('secretum[' . sanitize_key($section_name) . '_link_hover_color]', array(
			'label' 			=> __('Link Hover Color', 'secretum'),
			'section' 			=> 'secretum_' . sanitize_key($section_name) . '_section',
			'type' 				=> 'select',
			'choices' 			=> secretum_customizer_link_hover_colors()
		));
	}


	/**
	 * Text Input Field
	 *
	 * @return string $setting_name Name of he setting to save
	 */
	final public function inputText($section_name, $setting_name, $label, $description = '', $default = '')
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
	 * Textarea
	 *
	 * @return string $setting_name Name of he setting to save
	 */
	final public function textarea($section_name, $setting_name, $label, $description = '', $default = '')
	{
		$this->wp_customize->add_setting('secretum[' . sanitize_key($setting_name) . ']' , array(
			'sanitize_callback' => 'secretum_sanitize_html',
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
