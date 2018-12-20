<?php
/**
 * Customizer Fallback & Sanitize Functions
 *
 * @package WordPress
 * @subpackage Secretum
 */

namespace Secretum\Customizer {
	/**
	 * Stop Customizer From Saving A Setting
	 *
	 * @param string $string Script String
	 * @return string Cleaned Script
	 */
    function import($string)
    {
    	if (!is_customize_preview()) { die(); }

        //$json_array = json_decode(stripcslashes($string), true);
        $json_array = json_decode(htmlspecialchars_decode($string), true);

        // String to Array
        if (is_string($string) && is_array($json_array) && (json_last_error() == JSON_ERROR_NONE)) {
            // Clear
            $array = [];

            // Simple Sanitize
            foreach ($json_array as $key => $value) {
                // Strings
                if (isset($value) && is_string($value)) {
                    $array[$key] = htmlentities(wp_kses_post($value));

                // Intergers
                } elseif (isset($value) && is_int($value)) {
                    $array[$key] = absint($value);

                // Strip All
                } else {
                    $array[$key] = htmlentities(wp_strip_all_tags($value, true));
                }
            }

            // If Array Set
            if (!empty($array)) {
                // Merge Arrays & Filter Empty Values
                $clean_array = array_filter(array_merge($array, secretum_customizer_global_settings()));

                // Merge Arrays & Filter Empty Values
                $settings = array_filter(array_intersect_key($clean_array, get_option('secretum', array())));

                // Update Settings Option
                update_option('secretum', $settings);
            }

            return '';
        }
    }


	/**
	 * Export Settings
	 *
	 * @param string $location
	 * @return string 
	 */
    function export($location)
    {
        $settings = array();

        // Get Allowed Settings

        if ($location == "default") {
            $settings = secretum_customizer_default_settings();
        }

        if ($location == "copyright") {
            $settings = secretum_customizer_copyright_settings();
        }

        // Get Saved Option
        if (isset($settings)) {
        	// Get Set Pairs
            $option = array_filter(get_option('secretum', array()));

            // Clean To Unique Keys
            $cleaned_array = array_intersect_key($option, $settings);
        }

       	// Return Data
        if (!empty($cleaned_array)) {
            $data = json_encode($cleaned_array);

        // No Data To Export
        } else {
        	$data = __('No Settings To Export', 'secretum');
        }

        return $data;
    }


	/**
	 * Reset Customzer Settings
	 *
	 * @param string $value Must equal reset to delete option
	 * @return false
	 */
	function reset($value = '')
	{
		if (!empty($value) && $value == 'RESET') {
			// Delete Settings
			delete_option('secretum');
		}
		return '';
	}


	/**
	 * Sanitize Pages Dropdown Menu
	 *
	 * @see /inc/customizer/frontpage/settings.php
	 *
	 * @param int $page_id Curret page id
	 * @param array $setting
	 * @return int Valid page id
	 */
	function sanitizeDropdownPages($page_id, $setting)
	{
		// Retrieve the post status based on the Page ID
		return ('publish' == get_post_status(absint($page_id)) ? absint($page_id) : $setting->default);
	}


	/**
	 * Encode Script For Database
	 *
	 * @see /inc/system/extras/customizer/text/*
	 *
	 * @param string $string Script String
	 * @return string Cleaned Script
	 */
	function sanitizeScript($string)
	{
		return json_encode($string);
	}


	/**
	 * Escape & Decode Script For Textarea
	 *
	 * @see /inc/system/extras/customizer/text/*
	 *
	 * @param string $string Script String
	 * @return string Cleaned Script
	 */
	function escapeScript($string)
	{
		return esc_textarea(json_decode($string));
	}


	/**
	 * Sanitize HTML For Display
	 *
	 * @see /inc/customizer/text/*
	 *
	 * @param string $string HTML String
	 * @return string Cleaned HTML
	 */
	function sanitizeHtml($string)
	{
		// Sanitize content for allowed HTML tags
		$data = wp_kses_post($string);

		// Convert HTML entities to corresponding characters
		return html_entity_decode($data);
	}


	/**
	 * Sanitize Everything From String
	 *
	 * @param string $string HTML String
	 * @return string Cleaned HTML
	 */
	function sanitizeAll($string)
	{
		// Strip all HTML tags including script and style
		$data = wp_strip_all_tags($string, true);

		// Convert all applicable characters to HTML entities
		return htmlentities($data);
	}


	/**
	 * Sanitize Boolean Value
	 *
	 * @param bool $checked If value is selected
	 * @return bool Return true if selected
	 */
	function sanitizeBool($checked)
	{
		return ((isset($checked) && '1' == $checked) ? '1' : '0');
	}


	/**
	 * Sanitize Checkbox Value
	 *
	 * @param bool $checked If value is selected
	 * @return bool Return true if selected
	 */
	function sanitizeCheckbox($checked)
	{
		return ((isset($checked) && '1' == $checked) ? '1' : false);
	}
}
