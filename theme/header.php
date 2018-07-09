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
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1526983854089034');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1526983854089034&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
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