<?php
/**
 * Template Name: Empty Template - Content Only
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Secretum
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name');?> - <?php bloginfo('description');?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php wp_head();?>
</head>
<body class="tpl-content-only">

	<?php while (have_posts()) { the_post();?>
		<?php get_template_part('template-parts/post/content', 'blank');?>
	<?php }?>

<?php wp_footer();?>

</body>
</html>
