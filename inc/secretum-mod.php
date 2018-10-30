<?php
/**
 * Secretum Settings Option
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Prepare Theme Mod Setting Value For Display/Use
 *
 * @example secretum_mod('setting_name');
 * @example secretum_mod('setting_name', false, true);
 * @example secretum_mod('setting_name', 'html');
 * @example secretum_mod('setting_name', 'attr', true);
 * @example secretum_mod('setting_name', 'int', true);
 * @example secretum_mod('setting_name', 'raw');
 *
 * @param string $setting_name Valid setting name
 * @param mixed $escape html|attr|int|raw default bool
 * @param bool/string $spacer True to add space before returned value
 * @return bool/string Sanitized Class Name
 */
if (!function_exists('secretum_mod')) {
	function secretum_mod($setting_name, $escape = '', $space = '')
	{
		// Get Settings
		$settings_array = wp_parse_args(
			get_option('secretum', array()),
			array()
		);

		// Get Theme Mod
		$theme_mod = isset($settings_array[$setting_name]) ? $settings_array[$setting_name] : '';

		// Space Before Value
		$spacer = !empty($space) ? ' ' : '';

		// Default Option Result
		$mod = false;

		// If Mod & Escape Type Set
		if (!empty($theme_mod) && !empty($escape)) {
			// Switch on Type
			switch ($escape) {
			    // Attribute
			    case 'attr':
			        $mod = $spacer . esc_attr($theme_mod);
			        break;

			    // Interger
			    case 'int':
			        $mod = $spacer . absint($theme_mod);
			        break;

				// HTML
			    case 'html':
			        $mod = html_entity_decode($theme_mod);
			        break;

			    // Script Output
			    case 'script':
			        $mod = base64_decode($theme_mod);
			        break;

			    // Raw Output
			    case 'raw':
			        $mod = $theme_mod;
			        break;

			    // URL
			    case 'url':
			        $mod = esc_url($theme_mod);
			        break;
			}

		// Value Set
		} elseif (!empty($theme_mod) && empty($escape)) {
			$mod = true;
		}

		return $mod;
	}
}
