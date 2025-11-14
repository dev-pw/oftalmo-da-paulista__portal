<?php

$post_type = get_post_type();
$post= get_the_ID();
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

?>
<div class="search_bar_wrap">
    <form method="get" action="<?= esc_url(home_url('/')) ?>">
        <p class="search_field">
            <input name="s" placeholder="<?= esc_attr__('Buscar por...', 'medical-clinic') ?>" value="" type="search" />
            <input type="submit" value="<?= $post_type ?>" id="<?= $post ?>" name="post_type" class="d-none" />
        </p>
        <p class="search_button">
            <label for="<?= $post ?>" class="cmsmasters_theme_icon_search"></label>
        </p>
    </form>
</div>

<div class="row gy-4 mt-2">
    
    <?php 

    $args = array(
        'post_type' => ''.$post_type.'',
        'posts_per_page' => 6, 
        'post__not_in' => array($post),
        'orderby' => 'date',
        'order' => 'ASC',
        'post_status' => 'publish',
    );

    if(has_category()){
        $args['category__in'] = array($category_id);
    }
        
    $post_atual = new WP_Query($args);

    if($post_atual->have_posts()){ while($post_atual->have_posts()){ $post_atual->the_post();?>

    <a class="col-12 text-decoration-none" href="<?php the_permalink(); ?>">                    
        <article id="post-<?php the_ID();?>" <?php post_class( array('row')); ?>>
            <div class="col-6">
                <?php if(has_post_thumbnail()){
                        $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full")[0];
                }else{
                        $imagem = wp_get_attachment_image_src( 13826, "full")[0];
                } ?> 
                <img src="<?php echo $imagem; ?>" alt="<?php the_title(); ?>" width="100%" class="img-post">
            </div>
            <div class="col-6">
                <p class="small text-muted m-0 p-0"> <?php the_time('d M Y'); ?> </p>
                <h2 class="h6 text-break"> <?php the_title(); ?></h2>
                <p class="small text-muted text-break"><?php echo  get_the_excerpt(); ?></p> 
            </div>
        </article>
    </a>

    <?php } } wp_reset_postdata();?>

</div>

