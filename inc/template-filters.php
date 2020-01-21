<?php
/**
 * WordPress Filters
 *
 * @package    Secretum
 * @subpackage Core\Template-Filters
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-filters.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Replaces [...] In Archive Excerpts
 *
 * @since 1.0.0
 *
 * @param string $excerpt The Excerpt.
 *
 * @return string Updated Excerpt
 */
function secretum_excerpt_more( $excerpt ) {
	// Return Default If Within Admin.
	if ( true === is_admin() ) {
		return $excerpt;
	}

	// Frontend.
	return str_replace(
		' [&hellip;]',
		'<p class="text-right"><span class="screen-reader-text">' . secretum_text( 'continue_reading_text' ) . ' ' . get_the_title() . '</span><a class="btn btn-secondary continue-reading" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . secretum_text( 'continue_reading_text' ) . '</a></p>',
		$excerpt
	);

}//end secretum_excerpt_more()

add_filter( 'excerpt_more', 'Secretum\secretum_excerpt_more' );


/**
 * Replaces ( ... ) In <! --more--> Tagged Posts
 *
 * @since 1.0.0
 *
 * @return string Html Button & Text
 */
function secretum_content_more_link() {
	return '<p class="text-right"><span class="screen-reader-text">' . secretum_text( 'read_more_text' ) . '</span><a class="btn btn-secondary" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . secretum_text( 'read_more_text' ) . '</a></p>';

}//end secretum_content_more_link()

add_filter( 'the_content_more_link', 'Secretum\secretum_content_more_link' );


/**
 * Remove hentry class on pages
 *
 * @since 1.0.0
 *
 * @param array $classes List of body classes.
 *
 * @return array Updated body class array
 */
function secretum_post_class( $classes ) {
	if ( is_page() ) {
		$classes = array_diff( $classes, [ 'hentry' ] );
	}

	return $classes;

}//end secretum_post_class()

add_filter( 'post_class', 'Secretum\secretum_post_class' );


/**
 * Update WordPress classes in <body>
 *
 * @since 1.0.0
 *
 * @param array $classes WordPress <body> classes.
 *
 * @return array Updated <body> classes
 */
function secretum_body_class( $classes ) {
	// Remove tag Class.
	foreach ( $classes as $key => $class ) {
		if ( 'tag' === $class ) {
			unset( $classes[ $key ] );
		}
	}

	// Add group-blog Class.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add hfeed Class.
	if ( false === is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add secretum-front-page class to front.
	if ( is_front_page() ) {
		$classes[] = 'secretum-front-page';
	}

	// Add has-header-image to custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Inject Theme Background Color.
	$classes[] = secretum_theme_background_color();

	return $classes;

}//end secretum_body_class()

add_filter( 'body_class', 'Secretum\secretum_body_class', 20, 2 );


/**
 * Modify Default Comment Form Settings
 *
 * @since 1.0.0
 *
 * @param  array $defaults Comment Form Defaults.
 * @return array Updated Comment Form
 */
function secretum_comment_form_defaults( $defaults ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );

	$fields = [
		'author' => '<p class="form-group comment-form-author"><label for="author">' . secretum_text( 'commenter_name', false ) . '</label>' . ( $req ? ' <span class="required">*</span>' : '' ) . '<input class="form-control" id="author" name="author" type="text" value="' . esc_html( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
		'email'  => '<p class="form-group comment-form-email"><label for="email">' . secretum_text( 'commenter_email', false ) . '</label>' . ( $req ? ' <span class="required">*</span>' : '' ) . '<input class="form-control" id="email" name="email" type="email" value="' . esc_html( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
		'url'    => '<p class="form-group comment-form-url"><label for="url">' . secretum_text( 'commenter_website', false ) . '</label> <input class="form-control" id="url" name="url" type="url" value="' . esc_url( $commenter['comment_author_url'] ) . '" size="30" /></p>',
	];

	$defaults['comment_field']        = '<div class="form-group comment-form-comment"><label for="comment">' . secretum_text( 'commenter_comment', false ) . ' <span class="required">*</span></label> <textarea class="form-control" id="comment" name="comment" aria-required="true" cols="45" rows="8"></textarea></div>';
	$defaults['comment_notes_before'] = '<span class="required">*</span> ' . secretum_text( 'comments_required', false );
	$defaults['comment_notes_after']  = '<p class="comment-notes">' . secretum_text( 'comment_privacy', false ) . '</p>';
	$defaults['title_reply_before']   = '<h2 id="reply-title" class="comment-reply-title">';
	$defaults['title_reply']          = secretum_text( 'comment_add_title', false );
	$defaults['title_reply_after']    = '</h2>';
	$defaults['label_submit']         = secretum_text( 'comment_post_label', false );
	$defaults['class_submit']         = 'btn btn-secondary';

	// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
	$defaults['fields'] = apply_filters( 'comment_form_default_fields', $fields );

	return $defaults;

}//end secretum_comment_form_defaults()

add_filter( 'comment_form_defaults', 'Secretum\secretum_comment_form_defaults' );
