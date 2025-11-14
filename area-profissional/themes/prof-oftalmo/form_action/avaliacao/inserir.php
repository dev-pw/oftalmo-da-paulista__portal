<?php

include('../util/funcoes_uteis.php');
include('../util/cript.php');
// date_default_timezone_set('America/Sao_Paulo');

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$idade = addslashes($_POST['idade']);
$naturalidade = addslashes($_POST['naturalidade']);
$centro_formador = addslashes($_POST['centro_formador']);
$nome_instituicao = addslashes($_POST['nome_instituicao']);
$inst_possui_sus = addslashes($_POST['inst_possui_sus']);
$inst_possui_oftalmo_cred = addslashes($_POST['inst_possui_oftalmo_cred']);
$inst_oferece_ensino_oft = addslashes($_POST['inst_oferece_ensino_oft']);
$inst_possui_prog_posgrad = addslashes($_POST['inst_possui_prog_posgrad']);
$prod_cient_durante_res = addslashes($_POST['prod_cient_durante_res']);
$prod_cient_durante_res_quais = addslashes($_POST['prod_cient_durante_res_quais']);
$ativ_extracurr_relac = addslashes($_POST['ativ_extracurr_relac']);
$ativ_extracurr_relac_quais = addslashes($_POST['ativ_extracurr_relac_quais']);
$partic_cong_cursos_durante = addslashes($_POST['partic_cong_cursos_durante']);
$apresentacao_trab_em_cong = addslashes($_POST['apresentacao_trab_em_cong']);
$apresentacao_trab_em_cong_quais  = addslashes($_POST['apresentacao_trab_em_cong_quais']);
$premios_e_dist_durante = addslashes($_POST['premios_e_dist_durante']);
$premios_e_dist_durante_quais = addslashes($_POST['premios_e_dist_durante_quais']);
$ativ_comunit_oft = addslashes($_POST['ativ_comunit_oft']);
$ativ_comunit_oft_quais = addslashes($_POST['ativ_comunit_oft_quais']);
$estagios_ext_durante = addslashes($_POST['estagios_ext_durante']);
$estagios_ext_durante_quais = addslashes($_POST['estagios_ext_durante_quais']);
$ligua_estrangeira = addslashes($_POST['ligua_estrangeira']);
$ligua_estrangeira_quais = addslashes($_POST['ligua_estrangeira_quais']);
$areas_interesse = addslashes($_POST['areas_interesse']);

// CHECANDO SE OS CAMPOS ESTÃO VAZIOS
checarVazio($email);
checarVazio($nome);
checarVazio($idade);
checarVazio($naturalidade);
checarVazio($centro_formador);
checarVazio($nome_instituicao);
checarVazio($inst_possui_sus);
checarVazio($inst_possui_oftalmo_cred);
checarVazio($inst_oferece_ensino_oft);
checarVazio($inst_possui_prog_posgrad);
checarVazio($prod_cient_durante_res);
// checarVazio($prod_cient_durante_res_quais);
checarVazio($ativ_extracurr_relac);
// checarVazio($ativ_extracurr_relac_quais);
checarVazio($partic_cong_cursos_durante);
checarVazio($apresentacao_trab_em_cong);
// checarVazio($apresentacao_trab_em_cong_quais);
checarVazio($premios_e_dist_durante);
// checarVazio($premios_e_dist_durante_quais);
checarVazio($ativ_comunit_oft);
// checarVazio($ativ_comunit_oft_quais);
checarVazio($estagios_ext_durante);
// checarVazio($estagios_ext_durante_quais);
checarVazio($ligua_estrangeira);
// checarVazio($ligua_estrangeira_quais);
checarVazio($areas_interesse);

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
checarSpam($centro_formador);
// checarSpam($nome_instituicao);
checarSpam($inst_possui_sus);
checarSpam($inst_possui_oftalmo_cred);
checarSpam($inst_oferece_ensino_oft);
checarSpam($inst_possui_prog_posgrad);
checarSpam($prod_cient_durante_res);
// checarSpam($prod_cient_durante_res_quais);
checarSpam($ativ_extracurr_relac);
// checarSpam($ativ_extracurr_relac_quais);
checarSpam($partic_cong_cursos_durante);
checarSpam($apresentacao_trab_em_cong);
// checarSpam($apresentacao_trab_em_cong_quais);
checarSpam($premios_e_dist_durante);
// checarSpam($premios_e_dist_durante_quais);
checarSpam($ativ_comunit_oft);
// checarSpam($ativ_comunit_oft_quais);
checarSpam($estagios_ext_durante);
// checarSpam($estagios_ext_durante_quais);
checarSpam($ligua_estrangeira);
// checarSpam($ligua_estrangeira_quais);
checarSpam($areas_interesse);
checarSpam($data);


