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

<body <?php body_class(); ?>>

<header class="mainheader header-main">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
		  <?php 
		 	$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		  ?>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="Zillion"></a>
        <button id="nav-icon1" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav justify-content-center mx-auto nav-zillion">
            <li class="nav-item">
              <a class="nav-link" href="experties.html">What we do <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">Who are we</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insights.html">Insights</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="our-people.html">Our People</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.html">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="join.html">Join us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Get In Touch</a>
            </li>
          </ul>
          <div class="header-right-wrap mt-50">
            <ul>
              <li>
                <a href="#"><span>Explore More</span> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
	</header>
	
<div id="page" class="site">
	<div id="content" class="site-content">
