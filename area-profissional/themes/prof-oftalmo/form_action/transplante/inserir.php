<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'on');

include('../util/funcoes_uteis.php');
include('../util/cript.php');
// date_default_timezone_set('America/Sao_Paulo');

$nome = addslashes($_POST['nome']);
$cpf = addslashes($_POST['cpf']);
$data_nascimento = addslashes($_POST['dt_nasc']);
$sexo = addslashes($_POST['sexo']);
$cor = addslashes($_POST['cor']);
$nome_mae = addslashes($_POST['nome_mae']);
$cartao_sus = addslashes($_POST['cartao_sus']);
$cep = addslashes($_POST['cep']);
$rua = addslashes($_POST['logradouro']);
$numero = addslashes($_POST['numero']);
$complemento = addslashes($_POST['complemento']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$telefone1 = addslashes($_POST['tel_1']);
$telefone2 = addslashes($_POST['tel_2']);
$telefone3 = addslashes($_POST['tel_3']);
$celular = addslashes($_POST['celular']);
$email = addslashes($_POST['email']);
$olho = addslashes($_POST['olho']);
$paciente_hsp = addslashes($_POST['paciente']);
$tem_exames = addslashes($_POST['exames']);
$hospital_tratamento = addslashes($_POST['hospital']);
$ultima_avaliacao = addslashes($_POST['avaliacao']);
$onde_inscrito = addslashes($_POST['onde_inscrito']);
$tempo_inscrito = addslashes($_POST['tempo_inscrito']);
$exames_realizados = addslashes($_POST['exames_realizados']);
$avaliacao_clinica = addslashes($_POST['avaliacao_clinica']);
$inscrito_fila = addslashes($_POST['inscrito_fila']);
$urgencia = addslashes($_POST['urgencia']);
$doenca = addslashes($_POST['doenca']);
$idade_doenca = addslashes($_POST['idade_doenca']);
$file = $_FILES['file'];
$adicionais = addslashes($_POST['adicionais']);


// CHECANDO SE OS CAMPOS ESTÃO VAZIOS
checarVazio($nome);
checarVazio($cpf);
checarVazio($data_nascimento);
checarVazio($sexo);
checarVazio($cor);
checarVazio($nome_mae);
checarVazio($cartao_sus);
checarVazio($cep);
checarVazio($rua);
checarVazio($numero);
checarVazio($cidade);
checarVazio($estado);
checarVazio($telefone1);
checarVazio($celular);
checarVazio($email);
checarVazio($olho);
checarVazio($paciente_hsp);
checarVazio($tem_exames);
checarVazio($hospital_tratamento);
checarVazio($ultima_avaliacao);
checarVazio($onde_inscrito);
checarVazio($tempo_inscrito);
// checarVazio($file['name']);
checarVazio($adicionais);

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
checarSpam($nome);
checarSpam($cpf);
checarSpam($data_nascimento);
checarSpam($nome_mae);
checarSpam($cartao_sus);
checarSpam($cep);
checarSpam($rua);
checarSpam($numero);
checarSpam($complemento);
checarSpam($cidade);
checarSpam($telefone1);
checarSpam($telefone2);
checarSpam($telefone3);
checarSpam($celular);
// checarSpam($email);
checarSpam($hospital_tratamento);
checarSpam($ultima_avaliacao);
checarSpam($onde_inscrito);
checarSpam($tempo_inscrito);
checarSpam($adicionais);

if(!empty($file['name'])) {

    // Pega extensão da imagem
    $array = explode('.', $file["name"]);
    $ext = end($array);
    $ext = strtolower($ext);

    if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "pdf" || $ext == "txt" || $ext == "docx" || $ext == "doc" ){

      // Verifica se o tamanho do arquivo é maior que o tamanho permitido
      if($file["size"] > 10000000) { // TAMANHO 10MB
        echo json_encode(array(
          'status' => 'erro',
          'erro' => 'O arquivo deve ter no máximo 10MB'
        )); exit;
      }

      $nome_arquivo = $file["name"].'-'.md5(uniqid(time())) . "." . $ext; // Gera um nome único para a imagem
      $file_arquivo = "../arquivos/transplante/" . $nome_arquivo; // Caminho de onde ficará a imagem

      move_uploaded_file($file["tmp_name"], $file_arquivo); // Faz o upload da imagem para seu respectivo caminho

      $file_arquivo = "https://oftalmodapaulista.com.br/profissional/wp-content/themes/prof-oftalmo/form_action/arquivos/transplante/" . $nome_arquivo;

    }else{
      echo json_encode(array(
        'status' => 'erro',
        'erro' => 'Envie uma imagem de um dos seguintes tipos: jpg, jpeg, png, pdf, txt, docx ou doc.'
      )); exit;
    }

  }else{
      $file_arquivo = '';
  }


