<?php
/**
 * Actions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Before X Content
 *
 * @example do_action('secretum_X_before');
 *
 * @return string HTML 
 */
add_action('secretum_X_before', function() {

}, 10, 0);


/**
 * X Content
 *
 * @example do_action('secretum_X');
 *
 * @return string HTML 
 */
add_action('secretum_X', function() {

}, 10, 0);


/**
 * After X Content
 *
 * @example do_action('secretum_X_after');
 *
 * @return string HTML
 */
add_action('secretum_X_after', function() {

}, 10, 0);
