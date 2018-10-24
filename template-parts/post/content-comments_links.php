<?php
/**
 * Template part for displaying content footer comment(s) links
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If Posts & Comments Open Or Comments
if ('post' == get_post_type() && comments_open() || '0' != get_comments_number()) { ?>

	<?php if (!secretum_mod('entrymeta_commentlink_status')) { ?>

		<span class="comments-link">

			<i class="fa fa-comments"></i> <?php
				comments_popup_link(
					secretum_text('meta_leave_comment_text'),
					secretum_text('meta_one_comment_text'),
					'% ' . secretum_text('meta_comments_text')
				);
			?>

		</span><!-- .comments-links -->

	<?php } ?>

<?php
}
