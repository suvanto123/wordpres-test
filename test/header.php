<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<header>
  <div class="burger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'header-menu',
      'menu_class' => 'navbar' 
    )
  );
  ?>
</header>
  <div class="container">