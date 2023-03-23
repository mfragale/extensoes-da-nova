<?php
/*
 * Plugin Name:		Extensões da Nova
 * Plugin URI:		https://novaigreja.com
 * Description:		Plugin que extende o tema da Divi para as necessidades da Nova.
 * Version:			1.0
 * Author:			Nova Digital Team
 * Author URI:		https://novaigreja.com
 * License:			GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Not called within Wordpress framework
if (!defined('WPINC')) {
	die;
}


/***************
 * global variables
 ***************/

$extensoesdanova_prefix = 'extensoesdanova_';
$extensoesdanova_plugin_name = 'Extensões da Nova';


// retrieve our plugin settings from the options table
$extensoesdanova_options = get_option('extensoesdanova_settings');


ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '../../logs/error.log');
error_log('Extensões da Nova WordPress plugin');

//Localise (Translate into other languages)
load_plugin_textdomain('extensoesdanova', false, dirname(plugin_basename(__FILE__)) . '/languages/');


/***************
 * includes
 ***************/

//extensoesdanova
//include_once dirname(__FILE__) . '/includes/admin-page.php';
include_once dirname(__FILE__) . '/includes/register-files.php';
include_once dirname(__FILE__) . '/includes/functions.php';
include_once dirname(__FILE__) . '/includes/add-actions.php';
