<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
  
get_header(); ?>
<section class="container-fluid">
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <div class ="post-title">
            <h2><?php the_title(); ?></h2>
        </div>
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>

            <aside class="post-meta row justify-content-center align-items-center text-center">
        
                <span class="col-3"> 
                <?php the_author_posts_link(); ?>
                </span>
                <span class="col-3">
                <?php the_time('F jS Y'); ?>
                </span>
                <span class="col-3">
                <?php the_category(', '); ?>
                </span>
                <span class="col-3">
                <?php comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('% comments','example')); ?>
                </span>
            
            </aside>

            <div class ="post-content">
                <?php the_content(); ?>
            </div>

    <?php
        //***************** TO DO: post navigation

        // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'guide' ) . '</span> ' .
                '<span class="screen-reader-text">' . __('<br>') . '</span> ' .

                    // '<span class="screen-reader-text">' . __( 'Next post:', 'guide' ) . '</span> ' .

                    '<span class="post-title">%title</span>',

                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'guide' ) . '</span> ' .
                '<span class="screen-reader-text">' . __('<br>') . '</span> ' .

                    // '<span class="screen-reader-text">' . __( 'Previous post:', 'guide' ) . '</span> ' .

                    '<span class="post-title">%title</span>',
            ) );

        $prev_post = get_previous_post();
        $prev_id = $prev_post->ID;
        $prev_permalink = get_permalink($prev_id);
        $next_post = get_next_post();
        $next_id = $next_post->ID;
        $next_permalink = get_permalink($next_id);
        ?>

    <aside class="container">
        <nav class="row">
            <div class="col-6 text-left">
                <div class="previous-timeline">
                    <a href="<?php echo $prev_permalink; ?>" rel="prev">
                        <span class="meta-nav"><i class="fas fa-chevron-left"></i></span>
                        Previous
                        <h6><?php echo $prev_post->post_title; ?></h6>
                    </a>
                </div>
            </div>
            <div class="col-6 text-right">
                <div class="next-timeline">
                    <a href="<?php echo $next_permalink; ?>">
                        Next <span class="meta-nav"><i class="fas fa-chevron-right"></i></span>
                        <h6><?php echo $next_post->post_title; ?></h6>
                    </a>
                </div>
            </div>

        </nav>
    </aside>

    <?php
    // If comments are open or we have at least one comment, load up the comment template.


        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
  
        // End the loop.
        endwhile;
        ?>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->
</section>
  
<?php get_footer(); ?>
