<?php
/**
 * Display Icon Markup
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Returns either Foundation icon icon/svg or Font Awesome Icon if Better Font Awesome Plugin installed
 *
 * @example echo secretum_icon(array('fi' => 'icon-name'));
 * @example echo secretum_icon(array('fa' => 'icon-name'));
 * @example echo secretum_icon(array('png' => 'icon-name'));
 * @example echo secretum_icon(array('svg' => 'icon-name'));
 * @example echo secretum_icon(array(fi' => 'icon-name', 'fa' => 'icon-name', 'alt' => 'Text', 'size' => 'text-14'));
 *
 * @param array $args [fi(string), fa(string), svg(string), alt(string), size(string)]
 * @return string HTML
 */
if (!function_exists('secretum_icon')) {
	function secretum_icon($args = array())
	{
		// Parse args.
		$args = wp_parse_args($args, [
			'fi' 	=> '',
			'fa' 	=> '',
			//'png' 	=> '',
			'svg' 	=> '',
			'alt' 	=> '',
			'size' 	=> ''
		]);

		// Build Alt Tag
		$alt = (!empty($args['alt'])) ? ' alt="' . esc_html($args['alt']) . '"' : '';

		// Text Size
		$text_size = (!empty($args['size'])) ? esc_attr($args['size']) : '';

		// Default Output
		$html = '';

		// Display Font Awesome Icon If Plugin Enabled
		if (class_exists('Better_Font_Awesome_Plugin') && !empty($args['fa'])) {
			$html .= '<i class="fa ' . esc_attr($args['fa']) . ' ' . $text_size . '" aria-hidden="true"' . $alt . '></i>';

		// Display Foundation Icon
		} elseif (!empty($args['fi'])) {
			$html .= '<i class="fi-' . esc_attr($args['fi']) . ' ' . $text_size . '" aria-hidden="true"' . $alt . '></i>';

		// Display SVG Icon
		} elseif (!empty($args['svg'])) {
			$html .= '<img src="' . SECRETUM_THEME_URL . '/images/svg/' . esc_attr($args['svg']) . '.svg" class="' . $text_size . '"' . $alt . '/>';

		// Display PNG Icon
		//} elseif (!empty($args['png'])) {
		//	$html .= '<img src="' . SECRETUM_THEME_URL . '/images/png/' . esc_attr($args['png']) . '.png" class="' . $text_size . '"' . $alt . '/>';
		}

		return $html;
	}
}
