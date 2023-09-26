<?php

/**
 * Modèle du bloc "PLA - bannière nous rencontrer".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-meeting-banner-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-meeting-banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


$title = get_field('pla-meeting-banner_title') ?: 'Votre titre ici ...';
$description = get_field('pla-meeting-banner_description') ?: 'Votre description ici ...';


?>

<!-- Structure du bloc “PLA - bannière nous rencontrer -->
<section class="<?php echo esc_attr($className); ?> bg-secondary d-flex text-center" id="<?php echo esc_attr($id); ?>">

    <div class="container">

        <img class="w-100 meeting-flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner-flower.png'; ?>" width="145" height="150" alt="Fleur bannière nous rencontrer">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="primary-color mb-2"><?php echo $title ?></h1>
            <p class="meeting-text"><?php echo $description ?></p>
        </div>

    </div>

</section>