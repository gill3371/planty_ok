<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // // Chargement du style.css du thème parent BlankSlate 
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du theme.css du thème enfant Planty 
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}

// Désactivation des styles Gutenberg

add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
});

// Enregister un menu personnalisé

add_action('init', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('planty_menu', __('Menu Planty'));
}


// Hook pour l'affichage du menu Admin

add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'planty_menu') {
        $items .= '<li class="admin_menu"><a href="#">Admin</a></li>';
    }
    return $items;
}
