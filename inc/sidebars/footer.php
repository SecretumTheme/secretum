<?php
/**
 * Footer Sidebar Area
 *
 * @package    Secretum
 * @subpackage Core\Sidebars\Footers
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/sidebars/footers.php
 *
 * @see        register_sidebar
 * @link       https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @see        secretum_footer_textuals
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/footer.php
 *
 * @since      1.0.0
 */

namespace Secretum;

// If Setting.
if ( secretum_mod( 'footer_full_status' ) ) {
	// Register Full Footer.
	register_sidebar(
		[
			'name'          => __( '- Above Footer Widget Area', 'secretum' ),
			'id'            => 'footer-full',
			'description'   => __( 'A full-width & fluid container above primary footer area. Create a unique layout using the Custom HTML widget. Automatically displays if a widget is defined.', 'secretum' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s col">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]
	);
}

// Register Left Footer.
register_sidebar(
	[
		'name'          => __( '- Footer Left Widget Area', 'secretum' ),
		'id'            => 'footer-left',
		'description'   => __( 'Left footer widgets area. Column 1 of 3.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s' . secretum_textual( 'footer', 'return' ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	]
);

// Register Center Footer.
register_sidebar(
	[
		'name'          => __( '- Footer Center Widget Area', 'secretum' ),
		'id'            => 'footer-center',
		'description'   => __( 'Center footer widgets area. Column 2 of 3.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s' . secretum_textual( 'footer', 'return' ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	]
);

// Register Right Footer.
register_sidebar(
	[
		'name'          => __( '- Footer Right Widget Area', 'secretum' ),
		'id'            => 'footer-right',
		'description'   => __( 'Right footer widgets area. Column 3 of 3.', 'secretum' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s' . secretum_textual( 'footer', 'return' ) . '">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	]
);
