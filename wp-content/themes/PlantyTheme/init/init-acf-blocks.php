<?php
// Déclarer un bloc Gutenberg avec ACF
function capitaine_register_acf_block_types()
{

    acf_register_block_type(array(
        'name'              => 'pla-home-banner',
        'title'             => 'PLA - Bannière accueil',
        'description'       => "",
        'render_template'   => './template-parts/blocks/pla-home-banner.php',
        'category'          => 'planty',
        'icon'              => 'admin-plugins',
        'keywords'          => array('bannière', 'accueil', 'bannière d\'accueil'),
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'pla-blocks',
                get_template_directory_uri() . '/scss/blocks/pla-home-banner.scss'
            );
        }
    ));

    acf_register_block_type(array(
        'name'              => 'pla-testimonials',
        'title'             => 'PLA - Témoignages',
        'description'       => "",
        'render_template'   => './template-parts/blocks/pla-testimonials.php',
        'category'          => 'planty',
        'icon'              => 'admin-plugins',
        'keywords'          => array('testimonials', 'témoignages', 'avis'),
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'pla-blocks',
                get_template_directory_uri() . '/scss/blocks/pla-testimonials.scss'
            );
        }
    ));

    acf_register_block_type(array(
        'name'              => 'pla-meeting-banner',
        'title'             => 'PLA - Bannière nous rencontrer',
        'description'       => "",
        'render_template'   => './template-parts/blocks/pla-meeting-banner.php',
        'category'          => 'planty',
        'icon'              => 'admin-plugins',
        'keywords'          => array('meeting', 'nous rencontrer', 'bannière'),
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'pla-blocks',
                get_template_directory_uri() . '/scss/blocks/pla-meeting-banner.scss'
            );
        }
    ));

    acf_register_block_type(array(
        'name'              => 'pla-team',
        'title'             => 'PLA - Team',
        'description'       => "",
        'render_template'   => './template-parts/blocks/pla-team.php',
        'category'          => 'planty',
        'icon'              => 'admin-plugins',
        'keywords'          => array('team', 'équipe'),
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'pla-blocks',
                get_template_directory_uri() . '/scss/blocks/pla-team.scss'
            );
        }
    ));

    acf_register_block_type(array(
        'name'              => 'pla-contact-us',
        'title'             => 'PLA - Nous contacter',
        'description'       => "",
        'render_template'   => './template-parts/blocks/pla-contact-us.php',
        'category'          => 'planty',
        'icon'              => 'admin-plugins',
        'keywords'          => array('nous contacter', 'formulaire nous contacter'),
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'pla-blocks',
                get_template_directory_uri() . '/scss/blocks/pla-contact-us.scss'
            );
        }
    ));

    acf_register_block_type(array(
        'name'              => 'pla-tastes',
        'title'             => 'PLA - Tastes',
        'description'       => "",
        'render_template'   => './template-parts/blocks/pla-tastes.php',
        'category'          => 'planty',
        'icon'              => 'admin-plugins',
        'keywords'          => array('tastes', 'gouts'),
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'pla-blocks',
                get_template_directory_uri() . '/scss/blocks/pla-tastes.scss'
            );
        }
    ));
}

add_action('acf/init', 'capitaine_register_acf_block_types');
