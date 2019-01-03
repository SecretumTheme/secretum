<?php
/**
 * Display Icon Markup
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Returns Either Font Awesome Icon or Default SVG Icon
 *
 * @example echo secretum_icon(array('fa' => ''));
 * @example echo secretum_icon(array('svg' => ''));
 * @example echo secretum_icon(array('svg' => '', 'fa' => ''));
 * @example echo secretum_icon(array('svg' => 'hashtag', 'fa' => 'fa fa-tags'));
 * @example echo secretum_icon(array('svg' => 'folder-open', 'fa' => 'fa fa-folder-open'));
 *
 * @param array $args [sgv(icon), fa(classes), title, desc, fallback(bool)]
 * @return string HTML
 */
if (!function_exists('secretum_icon')) {
	function secretum_icon($args = array())
	{
		// Parse args.
		$args = wp_parse_args($args, array(
			'svg' 		=> '',
			'fa'        => '',
			'title'     => '',
			'desc' 		=> '',
			'fallback' 	=> false,
		));

		// Default Output
		$html = '';

		// Display Font Awesome Icon If Plugin Enabled
		if (class_exists('Better_Font_Awesome_Plugin') && !empty($args['fa'])) {
			$html .= '<i class="' . esc_attr($args['fa']) . '"></i>';

		// Else Display SVG Icon
		} elseif (!empty($args['svg'])) {
			// Set aria hidden.
			$aria_hidden = ' aria-hidden="true"';

			// Default ARIA.
			$aria_labelledby = '';

			// Default
			$unique_id = '';

			// Reset ARIA.
			if (!empty($args['title'])) {
				$aria_hidden     = '';
				$unique_id       = uniqid();
				$aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';

				// Reset ARIA.
				if (!empty($args['desc'])) {
					$aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
				}
			}

			// Begin SVG markup.
			$html .= '<svg class="svg icon-' . esc_attr($args['svg']) . '"' . $aria_hidden . $aria_labelledby . ' role="img">';

			// Display the title.
			if (!empty($args['title']) && !empty($unique_id)) {
				$html .= '<title id="title-' . $unique_id . '">' . esc_html($args['title']) . '</title>';

				// Display the desc only if the title is already set.
				if (!empty($args['desc'])) {
					$html .= '<desc id="desc-' . $unique_id . '">' . esc_html($args['desc']) . '</desc>';
				}
			}


			// Display the icon.
			$html .= ' <use href="#icon-' . esc_html($args['svg']) . '" xlink:href="#icon-' . esc_html($args['svg']) . '"></use> ';

			// Add some markup to use as a fallback for browsers that do not support SVGs.
			if ($args['fallback']) {
				$html .= '<span class="svg-fallback icon-' . esc_attr($args['svg']) . '"></span>';
			}

			$html .= '</svg>';
		}

		return $html;
	}
}
