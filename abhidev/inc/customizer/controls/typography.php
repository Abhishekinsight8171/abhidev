<?php
/**
 * Typography Customizer Section
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function abhidev_add_typography_section($wp_customize) {
    $wp_customize->add_section('abhidev_typography_section', array(
        'title'    => __('Typography Settings', 'abhidev'),
        'panel'    => 'abhidev_options',
        'priority' => 30,
    ));

    // Body Font Family
    $wp_customize->add_setting('body_font_family', array(
        'default'           => 'Inter, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('body_font_family', array(
        'label'    => __('Body Font Family', 'abhidev'),
        'section'  => 'abhidev_typography_section',
        'type'     => 'text',
        'description' => __('e.g., Inter, Roboto, Arial, etc.', 'abhidev'),
    ));

    // Base Font Size
    $wp_customize->add_setting('body_font_size', array(
        'default'           => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('body_font_size', array(
        'label'    => __('Base Font Size', 'abhidev'),
        'section'  => 'abhidev_typography_section',
        'type'     => 'text',
        'description' => __('e.g., 14px, 16px, 18px', 'abhidev'),
    ));
}
