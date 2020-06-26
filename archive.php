
<?php
/**
 * Template Name: Archive
 *
 */

get_header(); ?>
<section class="container-fluid">

<div id="primary" class="site-content">
  <div id="content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>

        <div class="archive-search-form"><?php get_search_form(); ?></div>

        <h2>Archives by Year:</h2>
        <ul><?php wp_get_archives('type=yearly'); ?></ul>

        <h2>Archives by Month:</h2>
        <ul><?php wp_get_archives('type=monthly'); ?></ul>

        <h2>Archives by Subject:</h2>
        <ul><?php wp_list_categories('title_li='); ?></ul>
      </div><!-- #entry-content -->

      <?php comments_template( '’', true ); ?>               
    <?php endwhile; // end of the loop. ?>             
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
