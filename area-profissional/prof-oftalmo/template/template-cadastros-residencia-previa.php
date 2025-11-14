<?php
/*
    Template Name: Lista de cadastros do residência médica prévia

*/

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ÁREA APENAS PARA DESLOGADOS
include(dirname(__FILE__)."/../form_action/connection.php");
// include(dirname(__FILE__)."/../form_action/util/only_logged.php");
//
// include('../util/funcoes_uteis.php');
// include('../util/cript.php');

get_header();

if(isset($_GET['cod']) && $_GET['cod'] == 'AsNGyOgrJg'){ // https://oftalmodapaulista.com.br/profissional/wp-content/themes/prof-oftalmo/form_action/residencia-medica/planilha.php?cod=AsNGyOgrJg
  // ok
}else{
  echo '<script type="text/javascript">
          window.location.href = "https://oftalmodapaulista.com.br/profissional/";
        </script>';
  exit;
}


$tipo_pagina = 'lista';

if(isset($_GET['cad'])){ // https://oftalmodapaulista.com.br/profissional/wp-content/themes/prof-oftalmo/form_action/residencia-medica/planilha.php?cod=AsNGyOgrJg
  $tipo_pagina = 'interna';

  if(!is_numeric($_GET['cad'])){
    echo '<script type="text/javascript">
            alert("ID inválido");
            window.location.href = "https://oftalmodapaulista.com.br/profissional/";
          </script>';
    exit;
  }

  $id_cadastro = $_GET['cad'];

}


// ============
// ============

// USUÁRIO
try {

  $pdo = conectar();


  // PAG INTERNA
  if($tipo_pagina == 'interna'){
    $stmt = $pdo->prepare("SELECT * FROM oft23_residencia_medica WHERE id = :id ORDER BY id DESC");
    $stmt->execute(array(
      ':id' => $id_cadastro
    ));

    $cadastro = $stmt->fetch();
    $num_cadastros = $stmt->rowCount();
  }else{
  // PAG LISTAGEM
    $stmt = $pdo->prepare("SELECT * FROM oft23_residencia_medica ORDER BY id DESC");
    $stmt->execute();

    $cadastros = $stmt->fetchAll();
    $num_cadastros = $stmt->rowCount();
  }


} catch(PDOException $e) {
  $msg_error = 'Error '.$e->getCode().': ' . $e->getMessage();
}

// ============
// ============

if($tipo_pagina == 'lista'){

 ?>

<section class="py-5">


  <table class="table table-striped small table-hover">
  <thead>
    <tr class="table-dark">
      <th class="border-0" scope="col">Nome</th>
      <th class="border-0" scope="col">E-mail</th>
      <th class="border-0" scope="col">Data de cadastro</th>
      <th class="border-0" scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cadastros as $key => $cadastro) { ?>
      <tr>
        <!-- <th scope="row">1</th> -->
        <td class="border-0">
          <?php echo $cadastro['nome']; ?> <br>
        </td>
        <td class="border-0"><?php echo $cadastro['email']; ?></td>
        <td class="border-0"><?php echo date('d/m/Y H:i:s', strtotime($cadastro['dt_cadastro'])); ?></td>
        <td class="border-0"><a href="<?= get_permalink('15868'); ?>?cod=AsNGyOgrJg&cad=<?php echo $cadastro['id']; ?>" class="btn btn-primary px-3 py-2 mx-2">Ver</a></td>
      </tr>

    <?php } ?>


  </tbody>
</table>
</section>

