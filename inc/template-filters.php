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
add_filter( 'excerpt_more', function( $excerpt ) {
	return str_replace(
		' [&hellip;]',
		'<p class="text-right"><span class="screen-reader-text">' . secretum_text( 'continue_reading_text' ) . ' ' . get_the_title() . '</span><a class="btn btn-secondary continue-reading" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . secretum_text( 'continue_reading_text' ) . '</a></p>',
		$excerpt
	);
} );


/**
 * Replaces ( ... ) In <! --more--> Tagged Posts
 *
 * @since 1.0.0
 *
 * @return string Html Button & Text
 */
add_filter( 'the_content_more_link', function() {
	return '<p class="text-right"><span class="screen-reader-text">' . secretum_text( 'read_more_text' ) . '</span><a class="btn btn-secondary" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . secretum_text( 'read_more_text' ) . '</a></p>';
} );


/**
 * Remove hentry class on pages
 *
 * @since 1.0.0
 *
 * @param array $classes List of body classes.
 *
 * @return array Updated body class array
 */
add_filter( 'post_class', function( $classes ) {
	if ( is_page() ) {
		$classes = array_diff( $classes, [ 'hentry' ] );
	}

	return $classes;
} );


/**
 * Update WordPress classes in <body>
 *
 * @since 1.0.0
 *
 * @param array $classes WordPress <body> classes.
 *
 * @return array Updated <body> classes
 */
add_filter( 'body_class', function( $classes ) {
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

	// Add has-header-image to custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add has-header-image to custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add secretum-front-page class to front .
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'secretum-front-page';
	}

	$classes[] = secretum_theme_colors();
	$classes[] = secretum_theme_fonts();

	return $classes;
}, 20, 2 );


/**
 * Modify Default Comment Form Settings
 *
 * @since 1.0.0
 *
 * @param  array $defaults Comment Form Defaults.
 * @return array Updated Comment Form
 */
add_filter( 'comment_form_defaults', function( $defaults ) {
	$commenter 	= wp_get_current_commenter();
	$req 		= get_option( 'require_name_email' );
	$aria_req 	= ( $req ? " aria-required='true'" : '' );

	$fields = [
		'author' => '<p class="form-group comment-form-author"><label for="author">' . secretum_text( 'commenter_name', false ) . '</label>' . ( $req ? ' <span class="required">*</span>' : '' ) . '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
		'email'  => '<p class="form-group comment-form-email"><label for="email">' . secretum_text( 'commenter_email', false ) . '</label>' . ( $req ? ' <span class="required">*</span>' : '' ) . '<input class="form-control" id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
		'url'	=> '<p class="form-group comment-form-url"><label for="url">' . secretum_text( 'commenter_website', false ) . '</label> <input class="form-control" id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
	];

	$defaults['comment_field'] 			= '<div class="form-group comment-form-comment"><label for="comment">' . secretum_text( 'commenter_comment', false ) . ' <span class="required">*</span></label> <textarea class="form-control" id="comment" name="comment" aria-required="true" cols="45" rows="8"></textarea></div>';
	/* Translators: * Required field - 1) Astrick 2) see inc/secretum-text.php */
	$defaults['comment_notes_before'] 	= sprintf( __( '%1$s %2$s', 'secretum' ), '<span class="required">*</span>', secretum_text( 'comments_required', false ) );
	$defaults['comment_notes_after'] 	= '<p class="comment-notes">' . secretum_text( 'comment_privacy', false ) . '</p>';
	$defaults['title_reply'] 			= secretum_text( 'comment_add_title', false );
	$defaults['label_submit'] 			= secretum_text( 'comment_post_label', false );
	$defaults['class_submit'] 			= 'btn btn-secondary';
	$defaults['fields'] 				= apply_filters( 'comment_form_default_fields', $fields );

	return $defaults;
} );
