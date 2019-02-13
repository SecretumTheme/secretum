<?php
/**
 * Scroll To Top Icon
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Extras
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/extras/scrolltop.php
 * @since      1.0.0
 */

namespace Secretum;

// Return If Inactive.
if ( true === secretum_mod( 'scrolltop_status' ) ) {
	return;
}
?>

<div class="scrolltop">
	<div class="scroll<?php secretum_container( 'scrolltop', 'echo', [
		'textuals' => true,
	] ); ?>">
		<i class="fi-arrow-up" aria-hidden="true"></i>
	</div>
</div>
