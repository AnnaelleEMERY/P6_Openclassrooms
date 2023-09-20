<header>
    <div class="ps-md-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
        <a href="/" title="<?php _e('Planty', 'pla'); ?>" class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-planty.png" width="200" height="20" alt="<?php _e('Planty', 'pla'); ?>">
        </a>


        <div class="w-md-100 d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <div class="d-flex justify-content-start align-items-center">
                <?php
                if (has_nav_menu('main-nav')) {

                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-nav',
                            'menu_class' => 'main-nav ',
                            'container_id' => 'main-nav',
                        )
                    );
                }
                ?>
            </div>


            <a class="<?php echo $bg_color ?> commander-button" href="/P6_Openclassrooms/commander/">Commander</a>
        </div>
    </div>
</header>