<?php

/***************
 * Admin page options
 ***************/

function extensoesdanova_options_page()
{

	global $extensoesdanova_options;

	ob_start(); ?>
	<div class="wrap">
		<h2><?php _e('Extensões da Nova', 'extensoesdanova'); ?></h2>

		<form method="post" action="options.php">

			<?php settings_fields('extensoesdanova_settings_group'); ?>

			<h3><?php _e('Header', 'extensoesdanova'); ?></h3>

			<!-- Submut button -->
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Salvar', 'extensoesdanova'); ?>" />
			</p>
			<!-- Submut button -->

		</form>

	</div>
<?php
	echo ob_get_clean();
}


// function extensoesdanova_add_options_link()
// {
// 	add_options_page('Extensões da Nova - Opções do Plugin', 'Extensões da Nova', 'manage_options', 'extensoesdanova-options', 'extensoesdanova_options_page');
// }


// function extensoesdanova_register_settings()
// {
// 	register_setting('extensoesdanova_settings_group', 'extensoesdanova_settings');
// }



// add_filter('extensoes-da-nova/extensoes-da-nova.php', 'extensoesdanova_settings_link');
// function extensoesdanova_settings_link($links)
// {
// 	// Build and escape the URL.
// 	$url = esc_url(add_query_arg(
// 		'page',
// 		'extensoesdanova-options',
// 		get_admin_url() . 'admin.php'
// 	));
// 	// Create the link.
// 	$settings_link = "<a href='$url'>" . __('Settings') . '</a>';
// 	// Adds the link to the end of the array.
// 	array_push(
// 		$links,
// 		$settings_link
// 	);
// 	return $links;
// } //end nc_settings_link()

?>