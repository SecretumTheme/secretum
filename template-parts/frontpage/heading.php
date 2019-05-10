<?php
/**
 * Front-page Heading Area Display
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/frontpage/heading.php
 * @since      1.0.0
 */

namespace Secretum;

// If Active.
if ( false !== secretum_mod( 'frontpage_header_status' ) ) {
	?>
	<div class="jumbotron frontpage-heading<?php secretum_wrapper( 'frontpage_heading' ); ?>" id="frontpage-heading">
		<?php echo wp_kses_post( do_shortcode( secretum_mod( 'frontpage_heading_html', 'raw' ) ) ); ?>
	</div><!-- .frontpage-heading -->
	<?php
}
