<?php
/*
    Template Name: Novos tratamentos

*/

get_header(); ?>

<section class="py-5">

    <div>

        <p class="fw-bold mb-5">Clique nos links abaixo, para saber mais sobre o tratamento</p>

        <?php
        $post_type = "novo-tratamento";
        $taxonomies = get_object_taxonomies( (object) array(
            "post_type" => $post_type,
            )
        );

        foreach( $taxonomies as $taxonomy ) :
        $termos = get_terms( $taxonomy,
        array(
            "orderby" => "menu_order",
            )
        );

        foreach( $termos as $term ) :

        $args = array (
            "post_type" => $post_type,
            "posts_per_page" => "-1",
            'orderby'        => 'title',
            'order'          => 'ASC',
            "tax_query" => array(
                array(
                "taxonomy" => $taxonomy,
                "field" => "slug",
                "terms" => $term->slug,
                )
            )
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ) :  ?>

        <section id="post-id-<?php the_id();?>" <?php post_class('border-2 border-bottom border-secondary mb-5 pb-5'); ?>>
            <h2 class="fs-4 text-primary fw-bold"><?php echo $term->name ;?></h2>
            <div>
                <?php
                while( $query->have_posts() ) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="p-3 bg-light mb-3 d-block" title="<?php the_title(); ?>">
                        <span class="m-0 p-0 text-dark fw-bold"><?php the_title(); ?></span>
                    </a>
                <?php
                endwhile; ?>
            </div>
        </section>

        <?php
        endif;
        endforeach;
        endforeach;

        ?>

    </div>

</section>

<?php

get_template_part('template-parts/logos');

get_footer();
