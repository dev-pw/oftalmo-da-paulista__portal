<?php

$data = get_field("detalhes")["data_horario"];
$local = get_field("detalhes")["local"];
$investimento = get_field("detalhes")["investimento"];
$btn_insc = get_field("detalhes")["btn_inscricoes"];
$link = get_field("detalhes")["link_inscricao"];

?>
<section class="py-5">
    <div class="row">

        <div class="col-lg entry-content-post">
            <?php the_content(); ?>
        </div>

        <div class="col-lg-3">
            <div class="bg-light p-4">
                <h3 class="text-primary fw-bold"> Detalhes</h3>
                <?php if(!empty($data)) : ?>
                <div class="mb-3">
                    <h5 class="mb-1 fw-bold">Data / Horário:</h5>
                    <p class="small"> <?= $data ?> </p>
                </div>
                <?php endif; ?>

                <?php if(!empty($local)) : ?>
                <div class="mb-3">
                    <h5 class="mb-1 fw-bold">Local:</h5>
                    <p class="small"> <?= $local; ?> </p>
                </div>
                <?php endif; ?>

                <?php if(!empty($investimento)) : ?>
                <div class="mb-3">
                    <h5 class="mb-1 fw-bold">Investimento:</h5>
                    <p class="small"> <?= $investimento ?> </p>
                </div>
                <?php endif; ?>

                <?php if( get_field("detalhes")["btn_inscricoes"] == "aberto" ) {
                    echo '<a href="'.get_field("detalhes")["link_inscricao"].'" class="btn btn-primary" style="text-wrap: balance;"> Clique aqui e inscreva-se </a>';
                } else{
                    echo '<a class="btn btn-primary" style="text-wrap: balance;"> Inscrições Encerradas </a>';
                } ?>
            </div>
        </div>
        
    </div>
</section>