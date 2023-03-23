<?php


function extensoes_da_nova_customizer_settings($wp_customize)
{

    // Add Header Section
    $wp_customize->add_section('extensoes_da_nova_header', array(
        'title' => 'Header',
        'description' => '',
        'priority' => 120,
    ));


    // add a setting for the site logo
    $wp_customize->add_setting('extensoes_da_nova_logo');
    // Add a control to upload the logo
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'extensoes_da_nova_logo',
        array(
            'label' => 'Upload Logo',
            'section' => 'extensoes_da_nova_header',
            'settings' => 'extensoes_da_nova_logo',
        )
    ));

    // add a setting for the site logo width
    $wp_customize->add_setting('extensoes_da_nova_logo_width');
    // Add a control to upload the logo width
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'extensoes_da_nova_logo_width',
        array(
            'type' => 'number',
            'label' => 'Logo width (px)',
            'section' => 'extensoes_da_nova_header',
            'settings' => 'extensoes_da_nova_logo_width',
        )
    ));

    // add a setting for the site logo width
    $wp_customize->add_setting('extensoes_da_nova_paddingtop');
    // Add a control to upload the logo width
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'extensoes_da_nova_paddingtop',
        array(
            'type' => 'number',
            'label' => 'Padding top (px)',
            'section' => 'extensoes_da_nova_header',
            'settings' => 'extensoes_da_nova_paddingtop',
        )
    ));


    // add a setting for the site navbar
    $wp_customize->add_setting('your_navbar_color');
    // Add a control to choose navbar color
    $wp_customize->add_control(
        'your_navbar_color',
        array(
            'type' => 'select',
            'label' => 'Navbar color',
            'section' => 'extensoes_da_nova_header',
            'settings' => 'your_navbar_color',
            'choices' => array(
                'dark' => __('Dark'),
                'light' => __('Light'),
            ),
        )
    );



    // add a setting for the site navbar
    $wp_customize->add_setting('your_navbar_alignment');
    // Add a control to choose navbar alignment
    $wp_customize->add_control(
        'your_navbar_alignment',
        array(
            'type' => 'select',
            'label' => 'Navbar alignment',
            'section' => 'extensoes_da_nova_header',
            'settings' => 'your_navbar_alignment',
            'choices' => array(
                'center' => __('Center'),
                'left' => __('Left'),
                'right' => __('Right'),
            ),
        )
    );

    // add a setting for the site navbar
    $wp_customize->add_setting('your_navbar_container');
    // Add a control to choose navbar container
    $wp_customize->add_control(
        'your_navbar_container',
        array(
            'type' => 'checkbox',
            'label' => 'Add container',
            'section' => 'extensoes_da_nova_header',
            'settings' => 'your_navbar_container',
        )
    );



    // Add Footer Section
    $wp_customize->add_section('extensoes_da_nova_footer', array(
        'title' => 'Footer',
        'description' => '',
        'priority' => 120,
    ));
    // add a setting for the site footer
    $wp_customize->add_setting('your_footer_visibility');
    // Add a control to upload the logo
    $wp_customize->add_control(
        'your_footer_visibility',
        array(
            'type' => 'checkbox',
            'label' => 'Hide Footer',
            'section' => 'extensoes_da_nova_footer',
            'settings' => 'your_footer_visibility',
        )
    );

    // add a setting for the site footer
    $wp_customize->add_setting('your_footer_info');
    // Add a control
    $wp_customize->add_control(
        'your_footer_info',
        array(
            'label' => 'Footer info',
            'section' => 'extensoes_da_nova_footer',
            'settings' => 'your_footer_info',
        )
    );
}



/*
 * Adiciona o Menu
 */
function register_my_menus()
{
    register_nav_menus(
        array(
            'navbar' => 'Navbar'
        )
    );
    register_nav_menus(
        array(
            'secondary_navbar' => 'Secondary Navbar'
        )
    );
    register_nav_menus(
        array(
            'fullscreen_menu' => 'Full Screen Menu'
        )
    );
}


function add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'navbar') {
        // add the desired attributes:
        $atts['class'] = "nav-link";
    }
    if ($args->theme_location == 'secondary_navbar') {
        // add the desired attributes:
        $atts['class'] = "secondary_navbar-link";
    }
    if ($args->theme_location == 'fullscreen_menu') {
        // add the desired attributes:
        $atts['class'] = "fullscreen_menu-item";
    }
    return $atts;
}






function extensoes_da_nova_header($atts)
{
    // Enqueue JS when this shortcode loaded.
    wp_enqueue_script('extensoesdanova-js');

    // Enqueue CSS when this shortcode loaded.
    wp_enqueue_style('extensoesdanova-syles');

    // Outputs the HTML
    ob_start();
    include 'parts/extensoes-da-nova-header.php';
    print ob_get_clean();
}


function extensoes_da_nova_footer()
{
    // Enqueue JS when this shortcode loaded.
    wp_enqueue_script('extensoesdanova-js');

    // Enqueue CSS when this shortcode loaded.
    wp_enqueue_style('extensoesdanova-syles');

    // Outputs the HTML
    ob_start();
    include 'parts/extensoes-da-nova-footer.php';
    print ob_get_clean();
}
