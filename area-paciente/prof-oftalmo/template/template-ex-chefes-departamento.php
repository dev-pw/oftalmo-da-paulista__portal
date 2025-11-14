<?php
/*
    Template Name: Ex chefes de departamento

*/

get_header(); ?>

<section class="py-5">
    <div class="container">

        <div class="row gy-5">

            <?php if( have_rows('item_ex-chefe_de_departamento') ):  while ( have_rows('item_ex-chefe_de_departamento') ) : the_row(); ?>
            <div class="col-12 col-sm-6 col-xl-3">

                <?php
                $id_perfil = get_sub_field('perfil');
                $prefixo = get_field('item_perfil', $id_perfil)['prefixo'];
                $nome = get_the_title($id_perfil);
                $descricao = get_field('item_perfil', $id_perfil)['ex-chefes_de_departamento'];
                $lattes = get_field('item_perfil', $id_perfil)['lattes'];
                $publoons = get_field('item_perfil', $id_perfil)['publoons'];
                $orcid = get_field('item_perfil', $id_perfil)['orcid'];
                $linkedin = get_field('item_perfil', $id_perfil)['linkedin'];
                $google_academy = get_field('item_perfil', $id_perfil)['google_academy'];
                ?>

                <div class="p-3 shadow h-100">
                    <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;">
                        <?php echo wp_get_attachment_image( get_field('item_perfil', $id_perfil)['foto_de_perfil'], 'full', "", ["class" => "img-fluid"]); ?>
                    </figure>
                    <div>
                        <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?=$prefixo; ?> <?=$nome; ?></p>
                        <p class="mb-2 pb-0 text-center small fs-6"><?=$descricao; ?></p>
                        <div class="justify-content-center row gx-2">

                            <?php if($lattes): ?>
                            <div class="col-auto">
                                <a href="<?=$lattes; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if($publoons): ?>
                            <div class="col-auto">
                                <a href="<?=$publoons; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14453, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if($orcid): ?>
                            <div class="col-auto">
                                <a href="<?=$orcid; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14451, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if($linkedin): ?>
                            <div class="col-auto">
                                <a href="<?=$linkedin; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14455, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if($google_academy): ?>
                            <div class="col-auto">
                                <a href="<?=$google_academy; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14452, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

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
</section>

<?php
get_template_part('template-parts/logos');
get_footer();
?>
