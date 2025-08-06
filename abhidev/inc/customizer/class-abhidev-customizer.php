<?php
/**
 * Customizer Setup Class
 */

class AbhiDev_Customizer {
    public function __construct() {
        add_action('customize_register', array($this, 'register'));
        add_action('customize_preview_init', array($this, 'preview_js'));
        add_action('wp_head', array($this, 'output_css'), 100);
    }

    public function register($wp_customize) {
        // Remove default sections (optional)
        $wp_customize->remove_section('colors');
        $wp_customize->remove_section('background_image');

        // Load custom control sections
        require_once get_template_directory() . '/inc/customizer/controls/typography.php';
        require_once get_template_directory() . '/inc/customizer/controls/color.php';
        require_once get_template_directory() . '/inc/customizer/controls/layout.php';
        require_once get_template_directory() . '/inc/customizer/sanitize.php';

        // Add main panel
        $wp_customize->add_panel('abhidev_options', array(
            'title'    => __('AbhiDev Options', 'abhidev'),
            'priority' => 10,
        ));

        // Add custom sections (make sure these functions exist in included files)
        if (function_exists('abhidev_add_general_section')) {
            abhidev_add_general_section($wp_customize);
        }
        if (function_exists('abhidev_add_header_section')) {
            abhidev_add_header_section($wp_customize);
        }
        if (function_exists('abhidev_add_footer_section')) {
            abhidev_add_footer_section($wp_customize);
        }
        if (function_exists('abhidev_add_typography_section')) {
            abhidev_add_typography_section($wp_customize);
        }
        if (function_exists('abhidev_add_colors_section')) {
            abhidev_add_colors_section($wp_customize);
        }
        if (function_exists('abhidev_add_layout_section')) {
            abhidev_add_layout_section($wp_customize);
        }
        if (function_exists('abhidev_add_blog_section')) {
            abhidev_add_blog_section($wp_customize);
        }
    }

    public function preview_js() {
        wp_enqueue_script(
            'abhidev-customizer-preview',
            get_template_directory_uri() . '/assets/js/customizer.js',
            array('customize-preview'),
            (defined('ABHIDEV_VERSION') ? ABHIDEV_VERSION : '1.0.0'),
            true
        );
    }

    public function output_css() {
        $primary_color = get_theme_mod('primary_color', '#0274be');

        $css = '';
        if ($primary_color !== '#0274be') {
            $css .= "
                a, .site-title a { color: {$primary_color}; }
                button, input[type='button'], input[type='submit'] { background-color: {$primary_color}; }
            ";
        }

        if (!empty($css)) {
            echo '<style type="text/css" id="abhidev-custom-css">' . wp_strip_all_tags($css) . '</style>';
        }
    }
}

// Initialize the class
new AbhiDev_Customizer();
