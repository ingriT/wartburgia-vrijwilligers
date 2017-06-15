<?php if ( post_password_required() ) {
	return;
} ?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <p><strong>
            <?php
            printf( _nx( 'Eén reactie op “%2$s”', '%1$s reacties op “%2$s”', get_comments_number(), 'comments title'),
                number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
        </strong></p>
        <ul class="comment-list">
            <?php 
            wp_list_comments( array(
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
        </ul>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments">
            <?php _e( 'Comments are closed.' ); ?>
        </p>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>