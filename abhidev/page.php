<?php
/**
 * The template for displaying all pages
 *
 * @package AbhiDev
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'abhidev' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        // If comments are open or there's at least one comment, load the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }

    endwhile; // End of the loop.
    ?>
</main><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
