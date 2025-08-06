<?php
/**
 * Layout Customizer Section
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
function abhidev_add_layout_section($wp_customize) {
    $wp_customize->add_section('abhidev_layout_section', array(
        'title'    => __('Layout Settings', 'abhidev'),
        'panel'    => 'abhidev_options',
        'priority' => 10,
    ));

    // Site Container Width
    $wp_customize->add_setting('site_container_width', array(
        'default'           => '1140px',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('site_container_width', array(
        'label'    => __('Site Container Width', 'abhidev'),
        'section'  => 'abhidev_layout_section',
        'type'     => 'text',
        'description' => __('Set the max width for the site container (e.g., 1140px)', 'abhidev'),
    ));

    // Sidebar Position
    $wp_customize->add_setting('sidebar_position', array(
        'default'           => 'right',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sidebar_position', array(
        'label'    => __('Sidebar Position', 'abhidev'),
        'section'  => 'abhidev_layout_section',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => __('Left', 'abhidev'),
            'right' => __('Right', 'abhidev'),
            'none'  => __('No Sidebar', 'abhidev'),
        ),
    ));
}
