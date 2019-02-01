<?php
/**
 * Front-page Heading Area Display
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Frontpage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/frontpage/heading.php
 * @since      1.0.0
 */

namespace Secretum;

// If Active.
if ( true === secretum_mod( 'frontpage_header_status' ) ) {
?>
<div class="frontpage-heading w-100<?php secretum_frontpage_wrapper();?>" id="frontpage-heading"<?php secretum_frontpage_bg_style(); ?>>
	<?php echo wp_kses_post( secretum_mod( 'frontpage_heading_html', 'html' ) ); ?>
</div><!-- .frontpage-heading -->
<?php
}
