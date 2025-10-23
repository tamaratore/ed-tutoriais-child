<?php
/**
 * Plugin Name: ED Core
 * Description: Melhorias globais do site ED Tutoriais.
 * Version: 1.0.0
 * Author: ED Tutoriais
 */
if (!defined('ABSPATH')) exit;

// Exemplo: shortcode [ano]
add_shortcode('ano', function () {
  return date('Y');
});
