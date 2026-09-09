<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    wp_enqueue_style(
        'footer-style',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('theme-style'),
        filemtime(get_stylesheet_directory() . '/assets/css/footer.css')
    );

    wp_enqueue_script(
        'index-js',
        get_template_directory_uri() . '/assets/js/index.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/index.js')
    );

    

});
