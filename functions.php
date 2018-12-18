<?php
namespace Secretum;

/**
 * Secretum Theme
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Constants
define('SECRETUM_DIR', 				dirname(__FILE__));
define('SECRETUM_BASE_URL', 		esc_url(home_url()));
define('SECRETUM_INC', 				SECRETUM_DIR . '/inc');

define('SECRETUM_THEME_VERSION', 	'0.0.4');
define('SECRETUM_WP_MIN_VERSION', 	'3.8');

define('SECRETUM_THEME_FILE', 		__FILE__);
define('SECRETUM_THEME_DIR', 		dirname(__FILE__));
define('SECRETUM_THEME_BASE', 		plugin_basename(__FILE__));
define('SECRETUM_THEME_URL', 		get_template_directory_uri());
define('SECRETUM_STYLE_URL', 		get_stylesheet_directory_uri());

define('SECRETUM_MENU_NAME', 		__('Theme Admin', 'secretum'));
define('SECRETUM_PAGE_NAME', 		__('Secretum Theme', 'secretum'));
define('SECRETUM_PAGE_ABOUT', 		__('A Custom Theme For WordPress', 'secretum'));
define('SECRETUM_THEME_NAME', 		'secretum');


/**
 * Register Classes
 *
 * @param string $class Fully-qualified class name
 * @return void
 */
spl_autoload_register(function ($class) {
    // Namespace Prefix
    $prefix = 'Secretum\\';

    // Base Dir For Namespace Prefix
    $base_dir = __DIR__ . '/inc/classes/';

    // Move To Next Rgistered autoloader
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Build Class Name
    $relative_class = substr($class, $len);

    // Replace Dir Separators & Replace Namespace with Base Dir
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Include File
    if (file_exists($file)) {
        require $file;
    }
});


/**
 * Include Theme Files
 */
include_once(SECRETUM_INC . '/customize/default-settings.php');
include_once(SECRETUM_INC . '/secretum-mod.php');
include_once(SECRETUM_INC . '/secretum-text.php');
include_once(SECRETUM_INC . '/enqueue.php');
include_once(SECRETUM_INC . '/editor.php');
include_once(SECRETUM_INC . '/theme-settings.php');
include_once(SECRETUM_INC . '/template-functions.php');
include_once(SECRETUM_INC . '/template-filters.php');
include_once(SECRETUM_INC . '/template-functions/body.php');
include_once(SECRETUM_INC . '/template-functions/copyright-nav.php');
include_once(SECRETUM_INC . '/template-functions/copyright.php');
include_once(SECRETUM_INC . '/template-functions/entry.php');
include_once(SECRETUM_INC . '/template-functions/footer.php');
include_once(SECRETUM_INC . '/template-functions/frontpage.php');
include_once(SECRETUM_INC . '/template-functions/header-top.php');
include_once(SECRETUM_INC . '/template-functions/header.php');
include_once(SECRETUM_INC . '/template-functions/primary-nav.php');
include_once(SECRETUM_INC . '/template-functions/scrolltop.php');
include_once(SECRETUM_INC . '/template-functions/sidebars.php');
include_once(SECRETUM_INC . '/template-functions/site_identity.php');

if (is_admin()) {
    include_once(SECRETUM_INC . '/editor.php');
}

if (class_exists('woocommerce')) {
    include_once(SECRETUM_INC . '/woocommerce.php');
}

if (class_exists('WC_Bookings')) {
    include_once(SECRETUM_INC . '/woocommerce-bookings.php');
}


/**
 * Initialize Theme Widgets
 *
 * @source https://developer.wordpress.org/reference/hooks/widgets_init/
 */
add_action('widgets_init', function() {
    include_once(SECRETUM_INC . '/sidebars/primary.php');
    include_once(SECRETUM_INC . '/sidebars/header.php');
    include_once(SECRETUM_INC . '/sidebars/footer.php');
    include_once(SECRETUM_INC . '/sidebars/woocommerce.php');
    include_once(SECRETUM_INC . '/sidebars/backup.php');
});


/**
 * Initialize Admin Features
 *
 * @source https://developer.wordpress.org/reference/hooks/admin_init/
 */
add_action('admin_init', function() {
    // Add Metabox Sidebars
    new MetaboxSidebars;
});