include('../connection.php');


try {

    // CONEXÃO PDO
    $pdo = conectar();

    // INSERT
    $stmt = $pdo->prepare('
      INSERT INTO oft23_transplante (
        nome,
        cpf,
        data_nascimento,
        sexo,
        cor,
        nome_mae,
        cartao_sus,
        cep,
        rua,
        numero,
        complemento,
        cidade,
        estado,
        telefone1,
        telefone2,
        telefone3,
        celular,
        email,
        olho,
        paciente_hsp,
        tem_exames,
        hospital_tratamento,
        ultima_avaliacao,
        onde_inscrito,
        tempo_inscrito,
        avaliacao_clinica,
        exames_realizados,
        inscrito_fila,
        urgencia,
        doenca,
        idade_doenca,
        file,
        adicionais
        ) VALUES (
        :nome,
        :cpf,
        :data_nascimento,
        :sexo,
        :cor,
        :nome_mae,
        :cartao_sus,
        :cep,
        :rua,
        :numero,
        :complemento,
        :cidade,
        :estado,
        :telefone1,
        :telefone2,
        :telefone3,
        :celular,
        :email,
        :olho,
        :paciente_hsp,
        :tem_exames,
        :hospital_tratamento,
        :ultima_avaliacao,
        :onde_inscrito,
        :tempo_inscrito,
        :avaliacao_clinica,
        :exames_realizados,
        :inscrito_fila,
        :urgencia,
        :doenca,
        :idade_doenca,
        :file,
        :adicionais
        )');
    $stmt->execute(array(
        ':nome' => $nome,
        ':cpf' => $cpf,
        ':data_nascimento' => $data_nascimento,
        ':sexo' => $sexo,
        ':cor' => $cor,
        ':nome_mae' => $nome_mae,
        ':cartao_sus' => $cartao_sus,
        ':cep' => $cep,
        ':rua' => $rua,
        ':numero' => $numero,
        ':complemento' => $complemento,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':telefone1' => $telefone1,
        ':telefone2' => $telefone2,
        ':telefone3' => $telefone3,
        ':celular' => $celular,
        ':email' => $email,
        ':olho' => $olho,
        ':paciente_hsp' => $paciente_hsp,
        ':tem_exames' => $tem_exames,
        ':hospital_tratamento' => $hospital_tratamento,
        ':ultima_avaliacao' => $ultima_avaliacao,
        ':onde_inscrito' => $onde_inscrito,
        ':tempo_inscrito' => $tempo_inscrito,
        ':avaliacao_clinica' => $avaliacao_clinica,
        ':exames_realizados' => $exames_realizados,
        ':inscrito_fila' => $inscrito_fila,
        ':urgencia' => $urgencia,
        ':doenca' => $doenca,
        ':idade_doenca' => $idade_doenca,
        ':file' => $file_arquivo,
        ':adicionais' => $adicionais
    ));

    $assunto = mb_convert_encoding('Formulário de cadastro para Transplante de Córnea - Depto Oftalmologia e Ciências Visuais da EPM-UNIFESP-HSP', 'UTF-8');
    $corpoMSG = utf8_decode('
    <body style="background-color: #EDEDED">
        <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
            <tr> <td height="30" style="background-color: #ffffff">&nbsp;</td> </tr>
            <tr width="750" style="background-color: #ffffff; text-align:center">
            <td width="750" align="center" style="background-color: #ffffff">
                <img src="https://oftalmodapaulista.com.br/paciente/wp-content/uploads/2023/10/logo-epm-unifesp-hsp.png" width="500" alt="">
            </td>
            </tr>
            <tr> <td style="background-color: #ffffff" height="30">&nbsp;</td> </tr>

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
                    <p>Prezado(a) <strong>'.$nome.'</strong>, </p>
                    <p>O Setor de C&oacute;rnea do Departamento de Oftalmologia e Ci&ecirc;ncias Visuais da EPM-UNIFESP-HSP confirma o recebimento de suas informa&ccedil;&otilde;es enviadas atrav&eacute;s do formul&aacute;rio on-line em nosso site.</p>
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
                    <table width="100%" border="1" cellpadding="5" cellspacing="0" style="font-size:16px; color:#666666; font-family:Calibri">
                    <tbody>
                    <tr>
                        <th colspan="2" style="background-color:#666666; color:#FFF">INFORMA&Ccedil;&Otilde;ES PREENCHIDAS NO FORMUL&Aacute;RIO DE CADASTRO &ndash;TRANSPLANTE DE C&Oacute;RNEA</th>
                        <tr>
                        <th colspan="2" style="text-align:left; background-color:#E9E9E9">DADOS DO PACIENTE</th>
                    </tr>
                    <tr>
                        <td width="15%"><strong>Nome:</strong></td>
                        <td width="85%">'.$nome.'</td>
                    </tr>
                    <tr>
                        <td><strong>CPF:</strong></td>
                        <td>'.$cpf.'</td>
                    </tr>
                    <tr>
                        <td><strong>Data de Nascimento:</strong></td>
                        <td>'.$data_nascimento.'</td>
                    </tr>
                    <tr>
                        <td><strong>Sexo:</strong></td>
                        <td>'.$sexo.'</td>
                    </tr>
                    <tr>
                        <td><strong>Cor:</strong></td>
                        <td>'.$cor.'</td>
                    </tr>
                    <tr>
                        <td><strong>Nome da m&atilde;e:</strong></td>
                        <td>'.$nome_mae.'</td>
                    </tr>
                    <tr>
                        <td><strong>Cart&atilde;o do SUS:</strong></td>
                        <td>'.$cartao_sus.'</td>
                    </tr>
                        <th colspan="2" style="text-align:left; background-color:#E9E9E9">DADOS RESIDENCIAIS</th>
                        <tr>
                        <td><strong>CEP: </strong></td>
                        <td>'.$cep.'</td>
                        </tr>
                        <tr>
                        <td><strong>Logradouro: </strong></td>
                        <td>'.$rua.'</td>
                        </tr>

                        <tr>
                        <td><strong>N&uacute;mero: </strong></td>
                        <td>'.$numero.'</td>
                        </tr>

                        <tr>
                        <td><strong>Complemento: </strong></td>
                        <td>'.$complemento.'</td>
                        </tr>

                        <tr>
                        <td><strong>Cidade: </strong></td>
                        <td>'.$cidade.'</td>
                        </tr>

                        <tr>
                        <td><strong>Estado: </strong></td>
                        <td>'.$estado.'</td>
                        </tr>

                        <th colspan="2" style="text-align:left; background-color:#E9E9E9">DADOS DE CONTATO</th>
                        <tr>
                        <td><strong>Telefone 1:</strong></td>
                        <td>'.$telefone1.'</td>
                        </tr>
                        <tr>
                        <td><strong>Telefone 2:</strong></td>
                        <td>'.$telefone2.'</td>
                        </tr>
                        <tr>
                        <td><strong>Telefone 3:</strong></td>
                        <td>'.$telefone3.'</td>
                        </tr>
                        <tr>
                        <td><strong>Celular: </strong></td>
                        <td>'.$celular.'</td>
                        </tr>

                        <tr>
                        <td><strong>E-mail: </strong></td>
                        <td>'.$email.'</td>
                        </tr>
                        <th colspan="2" style="text-align:left; background-color:#E9E9E9">QUESTION&Aacute;RIO</th>
                        <tr>
                        <td colspan="2"><p><strong>OLHO:</strong><br />
                        Resp.: '.$olho.'</p>
                        <p><strong>J&Aacute; &Eacute; PACIENTE DO HOSPITAL S&Atilde;O PAULO?</strong><br />
                        Resp.: '.$paciente_hsp.'</p>
                        <p><strong>EM QUAL HOSPITAL VOC&Ecirc; FAZ SEU TRATAMENTO?</strong><br />
                        Resp.: '.$hospital_tratamento.'</p>
                        <p><strong>&Uacute;LTIMA AVALIA&Ccedil;&Atilde;O:</strong><br />
                        Resp.: '.$ultima_avaliacao.'</p>
                        <p><strong>TEM EM M&Atilde;OS OS EXAMES REALIZADOS NA AVALIA&Ccedil;&Atilde;O?</strong><br />
                        Resp.: '.$tem_exames.'</p>
                        <p><strong>J&Aacute; TEM AVALIA&Ccedil;&Atilde;O CL&Iacute;NICA PARA CIRURGIA?</strong><br />
                        Resp.: '.$avaliacao_clinica.'</p>
                        <p><strong>J&Aacute; EST&Aacute; INSCRITO EM ALGUMA FILA DE ESPERA PARA O TRANSPLANTE?</strong><br />
                        Resp.: '.$inscrito_fila.'</p>
                        <p><strong>ONDE VOC&Ecirc; EST&Aacute; INSCRITO?</strong><br />
                        Resp.: '.$onde_inscrito.'</p>
                        <p><strong>TEMPO DE INSCRI&Ccedil;&Atilde;O NA FILA:</strong><br />
                        Resp.: '.$tempo_inscrito.'</p>
                        <p><strong>&Eacute; UMA URG&Ecirc;NCIA?</strong><br />
                        Resp.: '.$urgencia.'</p>
                        <p><strong>A DOEN&Ccedil;A &Eacute; NOS DOIS OLHOS?</strong><br />
                        Resp.: '.$doenca.'</p>
                        <p><strong>TEM IDADE INFERIOR A 7 ANOS E DOEN&Ccedil;A NA C&Oacute;RNEA DOS DOIS OLHOS?</strong><br />
                        Resp.: '.$idade_doenca.'</p></td>
                        </tr>
                            <th colspan="2" style="text-align:left; background-color:#E9E9E9">ARQUIVO ANEXADO</th>
                        <tr>
                            <td colspan="2"><a href="'.$file_arquivo.'" target="_blank">Clique aqui para baixar o anexo</a></td>
                        </tr>
                        <th colspan="2" style="text-align:left; background-color:#E9E9E9">OBSERVA&Ccedil;&Otilde;ES</th>

                        <tr>
                        <td colspan="2"><p>'.$adicionais.'</p></td>
                        </tr>
                    </tbody>
                    </table>
                </td>
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
                    <p>O prazo para agendamento do transplante pelo SUS &eacute; de aproximadamente 2 meses.</p>
                    <p>Atenciosamente, <br>
                    <strong>Setor de C&oacute;rnea do Departamento de Oftalmologia e Ci&ecirc;ncias Visuais da EPM-UNIFESP-HSP</strong> </p>
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

    include('../util/email_configuracao_transplante.php');


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
        'erro' => 'Error:' . $e->getMessage()
      );
      echo json_encode($responseError);
  }

?>
