<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>

    <?php
    while ( have_posts() ) :
        the_title();
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>