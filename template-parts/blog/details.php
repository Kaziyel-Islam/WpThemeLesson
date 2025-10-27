<!----- Blog Details Section ----->
<section class="blog-details">
    <div class="container">
        <div class="blog-details-wrapper">
            
            <!----- Main Blog Content ----->
            <div class="blog-content">
                <?php if( have_posts() ) : while (  have_posts()) : the_post(); ?>

                <div class="blog-meta">
                    <div class="date">
                        <div class="yellow-circle"></div>
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                    <h1 class="blog-title"> <?php echo the_title(); ?> </h1>
                    <div class="author">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                        <span class="author-name">By <?php the_author(); ?></span>
                    </div>
                </div>
                
                <div class="featured-image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                </div>
                
                <div class="blog-text">

                    <?php the_content(); ?>
                    
                    <div class="blog-tags">
                        <span>Tags:</span>
                        <?php the_tags('', '', ''); ?>
                    </div>
                    
                    <div class="social-share">
                        <span>Share:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=&text=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                
                <!----- Author Box ----->
                <div class="author-box">
                    <div class="author-avatar">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                    </div>
                    <div class="author-info">
                        <h3>About <?php the_author(); ?> </h3>
                        <p><?php echo get_the_author_meta('description'); ?></p>
                        <div class="author-social">
                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-facebook-f"></i></a>
                            <?php endif; ?>

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-instagram"></i></a>
                            <?php endif; ?>

                            <?php if ( get_the_author_meta('user_url') ) : ?>
                                <a href="<?php echo get_the_author_meta('user_url'); ?>"><i class="fab fa-linkedin-in"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!----- Comments Section ----->

                 <?php get_template_part('template-parts/blog/comment'); ?>

                <!----- Comment Form ----->

                <?php get_template_part('template-parts/blog/comment-form'); ?>

                <?php endwhile; endif; ?>

            </div>
            
            <!----- Sidebar ----->
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

