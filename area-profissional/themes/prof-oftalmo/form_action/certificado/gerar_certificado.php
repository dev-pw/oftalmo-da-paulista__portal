<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');
// Inclua o arquivo de conexão
include (dirname(__FILE__) . '/../connection.php');
// Obtém o caminho do arquivo autoload.php
require_once(dirname(__FILE__) . '/../dompdf/vendor/autoload.php');
// // reference the Dompdf namespace
use Dompdf\Options;
use Dompdf\Dompdf;
// Verifique se há um ID de certificado na URL
if (isset($_GET['id_certificado'])) {
    $id_certificado = $_GET['id_certificado'];
    $pdo = conectar();


    // Prepare a consulta SQL para obter as informações do certificado com base no ID
    $stmt = $pdo->prepare("SELECT * FROM grand_round WHERE id = ?");
    $stmt->execute([$id_certificado]);

    // Verifique se o certificado foi encontrado
    if ($stmt->rowCount() > 0) {
        // Obtenha os dados do certificado
        $certificado = $stmt->fetch(PDO::FETCH_ASSOC);

        // Recupere os dados necessários do certificado
        $nome = $certificado['nome'];
        $ano_grand_round = $certificado['ano_grand_round'];
        $tipo_participacao = $certificado['tipo_participacao'];
        $carga_horaria = $certificado['carga_horaria'];
        $frequencia = $certificado['frequencia'];
        $data_aula = $certificado['data_aula'];
        $conteudo_tema = $certificado['conteudo_tema'];

        // Defina o modelo do certificado com base no ano
        $img_certificado = '';
        $div_principal = '';
        if ($ano_grand_round == '2015') {
            $img_certificado = '<img src="https://oftalmodapaulista.com.br/profissional/wp-content/uploads/2024/03/certificado-grand-round-2015-scaled.jpg">';
            $div_principal = '#principal {
                width: 100%;
                z-index:999;
                text-align: center;
                padding-top: 330px;
                line-height: 17px;
            }';
            $px_cert="115px";
        } elseif ($ano_grand_round == '2016') {
            $img_certificado = '<img src="https://oftalmodapaulista.com.br/profissional/wp-content/uploads/2024/03/certificado-grand-round-2016-scaled.jpg">';
            $div_principal = '#principal {
                width: 100%;
                z-index:999;
                text-align: center;
                padding-top: 330px;
                line-height: 17px;
            }';
            $px_cert="115px";

        } elseif ($ano_grand_round == '2017') {
            $img_certificado = '<img src="https://oftalmodapaulista.com.br/profissional/wp-content/uploads/2024/03/certificado-grand-round2017-scaled.jpg">';
            $div_principal = '#principal {
                width: 100%;
                z-index:999;
                text-align: center;
                padding-top: 290px;
                line-height: 17px;
            }';
            $px_cert="135px";
        }

        // Configurando data de impressão do certificado
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');

        // Obtenha o mês em formato de texto
        $mes_var = '';
        switch ($mes) {
            case '01':
                $mes_var = 'janeiro';
                break;
            case '02':
                $mes_var = 'fevereiro';
                break;
            case '03':
                $mes_var = 'mar&ccedil;o';
                break;
            case '04':
                $mes_var = 'abril';
                break;
            case '05':
                $mes_var = 'maio';
                break;
            case '06':
                $mes_var = 'junho';
                break;
            case '07':
                $mes_var = 'julho';
                break;
            case '08':
                $mes_var = 'agosto';
                break;
            case '09':
                $mes_var = 'setembro';
                break;
            case '10':
                $mes_var = 'outubro';
                break;
            case '11':
                $mes_var = 'novembro';
                break;
            case '12':
                $mes_var = 'dezembro';
                break;
        }
        $data_certificado = $dia . ' de ' . $mes_var . ' de ' . $ano;

        // Incluindo tabela com detalhes
        $tabela_detalhes = '';
        if (!empty($carga_horaria)) {
            $tabela_detalhes .= '<th>CARGA HOR&Aacute;RIA</th><td>' . $carga_horaria . '</td>';
        }
        if (!empty($frequencia)) {
            $tabela_detalhes .= '<th>FREQU&Ecirc;NCIA</th><td>' . $frequencia . '</td>';
        }
        if (!empty($data_aula)) {
            $tabela_detalhes .= '<th>DATA DA AULA</th><td>' . $data_aula . '</td>';
        }
        if (!empty($conteudo_tema)) {
            $tabela_detalhes .= '<th>CONTE&Uacute;DO/TEMA</th><td>' . $conteudo_tema . '</td>';
        }

        // Carga horária
      	if (!empty($carga_horaria)) {
      		$carga_horaria_cab = '<th>CARGA HOR&Aacute;RIA</th>';
      		$carga_horaria_valor = '<td>'.$carga_horaria.'</td>';
      		}

      	// Carga frequência
      	if (!empty($frequencia)) {
      		$frequencia_cab = '<th>FREQU&Ecirc;NCIA</th>';
      		$frequencia_valor = '<td>'.$frequencia.'</td>';
      		}

      	// Data da aula
      	if (!empty($data_aula)) {
      		$data_aula_cab = '<th>DATA DA AULA</th>';
      		$data_aula_valor = '<td>'.$data_aula.'</td>';
      		}

      	// Conteúdo e Tema
      	if (!empty($conteudo_tema)) {
      		$conteudo_tema_cab = '<th>CONTE&Uacute;DO/TEMA</th>';
      		$conteudo_tema_valor = '<td>'.$conteudo_tema.'</td>';
      		}

        // Criando certificado
        $html = '
        <style type="text/css">
            @page {
                margin: 0;
            }

            body {
                font-family: sans-serif;
                font-size: 16px;
                margin: 0;
                text-align: left;
                color: #444444;
                line-height: 22px;
            }

            ' . $div_principal . '

            h1{
                font-size: 20px;
                font-weight: bold;
                color: #000;
            }

            img{
                width: 100%;
                height: 100%;
                z-index: -1;
                position: fixed;
            }

            #tabelaDetalhes {
                margin-top: '. $px_cert .';
                margin-bottom: 10px;
                font-size: 11px;
            }

            #tabelaDetalhes th {
                background-color:#E1E1E1;
                font-weight:bold;
                text-align: left;
            }
        </style>
        <body>
            <div align="center">
                <div id="principal">
                    ' . $img_certificado . '
                    <div align="center" class="texto" style="z-index:10;">
                        <h1 style="text-transform:uppercase">' . $nome . '</h1>
                        <table width="70%" align="center" border="1" cellspacing="0" cellpadding="3" id="tabelaDetalhes">
                         <tr>
                           <th>TIPO</th>
                       	'.$frequencia_cab.'
                       	'.$data_aula_cab.'
                       	'.$conteudo_tema_cab.'
                       	'.$carga_horaria_cab.'
                         </tr>
                         <tr>
                           <td>'.$tipo_participacao.'</td>
                       	'.$frequencia_valor.'
                       	'.$data_aula_valor.'
                       	'.$conteudo_tema_valor.'
                       	'.$carga_horaria_valor.'
                         </tr>
                        </table><br>
                        S&atilde;o Paulo, ' . $data_certificado . '.
                    </div>
                </div>
            </div>
        </body>';

        // echo $html;
        // exit;


        // instantiate and use the dompdf class
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream("certificado-grand-round-$ano_grand_round.pdf");
    } else {
        // Se o certificado não foi encontrado, exiba uma mensagem de erro
        echo "Certificado não encontrado.";
    }
} else {
    // Se nenhum ID de certificado foi fornecido na URL, exiba uma mensagem de erro
    echo "ID de certificado não especificado.";
}
?>
