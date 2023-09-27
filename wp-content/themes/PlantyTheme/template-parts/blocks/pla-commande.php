<?php

/**
 * Modèle du bloc "PLA - Commande".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-commande-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-commande';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


$title = get_field('pla-commande_title') ?: 'Votre titre ici ...';

?>

<!-- Structure du bloc “PLA - Commande -->
<section class="<?php echo esc_attr($className); ?> container white-border-top-bottom" id="<?php echo esc_attr($id); ?>">

    <h2 class="color-white mb-3"><?php echo $title ?></h2>

    <div class="row">
        <div class="col-sm-6 col-lg-3 d-flex flex-column justify-content-center align-items-between">
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fraises.png" width="192.53" height="128.36" alt="<?php _e('fraises', 'pla'); ?>">

            <div class="d-flex fle-row">
                <div class="quantity d-flex flex-row">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <div class="input-number-buttons">

                        <button class="plus-less-buttons plus-button" type="button">+</button>

                        <button class="plus-less-buttons less-button" type="button">-</button>
                    </div>
                </div>

                <button class="ok-button ms-1 mb-2 mt-1" type="button">Ok</button>
            </div>

        </div>

        <div class="col-sm-6 col-lg-3 d-flex flex-column justify-content-center align-items-between">
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pamplemousses.png" width="192.53" height="128.36" alt="<?php _e('pamplemousses', 'pla'); ?>">

            <div class="d-flex fle-row">
                <div class="quantity d-flex flex-row">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <div class="input-number-buttons">

                        <button class="plus-less-buttons plus-button" type="button">+</button>

                        <button class="plus-less-buttons less-button" type="button">-</button>
                    </div>
                </div>

                <button class="ok-button ms-1 mb-2 mt-1" type="button">Ok</button>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 d-flex flex-column justify-content-center align-items-between">
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/framboises.png" width="192.53" height="128.36" alt="<?php _e('framboises', 'pla'); ?>">

            <div class="d-flex fle-row">
                <div class="quantity d-flex flex-row">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <div class="input-number-buttons">

                        <button class="plus-less-buttons plus-button" type="button">+</button>

                        <button class="plus-less-buttons less-button" type="button">-</button>
                    </div>
                </div>

                <button class="ok-button ms-1 mb-2 mt-1" type="button">Ok</button>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 d-flex flex-column justify-content-center align-items-between">
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/citrons.png" width="192.53" height="128.36" alt="<?php _e('citrons', 'pla'); ?>">

            <div class="d-flex fle-row">
                <div class="quantity d-flex flex-row">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <div class="input-number-buttons">

                        <button class="plus-less-buttons plus-button" type="button">+</button>

                        <button class="plus-less-buttons less-button" type="button">-</button>
                    </div>
                </div>

                <button class="ok-button ms-1 mb-2 mt-1" type="button">Ok</button>
            </div>
        </div>
    </div>

</section>