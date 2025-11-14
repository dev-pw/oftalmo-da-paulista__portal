<section class="bg-light py-5">
    <div class="container">
        <p class="text-secondary small text-center pb-0 mb-0">Últimas notícias</p>
        <h2 class="text-primary h2 fw-bold text-center mb-5">Blog</h2>
        <div class="row g-5">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'blog',
                'orderby' => 'date',
                'post_status' => 'publish'
            );

            $doencas = new WP_Query($args);

            if( $doencas->have_posts() ){
                while( $doencas->have_posts() ){
                    $doencas->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="col-md-6 col-lg post-<?php the_ID(); ?>">

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

        </div>
        <div class="text-center mt-4">
            <a href="<?php echo esc_url(get_category_link(82)); ?>" class="btn btn-secondary text-white">VER TODOS</a>
        </div>
    </div>
</section>
