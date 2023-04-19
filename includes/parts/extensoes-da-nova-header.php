<style>
    body.admin-bar #header .navbar.fixed-top {
        top: 32px;
    }

    @media only screen and (max-width: 782px) {
        body.admin-bar #header .navbar.fixed-top {
            top: 46px;
        }
    }

    header {
        margin-bottom: <?php echo get_theme_mod('extensoes_da_nova_paddingtop'); ?>px;
    }
</style>

<?php if (!is_page_template('blank-page-template.php')) { ?>

    <!-- Header -->
    <header id="header">

        <nav class="navbar fixed-top navbar-expand <?php if (get_theme_mod('extensoes_da_nova_navbar_color') == "light") {
                                                        echo "navbar-light bg-light";
                                                    } else {
                                                        echo "navbar-dark bg-dark";
                                                    }
                                                    ?>">
            <div class="<?php if (get_theme_mod('extensoes_da_nova_navbar_container')) {
                            echo "container";
                        } else {
                            echo "container-fluid";
                        }
                        ?>">

                <!-- Logo -->
                <a class="navbar-brand" href="<?php echo get_site_url(); ?>" style="width: <?php echo get_theme_mod('extensoes_da_nova_logo_width'); ?>px">
                    <?php
                    // check to see if the logo exists and add it to the page
                    if (get_theme_mod('extensoes_da_nova_logo')) : ?>

                        <?php echo wp_get_attachment_image(get_theme_mod('extensoes_da_nova_logo'), 'full'); ?>

                    <?php // add a fallback if the logo doesn't exist
                    else : ?>

                        <h1 class="site-title"><?php bloginfo('name'); ?></h1>

                    <?php endif; ?>

                </a>

                <!-- Menu principal -->
                <?php include(plugin_dir_path(__FILE__) . 'menus/navbar-menu.php');
                ?>


                <!-- FULL SCREEN MENU TOGGLE BUTTON -->
                <?php if (wp_get_nav_menu_items(get_nav_menu_locations()['fullscreen_menu'])) : ?>
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                <?php endif; ?>

            </div>

            <!-- Menu secundário -->
            <?php include(plugin_dir_path(__FILE__) . 'menus/secondary-navbar-menu.php');
            ?>

        </nav>

        <!-- FULL SCREEN MENU -->
        <?php include(plugin_dir_path(__FILE__) . 'menus/fullscreen-menu.php');
        ?>

    </header>

<?php }    ?>