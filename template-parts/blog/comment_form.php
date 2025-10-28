<!----- Comment Form ----->
                <div class="comment-form">
                    <h2 class="section-title">Leave a Comment</h2>

                    <?php
                        comment_form(array(
                            'fields' => array(
                                'author' => '<div class="form-row"><div class="form-group"><input id="author" name="author" type="text" placeholder="Name" required></div>',
                                'email'  => '<div class="form-group"><input id="email" name="email" type="email" placeholder="Email" required></div></div>'
                            ),
                            'comment_field' => '<div class="form-group"><textarea id="comment" name="comment" placeholder="Write your comment here..." required></textarea></div>',
                            'class_submit' => 'yellow-bg-btn submit-btn',
                            'label_submit' => 'Post Comment'
                        ));
                    ?>
                </div>