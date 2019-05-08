<?php
/**
 * Template part for displaying content footer comment( s ) links
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-comments-links.php
 * @since      1.0.0
 */

namespace Secretum;

if ( false === is_page() || false === is_single() ) {
	return;
}

if ( 'post' === get_post_type() && true === comments_open() || '0' !== get_comments_number() ) {
	if ( false !== secretum_mod( 'entry_meta_commentlink_status' ) ) {
		$secretum_comments_link_icon = [
			'fi' => 'comments',
			'fa' => 'fa-comments',
		];
		?>
		<span class="comments-link">
			<?php secretum_icon( $secretum_comments_link_icon ); ?> <?php comments_popup_link( secretum_text( 'meta_leave_comment_text', false ), secretum_text( 'meta_one_comment_text', false ), '% ' . secretum_text( 'meta_comments_text', false ) ); ?>
		</span><!-- .comments-links -->
		<?php
	}
}
