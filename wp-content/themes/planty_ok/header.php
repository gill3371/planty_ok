<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php bloginfo('desc') ?>">
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap" rel="stylesheet">    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/theme.css">
    <?php wp_head(); ?>
    <title><?php bloginfo('name') ?></title>
</head>

<body>

<header>
    <div class="logo">
        <a href="<?php echo site_url() ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo Planty">
        </a>
    </div>
    <nav>
        <?php
           wp_nav_menu( array(
            'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            'menu_class'		=> "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            'menu_id'			=> "m_planty", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
            'container'			=> "",
            'theme_location' => "planty_menu"
        ) );
        ?>
    </nav>
</header>
