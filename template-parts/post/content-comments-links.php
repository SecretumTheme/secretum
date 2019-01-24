<?php
/**
 * Template part for displaying content footer comment( s ) links
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Post
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-comments-links.php
 */

namespace Secretum;

// If Posts & Comments Open Or Comments.
if ( 'post' === get_post_type() && comments_open() || '0' !== get_comments_number() ) {
	if ( ! secretum_mod( 'entry_meta_commentlink_status' ) ) { ?>
		<span class="comments-link">
			<?php
				secretum_icon( [
					'fi' => 'comments',
					'fa' => 'fa-comments',
				] );
			?> <?php
				comments_popup_link(
					secretum_text( 'meta_leave_comment_text', false ),
					secretum_text( 'meta_one_comment_text', false ),
					'% ' . secretum_text( 'meta_comments_text', false )
				);
			?>
		</span><!-- .comments-links -->
	<?php
	}
}
