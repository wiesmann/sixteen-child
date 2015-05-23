<?php

function sixteen_child_scripts() {
  if (function_exists('the_curlang')) {
    $timeago_i18n_path = '/js/jquery.timeago.' . the_curlang() . '.js';
    $timeago_i18n_name = 'sixteen-child-timeago-' . the_curlang();
    wp_enqueue_script($timeago_i18n_name, get_template_directory_uri() . $timeago_i18n_path, array('jquery') );
  }
}

function sixteen_child_setup() {
  load_child_theme_textdomain( 'sixteen-child', get_stylesheet_directory() . '/languages' );
  add_action( 'wp_enqueue_scripts', 'sixteen_child_scripts' );
}

add_action('after_setup_theme', 'sixteen_child_setup' );

?>
