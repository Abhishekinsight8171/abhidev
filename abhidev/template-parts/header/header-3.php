<header id="masthead" class="header-style-3">
    <div class="container">
        <div class="site-branding">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php endif; ?>
        </div>
        
        <div class="header-bottom">
            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container_class' => 'primary-menu-container',
                ]);
                ?>
            </nav>
            
            <div class="header-search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>