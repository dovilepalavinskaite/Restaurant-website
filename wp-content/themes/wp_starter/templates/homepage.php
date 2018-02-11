<?php

/* Template Name: Pradinio puslapio template */

get_header();

?>
<!-- Itraukiame visas sekcijas -->
  <?php get_template_part('elements/background'); ?>
  <!-- define('ASSETS_URL', get_template_directory_uri() . "/images/"); -->
  <?php get_template_part('elements/about-section'); ?>
  <?php get_template_part('elements/ingredients'); ?>
  <?php get_template_part('elements/menu'); ?>
  <?php get_template_part('elements/reviews'); ?>
  <?php get_template_part('elements/reservation'); ?>
  <?php get_footer(); ?>
