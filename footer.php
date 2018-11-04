<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

	/**
	 * Content Before Footer
	 */
	do_action('secretum_footer_before');


	/**
	 * Display Footer Area
	 * @source inc/system/footer/actions.php
	 */
	do_action('secretum_footer');


	/**
	 * Content After Footer
	 */
	do_action('secretum_footer_after');

	/**
	 * Display Copyright Content
	 * @source inc/system/footer/actions.php
	 *
	 * @uses secretum_copyright_statement()
	 * @source inc/system/footer/template-parts.php
	 */
	do_action('secretum_copyright');


	/**
	 * Display Content After Copyright
	 * @source inc/system/footer/actions.php
	 *
	 * @uses secretum_scroll_top()
	 * @source inc/system/footer/template-parts.php
	 */
	do_action('secretum_copyright_after');
?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
