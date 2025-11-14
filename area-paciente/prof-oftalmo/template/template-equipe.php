<?php
/*
    Template Name: Equipe

*/

get_header(); ?>

<?php
$id = get_the_id();

$compare_equipe = '';
$descricao = '';

switch ($id) {

    case '14894':
        $compare_equipe = 'equipe01';
        $descricao = 'docente_permanente_titular';
        break;

    case '14528':
        $compare_equipe = 'equipe2';
        $descricao = 'docente_permanente_associado';
        break;

    case '14534':
        $compare_equipe = 'equipe3';
        $descricao = 'docente_permanente_adjunto';
        break;

    case '14489':
        $compare_equipe = 'equipe4';
        $descricao = 'livre_docente';
        break;

    case '14601':
        $compare_equipe = 'equipe5';
        $descricao = 'hu:_clinica_oftalmologica_huhsp';
        break;

    // case '14626':
    //     $compare_equipe = 'equipe6';
    //     $descricao = 'chefe_de_setor';
    //     break;

    case '14643':
        $compare_equipe = 'equipe7';
        $descricao = 'professor_senior';
        break;

    case '14693':
        $compare_equipe = 'equipe8';
        $descricao = 'afiliados';
        break;

    case '14775':
        $compare_equipe = 'equipe9';
        $descricao = 'orientadores_da_pos-graduacao_academica';
        break;

    case '14793':
        $compare_equipe = 'equipe10';
        $descricao = 'orientadores_do_mestrado_profissional';
        break;

    case '14807':
        $compare_equipe = 'equipe11';
        $descricao = 'secretaria_academica';
        break;

    case '14819':
        $compare_equipe = 'equipe12';
        $descricao = 'secretaria_administrativa';
        break;

    case '14832':
        $compare_equipe = 'equipe13';
        $descricao = 'docentes_aposentados';
        break;

    // case '14891':
    //     $compare_equipe = 'equipe14';
    //     $descricao = 'ex-chefes_de_departamento';
    //     break;

    default:
        $compare_equipe = 'none';
        break;

}


//echo $compare_equipe;
//echo $descricao


?>

<section class="py-5">

    <div class="container">

        <?php /* get_template_part('template-parts/menu-equipe'); */ ?>

        <div class="row gy-4">

            <?php
            $args = array(
                'post_type' => 'perfil',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                "meta_query" => array(
                    array(
                        'key' => 'equipe',
                        'value' => "$compare_equipe",
                        'compare' => 'LIKE',
                    )
                ),
            );

            query_posts($args);

            if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="p-3 shadow h-100">
                    <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
                        <?php echo wp_get_attachment_image( get_field('item_perfil')['foto_de_perfil'], 'full', "", ["class" => "img-fluid w-100"]); ?>
                    </figure>
                    <div>
                        <p class="fs-6 fw-bold mb-2 pb-0 text-center text-uppercase"><?php echo get_field('item_perfil')['prefixo']; ?> <?php the_title(); ?></p>
                        <div class="fs-6 mb-0 pb-0 text-center s-descricao small">
                            <?php
                                $desc = get_field('item_perfil', get_the_id())[$descricao];
                                $nucleo = get_field( 'item_perfil', get_the_id() )['nucleo'];
                                ($descricao == 'chefe_de_setor' && $nucleo === "true") ? $text = 'Núcleo de ' : $text = '';
                                echo $text.$desc;
                            ?>
                        </div>
                        <div class="justify-content-center row gx-2">

                            <?php if(get_field('item_perfil')['lattes']): ?>
                            <div class="col-auto">
                                <a href="<?php echo get_field('item_perfil')['lattes']; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('item_perfil')['publoons']): ?>
                            <div class="col-auto">
                                <a href="<?php echo get_field('item_perfil')['publoons']; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14453, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('item_perfil')['orcid']): ?>
                            <div class="col-auto">
                                <a href="<?php echo get_field('item_perfil')['orcid']; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14451, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('item_perfil')['linkedin']): ?>
                            <div class="col-auto">
                                <a href="<?php echo get_field('item_perfil')['linkedin']; ?>" target="_blank">
                                    <?php echo wp_get_attachment_image( 14455, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('item_perfil')['google_academy']): ?>
                            <div class="col-auto">
                                <a href="<?php echo get_field('item_perfil')['google_academy']; ?>" target="_blank">
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
            else:
            ?>

            <div class="col-12">
                <?php // content padrão de página (página template equipe, mas sem conteúdo de perfil. Exibe o content da  página)
                the_content(); ?>
            </div>

            <?php
            endif;
            ?>

        </div>

    </div>
</section>

<?php
get_template_part('template-parts/logos');
get_footer();
?>
