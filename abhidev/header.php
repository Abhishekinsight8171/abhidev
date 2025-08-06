<?php
if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'abhidev'); ?></a>
    
    <?php 
    // Get header style from customizer
    $header_style = get_theme_mod('header_layout', 'header-1');
    get_template_part('template-parts/header/' . $header_style);
    ?>
    
    <div id="content" class="site-content">