<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Inclua o arquivo de conexão
include (dirname(__FILE__) . '/../connection.php');

// Obtenha o nome fornecido no formulário
$nome = $_POST['nome'];

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha o nome fornecido no formulário
    $nome = $_POST['nome'];

    // Verifique se o nome foi fornecido
    if (!empty($nome)) {
        // Obtenha a URL de referência
        $referer_url = $_SERVER['HTTP_REFERER'];

        // Parse a URL de referência
        $parsed_url = parse_url($referer_url);

        // Verifique se a URL possui uma query string existente
        if (isset($parsed_url['query'])) {
            // Parse a query string existente
            parse_str($parsed_url['query'], $query_params);

            // Substitua o parâmetro 'nome' com o novo valor
            $query_params['nome'] = $nome;

            // Reconstrua a query string com os novos parâmetros
            $new_query_string = http_build_query($query_params);

            // Construa a nova URL com a query string atualizada
            $new_referer_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'] . '?' . $new_query_string;
        } else {
            // Se não houver uma query string existente, simplesmente adicione o novo parâmetro 'nome'
            $new_referer_url = $referer_url . "?nome=$nome";
        }

        // Redirecione de volta para a página de referência com o novo parâmetro 'nome'
        header("Location: $new_referer_url");
        exit;
    } else {
        // Se o nome não foi fornecido, exiba uma mensagem de erro
        echo "Por favor, insira um nome para pesquisar.";
    }
} else {
    // Se o nome não foi fornecido, exiba uma mensagem de erro
    echo "Por favor, insira um nome para pesquisar.";
}
?>
