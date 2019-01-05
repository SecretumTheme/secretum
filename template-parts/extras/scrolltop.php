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
	<div class="scrolltop"><div class="scroll icon<?php echo secretum_scrolltop_container(); ?>"><span class="oi<?php echo secretum_scrolltop_textuals(); ?>" data-glyph="arrow-top" aria-hidden="true"></span></div></div>
<?php
}
