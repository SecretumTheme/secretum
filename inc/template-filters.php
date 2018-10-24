<?php
/**
 * WordPress Filters
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
		

/**
 * Inject Classes Into Post Navigation Container
 *
 * @param  string $template Default Nav Container
 * @return string Updated NAV Container
 */
add_filter('navigation_markup_template', function($template) {
    return '<nav class="container navigation post-navigation py-5" role="navigation">
            <h2 class="screen-reader-text">%2$s</h2>
            <div class="nav-links">%3$s</div>
    		</nav>';
});


/**
 * WordPress Replace [...] In Excerpts With Read More Button
 *
 * @example apply_filters('secretum_read_more_text', '');
 *
 * @param string $excerpt The Excerpt
 * @return string The Excerpt
 */
add_filter('excerpt_more', function($excerpt) {
	return str_replace(
		' [&hellip;]',
		'<p class="text-right"><a class="btn btn-secondary" href="' . esc_url(get_permalink(get_the_ID())) . '">' . apply_filters('secretum_read_more_text', __('Read More...', 'secretum')) . '</a></p>',
		$excerpt
	);
});


/**
 * Remove hentry class on pages
 *
 * @param array $classes List of body classes
 * @return array Updated body class array
 */
add_filter('post_class', function($classes) {
    if (is_page()) {
    	$classes = array_diff($classes, array('hentry'));
    }

    return $classes;
});


/**
 * Update WordPress classes in <body>
 *
 * @param array $classes WordPress <body> classes
 * @return array Updated <body> classes
 */
add_filter('body_class', function($classes) {
	// Remove tag Class
	foreach($classes as $key => $class) {
		if ($class == 'tag') {
			unset($classes[$key]);
		}
	}

	// Add group-blog Class
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	// Add hfeed Class
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Add has-header-image to custom header
	if (has_header_image()) {
		$classes[] = 'has-header-image';
	}

	// Add has-header-image to custom header
	if (has_header_image()) {
		$classes[] = 'has-header-image';
	}

	// Add secretum-front-page class to front page
	if (is_front_page() && 'posts' !== get_option('show_on_front')) {
		$classes[] = 'secretum-front-page';
	}

	return $classes;
}, 20, 2);


/**
 * Modify Default Comment Form Settings
 *
 * @param  array $defaults Comment Form Defaults
 * @return array Updated Comment Form
 */
add_filter('comment_form_defaults', function($defaults) {;
	$commenter     = wp_get_current_commenter();
	$req           = get_option('require_name_email');
	$aria_req      = ($req ? " aria-required='true'" : '');

	$fields =  array(
		'author' => '<p class="form-group comment-form-author"><label for="author">' . apply_filters('secretum_text', 'commenter_name') . '</label>' . ($req ? ' <span class="required">*</span>' : '') . '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
		'email'  => '<p class="form-group comment-form-email"><label for="email">' . apply_filters('secretum_text', 'commenter_email') . '</label>' . ($req ? ' <span class="required">*</span>' : '') . '<input class="form-control" id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
		'url'    => '<p class="form-group comment-form-url"><label for="url">' . apply_filters('secretum_text', 'commenter_website') . '</label>' . '<input class="form-control" id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>',
	);

	$defaults['comment_field'] 			= '<div class="form-group comment-form-comment"><label for="comment">' . apply_filters('secretum_text', 'commenter_comment') . ' <span class="required">*</span></label>' . '<textarea class="form-control" id="comment" name="comment" aria-required="true" cols="45" rows="8"></textarea></div>';
	$defaults['comment_notes_before'] 	= sprintf(__('%s %s', 'secretum'), '<span class="required">*</span>', apply_filters('secretum_text', 'comments_required'));
	$defaults['comment_notes_after'] 	= '<p class="comment-notes">' . apply_filters('secretum_text', 'comment_privacy') . '</p>';
	$defaults['title_reply'] 			= apply_filters('secretum_text', 'comment_add_title');
	$defaults['label_submit'] 			= apply_filters('secretum_text', 'comment_post_label');
	$defaults['class_submit'] 			= 'btn btn-secondary';
	$defaults['fields'] 				= apply_filters('comment_form_default_fields', $fields);

	return $defaults;
});
