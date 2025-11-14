<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'on');

include('../util/funcoes_uteis.php');
include('../util/cript.php');
// date_default_timezone_set('America/Sao_Paulo');

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$idade = addslashes($_POST['idade']);
$naturalidade = addslashes($_POST['naturalidade']);
$inst_origem = addslashes($_POST['inst_origem']);
$nome_instituicao = addslashes($_POST['nome_instituicao']);
$inst_possui_hosp = addslashes($_POST['inst_possui_hosp']);
$desemp_graduacao = addslashes($_POST['desemp_graduacao']);
$anotacao_neg = addslashes($_POST['anotacao_neg']);
$durac_internato = addslashes($_POST['durac_internato']);
$ativ_estudantil = addslashes($_POST['ativ_estudantil']);
$ativ_estudantil_quais = addslashes($_POST['ativ_estudantil_quais']);
$init_cientifica = addslashes($_POST['init_cientifica']);
$init_cientifica_quais = addslashes($_POST['init_cientifica_quais']);
$publicacao = addslashes($_POST['publicacao']);
$publicacao_quais = addslashes($_POST['publicacao_quais']);
$cap_livro = addslashes($_POST['cap_livro']);
$cap_livro_quais  = addslashes($_POST['cap_livro_quais']);
$apresentacao_trab_oral = addslashes($_POST['apresentacao_trab_oral']);
$apresentacao_trab_oral_quais = addslashes($_POST['apresentacao_trab_oral_quais']);
$apresentacao_trab_em_poster = addslashes($_POST['apresentacao_trab_em_poster']);
$apresentacao_trab_em_poster_quais = addslashes($_POST['apresentacao_trab_em_poster_quais']);
$monitorias = addslashes($_POST['monitorias']);
$monitorias_quais = addslashes($_POST['monitorias_quais']);
$liga_academica = addslashes($_POST['liga_academica']);
$liga_academica_quais = addslashes($_POST['liga_academica_quais']);
$ativ_extra = addslashes($_POST['ativ_extra']);
$ativ_extra_quais = addslashes($_POST['ativ_extra_quais']);
$partic_congressos = addslashes($_POST['partic_congressos']);
$partic_congressos_quais = addslashes($_POST['partic_congressos_quais']);
$part_curso_ext = addslashes($_POST['part_curso_ext']);
$part_curso_ext_quais = addslashes($_POST['part_curso_ext_quais']);
$premios_dist_acad = addslashes($_POST['premios_dist_acad']);
$premios_dist_acad_quais = addslashes($_POST['premios_dist_acad_quais']);
$ativ_comu_cult_espor = addslashes($_POST['ativ_comu_cult_espor']);
$ativ_comu_cult_espor_quais = addslashes($_POST['ativ_comu_cult_espor_quais']);
$ligua_estrangeira = addslashes($_POST['ligua_estrangeira']);
$ligua_estrangeira_quais = addslashes($_POST['ligua_estrangeira_quais']);
$desemp_consurso = addslashes($_POST['desemp_consurso']);
$desemp_consurso_quais = addslashes($_POST['desemp_consurso_quais']);


// CHECANDO SE OS CAMPOS ESTÃO VAZIOS
checarVazio($email);
checarVazio($nome);
checarVazio($idade);
checarVazio($naturalidade);
checarVazio($inst_origem);
checarVazio($nome_instituicao);
checarVazio($inst_possui_hosp);
checarVazio($desemp_graduacao);
checarVazio($anotacao_neg);
checarVazio($durac_internato);
checarVazio($ativ_estudantil);
checarVazio($init_cientifica);
checarVazio($publicacao);
checarVazio($cap_livro);
checarVazio($apresentacao_trab_oral);
checarVazio($apresentacao_trab_em_poster);
checarVazio($monitorias);
checarVazio($liga_academica);
checarVazio($ativ_extra);
checarVazio($partic_congressos);
checarVazio($part_curso_ext);
checarVazio($premios_dist_acad);
checarVazio($ativ_comu_cult_espor);
checarVazio($ligua_estrangeira);
checarVazio($desemp_consurso);

/* RECAPTCHA */
$captcha = $_POST['g-recaptcha-response'];

if(!$captcha) {
  echo json_encode(array(
    'status' => 'erro',
    'erro' => 'Por favor, selecione a opção do "Não sou um robô" para submeter as informações do formulário'
  ));
  exit;
}
/* RECAPTCHA */

