<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
get_header();

/**
 * Default Frontpage Template
 * @source inc/system/frontpage/templates/default.php
 */
get_template_part('inc/system/frontpage/templates/default');

get_footer();
