<?php
/*  // Template que lista os membros, com ordenação personalizada.

    Template Name: Equipe 2

*/

get_header(); ?>

<section class="py-5">

<div class="container">

    <div class="row gy-4">

        <?php

        // Array dos membros no campo Lista Membros
        $membros = get_field('lista_membros');

        foreach ($membros as $membro) :

        $id_membro = $membro['membro_item']->ID;

        // Dados recuperados do post type perfil
        $get_thumb = get_field('item_perfil', $id_membro)['foto_de_perfil'];
        $thumb_id = (!empty($get_thumb)) ? $get_thumb : 15615;

        $prefixo        = get_field('item_perfil', $id_membro)['prefixo'];
        $nome           = get_the_title($id_membro);
        $lattes         = get_field('item_perfil', $id_membro)['lattes'];
        $publoons       = get_field('item_perfil', $id_membro)['publoons'];
        $orcid          = get_field('item_perfil', $id_membro)['orcid'];
        $linkedin       = get_field('item_perfil', $id_membro)['linkedin'];
        $google_academy = get_field('item_perfil', $id_membro)['google_academy'];

        $id_post        = $post->ID; // 14626 - página Chefes de Setor
        $desc_chefe     = get_field('item_perfil', $id_membro)['chefe_de_setor'];
        $desc_geral     = $membro['membro_texto'];
        ?>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="p-3 shadow h-100">

                <figure class="mb-2 mx-auto overflow-hidden rounded-circle bg-light" style="width: 150px;height: 150px;">
                    <?= wp_get_attachment_image($thumb_id, 'full', "", ["class" => "img-fluid w-100"]) ?>
                </figure>

                <div>

                    <p class="fs-6 fw-bold mb-2 pb-0 text-center text-uppercase"><?=$prefixo; ?> <?= $nome; ?></p>

                    <div class="fs-6 mb-0 pb-0 text-center s-descricao small">
                        <?php echo ($id_post == 14626) ? $desc_chefe : $desc_geral; ?>
                    </div>

                    <div class="justify-content-center row gx-2">

                        <?php if ($lattes): ?>
                        <div class="col-auto">
                            <a href="<?= $lattes; ?>" target="_blank">
                                <?php echo wp_get_attachment_image(14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                        <?php if ($publoons): ?>
                        <div class="col-auto">
                            <a href="<?=$publoons; ?>" target="_blank">
                                <?php echo wp_get_attachment_image(14453, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                        <?php if ($orcid): ?>
                        <div class="col-auto">
                            <a href="<?= $orcid; ?>" target="_blank">
                                <?php echo wp_get_attachment_image(14451, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                        <?php if ($linkedin): ?>
                        <div class="col-auto">
                            <a href="<?= $linkedin; ?>" target="_blank">
                                <?php echo wp_get_attachment_image(14455, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                        <?php if ($google_academy): ?>
                        <div class="col-auto">
                            <a href="<?= $google_academy; ?>" target="_blank">
                                <?php echo wp_get_attachment_image(14452, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

    </div>
</section>

<?php
get_footer();
?>
