<?php
/*
    Template Name: Menu Lateral

*/

get_header();

// pega id da página
$id = get_the_id();

$lateral = array(
    'menu' => ''.get_field("menu").'',
    'container_class' => 'nav-menu-lateral',
    'menu_class' => 'nav-menu-lateral__wrapper'
);

?>

<section class="py-5">
    <div class="row">
        <div class="col-lg-2 js-nav-menu">
            <?php wp_nav_menu($lateral); ?>
        </div>

        <?php if($id==14249): ?>
        <div class="col-lg-10">
            <div class="entry-content-post">
                <div class="row">
                    <div class="col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12">
                        <form action="#" class="row gy-3">
                            <div class="col-lg-9 col-xl-10">
                                <input type="text" class="form-control w-100" placeholder="Insira aqui seu nome (apenas uma parte - não use caracteres especiais)">
                            </div>
                            <div class="col-lg-3 col-xl-2">
                                <input type="submit" class="btn btn-primary bg-primary text-white w-100 py-2" value="Pesquisar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php else : ?>

        <div class="col-lg-10">
            <div class="entry-content-post">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endif; ?>


    </div>
</section>

<?php
get_template_part('template-parts/logos');

get_footer();
