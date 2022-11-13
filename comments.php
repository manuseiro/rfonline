<?php
// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thank you!');
 
    if ( post_password_required() ) { ?>
        <p class="nocomments"><?php _e( "This article is password protected. Enter the password to view comments.", 'rfonline' );?></p>
    <?php
        return;
    }
?>
 
<div id="comments">
	<?php if ( have_comments() ) : ?>
 
        <ol class="commentlist">
        <?php wp_list_comments('avatar_size=64&type=comment'); ?>
    </ol>
        <?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="pagination">
        <ul>
            <li class="older"><?php previous_comments_link('Anteriores'); ?></li>
            <li class="newer"><?php next_comments_link('Novos'); ?></li>
        </ul>
    </div>
    <?php endif; ?>
 
    <?php endif; ?>
 
    <?php if ( comments_open() ) : ?>
 
    <div id="respond" class="deixe-contario">
        <div class="col-sm-12 header-title"><h3><?php _e( "Leave your comment!", 'rfonline' );?></h3>
        </div>
        <form id="commentform" class="comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" >
            <div class="form-group">
                <?php if ( $user_ID ) : ?>
                <p><?php _e( "Identified as", 'rfonline' );?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="<?php _e( "Sign out of this account", 'rfonline' );?>"><?php _e( "Sign out of this account", 'rfonline' );?> &raquo;</a></p>
                <?php else : ?>
                <div class="col-sm-6">
                    <input id="author" class="form-control" name="name" required="" type="name" value="<?php echo $comment_author; ?>" placeholder="<?php _e( "Name", 'rfonline' );?>" />
                </div>
                <div class="col-sm-6">
                    <input id="inputEmail" class="form-control" name="email" required="" type="email" value="<?php echo $comment_author_email; ?>" placeholder="<?php _e( "Email", 'rfonline' );?>" />
                </div>
                <div class="col-sm-12">
                    <input id="url" class="form-control" name="url" required="" type="text" value="<?php echo $comment_author_url; ?>" placeholder="<?php _e( "Site/Blog", 'rfonline' );?>" />
                </div>
                <?php endif; ?>
                <div class="col-sm-12">
                    <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="<?php _e( "Message", 'rfonline' );?>"></textarea>
                </div>
                <div class="col-sm-12">
                    <input class="commentsubmit btn btn-red btn-yellow" type="submit" value="<?php _e( "Submit Comment", 'rfonline' );?>" />
                </div>
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', $post->ID); ?>
            </div>
        </form>
        <p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>
    </div>
     <?php else : ?>
     <div class="col-sm-12"><h3 class="comment-disabled"><i class="fas fa-comment-slash"></i><br><?php _e( "Comments are disabled.", 'rfonline' );?></h3></div>
<?php endif; ?>
</div>