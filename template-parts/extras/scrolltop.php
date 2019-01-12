<?php
/**
 * Scroll To Top Icon
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Active
if ( ! secretum_mod( 'scrolltop' ) ) {
?>
	<div class="scrolltop"><div class="scroll<?php secretum_scrolltop_container(); ?><?php secretum_scrolltop_textuals(); ?>"><i class="fi-arrow-up" aria-hidden="true"></i></div></div>
<?php
}
