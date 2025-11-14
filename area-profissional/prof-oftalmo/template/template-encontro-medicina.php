<?php
/*
    Template Name: encontro de medicina
    Template Post Type: Post, Page
*/

get_header();

?>

<style media="screen">
.nav-programacao  .nav-link.active {
    background: #125c52 !important;
    color: white !important;
}
.nav-programacao  .nav-link {
    border: 1px solid #e7e7e7;
}

  .nav-programacao li::before{
    display: none;
  }
  .nav-programacao li{
    padding: 0px !important;
        margin-top: 0px !important;

  }

  .nav-programacao  ul li:not(:first-child), .entry-content-post ul li:not(:first-child){
        margin-top: 0px !important;

  }
</style>


<section class="py-5">
    <div class="container entry-content-post">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
          <p> <?php _e('Sorry, this page does not exist.'); ?> </p>
        <?php endif; ?>

          <div class="row">
            <div class="col-lg-6">
              <a href="https://siex.siiu.unifesp.br/catalogo-siex/26091/mais-info" target="_blank" class="fw-bolder fs-2 text-white p-4 bg-primary w-100 d-flex justify-content-center">FAÇA SUA INSCRIÇÃO</a>
            </div>
            <div class="col-lg-6">
              <a href="https://oftalmodapaulista.com.br/profissional/resumo-xiv-encontro-nacional-de-medicina/" class="fw-bolder fs-2 text-white p-4 w-100 d-flex justify-content-center" style="background: #004162; ">ENVIE SEU RESUMO</a>
            </div>
          </div>



          <h2>Programação Preliminar</h2>

          <ul class="nav nav-tabs mb-3 nav-programacao" id="myTab" role="tablist" style="    display: flex;
    align-items: center;
    align-content: center;
    justify-content: start;
    list-style: none;
    text-decoration: none;">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">25/10/2024 - Sexta-Feira</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">26/10/2024 - Sábado</button>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <table class="table table-striped table-hover  mx-auto" style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <th colspan="2" style="background: #125c52">
                      <div>
                        <h4 class="my-2 text-white">SEXTA-FEIRA (25/10/2024)</h4>
                      </div>
                    </th>
                  </tr>

                    <tr>
                      <th width="20%">
                        <p>07:00 - 08:00</p>
                      </th>
                      <td>
                        <p>Credenciamento</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>08:00 - 08:30</p>
                      </th>
                      <td>
                        <p>Abertura Oficial: Mesa do Encontro CAPES/UNIFESP. <br> Profa. Suzan Pantaroto de Vasconcellos, Prof. Dr. Magnus Régios Dias da Silva, Prof. Dr. Antonio
Gomes de Souza Filho e Profa. Dra. Débora Cristina Hipólide <br> Hino Nacional.
 </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>08:30 - 10h00</p>
                      </th>
                      <td>
                        <p> SESSÃO I <br> Desafios e Tendências do Sistema Nacional de Pós-Graduação (SNPG) <br> Moderadores: Prof. Dr. Paulo Louzada, Prof. Dr. Julio Croda e Prof. Dr. Ricardo Cavalli </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>08:30 - 09h00</p>
                      </th>
                      <td>
                        <p>Um novo modelo de pós-graduação: complexidade, perspectivas e desafios da Medicina no contexto da grande área de Saúde</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>09:00 – 09:30</p>
                      </th>
                      <td>
                        <p>A importância de formarmos docentes. <br> Prof. Dr. Rubens Belfort Jr </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>09h30 - 10h00</p>
                      </th>
                      <td>
                        <p>Discussões com a Plenária. <br> Moderadores + Palestrantes </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:00 - 10:30</p>
                      </th>
                      <td>
                        <p>Intervalo para Café e Visitação aos Pôsteres.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:30h – 12h00</p>
                      </th>
                      <td>
                        <p>SESSÃO II <br> Desafios e Tendências do Sistema Nacional de Pós-Graduação (SNPG) <br> Moderadores: Prof. Dr. Paulo Louzada, Prof. Dr. Julio Croda e Prof. Dr. Ricardo Cavalli.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:30h - 11:00</p>
                      </th>
                      <td>
                        <p>O processo de avaliação da pós-graduação como
