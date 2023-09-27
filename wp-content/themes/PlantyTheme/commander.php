<?php

/*
Template Name: commander
*/

get_header();
get_template_part('template-parts/header');

?>

<main class="commander-main bg-tertiary">
    <section class="container d-flex justify-content-center">
        <h1 class="h1-commander"><?php the_title(); ?></h1>
    </section>

    <?php echo the_content(); ?>

</main>

<?php get_template_part('template-parts/footer'); ?>
<?php get_footer(); ?>