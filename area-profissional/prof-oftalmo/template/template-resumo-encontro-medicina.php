<?php
/*
    Template Name: resumo encontro de medicina
    Template Post Type: Post, Page
*/

get_header();
?>


<section class="py-5">
    <div class="container entry-content-post">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
          <p> <?php _e('Sorry, this page does not exist.'); ?> </p>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>
