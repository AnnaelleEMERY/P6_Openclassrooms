<?php

get_header();
get_template_part('template-parts/header');

?>

<main>
    <div class="container">
        <?php echo the_content(); ?>
    </div>
</main>


<?php get_template_part('template-parts/footer'); ?>
<?php get_footer(); ?>