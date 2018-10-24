<?php
/**
 * Template part for post navigation links
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

if (!secretum_mod('post_navigation_links')) {

	the_post_navigation(
		array(
			'prev_text' => '<span class="screen-reader-text">' . secretum_text('prev_text') .  '</span>' .
				'<span class="nav-title float-sm-left"><span aria-hidden="true" class="nav-subtitle"><i class="fa fa-angle-left"></i> ' . 
				secretum_text('prev_text') . '</span><br />%title</span>',
			'next_text' => '<span class="screen-reader-text">' . secretum_text('next_text') . '</span>' .
				'<span class="nav-title float-sm-right"><span aria-hidden="true" class="nav-subtitle">' . 
				secretum_text('next_text') .
				 ' <i class="fa fa-angle-right"></i></span><br />%title</span>'
		)
	);

}