<?php

if (!function_exists('oparty_setup')):

    function oparty_setup()
    {
        // Fonctionnalité de thème:
        // Je demande à WP de générer pour moi la balise <title>
        add_theme_support('title-tag');

        // Fonctionnalité de thème:
        // Je demande à WP d'activer les images de mise en avant
        add_theme_support('post-thumbnails');
    }

endif;

add_action('after_setup_theme', 'oparty_setup');