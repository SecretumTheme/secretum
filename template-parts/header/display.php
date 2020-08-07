<?php
/**
 * Display Header Area
 *
 * @package    Secretum
 * @subpackage Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2020 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/display.php
 * @since      1.0.0
 */

namespace Secretum;

if ( false !== secretum_mod( 'header_status' ) ) {
	/**
	 * Retrieve the markup for a custom header.
	 *
	 * @source https://developer.wordpress.org/reference/functions/get_custom_header_markup/
	 */
	if ( true === get_custom_header_markup() ) {
		// WordPress Image/Video Header.
		?>
		<div class="custom-header">
			<div class="custom-header-media">
				<?php the_custom_header_markup(); ?>
			</div>
		</div><!-- .custom-header -->
		<?php
	}

	// Default Display.
	?>
	<div class="header<?php secretum_wrapper( 'header' ); ?>" id="wrapper-header" itemscope itemtype="http://schema.org/WebSite">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'secretum' ); ?></a>
		<nav class="<?php secretum_navbar_class(); ?><?php secretum_navbar_toggler_display( 'size' ); ?><?php secretum_wrapper( 'primary_nav' ); ?>" aria-label="<?php secretum_text( 'primary_nav_aria_label_text', true ); ?>" role="navigation">
			<div class="container<?php secretum_container( 'primary_nav', 'echo', array( 'textuals' => true ) ); ?><?php secretum_container( 'header' ); ?><?php secretum_alignment( 'site_identity', 'echo', array( 'margin' => true ) ); ?>">
				<?php
				if ( true === secretum_navbar_display_location( 'above' ) ) {
					secretum_navbar_wrap( 'open', 'above' );
					get_template_part( 'template-parts/primary-nav/toggler' );
					get_template_part( 'template-parts/primary-nav/navbar' );
					secretum_navbar_wrap( 'close' );

					get_template_part( 'template-parts/header/logo' );
					get_template_part( 'template-parts/header/site-description' );
				}

				if ( true === secretum_navbar_display_location( 'below' ) ) {
					get_template_part( 'template-parts/header/logo' );
					get_template_part( 'template-parts/header/site-description' );

					secretum_navbar_wrap( 'open', 'below' );
					get_template_part( 'template-parts/primary-nav/toggler' );
					get_template_part( 'template-parts/primary-nav/navbar' );
					secretum_navbar_wrap( 'close' );
				}

				if ( true === secretum_navbar_display_location( 'left' ) ) {
					get_template_part( 'template-parts/primary-nav/toggler' );
					get_template_part( 'template-parts/primary-nav/navbar' );
					get_template_part( 'template-parts/header/logo' );
					get_template_part( 'template-parts/header/site-description' );
				}

				if ( true === secretum_navbar_display_location( 'right' ) ) {
					get_template_part( 'template-parts/header/logo' );
					get_template_part( 'template-parts/header/site-description' );
					get_template_part( 'template-parts/primary-nav/toggler' );
					get_template_part( 'template-parts/primary-nav/navbar' );
				}
				?>
			</div><!-- .container -->
		</nav><!-- .navbar -->
	</div><!-- .header -->
	<?php
}
