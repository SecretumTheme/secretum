<?php
/**
 * Template part for displaying content footer tag links
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Post
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-tag-links.php
 * @since      1.0.0
 */

namespace Secretum;

// If Posts & Default Display.
if ( 'post' === get_post_type() && true !== secretum_mod( 'entry_meta_tagslinks_status' ) ) {
?>
	<span class="tags-links">
		<?php
		secretum_icon( [
			'fi' => 'price-tag',
			'fa' => 'fa fa-tags',
		] ); ?> <?php secretum_text( 'meta_tags_text', true ); ?> <?php secretum_tags_list(); ?>
	</span><!-- .tags-links -->
<?php
}
