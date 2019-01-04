<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Panel
$customizer->panel(
    'translations',
    __('Translations', 'secretum')
);

// Section
$customizer->section(
    'wordpress_text',
    'translations',
    __('WordPress Text', 'secretum'),
    __('HTML Allowed! To reset, delete the text from the input, then publish. To remove the text from displaying completely, delete the text and then add a single empty space, and publish.', 'secretum')
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'continue_reading_text',
    __('Archive Continue Reading Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'read_more_text',
    __('Entry Read More <!--more--> Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'meta_categories_text',
    __('Post Meta Categories Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'meta_tags_text',
    __('Post Meta Tag Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'meta_leave_comment_text',
    __('Post Meta Leave Comment Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'meta_one_comment_text',
    __('Post Meta One Comment Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'meta_comments_text',
    __('Post Meta Multiple Comments Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'content_pages_text',
    __('Posts With Pages Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'prev_text',
    __('Previous Post Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'next_text',
    __('Next Post Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'search_button_placeholder',
    __('Search Button Placeholder Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'search_button_text',
    __('Search Button Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'navbar_search_button_text',
    __('Navbar Search Button Placeholder Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'navbar_search_button_title',
    __('Navbar Search Button Title Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'search_results_text',
    __('Search Results Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_older',
    __('Comment Nav Older Comments', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_newer',
    __('Comment Nav Newer Comments', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_title_single',
    __('Comments Title', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_title_thought',
    __('Comments Title Single Comment', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_title_thoughts',
    __('Comments Title Multiple Comments', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_closed',
    __('Comments Closed', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comments_required',
    __('Indicates Required Field', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'commenter_name',
    __('Comment Form Name Label', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'commenter_email',
    __('Comment Form Email Label', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'commenter_website',
    __('Comment Form Website Label', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'commenter_comment',
    __('Comment Form Comment Label', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comment_privacy',
    __('Comment Email Privacy Notice', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comment_add_title',
    __('Add Comment Button Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'comment_post_label',
    __('Post Comment Button Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'author_about_text',
    __('Author About Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'author_website_text',
    __('Author Website Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'author_profile_text',
    __('Author Profile Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'author_posts_by_text',
    __('Author By Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'author_posted_text',
    __('Author Posts Posted Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'author_categories_text',
    __('Author Posts Categories Text', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'nothing_found_title_text',
    __('Default No Content Title', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'nothing_found_text',
    __('Default No Content Found', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'error_document_title',
    __('Error Document Title', 'secretum'),
    ''
);

// Text Translate
$customizer->textTranslate(
    'wordpress_text',
    'error_document_text',
    __('Error Document Notice Text', 'secretum'),
    ''
);

// Section
$customizer->section(
    'woocommerce_text',
    'translations',
    __('WooCommerce Bookings Text', 'secretum'),
    __('HTML Allowed! To reset, delete the text from the input, then publish. To remove the text from displaying completely, delete the text and then add a single empty space, and publish.', 'secretum')
);

// Text Translate
$customizer->textTranslate(
    'woocommerce_text',
    'booking_cart_title',
    __('Select A Booking Cart Title', 'secretum'),
    ''
);
