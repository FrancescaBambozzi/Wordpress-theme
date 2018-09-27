<doctype html>
<html <?php language_attributes(); ?>>
 <head>
	 <meta charset="<?php bloginfo('charset');?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- https://www.w3schools.com/css/css_rwd_viewport.asp -->
	 <title><?php wp_title(); ?></title>
	 <?php wp_head(); ?> <!--  It says Wordpress we are at the end of the body tag. Many plugins work with this hook */ -->
 </head>
 <body>


   <header>
     <div id="logo"> <!-- Show the Logo -->
      <?php if ( function_exists( 'the_custom_logo' ) ) {
         the_custom_logo(); } ?>
     </div>

      <div id="top-navigation">

        <?php wp_nav_menu('primary'); ?> <!-- Show the Menu -->

      </div>

   </header>
  <!-- end hero -->

 <section id="main"> <!-- Start main section -->
