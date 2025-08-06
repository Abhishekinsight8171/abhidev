<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-widgets">
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
        </div>
        
        <div class="site-info">
            <div class="copyright">
                <?php
                $copyright_text = get_theme_mod('footer_copyright', sprintf(
                    esc_html__('Copyright &copy; %1$s %2$s. All Rights Reserved.', 'abhidev'),
                    date('Y'),
                    get_bloginfo('name')
                ));
                echo wp_kses_post($copyright_text);
                ?>
            </div>
            
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id' => 'footer-menu',
                'depth' => 1,
                'container_class' => 'footer-menu-container',
            ));
            ?>
        </div><!-- .site-info -->
    </div><!-- .container -->
</footer><!-- #colophon -->