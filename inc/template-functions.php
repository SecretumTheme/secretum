<?php
/**
 * Global Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Stop Customizer From Saving A Setting
 *
 * @param string $string Script String
 * @return string Cleaned Script
 */
if (!function_exists('secretum_import')) {
    function secretum_import($string)
    {
    	if (!is_customize_preview()) { die(); }

        $json_array = json_decode(stripslashes($string), true);

        // String to Array
        if (is_string($string) && is_array($json_array) && (json_last_error() == JSON_ERROR_NONE)) {

            // Clear
            $array = [];

            // Simple Sanitize
            foreach ($json_array as $key => $value) {
                // Strings
                if (isset($value) && is_string($value)) {
                    $array[$key] = wp_kses_post($value);

                // Intergers
                } elseif (isset($value) && is_int($value)) {
                    $array[$key] = absint($value);

                // Intergers
                } elseif (isset($value) && is_array($value)) {
                    $array[$key] = array_filter($value);

                // Strip All
                } else {
                    $array[$key] = wp_strip_all_tags($value, true);
                }
            }

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
}


/**
 * Export Settings
 *
 * @param string $location
 * @return string 
 */
if (!function_exists('secretum_export')) {
    function secretum_export($location)
    {
        $settings = array();

        // Get Allowed Settings

        if ($location == "default") {
            $settings = secretum_customizer_default_settings();
        }

        if ($location == "copyright") {
            $settings = secretum_customizer_copyright_settings();
        }

        // If Settings
        if (isset($settings)) {
            // Get Saved Option
            $option = array_filter(get_option('secretum', array()));

            // Return Encoded Values From Unique Keys
            return json_encode(array_intersect_key($option, $settings));
        }
    }
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
if (!function_exists('secretum_sanitize_dropdown_pages')) {
	function secretum_sanitize_dropdown_pages($page_id, $setting)
	{
		// Retrieve the post status based on the Page ID
		return ('publish' == get_post_status(absint($page_id)) ? absint($page_id) : $setting->default);
	}
}


/**
 * 
 *
 * @param string $location
 * @return string 
 */
if (!function_exists('secretum_export')) {
	function secretum_export($location)
	{
		$settings = array();

		if ($location == "copyright") {
			$settings = secretum_customizer_copyright_settings();
		}

		$intersect = array_intersect(get_option('secretum', array()), $settings);

		return json_encode($settings);
	}
}




/**
 * Encode Script For Database
 *
 * @see /inc/system/extras/customizer/text/*
 *
 * @param string $string Script String
 * @return string Cleaned Script
 */
if (!function_exists('secretum_sanitize_script')) {
	function secretum_sanitize_script($string)
	{
		return json_encode($string);
	}
}


/**
 * Escape & Decode Script For Textarea
 *
 * @see /inc/system/extras/customizer/text/*
 *
 * @param string $string Script String
 * @return string Cleaned Script
 */
if (!function_exists('secretum_escape_script')) {
	function secretum_escape_script($string)
	{
		return esc_textarea(json_decode($string));
	}
}


/**
 * Sanitize HTML For Display
 *
 * @see /inc/customizer/text/*
 *
 * @param string $string HTML String
 * @return string Cleaned HTML
 */
if (!function_exists('secretum_sanitize_html')) {
	function secretum_sanitize_html($string)
	{
		// Sanitize content for allowed HTML tags
		$data = wp_kses_post($string);

		// Convert HTML entities to corresponding characters
		return html_entity_decode($data);
	}
}


/**
 * Sanitize Everything From String
 *
 * @param string $string HTML String
 * @return string Cleaned HTML
 */
if (!function_exists('secretum_sanitize_all')) {
	function secretum_sanitize_all($string)
	{
		// Strip all HTML tags including script and style
		$data = wp_strip_all_tags($string, true);

		// Convert all applicable characters to HTML entities
		return htmlentities($data);
	}
}


/**
 * Sanitize Boolean Value
 *
 * @param bool $checked If value is selected
 * @return bool Return true if selected
 */
if (!function_exists('secretum_sanitize_bool')) {
	function secretum_sanitize_bool($checked)
	{
		return ((isset($checked) && '1' == $checked) ? '1' : '0');
	}
}


/**
 * Sanitize Checkbox Value
 *
 * @param bool $checked If value is selected
 * @return bool Return true if selected
 */
if (!function_exists('secretum_sanitize_checkbox')) {
	function secretum_sanitize_checkbox($checked)
	{
		return ((isset($checked) && '1' == $checked) ? '1' : false);
	}
}


/**
 * Reset Customzer Settings
 *
 * @param string $value Must equal reset to delete option
 * @return false
 */
if (!function_exists('secretum_customizer_reset')) {
	function secretum_customizer_reset($value = '')
	{
		// Delete Secretum Settings
		if (!empty($value) && $value == 'RESET') {
			delete_option('secretum');
		}
		return '';
	}
}


/**
 * Default Menu Fallback
 */
if (!function_exists('secretum_menu_fallback')) {
	function secretum_menu_fallback()
	{
		echo '<ul id="main-menu" class="navbar-nav ml-auto py-3"><li class="menu-item">';
		echo '<a href="' . admin_url('nav-menus.php') . '">' . apply_filters('secretum_create_menu_text', __('Create Menu', 'secretum')) . '</a>';
		echo '</li></ul>';

	}

}


/**
 * Default Menu Fallback
 */
if (!function_exists('secretum_account_menu_fallback')) {
	function secretum_account_menu_fallback()
	{
		echo '<ul id="account-menu"><li class="menu-item">';
		echo '<a href="' . admin_url('nav-menus.php') . '">' . apply_filters('secretum_create_menu_text', __('Create Menu', 'secretum')) . '</a>';
		echo '</li></ul>';

	}

}


/**
 * Retrieve paginated links for archive post pages.
 */
if (!function_exists('secretum_paginate_links')) {
	function secretum_paginate_links(\WP_Query $wp_query = null, $echo = true)
	{
		if (null === $wp_query) {
			global $wp_query;
		}

		if ($wp_query->max_num_pages <= 1) { return; }

		return paginate_links(
			[
				'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
				'format'       => '?paged=%#%',
				'current'      => max(1, get_query_var('paged')),
				'total'        => $wp_query->max_num_pages,
				'type'         => 'array',
				'show_all'     => false,
				'end_size'     => 3,
				'mid_size'     => 1,
				'prev_next'    => false,
				'add_args'     => false,
				'add_fragment' => ''
			]
		);
	}
}


/**
 * Render Breadcrumbs
 *
 * @example do_action('secretum_breadcrumbs');
 * @see /page-templates/documentation.php
 *
 * @param string $taxonomy The taxonomy term
 * @param bool 	 $top_link True to enable top return link
 * @param bool 	 $icons True to enable Font Awesome icons
 * @param string Text only, icons will override, defaults to ' > '
 * @return string Breadcrumbs HTML
 */
if (!function_exists('secretum_breadcrumbs')) {
	function secretum_breadcrumbs($taxonomy = '', $top_link = false, $icons = false, $seperator = false)
	{
		// Required
		if (empty($taxonomy)) { return; }

		global $post;

		// Get Terms Array
		$terms = get_the_terms($post->ID, sanitize_html_class($taxonomy));

		// If Items Set
		if (isset($terms[0]->name) && isset($terms[0]->slug)) {
			// Get Home URL
			$home_url = esc_url(home_url());

			// Get Category Name
			$category_name = sanitize_text_field($terms[0]->name);

			// Get Category Slug
			$category_slug = sanitize_html_class($terms[0]->slug);

			// Build Category URL
			//$category_url 	= $home_url . '/' . sanitize_html_class($terms[0]->slug) . '/';
			$category_url = get_term_link($category_slug, sanitize_html_class($taxonomy));

			// Home Icon
			$home = ($icons) ? '<i class="fa fa-home" aria-hidden="true"></i> ' : '';

			// Home Text
			$home_text = __('Home', 'secretum');

			// Build Seperator
			if ($seperator && $icons) {
				$sep = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

			} elseif($seperator && !$icons) {
				$sep = wp_filter_nohtml_kses($seperator);

			} else {
				$sep = ' > ';

			}

			// Build Top Return Link
			if ($top_link && $icons) {
				$top = '<a href="#top" class="ml-2 p-2"><i class="fa fa-caret-up" aria-hidden="true" title="Return to Top"></i></a>';

			} elseif($top_link && !$icons) {
				$top = ' | <a href="#top">top ^</a>';

			} else {
				$top = '';

			}

			// Return HTML
			return '<div class="breadcrumbs">' . $home . '<a href="' . $home_url . '">' . $home_text . '</a> ' . $sep . ' <a href="' . $category_url . '">' . $category_name . '</a>' . $top . '</div>';
		}
	}
}


/**
 * WordPress Bootstrap Pagination
 *
 * @link https://github.com/talentedaamer/Bootstrap-wordpress-pagination
 */
if (! defined('ABSPATH')) { exit; }


if (! function_exists('wp_bootstrap_pagination'))
{
    function wp_bootstrap_pagination($args = array())
    {
        $defaults = array(
            'range'           => 4,
            'custom_query'    => FALSE,
            'previous_string' => __('Previous', 'secretum'),
            'next_string'     => __('Next', 'secretum'),
            'before_output'   => '<div class="post-nav"><ul class="pager">',
            'after_output'    => '</ul></div>'
       );
        
        $args = wp_parse_args(
            $args, 
            apply_filters('wp_bootstrap_pagination_defaults', $defaults)
       );
        
        $args['range'] = (int) $args['range'] - 1;
        if (!$args['custom_query'])
            $args['custom_query'] = @$GLOBALS['wp_query'];
        $count = (int) $args['custom_query']->max_num_pages;
        $page  = intval(get_query_var('paged'));
        $ceil  = ceil($args['range'] / 2);
        
        if ($count <= 1)
            return FALSE;
        
        if (!$page)
            $page = 1;
        
        if ($count > $args['range']) {
            if ($page <= $args['range']) {
                $min = 1;
                $max = $args['range'] + 1;
            } elseif ($page >= ($count - $ceil)) {
                $min = $count - $args['range'];
                $max = $count;
            } elseif ($page >= $args['range'] && $page < ($count - $ceil)) {
                $min = $page - $ceil;
                $max = $page + $ceil;
            }
        } else {
            $min = 1;
            $max = $count;
        }
        
        $echo = '';
        $previous = intval($page) - 1;
        $previous = esc_attr(get_pagenum_link($previous));
        
        $firstpage = esc_attr(get_pagenum_link(1));
        if ($firstpage && (1 != $page))
            $echo .= '<li class="previous"><a href="' . $firstpage . '">' . __('First', 'secretum') . '</a></li>';

        if ($previous && (1 != $page))
            $echo .= '<li><a href="' . $previous . '" title="' . __('previous', 'secretum') . '">' . $args['previous_string'] . '</a></li>';
        
        if (!empty($min) && !empty($max)) {
            for($i = $min; $i <= $max; $i++) {
                if ($page == $i) {
                    $echo .= '<li class="active"><span class="active">' . str_pad((int)$i, 2, '0', STR_PAD_LEFT) . '</span></li>';
                } else {
                    $echo .= sprintf('<li><a href="%s">%002d</a></li>', esc_attr(get_pagenum_link($i)), $i);
                }
            }
        }
        
        $next = intval($page) + 1;
        $next = esc_attr(get_pagenum_link($next));
        if ($next && ($count != $page))
            $echo .= '<li><a href="' . $next . '" title="' . __('next', 'secretum') . '">' . $args['next_string'] . '</a></li>';
        
        $lastpage = esc_attr(get_pagenum_link($count));
        if ($lastpage) {
            $echo .= '<li class="next"><a href="' . $lastpage . '">' . __('Last', 'secretum') . '</a></li>';
        }

        if (isset($echo))
            echo $args['before_output'] . $echo . $args['after_output'];
    }
}
