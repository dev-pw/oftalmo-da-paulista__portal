<?php
/*
    Template Name: Noticias Personalizadas
    Template Post Type: Post, Page
*/

get_header(); 

if(is_page(14972)){
   $post_type = 'doencas';
} else{
   $post_type = 'oftalmologia';
}

?>

<section class="py-5">
    <div class="row g-5">

        <?php

        $args = array(
            'post_type' => ''.$post_type.'',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => 'publish'
        );

        $doencas = new WP_Query($args);

        if( $doencas->have_posts() ){ while( $doencas->have_posts() ){ $doencas->the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="col-lg-4 post-<?php the_ID(); ?>">

            <div class="position-relative">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="open_icon">
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full')[0];?>" alt="" width="100%" style="height: 225px; object-fit: cover;">
                    <?php if(the_field('icon') != null) {
                        the_field('icon');
                    } ?>
                </a>
            </div>

            <div class="mt-2">
                <i class="fa-solid fa-calendar-days text-secondary"></i>
                <span class='ms-1'><?php echo get_the_date( 'd \d\e F \d\e Y' ); ?></span>
            </div>

            <hr class="mt-2 mb-3">

            <a href="<?php the_permalink(); ?>" class="h4 fw-bold text-primary"><?php the_title(); ?></a>

            <?php the_excerpt(); ?>

        </article>

        <?php } } wp_reset_postdata(); ?>

    </div>
</section>

<?php get_footer(); ?>