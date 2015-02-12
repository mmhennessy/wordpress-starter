<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('firstsite'); ?></title>
  <script src="http://use.edgefonts.net/josefin-slab.js"></script>
  <script src="http://use.edgefonts.net/merriweather.js"></script>
  <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>: charset=<php bloginfo( 'charset' ); ?>"
  <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url');?>"/>
  <?php wp_head(); ?>
  <title><?php bloginfo('firstsite'); ?></title>
</head>
  <body> <?php body_class( $class); ?>>
    <header>
      <h1>Pressed and Squeezed</h1>
      <nav>
        <?php wp_nav_menu(arry( 'menu' => 'Main Nav') ); ?>
        <!--<ul>
          <li>Home</li>
          <li>WordPress</li>
        </ul>-->
      </nav>
    </header>
