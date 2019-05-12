<?php
/**
 * Scroll To Top Icon
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/extras/scrolltop.php
 * @since      1.0.0
 */

namespace Secretum;

// Return If Inactive.
if ( false === secretum_mod( 'scrolltop_status' ) ) {
	return;
}
?>

<div class="scrolltop">
	<div class="scroll<?php secretum_container( 'scrolltop', 'echo', [ 'textuals' => true ] ); ?><?php echo esc_attr( secretum_mod( 'scrolltop_container_background_hover_color', 'raw', true ) ); ?>" title="<?php secretum_text( 'return_to_top_title', true ); ?>">
		<i class="scroll-icon fi-arrow-up" aria-hidden="true"></i>
	</div>
</div>
