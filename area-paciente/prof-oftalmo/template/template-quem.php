<?php
/*
    Template Name: Quem somos

*/

get_header(); ?>

<section class="py-5">
    <div class="container">
        <div class="row gx-xl-5">

            <div class="col-lg-6">
                <p class="text-secondary small text-center pb-0 mb-0 text-lg-start">Quem somos</p>
                <h2 class="fw-bold h2 mb-4 mx-auto mx-lg-0 text-center text-lg-start text-primary" style="max-width: 280px;">A Oftalmologia da <span class="text-secondary">EPM-UNIFESP</span></h2>
                <div class="mb-4">
                    <?php
                    $post = get_post(14183); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    echo $the_content; ?>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-5 col-sm-auto mb-3">
                        <figure class="overflow-hidden rounded-circle">
                            <?php echo wp_get_attachment_image( get_field('chefia', 14183)['perfil_chefia'], 'full', "", ["class" => "img-fluid"]); ?>
                        </figure>
                    </div>
                    <div class="col-auto">
                        <p class="fw-bold mb-2 pb-0"><?php echo get_field('chefia', 14183)['nome_chefia']; ?></p>
                        <p><?php echo get_field('chefia', 14183)['texto_chefia']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <?php
                    $img_destacada = get_post_thumbnail_id(14183);
                    echo wp_get_attachment_image( $img_destacada, 'full', "", ["class" => "img-fluid"]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="cmsmasters_row_outer_parent bg-secondary">
        <div class="cmsmasters_row_outer">
            <div class="cmsmasters_row_inner">
                <div class="cmsmasters_row_margin cmsmasters_11">
                    <div id="cmsmasters_column_06465479d7" class="cmsmasters_column one_first">
                        <div class="cmsmasters_column_inner">
                            <div id="cmsmasters_counters_f3722ce0ce" class="cmsmasters_counters counters_type_vertical">
                                <div class="cmsmasters_counter_wrap one_fifth">
                                    <div id="cmsmasters_counter_4a14099020" class="cmsmasters_counter" data-percent="<?php echo get_field('estatisticas')['consultas']; ?>">
                                        <div class="cmsmasters_counter_inner">
                                            <span class="cmsmasters_counter_counter_wrap">
                                                    <span class="cmsmasters_counter_counter text-white"> <?php echo get_field('estatisticas')['consultas']; ?> </span>
                                            </span>
                                        <span class="cmsmasters_counter_title text-white">Consultas <br> Ambulatorias</span>
                                        </div>
                                        <canvas height="176" width="176"></canvas>
                                    </div>
                                </div>
                                <div class="cmsmasters_counter_wrap one_fifth">
                                    <div id="cmsmasters_counter_3f0bec9075" class="cmsmasters_counter" data-percent="<?php echo get_field('estatisticas')['atendimentos']; ?>">
                                        <div class="cmsmasters_counter_inner">
                                            <span class="cmsmasters_counter_counter_wrap">
                                                <span class="cmsmasters_counter_counter text-white"> <?php echo get_field('estatisticas')['atendimentos']; ?> </span>
                                            </span>
                                            <span class="cmsmasters_counter_title text-white">Atendimentos <br> Pronto Socorro</span>
                                        </div>
                                        <canvas height="176" width="176"></canvas>
                                    </div>
                                </div>
                                <div class="cmsmasters_counter_wrap one_fifth">
                                    <div id="cmsmasters_counter_c3985d1261" class="cmsmasters_counter" data-percent="<?php echo get_field('estatisticas')['cirurgicos']; ?>">
                                        <div class="cmsmasters_counter_inner">
                                            <span class="cmsmasters_counter_counter_wrap">
                                                    <span class="cmsmasters_counter_counter text-white"> <?php echo get_field('estatisticas')['cirurgicos']; ?> </span>
                                            </span>
                                            <span class="cmsmasters_counter_title text-white">Procedimentos <br> de exames</span>
                                        </div>
                                        <canvas height="176" width="176"></canvas>
                                    </div>
                                </div>
                                <div class="cmsmasters_counter_wrap one_fifth">
                                    <div id="cmsmasters_counter_9d0e0577d1" class="cmsmasters_counter" data-percent="<?php echo get_field('estatisticas')['exames']; ?>">
                                        <div class="cmsmasters_counter_inner">
                                            <span class="cmsmasters_counter_counter_wrap">
                                                <span class="cmsmasters_counter_counter text-white"> <?php echo get_field('estatisticas')['exames']; ?> </span>
                                            </span>
                                            <span class="cmsmasters_counter_title text-white">Procedimentos <br> cirúrgicos</span>
                                        </div>
                                        <canvas height="176" width="176"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">

    <div class="container">

        <p class="text-secondary m-0 p-0">Institucional</p>
        <h2 class="text-primary h2 fw-bold mb-5">Nossa história</h2>

        <div class="row gy-5 gx-lg-5">
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <?php echo get_field('nossa_historia')['video']; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cmsmasters_toggles toggles_mode_toggle">
                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold text-primary">Missão</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="entry-content-post">
                                    <?php echo get_field('nossa_historia')['missao']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold text-primary">Visão</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="entry-content-post">
                                    <?php echo get_field('nossa_historia')['visao']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold text-primary">Valores</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="entry-content-post">
                                    <?php echo get_field('nossa_historia')['valores']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="targetoria" class="py-5 bg-light">
    <div class="container">
        <div class="text-dark text-center">
            <p class="m-0 p-0 text-secondary">Trajetória</p>
            <h2 class="d-table fw-bold h2 mx-auto pb-4 text-primary" style="max-width: 400px;">Um marco da oftalmologia no Brasil</h2>
        </div>
        <div class="container-timeline">

            <?php if( have_rows('item_timeline') ):  while ( have_rows('item_timeline') ) : the_row(); ?>
            <div class="entry">
                <div class="indicator">
                    <span></span>
                </div>
                <div class="content-timeline">
                    <div class="entry-content-post">
                        <?php the_sub_field('texto'); ?>
                    </div>
                </div>
                <div class="fw-bold time"><?php the_sub_field('ano'); ?></div>
            </div>
            <?php
            endwhile;
            endif;
            ?>

        </div>
    </div>
</section>

<section class="py-5" style="background: url('<?= wp_get_attachment_image_src( 14387,'full')[0]; ?>');background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
    <div>
        <div class="text-dark text-center">
            <p class="m-0 p-0 text-white">Compromisso</p>
            <h2 class="h2 fw-bold text-white mb-5">Assistência à Saúde</h2>
        </div>
        <div class="container">
            <div class="gx-5 gy-5 justify-content-center row">
                <div class="col-sm-6 col-lg-4">
                    <img src="<?php echo get_field('assistencia_a_saude')['img']; ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8">
                    <div class="text-white entry-content-post">
                        <?php echo get_field('assistencia_a_saude')['txt_assistencia']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div>

        <div class="text-dark text-center">
            <p class="m-0 p-0 text-secondary">Evolução</p>
            <h2 class="h2 fw-bold text-primary mb-5">Ensino e pesquisa</h2>
        </div>

        <div class="container">

            <div class="cmsmasters_toggles toggles_mode_accordion">

                <?php if( have_rows('item_ensino_e_pesquisa') ):  while ( have_rows('item_ensino_e_pesquisa') ) : the_row(); ?>
                <div class="cmsmasters_toggle_wrap" data-tags="all ">
                    <div class="cmsmasters_toggle_title">
                        <span class="cmsmasters_toggle_plus">
                            <span class="cmsmasters_toggle_plus_hor"></span>
                            <span class="cmsmasters_toggle_plus_vert"></span>
                        </span>
                        <a href="#" class="fw-bold text-primary"><?php the_sub_field('titulo'); ?></a>
                    </div>
                    <div class="cmsmasters_toggle" style="display: none;">
                        <div class="cmsmasters_toggle_inner">
                            <div class="entry-content-post">
                                <?php the_sub_field('texto'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                endif;
                ?>

            </div>

        </div>
    </div>
</section>


<?php

get_template_part('template-parts/logos');

get_footer();
