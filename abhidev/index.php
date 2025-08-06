<?php
/**
 * The main template file
 *
 * Used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @package AbhiDev
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>

        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if ( is_singular() ) : ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php else : ?>
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h2>
                    <?php endif; ?>
                </header><!-- .entry-header -->

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; ?>

        <div class="navigation">
            <?php
            the_posts_navigation();
            ?>
        </div>

    <?php else : ?>

        <article class="no-results not-found">
            <header class="entry-header">
                <h2 class="entry-title"><?php _e( 'Nothing Found', 'abhidev' ); ?></h2>
            </header>

            <div class="entry-content">
                <p><?php _e( 'It seems we can’t find what you’re looking for.', 'abhidev' ); ?></p>
            </div>
        </article>

    <?php endif; ?>
</main><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
