<header id="masthead" class="header-style-2">
    <div class="container">
        <div class="header-inner">
            <div class="site-branding text-center">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>
            
            <nav id="site-navigation" class="main-navigation text-center">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container_class' => 'primary-menu-container',
                ]);
                ?>
            </nav>
        </div>
    </div>
</header>