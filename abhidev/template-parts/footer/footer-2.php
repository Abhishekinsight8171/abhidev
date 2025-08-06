<footer id="colophon" class="site-footer footer-style-2">
    <div class="container">
        <div class="site-info text-center">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </div>
            
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'menu_id' => 'footer-menu',
                'depth' => 1,
                'container_class' => 'footer-menu-container',
            ]);
            ?>
        </div>
    </div>
</footer>