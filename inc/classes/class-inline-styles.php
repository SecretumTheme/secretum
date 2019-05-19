<?php
/**
 * Feature Class
 *
 * @package    Secretum
 * @subpackage Classes
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-inline-styles.php
 * @since      1.4.0
 */

namespace Secretum;

/**
 * Render CSS in document <head>
 *
 * @since 1.4.0
 */
class Inline_Styles {
	/**
	 * Theme Mod Settings
	 *
	 * @since 1.4.0
	 * @var object
	 */
	private $theme_mod = [];


	/**
	 * Set Class Vars
	 *
	 * @since 1.4.0
	 */
	final public function __construct() {
		$theme_mod       = new \Secretum\Theme_Mod();
		$this->theme_mod = $theme_mod->settings();

	}//end __construct()


	/**
	 * Get Setting From Secretum Option
	 *
	 * @since 1.4.0
	 *
	 * @param array $key Option key.
	 *
	 * @return array
	 */
	final public function get_setting( $key ) {
		if ( true !== empty( $this->theme_mod[ $key ] ) ) {
			return $this->theme_mod[ $key ];
		}

	}//end get_setting()


	/**
	 * Render CSS
	 *
	 * @since 1.4.0
	 */
	final public function styles() {
		$css = '';

		if ( null !== $this->get_setting( 'website_background_color' ) ) {
			$css .= $this->website_background_color( $this->get_setting( 'website_background_color' ) );
		}

		if ( null !== $this->get_setting( 'inline_primary_color' ) ) {
			$primary_color = $this->get_setting( 'inline_primary_color' );

			$primary_light_color = $primary_color;
			if ( null !== $this->get_setting( 'inline_primary_light_color' ) ) {
				$primary_light_color = $this->get_setting( 'inline_primary_light_color' );
			}

			$primary_dark_color = $primary_color;
			if ( null !== $this->get_setting( 'inline_primary_dark_color' ) ) {
				$primary_dark_color = $this->get_setting( 'inline_primary_dark_color' );
			}

			$css .= $this->primary_color( $primary_color, $primary_light_color, $primary_dark_color );
		}

		if ( null !== $this->get_setting( 'inline_secondary_color' ) ) {
			$css .= $this->secondary_color( $this->get_setting( 'inline_secondary_color' ) );
		}

		if ( null !== $this->get_setting( 'inline_background_color' ) ) {
			$css .= $this->background_color( $this->get_setting( 'inline_background_color' ) );
		}

		if ( null !== $this->get_setting( 'inline_text_color' ) ) {
			$css .= $this->text_color( $this->get_setting( 'inline_text_color' ) );
		}

		if ( null !== $this->get_setting( 'inline_text_alt_color' ) ) {
			$css .= $this->text_alt_color( $this->get_setting( 'inline_text_alt_color' ) );
		}

		if ( null !== $this->get_setting( 'inline_link_color' ) ) {
			$css .= $this->link_color( $this->get_setting( 'inline_link_color' ) );
		}

		if ( null !== $this->get_setting( 'inline_link_hover_color' ) ) {
			$css .= $this->link_hover_color( $this->get_setting( 'inline_link_hover_color' ) );
		}

		if ( null !== $this->get_setting( 'frontpage_heading_bg' ) ) {
			$css .= $this->background_image( $this->get_setting( 'frontpage_heading_bg' ) );
		}

		return trim( $css );

	}//end styles()


	/**
	 * Website Body Background Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param int $image_id Media ID.
	 *
	 * @return string CSS.
	 */
	final private function background_image( $image_id = '' ) {
		// If Background ID Set.
		if ( true !== empty( $image_id ) && is_numeric( $image_id ) ) {
			// Get Attachment Array.
			$image_src_array = wp_get_attachment_image_src( $image_id, 'full', false );

			// Set Img SRC Url.
			if ( isset( $image_src_array ) && isset( $image_src_array[0] ) ) {
				$image_src = esc_url( $image_src_array[0] );
			}
		}

		if ( false === isset( $image_src ) ) {
			return;
		}

		$css  = '';
		$css .= ".frontpage-heading { background-image:url( {$image_src} ); background-position:center;background-repeat:no-repeat;background-size:cover;height:100%;width:100%; }\n";
		return $css;
	}//end background_image()


