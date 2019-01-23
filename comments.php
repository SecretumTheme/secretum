<?php
/**
 * The template for displaying comments
 *
 * @package    Secretum
 * @subpackage Comments
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/comments.php
 */

namespace Secretum;

// Ignore If Password Required.
if ( post_password_required() ) { return; }

// Hookable Action.
do_action( 'secretum_before_comments' );
?>
<div class="comments-area my-5 py-5 border-top" id="comments">
	<?php if ( have_comments() ) { ?>
		<h4 class="comments-title">
			<?php
			$comments_number = get_comments_number();

			if ( 1 === (int) $comments_number ) {
				secretum_text( 'comments_title_single', true ) . ' "<span>' . get_the_title() . '</span>"';

			} elseif ( isset( $discussion ) ) {
				echo absint( number_format_i18n( $comments_number ) ); ?> <?php secretum_text( 'comments_title_thoughts', true ); ?> <span><?php echo esc_html( get_the_title() ); ?></span>
			<?php
			}
			?>
		</h4><!-- .comments-title -->

		<ol class="comment-list mb-5">
			<?php
			wp_list_comments( [
				'style' => 'ol',
				'short_ping' => true,
			] );
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
