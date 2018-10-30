<?php
/**
 * The frontpage template file
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
get_header();


/**
 * Content Before Frontpage Area
 */
do_action('secretum_frontpage_before');


/**
 * Display Primary Frontpage Area
 * @source inc/system/frontpage/actions.php
 *
 * @uses post_type secretum_frontpages
 * @source inc/system/frontpage/posttypes.php
 *
 * @uses inc/system/frontpage/templates/heading.php
 * @uses inc/system/frontpage/templates/default.php
 * @uses inc/system/frontpage/templates/map.php
 */
do_action('secretum_frontpage');


/**
 * Content After Frontpage Area
 */
do_action('secretum_frontpage_after');


get_footer();
