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
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header>
            
            <?php while (have_posts()): the_post(); ?>
                <?php get_template_part('template-parts/content', 'blog'); ?>
            <?php endwhile; ?>
            
            <?php the_posts_navigation(); ?>
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </main>
    
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>