<?php
/**
 * Color Customizer Section
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
function abhidev_add_colors_section($wp_customize) {
    $wp_customize->add_section('abhidev_color_section', array(
        'title'    => __('Color Settings', 'abhidev'),
        'panel'    => 'abhidev_options',
        'priority' => 20,
    ));

    // Primary Color
    $wp_customize->add_setting('primary_color', array(
        'default'           => '#0274be',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Primary Color', 'abhidev'),
        'section'  => 'abhidev_color_section',
        'settings' => 'primary_color',
    )));

    // Secondary Color
    $wp_customize->add_setting('secondary_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __('Secondary Color', 'abhidev'),
        'section'  => 'abhidev_color_section',
        'settings' => 'secondary_color',
    )));
}
