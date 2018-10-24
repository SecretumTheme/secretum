<?php
/**
 * Secretum Theme: WordPress Editor Settings
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Register theme editor stylesheet
 */
add_action('admin_init', function() {
    add_editor_style('css/theme_editor-style.min.css');
});


/**
 * Add the formats dropdown to visual editor
 *
 * @param array $buttons Registered buttons
 * @return array
 */
add_filter('mce_buttons_2', function($buttons) {
    if (! in_array('styleselect', $buttons)) {
        $buttons[] = 'styleselect';
    }

    return $buttons;
});


/**
 * Display advanced editor option in visual editor
 *
 * @param array $settings Editor settings
 * @return string Updated Json Encoded Settings
 */
add_filter('tiny_mce_before_init', function($settings) {
    // Inject Disable
    $settings['wordpress_adv_hidden'] = false;

    // Style Formats To Inject
    $style_formats = array(
        array(
            'title' => 'Grid System',
            'items' => array(
                array(
                    'title'     => '.container',
                    'classes'   => 'container',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.container-fluid',
                    'classes'   => 'container-fluid',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.row',
                    'classes'   => 'row',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col',
                    'classes'   => 'col',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-lg',
                    'classes'   => 'col-lg',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-sm',
                    'classes'   => 'col-sm',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-xs',
                    'classes'   => 'col-xs',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md',
                    'classes'   => 'col-md',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-1',
                    'classes'   => 'col-md-1',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-2',
                    'classes'   => 'col-md-2',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-3',
                    'classes'   => 'col-md-3',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-4',
                    'classes'   => 'col-md-4',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-5',
                    'classes'   => 'col-md-5',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-6',
                    'classes'   => 'col-md-6',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                 ),
                array(
                    'title'     => '.col-md-7',
                    'classes'   => 'col-md-7',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-8',
                    'classes'   => 'col-md-8',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-9',
                    'classes'   => 'col-md-9',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-10',
                    'classes'   => 'col-md-10',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-11',
                    'classes'   => 'col-md-11',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
                array(
                    'title'     => '.col-md-12',
                    'classes'   => 'col-md-12',
                    'block'     => 'div',
                    'wrapper'   => true,
                    'exact'     => true,
                ),
            )
        ),
        array(
            'title' => 'Background Coloring',
            'items' => array(
                array(
                    'title'     => '.bg-primary',
                    'classes'   => 'bg-primary',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-secondary',
                    'classes'   => 'bg-secondary',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-danger',
                    'classes'   => 'bg-danger',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-dark',
                    'classes'   => 'bg-dark',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-info',
                    'classes'   => 'bg-info',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-light',
                    'classes'   => 'bg-light',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-muted',
                    'classes'   => 'bg-muted',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-success',
                    'classes'   => 'bg-success',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-warning',
                    'classes'   => 'bg-warning',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.bg-white',
                    'classes'   => 'bg-white',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                )
            )
        ),
        array(
            'title' => 'Text Coloring',
            'items' => array(
                array(
                    'title'     => '.text-primary',
                    'classes'   => 'text-primary',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-secondary',
                    'classes'   => 'text-secondary',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-danger',
                    'classes'   => 'text-danger',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-dark',
                    'classes'   => 'text-dark',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-info',
                    'classes'   => 'text-info',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-light',
                    'classes'   => 'text-light',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-muted',
                    'classes'   => 'text-muted',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-success',
                    'classes'   => 'text-success',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-warning',
                    'classes'   => 'text-warning',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-white',
                    'classes'   => 'text-white',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                )
            )
        ),
        array(
            'title' => 'Text Transform',
            'items' => array(
                array(
                    'title'     => '.text-lowercase',
                    'classes'   => 'text-lowercase',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-uppercase',
                    'classes'   => 'text-uppercase',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.text-capitalize',
                    'classes'   => 'text-capitalize',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
            )
        ),
        array(
            'title' => 'Float Elements',
            'items' => array(
                array(
                    'title'     => '.pull-left',
                    'classes'   => 'pull-left',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.pull-right',
                    'classes'   => 'pull-right',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
                array(
                    'title'     => '.clearfix',
                    'classes'   => 'clearfix',
                    'selector'  => 'p, h1, h2, h3, h4, h5, h6, li, div, blockquote'
                ),
            )
        ),
        array(
            'title' => 'Inline Elements',
            'items' => array(
                array(
                    'title'     => '<p class="lead"></p>',
                    'selector'  => 'p',
                    'classes'   => 'lead',
                    'wrapper'   => true
                ),
                array(
                    'title'     => '<blockquote class="blockquote-reverse"></blockquote>',
                    'block'     => 'blockquote',
                    'classes'   => 'blockquote blockquote-reverse',
                    'wrapper'   => true
                ),
                array(
                    'title'     => '<blockquote class="blockquote"></blockquote>',
                    'block'     => 'blockquote',
                    'classes'   => 'blockquote',
                    'wrapper'   => true
                ),
                array(
                    'title'     => '<cite></cite>',
                    'inline'    => 'cite'
                ),
                array(
                    'title'     => '<code></code>',
                    'inline'    => 'code'
                ),
                array(
                    'title'     => '<mark></mark>',
                    'inline'    => 'mark'
                ),
                array(
                    'title'     => '<pre></pre>',
                    'inline'    => 'pre'
                ),
                array(
                    'title'     => '<samp></samp>',
                    'inline'    => 'samp'
                ),
                array(
                    'title'     => '<small></small>',
                    'inline'    => 'small'
                ),
                array(
                    'title'     => '<var></var>',
                    'inline'    => 'var'
                ),
            )
        ),
    );

    // If style_formats set by other plugins merge with new style_formats
    $merged_formats = (isset($settings['style_formats'])) ? array_merge($style_formats, json_decode($settings['style_formats'])) : '';

    // Json Encode Formats
    $settings['style_formats'] = (! empty($merged_formats)) ? json_encode($merged_formats) : json_encode($style_formats);

    return $settings;
});
