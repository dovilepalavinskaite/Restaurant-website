<?php
define('ASSETS_URL', get_template_directory_uri() . "/assets/");

function adding_scripts_and_styles (){
  if(!is_admin()){
  wp_enqueue_style('reset', ASSETS_URL . "css/reset.css", true);
  wp_enqueue_style('stylesheet', ASSETS_URL . "css/style.css", true);
  wp_enqueue_style('fonts', ASSETS_URL . "fonts/stylesheet.css", true);
  }
  if(!is_admin()){
    //adding_scripts
    wp_enqueue_script('jquery', ASSETS_URL . "js/jquery-3.2.1.min.js", array(''), true);
    wp_enqueue_script('javascript', ASSETS_URL . "js/app.js", array('jquery'), true);
  }
}
add_action('init', 'adding_scripts_and_styles');
function disabling_admin_bar(){
  show_admin_bar( false);
}
add_action('init', 'disabling_admin_bar');

// ijungiam meniu wordpresse
function add_theme_supports() {
  add_theme_support('menus');
  add_theme_support('custom-logo');
}
add_action('init', 'add_theme_supports');

//uzregistruos MENIU
function registering_nav_menus(){
  register_nav_menus(array(
    'top-menu' => __('This is the main menu'),
    'background_menu' =>__('This is my background menu')
  ));
}
add_action('init', 'registering_nav_menus');
