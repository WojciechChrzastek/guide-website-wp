<?php 
/*
* Template Name: Blog Post
*/

get_header();
?>

<section class="container-fluid">
    <div id="blog-posts-index">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?> 
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?> 
   </div>
</section>

<?php get_footer(); ?>