	/**
	 * Primary Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $primary_color       Hex Value.
	 * @param string $primary_light_color Hex Value.
	 * @param string $primary_dark_color  Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function primary_color( $primary_color, $primary_light_color, $primary_dark_color ) {
		$text_color    = 'color: ' . $primary_color;
		$bg_color      = 'background-color: ' . $primary_color;
		$border_color  = 'border-color: ' . $primary_color;
		$primary_light = $primary_light_color;
		$primary_dark  = $primary_dark_color;

		$css  = '';
		$css .= ".btn-primary { {$bg_color} -webkit-gradient(linear, left top, left bottom, from({$primary_light}), to({$primary_color})) repeat-x; {$bg_color} -webkit-linear-gradient(top, {$primary_light}, {$primary_color}) repeat-x; {$bg_color} linear-gradient(180deg, {$primary_light}, {$primary_color}) repeat-x; {$border_color}; }\n";
		$css .= ".btn-primary:hover { background: {$primary_light} -webkit-gradient(linear, left top, left bottom, from({$primary_color}), to({$primary_light})) repeat-x; background: {$primary_light} -webkit-linear-gradient(top, {$primary_color}, {$primary_light}) repeat-x; background: {$primary_light} linear-gradient(180deg, {$primary_color}, {$primary_light}) repeat-x; border-color: {$primary_dark}; }\n";
		$css .= ".btn-outline-primary { {$text_color}; {$border_color}; }\n";
		$css .= ".btn-primary.search:focus, .btn-primary.search:hover { background-color: {$primary_light}; }\n";
		$css .= ".nav-pills .nav-link.active, .nav-pills .show > .nav-link, .badge-primary, .progress-bar { {$bg_color}; }\n";
		$css .= ".btn-outline-primary:hover, .btn-primary.search, .list-group-item.active { {$bg_color}; {$border_color}; }\n";
		$css .= ".bg-primary, .bg-primary-hover:hover, .bg-primary-hover:focus { {$bg_color} !important; }\n";
		$css .= ".bg-gradient-primary { {$bg_color} -webkit-gradient(linear, left top, left bottom, from({$primary_light}), to({$primary_color})) repeat-x !important; {$bg_color} -webkit-linear-gradient(top, {$primary_light}, {$primary_color}) repeat-x !important; {$bg_color} linear-gradient(180deg, {$primary_light}, {$primary_color}) repeat-x !important; }\n";
		$css .= ".border-primary { {$border_color} !important; }\n";
		$css .= ".text-primary, a.link, a.link-hover:hover, .link a, .link-hover a:hover { {$text_color} !important; }\n";
		$css .= ".dropdown-item.active, .dropdown-item:active { {$bg_color} -webkit-gradient(linear, left top, left bottom, from({$primary_light}), to({$primary_color})) repeat-x; {$bg_color} -webkit-linear-gradient(top, {$primary_light}, {$primary_color}) repeat-x; {$bg_color} linear-gradient(180deg, {$primary_light}, {$primary_color}) repeat-x; }\n";


		return $css;

	}//end primary_color()


	/**
	 * Secondary Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $secondary_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function secondary_color( $secondary_color ) {
		$text_color   = 'color: ' . $secondary_color;
		$bg_color     = 'background-color: ' . $secondary_color;
		$border_color = 'border-color: ' . $secondary_color;

		$css  = '';
		$css .= "caption, .blockquote-footer, .figure-caption, .form-check-input:disabled ~ .form-check-label, .btn-outline-secondary.disabled, .btn-outline-secondary:disabled, .btn-link:disabled, .btn-link.disabled, .dropdown-item.disabled, .dropdown-item:disabled, .dropdown-header, .nav-link.disabled, .nav-tabs .nav-link.disabled, .breadcrumb-item + .breadcrumb-item::before, .breadcrumb-item.active, .page-item.disabled .page-link, .list-group-item.disabled, .list-group-item:disabled, .toast-header, .content-area .entry-header h1.page-title, .content-area .entry-header h1.entry-title, .content-area .entry-header h2.entry-title, .content-area .entry-header h3.entry-title, h3.entry-title a:link, .widget h2.widget-title, .widget h3.widget-title, .widget h4.widget-title, .widget h2.widget-title a:link, .widget h3.widget-title a:link, .widget h4.widget-title a:link, .widget.widget_rss .rss-date, .widget.widget_rss li cite, .footer .widget .tagcloud a:link, .footer .widget .tagcloud a:active, .footer .widget .tagcloud a:visited { {$text_color}; }\n";
		$css .= ".form-control::-webkit-input-placeholder, .form-control::-moz-placeholder, .form-control:-ms-input-placeholder, .form-control::-ms-input-placeholder, .form-control::placeholder { {$text_color}; opacity: 1; }\n";
		$css .= ".btn-secondary, .btn-secondary.disabled, .btn-secondary:disabled, .btn-outline-secondary, .btn-outline-secondary:hover, .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle, a.comment-reply-link { {$bg_color}; {$border_color}; }\n";
		$css .= ".btn-outline-secondary { {$text_color}; {$border_color}; }\n";
		$css .= ".badge-secondary { {$bg_color}; }\n";
		$css .= ".bg-secondary, .bg-secondary-hover:hover, .bg-secondary-hover:focus { {$bg_color}; !important; }\n";
		$css .= ".border-secondary, .border-line { {$border_color}; !important; }\n";
		$css .= ".content-area .entry-content .example, .widget .calendar_wrap thead th, .widget .calendar_wrap tbody td { {$border_color}; }\n";
		$css .= ".text-secondary, .text-muted { {$bg_color}; !important; }\n";

		return $css;

	}//end secondary_color()


	/**
	 * Website Body Background Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $background_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function website_background_color( $background_color ) {
		return "body { background-color: {$background_color}; }\n";

	}//end website_background_color()


	/**
	 * Background Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $background_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function background_color( $background_color ) {
		$css  = ".body-bg, .body-bg-hover:hover, .body-bg-hover:focus { background-color: {$background_color}; !important; }\n";
		$css .= ".dropdown-menu, .modal-content, .popover, .carousel-indicators li { background-color: {$background_color}; }\n";

		return $css;

	}//end background_color()


	/**
	 * Text Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $text_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function text_color( $text_color ) {
		return "body, .text, pre, pre code, code.prettyprint, .content-area .post-navigation .nav-links .nav-previous a .nav-title .nav-subtitle, .content-area .post-navigation .nav-links .nav-next a .nav-title .nav-subtitle, .widget .calendar_wrap tbody td { color: {$text_color} !important; }\n";

	}//end text_color()


	/**
	 * Text Alt Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $text_alt_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function text_alt_color( $text_alt_color ) {
		return ".text-alt, .content-area .entry-content .page-links, .content-area .entry-content .page-links a, .content-area .post-navigation .nav-links .nav-previous a .nav-title, .content-area .post-navigation .nav-links .nav-next a .nav-title, .widget .calendar_wrap caption, .widget .calendar_wrap thead th { color: {$text_alt_color} !important; }\n";

	}//end text_alt_color()


	/**
	 * Link Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $link_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function link_color( $link_color ) {
		return "a, a.link, .link a { color: {$link_color} !important; }\n";

	}//end link_color()


	/**
	 * Link Hover Color CSS
	 *
	 * @since 1.4.0
	 *
	 * @param string $link_hover_color Hex Value.
	 *
	 * @return string CSS.
	 */
	final private function link_hover_color( $link_hover_color ) {
		return "a:hover, a.link-hover:hover, .link-hover a:hover { color: {$link_hover_color} !important; }\n";

	}//end link_hover_color()

}//end class
