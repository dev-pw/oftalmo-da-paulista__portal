<?php
/*
    Template Name: Docentes permanentes

*/

get_header(); ?>

<section class="py-5">
    <div class="container">

        <div class="row">
            <div class="col-12">
                
                <?php if (have_posts()): while (have_posts()) : the_post();
                the_content();
                endwhile; endif; wp_reset_query(); ?>

            </div>
        </div>

        <div class="row gy-5">

            <?php 

            $titulares = get_field('titulares');
            $associados = get_field('associados');
            $adjuntos = get_field('adjuntos');

            if($titulares):
                echo '<h2 class="text-primary fw-bold h2"> Titulares </h2>';

            foreach ($titulares as $id) :

            $desc = get_field('item_perfil', $id)['docente_permanente_titular'];

            include __DIR__. '/../template-parts/card-docente.php';
            
            endforeach; endif;

            if($associados):
                echo '<h2 class="text-primary fw-bold h2"> Associados </h2>';

            foreach ($associados as $id) :

            $desc = get_field('item_perfil', $id)['docente_permanente_associado'];

            include __DIR__. '/../template-parts/card-docente.php';
            
            endforeach; endif;

            if($adjuntos):
                echo '<h2 class="text-primary fw-bold h2"> Adjuntos </h2>';

            foreach ($adjuntos as $id) :

            $desc = get_field('item_perfil', $id)['docente_permanente_adjunto'];

            include __DIR__. '/../template-parts/card-docente.php';
            
            endforeach; endif; ?>

        </div>

    </div>
</section>

<?php
get_template_part('template-parts/logos');
get_footer();
?>
