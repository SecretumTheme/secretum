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
 */

namespace Secretum;

// If Active.
if ( ! secretum_mod( 'scrolltop' ) ) {
?>
	<div class="scrolltop"><div class="scroll<?php secretum_scrolltop_container(); ?><?php secretum_scrolltop_textuals(); ?>"><i class="fi-arrow-up" aria-hidden="true"></i></div></div>
<?php
}
