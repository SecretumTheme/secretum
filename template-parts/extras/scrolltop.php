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
<div class="scrolltop"><div class="scroll icon<?php echo secretum_scrolltop_container(); ?>"><i class="fa fa-4x fa-angle-up<?php echo secretum_scrolltop_textuals(); ?>"></i></div></div>
<?php
}
