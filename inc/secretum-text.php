<?php
/**
 * WordPress Text Strings
 *
 * @package Secretum
 */

namespace Secretum;

/**
 * Textual Adjustments
 *
 * @example echo secretum_text( 'array_key_for_text_string' );
 *
 * @param string $key Array Key To Get Value Of.
 * @param string $echo True to return.
 * @return string Sanitized Text String
 */
function secretum_text( $key, $echo = false ) {
	// @about Text Strings To Translate
	$array = [
		'prev_text'						=> __( 'Previous Post', 'secretum' ),
		'next_text'						=> __( 'Next Post', 'secretum' ),
		'meta_categories_text'			=> __( 'Posted in', 'secretum' ),
		'meta_tags_text'				=> __( 'Tagged', 'secretum' ),
		'content_pages_text' 			=> __( 'Pages:', 'secretum' ),
		'meta_leave_comment_text'		=> __( 'Leave a comment', 'secretum' ),
		'meta_one_comment_text'			=> __( '1 Comment', 'secretum' ),
		'comments_older'				=> __( '&larr; Older Comments', 'secretum' ),
		'comments_newer'				=> __( 'Newer Comments &rarr;', 'secretum' ),
		'comments_title_single'			=> __( 'One thought on', 'secretum' ),
		'comments_title_thought'		=> __( 'thought on', 'secretum' ),
		'comments_title_thoughts'		=> __( 'thoughts on', 'secretum' ),
		'comments_closed'				=> __( 'Comments are currently closed.', 'secretum' ),
		'comments_required'				=> __( 'Indicates Required Field', 'secretum' ),
		'commenter_name'				=> __( 'Name', 'secretum' ),
		'commenter_email'				=> __( 'Email', 'secretum' ),
		'commenter_website'				=> __( 'Website', 'secretum' ),
		'commenter_comment'				=> __( 'Comment', 'secretum' ),
		'comment_privacy'				=> __( 'Your email address will not be published.', 'secretum' ),
		'comment_add_title'				=> __( 'Add Your Comment', 'secretum' ),
		'comment_post_label'			=> __( 'Post Your Comment', 'secretum' ),
		'meta_comments_text'			=> __( 'Comments', 'secretum' ),
		'author_about_text'				=> __( 'About:', 'secretum' ),
		'author_website_text'			=> __( 'Website:', 'secretum' ),
		'author_profile_text'			=> __( 'Profile:', 'secretum' ),
		'author_posts_by_text'			=> __( 'Posts by', 'secretum' ),
		'author_posted_text'			=> __( 'Posted', 'secretum' ),
		'author_categories_text'		=> __( 'in', 'secretum' ),
		'error_document_title'			=> __( 'Oops! That document could not be found.', 'secretum' ),
		'error_document_text'			=> __( 'It appears the document you requested no longer exists at this location. Try searching for the document below or browsing one of our other helpful links.', 'secretum' ),
		'search_button_text'			=> __( 'Search Us! ', 'secretum' ),
		'search_button_placeholder'		=> __( 'Search our site...', 'secretum' ),
		'search_results_text' 			=> __( 'Search Results for:', 'secretum' ),
		'navbar_search_button_text'		=> __( 'Search our site...', 'secretum' ),
		'navbar_search_button_title'	=> __( 'Press Enter To Search...', 'secretum' ),
		'continue_reading_text' 		=> __( 'Continue Reading...', 'secretum' ),
		'read_more_text' 				=> __( 'Read More...', 'secretum' ),
		'nothing_found_title_text' 		=> __( 'Nothing Found', 'secretum' ),
		'nothing_found_text' 			=> __( 'It seems we are unable find what you are looking for. Perhaps searching can help.', 'secretum' ),
		'booking_cart_title' 			=> __( 'Select A Date To View Available Times', 'secretum' ),
	];

	$string = '';

	// @about If Key Exists
	if ( array_key_exists( $key, $array ) ) {
		// @about Get Theme Mod Text
		$text_value = secretum_mod( $key, 'raw' );

		// @about If Text Option Mod Set
		if ( ! empty( $text_value ) ) {
			// @about Clear Duplicate & Empty Option and Return Value
			if ( isset( $array[ $key ] ) && $array[ $key ] === $text_value || isset( $text_value ) && empty( $text_value ) ) {
				// @about Get Option
				$get_option = get_option( 'secretum', [] );

				// @about Remove From Array
				unset( $get_option[ $key ] );

				// @about Update Secretum Option
				update_option( 'secretum', $get_option );

				// @about Raw Value
				$string = $array[ $key ];
			} else {
				// @about Filter Value For Display
				$string = filter_var( html_entity_decode( $text_value ), FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH );
			}
		} else {
			// @about Else Return Text String
			// @about Clear Empty Option
			if ( isset( $text_value ) && empty( $text_value ) ) {
				// @about Get Option
				$get_option = get_option( 'secretum', [] );

				// @about Remove From Array
				unset( $get_option[ $key ] );

				// @about Update Secretum Option
				update_option( 'secretum', $get_option );
			}

			// @about Raw Value
			$string = $array[ $key ];
		}

		if ( true === $echo ) {
			// @about Sanitize Echo
			echo wp_kses_post( $string );
		} else {
			// @about Return String
			return wp_kses_post( $string );
		}
	}// End if().
}