// CHECANDO SE POSSUI CONTEÚDO SUSPEITO
// checarSpam($email);
checarSpam($nome);
checarSpam($idade);
checarSpam($naturalidade);
checarSpam($inst_origem);
// checarSpam($nome_instituicao);
checarSpam($inst_possui_hosp);
checarSpam($desemp_graduacao);
checarSpam($anotacao_neg);
checarSpam($durac_internato);
checarSpam($ativ_estudantil);
// checarSpam($ativ_estudantil_quais);
checarSpam($init_cientifica);
// checarSpam($init_cientifica_quais);
checarSpam($publicacao);
// checarSpam($publicacao_quais);
checarSpam($cap_livro);
// checarSpam($cap_livro_quais);
checarSpam($apresentacao_trab_oral);
// checarSpam($apresentacao_trab_oral_quais);
checarSpam($apresentacao_trab_em_poster);
// checarSpam($apresentacao_trab_em_poster_quais);
checarSpam($monitorias);
// checarSpam($monitorias_quais);
checarSpam($liga_academica);
// checarSpam($liga_academica_quais);
checarSpam($ativ_extra);
// checarSpam($ativ_extra_quais);
checarSpam($partic_congressos);
// checarSpam($partic_congressos_quais);
checarSpam($part_curso_ext);
// checarSpam($part_curso_ext_quais);
checarSpam($premios_dist_acad);
// checarSpam($premios_dist_acad_quais);
checarSpam($ativ_comu_cult_espor);
// checarSpam($ativ_comu_cult_espor_quais);
checarSpam($ligua_estrangeira);
// checarSpam($ligua_estrangeira_quais);
checarSpam($desemp_consurso);
// checarSpam($desemp_consurso_quais);


include('../connection.php');


