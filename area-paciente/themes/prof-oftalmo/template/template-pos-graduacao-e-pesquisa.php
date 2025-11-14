<?php
/*
    Template Name: Pós-graduação e Pesquisa

*/

get_header(); ?>

<section class="py-5">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="entry-content-post">
        <?php the_content(); ?>
    </div>
    <?php
    endwhile;
    endif;
    ?>

    <div class="cmsmasters_toggles toggles_mode_accordion">

    <?php
    $args = array(
        'post_type'      => 'centro-de--pesquisa',
        'posts_per_page' => -1,
        'order'          => 'ASC',
        'orderby'        => 'title'
    );
    query_posts($args);

    if (have_posts()): while (have_posts()) : the_post();
    ?>

    <div class="cmsmasters_toggle_wrap" data-tags="all ">
        <div class="cmsmasters_toggle_title">
            <span class="cmsmasters_toggle_plus">
                <span class="cmsmasters_toggle_plus_hor"></span>
                <span class="cmsmasters_toggle_plus_vert"></span>
            </span>
            <a href="#" class="fw-bold text-primary"><?php the_title(); ?></a>
        </div>
        <div class="cmsmasters_toggle" style="display: none;">
            <div class="cmsmasters_toggle_inner">

                <div class="entry-content-post">
                    <?php the_content(); ?>
                </div>

                <?php if( have_rows('lista_de_perfis') ):  while ( have_rows('lista_de_perfis') ) : the_row();
                $id_perfil = get_sub_field('perfil');
                $prefixo = get_field('item_perfil', $id_perfil)['prefixo'];
                $nome = get_the_title($id_perfil);
                ?>
                <div class="row align-items-center mb-4">
                    <div class="col-5 col-sm-auto mb-3">
                        <figure class="overflow-hidden rounded-circle">
                            <?php echo wp_get_attachment_image( get_field('item_perfil', $id_perfil)['foto_de_perfil'], 'full', "", ["class" => "img-fluid", "style" => "width: 150px, height: 150px"]); ?>
                        </figure>
                    </div>
                    <div class="col-auto">
                        <p class="fw-bold mb-2 pb-0"><?=$prefixo; ?> <?=$nome; ?></p>
                        <p><?php the_sub_field('texto'); ?></p>
                    </div>
                </div>
                <?php
                endwhile;
                endif;
                ?>

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
