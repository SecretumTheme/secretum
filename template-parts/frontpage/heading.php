<?php
/**
 * Front-page Heading Area Display
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Active
if ( secretum_mod( 'frontpage_header_status' ) ) {
?>
<div class="frontpage-heading w-100<?php secretum_frontpage_wrapper();?>" id="frontpage-heading"<?php secretum_frontpage_bg_style(); ?>>
	<?php secretum_mod( 'frontpage_heading_html', 'html' ); ?>
</div><!-- .frontpage-heading -->
<?php
}
