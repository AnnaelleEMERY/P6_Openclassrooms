<?php

/**
 * Modèle du bloc "PLA - Team".
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

/* Création de l’attribut id permettant une valeur "d'ancrage" personnalisée */
$id = 'pla-team-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

/* Création des attributs de classes permettant de personnaliser la valeur "className" */
$className = 'pla-team';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$title = get_field('pla-team_title') ?: 'Votre titre ici ...';
$collabs = get_field('pla-team_teammate') ?: [];

?>

<!-- Structure du bloc “PLA - Team -->
<section class="<?php echo esc_attr($className); ?> pb-0" id="<?php echo esc_attr($id); ?>">

    <div class="container d-flex flex-column text-center justify-content-center align-items-center">

        <h2 class="color-black mb-5"><?php echo $title ?></h2>

        <div class="row w-100">

            <?php
            foreach ($collabs as $key => $collab) {

                $name = get_the_title($collab->ID);

                $photo = '';
                if (has_post_thumbnail($collab->ID)) {
                    $photo = wp_get_attachment_image(get_post_thumbnail_id($collab->ID), 'pla-team_img', false, ['class' => 'team-images w-100 h-auto']);
                }

                if ($photo == '') {
                    $thumb_url = get_stylesheet_directory_uri() . '/assets/images/placeholder.png';
                    $photo = '<img class="w-100" src="' . $thumb_url . '" alt="' . esc_html($name) . '">';
                }

                $function = get_the_excerpt($collab->ID);

                echo '

		    <div class="columns-team d-flex flex-column col-sm-6 col-lg-4 text-center mb-3">
                ' . $photo . '
                <h3 class="mt-2 color-black">' . esc_html($name) . '</h3>
				<p class="mt-1 me-0 ms-0">' . esc_html($function) . '</p>
            </div>
        ';
            }
            ?>
        </div>
    </div>

    <img class="w-100 leaf-team" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/feuille-team.png'; ?>" width="191" height="219" alt="Feuille team">

</section>