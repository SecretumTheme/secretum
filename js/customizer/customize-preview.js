/**
 * Custom Customizer Preview
 *
 * @package Secretum
 */

( function( $ ) {
	// Live Preview postMessage For Blogname.
	wp.customize( [ 'blogname' ], function( value ) {
		value.bind( function( to, from ) {
			$( '.navbar-brand a' ).text( to );
		});
	});

	// Live Preview postMessage For Blog Description.
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to, from ) {
			$( '.site-description' ).text( to );
		});
	});

	// Live Preview postMessage For Sidebar Widget Areas.
	$.each( [
		'blogdescription',
		'secretum[sidebar_container_margin_top]',
		'secretum[sidebar_container_margin_bottom]',
		'secretum[sidebar_container_padding_x]',
		'secretum[sidebar_container_padding_y]',
		'secretum[sidebar_container_border_type]',
		'secretum[sidebar_container_border_radius]',
		'secretum[sidebar_container_border_color]',
		'secretum[sidebar_textual_font_family]',
		'secretum[sidebar_textual_font_size]',
		'secretum[sidebar_textual_font_style]',
		'secretum[sidebar_textual_text_transform]',
		'secretum[sidebar_textual_text_color]',
		'secretum[sidebar_textual_link_color]',
		'secretum[sidebar_textual_link_hover_color]',
		], function( index, settingName ) {
			wp.customize( settingName, function( value ) {
				value.bind( function( to, from ) {
					$( '.sidebar .widget' ).addClass( to );

					if ( '' !== from ) {
						$( '.sidebar .widget' ).removeClass( from )
					}
				});
			});
		}
	);

	// Live Preview postMessage For Sidebar Widget Areas.
	$.each( [
		'secretum[sidebar_container_background_color]',
		'secretum[sidebar_container_margin_top]',
		'secretum[sidebar_container_margin_bottom]',
		'secretum[sidebar_container_padding_x]',
		'secretum[sidebar_container_padding_y]',
		'secretum[sidebar_container_border_type]',
		'secretum[sidebar_container_border_radius]',
		'secretum[sidebar_container_border_color]',
		'secretum[sidebar_textual_font_family]',
		'secretum[sidebar_textual_font_size]',
		'secretum[sidebar_textual_font_style]',
		'secretum[sidebar_textual_text_transform]',
		'secretum[sidebar_textual_text_color]',
		'secretum[sidebar_textual_link_color]',
		'secretum[sidebar_textual_link_hover_color]',
		], function( index, settingName ) {
			wp.customize( settingName, function( value ) {
				value.bind( function( to, from ) {
					$( '.sidebar .widget' ).addClass( to );

					if ( '' !== from ) {
						$( '.sidebar .widget' ).removeClass( from )
					}
				});
			});
		}
	);

	// Live Preview postMessage For Footer Widget Areas.
	$.each( [
		'secretum[footer_container_background_color]',
		'secretum[footer_container_margin_top]',
		'secretum[footer_container_margin_bottom]',
		'secretum[footer_container_padding_x]',
		'secretum[footer_container_padding_y]',
		'secretum[footer_container_border_type]',
		'secretum[footer_container_border_radius]',
		'secretum[footer_container_border_color]',
		'secretum[footer_textual_font_family]',
		'secretum[footer_textual_font_size]',
		'secretum[footer_textual_font_style]',
		'secretum[footer_textual_text_transform]',
		'secretum[footer_textual_text_color]',
		'secretum[footer_textual_link_color]',
		'secretum[footer_textual_link_hover_color]',
		], function( index, settingName ) {
			wp.customize( settingName, function( value ) {
				value.bind( function( to, from ) {
					$( '.footer .widget' ).addClass( to );

					if ( '' !== from ) {
						$( '.footer .widget' ).removeClass( from )
					}
				});
			});
		}
	);

} )( jQuery );
