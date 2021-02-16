<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="<?php if (is_front_page()): ?> homePage <?php endif; ?> dtopHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="mainMenu">
                    <!-- Menu -->
                    <div class="navCont">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'main_menu',
                            'menu_id' => 'mainMenu',
                            'menu_class' => 'mainMenu'
                        ]);
                        ?>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
