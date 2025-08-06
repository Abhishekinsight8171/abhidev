<?php
/**
 * The template for displaying comments
 *
 * @package AbhiDev
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( $comment_count === 1 ) {
                echo __( 'One Comment', 'abhidev' );
            } else {
                printf(
                    _n( '%s Comment', '%s Comments', $comment_count, 'abhidev' ),
                    number_format_i18n( $comment_count )
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 50,
            ) );
            ?>
        </ol>

        <?php
        // If comments are closed and there are comments, leave a note.
        if ( ! comments_open() ) :
            ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'abhidev' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    comment_form( array(
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h2>',
        'class_submit'       => 'submit-button',
    ) );
    ?>

</div><!-- #comments -->
