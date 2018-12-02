<?php
/**
 * WordPress Shortcode
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Allow all registered widgets to be used as a shortcode
 *
 * @param $atts array Widget Instance Values
 * @return $output string Widget HTML
 *
 * @example [secretum_widget name="RegisteredWidgetName" args1="" args2=""]
 */
add_shortcode('secretum_widget', function($atts) {
	// Required
    if (!empty($atts['name']) && class_exists($atts['name'])) {
	    ob_start();
	    if (is_active_widget($atts['name'])) {
		    the_widget($atts['name'], (array) $atts, array(
		        'before_widget' => isset($atts['before_widget']) ? $atts['before_widget'] : '',
		        'after_widget' 	=> isset($atts['after_widget']) ? $atts['after_widget'] : '',
		        'before_title' 	=> isset($atts['before_title']) ? $atts['before_title'] : '',
		        'after_title' 	=> isset($atts['after_title']) ? $atts['after_title'] : ''
		    ));
	    }
	    $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
});
