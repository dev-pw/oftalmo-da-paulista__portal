<?php
/*
    Template Name: Pesquisa clínica

*/

get_header(); ?>

<section class="py-5">

    <?php
    if (have_posts()): while (have_posts()) : the_post();

    $id_perfil = get_field('perfil');
    $prefixo = get_field('item_perfil', $id_perfil)['prefixo'];
    $nome = get_the_title($id_perfil);
    ?>

    <div class="entry-content-post">
        <?php the_content(); ?>
    </div>

    <div class="row align-items-center mb-4">
        <div class="col-5 col-sm-auto mb-3">
            <figure class="overflow-hidden rounded-circle">
                <?php echo wp_get_attachment_image( get_field('item_perfil', $id_perfil)['foto_de_perfil'], 'full', "", ["class" => "img-fluid", "style" => "width: 150px, height: 150px"]); ?>
            </figure>
        </div>
        <div class="col-auto">
            <p class="fw-bold mb-2 pb-0"><?=$prefixo; ?> <?=$nome; ?></p>
            <p><?php the_field('texto'); ?></p>
        </div>
    </div>

    <?php
    endwhile;
    endif;
    ?>

</div>

</section>

<?php

get_footer();
