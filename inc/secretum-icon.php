<?php
/**
 * Display Icon Markup
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Returns either Iconic icon/png/svg or Font Awesome Icon if Better Font Awesome Plugin installed
 *
 * @example echo secretum_icon(array('fa' => 'icon-name'));
 * @example echo secretum_icon(array('io' => 'icon-name'));
 * @example echo secretum_icon(array('png' => 'icon-name'));
 * @example echo secretum_icon(array('svg' => 'icon-name'));
 *
 * @param array $args [fa, io, png, svg, title]
 * @return string HTML
 */
if (!function_exists('secretum_icon')) {
	function secretum_icon($args = array())
	{
		// Parse args.
		$args = wp_parse_args($args, [
			'fa'        => '',
			'io'        => '',
			'png' 		=> '',
			'svg' 		=> '',
			'title'     => ''
		]);

		// Build Alt Tag
		$alt = (!empty($args['title'])) ? ' alt="' . esc_html($args['title']) . '"' : '';

		// Default Output
		$html = '';

		// Display Font Awesome Icon If Plugin Enabled
		if (class_exists('Better_Font_Awesome_Plugin') && !empty($args['fa'])) {
			$html .= '<i class="fa ' . esc_attr($args['fa']) . '" aria-hidden="true"' . $alt . '></i>';

		// Display SVG Icon
		} elseif (!empty($args['io'])) {
			$html .= '<span class="oi" data-glyph="' . esc_attr($args['io']) . '" aria-hidden="true"' . $alt . '></span>';

		// Display SVG Icon
		} elseif (!empty($args['svg'])) {
			$html .= '<img src="' . SECRETUM_THEME_URL . '/images/iconic/svg/' . esc_attr($args['svg']) . '.svg"' . $alt . '/>';

		// Display PNG Icon
		} elseif (!empty($args['png'])) {
			$html .= '<img src="' . SECRETUM_THEME_URL . '/images/iconic/png/' . esc_attr($args['png']) . '.png"' . $alt . '/>';
		}

		return $html;
	}
}
