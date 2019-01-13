<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'translations',
	__( 'Translations', 'secretum' )
);

// @about Section
$customizer->section(
	'wordpress_text',
	'translations',
	__( 'WordPress Text', 'secretum' ),
	__( 'HTML Allowed! To reset, delete the text from the input, then publish. To remove the text from displaying completely, delete the text and then add a single empty space, and publish.', 'secretum' )
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'continue_reading_text',
	__( 'Archive Continue Reading Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'read_more_text',
	__( 'Entry Read More <!--more--> Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'meta_categories_text',
	__( 'Post Meta Categories Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'meta_tags_text',
	__( 'Post Meta Tag Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'meta_leave_comment_text',
	__( 'Post Meta Leave Comment Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'meta_one_comment_text',
	__( 'Post Meta One Comment Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'meta_comments_text',
	__( 'Post Meta Multiple Comments Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'content_pages_text',
	__( 'Posts With Pages Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'prev_text',
	__( 'Previous Post Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'next_text',
	__( 'Next Post Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'search_button_placeholder',
	__( 'Search Button Placeholder Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'search_button_text',
	__( 'Search Button Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'navbar_search_button_text',
	__( 'Navbar Search Button Placeholder Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'navbar_search_button_title',
	__( 'Navbar Search Button Title Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'search_results_text',
	__( 'Search Results Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_older',
	__( 'Comment Nav Older Comments', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_newer',
	__( 'Comment Nav Newer Comments', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_title_single',
	__( 'Comments Title', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_title_thought',
	__( 'Comments Title Single Comment', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_title_thoughts',
	__( 'Comments Title Multiple Comments', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_closed',
	__( 'Comments Closed', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comments_required',
	__( 'Indicates Required Field', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'commenter_name',
	__( 'Comment Form Name Label', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'commenter_email',
	__( 'Comment Form Email Label', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'commenter_website',
	__( 'Comment Form Website Label', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'commenter_comment',
	__( 'Comment Form Comment Label', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comment_privacy',
	__( 'Comment Email Privacy Notice', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comment_add_title',
	__( 'Add Comment Button Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'comment_post_label',
	__( 'Post Comment Button Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'author_about_text',
	__( 'Author About Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'author_website_text',
	__( 'Author Website Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'author_profile_text',
	__( 'Author Profile Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'author_posts_by_text',
	__( 'Author By Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'author_posted_text',
	__( 'Author Posts Posted Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'author_categories_text',
	__( 'Author Posts Categories Text', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'nothing_found_title_text',
	__( 'Default No Content Title', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'nothing_found_text',
	__( 'Default No Content Found', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'error_document_title',
	__( 'Error Document Title', 'secretum' ),
	''
);

// @about Text Translate
$customizer->text_translate(
	'wordpress_text',
	'error_document_text',
	__( 'Error Document Notice Text', 'secretum' ),
	''
);

// @about Section
$customizer->section(
	'woocommerce_text',
	'translations',
	__( 'WooCommerce Bookings Text', 'secretum' ),
	__( 'HTML Allowed! To reset, delete the text from the input, then publish. To remove the text from displaying completely, delete the text and then add a single empty space, and publish.', 'secretum' )
);

// @about Text Translate
$customizer->text_translate(
	'woocommerce_text',
	'booking_cart_title',
	__( 'Select A Booking Cart Title', 'secretum' ),
	''
);
