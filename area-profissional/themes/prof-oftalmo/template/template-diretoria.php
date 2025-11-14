<?php
/*
    Template Name: Diretoria

*/

get_header();

?>

<section class="py-5">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php
                endwhile;endif;
                wp_reset_query();
                ?>
            </div>
        </div>

        <div class="row gy-5">

            <?php if( have_rows('item_profile') ):  while ( have_rows('item_profile') ) : the_row(); ?>
            <div class="col-12 col-sm-6 col-xl-3">

                <?php
                $id_perfil = get_sub_field('perfil');
                $prefixo = get_field('item_perfil', $id_perfil)['prefixo'];
                $nome = get_the_title($id_perfil);
                $descricao = get_field('item_perfil', $id_perfil)['diretoria'];
                $lattes = get_field('item_perfil', $id_perfil)['lattes'];
                $publoons = get_field('item_perfil', $id_perfil)['publoons'];
                $orcid = get_field('item_perfil', $id_perfil)['orcid'];
                $linkedin = get_field('item_perfil', $id_perfil)['linkedin'];
                $google_academy = get_field('item_perfil', $id_perfil)['google_academy'];

                $desc = explode('|', $descricao);
                
                ?>

                <div class="p-3 shadow h-100">
                    <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;">
                        <?php echo wp_get_attachment_image( get_field('item_perfil', $id_perfil)['foto_de_perfil'], 'full', "", ["class" => "img-fluid"]); ?>
                    </figure>
                    <div class="notranslate">
                        <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?=$prefixo; ?> <?=$nome; ?></p>
                        <p class="mb-2 pb-0 text-center conteudo pt" style="font-size: 14px;"> <?= $desc[0]; ?></p>
                        <p class="mb-2 pb-0 text-center conteudo en d-none" style="font-size: 14px;"> <?= $desc[1]; ?></p>
                        <p class="mb-2 pb-0 text-center conteudo es d-none" style="font-size: 14px;"> <?= $desc[2]; ?></p>
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

<script>
    // Detecta o idioma atual da página (ex: "en-US", "pt-BR", "es")
    const docLang = document.documentElement.lang;

    // Referências aos botões (ajuste os seletores conforme sua estrutura)
    const btnPt = document.querySelector('[data-gt-lang="pt"]');
    const btnEn = document.querySelector('[data-gt-lang="en"]');
    const btnEs = document.querySelector('[data-gt-lang="es"]');

    // Função para alternar visibilidade com base no idioma
    function switchLanguage(lang) {
        const ptContent = document.querySelectorAll('.conteudo.pt');
        const enContent = document.querySelectorAll('.conteudo.en');
        const esContent = document.querySelectorAll('.conteudo.es');

        const showElements = (elements) => {
        elements.forEach(el => el.classList.remove('d-none'));
        };
        const hideElements = (elements) => {
            elements.forEach(el => el.classList.add('d-none'));
        };

        // Garante que as listas não estão vazias
        if (!ptContent || !enContent || !esContent) return;

        // Alterna os conteúdos conforme o idioma
        if (lang === 'pt' || lang === 'pt-BR' || lang === 'auto') {
            showElements(ptContent);
            hideElements(enContent);
            hideElements(esContent);
        } else if (lang === 'en') {
            hideElements(ptContent);
            showElements(enContent);
            hideElements(esContent);
        } else if (lang === 'es') {
            hideElements(ptContent);
            hideElements(enContent);
            showElements(esContent);
        }
    }

    // Define o conteúdo inicial conforme o idioma da página
    // if (docLang.startsWith('es')) {
    //     switchLanguage('es');
    // } else {
    //     // Qualquer idioma que não seja espanhol (inclui pt, en, etc.)
    //     switchLanguage('en');
    // }

    // Event listeners para botões de troca de idioma
    btnPt?.addEventListener('click', () => switchLanguage('pt'));
    btnEn?.addEventListener('click', () => switchLanguage('en'));
    btnEs?.addEventListener('click', () => switchLanguage('es'));
</script>

<?php
get_footer();
?>
