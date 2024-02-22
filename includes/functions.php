<?php
/*
 * Adds header to theme
 */
function extensoes_da_nova($atts)
{
    // Enqueue JS when this shortcode loaded.
    wp_enqueue_script('extensoesdanova-js');

    // Enqueue CSS when this shortcode loaded.
    wp_enqueue_style('extensoesdanova-css');
}
