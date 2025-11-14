<section class="py-5">
    <div class="row">
        <div class="col-lg">
            <?php the_content(); ?>
        </div>
        <div class="col-lg-3">
            <div class="bg-light p-4">
                <div>
                    <h5 class="mb-1">Data / Horário:</h5>
                    <p class="small"> <?= get_field("detalhes")["data_horario"] ?> </p>
                </div>
                <div>
                    <h5 class="mb-1">Local:</h5>
                    <p class="small"> <?= get_field("detalhes")["local"]; ?> </p>
                </div>
                <?php if( get_field("detalhes")["btn_inscricoes"] == "aberto" ) {
                    echo '<a href="'.get_field("detalhes")["link_inscricao"].'" class="btn btn-primary" style="text-wrap: balance;"> Inscrições Abertas </a>';
                } else{
                    echo '<a class="btn btn-primary" style="text-wrap: balance;"> Inscrições Encerradas </a>';
                } ?>
            </div>
        </div>
    </div>
</section>