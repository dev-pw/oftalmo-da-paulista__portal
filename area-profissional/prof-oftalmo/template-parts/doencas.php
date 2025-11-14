<section class="py-5">
    <div class="container">
        <p class="text-secondary small text-center m-0 p-0">Especialidades</p>
        <h2 class="text-primary h2 fw-bold text-center mb-5">Doenças e Tratamentos</h2>
        <div class="row g-5">

            <?php

            $args = array(
                'post_type' => 'doencas',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'ASC',
                'post_status' => 'publish'
            );

            $doencas = new WP_Query($args);

            if( $doencas->have_posts() ){
                while( $doencas->have_posts() ){
                    $doencas->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="col-md-6 col-lg-4 post-<?php the_ID(); ?>">

                <div class="position-relative mb-2">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="open_icon">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full')[0];?>" alt="" width="100%">
                        <?php if(the_field('icon') != null) {
                            the_field('icon');
                        } ?>
                    </a>
                </div>

                <a href="<?php the_permalink(); ?>" class="h4 fw-bold text-primary"><?php the_title(); ?></a>

                <hr class="mt-2 mb-3">

                <?= substr(get_the_excerpt(), 0, 95); ?> ...

            </article>

            <?php } } wp_reset_postdata(); ?>

        </div>
        <div class="text-center mt-4">
            <a href="<?php the_permalink(14972); ?>" class="btn btn-secondary text-white">VER TODOS</a>
        </div>
    </div>
</section>
