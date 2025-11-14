<?php

include('../util/funcoes_uteis.php');
include('../util/cript.php');
// date_default_timezone_set('America/Sao_Paulo');

$nome  = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

// PARA EVITAR SPAM
// if(!empty($_POST['website'])) die();

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

// CHECANDO SE OS CAMPOS ESTÃO VAZIOS
checarVazio($nome); // mesmo id do input
checarVazio($telefone); // mesmo id do input
checarVazio($email); // mesmo id do input
checarVazio($assunto); // mesmo id do input
checarVazio($mensagem); // mesmo id do input

// CHECANDO SE POSSUI CONTEÚDO SUSPEITO
checarSpam($nome);
checarSpam($telefone);
checarSpam($assunto);
checarSpam($mensagem);

include('../connection.php');

try {

  // CONEXÃO PDO
  $pdo = conectar();

  // INSERT
  $stmt = $pdo->prepare('
    INSERT INTO ofwp_contato (
      nome_contato, email_contato, tel_contato, assunto_contato, mensagem_contato
    ) VALUES (
      :nome_contato, :email_contato, :tel_contato, :assunto_contato, :mensagem_contato
    )');
  $stmt->execute(array(
    ':nome_contato' => criptografar($nome),
    ':email_contato' => criptografar($email),
    ':tel_contato' => criptografar($telefone),
    ':assunto_contato' => $assunto,
    ':mensagem_contato' => criptografar($mensagem)
  ));

  $assunto = utf8_decode('Departamento de Oftalmologia da EPM - UNIFESP - Novo contato realizado');
  $corpoMSG = utf8_decode('
  <body style="background-color: #EDEDED">
    <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr><td height="30" style="background-color: #ffffff">&nbsp;</td></tr>
        <tr width="750" style="background-color: #ffffff; text-align:center">
          <td width="750" align="center" style="background-color: #ffffff"><img src="https://oftalmodapaulista.com.br/paciente/wp-content/uploads/2023/10/logo-epm-unifesp-hsp.png" width="500" alt="">
          </td>
        </tr>
        <tr><td style="background-color: #ffffff" height="30">&nbsp;</td></tr>

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
                    <p>Obrigado por entrar em contato com a Departamento de Oftalmologia da EPM - UNIFESP através do nosso formulário de contato.</p>
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
                  <td style="color: #218bad"><strong>INFORMAÇÕES INSERIDAS NO FORMULÁRIO</strong></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td><table width="100%" border="0" cellspacing="2" cellpadding="10" style="background-color:#ffffff; font-size:14px; font-family: Verdana; color: #525252; line-height: 1.5">
                    <tbody>
                      <tr>
                        <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Nome:</strong></p></td>
                        <td valign="top" bgcolor="#f6f6f6">'.$nome.'</td>
                      </tr>
                      <tr>
                        <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>E-mail:</strong></p></td>
                        <td valign="top" bgcolor="#f6f6f6">'.$email.'</td>
                      </tr>
                      <tr>
                        <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Telefone:</strong></p></td>
                        <td valign="top" bgcolor="#f6f6f6">'.$telefone.'</td>
                      </tr>
                      <tr>
                        <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Assunto:</strong></p></td>
                        <td valign="top" bgcolor="#f6f6f6">'.$assunto.'</td>
                      </tr>
                      <tr>
                        <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Mensagem:</strong></p></td>
                        <td valign="top" bgcolor="#f6f6f6">'.$mensagem.'</td>
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
                    <p>Aguarde uma resposta detalhada nos próximos dias úteis.</p>
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
                  <td height="20" style="background-color:#218bad">&nbsp;</td>
                  <td height="20" style="background-color:#218bad">&nbsp;</td>
                  <td height="20" style="background-color:#218bad">&nbsp;</td>
                </tr>

                <tr style="background-color:#218bad">
                  <td>&nbsp;</td>
                  <td align="center">
                    <a href="https://oftalmodapaulista.com.br" style="color: #FFF; text-decoration: none" target="_blank"> <strong> oftalmodapaulista.com.br </strong> </a>
                  </td>
                  <td>&nbsp;</td>
                </tr>

                <tr style="background-color:#218bad">
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

  include('../util/email_configuracao.php');


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
