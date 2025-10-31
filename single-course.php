<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/course/course_details'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>