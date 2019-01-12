<?php
/**
 * Template part for displaying content footer tag links
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Posts & Default Display
if ( 'post' === get_post_type() && ! secretum_mod( 'entry_meta_tagslinks_status' ) ) {
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
