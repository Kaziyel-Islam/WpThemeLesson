
<div class="comments-section">

                    <?php 
                        $comments_count = get_comments_number();
                        if ( $comments_count > 0 ):
                            echo '<h2 class="section-title">Comments ('.$comments_count.')</h2>';
                        endif;

                        $parent_comments = get_comments(array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve',
                            'order'  => 'ASC',
                            'parent' => 0
                        ));
                    ?>

                    <?php if( $parent_comments ) : ?>
                        <div class="comment-list">
                            <?php foreach($parent_comments as $comment) : ?>
                                <div class="comment" id="comment-<?php echo $comment->comment_ID; ?>">
                                    <div class="comment-avatar">
                                        <?php echo get_avatar($comment, 50); ?>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <h4><?php echo esc_html($comment->comment_author); ?></h4>
                                            <span class="comment-date">
                                                <?php echo human_time_diff(strtotime($comment->comment_date), current_time('timestamp')); ?> ago
                                            </span>
                                        </div>

                                        <p><?php echo esc_html($comment->comment_content); ?></p>
                                        <div class="comment-actions">
                                            <?php 
                                                comment_reply_link(array(
                                                    'reply_text' => 'Reply',
                                                    'depth'      => 1,
                                                    'max_depth'  => get_option('thread_comments_depth'),
                                                    'class' => 'reply-btn'
                                                ), $comment->comment_ID, get_the_ID());
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    
                    <!----- Comment 1 ----->
                    <div class="comment">
                        <div class="comment-content">
                            
                            <!----- Reply to Comment 1 ----->
                            <?php
                                $replies = get_comments(array(
                                    'post_id' => get_the_ID(),
                                    'status' => 'approve',
                                    'order'  => 'ASC',
                                    'parent' => $comment->comment_ID
                                ));
                            ?>

                            <?php if($replies) : ?>
                                <?php foreach($replies as $reply) : ?>
                                    <div class="comment reply" id="comment-<?php echo $reply->comment_ID; ?>">
                                        <div class="comment-avatar">
                                            <?php echo get_avatar($reply, 50); ?>
                                        </div>

                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h4><?php echo esc_html($reply->comment_author); ?></h4>
                                                <span class="comment-date">
                                                    <?php echo human_time_diff(strtotime($reply->comment_date), current_time('timestamp')); ?> ago
                                                </span>
                                            </div>
                                            <p><?php echo esc_html($reply->comment_content); ?></p>
                                            <div class="comment-actions">
                                                <a href="#" class="reply-btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>


                    
</div>