/**
 * WordPress Customizer
 *
 * @param object $wp_customize WP_Customize_Manager Instance
 */
add_action('customize_register', function($wp_customize) {
    // Remove Sections
    $wp_customize->remove_section("colors");
    $wp_customize->remove_section("title_tagline");
    $wp_customize->remove_section("header_image");
    $wp_customize->remove_section("background_image");

    // Get Default Settings
    $default = secretum_customizer_default_settings();

    // Controller Setting Arrays
    include_once(SECRETUM_INC . '/customize/choices_alignments.php');
    include_once(SECRETUM_INC . '/customize/choices_borders.php');
    include_once(SECRETUM_INC . '/customize/choices_colors.php');
    include_once(SECRETUM_INC . '/customize/choices_containers.php');
    include_once(SECRETUM_INC . '/customize/choices_font-control.php');
    include_once(SECRETUM_INC . '/customize/choices_margins.php');
    include_once(SECRETUM_INC . '/customize/choices_paddings.php');
    include_once(SECRETUM_INC . '/customize/choices_sizes.php');
    include_once(SECRETUM_INC . '/customize/choices_theme-colors.php');

    // Customizer Fallback & Sanitize Functions
    include_once(SECRETUM_INC . '/customize/customizer-functions.php');


    //
    // Site Identity Panel
    //
    $wp_customize->add_panel('secretum_site_identity', array(
        'title'         => __(':: Site Identity', 'secretum'),
        'priority'      => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/site_identity/display.php');
    include_once(SECRETUM_INC . '/customize/site_identity/branding.php');
    include_once(SECRETUM_INC . '/customize/site_identity/container-title.php');
    include_once(SECRETUM_INC . '/customize/site_identity/font-title.php');
    include_once(SECRETUM_INC . '/customize/site_identity/container-desc.php');
    include_once(SECRETUM_INC . '/customize/site_identity/font-description.php');


    //
    // Header Panel
    //
    $wp_customize->add_panel('secretum_header', array(
        'title'         => __(':: Header', 'secretum'),
        'priority'      => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/header/containers.php');
    include_once(SECRETUM_INC . '/customize/header/display.php');
    include_once(SECRETUM_INC . '/customize/header/settings.php');
    include_once(SECRETUM_INC . '/customize/header/colors.php');


    //
    // Header Top Panel
    //
    $wp_customize->add_panel('secretum_header_top', array(
        'title'         => __(':: Header Top', 'secretum'),
        'priority'      => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/header-top/display.php');
    include_once(SECRETUM_INC . '/customize/header-top/wrapper.php');
    include_once(SECRETUM_INC . '/customize/header-top/container.php');
    include_once(SECRETUM_INC . '/customize/header-top/font.php');
    include_once(SECRETUM_INC . '/customize/header-top/items.php');


    //
    // Primary Nav Panel
    //
    $wp_customize->add_panel('secretum_primary_nav', array(
        'title'         => __(':: Primary Nav', 'secretum'),
        'priority'      => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/primary-nav/display.php');
    include_once(SECRETUM_INC . '/customize/primary-nav/wrapper.php');
    include_once(SECRETUM_INC . '/customize/primary-nav/container.php');
    include_once(SECRETUM_INC . '/customize/primary-nav/font.php');
    include_once(SECRETUM_INC . '/customize/primary-nav/items.php');
    include_once(SECRETUM_INC . '/customize/primary-nav/toggler.php');


    //
    // Body Panel
    //
    $wp_customize->add_panel('secretum_body', array(
        'title'             => __(':: Body', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/body/containers.php');
    include_once(SECRETUM_INC . '/customize/body/colors.php');


    //
    // Entry Panel
    //
    $wp_customize->add_panel('secretum_entry', array(
        'title'             => __(':: Entry', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/entry/display.php');
    include_once(SECRETUM_INC . '/customize/entry/colors.php');


    //
    // Frontpage Panel
    //
    $wp_customize->add_panel('secretum_frontpage', array(
        'title'             => __(':: Frontpage', 'secretum'),
        'priority'          => 8,
    ));

    // General Settings
    include_once(SECRETUM_INC . '/customize/frontpage/display.php');


    //
    // Sidebars Panel
    //
    $wp_customize->add_panel('secretum_sidebars', array(
        'title'             => __(':: Sidebars', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/sidebars/containers.php');
    include_once(SECRETUM_INC . '/customize/sidebars/settings.php');
    include_once(SECRETUM_INC . '/customize/sidebars/colors.php');


    //
    // Footer Panel
    //
    $wp_customize->add_panel('secretum_footer', array(
        'title'             => __(':: Footer', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/footer/containers.php');
    include_once(SECRETUM_INC . '/customize/footer/display.php');
    include_once(SECRETUM_INC . '/customize/footer/colors.php');


    //
    // Copyright Panel
    //
    $wp_customize->add_panel('secretum_copyright', array(
        'title'             => __(':: Copyright', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/copyright/display.php');
    include_once(SECRETUM_INC . '/customize/copyright/wrapper.php');
    include_once(SECRETUM_INC . '/customize/copyright/container.php');
    include_once(SECRETUM_INC . '/customize/copyright/font.php');
    include_once(SECRETUM_INC . '/customize/copyright/statement.php');


    //
    // Copyright Nav Panel
    //
    $wp_customize->add_panel('secretum_copyright_nav', array(
        'title'             => __(':: Copyright Nav', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/copyright-nav/wrapper.php');
    include_once(SECRETUM_INC . '/customize/copyright-nav/font.php');
    include_once(SECRETUM_INC . '/customize/copyright-nav/items.php');


    //
    // Extras Panel
    //
    $wp_customize->add_panel('secretum_extras', array(
        'title'             => __(':: Extras', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/extras/analytics.php');
    include_once(SECRETUM_INC . '/customize/extras/enqueue.php');
    include_once(SECRETUM_INC . '/customize/extras/scrolltop.php');
    include_once(SECRETUM_INC . '/customize/extras/text.php');
        include_once(SECRETUM_INC . '/customize/extras/text/more.php');
        include_once(SECRETUM_INC . '/customize/extras/text/meta.php');
        include_once(SECRETUM_INC . '/customize/extras/text/nav.php');
        include_once(SECRETUM_INC . '/customize/extras/text/search.php');
        include_once(SECRETUM_INC . '/customize/extras/text/comments.php');
        include_once(SECRETUM_INC . '/customize/extras/text/author.php');
        include_once(SECRETUM_INC . '/customize/extras/text/no-content.php');
        include_once(SECRETUM_INC . '/customize/extras/text/404.php');
        include_once(SECRETUM_INC . '/customize/extras/text/woo.php');
    include_once(SECRETUM_INC . '/customize/extras/width.php');
    include_once(SECRETUM_INC . '/customize/extras/reset.php');

    /**
     * pending
    //
    // Exports & Imports
    //
    $wp_customize->add_panel('secretum_export_import', array(
        'title'             => __(':: Exports & Imports', 'secretum'),
        'priority'          => 8,
    ));

    // Sections, Settings, & Controls
    include_once(SECRETUM_INC . '/customize/export-import/global.php');
    include_once(SECRETUM_INC . '/customize/export-import/copyright.php');
    */
});


/**
 * Secretum Updater Plugin
 */
if (defined('SECRETUM_UPDATER') && file_exists(SECRETUM_UPDATER)) {
	include_once(SECRETUM_UPDATER);
	$secretum_updater = \Puc_v4_Factory::buildUpdateChecker(
		'https://raw.githubusercontent.com/SecretumTheme/secretum/master/updates.json',
		SECRETUM_THEME_FILE,
		'secretum'
	);
}


/**
 * Theme Setup - Save Theme Color CSS Files
 */
add_action('after_switch_theme', function() {
    if (!get_option('secretum_theme_colors')) {
        $files = array();
        $files = scandir(SECRETUM_DIR . '/css/', 1);
        $folders = array_diff($files, array('theme_editor.css', 'theme.min.css', 'theme.css.map', 'theme.css', '..', '.'));

        $settings = array();
        foreach ($folders as $dirname) {
            $ampersand = str_replace("_",  __(' Primary', 'secretum') . " & ", $dirname);
            $spaced = str_replace("-", " ", $ampersand);
            $name = ucwords($spaced) . __(' Secondary', 'secretum');
            $settings[$dirname] = $name;
        }

        // Update Theme Colors Option
        update_option('secretum_theme_colors', $settings);
    }
});
