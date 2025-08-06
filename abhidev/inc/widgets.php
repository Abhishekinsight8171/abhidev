<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access
}

/**
 * Register widget areas.
 */
function abhidev_widgets_init() {
    // Main Sidebar
    register_sidebar( [
        'name'          => __( 'Main Sidebar', 'abhidev' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'abhidev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ] );

    // Footer Widgets (3 columns)
    for ( $i = 1; $i <= 3; $i++ ) {
        register_sidebar( [
            'name'          => sprintf( __( 'Footer Widget Area %d', 'abhidev' ), $i ),
            'id'            => 'footer-' . $i,
            'description'   => sprintf( __( 'Widgets in this area will be shown in footer column %d.', 'abhidev' ), $i ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-widget-title">',
            'after_title'   => '</h4>',
        ] );
    }
}
add_action( 'widgets_init', 'abhidev_widgets_init' );
