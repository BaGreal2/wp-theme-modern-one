<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="site-wrapper">

  <header class="site-header">
    <div class="container header-flex">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <?php bloginfo('name'); ?>
      </a>

      <nav class="site-nav">
        <button class="menu-toggle" aria-label="Toggle menu">☰</button>
        <?php
        wp_nav_menu([
          'theme_location' => 'main_menu',
          'container' => false,
          'menu_class' => 'nav-list',
        ]);
        ?>
      </nav>
    </div>
  </header>
