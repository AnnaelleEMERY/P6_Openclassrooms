<?php

get_header();
get_template_part('template-parts/header');

?>

<main>
    <?php echo the_content(); ?>
</main>


<?php get_template_part('template-parts/footer'); ?>
<?php get_footer(); ?>