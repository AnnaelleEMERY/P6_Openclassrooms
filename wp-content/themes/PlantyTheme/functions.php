<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('twentytwenty-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('planty-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', ['jquery'], '1.0.0', true);
    wp_enqueue_style('planty-style', get_stylesheet_directory_uri() . '/build/global.css', array(), filemtime(get_stylesheet_directory() . '/build/global.css'));
}

// END ENQUEUE PARENT ACTION


// Create menu ****************************************************************
add_action('init', 'planty_register_menus');
function planty_register_menus()
{
    register_nav_menus(
        [
            'main-nav' => __('Menu principal', 'pla'),
            'footer-nav' => __('Menu pied de page', 'pla'),
        ]
    );
}

// ACF INIT *****************************************************************
include_once(get_stylesheet_directory() . '/init/init-acf-blocks.php');

add_filter('acf/settings/save_json', 'planty_json_save_point');
function planty_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/init/init-acf-field-group/';
    return $path;
}

add_filter('acf/settings/load_json', 'planty_json_load_point', 1);
function planty_json_load_point($paths)
{
    $paths[] = get_stylesheet_directory() . '/init/init-acf-field-group/';

    return $paths;
}

add_filter('acf/load_field_group', 'planty_field_group');
function planty_field_group($field_group)
{
    $field_group['acfe_autosync'] = ['json'];

    return $field_group;
}


/* hook bouton ADMIN */
add_filter('wp_nav_menu_items', 'add_admin_link_to_nav_menu', 10, 2);
function add_admin_link_to_nav_menu($items, $args)
{

    if (is_user_logged_in() && $args->menu->term_id == '3') {
        $items .= '<li><a href="' . get_permalink(get_option('/wp-admin')) . '">Administration</a></li>';
    }
    return $items;
}
