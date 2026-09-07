<?php

function mon_theme_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => __('Menu Principal', 'mon-theme'),
    ));
}
add_action('after_setup_theme', 'mon_theme_setup');

function mon_theme_scripts()
{
    wp_enqueue_style('mon-theme-style', get_stylesheet_uri(), array(), '1.0.0');

    if (is_page_template('accueil.php')) {

        // Google Fonts (Bangers + Roboto)
        wp_enqueue_style(
            'zenkai-google-fonts',
            'https://fonts.googleapis.com/css2?family=Bangers&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
            array(),
            null
        );

        // Variables — doit être chargé en premier (dépendance des 2 autres)
        wp_enqueue_style(
            'zenkai-style',
            get_template_directory_uri() . '/style.css',
            array(),
            '1.0.0'
        );

        wp_enqueue_style(
            'zenkai-news-carousel',
            get_template_directory_uri() . '/assets/css/news-carousel.css',
            array('zenkai-style'),
            '1.0.0'
        );

        wp_enqueue_style(
            'zenkai-top-anime',
            get_template_directory_uri() . '/assets/css/top-anime.css',
            array('zenkai-style'),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'mon_theme_scripts');