indutor do impacto social: evolução histórica e
perspectivas <br> Prof. Dr. Antônio Gomes de Souza Filho
 </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>11:00 - 12:00</p>
                      </th>
                      <td>
                        <p>Discussões com a Plenária. <br> Moderadores + Palestrante </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>12:00 - 13:30</p>
                      </th>
                      <td>
                        <p>Almoço.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>13:30 - 15:00</p>
                      </th>
                      <td>
                        <p>SESSÃO III  <br> Avaliação da Pós-Graduação <br> Moderadores: Prof. Dr. Paulo Louzada, Prof. Dr. Júlio Henrique Rosa Croda e Prof. Dr. Ricardo Cavalli </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>13:30 - 13:50</p>
                      </th>
                      <td>
                        <p>Novas métricas para avaliar a qualidade e a
repercussão da pesquisa: para além do fator de
impacto <br> Prof. Dr. Júlio Henrique Rosa Croda
</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>13:50 - 15:00</p>
                      </th>
                      <td>
                        <p>Avaliação qualitativa – o que há de novo nas fichas
de cada área <br>  Coordenadores de Área</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>13:50 – 14:10</p>
                      </th>
                      <td>
                        <p>Medicina I. <br> Prof. Dr. Paulo Louzada Júnior e Profa.
Dra. Fernanda M. M. Carvalho
 </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>14:10 – 14:30</p>
                      </th>
                      <td>
                        <p>Medicina II. <br> Prof. Dr. Júlio Henrique Rosa Croda e
Prof. Dr. Carlos A. Caramori </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>14:30 – 14:50</p>
                      </th>
                      <td>
                        <p>Medicina III. <br> Prof. Dr. Ricardo Carvalho Cavalli e
Profa. Dra. Daniela Francescato Veiga </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>14:50 - 15:20</p>
                      </th>
                      <td>
                        <p>Discussões em Plenária: Críticas ao atual modelo de métrica de avaliação, o fim do Qualis e as
novas métricas de qualidade e o impacto da pesquisa, a importância da avaliação por pares,
feedback e autoavaliação dos programas.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>15:20 - 15:50</p>
                      </th>
                      <td>
                        <p>Intervalo para Café e Visitação aos Pôsteres.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>15:50 - 16:30</p>
                      </th>
                      <td>
                        <p> SESSÃO IV <br> O novo modelo de pós-graduação proposto pelo Conselho Nacional de Educação: impactos e
desafios. <br> Moderador: Prof. Dr. Julio Croda e Profa. Dra. Helena Nader</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>15:50 – 16:20</p>
                      </th>
                      <td>
                        <p>Apresentação da proposta do CNE. <br> Prof. Dr. Roberto Liza Curi </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>16:20 - 16:40</p>
                      </th>
                      <td>
                        <p>Visão dos Pró-reitores das IES. <br> Prof. Dr. Robério Rodrigues Silva </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>16:40 - 17:20</p>
                      </th>
                      <td>
                        <p>Discussões em Plenária: Papel do SNPG na evolução da PG Brasileira; a competência de grandes instituições e a otimização dos processos, prós e contras na modificação de abertura e permanência de PPGs.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>17:20 - 18:30</p>
                      </th>
                      <td>
                        <p>SESSÃO V <br> Ética e Integridade Científica <br>  Moderadores: Prof. Dr. Jose Roberto Lapa e Silva e Profa. Dra. Denise de Freitas

</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>17:20 - 17:40</p>
                      </th>
                      <td>
                        <p>Ética e Integridade científica em tempos de ciência aberta e IA. <br> Prof. Dr. José Roberto Goldim </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>17:40 – 18:00</p>
                      </th>
                      <td>
                        <p>Prevenção e combate à má conduta científica. <br> Profa. Dra. Clarissa Maya </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>18:00 - 18:30</p>
                      </th>
                      <td>
                        <p>Discussões com a Plenária: O papel das instituições na promoção da ética, a importância da
formação em ética para pesquisadores, e as ferramentas disponíveis para garantir a integridade
científica, uso e regulação da IA. </p>
                      </td>
                    </tr>

                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <table class="table table-striped table-hover mx-auto" style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <th colspan="2" style="background: #125c52">
                      <div class="">
                        <h4 class="my-2 text-white">SÁBADO (26/10/2024)</h4>
                      </div>
                    </th>
                  </tr>

                    <tr>
                      <th width="20%">
                        <p>08:00 - 09:10</p>
                      </th>
                      <td>
                        <p>SESSÃO VI <br>
