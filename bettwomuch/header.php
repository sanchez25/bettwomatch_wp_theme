<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body style="background-image: url(<?php echo get_template_directory_uri() ?>/img/background.jpg)">
    <header>
        <div class="header-block">
            <div class="header-logo">
                <a href="/">
                    <img class="header-logo-img" src="<?php echo get_template_directory_uri() ?>/img/bet2mutch-logo.png">
                </a>
            </div>
            <div class="header-menu">
                <?php wp_nav_menu(); ?>
            </div>
            <div class="menu-mobile-button">
                <div class="mobile-button-ikon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
        <div class="mobile-menu-content">
            <div class="menu-content-head">
                <span class="close-block-button"></span>
            </div>
            <div class="mobile-menu-logo">
              <a href="/" class="menu-content-logo">
                <img class="header-logo-img" src="<?php echo get_template_directory_uri() ?>/img/bet2mutch-logo.png">
              </a>
            </div>
            <div class="menu-content-items">
                <?php wp_nav_menu(); ?>
            </div>
        </div>
      </div>
    </header>
