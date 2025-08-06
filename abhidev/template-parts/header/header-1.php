<header id="masthead" class="site-header header-style-1">
    <div class="container">
        <div class="site-branding">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                if (is_front_page() && is_home()) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                endif;
                $abhidev_description = get_bloginfo('description', 'display');
                if ($abhidev_description || is_customize_preview()) :
                    ?>
                    <p class="site-description"><?php echo $abhidev_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif;
            }
            ?>
        </div><!-- .site-branding -->
        
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'abhidev'); ?></button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container_class' => 'primary-menu-container',
            ));
            ?>
        </nav><!-- #site-navigation -->
    </div><!-- .container -->
</header><!-- #masthead -->