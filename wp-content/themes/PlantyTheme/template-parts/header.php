<header>
    <div class=" ps-3 d-flex flex-row justify-content-between align-items-center">
        <a href="/" title="<?php _e('Planty', 'pla'); ?>" class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-planty.png" width="200" height="20" alt="<?php _e('Planty', 'pla'); ?>">
        </a>


        <div class="d-flex justify-content-between align-items-center">
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


            <div class="admin-button">
                <a class="d-flex align-items-center" href="#">
                    <p>Admin</p>
                </a>
            </div>

            <button class="commander-button" type="button">commander</button>
        </div>
    </div>
</header>