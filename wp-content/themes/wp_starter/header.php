<!DOCTYPE html>
<html>
  <head>
    <meta name="charset" content="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content= "<?php bloginfo('description') ?>">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php define('<?php echo ASSETS_URL', get_template_directory_uri() . "/assets/"); ?>
  </head>

  <!-- NAVIGACIJA -->
  <div class="header">
   <div class=" main-text container flex-container">
    <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
    echo "<img src='$logo'>";
    ?>
    <div id="burger-btn">
      <div class="burger-btn"></div>
      <div class="burger-btn"></div>
      <div class="burger-btn"></div>
    </div>
  <!-- APSIRASOME NAVIGACIJA  -->
    <?php wp_nav_menu(array(
      'theme_location' => 'top-menu',
      'menu_class' => 'navigation flex-container',
      'container' => 'div',
      'container_class' => 'main-text container flex-container',
      'container_id' => 'nav-list'
    )); ?>
  </div>
  </div>
<body>
