<?php
/*
    Template Name: Menu Lateral

*/

get_header();

// pega id da página
$id = get_the_id();

$lateral = array(
    'menu' => ''.get_field("menu").'',
    'container_class' => 'nav-menu-lateral',
    'menu_class' => 'nav-menu-lateral__wrapper'
);

?>

<section class="py-5">
    <div class="row">

        <div class="col-lg-2 js-nav-menu">
            <?php wp_nav_menu($lateral); ?>
        </div>

        <?php if ($id == 14249): ?>
    <div class="col-lg-10">
        <div class="entry-content-post">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
                <div class="col-12">
                    <form action="<?php echo get_template_directory_uri(); ?>/form_action/certificado/grand_round.php" method="post" class="row gy-3">
                        <div class="col-lg-9 col-xl-10">
                            <input type="text" name="nome" class="form-control w-100" placeholder="Insira aqui seu nome (apenas uma parte - não use caracteres especiais)">
                        </div>
                        <div class="col-lg-3 col-xl-2">
                            <input type="submit" class="btn btn-primary bg-primary text-white w-100 py-2" value="Pesquisar">
                        </div>
                    </form>
                </div>
                <div class="col-12">
                  <?php
// Inclua o arquivo de conexão PDO
include (dirname(__FILE__) . '/../form_action/connection.php');

// Obtenha o nome fornecido no formulário
$nome = $_GET['nome'];

// Verifique se o nome foi fornecido
if (!empty($nome)) {
    // Obtenha a conexão PDO chamando a função conectar()
    $pdo = conectar();

    // Verifique se a conexão foi estabelecida corretamente
    if ($pdo) {
        // Realize a consulta no banco de dados usando PDO
        $stmt = $pdo->prepare("SELECT * FROM grand_round WHERE nome LIKE ?");
        // Execute a consulta passando o parâmetro de busca
        $stmt->execute(["%$nome%"]);

        // Atribua os resultados a uma variável
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Verifique se há resultados da busca
        if ($resultados) {
            // Exibir os resultados da busca
            echo '<h3>Resultado da pesquisa</h3>';
            echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
            echo '<tr>
                    <th>NOME</th>
                    <th>TIPO PARTICIPAÇÃO</th>
                    <th style="text-align:center">CERTIFICADO</th>
                    <th style="text-align:center">PAINEL</th>
                  </tr>';
            foreach ($resultados as $resultado) {
                // Extrair os dados de cada resultado
                $id = $resultado['id'];
                $nome = utf8_encode($resultado['nome']);
                $tipo_participacao = $resultado['tipo_participacao'];
                $ano_grand_round = $resultado['ano_grand_round'];
                // Exibir cada linha na tabela
                echo '<tr>
                    <td>' . utf8_decode($nome) . '</td>
                    <td>' . $tipo_participacao . '</td>
                    <td style="text-align:center">' . $ano_grand_round . '</td>
                    <td style="text-align:center"><a href="' . get_template_directory_uri() . '/form_action/certificado/gerar_certificado.php?id_certificado=' . $id . '" class="btn btn-success" target="_blank"><i class="fa-solid fa-print text-white"></i></a></td>
                  </tr>';
            }
            echo '</table>';
        } else {
            // Se não houver resultados, exibir uma mensagem
            echo '<p>Nenhum resultado encontrado para o nome "' . $nome . '".</p>';
        }
    } else {
        // Se a conexão não foi estabelecida corretamente, exibir uma mensagem de erro
        echo "Erro ao conectar ao banco de dados.";
    }
} else {
    // Se o nome não foi fornecido, exibir uma mensagem de erro
    echo "Por favor, insira um nome para pesquisar.";
}
?>


                </div>
            </div>
        </div>
    </div>
<?php else: ?>


        <div class="col-lg-10">
            <div class="entry-content-post">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endif; ?>


    </div>
</section>

<?php
get_template_part('template-parts/logos');

get_footer();
