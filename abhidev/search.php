<?php
if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}
?>
<?php get_header(); ?>

<div class="container">
    <main id="primary" class="site-main">
        <?php if (have_posts()): ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    printf(esc_html__('Search Results for: %s', 'abhidev'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h1>
            </header>
            
            <?php while (have_posts()): the_post(); ?>
                <?php get_template_part('template-parts/content', 'search'); ?>
            <?php endwhile; ?>
            
            <?php the_posts_navigation(); ?>
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>