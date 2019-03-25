<?php
/**
 * Global Template Styling Functions
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Author
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-classes.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Theme Base Background Color
 *
 * @see inc/template-filters.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_theme_background_color() {
	return Classes_Theme::instance()->classes(
		'return',
		[
			'bg_colors' => true,
		]
	);

}//end secretum_theme_background_color()


/**
 * Theme Base Textual Classes
 *
 * @see header.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_theme_textual() {
	return Classes_Theme::instance()->classes(
		'echo',
		[
			'textuals' => true,
		]
	);

}//end secretum_theme_textual()


/**
 * Theme Base Text/Link Font Classes
 *
 * @see header.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_theme_text_link() {
	return Classes_Theme::instance()->classes(
		'echo',
		[
			'text_link' => true,
		]
	);

}//end secretum_theme_text_link()


/**
 * Display Wrapper Classes
 *
 * @param string $section Required Wrapper Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 * @param array  $args    [ 'borders' => true, 'textuals' => true ].
 *
 * @example secretum_wrapper( 'header' );
 * @example secretum_wrapper( 'header_top', 'return' );
 *
 * @see inc/classes/class-classes-wrappers.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_wrapper( $section, $return = 'echo', $args = [] ) {
	return Classes_Wrappers::instance()->classes( $section, $return, $args );

}//end secretum_wrapper()


/**
 * Display Container Classes
 *
 * @param string $section Required Container Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 * @param array  $args    [ 'borders' => true, 'textuals' => true ].
 *
 * @example secretum_container( 'header' );
 * @example secretum_container( 'header_top', 'return', [
			'textuals' => true
		] );
 *
 * @see inc/classes/class-classes-containers.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_container( $section, $return = 'echo', $args = [] ) {
	return Classes_Containers::instance()->classes( $section, $return, $args );

}//end secretum_container()


/**
 * Display Textual Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 *
 * @example secretum_textuals( 'header' );
 * @example secretum_textuals( 'header_top', 'return', [
			'textuals' => true
		] );
 *
 * @see inc/classes/class-classes-textuals.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_textual( $section, $return = 'echo' ) {
	return Classes_Textuals::instance()->classes( $section, $return );

}//end secretum_textual()


/**
 * Display Alignment Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 * @param array  $args    [ 'margins' => true, 'text' => true || 'text' => 'sub-section' ].
 *
 * @example secretum_alignments( 'header' );
 * @example secretum_alignments( 'header_top', 'return', [
			'margins' => true, 'text' => true
		] );
 * @example secretum_alignments( 'header_top', 'return', [
			'margins' => true, 'text' => 'items'
		] );
 *
 * @see inc/classes/class-classes-alignments.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_alignment( $section, $return = 'echo', $args = [] ) {
	return Classes_Alignments::instance()->classes( $section, $return, $args );

}//end secretum_alignment()


/**
 * Display Nav Item Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 *
 * @example secretum_nav_items( 'header_top' );
 *
 * @see inc/classes/class-classes-nav-items.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_nav_item( $section, $return = 'return' ) {
	return Classes_Nav_Items::instance()->classes( $section, $return );

}//end secretum_nav_item()


/**
 * Display Nav Dropdown Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 *
 * @example secretum_dropdowns( 'copyright_nav' );
 *
 * @see inc/classes/class-classes-nav-dropdowns.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_nav_dropdown( $section, $return = 'return' ) {
	return Classes_Nav_Dropdowns::instance()->classes( $section, $return );

}//end secretum_nav_dropdown()


/**
 * Display Nav Toggler Wrapper Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 *
 * @example secretum_toggler_wrapper( 'primary_nav' );
 *
 * @see inc/classes/class-classes-nav-togglers.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_nav_toggler_wrapper( $section, $return = 'echo' ) {
	return Classes_Nav_Togglers::instance()->classes( $section, $return );

}//end secretum_nav_toggler_wrapper()


/**
 * Display Nav Toggler Icon Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 *
 * @example secretum_nav_toggler_icon( 'primary_nav' );
 *
 * @see inc/classes/class-classes-nav-toggler-icons.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_nav_toggler_icon( $section, $return = 'echo' ) {
	return Classes_Nav_Toggler_Icons::instance()->classes( $section, $return );

}//end secretum_nav_toggler_icon()


/**
 * Display Nav Cart Link Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 *
 * @example secretum_nav_cart_link( 'primary_nav' );
 *
 * @see inc/classes/class-classes-nav-cart-link.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_nav_cart_link( $section, $return = 'return' ) {
	return Classes_Nav_Cart_Link::instance()->classes( $section, $return );

}//end secretum_nav_cart_link()


/**
 * Display Nav Cart Link Classes
 *
 * @param string $section Required Textuals Section Name.
 * @param string $return  Required Valid Values: 'return' or 'echo'.
 * @param array  $args    [ 'type' => 'icon' || 'type' => 'count' ].
 *
 * @example secretum_nav_cart_textuals( 'primary_nav', 'return', [
			'type' => 'icon'
		] );
 * @example secretum_nav_cart_textuals( 'primary_nav', 'return', [
			'type' => 'count'
		] );
 *
 * @see inc/classes/class-classes-nav-cart-textuals.php
 *
 * @return string Classes List.
 * @since 1.0.0
 */
function secretum_nav_cart_textual( $section, $return = 'return', $args = [] ) {
	return Classes_Nav_Cart_Textuals::instance()->classes( $section, $return, $args );

}//end secretum_nav_cart_textual()
