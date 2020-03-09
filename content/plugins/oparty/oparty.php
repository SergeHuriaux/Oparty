<?php
/*
Plugin Name: oParty
Description: Mise en place de paramètres pour le thème oParty
Author: Alex, Sergio, Fabien et le beau Juju
Version: 1.0.0
*/

// Sécurisation
if (!defined('WPINC')) {die();}

class oParty
{
    public function __construct()
    {
        add_action('init', [$this, 'registerCpt']);
        add_action('init', [$this, 'registerTaxonomies']);
    }

    public function registerCpt()
    {
        $this->registerCptTheme();
    }

    private function registerCptTheme()
    {
        $labels = [
            'name'               => 'Thèmes',
            'singular_name'      => 'Thème',
            'menu_name'          => 'Thèmes',
            'name_admin_bar'     => 'Thème',
            'add_new'            => 'Ajouter un thème',
            'add_new_item'       => 'Ajouter un nouveau thème',
            'new_item'           => 'Nouveau thème',
            'edit_item'          => 'Editer un thème',
            'view_item'          => 'Voir le thème',
            'all_items'          => 'Voir tous les thèmes',
            'search_items'       => 'Rechercher un thème',
            'not_found'          => 'Aucun thème trouvé',
            'not_found_in_trash' => 'Aucun thème trouvé dans la corbeille',
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-buddicons-community',
            'hierarchical' => false,
            'supports' => [
                'title',
                'thumbnail',
                'editor',
                'custom-fields',
            ],
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'mes-thèmes'
            ],
        ];

        register_post_type('theme', $args);
    }

    public function registerTaxonomies()
    {
        register_taxonomy(
            'byAge',
            'theme',
            [
                'label' => 'Catégorie d\'âge',
                'public' => true,
                'hierarchical' => false,
                'rewrite' => [
                    'slug' => 'categorie-age'
                ],
                'show_admin_column' => true
            ]
        );

        register_taxonomy(
            'univers',
            'theme',
            [
                'label' => 'Univers',
                'public' => true,
                'hierarchical' => false,
                'rewrite' => [
                    'slug' => 'univers'
                ],
                'show_admin_column' => true
            ]
        );

        register_taxonomy(
            'star',
            'theme',
            [
                'label' => 'Thème à la une',
                'public' => true,
                'hierarchical' => false,
                'rewrite' => [
                    'slug' => 'star'
                ],
                'show_admin_column' => true
            ]
        );
      }

 
    public function activate()
    {
        // J'execute la méthode de mon plugin qui permet de déclarer mes nouvelles routes (mon CPT)
        $this->registerCpt();
        $this->registerTaxonomies();

        // PUIS
        // Je souhaite regénérer les routes (mais également les droits d'une manière générale)
        flush_rewrite_rules(false);
    }

    public function deactivate()
    {
        // Je souhaite regénérer les routes (mais également les droits d'une manière générale)
        flush_rewrite_rules(false);
    }
}

$oParty = new oParty();

// A l'activation du plugin... fait ca !
register_activation_hook(__FILE__, [$oParty, 'activate']);

// A la désactivation du plugin... fait ca !
register_deactivation_hook(__FILE__, [$oParty, 'deactivate']);