<?php

if (!function_exists('oparty_enqueue')):

    function oparty_enqueue()
    {
        wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), '', true);
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '', true);
        wp_enqueue_script('boot3', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '', true);
        wp_enqueue_style('style', get_theme_file_uri('public/css/style.css'), [], '1.0.0');
        wp_enqueue_script('app', get_theme_file_uri('public/js/app.js'), [], '1.0.0', true);
    }

endif;

add_action('wp_enqueue_scripts', 'oparty_enqueue');
