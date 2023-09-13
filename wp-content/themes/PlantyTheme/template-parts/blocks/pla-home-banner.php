<?php

/**
 * Modèle du bloc "PLA - bannière accueil".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-home-banner-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-home-banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


$title = get_field('pla-home-banner_title') ?: 'Votre titre ici ...';

?>

<!-- Structure du bloc “PLA - Bannière accueil -->
<section class="<?php echo esc_attr($className); ?> bg-secondary" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <h1 class="h1-banner text-center"><?php echo $title ?></h1>
    </div>

    <div class="d-flex flex-row justify-content-center align-items-center">
        <img class="w-100 feuilles-gauche" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feuilles-gauche.png" width="349" height="400" alt="feuilles vers la gauche">
        <img class="w-100 canette" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/canette.png" width="387" height="618" alt="canette">
        <img class="w-100 feuilles-droite" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feuilles-droite.png" width="349" height="400" alt="feuilles vers la droite">
    </div>
</section>