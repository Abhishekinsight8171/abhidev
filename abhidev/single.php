<?php
if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}
?>
<?php get_header(); ?>

<div class="container">
    <main id="primary" class="site-main">
        <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'single'); ?>
            
            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
            ?>
            
            <?php the_post_navigation([
                'prev_text' => '<span class="nav-subtitle">Previous:</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">Next:</span> <span class="nav-title">%title</span>',
            ]); ?>
            
        <?php endwhile; ?>
    </main>
    
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>