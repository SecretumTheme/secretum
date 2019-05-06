<?php
/**
 * Template part for comment navigation links
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/nav/comment-navigation.php
 * @since      1.0.0
 */

namespace Secretum;

if ( get_comment_pages_count() > 1 && false !== get_option( 'page_comments' ) ) {
	?>
	<nav class="comment-navigation my-4 clearfix" id="comment-nav-above">
		<h3 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'secretum' ); ?></h3>

		<?php if ( false !== get_previous_comments_link() ) { ?>
			<div class="nav-previous float-left"><?php previous_comments_link( secretum_text( 'comments_older', false ) ); ?></div>
		<?php } ?>

		<?php if ( false !== get_next_comments_link() ) { ?>
			<div class="nav-next float-right"><?php next_comments_link( secretum_text( 'comments_newer', false ) ); ?></div>
		<?php } ?>
	</nav><!-- .comment-navigation -->
	<?php
}