try {

    // CONEXÃO PDO
    $pdo = conectar();

    // SELECT
  	$stmt = $pdo->prepare("SELECT * FROM oft23_residencia_medica WHERE email = :email");
  	$stmt->execute(array(
  		':email' => $email
    ));

  	$registros = $stmt->fetchAll();
    $num_registros = $stmt->rowCount();


  	if($num_registros > 0){
      $responseError = array(
        'status' => 'erro',
        'erro' => 'O e-mail inserido já possui cadastro'
      );
      echo json_encode($responseError);
      exit;
  	}

    // ==============

    // INSERT
    $stmt = $pdo->prepare('
      INSERT INTO oft23_residencia_medica (
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
        desemp_consurso_quais
        ) VALUES (
        :email,
        :nome,
        :data_nascimento,
        :naturalidade,
        :inst_origem,
        :nome_instituicao,
        :inst_possui_hosp,
        :desemp_graduacao,
        :anotacao_neg,
        :durac_internato,
        :ativ_estudantil,
        :ativ_estudantil_quais,
        :init_cientifica,
        :init_cientifica_quais,
        :publicacao,
        :publicacao_quais,
        :cap_livro,
        :cap_livro_quais,
        :apresentacao_trab_oral,
        :apresentacao_trab_oral_quais,
        :apresentacao_trab_em_poster,
        :apresentacao_trab_em_poster_quais,
        :monitorias,
        :monitorias_quais,
        :liga_academica,
        :liga_academica_quais,
        :ativ_extra,
        :ativ_extra_quais,
        :partic_congressos,
        :partic_congressos_quais,
        :part_curso_ext,
        :part_curso_ext_quais,
        :premios_dist_acad,
        :premios_dist_acad_quais,
        :ativ_comu_cult_espor,
        :ativ_comu_cult_espor_quais,
        :ligua_estrangeira,
        :ligua_estrangeira_quais,
        :desemp_consurso,
        :desemp_consurso_quais
        )');
    $stmt->execute(array(
        ':email' =>$email,
        ':nome' => $nome,
        ':data_nascimento' => $idade,
        ':naturalidade' => $naturalidade,
        ':inst_origem' => $inst_origem,
        ':nome_instituicao' => $nome_instituicao,
        ':inst_possui_hosp' => $inst_possui_hosp,
        ':desemp_graduacao' => $desemp_graduacao,
        ':anotacao_neg' => $anotacao_neg,
        ':durac_internato' => $durac_internato,
        ':ativ_estudantil' => $ativ_estudantil,
        ':ativ_estudantil_quais' => $ativ_estudantil_quais,
        ':init_cientifica' => $init_cientifica,
        ':init_cientifica_quais' => $init_cientifica_quais,
        ':publicacao' => $publicacao,
        ':publicacao_quais' => $publicacao_quais,
        ':cap_livro' => $cap_livro,
        ':cap_livro_quais' => $cap_livro_quais,
        ':apresentacao_trab_oral' => $apresentacao_trab_oral,
        ':apresentacao_trab_oral_quais' => $apresentacao_trab_oral_quais,
        ':apresentacao_trab_em_poster' => $apresentacao_trab_em_poster,
        ':apresentacao_trab_em_poster_quais' => $apresentacao_trab_em_poster_quais,
        ':monitorias' => $monitorias,
        ':monitorias_quais' => $monitorias_quais,
        ':liga_academica' => $liga_academica,
        ':liga_academica_quais' => $liga_academica_quais,
        ':ativ_extra' => $ativ_extra,
        ':ativ_extra_quais' => $ativ_extra_quais,
        ':partic_congressos' => $partic_congressos,
        ':partic_congressos_quais' => $partic_congressos_quais,
        ':part_curso_ext' => $part_curso_ext,
        ':part_curso_ext_quais' => $part_curso_ext_quais,
        ':premios_dist_acad' => $premios_dist_acad,
        ':premios_dist_acad_quais' => $premios_dist_acad_quais,
        ':ativ_comu_cult_espor' => $ativ_comu_cult_espor,
        ':ativ_comu_cult_espor_quais' => $ativ_comu_cult_espor_quais,
        ':ligua_estrangeira' => $ligua_estrangeira,
        ':ligua_estrangeira_quais' => $ligua_estrangeira_quais,
        ':desemp_consurso' => $desemp_consurso,
        ':desemp_consurso_quais' => $desemp_consurso_quais,

    ));

    $assunto = mb_convert_encoding('Programa Residência Médica em Oftalmologia 2024 | Análise curricular prévia', 'UTF-8');
    $corpoMSG = utf8_decode('
    <body style="background-color: #EDEDED">
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr> <td height="30" style="background-color: #125c52">&nbsp;</td> </tr>
        <tr width="750" style="background-color: #125c52; text-align:center">
          <td width="750" align="center" style="background-color: #125c52">
            <img src="https://oftalmodapaulista.com.br/paciente/wp-content/uploads/2023/10/logo-epm-unifesp-hsp.png" width="500" alt="">
          </td>
        </tr>
        <tr> <td style="background-color: #125c52" height="30">&nbsp;</td> </tr>

        <tr>
          <td>
            <table width="750" border="0" cellspacing="0" cellpadding="0" style="background-color:#ffffff; font-size:16px; font-family: Verdana; color: #525252; line-height: 1.5">
            <tbody>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
              <tr>
              <td width="50">&nbsp;</td>
              <td>
                <p>Prezado(a) Dr(a). <strong>'.$nome.'</strong>, </p>
                <p>O <strong>Departamento de Oftalmologia da EPM - UNIFESP - HSP - </strong> confirma o recebimento das informa&ccedil;&otilde;es enviadas pelo formul&aacute;rio do <strong>Programa Resid&ecirc;ncia M&eacute;dica em Oftalmologia 2024 &ndash; An&aacute;lise curricular pr&eacute;via</strong> (<a href="https://www.oftalmodapaulista.com.br" target="_blank" style="color:#009C8A; text-decoration:none">www.oftalmodapaulista.com.br</a>).</p>
              </td>
              <td width="50">&nbsp;</td>
              </tr>

              <tr>
              <td height="30">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
              <tr>
              <td>&nbsp;</td>
              <td style="color: #125c52"><strong>INFORMAÇÕES INSERIDAS NO FORMULÁRIO</strong></td>
              <td>&nbsp;</td>
              </tr>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>

              <tr>
              <td>&nbsp;</td>
              <td>
                <table width="100%" border="0" cellspacing="2" cellpadding="10" style="background-color:#ffffff; font-size:14px; font-family: Verdana; color: #525252; line-height: 1.5">
                <tbody>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>1. A institui&ccedil;&atilde;o de origem &eacute; reconhecida como centro formador, assistencial e/ ou pesquisa cient&iacute;fica? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.:  '.$inst_origem.' - '.$nome_instituicao.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>2. A institui&ccedil;&atilde;o de origem possui hospital universit&aacute;rio pr&oacute;prio? </strong><br>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$inst_possui_hosp.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>3. Desempenho durante a gradua&ccedil;&atilde;o (M&eacute;dia final do curso ou coeficiente de rendimento) </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$desemp_graduacao.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>3.1 Anota&ccedil;&atilde;o negativa em responsabilidade &eacute;tica? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$anotacao_neg.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>4. Dura&ccedil;&atilde;o do internato </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$durac_internato.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>5. Atividades de representa&ccedil;&atilde;o estudantil - Diretoria (Liga acad&ecirc;mica / Centro acad&ecirc;mico)? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$ativ_estudantil.' - '.$ativ_estudantil_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>6. Inicia&ccedil;&atilde;o cient&iacute;fica </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">   Resp.: '.$init_cientifica.' - '.$init_cientifica_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>7. Publica&ccedil;&atilde;o </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">  Resp.: '.$publicacao.' - '.$publicacao_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>8. Cap&iacute;tulo de livro? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$cap_livro.' - '.$cap_livro_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>9. Apresenta&ccedil;&atilde;o trabalho oral (paper)? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$apresentacao_trab_oral.' - '.$apresentacao_trab_oral_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>10. Apresenta&ccedil;&atilde;o trabalho poster? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$apresentacao_trab_em_poster.' - '.$apresentacao_trab_em_poster_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>11. Monitorias? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$monitorias.' - '.$monitorias_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>12. Liga acad&ecirc;mica? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$liga_academica.' - '.$liga_academica_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>13. Atividades extracurriculares associadas a ensino, assist&ecirc;ncia m&eacute;dica e est&aacute;gios supervisionados? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$ativ_extra.' - '.$ativ_extra_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>14. Participa&ccedil;&atilde;o em congressos? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$partic_congressos.' - '.$partic_congressos_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong> 15. Participa&ccedil;&atilde;o em cursos de extens&atilde;o? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$part_curso_ext.' - '.$part_curso_ext_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong> 16. Pr&ecirc;mios e distin&ccedil;&otilde;es acad&ecirc;micas? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$premios_dist_acad.' - '.$premios_dist_acad_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong> 17. Atividades comunit&aacute;rias, culturais, esportivas? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$ativ_comu_cult_espor.' - '.$ativ_comu_cult_espor_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong> 18. Lingua estrangeira? </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$ligua_estrangeira.' - '.$ligua_estrangeira_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong> 19. Desempenho em concurso p&uacute;blico </strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$desemp_consurso.' - '.$desemp_consurso_quais.' </td>
                </tr>
                </tbody>
              </table></td>
              <td>&nbsp;</td>
              </tr>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>

              <tr>
              <td width="50">&nbsp;</td>
              <td>
                <p>Em breve lhe responderemos.</p>
                <p>Atenciosamente, </p>
              </td>
              <td width="50">&nbsp;</td>
              </tr>

              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>

              <tr>
              <td>&nbsp;</td>
              <td style="border-top: 1px solid #eaeaea;">&nbsp;</td>
              <td>&nbsp;</td>
              </tr>

              <tr>
              <td>&nbsp;</td>
              <td><p> <strong> Departamento de Oftalmologia da EPM - UNIFESP </strong> </p></td>
              <td>&nbsp;</td>
              </tr>

              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>

              <tr>
              <td height="20" style="background-color:#125c52">&nbsp;</td>
              <td height="20" style="background-color:#125c52">&nbsp;</td>
              <td height="20" style="background-color:#125c52">&nbsp;</td>
              </tr>

              <tr style="background-color:#125c52">
              <td>&nbsp;</td>
              <td align="center">
                <a href="https://oftalmodapaulista.com.br" style="color: #FFF; text-decoration: none" target="_blank"> <strong> oftalmodapaulista.com.br </strong> </a>
              </td>
              <td>&nbsp;</td>
              </tr>

              <tr style="background-color:#125c52">
              <td height="20">&nbsp;</td>
              <td height="20">&nbsp;</td>
              <td height="20">&nbsp;</td>
              </tr>
            </tbody>
            </table>
          </td>
        </tr>
      </tbody>
      </table>
    </body>
    ');

    $subject = utf8_decode($assunto);

    include('../util/email_configuracao_avaliacao.php');


    if($stmt->rowCount() >= 1){

      echo json_encode(array(
        'status' => 'sucesso'
      ));

    } else{
      echo json_encode(array(
        'status' => 'erro',
        'erro' => 'Ocorreu um erro, tente novamente mais tarde'
      ));
    }

    } catch(PDOException $e) {
      $responseError = array(
        'status' => 'erro',
        'erro' => 'Error: ' . $e->getMessage()
      );
      echo json_encode($responseError);
  }

?>
