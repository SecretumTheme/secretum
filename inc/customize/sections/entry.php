<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Entry
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/entry.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'entry',
	__( 'Entry', 'secretum' )
);


// Section.
$customizer->section(
	'entry_display',
	'entry',
	__( 'Display Settings', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_published_status',
	__( 'Hide Published Date', 'secretum' ),
	'',
	$defaults['entry_meta_published_status']
);


// Radio.
$customizer->radio(
	'entry_display',
	'entry_meta_link',
	__( 'Archive Link', 'secretum' ),
	'',
	$defaults['entry_meta_link'],
	array(
		'' 		=> __( 'No Archive Link', 'secretum' ),
		'month' => __( 'Link To Monthly Archive', 'secretum' ),
		'day' 	=> __( 'Link To Daily Archive', 'secretum' ),
		'post' 	=> __( 'Link To Current Post', 'secretum' ),
	)
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_updated_status',
	__( 'Show Updated Date', 'secretum' ),
	__( 'Only shows if an post has updated.', 'secretum' ),
	$defaults['entry_meta_updated_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_author_status',
	__( 'Hide Author Name', 'secretum' ),
	'',
	$defaults['entry_meta_author_status']
);


// Radio Select.
$customizer->radio(
	'entry_display',
	'entry_meta_author_link', __( 'Author Link', 'secretum' ),
	'',
	$defaults['entry_meta_author_link'],
	array(
		'' 			=> __( 'No Archive Link', 'secretum' ),
		'author' 	=> __( 'Link To Author Archive', 'secretum' ),
	)
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_catlinks_status',
	__( 'Hide Category Links', 'secretum' ),
	'',
	$defaults['entry_meta_catlinks_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_tagslinks_status',
	__( 'Hide Tag Links', 'secretum' ),
	'',
	$defaults['entry_meta_tagslinks_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_commentlink_status',
	__( 'Hide Comment Link', 'secretum' ),
	'',
	$defaults['entry_meta_commentlink_status']
);


// Checkbox.
$customizer->checkbox(
	'entry_display',
	'entry_meta_post_navigation_links',
	__( 'Hide Post Navigation Links', 'secretum' ),
	__( 'This feature is active when <!--nextpage--> is in use.', 'secretum' ),
	$defaults['entry_meta_post_navigation_links']
);


// Wrapper.
$wrapper->settings( [
	'section' => 'entry',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'entry_wrapper',
] );
