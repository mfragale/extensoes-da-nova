<?php

/**
 * Plugin init hook
 */
add_action('init', 'extensoes_da_nova', 10);

/**
 * Add wp_enqueue_scripts hook for Javascript files
 */
add_action('wp_enqueue_scripts', 'extensoes_da_nova_js', true);

/**
 * Add wp_enqueue_scripts hook for CSS files
 */
add_action('wp_enqueue_scripts', 'extensoes_da_nova_css', 100);
