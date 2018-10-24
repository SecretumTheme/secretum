<?php
/**
 * Secretum Theme: Register Sidebar Widget Areas
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


// Fires after all default WordPress widgets have been registered
add_action('widgets_init', function() {
	//
	// == Primary Sidebars
	//

	// Sidebar Right
	register_sidebar(array(
	    'name'          => __('1) Sidebar Right', 'secretum'),
	    'id'            => 'sidebar-right',
	    'description'   => __('Right sidebar widget area. Automatically displays if a widget is defined.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));

	// Sidebar Left
	register_sidebar(array(
	    'name'          => __('2) Sidebar Left', 'secretum'),
	    'id'            => 'sidebar-left',
	    'description'   => __('Left sidebar widget area. Must be activated to be used, to activate click on the Appearance Menu > Customize > Theme: Sidebar Area > Sidebar Container > Default Sidebar Display Location.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));

	// Sidebar Contact Page
	register_sidebar(array(
	    'name'          => __('3) Sidebar Contact Page', 'secretum'),
	    'id'            => 'sidebar-right-contact',
	    'description'   => __('Displays right sidebar widget area on the contact us page template. Automatically displays if a widget is defined. Defaults to Sidebar Right Widgets.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));

	// Sidebar Blog & Archive
	register_sidebar(array(
	    'name'          => __('4) Sidebar Blog & Archives', 'secretum'),
	    'id'            => 'sidebar-1',
	    'description'   => __('Displays right sidebar widget area on blog posts and archive pages. Automatically displays if a widget is defined. Defaults to Sidebar Right Widgets.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));


	//
	// == Header Area
	//

	// If Setting
	if(secretum_mod('header_top_status')) {
		// Register Sidebar Header Top
		register_sidebar(array(
		    'name'          => __('- Top Header Widget Area', 'secretum'),
		    'id'            => 'secretum-sidebar-header-top',
		    'description' 	=> __('A containerless, no html/styling, widget area above the header. Create a unique layout using the Custom HTML widget. Overrides top bar header menus if a widget is defined.', 'secretum'),
		    'before_widget' => '',
		    'after_widget' 	=> '',
		    'before_title'  => '',
		    'after_title'   => '',
		));
	}


	//
	// == Footer Area
	//

	// If Setting
	if(secretum_mod('footer_full_status')) {
		// Register Full Footer
		register_sidebar(array(
		    'name'          => __('- Above Footer Widget Area', 'secretum'),
		    'id'            => 'footer-full',
		    'description'   => __('A full-width & fluid container above primary footer area. Create a unique layout using the Custom HTML widget. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget %2$s col">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
		    'after_title'   => '</h3>',
		));
	}

	// Register Left Footer
	register_sidebar(array(
	    'name'          => __('- Footer Left Widget Area', 'secretum'),
	    'id'            => 'footer-left',
	    'description'   => __('Left footer widgets area. Column 1 of 3.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));

	// Register Center Footer
	register_sidebar(array(
	    'name'          => __('- Footer Center Widget Area', 'secretum'),
	    'id'            => 'footer-center',
	    'description'   => __('Center footer widgets area. Column 2 of 3.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title'  => '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));

	// Register Right Footer
	register_sidebar(array(
	    'name'          => __('- Footer Right Widget Area', 'secretum'),
	    'id'            => 'footer-right',
	    'description'   => __('Right footer widgets area. Column 3 of 3.', 'secretum'),
	    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
	    'after_widget' 	=> '</aside>',
	    'before_title' 	=> '<h3 class="widget-title afterline afterline-w10">',
	    'after_title'   => '</h3>',
	));


	//
	// == WooCommerce
	//

	// If WooCommerce Active
	if (class_exists('woocommerce')) {
		// Product Page Widget Area
		register_sidebar(array(
		    'name'          => __('- WooCommerce Product Page', 'secretum'),
		    'id'            => 'sidebar-woo-product',
		    'description'   => __('Displays right sidebar widget area on WooCommerce single product pages. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title afterline afterline-primary afterline-primary afterline-w10">',
		    'after_title'   => '</h3>',
		));

		// Storefront Widget Area
		register_sidebar(array(
		    'name'          => __('- WooCommerce Storefront', 'secretum'),
		    'id'            => 'sidebar-woo-storefront',
		    'description'   => __('Displays right sidebar widget area on WooCommerce storefront page. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title afterline afterline-primary afterline-primary afterline-w10">',
		    'after_title'   => '</h3>',
		));

		// Register Product Archives Widget Area
		register_sidebar(array(
		    'name'          => __('- WooCommerce Archives', 'secretum'),
		    'id'            => 'sidebar-woo-archives',
		    'description'   => __('Displays right sidebar widget area on WooCommerce Category & Tag archive pages. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title afterline afterline-primary afterline-primary afterline-w10">',
		    'after_title'   => '</h3>',
		));

		// Register Default WooCommerce Widget Area
		register_sidebar(array(
		    'name'          => __('- WooCommerce Default', 'secretum'),
		    'id'            => 'sidebar-woo-default',
		    'description'   => __('Displays right sidebar widget area on all WooCommerce pages if an above widget area is not defined. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s col">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title afterline afterline-primary afterline-primary afterline-w10">',
		    'after_title'   => '</h3>',
		));
	}


	//
	// == Documentation Feature
	//

	// If Setting
	if (secretum_mod('feature_documentation_display')) {
		// Sidebar Left
		register_sidebar(array(
		    'name'          => __('- Documentation Sidebar Left', 'secretum'),
		    'id'            => 'documentation-sidebar-left',
		    'description' 	=> __('Left sidebar widget area for documentation. Automatically displays if a widget is defined.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
		    'after_title'   => '</h3>',
		));

		// If ToC disabled, register sidebar
		if(secretum_mod('feature_documentation_toc')) {
			// Sidebar Right
			register_sidebar(array(
			    'name'          => __('- Documentation Sidebar Right', 'secretum'),
			    'id'            => 'documentation-sidebar-right',
			    'description' 	=> __('Right sidebar widget area for documentation. Automatically displays if a widget is defined.', 'secretum'),
			    'before_widget' => '<aside id="%1$s" class="widget mb-5 %2$s">',
			    'after_widget' 	=> '</aside>',
			    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
			    'after_title'   => '</h3>',
			));
		}

		// Footer Left
		register_sidebar(array(
		    'name'          => __('- Documentation Footer Left', 'secretum'),
		    'id'            => 'documentation-footer-left',
		    'description' 	=> __('Left footer widgets area. Column 1 of 3.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
		    'after_title'   => '</h3>',
		));

		// Footer Center
		register_sidebar(array(
		    'name'          => __('- Documentation Footer Center', 'secretum'),
		    'id'            => 'documentation-footer-center',
		    'description'   => __('Center footer widgets area. Column 2 of 3.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
		    'after_widget' 	=> '</aside>',
		    'before_title'  => '<h3 class="widget-title" data-toc-skip>',
		    'after_title'   => '</h3>',
		));

		// Footer Right
		register_sidebar(array(
		    'name'          => __('- Documentation Footer Right', 'secretum'),
		    'id'            => 'documentation-footer-right',
		    'description'   => __('Right footer widgets area. Column 3 of 3.', 'secretum'),
		    'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
		    'after_widget' 	=> '</aside>',
		    'before_title' 	=> '<h3 class="widget-title" data-toc-skip>',
		    'after_title'   => '</h3>',
		));
	}


	//
	// == Backup
	//

	// Register Backup Widget
	register_sidebar(array(
	    'name'          => __('== Backup Area', 'secretum'),
	    'id'            => 'backup-widget',
	    'description'   => __('Widgets stored here will not be displayed.', 'secretum'),
	    'before_widget' => '',
	    'after_widget' 	=> '',
	    'before_title'  => '',
	    'after_title'   => '',
	));
});
