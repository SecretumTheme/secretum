<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Ignore If Password Required
if (post_password_required()) { return; }

// Hookable Action Before Comments
do_action('secretum_before_comments');
?>
<div class="comments-area my-5 py-5 border-top" id="comments">
	<?php if (have_comments()) { ?>
		<h4 class="comments-title">
			<?php
				$comments_number = get_comments_number();

				if (1 === (int)$comments_number) {
					echo secretum_text('comments_title_single') . ' "<span>' . get_the_title() . '</span>"';

				} elseif(isset($discussion)) {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s %3$s &ldquo;%2$s&rdquo;',
							'%1$s %4$s &ldquo;%2$s&rdquo;',
							$discussion->responses,
							'comments title',
							'secretum'
						),
						number_format_i18n($comments_number), ' "<span>' . get_the_title() . '</span>"',
						get_the_title(),
						secretum_text('comments_title_thought'),
						secretum_text('comments_title_thoughts')
					);

				}
			?>
		</h4><!-- .comments-title -->

		<ol class="comment-list mb-5">
			<?php
				wp_list_comments(array(
					'style'      => 'ol',
					'short_ping' => true,
				));
			?>
		</ol><!-- .comment-list -->

		<?php get_template_part('template-parts/nav/comment', 'navigation'); ?>
	<?php } ?>

	<?php if (! comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) { ?>
		<p class="no-comments"><?php echo secretum_text('comments_closed'); ?></p>
	<?php } ?>

	<?php comment_form(); ?>
</div><!-- .comments-area -->
<?php
// Hookable Action After Comments
do_action('secretum_after_comments');
