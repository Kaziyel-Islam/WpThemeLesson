<?php get_header(); ?>

<section class="courses">
    <div class="container">
        <div class="heading courses-heading">
            <h2>All Courses</h2>
            <p>Build new skills with new trendy courses and shine for your future career.</p>
        </div>

        <!-- Courses  -->
        <div class="course-grid">
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); 

                    $price = get_post_meta(get_the_ID(), '_cprice', true);

                    $price = !empty($price) ? $price : '0.00';
                ?>
                    <div class="course course-1 active-btn">
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-1.png" alt="course-1">
                            <?php endif; ?>
                        </div>

                        <div class="course-details">
                            <div class="flex">
                                <span class="c-title"><?php the_title(); ?></span>
                            </div>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <div class="price-btn">
                                <span class="price">$ <?php echo esc_html($price); ?></span>
                                <div class="yellow-bg-btn book-now">Book Now</div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            
        </div>

        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total'     => $wp_query->max_num_pages,
                'current'   => max(1, get_query_var('paged')),
                'mid_size'  => 2,
                'prev_text' => '<span class="page-btn_prev"><i class="fas fa-chevron-left"></i> Prev</span>',
                'next_text' => '<span class="page-btn_next">Next <i class="fas fa-chevron-right"></i></span>',
                'before_page_number' => '<span class="page-btn">',
                'after_page_number'  => '</span>',
            ));
            ?>
        </div>

        <?php else: ?>
                <h2>No Course Found.</h2>
            <?php endif;
            wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>
