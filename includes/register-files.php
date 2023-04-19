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

	wp_register_script(
		'fontawesome',
		'https://kit.fontawesome.com/edc432ff9b.js',
		array(),
		null
	);

	wp_register_script(
		'bootstrap',
		'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js',
		array('jquery'),
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
		'extensoesdanova-syles',
		plugin_dir_url(__FILE__) . 'scss/dist/extensoes-da-nova-syles-min.css',
		null,
		'1.1'
	);
}
