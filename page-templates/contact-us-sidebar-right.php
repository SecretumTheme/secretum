<?php
/**
 * Template Name: Template (Contact Us) Sidebar Right
 * Template Post Type: page
 *
 * @package    Secretum
 * @subpackage Theme\Page-Templates
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/page-templates/contact-us-sidebar-right.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_wrapper( 'body' ); ?>" id="contact-wrapper">
	<div class="container<?php secretum_container( 'body' ); ?> tpl-contact-us" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-8 content-area<?php secretum_wrapper( 'entry' ); ?>" id="primary">
				<main class="site-main<?php secretum_container( 'entry' ); ?>" id="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/post/content', 'contact' );
					}
					?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->

			<?php get_template_part( 'template-parts/sidebar/sidebar', 'right-contact' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer();
