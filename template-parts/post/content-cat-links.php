<?php
/**
 * Template part for displaying content footer category links
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Post
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-cat-links.php
 * @since      1.0.0
 */

namespace Secretum;

// If Posts & Default Display Category Links.
if ( 'post' === get_post_type() && true !== secretum_mod( 'entry_meta_catlinks_status' ) ) {
?>
	<span class="cat-links">
		<?php secretum_icon(
			array(
				'fi' => 'folder',
				'fa' => 'fa-folder-open',
			)
		); ?> <?php secretum_text( 'meta_categories_text', true ); ?> <?php secretum_categories_list(); ?>
	</span><!-- .cat-links -->
<?php
}
