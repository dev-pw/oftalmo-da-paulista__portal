<?php
/*
    Template Name: Transplante de córnea

*/

get_header(); ?>

<section class="py-5">
    <div class="gx-5 gy-3 row">
        <div class="col-lg-7">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="entry-content-post">
                <?php the_content(); ?>
            </div>
            <?php
            endwhile;endif;
            wp_reset_query();
            ?>
        </div>
        <div class="col-12 col-lg-5 col-md-8 mx-auto">
            <div class="shadow p-4">
                <p class="fw-bold text-primary mb-3">Informe seu CPF abaixo</p>
                <form action="<?= the_permalink(15192); ?>" method="GET" class="form">
                    <input name="cpf" type="text" required="" class="w-100 mb-2 cpf_mask" id="cpf" onkeypress="return SomenteNumero(event)" maxlength="11">
                    <input type="submit" value="Enviar" class="py-2 btn btn-primary w-100 bg-primary text-light">
                </form>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();
