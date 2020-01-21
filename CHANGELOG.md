# Changelog

# 1.9.0
**2020-01-20 - Feature Upgrades**

* [Issue #2](https://github.com/SecretumTheme/secretum/issues/2): Added position meta & itemprop name to breadcrumb items
* Updated woocommerce/cart/cart.php
* Updated woocommerce/checkout/form-login.php
* Updated woocommerce/checkout/review-order.php
* Corrected undefined var error in woocommerce/myaccount/orders.php
* WordPress 5.3.2 Tested

# 1.8.0
**2019-08-18 - Feature Upgrades**

* Added breadcrumb settings to customizer
* New Dark Theme: Primary Strong Yellow - Secondary Strong Red
* New Light Theme: Primary Mostly Pure Blue - Secondary Moderate Green
* Added secretum_before|after_post_content hooks around <article> tag
* Added secretum_before|after_page_content hooks around <article> tag
* Corrected Empty Content Only page template to use proper partical
* Adjusted default whitespacing around breadcrumbs
* Adjusted default colors for comments wrap, and odd/even backgrounds
* Adjusted Version Compare to use filter_input to get 'activated' for unset
* Created Secretum Manager class - Preparing for class call migration
* Created Secretum Upgrade class - Version 1.8.0 Migration Added
* Updated woocommerce/cart/cart.php
* Updated woocommerce/myaccount/orders.php
* Updated woocommerce/order/order-details.php
* WordPress 5.2.2 Tested

# 1.7.7
**2019-06-25 - Hotfix**

* Removed unmodified template: woocommerce/single-product/related.php

# 1.7.6
**2019-06-25 - Hotfix**

* Temporarily removed woocommerce-bookings templates, testing client not available.

# 1.7.5
**2019-06-25 - Hotfix**

* Removed duplicated font selection in customizer font-control.
* Removed secretum prefix from 3rd party enqueued files.
* Corrected woocommerce wrapper-start to use proper customizer functions.
* Corrected edit post screenreader html being escaped in entry.php.
* Corrected improperly formatted sprintf in woocommerce my account dashboard.
* Corrected attr escaping in woocommerce review-order.
* Added collapse wrapper to navbar fallback display when no menu is selected.
* Created new dark color theme: soft yellow - vivid orange.

# 1.7.4
**2019-06-11 - Hotfix**

* Removed dropshadow from navbar dropdown menu items when in mobile view of primary menu.

# 1.7.3
**2019-06-05 - Hotfix**

* Corrected content loop template to correctly display post titles when a page is set for post archives.
* Replaced previous breadcrumbs with bootstrap friendly version. Customizer features coming soon.
* Adjusted navwalker fallback to only allow 1 parent item element.

# 1.7.2
**2019-05-24 - Hotfix**

* Added frontpage/home check around entry-footer within post template part content.php.
* Re-added recaptcha dequeues for Contact 7 Form when recaptcha is in use.
* Corrected missing variable checks in frontpage post_meta calls.

# 1.7.1
**2019-05-24 - Hotfix**

* Corrected edit post/page link returning its container when a parent container has been disabled.
* Corrected frontpage post_meta call to allow empty when displaying the default template.
* Corrected navwalker fallback to display pages menu when no menu is set and pages are published.
* New: navwalker fallback adds # home link, when no menu set, no pages published, and user can not edit theme options.
* Generated new translation file.

# 1.7.0
**2019-05-22 - Version Check & Feature Upgrade**

* WordPress 5.2.1 Version Check
* Corrected frontpage template to use page templates, if a page template is selected.
* Created frontpage template-parts body-empty.php & body-notitle.php to match theme templates when selected.
* Created class-theme-meta.php & theme-meta.php moving all theme get_post_meta calls to a single location.
* Created class-metaboxes.php moved class-metabox-sidebars.php featues and extended for new location calls.
* Created page template post-page-title-off.php a full featured template with no page title.
* Added get_header/footer calls to empty-content-only.php page template.
* Modified class-classes-containers.php to check if meta data is set for container sizing.
* Generated new translation file.
* Re-generated all CSS/JS files.

# 1.6.0
**2019-05-12 - Feature Upgrade**

* Removed extra primary navs for display locations, moved/created display location setting in customizer.
* Marked old primary nav locations as deprecated.
* Added clickable class to navwalker for primary menu dropdowns; setting to disable clickable primary items is pending.
* Added missing default setting to enable linked archive titles on archive listings.
* Added customizer -> translations setting for toggler menu text.

# 1.5.0
**2019-05-12 - Feature Upgrade**

* Modified theme mod settings to use class-theme-mod.php grouping defaults & mods together.
* Added missing title lable for scroll to top icon.

# 1.4.2
**2019-05-10 - Hotfix & Minor Feature Upgrade**

* Corrected color wheel setting to use theme mod rather than option.
* Corrected frontpage heading output of shortcodes to not esc_html.
* Corrected frontpage wrapper/container calls to display on both static and non-static frontpages.
* Split frontpage customize controls giving jumbotron features unique panels.

# 1.4.1
**2019-05-10 - Minor Feature Upgrade**

* Added color wheels to Customizer to override defined styling classes.

# 1.4.0
**2019-05-08 - Features & Corrections**

* Added do_shortcode() to frontpage heading output.
* Added customizer setting to disable title on frontpage.
* Created new color theme: very dark blue - vivid orange.
* Corrected called to load theme woocommerce stylesheet.
* Split apart Enqueue Management within customizer.

# 1.3.4
**2019-05-07 - Hotfix**

* Adjusted footer cols to include all cols when less than 3 widgets are defined.
* Removed comment link when a page with comments is set to the homepage.
* Deleted css .map files.

# 1.3.3
**2019-05-07 - Hotfix**

* Adjusted post edit link function to use edit_post_link().
* Adjusted footer cols to include all cols when less than 3 widgets are defined.
* Added customizer option to hide toggler in primary menu.
* WordPress 5.2 Check.

# 1.3.2
**2019-05-07 - Hotfix**

* Removed unused class from templates.

# 1.3.1
**2019-05-07 - Hotfix**

* Corrected primary nav menu alignment setting.
* Adjusted new styling calls added in previous update.

# 1.3.0
**2019-05-06 - Feature & Corrections**

* Adjusted Bootstrap SCSS builds to exclude unused features.
* Created new style enqueues for split stylesheets.
* Adjusted customizer to use new styling calls.

# 1.2.2
**2019-04-26 - Hotfix**

* Adjusted Bootstrap primary nav to link primary menu items.
* Adjusted primary nav to default to top-level menu if a menu is not set.
* Added date linked to the post when a post title is not used.
* Adjusted archives to display the excerpt if used, else full content displays. 

# 1.2.1
**2019-04-23 - Hotfix**

* Adjusted primary menu navwalker to support multiple dropdowns.
* Adjusted comments header to use printf to keep span wrap.
* Corrected missing paged comments navigation.
* Corrected prefix names on customizer varaible names.

# 1.2.0
**2019-04-22 - Feature Update**

* WooCommerce templates updated to match current release.

# 1.1.5
**2019-04-02 - Hotfix**

* Adjusted default content width function
* Adjusted private variable names in customizer & translate classes
* Adjusted echo return trait to use prefix on filter rather than passing it in

# 1.1.4
**2019-03-26 - Hotfix**

* Corrected variable call in form-billing.php

# 1.1.3
**2019-03-25 - Version Bump**

* WordPress Version Bump

# 1.1.2
**2019-03-25 - Hotfix/WordPress Compliance**

* Updated WooCommerce add-to-cart variable template
* Corrected namespace function call in woocommerce.php
* Theme Sniffer compliance updates

# 1.1.1
**2019-02-19 - WordPress Compliance**

* Removed JavaScript injector from customizer
* Removed remove_section for color and tagline
* Removed html5 search-form support in favor of searchform.php
* Removed all development files from zip
* Moved customizer colors, background image to theme design panel
* Moved site identity show title/desc to theme site identity panel
* Adjusted default settings to load settings like a child theme
* Adjusted excerpt more filter to return default excerpt in admin view
* Adjusted several escaping functions
* Added missing translation strings to translations trait
* Added WordPress & PHP version requirement checks

# 1.1.0
**2019-02-19 - Feature Update**

* Moved all public actions and filters to functions
* Added Contact Form 7 recaptcha to inc/enqueue.php

# 1.0.0
**2019-02-17 - Release**

* WordPress Release

# 0.0.28
**2019-02-17 - Hotfix**

* Corrected page templates wrapper, container, and edit page function calls
* Corrected sidebar metabox not pre-selecting selected option after saving
* Removed all but widget partials from customizer for greatly improved page speed
* Renamed/moved a few classes to make them easier to read

# 0.0.27
**2019-02-16 - Hotfix**

* Changed default settings to set on theme change if not set
* Added partials to several Customizer settings

# 0.0.26
**2019-02-16 - Hotfix**

* Corrected customizer feature echoing example to previewer

# 0.0.25
**2019-02-15 - Feature Update**

* Adjusted Customizer Extras & Frontpage Sections
* Adjusted Default Sidebars When No Sidebars Set
* Set All Vars To !default In Theme Color Palettes

# 0.0.24
**2019-02-11 - Major Update**

* Moved builds for CSS classes to custom PHP clases
* Added transients for all CSS class list builds
* Pre-launch build prep, code/comment cleanup
* Populated WordPress readme.txt file
* Created this CHANGELOG.md file
* Preparing for WordPress release

# 0.0.20
**2019-01-18 - Feature Update**

* Reduced php memory footprint
* Corrected base color palette styles icon use
* Changed how palette styles load in the customizer
* Minor adjustments from compliance update

# 0.0.19
**2019-01-14 - Feature Update**

* Composer correction
* Commented out custom customizer sections
* Created new branch for feature build
* Commented out customizer export/import
* Created new branch for feature

# 0.0.18
**2019-01-10 - Major Update**

* WordPress/Code compliance update

# 0.0.8
**2018-12-20 - Major Update**

* Major customizer upgrade

# 0.0.1
**2018-10-01 - Release**

* Alpha public release
