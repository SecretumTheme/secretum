<?php
/**
 * Secretum Theme: Include Custom Features
 */
if (! defined('ABSPATH')) { exit; }


/**
 * Documentation: Post Type & Taxonomies
 */
if (get_theme_mod('secretum_feature_documentation_display')) {
	include_once(SECRETUM_INC . '/feature/documentation/actions.php');
	include_once(SECRETUM_INC . '/feature/documentation/posttype.php');
	include_once(SECRETUM_INC . '/feature/documentation/taxonomy.php');

	if(!get_theme_mod('secretum_feature_documentation_category_widget')) {
		include_once(SECRETUM_INC . '/feature/documentation/widgets/categories.php');

		add_action('widgets_init', function()
		{
			register_widget('SecretumCategoriesWidget');
		});
	}

	if(!get_theme_mod('secretum_feature_documentation_recent_widget')) {
		include_once(SECRETUM_INC . '/feature/documentation/widgets/recent.php');

		add_action('widgets_init', function()
		{
			register_widget('SecretumRecentWidget');
		});
	}
}


/**
 * Testimonial: Post Type & Widget
 */
if (get_theme_mod('secretum_feature_testimonial_display')) {
	include_once(SECRETUM_INC . '/feature/testimonial/posttype.php');

	if(!get_theme_mod('secretum_feature_testimonial_query_widget')) {
		include_once(SECRETUM_INC . '/feature/testimonial/widgets/query.php');

		add_action('widgets_init', function()
		{
			register_widget('SecretumTestimonialQueryWidget');
		});
	}
}
