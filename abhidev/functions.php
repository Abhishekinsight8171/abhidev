<?php
/**
 * AbhiDev functions and definitions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Define theme version
define('ABHIDEV_VERSION', '1.0.0');
define('ABHIDEV_THEME_DIR', get_template_directory());
define('ABHIDEV_THEME_URI', get_template_directory_uri());

// Setup Theme
require ABHIDEV_THEME_DIR . '/inc/setup.php';

// Theme Hooks
require ABHIDEV_THEME_DIR . '/inc/hooks.php';

// Customizer
require ABHIDEV_THEME_DIR . '/inc/customizer/class-abhidev-customizer.php';

// Template Functions
require ABHIDEV_THEME_DIR . '/inc/template-functions.php';

// Widgets
require ABHIDEV_THEME_DIR . '/inc/widgets.php';

// Load Google Fonts
require ABHIDEV_THEME_DIR . '/inc/fonts.php';

// Theme Updater Disabler
add_filter('auto_update_theme', '__return_false');