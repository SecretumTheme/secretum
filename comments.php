<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// Ignore If Password Required
if (post_password_required()) { return; }

// Hook
do_action('secretum_before_comments'); ?>

<div class="comments-area my-5 py-5 border-top" id="comments">

	<?php if (have_comments()) { ?>

		<h4 class="comments-title">

			<?php
				$comments_number = get_comments_number();

				if (1 === (int)$comments_number) {

					echo secretum_text('comments_title_single') . ' "<span>' . get_the_title() . '</span>"';

				} else {

					printf(
						esc_html(_nx(
							'%1$s ' . secretum_text('comments_title_thought') . '%2$s',
							'%1$s ' . secretum_text('comments_title_thoughts') . '%2$s',
							$comments_number,
							'comments title',
							'secretum'
						)),
						number_format_i18n($comments_number), ' "<span>' . get_the_title() . '</span>"'
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
// Hook
do_action('secretum_after_comments');
