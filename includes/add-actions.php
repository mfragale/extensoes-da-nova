<?php

/**
 * Plugin init hook
 */
add_action('init', 'extensoes_da_nova_form_init', 10);

/**
 * Admin page
 */
// add_action('admin_menu', 'extensoesdanova_add_options_link');
// add_action('admin_init', 'extensoesdanova_register_settings');

/**
 * Add wp_enqueue_scripts hook for Javascript files
 */
add_action('wp_enqueue_scripts', 'extensoes_da_nova_js', true);

/**
 * Add wp_enqueue_scripts hook for CSS files
 */
add_action('wp_enqueue_scripts', 'extensoes_da_nova_css');

// WP Customizer
add_action('customize_register', 'extensoes_da_nova_customizer_settings');

// Header
add_action('wp_body_open', 'extensoes_da_nova_header');

// Footer
add_action('wp_footer', 'extensoes_da_nova_footer');

//Register Menus
add_action('init', 'register_my_menus');
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);
