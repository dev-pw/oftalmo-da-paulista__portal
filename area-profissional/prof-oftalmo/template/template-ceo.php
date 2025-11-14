<?php
/*
    Template Name: Ceo
    Template Post Type: Post, Page
*/

get_header();
?>


<section class="py-5">
    <div class="row g-5">

    <?php
    $args = array(
        'post_type'      => 'ceo',
        'posts_per_page' => -1,
        'meta_key' => 'detalhes_btn_inscricoes',
        'orderby' => 'meta_value',
        'order'          => 'ASC',
        'post_status'    => 'publish',
        'meta_query' => array(
            array(
                'key' => 'detalhes_btn_inscricoes',
                'compare' => 'aberto',
            ),
        ),
    );

    $ceo = new WP_Query($args);

    if ($ceo->have_posts()){ while ($ceo->have_posts()) { $ceo->the_post(); ?>

    <article class="col-md-6">
        <div class="bg-light p-4 h-100 shadow">
            <h2 class="fw-bold fs-4"><?php the_title(); ?></h2>
            <div class="mb-4">
                <h5 class="mb-1 fw-bold">Data / Horário:</h5>
                <p class="small"> <?= get_field("detalhes")["data_horario"] ?> </p>
            </div>
            <div class="mb-4">
                <h5 class="mb-1 fw-bold">Local:</h5>
                <p class="small"> <?= get_field("detalhes")["local"]; ?> </p>
            </div>
            <div class="row g-3">
                <div class="col-lg-auto">
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Saiba mais</a>
                </div>
                <div class="col-lg-auto">
                    <?php if( get_field("detalhes")["btn_inscricoes"] == "aberto" ) {
                        echo '<a href="'.get_field("detalhes")["link_inscricao"].'" class="btn btn-secondary text-white" target="_blank"> Clique aqui e inscreva-se </a>';
                    } else{
                        echo '<a class="btn btn-danger"> Inscrições Encerradas </a>';
                    } ?>
                </div>
            </div>
        </div>
    </article>

    <?php } } wp_reset_postdata(); ?>

    </div>
</section>


<?php get_footer(); ?>
