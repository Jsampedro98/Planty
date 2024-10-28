<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/css/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/css/theme.css')
    );
}

/* Ajout du Hook */

function add_admin_link_to_menu($items, $args)
{

    if (is_user_logged_in() && current_user_can('administrator')) {

        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';


        $needle = 'Nous rencontrer';
        $position = strpos($items, $needle);

        if ($position !== false) {
            $position += strlen($needle);
            $items = substr_replace($items, $admin_link, $position, 0);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
