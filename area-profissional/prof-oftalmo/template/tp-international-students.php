<?php
/*
    Template Name: International students

*/

get_header(); ?>

<section class="py-5">
    <div class="container notranslate">
        
        <div class="entry-content-post pt en">
            <?= get_post_field('post_content', 16159); ?>    
        </div>
        
        <div class="entry-content-post es d-none">
            <?= get_post_field('post_content', 16163); ?>    
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
        const enContent = document.querySelector('.entry-content-post.en');
        const esContent = document.querySelector('.entry-content-post.es');

        // Segurança: verifica se os elementos existem antes de manipular
        if (!enContent || !esContent) return;

        if (lang === 'en' || lang === 'pt' || lang === 'pt-BR' || lang === 'auto') {
            enContent.classList.remove('d-none');
            esContent.classList.add('d-none');
        } else if (lang === 'es') {
            enContent.classList.add('d-none');
            esContent.classList.remove('d-none');
        }
    }

    // Define o conteúdo inicial conforme o idioma da página
    if (docLang.startsWith('es')) {
        switchLanguage('es');
    } else {
        // Qualquer idioma que não seja espanhol (inclui pt, en, etc.)
        switchLanguage('en');
    }

    // Event listeners para botões de troca de idioma
    btnPt?.addEventListener('click', () => switchLanguage('pt'));
    btnEn?.addEventListener('click', () => switchLanguage('en'));
    btnEs?.addEventListener('click', () => switchLanguage('es'));
</script>



<?php

get_footer();