<?php }else{ ?>


    <!-- id,
    email,
    nome,
    data_nascimento,
    naturalidade,
    inst_origem,
    nome_instituicao,
    inst_possui_hosp,
    desemp_graduacao,
    anotacao_neg,
    durac_internato,
    ativ_estudantil,
    ativ_estudantil_quais,
    init_cientifica,
    init_cientifica_quais,
    publicacao,
    publicacao_quais,
    partic_cong_cursos_durante,
    cap_livro,
    cap_livro_quais,
    apresentacao_trab_oral,
    apresentacao_trab_oral_quais,
    apresentacao_trab_em_poster,
    apresentacao_trab_em_poster_quais,
    monitorias,
    monitorias_quais,
    liga_academica,
    liga_academica_quais,
    ativ_extra,
    ativ_extra_quais,
    partic_congressos,
    partic_congressos_quais,
    part_curso_ext,
    part_curso_ext_quais,
    premios_dist_acad,
    premios_dist_acad_quais,
    ativ_comu_cult_espor,
    ativ_comu_cult_espor_quais,
    ligua_estrangeira,
    ligua_estrangeira_quais,
    desemp_consurso,
    desemp_consurso_quais,
    dt_cadastro -->

    <?php //var_dump($cadastro); ?>

    <?php if($num_cadastros > 0){ ?>


    <form
    >
        <div class="row gy-5 mt-4">

            <div class="col-12">
                <label class="fw-bold mb-2 small">Nome completo</label>
                <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"><?php echo stripslashes($cadastro['nome']) ?></p>
            </div>

            <div class="col-lg-4">
                <label class="fw-bold mb-2 small">Endereço de E-mail </label>
                <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"><?php echo stripslashes($cadastro['email']) ?></p>
            </div>

            <div class="col-lg-4">
                <label class="fw-bold mb-2 small">Data de Nascimento </label>
                <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"><?php echo date('d/m/Y', strtotime($cadastro['data_nascimento'])); ?></p>
            </div>

            <div class="col-lg-4">
                <label class="fw-bold mb-2 small">Naturalidade </label>
                <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"><?php echo stripslashes($cadastro['naturalidade']) ?></p>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">1.  A instituição de origem é reconhecida como centro formador, assistencial e/ ou pesquisa científica? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['inst_origem']) ?>
                      <?php echo ($cadastro['nome_instituicao']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['nome_instituicao']).'</span>' : '' ?>
                    </p>

                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">2. A instituição de origem possui hospital universitário próprio? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"> <?php echo stripslashes($cadastro['inst_possui_hosp']) ?> </p>

                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">3. Desempenho durante a graduação (Média final do curso ou coeficiente de rendimento) </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"> <?php echo stripslashes($cadastro['desemp_graduacao']) ?> </p>

                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">3.1 Anotação negativa em responsabilidade ética? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"> <?php echo stripslashes($cadastro['anotacao_neg']) ?> </p>

                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">4. Duração do internato </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0"> <?php echo stripslashes($cadastro['durac_internato']) ?> </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">5. Atividades de representação estudantil - Diretoria (Liga acadêmica / Centro acadêmico)? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['ativ_estudantil']) ?>
                      <?php echo ($cadastro['ativ_estudantil_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['ativ_estudantil_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">6. Iniciação científica </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['init_cientifica']) ?>
                      <?php echo ($cadastro['init_cientifica_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['init_cientifica_quais']).'</span>' : '' ?>
                    </p>

                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">7. Publicação </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['publicacao']) ?>
                      <?php echo ($cadastro['publicacao_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['publicacao_quais']).'</span>' : '' ?>
                    </p>

                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">8. Capítulo de livro? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['cap_livro']) ?>
                      <?php echo ($cadastro['cap_livro_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['cap_livro_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">9. Apresentação trabalho oral (paper)? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['apresentacao_trab_oral']) ?>
                      <?php echo ($cadastro['apresentacao_trab_oral_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['apresentacao_trab_oral_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">10. Apresentação trabalho poster? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['apresentacao_trab_em_poster']) ?>
                      <?php echo ($cadastro['apresentacao_trab_em_poster_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['apresentacao_trab_em_poster_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">11. Monitorias? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['monitorias']) ?>
                      <?php echo ($cadastro['monitorias_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['monitorias_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">12. Liga acadêmica? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['liga_academica']) ?>
                      <?php echo ($cadastro['liga_academica_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['liga_academica_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">13. Atividades extracurriculares associadas a ensino, assistência médica e estágios supervisionados? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['ativ_extra']) ?>
                      <?php echo ($cadastro['ativ_extra_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['ativ_extra_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">14. Participação em congressos? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['partic_congressos']) ?>
                      <?php echo ($cadastro['partic_congressos_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['partic_congressos_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">15. Participação em cursos de extensão? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['part_curso_ext']) ?>
                      <?php echo ($cadastro['part_curso_ext_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['part_curso_ext_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">16. Prêmios e distinções acadêmicas? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['premios_dist_acad']) ?>
                      <?php echo ($cadastro['premios_dist_acad_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['premios_dist_acad_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">17. Atividades comunitárias, culturais, esportivas? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['ativ_comu_cult_espor']) ?>
                      <?php echo ($cadastro['ativ_comu_cult_espor_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['ativ_comu_cult_espor_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">18. Lingua estrangeira? </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['ligua_estrangeira']) ?>
                      <?php echo ($cadastro['ligua_estrangeira_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['ligua_estrangeira_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>


            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">19. Desempenho em concurso público </label>
                    <p class="pb-1 border-bottom border-1 small text-primary fw-bold mb-0">
                      <?php echo stripslashes($cadastro['desemp_consurso']) ?>
                      <?php echo ($cadastro['desemp_consurso_quais']) ? ' - <span class="text-secondary">'.stripslashes($cadastro['desemp_consurso_quais']).'</span>' : '' ?>
                    </p>
                </div>
            </div>


        </div>

    </form>
  <?php }else{ ?>
    <h4 class="mt-4">Não há registros com o ID informado.</h4>
  <?php } ?>


    <a href="<?= get_permalink('15868'); ?>?cod=AsNGyOgrJg" class="btn btn-primary btn btn-primary mt-4"> Voltar </a>
</section>

<?php } ?>

<?php

get_footer();
