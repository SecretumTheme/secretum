<?php
namespace Secretum;

/**
 * Secretum Customizer Custom Sections Creator
 *
 * @see https://developer.wordpress.org/reference/classes/wp_customize_section/
 *
 * @package WordPress
 * @subpackage Secretum
 */
class CustomizerSections extends \WP_Customize_Section {

	/**
     * Type of this section.
     *
     * @var string
	 */
	public $type = 'secretum';


	/**
	 * Custom Button Value
	 *
	 * @var string
	 */
	public $button_text = '';


	/**
	 * Custom Button URL.
     *
	 * @var string
	 */
	public $button_url = '';


	/**
	 * Custom Button Classes
     *
	 * @var string
	 */
	public $button_class = '';


	/**
	 * Custom Section Classes
     *
	 * @var string
	 */
	public $section_class = '';


	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
		$json = parent::json();
		$json['button_url']  	= esc_url($this->button_url);
		$json['button_class'] 	= esc_attr($this->button_class);
		$json['button_text'] 	= esc_html($this->button_text);
		$json['section_class'] 	= esc_attr($this->section_class);
		return $json;
	}


	/**
	 * An Underscore (JS) template for rendering this section.
	 *
	 * @return void
	 */
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand {{ data.section_class }}">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.button_url && data.button_class && data.button_text ) { #>
					<a href="{{ data.button_url }}" class="{{ data.button_class }}" target="_blank">{{ data.button_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}
