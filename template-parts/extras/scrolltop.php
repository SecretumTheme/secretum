<?php
/**
 * Scroll To Top Icon
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Active
if (!secretum_mod('scrolltop')) {
?>
	<div class="scrolltop"><div class="scroll<?php echo secretum_scrolltop_container(); echo secretum_scrolltop_textuals(); ?>"><i class="fi-arrow-up" aria-hidden="true"></i></div></div>
<?php
}
