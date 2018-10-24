<?php
/**
 * Template part for post navigation links
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// Retrieve paginated links for archive post pages.
$paginates = secretum_paginate_links();

// Display only if links to display
if (! is_array($paginates)) { return; }
?>

<nav aria-label="<?php _e('Posts navigation', 'secretum');?>">

	<ul class="pagination">

		<?php if (get_previous_posts_link()) { ?>

        <li class="page-item">

            <a class="page-link" href="<?php echo esc_attr(get_previous_posts_page_link()); ?>" aria-label="<?php _e('Previous', 'secretum'); ?>">
                <span aria-hidden="true"><?php _e('&laquo;', 'secretum'); ?></span>
                <span class="sr-only"><?php _e('Previous', 'secretum'); ?></span>
            </a>

        </li><!-- .page-item -->

		<?php } ?>

		<?php foreach ($paginates as $page) { ?>

			<li class="page-item">

                <?php echo str_replace('page-numbers', 'page-link', $page); ?>

            </li>

		<?php } ?>

		<?php if (get_next_posts_link()) { ?>

            <li class="page-item">

                <a class="page-link" href="<?php echo esc_attr(get_next_posts_page_link()); ?>" aria-label="<?php _e('Next', 'secretum'); ?>">
                    <span aria-hidden="true"><?php _e('&raquo;', 'secretum'); ?></span>
                    <span class="sr-only"><?php _e('Next', 'secretum'); ?></span>
                </a>

            </li><!-- .page-item -->

		<?php } ?>

	</ul><!-- .pagination -->

</nav>
