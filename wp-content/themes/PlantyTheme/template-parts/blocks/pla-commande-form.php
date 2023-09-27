<?php

/**
 * Modèle du bloc "PLA - Formulaire de commande-form".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-commande-form-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-commande-form';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$form_code = get_field('pla-commande-form_shortcode') ?: 'Votre shortcode ici ...';

?>

<!-- Structure du bloc “PLA - Formulaire de commande -->
<section class="<?php echo esc_attr($className); ?> container" id="<?php echo esc_attr($id); ?>">

    <div class="commande-form">
        <?php echo do_shortcode('' . $form_code . ''); ?>
    </div>

</section>