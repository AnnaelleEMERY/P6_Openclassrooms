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

?>

<!-- Structure du bloc “PLA - bannière nous rencontrer -->
<section class="<?php echo esc_attr($className); ?> container" id="<?php echo esc_attr($id); ?>">


</section>