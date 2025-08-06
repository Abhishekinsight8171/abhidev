<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        
        <div class="entry-meta">
            <?php
            abhidev_posted_on();
            abhidev_posted_by();
            ?>
        </div>
    </header>
    
    <?php abhidev_post_thumbnail(); ?>
    
    <div class="entry-content">
        <?php
        the_content();
        
        wp_link_pages([
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'abhidev'),
            'after'  => '</div>',
        ]);
        ?>
    </div>
    
    <footer class="entry-footer">
        <?php abhidev_entry_footer(); ?>
    </footer>
</article>