include('../connection.php');


try {

    // CONEXÃO PDO
    $pdo = conectar();

    // INSERT
    $stmt = $pdo->prepare('
      INSERT INTO oft23_avaliacao_r4_2023 (
        email,
        nome,
        data_nascimento,
        naturalidade,
        centro_formador,
        nome_instituicao,
        inst_possui_sus,
        inst_possui_oftalmo_cred,
        inst_oferece_ensino_oft,
        inst_possui_prog_posgrad,
        prod_cient_durante_res,
        prod_cient_durante_res_quais,
        ativ_extracurr_relac,
        ativ_extracurr_relac_quais,
        partic_cong_cursos_durante,
        apresentacao_trab_em_cong,
        apresentacao_trab_em_cong_quais,
        premios_e_dist_durante,
        premios_e_dist_durante_quais,
        ativ_comunit_oft,
        ativ_comunit_oft_quais,
        estagios_ext_durante,
        estagios_ext_durante_quais,
        ligua_estrangeira,
        ligua_estrangeira_quais,
        areas_interesse
        ) VALUES (
        :email,
        :nome,
        :data_nascimento,
        :naturalidade,
        :centro_formador,
        :nome_instituicao,
        :inst_possui_sus,
        :inst_possui_oftalmo_cred,
        :inst_oferece_ensino_oft,
        :inst_possui_prog_posgrad,
        :prod_cient_durante_res,
        :prod_cient_durante_res_quais,
        :ativ_extracurr_relac,
        :ativ_extracurr_relac_quais,
        :partic_cong_cursos_durante,
        :apresentacao_trab_em_cong,
        :apresentacao_trab_em_cong_quais,
        :premios_e_dist_durante,
        :premios_e_dist_durante_quais,
        :ativ_comunit_oft,
        :ativ_comunit_oft_quais,
        :estagios_ext_durante,
        :estagios_ext_durante_quais,
        :ligua_estrangeira,
        :ligua_estrangeira_quais,
        :areas_interesse
        )');
    $stmt->execute(array(
        ':email' =>$email,
        ':nome' => $nome,
        ':data_nascimento' => $idade,
        ':naturalidade' => $naturalidade,
        ':centro_formador' => $centro_formador,
        ':nome_instituicao' => $nome_instituicao,
        ':inst_possui_sus' => $inst_possui_sus,
        ':inst_possui_oftalmo_cred' => $inst_possui_oftalmo_cred,
        ':inst_oferece_ensino_oft' => $inst_oferece_ensino_oft,
        ':inst_possui_prog_posgrad' => $inst_possui_prog_posgrad,
        ':prod_cient_durante_res' => $prod_cient_durante_res,
        ':prod_cient_durante_res_quais' => $prod_cient_durante_res_quais,
        ':ativ_extracurr_relac' => $ativ_extracurr_relac,
        ':ativ_extracurr_relac_quais' => $ativ_extracurr_relac_quais,
        ':partic_cong_cursos_durante' => $partic_cong_cursos_durante,
        ':apresentacao_trab_em_cong' => $apresentacao_trab_em_cong,
        ':apresentacao_trab_em_cong_quais' => $apresentacao_trab_em_cong_quais,
        ':premios_e_dist_durante' => $premios_e_dist_durante,
        ':premios_e_dist_durante_quais' => $premios_e_dist_durante_quais,
        ':ativ_comunit_oft' => $ativ_comunit_oft,
        ':ativ_comunit_oft_quais' => $ativ_comunit_oft_quais,
        ':estagios_ext_durante' => $estagios_ext_durante,
        ':estagios_ext_durante_quais' => $estagios_ext_durante_quais,
        ':ligua_estrangeira' => $ligua_estrangeira,
        ':ligua_estrangeira_quais' => $ligua_estrangeira_quais,
        ':areas_interesse' => $areas_interesse,

    ));

    $assunto = mb_convert_encoding('Avaliação Currículo R4 Oftalmologia Relacionadas a Instituição que Cursou Residência em Oftalmologia', 'UTF-8');
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
                <p>O <strong>Departamento de Oftalmologia da EPM - UNIFESP - HSP - </strong> confirma o recebimento das informa&ccedil;&otilde;es enviadas pelo formul&aacute;rio do <strong>Avalia&ccedil;&atilde;o Curr&iacute;culo R4 Oftalmologia Relacionadas a Institui&ccedil;&atilde;o que Cursou Resid&ecirc;ncia em Oftalmologia</strong> </p>
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
                  <p><strong>1. A institui&ccedil;&atilde;o que cursou resid&ecirc;ncia &eacute; reconhecida como centro formador, assistencial e/ou de pesquisa cient&iacute;fica?</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.:  '.$centro_formador.' - '.$nome_instituicao.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>2. A institui&ccedil;&atilde;o que cursou resid&ecirc;ncia possui servi&ccedil;o de Oftalmologia pr&oacute;prio com atendimento pelo SUS?</strong><br>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$inst_possui_sus.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>3. A institui&ccedil;&atilde;o que cursou resid&ecirc;ncia possui programa de Oftalmologia credenciado pela CNRM/MEC e pelo Conselho Brasileiro de Oftalmologia/AMB?</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$inst_possui_oftalmo_cred.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>4. A institui&ccedil;&atilde;o que cursou resid&ecirc;ncia oferece ensino de Oftalmologia nos tr&ecirc;s n&iacute;veis de aten&ccedil;&atilde;o &agrave; sa&uacute;de?</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$inst_oferece_ensino_oft.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>5. A institui&ccedil;&atilde;o que cursou resid&ecirc;ncia possui programa de P&oacute;s-Gradua&ccedil;&atilde;o strictu senso em Oftalmologia?</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$inst_possui_prog_posgrad.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>6. Produ&ccedil;&atilde;o cient&iacute;fica durante a resid&ecirc;ncia</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">   Resp.: '.$prod_cient_durante_res.' - '.$prod_cient_durante_res_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>7. Atividades extracurriculares relacionadas ao ensino, assist&ecirc;ncia m&eacute;dica e extens&atilde;o durante a resid&ecirc;ncia</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">  Resp.: '.$ativ_extracurr_relac.' - '.$ativ_extracurr_relac_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>8. Participa&ccedil;&atilde;o em congressos e cursos de extens&atilde;o durante a resid&ecirc;ncia.</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$partic_cong_cursos_durante.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>9. Apresenta&ccedil;&atilde;o de trabalho oral ou poster em Congresso</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$apresentacao_trab_em_cong.' - '.$apresentacao_trab_em_cong_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>10. Pr&ecirc;mios e distin&ccedil;&otilde;es acad&ecirc;micas durante a resid&ecirc;ncia</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$premios_e_dist_durante.' - '.$premios_e_dist_durante_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>11. Atividades comunit&aacute;rias em oftalmologia</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$ativ_comunit_oft.' - '.$ativ_comunit_oft_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>12. Est&aacute;gios externos durante a resid&ecirc;ncia m&eacute;dica</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$estagios_ext_durante.' - '.$estagios_ext_durante_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>18. Lingua estrangeira?</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$ligua_estrangeira.' - '.$ligua_estrangeira_quais.' </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6">
                  <p><strong>
                  14. No edital, contam as vagas de resid&ecirc;ncia separadas por &aacute;rea de concentra&ccedil;&atilde;o, <br>
                  sendo que o candidato ser&aacute; selecionado para 1 (uma) delas. Cite 3 (tr&ecirc;s) &aacute;reas de atua&ccedil;&atilde;o <br>
                  que possui interesse em cursar, na ordem decrescente de prefer&ecirc;ncia:</strong></p>
                  </td>
                </tr>
                <tr>
                  <td width="100%" valign="top" bgcolor="#f6f6f6"> Resp.: '.$areas_interesse.' </td>
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
