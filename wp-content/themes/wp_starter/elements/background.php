<section class = "background background-main">
  <div class="background-wrap">
    <video id="top-video" preload="auto" autoplay="true" loop="loop" muted="muted">
      <source src="<?php the_field('background_video') ?>" type="video/mp4">
    </video>
    </div>
    <div class="content">
      <h1 align="center"><?php the_field('top_background_heading') ?></h1>
      <div align="center" class="line" style="padding:10px">
        <img src="<?php the_field('white_ornament') ?>" alt="White ornament">
      </div>
      <div class="line" align='center'>
        <div style="display:inline-block; padding:10px; max-width:220px;">
          <?php wp_nav_menu(array(
            'theme_location' => 'background_menu',
            'menu_class' => 'navigation',
            'container' => 'div',
            'container_class' => 'nav-style'
          )); ?>
        </div>
      </div>
    </div>
  </section>
