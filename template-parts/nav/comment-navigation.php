<?php
/**
 * Template part for comment navigation links
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If comments and comments allowed
if (get_comment_pages_count() > 1 && get_option('page_comments')) { ?>

<nav class="comment-navigation my-4 clearfix" id="comment-nav-above">

    <h5 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'secretum'); ?></h5>

    <?php if (get_previous_comments_link()) { ?>

        <div class="nav-previous float-left"><?php previous_comments_link(secretum_text('comments_older')); ?></div>

    <?php } ?>

    <?php if (get_next_comments_link()) { ?>

        <div class="nav-next float-right"><?php next_comments_link(secretum_text('comments_newer')); ?></div>

    <?php } ?>

</nav><!-- .comment-navigation -->

<?php
}
