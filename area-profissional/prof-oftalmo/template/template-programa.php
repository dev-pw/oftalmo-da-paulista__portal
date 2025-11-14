<?php
/*
    Template Name: Programa Residência
    Template Post Type: Post, Page
*/

get_header();

?>

<section class="py-5">

    <!-- <div class="bg-light d-flex flex-column align-items-center p-4 mb-5">
        <h3 class="fw-bold"> Processo Seletivo - Residência Médica 2023/2024 </h3>
        <a href="https://coreme.unifesp.br/images/documentos/Processo_Seletivo_2024/Edital/Edital_572_PSRM__2023_2024.pdf" target="_blank" class="btn btn-primary py-2"> Edital Publicado </a>
    </div> -->

    <div class="entry-content-post">
        <?= the_content(); ?>
    </div>

    <div class="mt-3">
        <p class="text-primary">Para todos os candidatos aprovados na 1ª Fase do Processo Seletivo – Ano Opcional  Subespecialidades</p>
        <a href="<?= the_permalink(15105); ?>" class="btn btn-primary my-3">Formulário Análise Curricular Prévia</a>
    </div>

    <div class="mt-3">
        <p class="text-primary">Para todos os candidatos aprovados na 1ª Fase do Processo Seletivo – Acesso Direto e Transplante de Córnea</p>
        <a href="<?= the_permalink(15247); ?>" class="btn btn-primary my-3">Formulário Análise Curricular Prévia</a>
    </div>

    <div class="mt-3">
        <h5>Critérios de avaliação da prova prática R4 – Oftalmologia Ano Opcional:</h5>
        <ol>
            <li>Confecção da laceração corneana: topografia, linearidade, profundidade, comprimento;</li>
            <li>Sutura: número (5 pontos), profundidade, comprimento, simetria, paralelismo, distância entre pontos e se foram sepultados.</li>
            <li>Tempo de prova prática para cada candidato:  15 minutos.</li>
        </ol>
    </div>

    <div class="mt-3">
        <p><strong>Secretária do PRM:</strong></p>
        <p>Sra. Rosi Martins </p>
        <p>Email: <a href="mailto:secretariaextensao@unifesp.br">secretariaextensao@unifesp.br</a></p>
        <p class="mt-3"><strong>Supervisor do PRM Oftalmologia</strong> </p>
        <p><strong>Vice-Coordenador do Curso de Especialização</strong></p>
        <p>Dr. Luiz Fernando Teixeira</p>
    </div>

    <div class="mt-5">
        <ul class="nav nav-pills mb-3 gap-3" id="pills-tab" role="tablist">
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link active" id="pills-residentes-tab" data-bs-toggle="pill" data-bs-target="#pills-residentes" type="button" role="tab" aria-controls="pills-residentes" aria-selected="true">Residentes</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-r3-tab" data-bs-toggle="pill" data-bs-target="#pills-r3" type="button" role="tab" aria-controls="pills-r3" aria-selected="false">R3</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-r4-tab" data-bs-toggle="pill" data-bs-target="#pills-r4" type="button" role="tab" aria-controls="pills-r4" aria-selected="false">R4 - Transplante de Córnea</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-r4-oftalmo-tab" data-bs-toggle="pill" data-bs-target="#pills-r4-oftalmo" type="button" role="tab" aria-controls="pills-r4-oftalmo" aria-selected="false">R4 - Subespecialidades</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-administrativo-tab" data-bs-toggle="pill" data-bs-target="#pills-administrativo" type="button" role="tab" aria-controls="pills-administrativo" aria-selected="false">Preceptores Administrativos</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-didaticos-tab" data-bs-toggle="pill" data-bs-target="#pills-didaticos" type="button" role="tab" aria-controls="pills-didaticos" aria-selected="false">Preceptores Didáticos</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-supervisores-tab" data-bs-toggle="pill" data-bs-target="#pills-supervisores" type="button" role="tab" aria-controls="pills-supervisores" aria-selected="false">Supervisores</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-paeto-tab" data-bs-toggle="pill" data-bs-target="#pills-paeto" type="button" role="tab" aria-controls="pills-paeto" aria-selected="false">PAETO</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" onClick="window.location.href = '<?= the_permalink(14233); ?>'" type="button">CCBCO</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" onClick="window.location.href = '<?= the_permalink(14162); ?>'" type="button">Estágio Observacional</button>
            </li>
            <li class="nav-item p-0" role="presentation">
                <button class="nav-link" id="pills-link-tab" data-bs-toggle="pill" data-bs-target="#pills-link" type="button" role="tab" aria-controls="pills-link" aria-selected="false">Link</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <!-- Tab Residentes -->
            <div class="tab-pane fade show active" id="pills-residentes" role="tabpanel" aria-labelledby="pills-residentes-tab">

                <h3>Residentes por Período</h3>

                <div class="cmsmasters_toggles toggles_mode_accordion">

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2025 - 2028</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>578</td>
                                        <td>André Moreira D`Angelis </td>
                                        <td>Unversidade Federal de Uberlândia (UFU) </td>
                                    </tr>
                                    <tr>
                                        <td>579</td>
                                        <td>Barbara Mendonça Paiva Antonio Jose</td>
                                        <td>Unversidade Federal do Pará (UFPA)</td>
                                    </tr>
                                    <tr>
                                        <td>580</td>
                                        <td>Beatriz Karine Taba Oguido</td>
                                        <td>Faculdade Israelita de Ciências da Saúde Albert Einstein (FICSAE)</td>
                                    </tr>
                                    <tr>
                                        <td>581</td>
                                        <td>Bruno Lucas Andrade</td>
                                        <td>Universidade Federal de Minas Gerais (UFMG)</td>
                                    </tr>
                                    <tr>
                                        <td>582</td>
                                        <td>Fernanda Melo Gadelha Sarmento</td>
                                        <td>Unversidade Federal do Rio Grande do Norte (UFRN)</td>
                                    </tr>
                                    <tr>
                                        <td>583</td>
                                        <td>Gustavo Garcia Agra Naufal</td>
                                        <td>Universidade Federal de Mogi das Cruzes (UMC)</td>
                                    </tr>
                                    <tr>
                                        <td>584</td>
                                        <td>Gustavo Moreira Umehara</td>
                                        <td>Unversidade Estadual de Campinas (UNICAMP)</td>
                                    </tr>
                                    <tr>
                                        <td>585</td>
                                        <td>Gustavo Vieira Lima dos Santos</td>
                                        <td>Unversidade Federal de Rondônia (UNIR)</td>
                                    </tr>
                                    <tr>
                                        <td>586</td>
                                        <td>Henry Nakano Sahão</td>
                                        <td>Faculdade de Medicina da Universidade de São Paulo (USP)</td>
                                    </tr>
                                    <tr>
                                        <td>587</td>
                                        <td>Luana Cabral Leao Leal</td>
                                        <td>Universidade de Brasília (UNB)</td>
                                    </tr>
                                    <tr>
                                        <td>588</td>
                                        <td>Pedro Henrique Bronzatto</td>
                                        <td>Universidade Federal de Minas Gerais (UFMG)</td>
                                    </tr>
                                    <tr>
                                        <td>589</td>
                                        <td>Rodrigo Cozar Silva</td>
                                        <td>Unversidade Estadual de Campinas (UNICAMP)</td>
                                    </tr>
                                    <tr>
                                        <td>590</td>
                                        <td>Vinicius de Almeida Rodrigues Silva e Souza</td>
                                        <td>Centro Universitário do Estado do Pará (CESUPA)</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2024 - 2027</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>565</td>
                                        <td>Antonio Morais da Silveira Junior</td>
                                        <td>Universidade Federal do Pará (UFPA)</td>
                                    </tr>
                                    <tr>
                                        <td>566</td>
                                        <td>Bárbara Moreira Ribeiro Trindade dos Santos</td>
                                        <td>Universidade Federal de Minas Gerais (UFMG)</td>
                                    </tr>
                                    <tr>
                                        <td>567</td>
                                        <td>Cindy Lie Tabuse</td>
                                        <td>Faculdade de Medicina da Universidade de São Paulo (USP SP)</td>
                                    </tr>
                                    <tr>
                                        <td>568</td>
                                        <td>Daniela Bueno Larrubia</td>
                                        <td>Universidade São Francisco (USF)</td>
                                    </tr>
                                    <tr>
                                        <td>569</td>
                                        <td>Fernanda Matos E Oliveira</td>
                                        <td>Escola Bahiana de Medicina e Saúde Pública (EBMSP)</td>
                                    </tr>
                                    <tr>
                                        <td>570</td>
                                        <td>Gustavo Gabriel Zonaro</td>
                                        <td>Pontifícia Universidade Católica de Campinas - (PUC-Campinas)</td>
                                    </tr>
                                    <tr>
                                        <td>571</td>
                                        <td>José Levi Tavares Cavalcante</td>
                                        <td>Universidade Federal do Ceará (UFC)</td>
                                    </tr>
                                    <tr>
                                        <td>572</td>
                                        <td>Kristian Holanda Nogueira</td>
                                        <td>Universidade do Estado do Amazonas (UEA)</td>
                                    </tr>
                                    <tr>
                                        <td>573</td>
                                        <td>Pedro Fukui Umeta</td>
                                        <td>Faculdade de Medicina da Universidade de São Paulo (USP-SP)</td>
                                    </tr>
                                    <tr>
                                        <td>574</td>
                                        <td>Rafael Silveira Feitosa</td>
                                        <td>Universidade Federal do Piauí (UFPI)</td>
                                    </tr>
                                    <tr>
                                        <td>575</td>
                                        <td>Sérgio Nakamura Júnior</td>
                                        <td>Escola Paulista de Medicina (EPM)</td>
                                    </tr>
                                    <tr>
                                        <td>576</td>
                                        <td>Thiago Terzian Ganadjian</td>
                                        <td>Escola Paulista de Medicina (EPM)</td>
                                    </tr>
                                    <tr>
                                        <td>577</td>
                                        <td>Wakana Masu</td>
                                        <td>Universidade Uningá</td>
                                    </tr>
                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2023 - 2026</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>557</td>
                                        <td>Carolina Rodrigues Cunha Guimarães Drumond</td>
                                        <td>Universidade Federal dos Vales do Jequitinhinha e Mucuri (UFVJM)</td>
                                    </tr>
                                    <tr>
                                        <td>558	</td>
                                        <td>Daniel Trahtman De Boer</td>
                                        <td>Universidade Luterana do Brasil (ULBRA)</td>
                                    </tr>
                                    <tr>
                                        <td>559	</td>
                                        <td>Henrique Lage Ferreira Ferrer</td>
                                        <td>Escola Paulista de Medicina (EPM)</td>
                                    </tr>
                                    <tr>
                                        <td>560	</td>
                                        <td>Hugo Xavier Rocha Filho</td>
                                        <td>Universidade Federal de Uberlândia (UFU)</td>
                                    </tr>
                                    <tr>
                                        <td>561</td>
                                        <td>José De Paula Barbosa Neto</td>
                                        <td>Universidade Christus (UniChristus)</td>
                                    </tr>
                                    <tr>
                                        <td>562</td>
                                        <td>Leonardo Ajuz Do Prado Oliveira</td>
                                        <td>Universidade Positivo (UP)</td>
                                    </tr>
                                    <tr>
                                        <td>563</td>
                                        <td>Luiza Sousa Soares</td>
                                        <td>Universidade Federal do Maranhão (UFMA)</td>
                                    </tr>
                                    <tr>
                                        <td>564</td>
                                        <td>Matheus Ferreira Santos Da Cruz</td>
                                        <td>Universidade Estadual do Para (UEPA)</td>
                                    </tr>
                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2022 - 2025</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>547</td>
                                        <td>Amanda Thum Welter</td>
                                        <td>Universidade Federal de Ciências da Saúde de Porto Alegre</td>
                                    </tr>
                                    <tr>
                                        <td>548</td>
                                        <td>Arnaldo Roizenblatt</td>
                                        <td>Universidade Federal de São Paulo - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>549</td>
                                        <td>Iago Diógenes Azevedo Costa</td>
                                        <td>Universidade Federal do Rio Grande do Norte</td>
                                    </tr>
                                    <tr>
                                        <td>550</td>
                                        <td>João Gabriel Alexander</td>
                                        <td>Universidade Federal do Espírito Santo - UFES</td>
                                    </tr>
                                    <tr>
                                        <td>551</td>
                                        <td>Lucas Henrique Pereira</td>
                                        <td>Universidade Federal de São Paulo - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>552</td>
                                        <td>Maurício Pessôa Lima Filho</td>
                                        <td>Universidade Federal de São Paulo - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>553</td>
                                        <td>Pedro de Faria Gusmão</td>
                                        <td>Universidade Federal do Espírito Santo - UFES</td>
                                    </tr>
                                    <tr>
                                        <td>554</td>
                                        <td>Pedro Leite Costa Franco</td>
                                        <td>Universidade Federal de Santa Catarina (UFSC)</td>
                                    </tr>
                                    <tr>
                                        <td>555</td>
                                        <td>Tulio Ruiz Eschiapati</td>
                                        <td>Faculdade de Medicina de Catanduva – FAMECA </td>
                                    </tr>
                                    <tr>
                                        <td>556</td>
                                        <td>Ugor Tomaz Fernandes</td>
                                        <td>Universidade Federal do Rio Grande do Norte</td>
                                    </tr>


                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2021 - 2024</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>537</td>
                                        <td>Carolina Ferreira Huang</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>538</td>
                                        <td>Frederico Do Carmo Novaes</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>539</td>
                                        <td>Frederico Galvani Harckbart Carvalho</td>
                                        <td>Universidade Federal do Rio Grande do Norte</td>
                                    </tr>
                                    <tr>
                                        <td>540</td>
                                        <td>Glauco Sérgio Avelino de Aquino</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>541</td>
                                        <td>Guilherme Niciunovas</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>542</td>
                                        <td>João Victor Borges Gomes</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>543</td>
                                        <td>Jose Rodolfo Mariani Radaeli</td>
                                        <td>UNIVERSIDADE FEDERAL DA GRANDE DOURADOS</td>
                                    </tr>
                                    <tr>
                                        <td>544</td>
                                        <td>Maria Gabriela Dourado de Melo Gusmão</td>
                                        <td>Faculdade Pernambucana de Saúde</td>
                                    </tr>
                                    <tr>
                                        <td>545</td>
                                        <td>Vinicius Oliveira Pesquero</td>
                                        <td>Faculdade de Medicina de Marília - FAMEMA</td>
                                    </tr>
                                    <tr>
                                        <td>546</td>
                                        <td>Vitor Dias Gomes Barrios Marin</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2020 - 2023</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>527</td>
                                        <td>Aileen Miwa Tabuse</td>
                                        <td>Universidade Estadual de Campinas – UNICAMP</td>
                                    </tr>
                                    <tr>
                                        <td>528</td>
                                        <td>David Cavalcante Barbosa(DESISTENTE)</td>
                                        <td>UNIVERSIDADE FEDERAL DO RIO GRANDE DO NORTE</td>
                                    </tr>
                                    <tr>
                                        <td>529</td>
                                        <td>Flávio De Ávila Fowler</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>530</td>
                                        <td>Guilherme Macedo Souza</td>
                                        <td>UNIVERSIDADE FEDERAL DA BAHIA</td>
                                    </tr>
                                    <tr>
                                        <td>531</td>
                                        <td>Juan Fulgencio Welko Mendoza</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>532</td>
                                        <td>Klaus Anton Tyrrasch</td>
                                        <td>UNIVERSIDADE FEDERAL DE ALAGOAS</td>
                                    </tr>
                                    <tr>
                                        <td>533</td>
                                        <td>Mariana Araujo Dias</td>
                                        <td>UNIVERSIDADE FEDERAL DO MARANHÃO</td>
                                    </tr>
                                    <tr>
                                        <td>534</td>
                                        <td>Mirella Millena Carmo De Andrade</td>
                                        <td>UNIVERSIDADE FEDERAL DE ALAGOAS</td>
                                    </tr>
                                    <tr>
                                        <td>535</td>
                                        <td>Thatiany Almeida Carvalho(DESISTENTE)</td>
                                        <td>UNIVERSIDADE FEDERAL DE SANTA CATARINA</td>
                                    </tr>
                                    <tr>
                                        <td>536</td>
                                        <td>Tulio Loyola Figueiredo</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>

                                    <!-- BOTAO ADICIONAR -->

                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2019 - 2022</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>517</td>
                                        <td>Armando Coelho Brito&nbsp;</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>518</td>
                                        <td>Felipe Ostermann Magalhães</td>
                                        <td>DESISTENTE</td>
                                    </tr>
                                    <tr>
                                        <td>519</td>
                                        <td>Franklin Kuraoka Oda</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>520</td>
                                        <td>Guilherme Havir Bufarah</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>521</td>
                                        <td>Gustavo Albrecht Samico</td>
                                        <td>UNIVERSIDADE DO ESTADO DO RIO DE JANEIRO</td>
                                    </tr>
                                    <tr>
                                        <td>522</td>
                                        <td>Julia Harumi Iwakura</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>523</td>
                                        <td>Júlia Jiquilin Carvalho</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>524</td>
                                        <td>Mariana Antunes Davi</td>
                                        <td>PONTÍFICIA UNIVERSIDADE CATÓLICA DE CAMPINAS</td>
                                    </tr>
                                    <tr>
                                        <td>525</td>
                                        <td>Mariana Chiba Ikeda</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>526</td>
                                        <td>Victoria Sakamoto</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2018 - 2022</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>509</td>
                                        <td>Ana Carolina Yumi Itikawa</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>510</td>
                                        <td>Beatriz Nugent da    Cunha</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO -    UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>511</td>
                                        <td>Camila Kase</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO -    UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>512</td>
                                        <td>Gabriel Ferrante Abou    Murad</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO -    UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>513</td>
                                        <td>José Arthur Pinto    Milhomens</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO -    UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>514</td>
                                        <td>Lucas Denadai</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO -    UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>515</td>
                                        <td>Lucas Zago Ribeiro</td>
                                        <td>UNIVERSIDADE FEDERAL DE GOIÁS</td>
                                    </tr>
                                    <tr>
                                        <td>516</td>
                                        <td>Zaira Fernanda    Martinho Nicolau</td>
                                        <td>UNIVERSIDADE FEDERAL    DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2017 - 2020</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>501</td>
                                        <td>Allyne Mota Kalaf</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>502</td>
                                        <td>Dante Akira Kondo Kuraiwa</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>503</td>
                                        <td>Diego Lisboa Araujo</td>
                                        <td>UNIVERSIDADE FEDERAL DE ALAGOAS - UFAL</td>
                                    </tr>
                                    <tr>
                                        <td>504</td>
                                        <td>Gilberto Rodrigues Vieira Junior</td>
                                        <!-- <td>UNIVERSIDADE FEDERAL DO RIO GRANDE DO NORTE - UFRN</td> -->
                                        <td>TRANCAMENTO</td>
                                    </tr>
                                    <tr>
                                        <td>505</td>
                                        <td>Irineu Kenji Ogoshi Junior</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>506</td>
                                        <td>Jenifer Shen Ay Wu</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>507</td>
                                        <td>Marilia Cirillo Rollo</td>
                                        <td>CENTRO UNIVERSITÁRIO LUSÍADA - SANTOS</td>
                                    </tr>
                                    <tr>
                                        <td>508</td>
                                        <td>Paulo Alberto Cervi Rosa</td>
                                        <td>UNIVERSIDADE FEDERAL DE SÃO PAULO - UNIFESP</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2016 - 2019</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>493</td>
                                        <td>Bruno Mauricio Rodrigues de Oliveira</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>494</td>
                                        <td>Elaine Regina Sato Watanabe</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>495</td>
                                        <td>Fernando Meister Martins</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>496</td>
                                        <td>Guilherme Eiichi da Silva Takitani</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>497</td>
                                        <td>José Aparecido Job Neto</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>498</td>
                                        <td>Mariana Kawamuro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>499</td>
                                        <td>Murilo Ubukata Polizelli</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>500</td>
                                        <td>Sabrina Jisun Myung Cho</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2015 - 2018</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>480</td>
                                        <td>Aline Couto Carneiro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>481</td>
                                        <td>Daniel Assad Diniz da Gama</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>483</td>
                                        <td>Felipe Marques de Carvalho Taguchi</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>484</td>
                                        <td>Isabel Moreira Borelli</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>485</td>
                                        <td>Leonardo Moraes de Souza</td>
                                        <td>Universidade Estadual de Londrina</td>
                                    </tr>
                                    <tr>
                                        <td>486</td>
                                        <td>Lilian Franca Machado</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>487</td>
                                        <td>Luis Filipe Nakayama</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>488</td>
                                        <td>Marina Lourenço de Conti</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>489</td>
                                        <td>Nikoly Tigani Fares</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>490</td>
                                        <td>Renata Cavalcanti Portela</td>
                                        <td>Escola Bahiana de Medicina e Saúde Pública</td>
                                    </tr>
                                    <tr>
                                        <td>491</td>
                                        <td>Veronica Haysa Yamada</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>492</td>
                                        <td>Vinicius Campos Bergamo</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2014 - 2017</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>467</td>
                                        <td>Daniel Augusto Ghiraldini Vieira</td>
                                        <td>Universidade&nbsp; Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>468</td>
                                        <td>Fábio Kenji Matsumoto</td>
                                        <td>Universidade&nbsp; Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>469</td>
                                        <td>Felipe Pereira</td>
                                        <td>Universidade do Vale do Itajaí</td>
                                    </tr>
                                    <tr>
                                        <td>470</td>
                                        <td>José Belúcio Neto</td>
                                        <td>USP - Faculdade de Medicina de Ribeirão Preto</td>
                                    </tr>
                                    <tr>
                                        <td>471</td>
                                        <td>Letícia Sant'Ana Cardoso da Silva</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>472</td>
                                        <td>Marcos Paulo Suehiro Dantas</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>473</td>
                                        <td>Mariah Mendes Rufino Uehara</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>474</td>
                                        <td>Mariana Pissante Wisneski</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>475</td>
                                        <td>Marina Paes Leme Mothé Neder</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>476</td>
                                        <td>Mikael Kwang Chul Chun</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>477</td>
                                        <td>Müller Gonçalves Urias</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>478</td>
                                        <td>Murilo Bertazzo Peres</td>
                                        <td>Faculdade de Medicina de São José do Rio Preto</td>
                                    </tr>
                                    <tr>
                                        <td>479</td>
                                        <td>Renata Tiemi Kato</td>
                                        <td>Universidade Federal de São Paulo</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2013 - 2016</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>454</td>
                                        <td>Alexandre Gomes Bortoloti de Azevedo</td>
                                        <td>Universidade Federal do Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>455</td>
                                        <td>Bruno Rebello de Godoy</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>456</td>
                                        <td>Cristiane Okazaki</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>457</td>
                                        <td>Danilo Andriatti Paulo</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>458</td>
                                        <td>Eduardo Bicalho Mariottoni</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>459</td>
                                        <td>Fábio Iglesias Marujo</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>460</td>
                                        <td>Felipe Abdo Jorge</td>
                                        <td>Universidade Federal de Juiz de Fora</td>
                                    </tr>
                                    <tr>
                                        <td>461</td>
                                        <td>Felipe Taveira Daher</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>462</td>
                                        <td>Marina Roizenblatt</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>463</td>
                                        <td>Mário Pincelli Netto</td>
                                        <td>UNICAMP - Universidade Estadual de Campinas</td>
                                    </tr>
                                    <tr>
                                        <td>464</td>
                                        <td>Nathalia Mayumi Thomaz de Aquino</td>
                                        <td>Universidade Estadual de Londrina</td>
                                    </tr>
                                    <tr>
                                        <td>465</td>
                                        <td>Rafael Freire Kobayashi</td>
                                        <td>UNIFESP</td>
                                    </tr>
                                    <tr>
                                        <td>466</td>
                                        <td>Verena Ribeiro Juncal</td>
                                        <td>Escola Bahiana de Medicina e Saúde Pública</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2012 - 2015</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>441</td>
                                        <td>Adriano Bogar</td>
                                        <td>Faculdade de Ciências Médicas Santa Casa São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>442</td>
                                        <td>Adriano de Moraes Ferreira</td>
                                        <td>Universidade Federal Rio Grande do Norte</td>
                                    </tr>
                                    <tr>
                                        <td>443</td>
                                        <td>Diego Monteiro Verginassi</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>444</td>
                                        <td>Fábio Ribeiro Colombo</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>445</td>
                                        <td>Geraldine Ragot de Melo</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>446</td>
                                        <td>Grace Peng</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>447</td>
                                        <td>Jacqueline Martins de Sousa</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>448</td>
                                        <td>Lucas Valadão de Brito Soares</td>
                                        <td>Universidade Federal Maranhão</td>
                                    </tr>
                                    <tr>
                                        <td>449</td>
                                        <td>Luis Henrique Lopes  Lira</td>
                                        <td>Universidade Federal  Pernambuco</td>
                                    </tr>
                                    <tr>
                                        <td>450</td>
                                        <td>Paula Delegrego Borba</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>451</td>
                                        <td>Renan Albert Mendonça Rodrigues</td>
                                        <td>Universidade Federal Rio Grande do Norte</td>
                                    </tr>
                                    <tr>
                                        <td>452</td>
                                        <td>Renan Braido Dias</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>453</td>
                                        <td>Roberta Andrade e Nascimento</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2011 - 2014</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>429</td>
                                        <td>Carlos Eduardo Barbosa Filho</td>
                                        <td>Faculdade de Medicina de Pouso Alegre</td>
                                    </tr>
                                    <tr>
                                        <td>430</td>
                                        <td>Huber Martins Vasconcelos Júnior</td>
                                        <td>Universidade Federal de Goiás</td>
                                    </tr>
                                    <tr>
                                        <td>431</td>
                                        <td>Ibraim Viana Vieira</td>
                                        <td>UNB - Universidade de Brasília</td>
                                    </tr>
                                    <tr>
                                        <td>433</td>
                                        <td>Julia Dutra Rossetto</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>434</td>
                                        <td>Mariana de Andrade Coelho</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>435</td>
                                        <td>Patrícia Kakizaki</td>
                                        <td>Universidade Federal do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>436</td>
                                        <td>Paula de Campos Prudente Silva</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>437</td>
                                        <td>Ramon Antunes de Oliveira</td>
                                        <td>Universidade Federal do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>438</td>
                                        <td>Thays Moreira Albhy</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>439</td>
                                        <td>Vinícius Silbiger de Stefano</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>440</td>
                                        <td>Vítor Gomes Prado</td>
                                        <td>Universidade Federal do Piauí</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2010 - 2013</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>414</td>
                                        <td>Adriana Rainha Mascia</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>415</td>
                                        <td>Ana Carolina Almeida Britto Garcia</td>
                                        <td>Universidade Católica de Brasília</td>
                                    </tr>
                                    <tr>
                                        <td>416</td>
                                        <td>Daniel Colicchio</td>
                                        <td>USP Ribeirão Preto</td>
                                    </tr>
                                    <tr>
                                        <td>417</td>
                                        <td>Igor Rodrigo Lins da  Silva</td>
                                        <td>Universidade Federal Fluminense</td>
                                    </tr>
                                    <tr>
                                        <td>418</td>
                                        <td>João Crispim Moraes Lima Ribeiro</td>
                                        <td>Universidade Federal do Ceará</td>
                                    </tr>
                                    <tr>
                                        <td>419</td>
                                        <td>Juliana Moura Bastos Prazeres</td>
                                        <td>UFBA</td>
                                    </tr>
                                    <tr>
                                        <td>420</td>
                                        <td>Luis Guilherme Milesi Pimentel</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>421</td>
                                        <td>Mariana Kaori Yasuta</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>422</td>
                                        <td>Marina Costa Carvalho de Sousa</td>
                                        <td>Universidade Federal do Piauí</td>
                                    </tr>
                                    <tr>
                                        <td>423</td>
                                        <td>Moacyr Amaral Campos</td>
                                        <td>Faculdade de Ciências Médicas Santa Casa São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>424</td>
                                        <td>Natália Yumi    Valdrighi</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>425</td>
                                        <td>Paula Leal dos Santos    Barros</td>
                                        <td>Universidade Federal    do Piauí</td>
                                    </tr>
                                    <tr>
                                        <td>426</td>
                                        <td>Rodrigo Arantes de    Souza Lima</td>
                                        <td>Universidade Federal    do Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>427</td>
                                        <td>Vespasiano Nunes    Rebouças dos Santos</td>
                                        <td>Escola Bahiana de    Medicina e Saúde Pública</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2009 - 2012</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>399</td>
                                        <td>Amanda Correia da Paz</td>
                                        <td>Universidade Federal do Piauí</td>
                                    </tr>
                                    <tr>
                                        <td>400</td>
                                        <td>Bruno Landgren</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td>Bruno Torres Herrerias</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>402</td>
                                        <td>Carolina Pelegrini Barbosa</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>403</td>
                                        <td>Emmerson Badaró Cardoso</td>
                                        <td>Universidade Federal de Juiz de Fora</td>
                                    </tr>
                                    <tr>
                                        <td>404</td>
                                        <td>Fabiana da Fonte Gonçalves</td>
                                        <td>Universidade Federal de Pernambuco</td>
                                    </tr>
                                    <tr>
                                        <td>405</td>
                                        <td>João Rafael de Oliveira Dias</td>
                                        <td>Universidade de Passo Fundo (RS)</td>
                                    </tr>
                                    <tr>
                                        <td>406</td>
                                        <td>Joyce Borges Tsuchiya</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>407</td>
                                        <td>Juliana de Filippi Sartori</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>408</td>
                                        <td>Luiz Filipe Adami Lucatto</td>
                                        <td>Universidade Federal do Triângulo Mineiro&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>409</td>
                                        <td>Maria Flávia de Lima Ribeiro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>410</td>
                                        <td>Mariann Midori Yabiku</td>
                                        <td>Universidade Federal do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>411</td>
                                        <td>Pedro Vanalle Ferrari</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>412</td>
                                        <td>Franklin de Sousa Santos</td>
                                        <td>Universidade Federal de Sergipe</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2008 - 2011</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>388</td>
                                        <td>André Rodrigues de Castro</td>
                                        <td>Universidade Federal do Piauí</td>
                                    </tr>
                                    <tr>
                                        <td>389</td>
                                        <td>Bruna Andrade e Nascimento</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>390</td>
                                        <td>Francisco Rosa Stefanini</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>391</td>
                                        <td>Heloisa Moraes do Nascimento</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>392</td>
                                        <td>Juliana Ferreira Camargo</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>393</td>
                                        <td>Leonardo de Araújo Jorge Fogaça</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>394</td>
                                        <td>Lucas Monferrari Monteiro Vianna</td>
                                        <td>Universidade Federal  de Juiz de Fora</td>
                                    </tr>
                                    <tr>
                                        <td>395</td>
                                        <td>Nahin Mahamad Ali    Gera</td>
                                        <td>Universidade Federal de Londrina</td>
                                    </tr>
                                    <tr>
                                        <td>396</td>
                                        <td>Rodrigo Viana Pozo</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>397</td>
                                        <td>Tarcisio Batista Guerra</td>
                                        <td>Universidade Federal do Pará</td>
                                    </tr>
                                    <tr>
                                        <td>398</td>
                                        <td>Teissy Hentona Osaki</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>537</td>
                                        <td>Claudia Asperti Ottaiano</td>
                                        <td>Universidade Federal do Pará</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2007 - 2010</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>373</td>
                                        <td>Bruno Konno</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>374</td>
                                        <td>Cristina Miyamoto</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>375</td>
                                        <td>Eduardo Pantaleão Sarraf</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>376</td>
                                        <td>Fernanda Castro de Oliveira</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>377</td>
                                        <td>Fernanda Pedreira  Magalhães</td>
                                        <td>Escola Bahiana de Medicina e Saúde Pública</td>
                                    </tr>
                                    <tr>
                                        <td>378</td>
                                        <td>Lilian Cristina do Espírito Santo</td>
                                        <td>UNAERP</td>
                                    </tr>
                                    <tr>
                                        <td>379</td>
                                        <td>Luis Gustavo Biteli</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>380</td>
                                        <td>Luiz Roisman</td>
                                        <td>UERJ</td>
                                    </tr>
                                    <tr>
                                        <td>381</td>
                                        <td>Marcelo Hosoume</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>382</td>
                                        <td>Patrícia Cabral Zacharias Serapicos</td>
                                        <td>Faculdade de Ciências Médicas Santa Casa de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>383</td>
                                        <td>Pilar de Andrade Memoria Moreno</td>
                                        <td>UFRJ</td>
                                    </tr>
                                    <tr>
                                        <td>384</td>
                                        <td>Renato Magalhães Passos</td>
                                        <td>UNB - Universidade de Brasília</td>
                                    </tr>
                                    <tr>
                                        <td>385</td>
                                        <td>Samuel de Miranda  Henriques Ribeiro Gonçalves</td>
                                        <td>Universidade Gama Filho RJ</td>
                                    </tr>
                                    <tr>
                                        <td>386</td>
                                        <td>Simone Akiko Nakayama</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2006 - 2009</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>359</td>
                                        <td>Aline Silveira Moriyama</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>360</td>
                                        <td>Bruno Diniz</td>
                                        <td>Faculdade de Medidina de Petrópolis</td>
                                    </tr>
                                    <tr>
                                        <td>361</td>
                                        <td>Carlos Alexandre de Amorim Garcia Filho</td>
                                        <td>Universidade Federal do Rio Grande do Norte</td>
                                    </tr>
                                    <tr>
                                        <td>362</td>
                                        <td>Carolina Isolani Pereira</td>
                                        <td>UNIVALI</td>
                                    </tr>
                                    <tr>
                                        <td>363</td>
                                        <td>Daniel Lavinsky</td>
                                        <td>UFRGS</td>
                                    </tr>
                                    <tr>
                                        <td>364</td>
                                        <td>Daniel Meira Freitas</td>
                                        <td>Universidade Federal da Bahia</td>
                                    </tr>
                                    <tr>
                                        <td>365</td>
                                        <td>Danielle Lumi Miura</td>
                                        <td>USP Ribeirão Preto</td>
                                    </tr>
                                    <tr>
                                        <td>366</td>
                                        <td>Elaine de Paula Fiod Costa</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>367</td>
                                        <td>Luis Felipe Brenner</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>368</td>
                                        <td>Milton Nunes de Moraes Filho</td>
                                        <td>EMESCAM - ES</td>
                                    </tr>
                                    <tr>
                                        <td>369</td>
                                        <td>Nuno Basilio Ferreira Tavares</td>
                                        <td>Inst. Ciências Biomédicas- ABEL SALAZAR/Univ. Port</td>
                                    </tr>
                                    <tr>
                                        <td>370</td>
                                        <td>Renato Dichetti dos Reis Lisboa</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>371</td>
                                        <td>Sidarta Keizo Hossaka</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>372</td>
                                        <td>Wanessa Furtado Carneiro</td>
                                        <td>UFC</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2005 - 2008</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>348</td>
                                        <td>Caio Vinicius Saito Regatieri</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>349</td>
                                        <td>Cristina Maria Ferreira Carossa</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>350</td>
                                        <td>Eduardo Dib</td>
                                        <td>Universidade Federal do Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>351</td>
                                        <td>Flávio Cotait Kara José</td>
                                        <td>Faculdade de Medicina  do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>352</td>
                                        <td>Gustavo Barreto de Melo</td>
                                        <td>Universidade Federal de Sergipe</td>
                                    </tr>
                                    <tr>
                                        <td>353</td>
                                        <td>Gustavo Castro de Oliveira</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>354</td>
                                        <td>Juliana Mantovani Bottós</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>355</td>
                                        <td>Kátia Mantovani    Bottós</td>
                                        <td>Universidade Federal  do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>356</td>
                                        <td>Rafael de Almeida Gerade</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>357</td>
                                        <td>Rodrigo Doyle Libera</td>
                                        <td>Universidade Federal do Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>358</td>
                                        <td>Verônica Franco de  Castro Lima</td>
                                        <td>Escola Baiana de Medicina e Saúde&nbsp; - Salvador - BA</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2004 - 2007</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>337</td>
                                        <td>Adriana Carla Souza Vianna Oshima</td>
                                        <td>Faculdade de Medicina de Jundiaí</td>
                                    </tr>
                                    <tr>
                                        <td>338</td>
                                        <td>Ana Carolina Noriko Yamada</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>339</td>
                                        <td>Bruno de Albuquerque Furlani</td>
                                        <td>Universidade Federal do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>340</td>
                                        <td>Camila Melo Gadelha</td>
                                        <td>Universidade Federal da Paraíba</td>
                                    </tr>
                                    <tr>
                                        <td>341</td>
                                        <td>Fernando Marcondes Penha</td>
                                        <td>Universidade do Vale do Itajaí</td>
                                    </tr>
                                    <tr>
                                        <td>342</td>
                                        <td>Karine Duarte Silva</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>343</td>
                                        <td>Luciana Garrido Santos Mendaña</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>344</td>
                                        <td>Marcel Eduardo Blumer</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>345</td>
                                        <td>Mauro Toledo Leite</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>346</td>
                                        <td>Roberta Bocci Velletri</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>347</td>
                                        <td>Vanessa Miroski Gerente</td>
                                        <td>Universidade Federal de Santa Catarina</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2003 - 2006</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>322</td>
                                        <td>Aline Kátia Siqueira Sousa</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>323</td>
                                        <td>André Correa de Oliveira Romano&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>324</td>
                                        <td>Angelino Julio Cariello</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>325</td>
                                        <td>Daniela Mayumi Tihama</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>326</td>
                                        <td>Fábio Polimeno Benedicto</td>
                                        <td>Fac. de Med. de Ribeirão Preto da Univ. São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>327</td>
                                        <td>Fernando Sávia Tallo</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>328</td>
                                        <td>Juliana Chizzotti de Azevedo Freire</td>
                                        <td>Faculdade de Medicina de Jundiaí</td>
                                    </tr>
                                    <tr>
                                        <td>329</td>
                                        <td>Leonardo Cunha Castro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>330</td>
                                        <td>Luciana Frizon</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>331</td>
                                        <td>Melissa Midori Aoki</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>332</td>
                                        <td>Rubens Belfort Mattos Neto</td>
                                        <td>Santa Casa</td>
                                    </tr>
                                    <tr>
                                        <td>333</td>
                                        <td>Thales Takeo Takata</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>334</td>
                                        <td>Tiago dos Santos Prata</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>335</td>
                                        <td>Vivian Naomi Sakai</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>336</td>
                                        <td>Wagner Camilo Silva</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2002 - 2005</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>306</td>
                                        <td>Aline do Lago</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>307</td>
                                        <td>André Hasler Príncipe</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>308</td>
                                        <td>Andréa Cotait Kara José</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>309</td>
                                        <td>bruno Machado Fontes</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>310</td>
                                        <td>Dinorah Piacentini Engel</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>311</td>
                                        <td>Eduardo Vitor Navajas</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>312</td>
                                        <td>Felipe Brandão Accioly de Gusmão</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>313</td>
                                        <td>Graciella Silva da Conceição</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>314</td>
                                        <td>Jane Chen</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>315</td>
                                        <td>Karolinne Maia Rocha</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>316</td>
                                        <td>Larissa Araújo Velano</td>
                                        <td>Desistente</td>
                                    </tr>
                                    <tr>
                                        <td>317</td>
                                        <td>Larissa Morimoto Doi</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>318</td>
                                        <td>Renata Aguiar de Andrade Puertas</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>319</td>
                                        <td>Rodrigo Antonio Barbosa Lobo</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>320</td>
                                        <td>Vagner Tadeu Orlando Filho</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>321</td>
                                        <td>Luciano Moreira Pinto</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                <strong>Obs.: Residência passou a ser de 03 anos</strong>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2001 - 2003</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>291</td>
                                        <td>Cecília Tobias de Aguiar Moeller</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>292</td>
                                        <td>Chridtian Andres Yoshiyama Sasaki</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>293</td>
                                        <td>Claudio Pinto Correia</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>294</td>
                                        <td>Edenilson dos Santos Carvalho Junior</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>295</td>
                                        <td>Fabio Bom Aggio</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>296</td>
                                        <td>Juliana Marques de Souza Lagrasta</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>297</td>
                                        <td>Henrique Marini Ferreira</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>298</td>
                                        <td>Larissa Magusso&nbsp;</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>299</td>
                                        <td>Licia Cristina Vago Matielli</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>300</td>
                                        <td>Milena Atique</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>301</td>
                                        <td>Norimar Pinto de Oliveira</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>302</td>
                                        <td>Rodrigo Antonio Brant Fernandes</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>303</td>
                                        <td>Sergio Henrique Teixeira</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>304</td>
                                        <td>Walter Kenji Fukumoto</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>305</td>
                                        <td>Lilian Emi Ohkawara</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2000 - 2002</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>276</td>
                                        <td>Alexandre Hasler Príncipe de Oliveira</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>277</td>
                                        <td>Ana Carolina Luzardo Morales</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>278</td>
                                        <td>Clemente Reinaldo Bartocci Sannazzaro</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>279</td>
                                        <td>Dalton de Freitas Santoro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>280</td>
                                        <td>Daniel Moon Lee</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>281</td>
                                        <td>Ednajar Tavares Macedo Filho</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>282</td>
                                        <td>Fabiana Benites Borges</td>
                                        <td>Desistente</td>
                                    </tr>
                                    <tr>
                                        <td>283</td>
                                        <td>Isabel Cristina Oliveira</td>
                                        <td>Desistente</td>
                                    </tr>
                                    <tr>
                                        <td>284</td>
                                        <td>Lea Cinthia Formigoni</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>285</td>
                                        <td>Margara Zanotele Hemerly de Almeida</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>286</td>
                                        <td>Mirna Yae Yassuda</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>287</td>
                                        <td>Rodrigo Cortes Arce</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>288</td>
                                        <td>Solange Higashitani</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>289</td>
                                        <td>Vinicius da Silveira Saraiva</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>290</td>
                                        <td>Yeh Shu I</td>
                                        <td>Unifesp</td>
                                    </tr>

                                    <tr>
                                        <td>544</td>
                                        <td>Luiz Felipe Hagemann</td>
                                        <td></td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1999 - 2001</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>

                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>263</td>
                                        <td>Adriano Biondi Monteiro Carneiro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>264</td>
                                        <td>Anna Carholina Goes Lourenço</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>265</td>

                                        <td>Caroline Amaral Ferraz</td>
                                        <td>Universidade Federal do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>266</td>
                                        <td>Eliane Mayumi Nakano</td>
                                        <td>Unicamp</td>
                                    </tr>
                                    <tr>
                                        <td>267</td>
                                        <td>Erika Sayuri Yasaki</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>268</td>
                                        <td>Gustavo Teixeira Grotone</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>269</td>
                                        <td>João Paulo de Noronha Duprat Cardoso</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>270</td>
                                        <td>Luiz Fernando Teixeira</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>271</td>
                                        <td>Octaviano Magalhães Junior</td>
                                        <td>Universidade Federal do Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>272</td>
                                        <td>Paulo Augusto de Arruda Mello Filho</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>273</td>
                                        <td>Sandra Izecksohn Tarsis</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>274</td>
                                        <td>Somaia Mitne</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>275</td>
                                        <td>Fabiano Bojikian Ciola</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td>545</td>
                                        <td>Suy Anne Rebouças Martins</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1998 - 1999</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>251</td>
                                        <td>Tereza Cristina Cardoso da Silva (apenas 2º ano do curso) </td>
                                        <td>Faculdade de Medicina de Marília</td>
                                    </tr>
                                    <tr>
                                        <td>252</td>
                                        <td>Ana Paula Silverio Rodrigues</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>253</td>
                                        <td>Eileen Beatriz Mejia Diazgranados</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>254</td>
                                        <td>Fábio Henrique Cacho  Casanova</td>
                                        <td>Universidade Federal do Pernambuco</td>
                                    </tr>
                                    <tr>
                                        <td>255</td>
                                        <td>Larissa Pedroso</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>256</td>
                                        <td>Liang Shih Jung</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>257</td>
                                        <td>Luiz Alberto Soares de Melo Junior</td>
                                        <td>Universidade Federal do Pernambuco</td>
                                    </tr>
                                    <tr>
                                        <td>258</td>
                                        <td>Nichard Unonius</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>259</td>
                                        <td>Roberto Roizenblatt</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>260</td>
                                        <td>Rodrigo Luz Meirelles</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>261</td>
                                        <td>Sung Eun Song</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>262</td>
                                        <td>Wania Regattieri de Biase da Silva</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1997 - 1998</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>239</td>
                                        <td>André Luiz Parolin Ribeiro</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>240</td>
                                        <td>Bruno Castelo Branco</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>241</td>
                                        <td>Ciro Massayuki Komagome</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>242</td>
                                        <td>Daniel Keizo de Medeiros Karaguchi</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>243</td>
                                        <td>Elizabeth M. R. Nogueira Martins</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>244</td>
                                        <td>Júlio César dos Reis Martins (Desistente)</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>245</td>
                                        <td>Lenio Souza Alvarenga</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>246</td>
                                        <td>Luciana da Cruz Noia</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>247</td>
                                        <td>Maria Regina Catai Chalita</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>248</td>
                                        <td>Omar Nicolas Mekari Sabbagh</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>249</td>
                                        <td>Roberto Paione Gasparini</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>250</td>
                                        <td>Silvestre Muniz de Araújo</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1996 - 1997</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>228</td>
                                        <td>Ana Helena Garcia de Araújo</td>
                                        <td>Universidade Federal do Rio Grande do    Norte</td>
                                    </tr>
                                    <tr>
                                        <td>229</td>
                                        <td>Ana Karina Coelho    Albuquerque</td>
                                        <td>Universidade Federal    de Goiás</td>
                                    </tr>
                                    <tr>
                                        <td>230</td>
                                        <td>Cinthia Chiemi Kariya</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>231</td>
                                        <td>Danielle Boni</td>
                                        <td>Universidade Federal    do Espírito Santo</td>
                                    </tr>
                                    <tr>
                                        <td>232</td>
                                        <td>Fernanda Bom Duarte</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>233</td>
                                        <td>Luciana Peixoto dos  Santos</td>
                                        <td>Universidade Federla de Uberlândia</td>
                                    </tr>
                                    <tr>
                                        <td>234</td>
                                        <td>Luiz Izquierdo Villavicencio</td>
                                        <td>Universidade Nacional Federico Villarreal</td>
                                    </tr>
                                    <tr>
                                        <td>235</td>
                                        <td>Maria Angélica M.    Pavão</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>236</td>
                                        <td>Maria do Carmo    Pinheiro</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>237</td>
                                        <td>Sérgio Costa Fantini</td>
                                        <td>Unifesp</td>
                                    </tr>
                                    <tr>
                                        <td>238</td>
                                        <td>Silvia Takanohashi</td>
                                        <td>Unifesp</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1995 - 1996</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">

                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>216</td>
                                        <td>André Barbosa Castelo Branco</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>217</td>
                                        <td>Cláudio Pinto Sandoval</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>218</td>
                                        <td>Cristina Nagako Itami</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Jae Min Lee</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>220</td>
                                        <td>Farisa Fabiani</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>221</td>
                                        <td>Luciana Soares    Cianciarullo</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>222</td>
                                        <td>Luis Tibiriça Aguilar</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>223</td>
                                        <td>Marcelo Intrator    Dimantas</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>224</td>
                                        <td>Nubia Cristina de    Freitas Maia</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>225</td>
                                        <td>Patrícia Yokomizo</td>
                                        <td>&nbsp;</td>

                                    </tr>
                                    <tr>
                                        <td>226</td>
                                        <td>Renato Segarra Arca</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>227</td>
                                        <td>Saira Del Carmen    Velez Marin</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td>540</td>
                                        <td>Ieda Maria Alexandre Barreira</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td>542</td>
                                        <td>Maria Helena Mandello Carvalhães Ramos</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1994 - 1995</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>205</td>
                                        <td>André Correia Maia de Carvalho</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>206</td>
                                        <td>Andrea de Brito Senzi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>207</td>
                                        <td>Cesar Kenji Suzuki</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>208</td>
                                        <td>Daniel Eduardo    Socatelli Gasparian</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>209</td>
                                        <td>Isabela Maria Isolde    de Morais</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>210</td>
                                        <td>José Eduardo Sanchez    Di Martino</td>
                                        <td>Universidade Nacional    de Assunção</td>
                                    </tr>
                                    <tr>
                                        <td>211</td>
                                        <td>Luciane Benitez    Provenzano</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>212</td>
                                        <td>Luiz Henrique Schurig    Fernandez</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>213</td>
                                        <td>Paulo Roberto Kozar</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>214</td>
                                        <td>Ricardo Takahashi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>215</td>
                                        <td>Ruth Alice Rosenhek    Schor</td>
                                        <td>USP</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1993 - 1994</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>194</td>
                                        <td>Alberto dos Santos Carramão</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>195</td>
                                        <td>Christiane Regina    Rolim de Moura</td>
                                        <td>Faculdade de Ciências    Medicas Santa Casa SP</td>
                                    </tr>
                                    <tr>
                                        <td>196</td>
                                        <td>Diego Garces Vasquez</td>
                                        <td>Universidade Central    do Equador</td>
                                    </tr>
                                    <tr>
                                        <td>197</td>
                                        <td>Eduardo Sone Soriano</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>198</td>
                                        <td>Greicie C. Guerra    Attie</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>199</td>
                                        <td>Jorge Manoel de    Almeida Ferreira</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>200</td>
                                        <td>Luiz Danna Neto</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>201</td>
                                        <td>Marcelo Mendonça do    Nascimento</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>202</td>
                                        <td>Marcia Cortes de    Campos</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>203</td>
                                        <td>Nestor Daniel Sanchez    Di Martini</td>
                                        <td>Universidade Nacional    de Assunção</td>
                                    </tr>
                                    <tr>
                                        <td>204</td>
                                        <td>Paulo Pukenis Tubelis</td>
                                        <td>EPM</td>
                                    </tr>

                                    <tr>
                                        <td>541</td>
                                        <td>Luciano de Oliveira Montenegro</td>
                                        <td>Universidade Federal do Espírito Santo</td>
                                    </tr>

                                    <tr>
                                        <td>543</td>
                                        <td>Wladimir Eduardo Kawagoe</td>
                                        <td></td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1992 - 1993</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>Ana Claudia dos Santos Alves</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>184</td>
                                        <td>Celso Boianovsky</td>
                                        <td>Universidade de    Brasília</td>
                                    </tr>
                                    <tr>
                                        <td>185</td>
                                        <td>Denise Maria Muller Valente</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>186</td>
                                        <td>Edson Shizuo Mori</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>187</td>
                                        <td>Helena Mieko Tanaka</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>188</td>
                                        <td>Marcia regina Kimie Higashi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>189</td>
                                        <td>Pablo Fernando Sarco Recalde</td>
                                        <td>Faculdade de Medicina    Central do Equador</td>
                                    </tr>
                                    <tr>
                                        <td>190</td>
                                        <td>Paulo Dantas Rodrigues</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>191</td>
                                        <td>Ricardo Luiz Mascarenas</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>192</td>
                                        <td>Wagner Koji Aragaki</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>193</td>
                                        <td>Soraya Moura Machado Fabris</td>
                                        <td>Universidade Federal  do Espírito Santo</td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <td>538</td>
                                        <td>Adriano Bertoni Frasson</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>539</td>
                                        <td>Danielle Brito Miranda Silva</td>
                                        <td></td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1991 - 1992</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>172</td>
                                        <td>Ângela ramso Chaib</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>173</td>
                                        <td>Helena Lu Chen Wu</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>174</td>
                                        <td>Jorge Augusto Arrue Karica</td>
                                        <td>Universidade Atônoma    de Centro América</td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Juliana Maria Ferraz</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>177</td>
                                        <td>Luis Paves</td>
                                        <td>Faculdade de Medicina    do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>178</td>
                                        <td>Marcelo de Holanda Montenegro</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>178</td>
                                        <td>Marco Cézar Helena</td>
                                        <td>Faculdade de Medicina    da USP</td>
                                    </tr>
                                    <tr>
                                        <td>180</td>
                                        <td>Mário José Carvalho</td>
                                        <td>Universidade Federal    de Uberlândia</td>
                                    </tr>
                                    <tr>
                                        <td>181</td>
                                        <td>Neusa Vidal Sant'Anna</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>182</td>
                                        <td>Paulo Eduardo Melani Seixas</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1990 - 1991</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>163</td>
                                        <td>Claudio Katsuiti Yajima</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>164</td>
                                        <td>Guilherme Luiz Bortoletto</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>165</td>
                                        <td>João Paulo Sartori</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>166</td>
                                        <td>Marcelo Hugo Larco Recalde</td>
                                        <td>Faculdade de Medicina    da Universidade Central do Equador</td>
                                    </tr>
                                    <tr>
                                        <td>167</td>
                                        <td>Nancy Chen Wang</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>168</td>
                                        <td>Raul de Camargo Vianna Filho</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>169</td>
                                        <td>Thelma Luize Pinto de Oliveira</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>170</td>
                                        <td>Walner Daros dos Santos</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>171</td>
                                        <td>Won Sik Chae</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1989 - 1990</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <tr>
                                        <td>154</td>
                                        <td>Eliane Galassi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>156</td>
                                        <td>Fátima Regina Nagoya</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>157</td>
                                        <td>Liliana Mayumi Shintome</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>158</td>
                                        <td>Marcos Guerra Martins</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>159</td>
                                        <td>Mariângela Gomes Pereira Melaragno</td>
                                        <td>Faculdade de Ciências    Medicas Santa Casa SP</td>
                                    </tr>
                                    <tr>
                                        <td>160</td>
                                        <td>Renato Augusto Neves</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>161</td>
                                        <td>Sônia maria Salgado Gigliotti</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>162</td>
                                        <td>Carlos Francisco Malsch Steeger</td>
                                        <td>Universidade do Chile</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1988 - 1989</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>143</td>
                                        <td>Arnaud Araujo Filho</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>144</td>
                                        <td>Clóvis de Moraes Lui</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>145</td>
                                        <td>Enio Wakisaka</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>146</td>
                                        <td>Flávio Jaime da Rocha</td>
                                        <td>Faculdade de Medicina    da Universidade Federal de Uberlândia</td>
                                    </tr>
                                    <tr>
                                        <td>147</td>
                                        <td>Luciene Barbosa de Sousa</td>
                                        <td>Universidade Federal    de Goiás</td>
                                    </tr>
                                    <tr>
                                        <td>148</td>
                                        <td>Magno Antonio Ferreira</td>
                                        <td>Faculdade de Medicina    da Universidade Federal de Uberlândia</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td>Mauro Nakagava</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>150</td>
                                        <td>Patrícia Jara Gómez</td>
                                        <td>Universidade do Chile</td>
                                    </tr>
                                    <tr>
                                        <td>151</td>
                                        <td>Roberto Pereira Lima Junior</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>152</td>
                                        <td>Seiji Hayashi&nbsp;</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>153</td>
                                        <td>Sérgio Carlos Kamei</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1987 - 1988</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>135</td>
                                        <td>Antonio Cesar Maniero</td>
                                        <td>Faculdade de Medicina do Triângulo Mineiro</td>
                                    </tr>
                                    <tr>
                                        <td>136</td>
                                        <td>Arnaldo Bordon Junior</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>137</td>
                                        <td>Lincoln Lemes Freitas</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>138</td>
                                        <td>Lourdes Aiko Hayasi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>139</td>
                                        <td>Marinês Yurie Hirata</td>
                                        <td>EPM</td>

                                    </tr>
                                    <tr>
                                        <td>140</td>
                                        <td>Norma Allemann</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>141</td>
                                        <td>Rogério José Neves</td>
                                        <td>Faculdade de Medicina    do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>142</td>
                                        <td>Sandra Maria Steil Fagundes</td>
                                        <td>Universidade Federal de Santa Catarina</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1986 - 1987</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>127</td>
                                        <td>Beogival Wagner Lucas Santos</td>
                                        <td>Faculdade de    Medicina de Mogi das Cruzes</td>
                                    </tr>
                                    <tr>
                                        <td>128</td>
                                        <td>Emilio de Haro Muñoz</td>
                                        <td>Faculdade de Medicina    da Fundação do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>129</td>
                                        <td>José Eduardo Prata Cançado</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>130</td>
                                        <td>Márcia Beatriz Tartarella</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>131</td>
                                        <td>Márcio Aurélio Martins Abreu</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>132</td>
                                        <td>Mauro Silveira de Quieiroz Campos</td>
                                        <td>Faculdade de Medicina    de Sorocaba</td>
                                    </tr>
                                    <tr>
                                        <td>133</td>
                                        <td>Silvio Luiz Del Santo</td>
                                        <td>Faculdade de Medicina    do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>134</td>
                                        <td>Sung Bok Cha</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1985 - 1986</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>Residente</td>
                                        <td>Nome</td>
                                        <td>Instituição</td>
                                    </tr>
                                    <tr>
                                        <td>119</td>
                                        <td>Carmem Belluzzo Genta</td>
                                        <td>Universidade Estadual de Londrina</td>
                                    </tr>
                                    <tr>
                                        <td>120</td>
                                        <td>Claudio Luiz Lottemberg</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>121</td>
                                        <td>Consuelo Bueno Diniz Adan</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>Márcia Keiko Uyeno</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>124</td>
                                        <td>Mauro Nishi</td>
                                        <td>Faculdade de Medicina da Universidade de São Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>125</td>
                                        <td>Nilva Simeren Bueno de Morais</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>126</td>
                                        <td>Rafael Lourenço Magdaleno</td>
                                        <td>Faculdade de Medicina de Jundiaí</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1984 - 1985</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>111</td>
                                        <td>Carlos Eduardo Natalli Pavesio</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>112</td>
                                        <td>Denise de Freitas</td>
                                        <td>Faculdade de Medicina    do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>113</td>
                                        <td>Elcio Hideo Sato</td>
                                        <td>Faculdade de Medicina    Santo Amaro</td>
                                    </tr>
                                    <tr>
                                        <td>114</td>
                                        <td>João Carlos de Miranda Gonçalves</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>115</td>
                                        <td>Pwa Kiong Ping</td>
                                        <td>Universidade São    Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>116</td>
                                        <td>Swi Yung Lee Chon</td>
                                        <td>Universidade Federal    do Paraná</td>
                                    </tr>
                                    <tr>
                                        <td>117</td>
                                        <td>Urbano Luiz Fonseca</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>118</td>
                                        <td>Yong Min Jui</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1983 - 1984</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>103</td>
                                        <td>Carlos Noburo Sato</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>104</td>
                                        <td>Cesar Lipiner</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>105</td>
                                        <td>Cristina Mara Ando Camargo</td>
                                        <td>Faculdade de Medicina    de Jundiaí</td>
                                    </tr>
                                    <tr>
                                        <td>106</td>
                                        <td>Jorge Armando Cordova Guzman&nbsp;</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>107</td>
                                        <td>Luiz Antonio Vieira</td>
                                        <td>Universidade Federal    da Paraiba</td>
                                    </tr>
                                    <tr>
                                        <td>108</td>
                                        <td>Luiz Roberto Mendonça do Amaral&nbsp;</td>
                                        <td>Universidade Federal    do Maranhão</td>
                                    </tr>
                                    <tr>
                                        <td>109</td>
                                        <td>Mauro Waissmann</td>
                                        <td>Faculdade de Medicina    de Santo Amaro</td>
                                    </tr>
                                    <tr>
                                        <td>110</td>
                                        <td>Nicolau José Slavo</td>
                                        <td>Faculdade de Ciências    Médicas De Santos</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1982 - 1983</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>95</td>
                                        <td>Cassio Luiz Kazuo Takahashi</td>
                                        <td>Fundação Universitária do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>96</td>
                                        <td>Cizuo Katahira</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>97</td>
                                        <td>Hélio Minoru Kadomoto</td>
                                        <td>Fundação    Universitária do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>98</td>
                                        <td>Jairo Cuperman</td>
                                        <td>Faculdade de Ciências    Médicas da Santa Casa de Misericórdia</td>
                                    </tr>
                                    <tr>
                                        <td>99</td>
                                        <td>Mônica dos Santos Cabral</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>Mário Junqueira Nóbrega</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>101</td>
                                        <td>Miguel Del Rey Filho</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>Ricardo Lawinski</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1981 - 1982</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>89</td>
                                        <td>Antonio Sergio Nione</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>90</td>
                                        <td>Edmundo José Velasco Martinelli</td>
                                        <td>Faculdade de Ciências  Médicas de Santos</td>
                                    </tr>
                                    <tr>
                                        <td>91</td>
                                        <td>Moabe Guimarães Borges Ribeiro</td>
                                        <td>Universidade Federal  de Goiás</td>
                                    </tr>
                                    <tr>
                                        <td>92</td>
                                        <td>Oswaldo Costa Cesar Neto</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>93</td>
                                        <td>Ruth Cardoso Alves Plut</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>94</td>
                                        <td>Silvia Prado Smith</td>
                                        <td>Faculdade de Ciências  Médicas de Santos</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1980 - 1981</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>82</td>
                                        <td>José Augusto Alves Ottaiano</td>
                                        <td>Faculdade de    Medicina de Marília</td>
                                    </tr>
                                    <tr>
                                        <td>83</td>
                                        <td>Francisco Carlos M. de Carvalho</td>
                                        <td>Faculdade de Medicina    de Santos</td>
                                    </tr>
                                    <tr>
                                        <td>84</td>
                                        <td>Fausto Uno</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>85</td>
                                        <td>Fábio João Zamboni</td>
                                        <td>Faculdade de Medicina    do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>86</td>
                                        <td>Jeová José Dias</td>
                                        <td>Faculdade de Medicina    de Uberlândia</td>
                                    </tr>
                                    <tr>
                                        <td>87</td>
                                        <td>Tereza Nagae</td>
                                        <td>Faculdade de Medicina    de Jundiaí</td>
                                    </tr>
                                    <tr>
                                        <td>88</td>
                                        <td>Ana Luisa Hofling de Lima</td>
                                        <td>Faculdade de Medicina    de Jundiaí</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1979 - 1980</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>76</td>
                                        <td>Antonio Tripoloni Filho</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>77</td>
                                        <td>Carlos Akira Omi</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>78</td>
                                        <td>Júlia Tsuneschiro</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>79</td>
                                        <td>Maria Cristina Mendes Lima</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>80</td>
                                        <td>Satoshi Yasuta</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>81</td>
                                        <td>Oswaldo Luiz Fortes Paschoal</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1978 - 1979</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>70</td>
                                        <td>Edna Sbrissa de Oliveira</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>71</td>
                                        <td>Noboru Yagui</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>72</td>
                                        <td>Stella Maria Cosa</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>73</td>
                                        <td>Vera Lúcia Shikanai</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>74</td>
                                        <td>Leni Shimoda</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>75</td>
                                        <td>Nanci Nery Arantes</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1977 - 1978</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>63</td>
                                        <td>Sebastião Dominguez Neto</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>64</td>
                                        <td>José Lucas de Souza Filho</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>65</td>
                                        <td>José Guilherme Bugano</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>66</td>
                                        <td>Paulo Tomimatsu</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>67</td>
                                        <td>Marcio Ronald Graf Kuckembuck</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>68</td>
                                        <td>Dalton Luiz de Andrade Marino</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>69</td>
                                        <td>Ana Maria Noriega Petrilli</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1976 - 1977</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>55</td>
                                        <td>Osvaldo Monoru Maruyama</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>56</td>
                                        <td>Luiz Silvio Bonini</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>57</td>
                                        <td>Mariza Toledo de Abreu</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>58</td>
                                        <td>Walter Gomes Amorim</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>59</td>
                                        <td>Waldir Martins Portelinha</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>60</td>
                                        <td>Yoji Nagaoka</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>61</td>
                                        <td>Gonzalo Espejo Gallo</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>62</td>
                                        <td>Pedro Hirata</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1975 - 1976</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>49</td>
                                        <td>Clélia Maria Erwenne</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>50</td>
                                        <td>Erlan de Marco</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>51</td>
                                        <td>José Ricardo Carvalho Lima Redher</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>52</td>
                                        <td>Roberto José Molero</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>53</td>
                                        <td>Marivaldo Castro Oliveira</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>54</td>
                                        <td>Marcos Cesar Amaral Moritz</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1975 - 1976</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>43</td>
                                        <td>Durval Kazuiza Yamada</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td>Hamleto Emílio Molinari</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>45</td>
                                        <td>Marcia Velloso Braga Yasbeck</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>46</td>
                                        <td>Maria Lúcia Rossato</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>47</td>
                                        <td>Tadao Kikuchi</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>48</td>
                                        <td>Tomas Fernando Scalamandre de Mendonça</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1973 - 1974</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Alcides Hirai</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Ellen Bussmeyer Coelho</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Ismael Abdo Ganeo</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>Paulo Augusto de Arruda Mello</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>42</td>
                                        <td>Yukiko Yoshida</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1972 - 1973</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Ademir de Oliveira Regatieri</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Alexandre Tena Almada</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>José Júlio Boldrini Vicente</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Kozo Nakano</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Napoleão João da Silva</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Nicanor Tadeu Prospero</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Tommy Schwartz</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1971 - 1972</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Ernesto Consoni Filho</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Paulo Mitsuro Imamura</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Mauro Fideo Hashimoto</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Pedro Paulo de Oliveira Bonomo</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Rubens Belfort de Mattos Junior</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1970 - 1971</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Celso Francisco Angelucci</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Fernando Corpa Fernandes</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Raul Saraiva Santos</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Reinaldo Rubens de Barros</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1969 - 1970</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Isaac Neustein</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>José Benedito Salaroli</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Juan José Areas Munoz</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Luiz Carlos Guarnieri</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Orlando Ferreira da Costa</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Virgílio A. M. Centurion Doldan</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1968 - 1969</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>João Amaro Ferrari Silva</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>

                                        <td>José Luiz de Almeida Mendonça de    Barros</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Miguel Morales Barroso</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Oswaldo Cruz Conti</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1967 - 1968</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Eduardo Arrue</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Claudio Roque Buono Ferreira</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>José Waldo de Carvalho</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Jorge Prado Honsi Junior</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1966 - 1967</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>José Neddermeyer Belfort Mattos</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Wander Agmont Silva</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>João Antonio Prata</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1965 - 1966</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Fábio Gilson Cavalca Pinto</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ivo Sidney Bonini</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Paulo Orlando Bragaglia</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1964 - 1965</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ricardo Uras</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody></table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- fim -->

            </div><!-- // Tab Residentes -->

            <!-- Tab R3 -->
            <div class="tab-pane fade" id="pills-r3" role="tabpanel" aria-labelledby="pills-r3-tab">

                <div class="cmsmasters_toggles toggles_mode_accordion">

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2003</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <tr>
                                    <td>	147	</td>
                                    <td>	Cecília Tobias de Aguiar Moeller	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	148	</td>
                                    <td>	Christian Andres Yoshiyama Sasaki	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	149	</td>
                                    <td>	Edenilson dos Santos Carvalho Junior	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	150	</td>
                                    <td>	Fabio Bom Aggio	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	151	</td>
                                    <td>	Guilherme Mourão Soares da Rocha	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	152	</td>
                                    <td>	Henrique Marini Ferreira	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	153	</td>
                                    <td>	Juliana Marques de Souza Lagrasta	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	154	</td>
                                    <td>	Larissa Almeida Andrade	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	155	</td>
                                    <td>	Larissa Magusso 	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	156	</td>
                                    <td>	Licia Cristina Vago Matielli	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	157	</td>
                                    <td>	Lilian Emi Ohkawara	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	158	</td>
                                    <td>	Marilia Cavalcante Araújo	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	159	</td>
                                    <td>	Milena Atique	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	160	</td>
                                    <td>	Norimar Pinto de Oliveira	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	161	</td>
                                    <td>	Rodrigo Antonio Brant Fernandes	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	162	</td>
                                    <td>	Sergio Henrique Teixeira	</td>
                                    <td>	Unifesp	</td>
                                    </tr>


                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2002</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <tr>
                                    <td>	131	</td>
                                    <td>	Alexandre Hasler Príncipe de Oliveira	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	132	</td>
                                    <td>	Ana Carolina Luzardo Morales	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	133	</td>
                                    <td>	Carlos Eduardo Borges Souza	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	134	</td>
                                    <td>	Dalton de Freitas Santoro	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	135	</td>
                                    <td>	Daniel Moon Lee	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	136	</td>
                                    <td>	Ednajar Tavares Macedo Filho	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	137	</td>
                                    <td>	Hélio Utida	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	138	</td>
                                    <td>	Lea Cinthia Formigoni	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	139	</td>
                                    <td>	Luciana Scapucin	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	140	</td>
                                    <td>	Margara Zanotele Hemerly de Almeida	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	141	</td>
                                    <td>	Mirna Yae Yassuda	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	142	</td>
                                    <td>	Solange Higashitani	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	143	</td>
                                    <td>	Rodrigo Cortes Arce	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	144	</td>
                                    <td>	Rogério Silva Sacramento	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	145	</td>
                                    <td>	Vinicius da Silveira Saraiva	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	146	</td>
                                    <td>	Yeh Shu I	</td>
                                    <td>	Unifesp	</td>
                                    </tr>



                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2001</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                    <td>	116	</td>
                                    <td>	Adriano Biondi Monteiro Carneiro	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	117	</td>
                                    <td>	Alvio Isao Shiguematsu	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	118	</td>
                                    <td>	Anna Carholina Goes Lourenço	</td>
                                    <td>	USP	</td>
                                    </tr>
                                    <tr>
                                    <td>	119	</td>
                                    <td>	Caroline Amaral Ferraz	</td>
                                    <td>	Universidade Federal do Paraná	</td>
                                    </tr>
                                    <tr>
                                    <td>	120	</td>
                                    <td>	Eliane Mayumi Nakano	</td>
                                    <td>	Unicamp	</td>
                                    </tr>
                                    <tr>
                                    <td>	121	</td>
                                    <td>	Erika Sayuri Yasaki	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	122	</td>
                                    <td>	Fabiano Bojikian Ciola	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	123	</td>
                                    <td>	Gustavo Teixeira Grotone	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	124	</td>
                                    <td>	João Paulo de Noronha Duprat Cardoso	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	125	</td>
                                    <td>	Luiz Fernando Teixeira	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	126	</td>
                                    <td>	Marcio Lemberg Reisner	</td>
                                    <td>	Desistente	</td>
                                    </tr>
                                    <tr>
                                    <td>	127	</td>
                                    <td>	Octaviano Magalhães Junior	</td>
                                    <td>	Universidade Federal do Rio de Janeiro	</td>
                                    </tr>
                                    <tr>
                                    <td>	128	</td>
                                    <td>	Paulo Augusto de Arruda Mello Filho	</td>
                                    <td>	Faculdade de Medicina do ABC	</td>
                                    </tr>
                                    <tr>
                                    <td>	129	</td>
                                    <td>	Rodrigo Carvalhosa Ramos	</td>
                                    <td>	Desistente	</td>
                                    </tr>
                                    <tr>
                                    <td>	130	</td>
                                    <td>	Somaia Mitne	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2000</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                    <td>	104	</td>
                                    <td>	Eileen Beatriz Mejia Diazgranados	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	105	</td>
                                    <td>	Fábio Henrique Cacho Casanova	</td>
                                    <td>	Universidade Federal do Pernambuco	</td>
                                    </tr>
                                    <tr>
                                    <td>	106	</td>
                                    <td>	Flávio Eduardo Hirai	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	107	</td>
                                    <td>	Francisco Porfírio Neto Junior	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	108	</td>
                                    <td>	Federico Valadares de souza Pena	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	109	</td>
                                    <td>	Isabela Savassi Guimarães	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	110	</td>
                                    <td>	Larissa Pedroso	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	111	</td>
                                    <td>	Liang Shih Jung	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	112	</td>
                                    <td>	Luiz Alberto Soares de Melo Junior	</td>
                                    <td>	Universidade Federal do Pernambuco	</td>
                                    </tr>
                                    <tr>
                                    <td>	113	</td>
                                    <td>	Luiz Felipe Hagemann	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	114	</td>
                                    <td>	Nichard Unonius	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	115	</td>
                                    <td>	Roberto Roizenblatt	</td>
                                    <td>	USP	</td>
                                    </tr>
                                    <tr>
                                    <td>	163	</td>
                                    <td>	Rodrigo Luz Meirelles	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	164	</td>
                                    <td>	Sung Eun Song	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	165	</td>
                                    <td>	Wania Regattieri de Biase da Silva	</td>
                                    <td>	Unifesp	</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1999</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <tr>
                                    <td>	91	</td>
                                    <td>	Adriana Maria Rodrigues	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	92	</td>
                                    <td>	André Luiz Parolin Ribeiro	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	93	</td>
                                    <td>	Bruno Castelo Branco	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	94	</td>
                                    <td>	Ciro Massayuki Komagome	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	95	</td>
                                    <td>	Daniel Keizo de Medeiros Karaguchi	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	96	</td>
                                    <td>	Elizabeth M. R. Nogueira Martins	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	97	</td>
                                    <td>	Lenio Souza Alvarenga	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	98	</td>
                                    <td>	Luciana da Cruz Noia	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	99	</td>
                                    <td>	Maria Regina Catai Chalita	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	100	</td>
                                    <td>	Patrícia Bezerra de Menezes Botelho	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	101	</td>
                                    <td>	Roberto Paione Gasparini	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	102	</td>
                                    <td>	Rogério Alves Costa	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	103	</td>
                                    <td>	Suy Anne Rebouças Martins	</td>
                                    <td>		</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1998</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <!--  -->
                                    <tr>
                                    <td>	80	</td>
                                    <td>	Ana Helena Garcia de Araújo	</td>
                                    <td>	Universidade Federal do Rio Grande do Norte	</td>
                                    </tr>
                                    <tr>
                                    <td>	81	</td>
                                    <td>	Ana Karina Coelho Albuquerque	</td>
                                    <td>	Universidade Federal de Goiás	</td>
                                    </tr>
                                    <tr>
                                    <td>	82	</td>
                                    <td>	Cinthia Chiemi Kariya	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	83	</td>
                                    <td>	Danielle Boni	</td>
                                    <td>	Universidade Federal do Espírito Santo	</td>
                                    </tr>
                                    <tr>
                                    <td>	84	</td>
                                    <td>	Eduardo Ferrari Marback	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	85	</td>
                                    <td>	Luciana Peixoto dos Santos	</td>
                                    <td>	Universidade Federla de Uberlândia	</td>
                                    </tr>
                                    <tr>
                                    <td>	86	</td>
                                    <td>	Maria Angélica M. Pavão	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	87	</td>
                                    <td>	Maria do Carmo Pinheiro	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	88	</td>
                                    <td>	Patricia Maria Fernandes Marback	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	89	</td>
                                    <td>	Sérgio Costa Fantini	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                    <tr>
                                    <td>	90	</td>
                                    <td>	Silvia Takanohashi	</td>
                                    <td>	Unifesp	</td>
                                    </tr>
                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1997</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <!--  -->

                                    <tr>
                                    <td>	71	</td>
                                    <td>	André Barbosa Castelo Branco	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	72	</td>
                                    <td>	Leda Maria Alexandre Barreira	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	73	</td>
                                    <td>	Larisa Fabiani	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	74	</td>
                                    <td>	Lauro José Barata	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	75	</td>
                                    <td>	Luciana Soares Cianciarullo	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	76	</td>
                                    <td>	Luis Tibiriça Aguilar	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	77	</td>
                                    <td>	Marcelo Intrator Dimantas	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	78	</td>
                                    <td>	Maria Helena Mandello Carvalhaes	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	79	</td>
                                    <td>	Renato Segarra Arca	</td>
                                    <td>		</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1996</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <tr>
                                    <td>	59	</td>
                                    <td>	André Correia Maia de Carvalho	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	60	</td>
                                    <td>	Cesar Kenji Suzuki	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	61	</td>
                                    <td>	Daniel Eduardo Socatelli Gasparian	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	62	</td>
                                    <td>	Esper Escobar Saud	</td>
                                    <td>	Universidade Federal Fluminense	</td>
                                    </tr>
                                    <tr>
                                    <td>	63	</td>
                                    <td>	Isabela Maria Isolde de Morais	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	64	</td>
                                    <td>	Luciane Benitez Provenzano	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	65	</td>
                                    <td>	Luiz Henrique Schurig Fernandez	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	66	</td>
                                    <td>	Norton Fernandes de  Lima	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	67	</td>
                                    <td>	Paulo Roberto Kozar	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	69	</td>
                                    <td>	Ricardo Guerra Peixe	</td>
                                    <td>		</td>
                                    </tr>
                                    <tr>
                                    <td>	68	</td>
                                    <td>	Ricardo Takahashi	</td>
                                    <td>	EPM	</td>
                                    </tr>
                                    <tr>
                                    <td>	70	</td>
                                    <td>	Ruth Alice Rosenhek Schor	</td>
                                    <td>	USP	</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1995</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>

                                    <!--  -->
                                    <tr>
                                    <td>47</td>
                                    <td>Christiane Regina Rolim de Moura</td>
                                    <td>Christiane Regina Rolim de Moura</td>
                                    </tr>

                                    <tr>
                                    <td>48</td>
                                    <td>Diego Garces Vasquez</td>
                                    <td>Universidade Central do Equador</td>
                                    </tr>

                                    <tr>
                                    <td>49</td>
                                    <td>Eduardo Sone Soriano</td>
                                    <td>EPM	</td>
                                    </tr>

                                    <tr>
                                    <td>50</td>
                                    <td>Greicie C. Guerra Attie</td>
                                    <td>EPM</td>
                                    </tr>

                                    <tr>
                                    <td>51</td>
                                    <td>Jorge Manoel de Almeida Ferreira</td>
                                    <td>EPM</td>
                                    </tr>

                                    <tr>
                                    <td>52</td>
                                    <td>Luciano de Oliveira Montenegro</td>
                                    <td>Universidade Federal do Espírito Santo</td>
                                    </tr>

                                    <tr>
                                    <td>53</td>
                                    <td>Marcelo Mendonça do Nascimento</td>
                                    <td>USP</td>
                                    </tr>
                                    <tr>
                                    <td>54</td>
                                    <td>Marcia Cortes de Campos</td>
                                    <td>EPM</td>
                                    </tr>
                                    <tr>
                                    <td>55</td>
                                    <td>Maria Elizabeth Di Giovanni</td>
                                    <td>Universidade Federal de Curitiba</td>
                                    </tr>
                                    <tr>
                                    <td>56</td>
                                    <td>Nestor Daniel Sanchez Di Martini</td>
                                    <td>Universidade Nacional de Assunção</td>
                                    </tr>
                                    <tr>
                                    <td>57</td>
                                    <td>Paulo Pukenis Tubelis</td>
                                    <td>EPM</td>
                                    </tr>
                                    <tr>
                                    <td>58	</td>
                                    <td>Wladimir Eduardo Kawagoe</td>
                                    <td>	</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1994</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Adriano Bertoni Frasson</td>
                                        <td>Faculdade de Medicina da Universidade de Passo Fundo - RS</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Ana Claudia dos Santos Alves</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Celso Boianovsky</td>
                                        <td>Universidade de Brasília</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Cristina Maria B. Garrido</td>
                                        <td>Universidade Federal do Amazonas</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Danielle Britto M. Silva</td>
                                        <td>Universidade Federal da Bahia</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>Helena Mieko Tanaka</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>42</td>
                                        <td>Marcia regina Kimie Higashi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>43</td>
                                        <td>Maria Carmem Menezes Santos</td>
                                        <td>Universidade Federal da Bahia</td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td>Pablo Fernando larco Recalde</td>
                                        <td>Faculdade de Medicina Central do Equador</td>
                                    </tr>
                                    <tr>
                                        <td>45</td>
                                        <td>Paulo Dantas Rodrigues</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>46</td>
                                        <td>Soraya Moura Machado Fabris</td>
                                        <td>Universidade Federal do Espírito Santo</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1993</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Mário José Carvalho</td>
                                        <td>Universidade Federal de Uberlândia</td>
                                    </tr>

                                    <tr>
                                        <td>27</td>
                                        <td>Juliana Maria Ferraz</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Ângela ramso Chaib</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Jorge Augusto Arrue Karica</td>
                                        <td>Universidade Atônoma de Centro América</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Andréa Vasconcelos</td>
                                        <td>Faculdade de Medicina de Marília</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Aurélio Paulo B. da Silva</td>
                                        <td>Faculdade de Medicina de Marília</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Carlos Henrique T. Magalhães</td>
                                        <td>Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Eduardo Marcelo M. Andrade</td>
                                        <td>Faculdade de Medicina de Marília</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Mônica Fialho Cronemberger</td>
                                        <td>Faculdade de Medicina do ABC</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Paulo Henrique D'Avilla Morales</td>
                                        <td>Faculdade de Medicina de Jundiaí / Porto Rico</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1992</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Guilherme Luiz Bortoletto</td>
                                        <td>EPM</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Walner Daros dos Santos</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Ana Góes Neiva</td>
                                        <td>Escola de Medicina e Saúde Pública - Bahia</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Claudio Katsuiti Yajima</td>
                                        <td>USP</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>João Paulo Sartori</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Marcelo Hugo Larco Recalde</td>
                                        <td>Faculdade de Medicina da Universidade Central do Equador</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Plínio José Schuchovski</td>
                                        <td>Desistente</td>
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td>Rita Cristina Mainieri Ramos de Moura</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td>24</td>
                                        <td>Rosane da Cruz Ferreira</td>
                                        <td>Faculdade de Medicina da Universidade Federal Rio Grande do Sul</td>
                                    </tr>

                                    <tr>
                                        <td>25</td>
                                        <td>Won Sik Chae</td>
                                        <td>EPM</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1991</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Sônia Maria Salgado Gigliotti</td>
                                        <td>EPM</td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Eliane Galassi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Liliana Mayumi Shintome</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Ronaldo Furlan</td>
                                        <td>Fundação Municipal de Ensino Superior Marília - Faculdade de Medicina</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Carlos Francisco Malsch Steeger</td>
                                        <td>Universidade do Chile</td>
                                    </tr>


                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1990</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>143</td>
                                        <td>Roberto Pereira Lima Junior</td>
                                        <td>EPM</td>
                                    </tr>

                                    <tr>
                                        <td>152</td>
                                        <td>Seiji Hayashi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>147</td>
                                        <td>Luciene Barbosa de Sousa</td>
                                        <td>Universidade Federal de Goiás</td>
                                    </tr>


                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1989</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Arnaldo Bordon Junior</td>
                                        <td>EPM</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Lourdes Aiko Hayasi</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Norma Allemann</td>
                                        <td>EPM</td>
                                    </tr>


                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1986 - 1988</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table ccellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody1988r>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>José Eduardo Prata Cançado</td>
                                        <td>EPM</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Márcia Beatriz Tartarella</td>
                                        <td>EPM</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mauro Silveira de Quieiroz Campos</td>
                                        <td>EPM</td>
                                    </tr>


                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 1987</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <th>Residente</th>
                                        <th>Nome</th>
                                        <th>Instituição</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Claudio Luiz Lottemberg</td>
                                        <td>EPM</td>
                                    </tr>
                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- fim -->

            </div><!-- // Tab R3 -->

            <!-- // Tab R4 -->
            <div class="tab-pane fade" id="pills-r4" role="tabpanel" aria-labelledby="pills-r4-tab">

                <div class="cmsmasters_toggles toggles_mode_accordion">

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2025 - 2026</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                    <td>Beatriz Cavalcante Moita </td>
                                    </tr>
                                    <tr>
                                    <td>Chan Song Moon </td>
                                    </tr>
                                    <tr>
                                    <td>Livia de Moura Alvares </td>
                                    </tr>
                                    <tr>
                                    <td>Livia Sandis Barbosa </td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2024 - 2025</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                    <td>Bernardo Ferreira Rodrigues Caldas</td>
                                    </tr>
                                    <tr>
                                    <td>Carolina Ferreira Huang</td>
                                    </tr>
                                    <tr>
                                    <td>Mariana Xavier Araujo De Oliveira</td>
                                    </tr>
                                    <tr>
                                    <td>Vitor Dias Gomes Barrios Marin</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2023 - 2024</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                    <td>Aileen Miwa Tabuse</td>
                                    </tr>
                                    <tr>
                                    <td>Chiara Luana Reinert Da Silva</td>
                                    </tr>
                                    <tr>
                                    <td>Klaus Anton Tyrrasch</td>
                                    </tr>
                                    <tr>
                                    <td>Mirella Millena Carmo De Andrade</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2022 - 2023</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                    <td>Italo Pena de Oliveira</td>
                                    </tr>
                                    <tr>
                                    <td>Raquel de Oliveira Peluso</td>
                                    </tr>
                                    <tr>
                                    <td>Renata Leonel Freire Mendes</td>
                                    </tr>
                                    <tr>
                                    <td>Victória Sakamoto</td>
                                    </tr>

                                </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2021 - 2022</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                <tbody><tr>
                                    <td>Andressa Castelo Branco Araújo Bernal Franco</td>
                                </tr>
                                <tr>
                                    <td>Camila Kase</td>
                                </tr>
                                <tr>
                                    <td>José Arthur Pinto Milhomens Filho</td>
                                </tr>
                                <tr>
                                    <td>Ludmila Nascimento Pinto Silva</td>
                                </tr>

                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2021 - 2022</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                <tbody><tr>
                                    <td>Lucas Baldissera Tochetto</td>
                                </tr>
                                <tr>
                                    <td>Polliana Alvarenga Rodrigues</td>
                                </tr>
                                <tr>
                                    <td>Rafael Jorge Alves De Alcântara</td>
                                </tr>
                                <tr>
                                    <td>Yasmin Tournier Boppré</td>
                                </tr>

                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2019 - 2020</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>José Aparecido Job Neto</td>
                                    </tr>
                                    <tr>
                                        <td>Raysa Victoria de Oliveira Cechim</td>
                                    </tr>
                                    <tr>
                                        <td>Renata Macedo Nabuco Faro</td>
                                    </tr>
                                    <tr>
                                        <td>Vanessa Favero Demeda</td>
                                    </tr>


                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2018 - 2019</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                <tbody><tr>
                                        <td>Camila Maia Valente</td>
                                    </tr>
                                    <tr>
                                        <td>Gustavo Gasparetto Bittar</td>
                                    </tr>
                                    <tr>
                                        <td>Renata Cavalcanti Portela</td>
                                    </tr>
                                    <tr>
                                        <td>Julia Brandão De Paiva Teixeira Custodio</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2017 - 2018</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Elimar Mayara De Almeida Menegotto</td>
                                    </tr>
                                    <tr>
                                        <td>Luciana Lopes Rocha</td>
                                    </tr>
                                    <tr>
                                        <td>Marcella Boaventura E Carvalho</td>
                                    </tr>
                                    <tr>
                                        <td>Matheus Porto Sticca</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2016 - 2017</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Cristina Cagliari</td>
                                    </tr>
                                    <tr>
                                        <td>Fernanda Machado Bezerra</td>
                                    </tr>
                                    <tr>
                                        <td>Isa Maria Bastos Mendes Silva</td>
                                    </tr>

                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2015 - 2016</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Albert Wilson Santos Machado Silva</td>
                                    </tr>
                                    <tr>
                                        <td>Eduardo Gayger Muller</td>
                                    </tr>
                                    <tr>
                                        <td>Iana Fernandes Lavigne</td>
                                    </tr>
                                    <tr>
                                        <td>Mauro Sergio De Oliveira Silva</td>
                                    </tr>
                                    <tr>
                                        <td>Natalia Silva De Mesquita</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2014 - 2015</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                    <td>Alexandre Xavier da Costa</td>
                                    </tr>
                                    <tr>
                                    <td>Marília Ikeda Serizawa</td>
                                    </tr>
                                    <tr>
                                    <td>Thiago Gonçalves dos Santos Martins</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2013 - 2014</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Ana Gabriella Coelho de Magalhães Queiroz</td>
                                    </tr>
                                    <tr>
                                        <td>Danielle Arroyo</td>
                                    </tr>
                                    <tr>
                                        <td>Marcio Wajngarten</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2012 - 2013</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Nayana Macedo Andrade Rios</td>
                                    </tr>
                                    <tr>
                                        <td>Rodrigo Teixeira Santos</td>
                                    </tr>
                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2011 - 2012</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Cristina Cardoso Coimbra</td>
                                    </tr>
                                    <tr>
                                        <td>Cybelle Moreno Luize</td>
                                    </tr>
                                    <tr>
                                        <td>Grazielly Martins Peitoxo</td>
                                    </tr>
                                    <tr>
                                        <td>Juliana Ferreira Camargo</td>
                                    </tr>
                                    <tr>
                                        <td>Lucas Monferrari Monteiro Vianna</td>
                                    </tr>

                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">2010 - 2011</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                        <td>Beatriz Machado Fontes</td>
                                    </tr>
                                    <tr>
                                        <td>Fernanda Castro de Oliveira</td>
                                    </tr>
                                    <tr>
                                        <td>Fernanda Pedreira Magalhães </td>
                                    </tr>
                                    <tr>
                                        <td>Lelise Glaucia C. Reis Borges</td>
                                    </tr>
                                    <tr>
                                        <td>Victor Simoceli Paes</td>
                                    </tr>

                                </tbody></table>

                            </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- fim -->

            </div> <!-- // Tab R4 -->

            <!-- ABA R4 – ANO OPCIONAL OFTALMOLOGIA (SUBESPECIALIDADES) -->
            <div class="tab-pane fade" id="pills-r4-oftalmo" role="tabpanel" aria-labelledby="pills-r4-oftalmo-tab">
                <div class="cmsmasters_toggles toggles_mode_accordion">

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2025 - 2026</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                        <tbody>
                                            <tr>
                                                <td>Amanda Thum Welter </td>
                                            </tr>
                                            <tr>
                                                <td>Iago Diógenes Azevedo Costa </td>
                                            </tr>
                                            <tr>
                                                <td>João Gabriel Alexander </td>
                                            </tr>
                                            <tr>
                                                <td>Lucas Henrique Pereira </td>
                                            </tr>
                                            <tr>
                                                <td> Mariana Mello G. Rodrigues  </td>
                                            </tr>
                                            <tr>
                                                <td>Maurício Pessôa Lima Filho </td>
                                            </tr>
                                            <tr>
                                                <td>Pedro de Faria Gusmão </td>
                                            </tr>
                                            <tr>
                                                <td> Pedro Leite Costa Franco </td>
                                            </tr>
                                            <tr>
                                                <td>Rafael Martins Queiroz Barbosa </td>
                                            </tr>
                                            <tr>
                                                <td>Rafael Torres dos Santos </td>
                                            </tr>
                                            <tr>
                                                <td>Tulio Ruiz Eschiapati </td>
                                            </tr>
                                            <tr>
                                                <td> Ugor Tomaz Fernandes </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2024 - 2025</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                        <tbody>
                                            <tr>
                                                <td>Fernando Max Alves Ferreira</td>
                                            </tr>
                                            <tr>
                                                <td>Flávio De Ávila Fowler</td>
                                            </tr>
                                            <tr>
                                                <td>Frederico Do Carmo Novaes</td>
                                            </tr>
                                            <tr>
                                                <td>Glauco Sérgio Avelino De Aquino</td>
                                            </tr>
                                            <tr>
                                                <td>Guilherme Niciunovas</td>
                                            </tr>
                                            <tr>
                                                <td>João Victor Borges Gomes</td>
                                            </tr>
                                            <tr>
                                                <td>Joao Victor Fernandes Fabricio</td>
                                            </tr>
                                            <tr>
                                                <td>Jose Rodolfo Mariani Radaeli</td>
                                            </tr>
                                            <tr>
                                                <td>Maria Gabriela Dourado De Melo Gusmão</td>
                                            </tr>
                                            <tr>
                                                <td>Pedro Fernandes Souza Neto</td>
                                            </tr>
                                            <tr>
                                                <td>Vinicius Oliveira Pesquero</td>
                                            </tr>
                                            <tr>
                                                <td>Victor Cavalcante Muricy</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cmsmasters_toggle_wrap" data-tags="all ">
                        <div class="cmsmasters_toggle_title">
                            <span class="cmsmasters_toggle_plus">
                                <span class="cmsmasters_toggle_plus_hor"></span>
                                <span class="cmsmasters_toggle_plus_vert"></span>
                            </span>
                            <a href="#" class="fw-bold">Período 2023 - 2024</a>
                        </div>
                        <div class="cmsmasters_toggle" style="display: none;">
                            <div class="cmsmasters_toggle_inner">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                        <tbody>
                                            <tr>
                                                <td>Ana Valéria e Vasconcelos França Cortez</td>
                                            </tr>
                                            <tr>
                                                <td>Clístenes Stênio Lima De Medeiros</td>
                                            </tr>
                                            <tr>
                                                <td>Guilherme Macedo Souza</td>
                                            </tr>
                                            <tr>
                                                <td>Isabella Loiola Araujo Martins</td>
                                            </tr>
                                            <tr>
                                                <td>Juan Fulgencio Welko Mendoza</td>
                                            </tr>
                                            <tr>
                                                <td>Leonardo Yuji Arai Inoue</td>
                                            </tr>
                                            <tr>
                                                <td>Mariana Araujo Dias</td>
                                            </tr>
                                            <tr>
                                                <td>Marina Moura Costa Spínola</td>
                                            </tr>
                                            <tr>
                                                <td>Samuel Zuccaro Wajsman</td>
                                            </tr>
                                            <tr>
                                                <td>Talita Virginia Fernandes De Oliveira</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- // ABA R4 – ANO OPCIONAL OFTALMOLOGIA (SUBESPECIALIDADES) -->


            <!-- Tab PRECEPTORES -->
            <div class="tab-pane fade" id="pills-administrativo" role="tabpanel" aria-labelledby="pills-administrativo-tab">
                <div class="table-responsive">
                    <table>
                    <tbody>
                        <tr>
                            <td style="text-align: center;" width="48"><strong>ANO</strong></td>
                            <td style="text-align: center;" colspan="2" width="452"><strong>PRECEPTOR (ES)</strong></td>
                        </tr>
                        <tr>
                            <td>2025</td>
                            <td>João Victor Borges Gomes </td>
                            <td>Vitor Dias Gomes Barrios Marin</td>
                        </tr>
                        <tr>
                            <td>2024</td>
                            <td>Guilherme Macedo </td>
                            <td>Victória Sakamoto</td>
                        </tr>
                        <tr>
                            <td>2023</td>
                            <td>Gustavo Albrecht Samico</td>
                            <td>Victória Sakamoto</td>
                        </tr>
                        <tr>
                            <td>2022</td>
                            <td>Guilherme Havir Bufarah</td>
                            <td>Gustavo Albrecht Samico</td>
                        </tr>
                        <tr>
                            <td>2021</td>
                            <td>Ana Carolina Yumi Itikawa</td>
                            <td>Gabriel Ferrante Abou Murad</td>
                        </tr>
                        <tr>
                            <td>2020</td>
                            <td>Dante Akira Kondo Kuroiwa</td>
                            <td>Jenifer Shen Ay Wu</td>
                        </tr>
                        <tr>
                            <td>2019</td>
                            <td>Bruno Mauricio Rodrigues de Oliveira</td>
                            <td>Elaine Regina Sato Watanabe</td>
                        </tr>
                        <tr>
                            <td>2018</td>
                            <td>Verônica Haysa Yamada</td>
                            <td>Vinicius Campos Bergamo</td>
                        </tr>
                        <tr>
                            <td>2017</td>
                            <td>Mariana Pissante Wisneski</td>
                            <td>Fábio Kenji Matsumoto</td>
                        </tr>
                        <tr>
                            <td>2016</td>
                            <td>Cristiane Okazaki</td>
                            <td>Rafael Freire Kobayashi</td>
                        </tr>
                        <tr>
                            <td>2015</td>
                            <td>Diego Monteiro Verginassi</td>
                            <td>Roberta Andrade e Nascimento</td>
                        </tr>
                        <tr>
                            <td>2014</td>
                            <td>Paula de Campos Prudente Silva</td>
                            <td>Huber Martins Vasconcelos Júnior</td>
                        </tr>
                        <tr>
                            <td>2013</td>
                            <td>Luiz Guilherme Pimentel</td>
                            <td>Moacyr Amaral Campos</td>
                        </tr>
                        <tr>
                            <td>2012</td>
                            <td>Carolina Pelegrini Barbosa</td>
                            <td>Pedro Vanalle Ferrari</td>
                        </tr>
                        <tr>
                            <td>2011</td>
                            <td>Juliana Ferreira Camargo</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2010</td>
                            <td>Daniel Meira Freitas</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2009</td>
                            <td>Caio Vinicius Saito Regatieri</td>
                            <td>Gustavo Barreto de Melo</td>
                        </tr>
                        <tr>
                            <td>2008</td>
                            <td>Caio Vinicius Saito Regatieri</td>
                            <td>Gustavo Barreto de Melo</td>
                        </tr>
                        <tr>
                            <td>2007</td>
                            <td>Angelino Júlio Cariello</td>
                            <td>Tiago dos Santos Prata</td>
                        </tr>
                        <tr>
                            <td>2006</td>
                            <td>Angelino Júlio Cariello</td>
                            <td>Tiago dos Santos Prata</td>
                        </tr>
                        <tr>
                            <td>2005</td>
                            <td>Sérgio Henrique Teixeira</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2004</td>
                            <td>Sérgio Henrique Teixeira</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2003</td>
                            <td>Fabiano Bojikian Ciola</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2002</td>
                            <td>Luiz Alberto Soares de Melo Junior</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2001</td>
                            <td>Núbia Cristina de Freitas Maia</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2000</td>
                            <td>Núbia Cristina de Freitas Maia</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1999</td>
                            <td>Núbia Cristina de Freitas Maia</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1998</td>
                            <td>Eduardo Sone Soriano</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1997</td>
                            <td>Marcelo Intrator Dimantas</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <!-- Tab Didáticos -->
            <div class="tab-pane fade" id="pills-didaticos" role="tabpanel" aria-labelledby="pills-didaticos-tab">
                <p>Em breve...</p>
            </div>

            <!-- Tab Supervisores -->
            <div class="tab-pane fade" id="pills-supervisores" role="tabpanel" aria-labelledby="pills-supervisores-tab">
                <div class="row gy-4">

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="p-3 shadow h-100">

                            <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
                                <?php echo wp_get_attachment_image( get_field('item_perfil', 14681)['foto_de_perfil'], 'full', "", ["class" => "img-fluid w-100"]); ?>
                            </figure>

                            <div>
                                <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?= get_field('item_perfil', 14681)['prefixo'] .' '. get_the_title(14681); ?></p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">Núcleo de Oncologia Ocular Pediátrica</p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">2021 até atual.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="p-3 shadow h-100">

                            <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
                                <?php echo wp_get_attachment_image( get_field('item_perfil', 14481)['foto_de_perfil'], 'full', "", ["class" => "img-fluid w-100"]); ?>
                            </figure>

                            <div>
                                <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?= get_field('item_perfil', 14481)['prefixo'] .' '. get_the_title(14481); ?></p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;"><?= get_field('item_perfil', 14481)['diretoria']; ?></p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">Maio de 2017 à Julho de 2021.</p>
                            </div>

                            <div class="justify-content-center row gx-2 my-3">

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14481)['lattes']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14481)['publoons']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14453, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14481)['orcid']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14451, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14481)['linkedin']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14455, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14481)['google_academy']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14452, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="p-3 shadow h-100">

                            <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
                                <?php echo wp_get_attachment_image( get_field('item_perfil', 14536)['foto_de_perfil'], 'full', "", ["class" => "img-fluid w-100"]); ?>
                            </figure>

                            <div>
                                <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?= get_field('item_perfil', 14536)['prefixo'] .' '. get_the_title(14536); ?></p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">2011 a 2016</p>
                            </div>

                            <div class="justify-content-center row gx-2 my-3">

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14536)['lattes']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="p-3 shadow h-100">

                            <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
                                <?php echo wp_get_attachment_image( get_field('item_perfil', 14581)['foto_de_perfil'], 'full', "", ["class" => "img-fluid w-100"]); ?>
                            </figure>

                            <div>
                                <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?= get_field('item_perfil', 14581)['prefixo'] .' '. get_the_title(14581); ?></p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">2009 a 2010</p>
                            </div>

                            <div class="justify-content-center row gx-2 my-3">

                                <div class="col-auto">
                                    <a href="<?= get_field('item_perfil', 14581)['lattes']; ?>" target="_blank">
                                        <?= wp_get_attachment_image( 14454, 'medium', "", ["class" => "img-fluid", "style" => "max-width: 18px"]); ?>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="p-3 shadow h-100">

                            <figure class="mb-2 mx-auto overflow-hidden rounded-circle" style="width: 150px;height: 150px;">
                                <?php echo wp_get_attachment_image( get_field('item_perfil', 14868)['foto_de_perfil'], 'full', "", ["class" => "img-fluid w-100"]); ?>
                            </figure>

                            <div>
                                <p class="fs-6 fw-bold mb-2 pb-0 text-center"><?= get_field('item_perfil', 14868)['prefixo'] .' '. get_the_title(14868); ?></p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">1997 a 2008</p>
                                <p class="mb-2 pb-0 text-center" style="font-size: 14px;">Chefe do Departamento: 1964 a 1996</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Tab Paeto -->
            <div class="tab-pane fade" id="pills-paeto" role="tabpanel" aria-labelledby="pills-paeto-tab">

                <p>O Programa Avançado de Ensino Teórico da Oftalmologia são as aulas que fazem parte da grade das atividades obrigatórias da Residência Médica do Departamento de Oftalmologia. A cada período estipulado pelos preceptores, um setor é convocado para ministrar aulas com temas atuais.</p>

                <a class="my-4 d-inline-block" href="https://docs.google.com/spreadsheets/d/1Rp5mQ8aLYtwgHuYMx56T7Zx8Jpm-5iSt/edit?usp=sharing&ouid=118413229881722648036&rtpof=true&sd=true" target="_blank">Download do Programa</a>

                <p><strong>Dr. Luiz Fernando Teixeira</strong></p>
                <p>Coordenador da Residência Médica</p>

                <p class="mt-4"><strong>DR. GUILHERME HAVIR BUFARAH</strong></p>
                <p><strong>DR. GUSTAVO ALBRECHT SAMICO</strong></p>
                <p>Preceptores da Residência</p>

            </div>

            <!-- Tab Link -->
            <div class="tab-pane fade" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab">
                <div class="entry-content-post">
                    <p><strong>Links</strong></p>
                    <ul>
                        <li><a href="http://www.cbo.net.br/novo/classe-medica/" target="_blank" rel="noopener noreferrer">Conselho Brasileiro de Oftalmologia – CBO</a></li>
                        <li><a href="https://www.unifesp.br/campus/sao/coreme/80-eventos-e-cursos" target="_blank" rel="noopener noreferrer">Comissão de Residência Médica – COREME</a></li>
                        <li><a href="http://portal.mec.gov.br/residencias-em-saude/residencia-medica" target="_blank" rel="noopener noreferrer">Comissão Nacional de Residência Médica – CNRM</a></li>
                        <li><a href="http://www.icoph.org/refocusing_education.html" target="_blank" rel="noopener noreferrer">International Council of Ophthalmology – ICO</a></li>
                        <li><a href="https://www.aao.org/clinical-education" target="_blank" rel="noopener noreferrer">American Academy of Ophthalmology – AAO</a></li>
                        <li><a href="<?php the_permalink(14233); ?>" rel="noopener">Curso de Ciências Básicas e Clínicas em Oftalmologia</a></li>
                        <li><a href="https://coreme.unifesp.br/informacoes-gerais/medico-com-diploma-do-exterior" target="_blank" rel="noopener noreferrer">Médicos Formados Exterior</a></li>
                        <li><a href="https://www.cremesp.org.br/?siteAcao=ServicosMedicos&amp;id=84" target="_blank" rel="noopener noreferrer">Licença Temporária Estudantes Formados no Exterior – CREMESP</a></li>
                    </ul>
                    <p><strong>Código de Ética Médica e Cartilha Assédio Moral</strong></p>
                    <ul>
                        <li><a href="<?php echo wp_get_attachment_url(14151); ?>" target="_blank" rel="noopener noreferrer">Cartilha Assedio Moral CREMESP</a></li>
                        <li><a href="<?php echo wp_get_attachment_url(14146); ?>" target="_blank" rel="noopener noreferrer">Código de Ética Médica – Resolução CFM n.º 2.217/2018</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <figure class="mb-5">
            <?php echo wp_get_attachment_image(15949, 'full', "", ["class" => "img-fluid w-100"]); ?>
        </figure>
        <figure>
            <?php echo wp_get_attachment_image(15951, 'full', "", ["class" => "img-fluid w-100"]); ?>
        </figure>
    </div>

</section>

<?php
get_footer(); ?>
