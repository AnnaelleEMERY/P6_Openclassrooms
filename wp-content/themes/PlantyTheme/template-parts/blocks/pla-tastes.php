<?php

/**
 * Modèle du bloc "PLA - Tastes".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-tastes-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-tastes';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


$title = get_field('pla-tastes_title') ?: 'Votre titre ici ...';
$description = get_field('pla-tastes_description') ?: 'Votre description ici ...';
$btn_title = get_field('pla-tastes_button-title') ?: 'Votre libellé bouton ici ...';
$btn_link = get_field('pla-tastes_button-link') ?: 'Votre lien du bouton ici ...';


?>

<!-- Structure du bloc “PLA - Tastes -->
<section class="<?php echo esc_attr($className); ?> bg-secondary" id="<?php echo esc_attr($id); ?>">
    <div class="container text-center">

        <h2 class="text-center text-uppercase h2-like-h1"><?php echo $title ?></h2>
        <p class="text-center mb-4"><?php echo $description ?></p>


        <div class="fruits-grid row row-cols-1 row-cols-sm-2 mb-4">


            <div class="fruits-grid_divs col">
                <img class="w-100 canette mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fraises.png" width="394" height="263" alt="fraises">
            </div>

            <div class="fruits-grid_divs col">
                <img class="w-100 canette mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pamplemousses.png" width="394" height="263" alt="pamplemousses">
            </div>

            <div class="fruits-grid_divs col">
                <img class="w-100 canette mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/framboises.png" width="394" height="263" alt="framboises">
            </div>

            <div class="fruits-grid_divs col">
                <img class="w-100 canette" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/citrons.png" width="394" height="263" alt="citrons">
            </div>

        </div>

        <a class="btn-primary" href="<?php echo $btn_link ?>"><?php echo $btn_title ?></a>

    </div>

</section>