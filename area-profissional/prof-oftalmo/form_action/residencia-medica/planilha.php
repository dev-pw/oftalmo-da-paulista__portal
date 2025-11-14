<?php

if(isset($_GET['cod']) && $_GET['cod'] == 'AsNGyOgrJg'){ // https://oftalmodapaulista.com.br/profissional/wp-content/themes/prof-oftalmo/form_action/residencia-medica/planilha.php?cod=AsNGyOgrJg
  // ok
}else{
  echo "Acesso negado ao arquivo."; exit;
}

include('../connection.php');
include('../util/funcoes_uteis.php');
include('../util/cript.php');

header('Content-Type: text/html; charset=utf-8');

try {
	// CONEXÃƒO PDO
  $pdo = conectar();

	// SELECT
	$stmt = $pdo->prepare("
    SELECT
      *
    FROM oft23_residencia_medica
  ");
  $stmt->execute();

	$registros = $stmt->fetchAll();

	if(count($registros) <= 0){
    echo 'Não foram encontrados registros';
    exit;
	}else{

    //
    //
    $delimiter = ";";
    $filename = "oftalmo_res_med_" . date('Y_m_d') . ".csv";
    // Create a file pointer
    $f = fopen('php://memory', 'w');
    // Set column headers
    $fields = array(
      utf8_decode('Nome completo'),
      utf8_decode('E-mail'),
      utf8_decode('Data de Nascimento'),
      utf8_decode('Naturalidade '),
      utf8_decode('Inst. de origem reconhecida como centro formador'),
      utf8_decode('Nome da Instituição'),
      utf8_decode('Inst. de origem possui hospital'),
      utf8_decode('Média final do curso'),
      utf8_decode('Anot. negativa em resp. ética'),
      utf8_decode('Duração do internato'),
      utf8_decode('Ativ. de repres. estudantil'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Iniciação científica'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Publicação'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Capítulo de livro'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Apres. trabalho oral'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Apres. trabalho poster'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Monitorias'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Liga acadêmica'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Atividades extracurriculares'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Participação em congressos'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Participação em cursos de extensão'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Prêmios e distinções acadêmicas'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Ativ. comunitárias'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Lingua estrangeira'),
      utf8_decode('Se sim, qual/quais?'),
      utf8_decode('Desempenho em concurso público'),
      utf8_decode('Se sim, qual/quais?')
    );
    fputcsv($f, $fields, $delimiter);

    foreach ($registros as $key => $row) {

      $lineData = array(
        utf8_decode($row['nome']),
        utf8_decode($row['email']),
        utf8_decode($row['data_nascimento']),
        utf8_decode($row['naturalidade']),
        utf8_decode($row['inst_origem']),
        utf8_decode($row['nome_instituicao']),
        utf8_decode($row['inst_possui_hosp']),
        utf8_decode($row['desemp_graduacao']),
        utf8_decode($row['anotacao_neg']),
        utf8_decode($row['durac_internato']),
        utf8_decode($row['ativ_estudantil']),
        utf8_decode($row['ativ_estudantil_quais']),
        utf8_decode($row['init_cientifica']),
        utf8_decode($row['init_cientifica_quais']),
        utf8_decode($row['publicacao']),
        utf8_decode($row['publicacao_quais']),
        utf8_decode($row['cap_livro']),
        utf8_decode($row['cap_livro_quais']),
        utf8_decode($row['apresentacao_trab_oral']),
        utf8_decode($row['apresentacao_trab_oral_quais']),
        utf8_decode($row['apresentacao_trab_em_poster']),
        utf8_decode($row['apresentacao_trab_em_poster_quais']),
        utf8_decode($row['monitorias']),
        utf8_decode($row['monitorias_quais']),
        utf8_decode($row['liga_academica']),
        utf8_decode($row['liga_academica_quais']),
        utf8_decode($row['ativ_extra']),
        utf8_decode($row['ativ_extra_quais']),
        utf8_decode($row['partic_congressos']),
        utf8_decode($row['partic_congressos_quais']),
        utf8_decode($row['part_curso_ext']),
        utf8_decode($row['part_curso_ext_quais']),
        utf8_decode($row['premios_dist_acad']),
        utf8_decode($row['premios_dist_acad_quais']),
        utf8_decode($row['ativ_comu_cult_espor']),
        utf8_decode($row['ativ_comu_cult_espor_quais']),
        utf8_decode($row['ligua_estrangeira']),
        utf8_decode($row['ligua_estrangeira_quais']),
        utf8_decode($row['desemp_consurso']),
        utf8_decode($row['desemp_consurso_quais'])

      );
      fputcsv($f, $lineData, $delimiter);
    }

    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

		ob_end_clean();
    fpassthru($f);
  }


} catch(PDOException $e) {
  echo $e->getMessage();
  exit;
}
?>
