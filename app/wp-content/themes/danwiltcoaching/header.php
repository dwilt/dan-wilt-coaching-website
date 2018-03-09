<!doctype html>
<!--[if lt IE 7]>      <html lang=”en” class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang=”en” class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang=”en” class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang ”en” class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header data-class="header" class="header">
            <div class="container">
                <div class="logo-container">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img class="logo" src="<?php echo IMAGES; ?>/logo.svg" alt="Dan Wilt Coaching">
                    </a>
                </div>
                <?php
                $primaryNav = array(
                    'menu'            => 'Primary Navigation',
                    'menu_class'      => 'primaryNav',
                    'container'       => '',
                );
                wp_nav_menu( $primaryNav );
                ?>
                <a href="#" class="mobileNav__toggle" data-class="nav__toggle">
                    <span class="accessible-text">Click to toggle navigation menu.</span>
                    <div class="menuBar__container">
                        <span class="menuBar"></span>
                        <span class="menuBar"></span>
                        <span class="menuBar"></span>
                    </div>
                </a>
            </div>
        </header>
        <div class="page-container">