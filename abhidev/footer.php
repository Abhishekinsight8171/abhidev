<?php
if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}
?>
<?php
/**
 * The template for displaying the footer
 */
?>
        </div><!-- #content -->
        
        <?php 
        // Get footer style from customizer
        $footer_style = get_theme_mod('footer_layout', 'footer-1');
        get_template_part('template-parts/footer/' . $footer_style);
        ?>
        
    </div><!-- #page -->
    
    <?php wp_footer(); ?>
</body>
</html>