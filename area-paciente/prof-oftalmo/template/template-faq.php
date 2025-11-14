<?php
/*
    Template Name: FAQ

*/

get_header(); ?>

<section class="py-5">

    <div class="cmsmasters_toggles toggles_mode_accordion">

    <?php
    if( have_rows('perguntas_do_faq') ): while ( have_rows('perguntas_do_faq') ) : the_row(); ?>

    <div class="cmsmasters_toggle_wrap" data-tags="all ">
        <div class="cmsmasters_toggle_title">
            <span class="cmsmasters_toggle_plus">
                <span class="cmsmasters_toggle_plus_hor"></span>
                <span class="cmsmasters_toggle_plus_vert"></span>
            </span>
            <a href="#" class="fw-bold text-primary"><?php the_sub_field('pergunta'); ?></a>
        </div>
        <div class="cmsmasters_toggle" style="display: none;">
            <div class="cmsmasters_toggle_inner pb-0">
                <div class="entry-content-post">
                    <?php the_sub_field('resposta'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    endwhile;
    endif;
    ?>

</div>

</section>

<?php

get_template_part('template-parts/logos');

get_footer();
