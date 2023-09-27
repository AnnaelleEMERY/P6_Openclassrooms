<?php

/**
 * Modèle du bloc "PLA - Nous contacter".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-contact-us-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-contact-us';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


$title = get_field('pla-contact-us_title') ?: 'Votre titre ici ...';
$form_code = get_field('pla-contact-us_shortcode') ?: 'Votre shortcode ici...';

?>

<!-- Structure du bloc “PLA - Nous contacter -->
<section class="<?php echo esc_attr($className); ?> bg-secondary pb-0 mb-0" id="<?php echo esc_attr($id); ?>">

    <div class="container text-center d-flex flex-column justify-content-center align-items-center">

        <h2 class="color-black"><?php echo $title ?></h2>

        <div class="text-start">
            <?php echo do_shortcode('' . $form_code . ''); ?>
            <img class="mb-0 w-100 contact-us-flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/contact-us-flower.png'; ?>" width="147" height="134" alt="Plante sous formulaire de contact">
        </div>

    </div>

    <img class="mb-0 mt-5 w-100" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/canettes.png'; ?>" width="1489" height="262" alt="Canettes Planty">


</section>