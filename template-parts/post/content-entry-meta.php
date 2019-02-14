<?php
/**
 * Template part for displaying content entra meta details
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Post
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-entry-meta.php
 * @since      1.0.0
 */

namespace Secretum;

// If Posts.
if ( 'post' === get_post_type() ) {
?>
<div class="entry-meta my-4">
	<?php if ( true === is_single() ) { ?>
		<?php if ( true !== secretum_mod( 'entry_meta_published_status' ) || true === secretum_mod( 'entry_meta_updated_status' ) ) { ?>
			<span class="posted-on">
				<?php if ( true !== secretum_mod( 'entry_meta_published_status' ) ) { ?>
					<?php if ( secretum_mod( 'entry_meta_link', 'raw' ) === 'month' ) { ?>
						<?php
						secretum_icon( [
							'fi' => 'clock',
							'fa' => 'fa-clock-o',
						] ); ?> <a href="<?php echo esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ); ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo esc_html( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></a>

					<?php } elseif ( secretum_mod( 'entry_meta_link', 'raw' ) === 'day' ) { ?>
						<?php
						secretum_icon( [
							'fi' => 'clock',
							'fa' => 'fa-clock-o',
						] ); ?> <a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo esc_html( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></a>

					<?php } elseif ( secretum_mod( 'entry_meta_link', 'raw' ) === 'post' ) { ?>
						<?php
						secretum_icon( [
							'fi' => 'clock',
							'fa' => 'fa-clock-o',
						] ); ?> <a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo esc_html( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></a>

					<?php } else { ?>
						<?php
						secretum_icon( [
							'fi' => 'clock',
							'fa' => 'fa-clock-o',
						] ); ?> <time class="entry-date published updated" datetime="<?php echo esc_html( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<?php }?>
				<?php } ?>

				<?php if ( true === secretum_modified_date_check() && true === secretum_mod( 'entry_meta_updated_status' ) ) { ?>
					<time class="updated" datetime="<?php echo esc_html( get_the_modified_date( DATE_W3C ) ); ?>">( <?php echo esc_html( get_the_modified_date() ); ?> )</time>
				<?php } ?>

			</span><!-- .posted-on -->
		<?php }// End if(). ?>

		<?php if ( true !== secretum_mod( 'entry_meta_author_status' ) ) { ?>
			<span class="byline">
				<?php if ( secretum_mod( 'entry_meta_author_link', 'raw' ) === 'author' ) { ?>
					<?php
					secretum_icon( [
						'fi' => 'torso',
						'fa' => 'fa fa-user',
					] ); ?> <span class="author vcard"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span>
				<?php } else {
					secretum_icon( [
						'fi' => 'torso',
						'fa' => 'fa fa-user',
					] ); ?> <span class="author vcard"><?php echo get_the_author(); ?></span>
				<?php } ?>
			</span><!-- .byline -->
		<?php } ?>
	<?php }// End if(). ?>
</div><!-- .entry-meta -->
<?php
}// End if().
