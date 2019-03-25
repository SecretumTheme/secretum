<?php
/**
 * Secretum Theme: WordPress Editor Settings
 *
 * @package    Secretum
 * @subpackage Core\Editor
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/editor.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Add the formats dropdown to visual editor
 *
 * @since 1.0.0
 *
 * @param array $buttons Registered buttons.
 * @return array
 */
function secretum_mce_buttons_2( $buttons ) {
	if ( false === in_array( 'styleselect', $buttons, true ) ) {
		$buttons[] = 'styleselect';
	}

	return $buttons;

}//end secretum_mce_buttons_2()

add_filter( 'mce_buttons_2', 'Secretum\secretum_mce_buttons_2' );


/**
 * Display advanced editor option in visual editor
 *
 * @since 1.0.0
 *
 * @param array $settings Editor settings.
 * @return string Updated Json Encoded Settings
 */
function secretum_tiny_mce_before_init( $settings ) {
	// Inject Disable.
	$settings['wordpress_adv_hidden'] = false;

	// Style Formats To Inject.
	$style_formats = [
		[
			'title' => 'Grid System',
			'items' => [
				[
					'title'   => '.container',
					'classes' => 'container',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.container-fluid',
					'classes' => 'container-fluid',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.row',
					'classes' => 'row',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col',
					'classes' => 'col',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-lg',
					'classes' => 'col-lg',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-sm',
					'classes' => 'col-sm',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-xs',
					'classes' => 'col-xs',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md',
					'classes' => 'col-md',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-1',
					'classes' => 'col-md-1',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-2',
					'classes' => 'col-md-2',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-3',
					'classes' => 'col-md-3',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-4',
					'classes' => 'col-md-4',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-5',
					'classes' => 'col-md-5',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-6',
					'classes' => 'col-md-6',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-7',
					'classes' => 'col-md-7',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-8',
					'classes' => 'col-md-8',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-9',
					'classes' => 'col-md-9',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-10',
					'classes' => 'col-md-10',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-11',
					'classes' => 'col-md-11',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
				[
					'title'   => '.col-md-12',
					'classes' => 'col-md-12',
					'block'   => 'div',
					'wrapper' => true,
					'exact'   => true,
				],
			],
		],
		[
			'title' => 'Background Coloring',
			'items' => [
				[
					'title'    => '.bg-primary',
					'classes'  => 'bg-primary',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-secondary',
					'classes'  => 'bg-secondary',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-danger',
					'classes'  => 'bg-danger',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-dark',
					'classes'  => 'bg-dark',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-info',
					'classes'  => 'bg-info',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-light',
					'classes'  => 'bg-light',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-muted',
					'classes'  => 'bg-muted',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-success',
					'classes'  => 'bg-success',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-warning',
					'classes'  => 'bg-warning',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.bg-white',
					'classes'  => 'bg-white',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
			],
		],
		[
			'title' => 'Text Coloring',
			'items' => [
				[
					'title'    => '.text-primary',
					'classes'  => 'text-primary',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-secondary',
					'classes'  => 'text-secondary',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-danger',
					'classes'  => 'text-danger',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-dark',
					'classes'  => 'text-dark',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-info',
					'classes'  => 'text-info',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-light',
					'classes'  => 'text-light',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-muted',
					'classes'  => 'text-muted',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-success',
					'classes'  => 'text-success',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-warning',
					'classes'  => 'text-warning',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-white',
					'classes'  => 'text-white',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
			],
		],
		[
			'title' => 'Text Transform',
			'items' => [
				[
					'title'    => '.text-lowercase',
					'classes'  => 'text-lowercase',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-uppercase',
					'classes'  => 'text-uppercase',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.text-capitalize',
					'classes'  => 'text-capitalize',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
			],
		],
		[
			'title' => 'Float Elements',
			'items' => [
				[
					'title'    => '.pull-left',
					'classes'  => 'pull-left',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.pull-right',
					'classes'  => 'pull-right',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
				[
					'title'    => '.clearfix',
					'classes'  => 'clearfix',
					'selector' => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote',
				],
			],
		],
		[
			'title' => 'Inline Elements',
			'items' => [
				[
					'title'    => '<p class="lead"></p>',
					'selector' => 'p',
					'classes'  => 'lead',
					'wrapper'  => true,
				],
				[
					'title'   => '<blockquote class="blockquote-reverse"></blockquote>',
					'block'   => 'blockquote',
					'classes' => 'blockquote blockquote-reverse',
					'wrapper' => true,
				],
				[
					'title'   => '<blockquote class="blockquote"></blockquote>',
					'block'   => 'blockquote',
					'classes' => 'blockquote',
					'wrapper' => true,
				],
				[
					'title'  => '<cite></cite>',
					'inline' => 'cite',
				],
				[
					'title'  => '<code></code>',
					'inline' => 'code',
				],
				[
					'title'  => '<mark></mark>',
					'inline' => 'mark',
				],
				[
					'title'  => '<pre></pre>',
					'inline' => 'pre',
				],
				[
					'title'  => '<samp></samp>',
					'inline' => 'samp',
				],
				[
					'title'  => '<small></small>',
					'inline' => 'small',
				],
				[
					'title'  => '<var></var>',
					'inline' => 'var',
				],
			],
		],
	];

	// If style_formats set by other plugins merge with new style_formats.
	$merged_formats = ( isset( $settings['style_formats'] ) ) ? array_merge( $style_formats, json_decode( $settings['style_formats'] ) ) : '';

	// Json Encode Formats.
	$settings['style_formats'] = ( true !== empty( $merged_formats ) ) ? wp_json_encode( $merged_formats ) : wp_json_encode( $style_formats );

	return $settings;

}//end secretum_tiny_mce_before_init()

add_filter( 'tiny_mce_before_init', 'Secretum\secretum_tiny_mce_before_init' );
