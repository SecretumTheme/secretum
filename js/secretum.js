/**
 * Secretum
 *
 * @package    Secretum
 * @subpackage Core\Assets
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/assets/secretum.js
 */

+ function ( $ ) {

	'use strict';

	/*!
	 * Toggle Sticky Class
	 * @source https://bootbites.com/articles/freebie-sticky-bootstrap-navbar-scroll-bootstrap-4/
	 */
	var stickyToggle = function( sticky, stickyWrapper, scrollElement ) {
		var stickyHeight = sticky.outerHeight();
		var stickyTop = stickyWrapper.offset().top;

		if ( scrollElement.scrollTop() >= stickyTop ) {

			stickyWrapper.height( stickyHeight );
			sticky.addClass( "is-sticky" );

		} else {

			sticky.removeClass( "is-sticky" );
			stickyWrapper.height( 'auto' );

		}
	};

	/*!
	 * Find "sticky-onscroll" Data Toggle
	 * @source https://bootbites.com/articles/freebie-sticky-bootstrap-navbar-scroll-bootstrap-4/
	 */
	$( '[data-toggle="sticky-onscroll"]' ).each( function() {
		var sticky = $( this );
		var stickyWrapper = $( '<div>' ).addClass( 'sticky-wrapper' );

		sticky.before( stickyWrapper );
		sticky.addClass( 'sticky' );

		$( window ).on( 'scroll.sticky-onscroll resize.sticky-onscroll', function() {
			stickyToggle( sticky, stickyWrapper, $( this ) );
		} );

		stickyToggle( sticky, stickyWrapper, $( window ) );
	} );

	/*!
	 * Scroll to top icon display
	 */
	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 50  ) {

			$( '.scrolltop:hidden' ).stop( true, true ).fadeIn();

		} else {

			$( '.scrolltop' ).stop( true, true ).fadeOut();

		}
	} );

	/*!
	 * Scroll to top click action
	 */
	$( function() {
		$( ".scroll" ).click( function() {
			$( "html,body" ).animate( { scrollTop:$( "#page" ).offset().top },"1000" ); return false;
		} );
	} );

	/*!
	 * Hamburger Toggle
	 */
	$( function() {
		$( '.navbar-ham' ).click( function() {
			$( this ).toggleClass( 'open' );
		} );
	} );

	/*!
	 * Ekko Lightbox Toggle
	 */
	$( document ).on( 'click', '[data-toggle="lightbox"]', function( event ) {
		event.preventDefault();
		$( this ).ekkoLightbox();
	} );

	/*!
	 * Add Video Body Class If Custom Header Video
	 */
	$( document ).on( 'wp-custom-header-video-loaded', function() {
		$( 'body' ).addClass( 'has-header-video' );
	} );

	/*!
	 * Make Dropdown Navbar Links Clickable
	 */
    $( '.navbar .dropdown.clickable > a' ).click( function() {
		location.href = this.href;
    } );
}( jQuery );
