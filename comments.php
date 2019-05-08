<?php
/**
 * The template for displaying comments
 *
 * @package    Secretum
 * @subpackage Theme\Comments
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/comments.php
 * @since      1.0.0
 */

namespace Secretum;

// Ignore If Password Required.
if ( true === post_password_required() ) {
	return;
}

// Hookable Action.
do_action( 'secretum_before_comments' ); ?>
<div class="comments-area my-5 py-5 border-top" id="comments">
	<?php if ( true === have_comments() ) { ?>
		<h2 class="comments-title">
			<?php
			$secretum_comments_number = get_comments_number();

			if ( true === isset( $secretum_comments_number ) && 1 === (int) $secretum_comments_number ) {
				secretum_text( 'comments_title_single', true ) . ' "<span>' . get_the_title() . '</span>"';

			} elseif ( true === isset( $secretum_comments_number ) && $secretum_comments_number > 1 ) {
				/* Translators: 1) comment count 2) already translated text 3) post title */
				printf(
					'%1$s %2$s <span>%3$s</span>',
					absint( number_format_i18n( $secretum_comments_number ) ),
					esc_html( secretum_text( 'comments_title_thoughts', false ) ),
					esc_html( get_the_title() )
				);
			} else {
				secretum_text( 'meta_comments_text', true );
			}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list mb-5">
			<?php
				wp_list_comments(
					[
						'style'      => 'ol',
						'short_ping' => true,
					]
				);
			?>
		</ol><!-- .comment-list -->

		<?php get_template_part( 'template-parts/nav/comment', 'navigation' ); ?>
	<?php } ?>

	<?php if ( ! comments_open() && '0' !== get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		<p class="no-comments"><?php secretum_text( 'comments_closed', true ); ?></p>
	<?php } ?>

	<?php comment_form(); ?>
</div><!-- .comments-area -->
<?php
// Hookable Action.
do_action( 'secretum_after_comments' );
