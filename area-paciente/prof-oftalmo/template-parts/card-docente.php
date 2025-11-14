<?php

$prefixo = get_field('item_perfil', $id)['prefixo'];
$nome = get_the_title($id);
$descricao = get_field('item_perfil', $id)['diretoria'];
$lattes = get_field('item_perfil', $id)['lattes'];
$publoons = get_field('item_perfil', $id)['publoons'];
$orcid = get_field('item_perfil', $id)['orcid'];
$linkedin = get_field('item_perfil', $id)['linkedin'];
$google_academy = get_field('item_perfil', $id)['google_academy'];
$img = get_field('item_perfil', $id)['foto_de_perfil'];

?>

<div class="col-12 col-sm-6 col-xl-3"> 
    <div class="p-3 shadow h-100">
        <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
            <?= wp_get_attachment_image( $img, 'full', "", ["class" => "img-fluid w-100"]); ?>
        </figure>
        <div>
            <p class="fs-6 fw-bold mb-2 pb-0 text-center"> <?= $prefixo.' '.$nome; ?> </p>
            <div class="fs-6 mb-0 pb-0 text-center s-descricao small"> <?= $desc; ?> </div>
            <div class="justify-content-center row gx-2">

                <?php if($lattes): ?>
                <div class="col-auto">
                    <a href="<?=$lattes; ?>" target="_blank">
                        <?= wp_get_attachment_image( 14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                    </a>
                </div>
                <?php endif; ?>

                <?php if($publoons): ?>
                <div class="col-auto">
                    <a href="<?=$publoons; ?>" target="_blank">
                        <?= wp_get_attachment_image( 14453, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                    </a>
                </div>
                <?php endif; ?>

                <?php if($orcid): ?>
                <div class="col-auto">
                    <a href="<?=$orcid; ?>" target="_blank">
                        <?= wp_get_attachment_image( 14451, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                    </a>
                </div>
                <?php endif; ?>

                <?php if($linkedin): ?>
                <div class="col-auto">
                    <a href="<?=$linkedin; ?>" target="_blank">
                        <?= wp_get_attachment_image( 14455, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                    </a>
                </div>
                <?php endif; ?>

                <?php if($google_academy): ?>
                <div class="col-auto">
                    <a href="<?=$google_academy; ?>" target="_blank">
                        <?= wp_get_attachment_image( 14452, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                    </a>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>