<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


// Setting :: Comment Nav Older Comments
$wp_customize->add_setting('secretum[comments_older]', array(
	'default' 			=> htmlentities(secretum_text('comments_older')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Nav Older Comments
$wp_customize->add_control('secretum[comments_older]', array(
	'label' 			=> __('Comment Nav Older Comments', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comment Nav Newer Comments
$wp_customize->add_setting('secretum[comments_newer]', array(
	'default' 			=> htmlentities(secretum_text('comments_newer')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Nav Newer Comments
$wp_customize->add_control('secretum[comments_newer]', array(
	'label' 			=> __('Comment Nav Newer Comments', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comments Title
$wp_customize->add_setting('secretum[comments_title_single]', array(
	'default' 			=> htmlentities(secretum_text('comments_title_single')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comments Title
$wp_customize->add_control('secretum[comments_title_single]', array(
	'label' 			=> __('Comments Title', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comments Title Single Comment
$wp_customize->add_setting('secretum[comments_title_thought]', array(
	'default' 			=> htmlentities(secretum_text('comments_title_thought')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comments Title Single Comment
$wp_customize->add_control('secretum[comments_title_thought]', array(
	'label' 			=> __('Comments Title Single Comment', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comments Title Multiple Comments
$wp_customize->add_setting('secretum[comments_title_thoughts]', array(
	'default' 			=> htmlentities(secretum_text('comments_title_thoughts')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comments Title Multiple Comments
$wp_customize->add_control('secretum[comments_title_thoughts]', array(
	'label' 			=> __('Comments Title Multiple Comments', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comments Closed
$wp_customize->add_setting('secretum[comments_closed]', array(
	'default' 			=> htmlentities(secretum_text('comments_closed')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comments Closed
$wp_customize->add_control('secretum[comments_closed]', array(
	'label' 			=> __('Comments Closed', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Indicates Required Field
$wp_customize->add_setting('secretum[comments_required]', array(
	'default' 			=> htmlentities(secretum_text('comments_required')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Indicates Required Field
$wp_customize->add_control('secretum[comments_required]', array(
	'label' 			=> __('Indicates Required Field', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comment Form Name Label
$wp_customize->add_setting('secretum[commenter_name]', array(
	'default' 			=> htmlentities(secretum_text('commenter_name')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Form Name Label
$wp_customize->add_control('secretum[commenter_name]', array(
	'label' 			=> __('Comment Form Name Label', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comment Form Email Label
$wp_customize->add_setting('secretum[commenter_email]', array(
	'default' 			=> htmlentities(secretum_text('commenter_email')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Form Email Label
$wp_customize->add_control('secretum[commenter_email]', array(
	'label' 			=> __('Comment Form Email Label', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comment Form Website Label
$wp_customize->add_setting('secretum[commenter_website]', array(
	'default' 			=> htmlentities(secretum_text('commenter_website')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Form Website Label
$wp_customize->add_control('secretum[commenter_website]', array(
	'label' 			=> __('Comment Form Website Label', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comment Form Comment Label
$wp_customize->add_setting('secretum[commenter_comment]', array(
	'default' 			=> htmlentities(secretum_text('commenter_comment')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Form Comment Label
$wp_customize->add_control('secretum[commenter_comment]', array(
	'label' 			=> __('Comment Form Comment Label', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Comment Email Privacy Notice
$wp_customize->add_setting('secretum[comment_privacy]', array(
	'default' 			=> htmlentities(secretum_text('comment_privacy')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Comment Email Privacy Notice
$wp_customize->add_control('secretum[comment_privacy]', array(
	'label' 			=> __('Comment Email Privacy Notice', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Add Comment Button Text
$wp_customize->add_setting('secretum[comment_add_title]', array(
	'default' 			=> htmlentities(secretum_text('comment_add_title')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Add Comment Button Text
$wp_customize->add_control('secretum[comment_add_title]', array(
	'label' 			=> __('Add Comment Button Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: 
$wp_customize->add_setting('secretum[comment_post_label]', array(
	'default' 			=> htmlentities(secretum_text('comment_post_label')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Post Comment Button Text
$wp_customize->add_control('secretum[comment_post_label]', array(
	'label' 			=> __('Post Comment Button Text', 'secretum'),
	'description' 		=> 'Text Only.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));
