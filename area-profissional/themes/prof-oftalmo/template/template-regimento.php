<?php
/*
    Template Name: Regimento

*/

get_header(); ?>

<section class="py-5">
    <div class="container">
        <div class="row g-3">

            <?php if( have_rows('item_regimento') ):  while ( have_rows('item_regimento') ) : the_row();
            if(get_sub_field('pdf')) :
            $link = get_sub_field('pdf');
            else :
            $link = get_sub_field('link');
            endif;
            
            ?>
                <div class="col-6">
                    <a href="<?=$link; ?>" target="_blank" class="btn btn-light fw-bold text-primary border border-1 border-primary w-100 h-100 d-flex align-items-center p-3 justify-content-center" style="white-space: normal;">
                    <?php the_sub_field('titulo'); ?>
                </a>
                </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</section>

<?php
get_footer();
?>
