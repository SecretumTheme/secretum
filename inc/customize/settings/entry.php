<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'entry',
	__( 'Entry', 'secretum' )
);

// @about Section
$customizer->section(
	'entry_display',
	'entry',
	__( 'Display Settings', 'secretum' ),
	''
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_published_status',
	__( 'Hide Published Date', 'secretum' ),
	'',
	$default['entry_meta_published_status']
);

// @about Radio
$customizer->radio(
	'entry_display',
	'entry_meta_link',
	__( 'Archive Link', 'secretum' ),
	'',
	$default['entry_meta_link'],
	array(
		'' 		=> __( 'No Archive Link', 'secretum' ),
		'month' => __( 'Link To Monthly Archive', 'secretum' ),
		'day' 	=> __( 'Link To Daily Archive', 'secretum' ),
		'post' 	=> __( 'Link To Current Post', 'secretum' ),
	)
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_updated_status',
	__( 'Show Updated Date', 'secretum' ),
	__( 'Only shows if an post has updated.', 'secretum' ),
	$default['entry_meta_updated_status']
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_author_status',
	__( 'Hide Author Name', 'secretum' ),
	'',
	$default['entry_meta_author_status']
);

// @about Radio Select
$customizer->radio(
	'entry_display',
	'entry_meta_author_link', __( 'Author Link', 'secretum' ),
	'',
	$default['entry_meta_author_link'],
	array(
		'' 			=> __( 'No Archive Link', 'secretum' ),
		'author' 	=> __( 'Link To Author Archive', 'secretum' ),
	)
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_catlinks_status',
	__( 'Hide Category Links', 'secretum' ),
	'',
	$default['entry_meta_catlinks_status']
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_tagslinks_status',
	__( 'Hide Tag Links', 'secretum' ),
	'',
	$default['entry_meta_tagslinks_status']
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_commentlink_status',
	__( 'Hide Comment Link', 'secretum' ),
	'',
	$default['entry_meta_commentlink_status']
);

// @about Checkbox
$customizer->checkbox(
	'entry_display',
	'entry_meta_post_navigation_links',
	__( 'Hide Post Navigation Links', 'secretum' ),
	__( 'This feature is active when <!--nextpage--> is in use.', 'secretum' ),
	$default['entry_meta_post_navigation_links']
);


// Wrapper.
\Secretum\Wrapper::instance( $customizer, $default )->settings( [
	'section' => 'entry',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'entry_wrapper',
] );
/**
// @about Wrapper
$customizer->section(
	'entry_wrapper',
	'entry',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around entry top area.', 'secretum' )
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['entry_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['entry_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['entry_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['entry_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['entry_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['entry_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'entry_wrapper',
	'entry_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['entry_wrapper_border_color'],
	secretum_customizer_border_colors()
);
*/