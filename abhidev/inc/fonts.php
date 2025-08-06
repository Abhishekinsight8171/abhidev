<?php
/**
 * Google Fonts integration
 * @package AbhiDev
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevent direct access
}

/**
 * Returns the Google Fonts URL.
 */
function abhidev_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	// Add fonts with weights
	$fonts[] = 'Open+Sans:400,400i,600,600i,700,700i';
	$fonts[] = 'Roboto:400,400i,500,500i,700,700i';
	$fonts[] = 'Lato:400,400i,700,700i';
	$fonts[] = 'Montserrat:400,500,600,700';
	$fonts[] = 'Poppins:300,400,500,600,700';
	$fonts[] = 'Playfair+Display:400,700,900';

	if ( ! empty( $fonts ) ) {
		$fonts_url = add_query_arg(
			array(
				'family' => implode( '|', $fonts ),
				'subset' => $subsets,
				'display' => 'swap', // improves performance
			),
			'https://fonts.googleapis.com/css'
		);
	}

	return esc_url( $fonts_url );
}

/**
 * Returns list of font stacks for use in Customizer font selectors.
 */
function abhidev_customizer_fonts() {
	return array(
		'system' => array(
			'label' => __( 'System Fonts', 'abhidev' ),
			'stack' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
		),
		'open-sans' => array(
			'label' => __( 'Open Sans', 'abhidev' ),
			'stack' => '"Open Sans", sans-serif',
		),
		'roboto' => array(
			'label' => __( 'Roboto', 'abhidev' ),
			'stack' => '"Roboto", sans-serif',
		),
		'lato' => array(
			'label' => __( 'Lato', 'abhidev' ),
			'stack' => '"Lato", sans-serif',
		),
		'montserrat' => array(
			'label' => __( 'Montserrat', 'abhidev' ),
			'stack' => '"Montserrat", sans-serif',
		),
		'poppins' => array(
			'label' => __( 'Poppins', 'abhidev' ),
			'stack' => '"Poppins", sans-serif',
		),
		'playfair-display' => array(
			'label' => __( 'Playfair Display', 'abhidev' ),
			'stack' => '"Playfair Display", serif',
		),
	);
}
