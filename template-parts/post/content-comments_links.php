<?php
/**
 * Template part for displaying content footer comment(s) links
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Posts & Comments Open Or Comments
if ('post' == get_post_type() && comments_open() || '0' != get_comments_number()) {
	if (!secretum_mod('entry_meta_commentlink_status')) { ?>
		<span class="comments-link">
			<?php echo secretum_icon(array('io' => 'comment-square', 'fa' => 'fa-comments')); ?> <?php
				comments_popup_link(
					secretum_text('meta_leave_comment_text'),
					secretum_text('meta_one_comment_text'),
					'% ' . secretum_text('meta_comments_text')
				);
			?>
		</span><!-- .comments-links -->
	<?php
	}
}