Egresso da pós-graduação, o mercado de trabalho e o pensamento crítico. <br>
Moderadora: Profa. Dra. Daniela Francescato Veiga.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>08:00 - 08:30</p>
                      </th>
                      <td>
                        <p>O complexo econômico da saúde e a necessidade de
formação para a inovação. <br> Prof. Dr. Alexandre Padilha.
</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>08:30 - 08:50</p>
                      </th>
                      <td>
                        <p>Do perfil do egresso ao seu destino – o preparo para
a carreira acadêmica e para o mercado de trabalho <br> Prof. Dr. Cristiano Xavier </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>08:50 – 09:10</p>
                      </th>
                      <td>
                        <p>Acompanhamento de egressos – instrumentos e
estratégias <br> Profa. Dra. Fernanda Carvalho Maia</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>09:10 - 09:30</p>
                      </th>
                      <td>
                        <p>Visão do Discente de Pós-Graduação sobre o seu
destino <br> Me. Vinicius Soares </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>09:30 – 09:40</p>
                      </th>
                      <td>
                        <p>Discussões em plenária: Como os programas de pós-graduação podem se adaptar às demandas
do mercado, a importância do acompanhamento dos egressos para a avaliação, e o papel do
empreendedorismo acadêmico. <br>  Moderadores: Profa. Dra. Daniela Francescato Veiga, Prof. Dr. Cristiano Xavier, Profa. Dra.
Fernanda Carvalho Maia</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>09:40 – 10:00</p>
                      </th>
                      <td>
                        <p>Intervalo para Café e Visitação aos Pôsteres</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:00 – 11:00</p>
                      </th>
                      <td>
                        <p>SESSÃO VII <br> Autoavaliação das áreas das Medicinas <br> Moderador: Prof. Dr. Carlos Caramori </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:00 - 10:20</p>
                      </th>
                      <td>
                        <p>Desafios no processo de autoavaliação –
metodologias possíveis, análise e aplicação de
resultados
<br> Prof. Dr. Nildo Alves Batista  </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:20 - 10:40</p>
                      </th>
                      <td>
                        <p>O papel da autoavaliação como determinante da
qualidade dos programas de pós-graduação. <br> Prof. Dr. Marcelo Mira</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>10:40 - 11:00</p>
                      </th>
                      <td>
                        <p>Discussões em Plenária: Políticas de autoavaliação, repercussões para os docentes do
programa, gestão de programas de pós-graduação. <br> Moderadores: Prof. Dr. Nildo Alves Batista, Prof. Dr. Marcelo Mira</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>11:00 - 12:00</p>
                      </th>
                      <td>
                        <p>Sessão de apresentação dos pôsteres finalistas. <br> Comissão: Prof. Dr. Carlos Antonio Caramori, Profa. Dra. Fernanda C. Maia, Profa. Dra. Daniela
Francescato Veiga
 </p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>12:00 - 13:00</p>
                      </th>
                      <td>
                        <p>Almoço</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>13:00 – 15:00</p>
                      </th>
                      <td>
                        <p>Reunião com as Áreas de Avaliação da Medicina Acadêmicos e Profissionais (Medicina I,
Medicina II, Medicina III)
</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <p>15:00 – 16:00</p>
                      </th>
                      <td>
                        <p>Cerimônia de premiação dos pôsteres. <br> Prof. Dr. Paulo Louzada Junior, Prof. Dr. Júlio Henrique Rosa Croda e Prof. Dr. Ricardo de Carvalho
Cavalli <br> Encerramento. </p>
                      </td>
                    </tr>

                </tbody>
              </table>
            </div>
          </div>

          <p>Baixe a programação preliminar em forma de pdf no link abaixo</p>
          <a class="btn-primary btn text-white fs-4" href="https://oftalmodapaulista.com.br/profissional/wp-content/uploads/2024/10/Programa_Final.pdf" download>Clicando aqui</a>

          <h2>ORGANIZAÇÃO:</h2>

          <h3>Coordenadores Medicinas da CAPES</h3>
          <h4>Medicina I</h4>
          <ul>
            <li> <strong>Coordenador:</strong> Paulo Louzada Junior (USP/Ribeirão Preto)</li>
            <li> <strong>Coordenador Adjunto de Programas Acadêmicos:</strong>Prof. Dr. Marcelo Távora Mira (PUC/PR)</li>
            <li> <strong>Coordenadora Adjunta de Programas Profissionais:</strong> Profa. Dra. Fernanda Martins Maia Carvalho (UNIFOR)</li>
          </ul>

          <h4>Medicina II</h4>
          <ul>
            <li> <strong>Coordenador:</strong>  Prof. Dr. Júlio Henrique Rosa Croda (UFMS)</li>
            <li> <strong>Coordenador Adjunto de Programas Acadêmicos:</strong> Prof. Dr. Gil Guerra Júnior (UNICAMP)
