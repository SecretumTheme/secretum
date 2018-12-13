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
<div class="scrolltop"><div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div></div>
<?php
}
