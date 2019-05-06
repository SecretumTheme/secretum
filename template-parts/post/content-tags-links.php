<?php
/**
 * Template part for displaying content footer tag links
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-tag-links.php
 * @since      1.0.0
 */

namespace Secretum;

if ( 'post' === get_post_type() && false !== secretum_mod( 'entry_meta_tagslinks_status' ) ) {
	$secretum_tags_links_icon = [
		'fi' => 'price-tag',
		'fa' => 'fa fa-tags',
	];
	?>
	<span class="tags-links">
		<?php secretum_icon( $secretum_tags_links_icon ); ?> <?php secretum_text( 'meta_tags_text', true ); ?> <?php secretum_tags_list(); ?>
	</span><!-- .tags-links -->
	<?php
}
