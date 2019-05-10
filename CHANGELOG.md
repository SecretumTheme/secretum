# Changelog

# 1.4.1
**2019-05-10 - Feature Release**

* Added color wheels to Customizer to override defined styling classes.
* Removed transient storage of grouped class names.

# 1.4.0
**2019-05-08 - Feature Release**

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
**2019-05-06 - Feature Release**

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
