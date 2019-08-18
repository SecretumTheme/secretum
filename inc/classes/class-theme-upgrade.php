<?php
/**
 * Manager Class
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Theme_Upgrade
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-theme-upgrade.php
 * @since      1.8.0
 */

namespace Secretum;

/**
 * Maybe Upgrade Theme
 *
 * @since 1.8.0
 */
class Theme_Upgrade {
	/**
	 * Maybe Init Update
	 *
	 * @since 1.8.0
	 */
	final public function __construct() {
		$this->version180_check();
	}//end __construct()


	/**
	 * Version 1.8.0 Update Check
	 *
	 * @since 1.8.0
	 */
	final private function version180_check() {
		if ( true === version_compare( SECRETUM_THEME_VERSION, '1.8.0', '>' ) ) {
			return;
		}

		/*
		 * Determines whether the current request is for an administrative interface page.
		 * https://developer.wordpress.org/reference/functions/is_admin/
		 */
		if ( true !== is_admin() ) {
			return;
		}

		/*
		 * Whether the current user has a specific capability.
		 * https://developer.wordpress.org/reference/functions/current_user_can/
		 */
		if ( false === current_user_can( 'manage_options' ) ) {
			return;
		}

		/*
		 * Whether the site is being previewed in the Customizer.
		 * https://developer.wordpress.org/reference/functions/is_customize_preview/
		 */
		if ( true === is_customize_preview() ) {
			return;
		}

		$this->version180_update();
	}//end version180_check()


	/**
	 * Maybe Do Version 1.8.0 Update
	 *
	 * @since 1.8.0
	 */
	final private function version180_update() {
		if ( true === secretum_mod( 'theme_color_palette' ) ) {
			$old_theme_color_palettes = [
				'bright-blue_bright-orange',
				'dark-blue_dark-magenta',
				'dodger-blue_dark-grayish-blue',
				'very-dark-blue_vivid-orange',
				'vivid-blue-dark-theme',
			];

			$theme_color_palette = secretum_mod( 'theme_color_palette', 'attr', false );

			if ( true === in_array( $theme_color_palette, $old_theme_color_palettes, true ) ) {
				/*
				 * Retrieve theme modification value for the current theme.
				 * https://developer.wordpress.org/reference/functions/get_theme_mod/
				 */
				$secretum_theme_mod = get_theme_mod( 'secretum', [] );

				unset( $secretum_theme_mod['theme_color_palette'] );

				if ( 'bright-blue_bright-orange' === $theme_color_palette ) {
					$secretum_theme_mod['theme_color_palette'] = 'lt_bright-blue_bright-orange';
				}

				if ( 'dark-blue_dark-magenta' === $theme_color_palette ) {
					$secretum_theme_mod['theme_color_palette'] = 'lt_dark-blue_dark-magenta';
				}

				if ( 'dodger-blue_dark-grayish-blue' === $theme_color_palette ) {
					$secretum_theme_mod['theme_color_palette'] = 'lt_dodger-blue_dark-grayish-blue';
				}

				if ( 'very-dark-blue_vivid-orange' === $theme_color_palette ) {
					$secretum_theme_mod['theme_color_palette'] = 'lt_very-dark-blue_vivid-orange';
				}

				if ( 'vivid-blue-dark-theme' === $theme_color_palette ) {
					$secretum_theme_mod['theme_color_palette'] = 'dt_vivid-blue_strong-red';
				}

				/*
				 * Update theme modification value for the current theme.
				 * https://developer.wordpress.org/reference/functions/set_theme_mod/
				 */
				set_theme_mod( 'secretum', $secretum_theme_mod );
			}
		}
	}//end version180_update()
}//end class
