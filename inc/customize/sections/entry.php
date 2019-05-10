<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/entry.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'entry',
	__( 'Content Entry', 'secretum' ),
	__( 'Content entry area contains all archive listings and content bodies for posts and pages. It includes post titles, date, author, categories, tags, and all related post content.', 'secretum' )
);


// Section.
$customizer->section(
	'entry_display',
	'entry',
	__( 'Display Settings', 'secretum' ),
	__( 'Post/page content entry area. Open any post to view the entry area.', 'secretum' )
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_status',
	__( 'Entry Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['entry_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_published_status',
	__( 'Published Date', 'secretum' ),
	__( 'Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_published_status']
);


// Radio.
$customizer->radio(
	'entry_display',
	'entry_meta_link',
	__( 'Published Date Link', 'secretum' ),
	'',
	$defaults['entry_meta_link'],
	array(
		''      => __( 'No Link', 'secretum' ),
		'month' => __( 'Link To Monthly Archive', 'secretum' ),
		'day'   => __( 'Link To Daily Archive', 'secretum' ),
		'post'  => __( 'Link To Current Post', 'secretum' ),
	)
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_updated_status',
	__( 'Post Updated Date', 'secretum' ),
	__( 'Displays only if the post has updated. Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_updated_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_author_status',
	__( 'Author Name', 'secretum' ),
	__( 'Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_author_status']
);


// Radio Select.
$customizer->radio(
	'entry_display',
	'entry_meta_author_link',
	__( 'Author Name Link', 'secretum' ),
	'',
	$defaults['entry_meta_author_link'],
	array(
		''       => __( 'No Link', 'secretum' ),
		'author' => __( 'Link To Author Archive', 'secretum' ),
	)
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_catlinks_status',
	__( 'Category Links', 'secretum' ),
	__( 'Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_catlinks_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_tagslinks_status',
	__( 'Tag Links', 'secretum' ),
	__( 'Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_tagslinks_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_commentlink_status',
	__( 'Comment Link', 'secretum' ),
	__( 'Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_commentlink_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_post_navigation_links',
	__( 'Post Navigation Links (Previous & Next Post)', 'secretum' ),
	__( 'Select to display. Uncheck to hide.', 'secretum' ),
	$defaults['entry_meta_post_navigation_links']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'entry',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'entry_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'entry',
		'type'    => false,
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'entry_container',
	]
);


// Typography.
$textuals->settings(
	[
		'section'   => 'entry',
		'alignment' => false,
	]
);
