<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.1.4
 *
 * Blog Archives Page Template
 * Created by CMSMasters
 *
 */

get_header();
?>

<section class="py-5">
    <div class="row g-5">

        <?php
        if( have_posts() ){ while( have_posts() ){ the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="col-md-6 col-lg-4 post-<?php the_ID(); ?>">

            <div class="position-relative">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="open_icon">
                <?php (has_post_thumbnail()) ? $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full')[0] : $imagem = wp_get_attachment_image_src( 13421,'full')[0]; ?>
                    <img src="<?= $imagem; ?>" alt="" width="100%" style="height: 225px; object-fit: cover;">
                    <?php if(the_field('icon') != null) {  the_field('icon'); } ?>
                </a>
            </div>

            <div class="mt-2">
                <i class="fa-solid fa-calendar-days text-secondary"></i>
                <span class='ms-1'><?php echo get_the_date( 'd \d\e F \d\e Y' ); ?></span>
            </div>

            <hr class="mt-2 mb-3">

            <a href="<?php the_permalink(); ?>" class="h5 fw-bold text-primary"><?php the_title(); ?></a>

            <div><?= substr(get_the_excerpt(), 0, 95); ?> ...</div>

        </article>

        <?php } } wp_reset_postdata(); ?>

        <?php echo cmsmasters_pagination(); ?>

    </div>
</section>

<?php get_footer(); ?>
