<?php
/*
    Template Name: Orientações

*/

get_header(); ?>

<section class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>Central de Atendimento</h2>
            <div class="row px-3 px-lg-0 gap-4 justify-content-between">
                <article class="mb-3 col-lg bg-light rounded-0 p-4 text-center">
                    <i class="fa-solid fa-location-dot text-primary mb-3" style="font-size: 40px"></i>
                    <p class="p-0 fw-bold">Endereço:</p>
                    <a class="text-decoration-none" href="https://maps.app.goo.gl/orC5Sc4NtAto7PPL8" target="_blank" title="Localização da UNIFESP">
                        <span class="fw-bold">Secretaria Acadêmica</span> <br>
                        Rua Botucatu, 806 - Vila Clementino, São Paulo - SP <br>
                        04023-062
                    </a>
                    <div class="row g-2 mt-3 justify-content-center">
                        <div class="col-auto">
                            <a class="btn btn-primary" href="https://www.google.com/maps/dir//Sociedade+Brasileira+de+Oftalmologia+Pedi%C3%A1trica+-+SBOP+-+R.+Casa+do+Ator,+1117+-+Conjunto+21+-+Vila+Ol%C3%ADmpia,+S%C3%A3o+Paulo+-+SP,+04546-004/@-23.5842132,-46.6887044,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce57227f736ad3:0x91c99ed6f84aa0df!2m2!1d-46.6837812!2d-23.5969425?entry=ttu" target="_blank" title="Como chegar pelo Google Maps">Maps</a>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-primary" href="https://www.waze.com/pt-PT/live-map/directions/br/sp/r.-casa-do-ator,-1117?to=place.ChIJ1y_Pwk5XzpQRuiwFRH85DZ0" target="_blank" title="Como chegar pelo Waze">Waze</a>
                        </div>
                    </div>
                </article>
                <article class="mb-3 col-lg bg-light rounded-0 py-4 px-3 text-center d-flex flex-column justify-content-center">
                    <i class="fa-solid fa-eye text-primary mb-3" style="font-size: 40px"></i>
                    <p class="p-0 fw-bold small">Área Assistência: (Atendimento ao Paciente)</p>
                    <div class="my-2 text-center">
                        <a href="+551155764000">(11) 5576-4000</a>
                        <p class="small">PABX do HSP</p>
                    </div>
                </article>
            </div>

            <h2>Atendimento Ambulatorial</h2>
            <hr class="my-2 mb-4">
            <div class="entry-content-post">
                <?= the_content(); ?>
            </div>

        </div>

    </div>
</section>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14624.636664948379!2d-46.642895!3d-23.598624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a253507ca4b%3A0xca4f5398fbe2abb8!2sR.%20Botucatu%2C%20806%20-%20Vila%20Clementino%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004023-062!5e0!3m2!1spt-BR!2sbr!4v1698426760234!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php get_footer(); ?>
