<?php
/**
 * Front-page Body Section Display
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
?>

<main class="site-main" id="main">

	<div class="frontpage-section w-100" id="frontpage-section">

		<?php
			if (secretum_setting('frontpage_page_id')) {
				$saved_id 		= secretum_setting('frontpage_page_id', 'int');
				$get_post_id 	= get_post($saved_id);
				$post_content 	= $get_post_id->post_content;
				$filter_content = apply_filters('the_content', $post_content);
				$clean_content 	= str_replace(']]>', ']]>', $filter_content);
				echo $clean_content;
			}
		?>

	</div><!-- .frontpage-section -->

</main><!-- .site-main -->
