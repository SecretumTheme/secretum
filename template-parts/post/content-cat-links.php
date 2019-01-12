<?php
/**
 * Template part for displaying content footer category links
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Posts & Default Display Category Links
if ( 'post' === get_post_type() && ! secretum_mod( 'entry_meta_catlinks_status' ) ) {
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
