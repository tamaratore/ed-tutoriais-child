<?php
add_action('wp_enqueue_scripts', function () {
  $parent = 'divi-style';
  wp_enqueue_style($parent, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('ed-child-style', get_stylesheet_uri(), [$parent], '1.0.0');
});
