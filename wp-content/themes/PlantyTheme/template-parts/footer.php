<footer class="d-flex flex-row justify-content-center align-items-center">
    <?php
    if (has_nav_menu('footer-nav')) {

        wp_nav_menu(
            array(
                'theme_location' => 'footer-nav',
                'menu_class' => 'footer-nav ',
                'container_id' => 'footer-nav',
            )
        );
    }
    ?>
</footer>