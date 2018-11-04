/*!
 * Secretum Theme Scripts
 * @version 0.0.1
 */
+function ($) {

'use strict';

	// Variables and DOM Caching.
	var 	$body = $( 'body' ),
			$customHeader = $body.find( '.custom-header' ),
			$branding = $customHeader.find( '.site-branding' ),
			$navigation = $body.find( '.container-navigation' ),
			$navWrap = $navigation.find( '.container' ),
			$navMenuItem = $navigation.find( '.menu-item' ),
			$menuToggle = $navigation.find( '.menu-toggle' ),
			$menuScrollDown = $body.find( '.menu-scroll-down' ),
			$sidebar = $body.find( '#secondary' ),
			$entryContent = $body.find( '.entry-content' ),
			$formatQuote = $body.find( '.format-quote blockquote' ),
			isFrontPage = $body.hasClass( 'secretum-front-page' ) || $body.hasClass( 'home blog' ),
			navigationFixedClass = 'site-navigation-fixed',
			navigationHeight,
			navigationOuterHeight,
			navPadding,
			navMenuItemHeight,
			idealNavHeight,
			navIsNotTooTall,
			headerOffset,
		menuTop = 0,
		resizeTimer;


	// If navigation menu is present on page, setNavProps and adjustScrollClass.
	if ( $navigation.length ) {

		setNavProps();
		adjustScrollClass();

	}

	// Set properties of navigation.
	function setNavProps() {
		navigationHeight      = $navigation.height();
		navigationOuterHeight = $navigation.outerHeight();
		navPadding            = parseFloat( $navWrap.css( 'padding-top' ) ) * 2;
		navMenuItemHeight     = $navMenuItem.outerHeight() * 2;
		idealNavHeight        = navPadding + navMenuItemHeight;
		navIsNotTooTall       = navigationHeight <= idealNavHeight;
	}

	function adjustScrollClass() {

		// Make sure we're not on a mobile screen.
		if ( ! $menuToggle.css( 'display' ) ) {

			// Make sure the nav isn't taller than two rows.
			if ( navIsNotTooTall ) {

				// When there's a custom header image or video, the header offset includes the height of the navigation.
				if ( isFrontPage && ( $body.hasClass( 'has-header-image' ) || $body.hasClass( 'has-header-video' ) ) ) {

					headerOffset = $customHeader.innerHeight() - navigationOuterHeight;

				} else {

					headerOffset = $customHeader.innerHeight();

				}

				// If the scroll is more than the custom header, set the fixed class.
				if ( $( window ).scrollTop() >= headerOffset ) {

					$navigation.addClass( navigationFixedClass );

				} else {

					$navigation.removeClass( navigationFixedClass );

				}

			} else {

				// Remove 'fixed' class if nav is taller than two rows.
				$navigation.removeClass( navigationFixedClass );
			}
		}
	}

	// Set margins of branding in header.
	function adjustHeaderHeight() {
		if ( ! $menuToggle.css( 'display' ) ) {

			// The margin should be applied to different elements on front-page or home vs interior pages.
			if ( isFrontPage ) {
				$branding.css( 'margin-bottom', navigationOuterHeight );
			} else {
				$customHeader.css( 'margin-bottom', navigationOuterHeight );
			}

		} else {
			$customHeader.css( 'margin-bottom', '0' );
			$branding.css( 'margin-bottom', '0' );
		}
	}

	if ( $navigation.length ) {

		// On scroll, we want to stick/unstick the navigation.
		$( window ).on( 'scroll', function() {
			adjustScrollClass();
			//adjustHeaderHeight();
		});

		// Also want to make sure the navigation is where it should be on resize.
		$( window ).resize( function() {
			setNavProps();
			setTimeout( adjustScrollClass, 500 );
		});
	}


	/*!
	 * Toggle Sticky Class
	 * @source https://bootbites.com/articles/freebie-sticky-bootstrap-navbar-scroll-bootstrap-4/
	 */
	var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
		var stickyHeight = sticky.outerHeight();
		var stickyTop = stickyWrapper.offset().top;

		if (scrollElement.scrollTop() >= stickyTop){
			stickyWrapper.height(stickyHeight);
			sticky.addClass("is-sticky");
		} else {
			sticky.removeClass("is-sticky");
			stickyWrapper.height('auto');
		}
	};


	/*!
	 * Find "sticky-onscroll" Data Toggle
	 * @source https://bootbites.com/articles/freebie-sticky-bootstrap-navbar-scroll-bootstrap-4/
	 */
	$('[data-toggle="sticky-onscroll"]').each(function() {
		var sticky = $(this);
		var stickyWrapper = $('<div>').addClass('sticky-wrapper');

		sticky.before(stickyWrapper);
		sticky.addClass('sticky');

		$(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
			stickyToggle(sticky, stickyWrapper, $(this));
		});

		stickyToggle(sticky, stickyWrapper, $(window));
	});


	/*!
	 * Scroll to top icon display
	 */
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 50 ) {
	        $('.scrolltop:hidden').stop(true, true).fadeIn();
	    } else {
	        $('.scrolltop').stop(true, true).fadeOut();
	    }
	});


	/*!
	 * Scroll to top action
	 */
	$(function(){
		$(".scroll").click(function(){
			$("html,body").animate({ scrollTop:$("#page").offset().top },"1000"); return false;
		});
	});


	/*!
	 * Scroll to top action
	 */
	$(function(){
		$('.navbar-ham').click(function(){
			$(this).toggleClass('open');
		});
	});


	/*!
	 * Ekko Lightbox Toggle
	 */
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});
}(jQuery);
