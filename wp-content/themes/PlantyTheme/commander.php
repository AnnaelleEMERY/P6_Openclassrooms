<?php

/*
Template Name: commander
*/

get_header();
get_template_part('template-parts/header');

?>

<main class="commander-main bg-tertiary">
    <section class="container d-flex">
        <h1 class="h1-commander"><?php the_title(); ?></h1>
    </section>

    <section class="container white-border-top-bottom">
        <h2 class="color-white mb-3"><?php echo "Votre commande" ?></h2>

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

    <section class="container">
        <p>formulaire</p>
    </section>
</main>

<?php get_template_part('template-parts/footer'); ?>
<?php get_footer(); ?>