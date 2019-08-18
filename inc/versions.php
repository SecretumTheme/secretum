<?php
/**
 * PHP & WordPress Version Compare Checks
 *
 * @package    Secretum
 * @subpackage Core\Versions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/versions.php
 * @since      1.1.1
 */

namespace Secretum;

/**
 * PHP 5.6+ Required Message
 *
 * @since 1.1.1
 */
function secretum_admin_notice_php_support() {
	$current = __( 'You are using PHP version', 'secretum' );
	$version = PHP_VERSION;
	$message = __( 'Secretum requires PHP 5.6 or greater. Please upgrade PHP and try again.', 'secretum' );

	echo wp_kses(
		"<div class=\"error\"><p>{$current} {$version} - {$message}</p></div>",
		[
			'p'   => true,
			'div' => [
				'class' => true,
			],
		]
	);

}//end secretum_admin_notice_php_support()


/**
 * Force All Previous Versions Use Theme Mod
 *
 * @since 1.5.0
 */
function secretum_version_update() {
	if ( true === get_theme_mod( 'secretum' ) ) {
		return;
	}

	if ( true === get_option( 'secretum' ) ) {
		set_theme_mod( 'secretum', get_option( 'secretum' ) );
		delete_option( 'secretum' );
	}

}//end secretum_version_update()

add_action( 'admin_init', 'Secretum\secretum_version_update' );


// PHP Version Check.
if ( true === version_compare( PHP_VERSION, '5.6', '<' ) ) {
	add_filter( 'template_include', '__return_null', 99 );

	switch_theme( WP_DEFAULT_THEME );

	$secretum_activated = filter_input(
		INPUT_GET,
		'activated',
		FILTER_SANITIZE_STRING,
		( FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK )
	);

	unset( $secretum_activated );

	add_action( 'admin_notices', 'Secretum\secretum_admin_notice_php_support' );

	return;
}


/**
 * WordPress 4.8+ Required Message
 *
 * @since 1.1.1
 */
function secretum_wordpress_support_message() {
	$current = __( 'You are using WordPress version', 'secretum' );
	$version = $GLOBALS['wp_version'];
	$message = __( 'Secretum requires WordPress 4.8 or greater. Please upgrade WordPress and try again.', 'secretum' );

	return "{$current} {$version} - {$message}";

}//end secretum_wordpress_support_message()


/**
 * WP Admin Area Notice : WordPress 4.8+ Required Message
 *
 * @since 1.1.1
 */
function secretum_admin_notice_wordpress_support() {
	$message = secretum_wordpress_support_message();

	echo wp_kses(
		"<div class=\"error\"><p>{$message}</p></div>",
		[
			'p'   => true,
			'div' => [
				'class' => true,
			],
		]
	);

}//end secretum_admin_notice_wordpress_support()


/**
 * Customize Admin Notice : WordPress 4.8+ Required Message
 *
 * @since 1.1.1
 */
function secretum_admin_notice_customizer() {
	wp_die(
		esc_html( secretum_wordpress_support_message() ),
		'',
		array(
			'back_link' => true,
		)
	);

}//end secretum_admin_notice_customizer()


/**
 * Preview Admin Notice : WordPress 4.8+ Required Message
 *
 * @since 1.1.1
 */
function secretum_admin_notice_previewer() {
	if ( true === filter_input( INPUT_GET, 'preview' ) ) {
		wp_die(
			esc_html( secretum_wordpress_support_message() )
		);
	}

}//end secretum_admin_notice_previewer()


// WordPress Version Check.
if ( true === version_compare( $GLOBALS['wp_version'], '4.8', '<' ) ) {
	switch_theme( WP_DEFAULT_THEME );

	$secretum_activated = filter_input(
		INPUT_GET,
		'activated',
		FILTER_SANITIZE_STRING,
		( FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK )
	);

	unset( $secretum_activated );

	// Admin Notice.
	add_action( 'admin_notices', 'Secretum\secretum_admin_notice_wordpress_support' );

	// Customizer Notice.
	add_action( 'load-customize.php', 'Secretum\secretum_admin_notice_customizer' );

	// Previewer Notice.
	add_action( 'template_redirect', 'Secretum\secretum_admin_notice_previewer' );

	return;
}
