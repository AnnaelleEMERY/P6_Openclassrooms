<?php

/**
 * Modèle du bloc "PLA - témoignages".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-testimonials-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-testimonials';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


$title = get_field('pla-testimonials_title') ?: 'Votre titre ici ...';

$testimonials = get_field('pla-testimonials_repeater') ?: [];


?>

<!-- Structure du bloc “PLA - témoignages -->
<section class="<?php echo esc_attr($className); ?> pb-0 mb-0" id="<?php echo esc_attr($id); ?>">

    <div class="container mb-8">
        <div class="row justify-content-center">

            <?php
            if (have_rows('pla-testimonials_repeater')) :
                while (have_rows('pla-testimonials_repeater')) : the_row();

                    $image = get_sub_field('pla-testimonials_repeater_image');
                    $name = get_sub_field('pla-testimonials_repeater_name');
                    $testimonial = get_sub_field('pla-testimonials_repeater_testimonial');

                    echo '
                <div class="columns-testimonials col-sm-6 col-lg-4 mt-4">
                    <div class="d-flex flex-row">
                        ' . wp_get_attachment_image($image, 'pla-testimonials_repeater_image', false, ['class' => 'testimonials-img w-100 h-auto']) . '

                        <div class="d-flex flex-column align-items-center justify-content-center testimonials-text ms-2">
                            <h3 class="mb-2 align-self-start">' . $name . '</h3>
                            <p class="ps-0 pe-0">' . $testimonial . '</p>
                        </div>
                    </div>
                </div>
                ';

                endwhile;
            endif;
            ?>

        </div>
    </div>

    <img class="mb-0 mt-5 w-100" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/canettes.png'; ?>" width="1489" height="262" alt="Canettes Planty">


</section>