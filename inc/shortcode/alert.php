<?php
/**
 * Secretum Theme: Alert Box Shortcode
 */
if (!defined('ABSPATH')) { exit; }


/**
 * Bootstrap Shortcode: Alert Box
 *
 * @example [secretum_alert_box dismiss=true class="warning"]Example[/secretum_alert_box]
 */
add_shortcode('secretum_alert_box', function($atts = array(), $content = false) {
	// Get Attributes
	$atts = shortcode_atts( array(
		"class" 	=> false,
		"dismiss" 	=> false,
		"html" 		=> $content,
	), $atts );

	// Return HTML
	return sprintf(
		'<div class="alert alert-%s"%s role="alert">%s%s</div>',
		($atts['class']) ? sanitize_html_class($atts['class']) : 'success',
		($atts['dismiss']) ? ' alert-dismissible fade show' : '',
		($atts['html']) ? wp_kses_post($content) : '',
		($atts['dismiss']) ? ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>' : ''
	);
});
