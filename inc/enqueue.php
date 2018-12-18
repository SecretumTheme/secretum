<?php
/**
 * Hook front end scripts and styles
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * WordPress Enqueue Action
 *
 * @source https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 */
add_action('wp_enqueue_scripts', function() {
    // Get Theme Object
	$theme = wp_get_theme();

    // Selected Style
    if(secretum_mod('enqueue_theme_colors')) {
        wp_enqueue_style(
            'secretum',
            SECRETUM_STYLE_URL . '/css/' . esc_attr(secretum_mod('enqueue_theme_colors', 'raw')) . '/theme.min.css',
            array(),
            $theme->get('Version'),
            'all'
        );

    // Default Style
    } else {
        wp_enqueue_style(
            'secretum',
            SECRETUM_STYLE_URL . '/css/theme.min.css',
            array(),
            $theme->get('Version'),
            'all'
        );
    }

    // Theme Scripts
    wp_enqueue_script(
        'secretum',
        SECRETUM_STYLE_URL . '/js/theme.min.js',
        array('jquery'),
        $theme->get('Version'),
        true
    );

    // Comments Form Scripts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // If Contact Page IDs Set
    if(secretum_mod('enqueue_contact_pageids')) {
        // Get Mod
        $pageids_mod = secretum_mod('enqueue_contact_pageids', 'raw');

        // No whitespace, no starting or trailing comma
        $strip_page_ids = preg_replace('/\s+/', '', trim($pageids_mod, ','));

        // Convert to array and filter to digits only
        $array_page_ids = array_filter(explode(",", $strip_page_ids), 'ctype_digit');

        // Dequeue on all other than allowed pages
        if (isset($array_page_ids) && is_array($array_page_ids) && !is_page($array_page_ids)) {
            wp_dequeue_style('contact-form-7');
            wp_dequeue_script('contact-form-7');
        }
    }
});
