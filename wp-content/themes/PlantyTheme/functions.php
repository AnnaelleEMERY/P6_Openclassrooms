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