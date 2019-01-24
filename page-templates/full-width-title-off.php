<?php
/**
 * Template Name: Full Width Template - Title Off
 * Template Post Type: post, page
 *
 * @package    Secretum
 * @subpackage Theme\Page-Templates
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/page-templates/full-width-title-off.php
 */

namespace Secretum;

get_header();
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="page-wrapper">
	<div class="container<?php secretum_body_container(); ?> tpl-fullwidth-title-off" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md content-area" id="primary">
				<main class="site-main" id="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/post/content', 'only' );
					}
					?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer();
