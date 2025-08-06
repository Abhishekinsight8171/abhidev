<?php
/**
 * Theme setup
 */

// Define constants
define('ABHIDEV_VERSION', '1.0.0');
define('ABHIDEV_THEME_URI', get_template_directory_uri());

// Google Fonts URL helper
function abhidev_fonts_url() {
    return 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap';
}

// Theme setup function
if (!function_exists('abhidev_setup')) {
    function abhidev_setup() {
        // Make theme available for translation
        load_theme_textdomain('abhidev', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails
        add_theme_support('post-thumbnails');

        // Register menus
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'abhidev'),
            'footer' => esc_html__('Footer Menu', 'abhidev'),
        ));

        // Switch default core markup to output valid HTML5
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));

        // Add theme support for selective refresh for widgets
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for core custom logo
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-width'  => true,
            'flex-height' => true,
        ));

        // Add support for full and wide align images
        add_theme_support('align-wide');

        // Add support for editor styles
        add_theme_support('editor-styles');
        add_editor_style('assets/css/editor-style.css');

        // Add support for WooCommerce
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        // Optional: Gutenberg block styles
        add_theme_support('wp-block-styles');
        add_theme_support('responsive-embeds');
    }
}
add_action('after_setup_theme', 'abhidev_setup');

// Set content width
if (!isset($content_width)) {
    $content_width = 1140;
}

// Enqueue scripts and styles
function abhidev_scripts() {
    // Main stylesheet
    wp_enqueue_style('abhidev-style', get_stylesheet_uri(), array(), ABHIDEV_VERSION);

    // Main CSS
    wp_enqueue_style('abhidev-main-css', ABHIDEV_THEME_URI . '/assets/css/style.css', array(), ABHIDEV_VERSION);

    // Responsive CSS
    wp_enqueue_style('abhidev-responsive-css', ABHIDEV_THEME_URI . '/assets/css/responsive.css', array(), ABHIDEV_VERSION);

    // Google Fonts
    wp_enqueue_style('abhidev-google-fonts', abhidev_fonts_url(), array(), null);

    // Main JS
    wp_enqueue_script('abhidev-main-js', ABHIDEV_THEME_URI . '/assets/js/main.js', array('jquery'), ABHIDEV_VERSION, true);

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'abhidev_scripts');

// Register widget areas
function abhidev_widgets_init() {
    // Sidebar
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'abhidev'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'abhidev'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Footer Widgets (1 to 3)
    for ($i = 1; $i <= 3; $i++) {
        register_sidebar(array(
            'name'          => esc_html__("Footer $i", 'abhidev'),
            'id'            => "footer-$i",
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'abhidev'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
    }
}
add_action('widgets_init', 'abhidev_widgets_init');
