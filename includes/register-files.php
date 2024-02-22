<?php

/**
 * Register Javascript scripts and localize variables.
 * @since 1.0.0
 */
function extensoes_da_nova_js()
{
	wp_register_script(
		'extensoesdanova-js',
		plugin_dir_url(__FILE__) . 'js/dist/extensoes-da-nova-functions-min.js',
		array('jquery'),
		'1.1',
		true
	);
}


/**
 * Register CSS files
 * @since 1.0.0
 */
function extensoes_da_nova_css()
{
	wp_register_style(
		'extensoesdanova-css',
		plugin_dir_url(__FILE__) . 'scss/dist/extensoes-da-nova-syles-min.css',
		null,
		'1.1'
	);
}
