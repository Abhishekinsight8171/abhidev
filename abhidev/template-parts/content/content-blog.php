<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large'); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="post-content">
        <header class="entry-header">
            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
            
            <div class="entry-meta">
                <?php abhidev_posted_on(); ?>
            </div>
        </header>
        
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        
        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
        </footer>
    </div>
</article>