</li>
            <li> <strong>Coordenador Adjunto de Programas Profissionais:</strong>  Prof. Dr. Carlos Antonio Caramori (UNESP/Botucatu)</li>
          </ul>

          <h4>Medicina III</h4>
          <ul>
            <li> <strong>Coordenador:</strong> Prof. Dr. Ricardo de Carvalho Cavalli (USP/FMRP)
</li>
            <li> <strong>Coordenador Adjunto de Programas Acadêmicos:</strong> Prof. Dr. Cristiano Xavier Lima (UFMG)</li>
            <li> <strong>Coordenadora Adjunta de Programas Profissionais:</strong> Profa. Dra. Daniela Francescato Veiga (UNIVAS)</li>
          </ul>

          <h4>Apoio Logístico/Científico</h4>
          <ul>
            <li> Profa. Dra. Denise de Freitas, Profa. Associada Livre-Docente, Departamento de Oftalmologia e Ciências
Visuais, Escola Paulista de Medicina, UNIFESP</li>
            <li> Profa. Dra. Débora Cristina Hipólide, Professora Associada, Departamento de Psicobiologia e
Coordenadora da Câmara de Pós-graduação e Pesquisa, Escola Paulista de Medicina, UNIFESP</li>
            <li> Prof. Dr. Fernando Atique, Professor Associado, do Departamento de História da Universidade Federal de São Paulo e Pró-Reitor de Pós-Graduação e Pesquisa da UNIFESP</li>
          </ul>


          <div class="">
            <h2>Hotéis próximos a Unifesp:</h2>
            <div class="row">
              <div class="col-lg-3">
                <div class="bg-light p-3 border rounded-3">
                  <p class="mt-0"><strong>Hotel Bienal Suítes</strong></p>
                  <p class="m-0 p-0">R. Sena Madureira, 1225 – Vila Mariana – CEP 04021-051, São Paulo – SP.</p>
                  <p class="m-0 p-0"> <a href="tel:+551150887999">(11) 5088-7999</a> </p>
                  <a href="www.bienalsuites.com.br" target="_blank">bienalsuites.com.br</a>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="bg-light p-3 border rounded-3">
                  <p class="mt-0"><strong>Green Place Ibirapuera</strong></p>
                  <p class="m-0 p-0">Dr. Diogo de Faria, 1201 - Vila Mariana – CEP 04037-004 – São Paulo – SP.</p>
                  <p class="m-0 p-0"> <a href="tel:+551150819150">(11) 5081-9150</a> </p>
                  <a href="www.greenplaceflat.com.br" target="_blank">greenplaceflat.com.br</a>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="bg-light p-3 border rounded-3">
                  <p class="mt-0"><strong>Travel Inn Ibirapuera</strong></p>
                  <p class="m-0 p-0">R. Borges Lagoa, 1179 – Vila Clementino – CEP 04038-003, São Paulo – SP.</p>
                  <p class="m-0 p-0"> <a href="tel:+551150808600">(11) 5080-8600</a> </p>
                  <a href="www.bienalsuites.com.br" target="_blank">bienalsuites.com.br</a>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="bg-light p-3 border rounded-3">
                  <p class="mt-0"><strong>Hotel Grand Mercure</strong></p>
                  <p class="m-0 p-0">Rua Sena Madureira, 1355 – Bloco 1 – Ibirapuera – CEP 04021051 – São Paulo – SP.</p>
                  <p class="m-0 p-0"> <a href="tel:+551132010800">(11) 3201-0800</a> </p>
                  <a href="www.grandmercure.com" target="_blank">grandmercure.com</a>
                </div>
              </div>
          </div>

          <h2>Patrocinio:</h2>
          <p>Programa PAEP Capes - Auxílio Nº 2642/2024, Processo Nº 88881.946176/2024-01</p>


    </div>
</section>


<?php get_footer(); ?>
