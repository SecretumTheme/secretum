<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_customizer_font_families()
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Font Families
 *
 * @source inc/system/primary-nav/customize/items.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_font_families')) {
	function secretum_customizer_font_families()
	{
		return array(
			'' 					=> __('Theme Default', 'secretum'),
			'arial' 			=> __('Arial, Helvetica, sans-serif', 'secretum'),
			'arialblack' 		=> __('Arial Black, Gadget, sans-serif', 'secretum'),
			'arialnarrow' 		=> __('Arial Narrow, Nimbus Sans L, sans-serif', 'secretum'),
			'bookmanoldstyle' 	=> __('Bookman Old Style, serif', 'secretum'),
			'cambria' 			=> __('Cambria, Times New Roman, Nimbus Roman No9 L, Freeserif, Times, serif', 'secretum'),
			'centurygothic' 	=> __('Century Gothic, Futura, URW Gothic L, sans-serif', 'secretum'),
			'comicsansms' 		=> __('Comic Sans MS, cursive', 'secretum'),
			'constantina' 		=> __('Constantina,Georgia, Nimbus Roman No9 L, serif', 'secretum'),
			'consolas' 			=> __('Consolas, Lucida Console, Bitstream VeraSans Mono, DejaVu Sans Mono, monospace', 'secretum'),
			'comicsansms' 		=> __('Comic Sans MS,  cursive', 'secretum'),
			'couriernew' 		=> __('Courier New, Courier,Freemono, Nimbus Mono L, monospace', 'secretum'),
			'garamond' 			=> __('Garamond, serif', 'secretum'),
			'georgia' 			=> __('Georgia, serif', 'secretum'),
			'helveticaneue' 	=> __('Helvetica Neue, Arial, Liberation Sans, FreeSans,sans-serif', 'secretum'),
			'impact' 			=> __('Impact, Charcoal, sans-serif', 'secretum'),
			'lucidaconsole' 	=> __('Lucida Console,  Monaco, monospace', 'secretum'),
			'lucidasansunicode' => __('Lucida Sans Unicode, Lucida Grande,  sans-serif', 'secretum'),
			'mssansserifserif' 	=> __('MS Sans Serif,  Geneva, sans-serif', 'secretum'),
			'msserif' 			=> __('MS Serif, New York,  serif', 'secretum'),
			'palatinolinotype' 	=> __('Palatino Linotype, Book Antiqua,  Palatino, serif', 'secretum'),
			'symbol' 			=> __('Symbol, sans-serif', 'secretum'),
			'tahoma' 			=> __('Tahoma, Geneva, sans-serif', 'secretum'),
			'timesnewroman'		=> __('Times New Roman,  Times, serif', 'secretum'),
			'trebuchetms' 		=> __('Trebuchet MS,  Helvetica, sans-serif', 'secretum'),
			'verdana' 			=> __('Verdana, Geneva, sans-serif', 'secretum'),
			'webdings' 			=> __('Webdings, sans-serif', 'secretum'),
			'wingdings' 		=> __('Wingdings, Zapf Dingbats,  sans-serif', 'secretum')
		);
	}
}
