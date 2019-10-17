<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zillionAplite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="<?php echo ((is_page('get-in-touch') || is_page('insights'))? 'insights' : ''); ?>" <?php body_class(); ?>>

<?php 
//Created Header Section 
if(is_page('get-in-touch') || is_page('insights')){
	get_template_part('template-parts/header','section2');
}else{
	get_template_part('template-parts/custom','header');
}


//Created All Page Banner
get_template_part('template-parts/content','banner');

?>

	

