<?php
/*
Template Name: Validação cracha
*/
get_header();
?>
<section class="py-5">
  <div class="container">
    <div class="row gx-xl-5">
      <div class="col-lg-12">
        <?php
        // Dados de conexão


        $host = "oftalmopaulist.vpshost5206.mysql.dbaas.com.br";
        $user = "oftalmopaulist";
        $pass = "Cra*OXqq*ac6@a";
        $base = "oftalmopaulist";
        //conecta ao mysql
        mysqli_connect("$host", "$user", "$pass", "$base") or die ('Erro ao conectar ao mysql, veja:: ' . mysqli_connect_error());
        $fd_conn = mysqli_connect("$host", "$user", "$pass", "$base") or die ('Erro ao conectar ao mysql, veja:: ' . mysqli_connect_error());
        mysqli_set_charset($fd_conn, "utf8");
        // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        mysqli_select_db($fd_conn, $base) or die ('O banco de dados nao existe!!!');
        mysqli_query($fd_conn, "set sql_big_selects=1");

        if(!function_exists('mysqli_field_name')){
          function mysqli_field_name($result, $field_offset)
          {
            $properties = mysqli_fetch_field_direct($result, $field_offset);
            return is_object($properties) ? $properties->name : null;
          }
        }

        $codigo = $_GET['codigo'];

        $sql = mysqli_query($fd_conn, "SELECT * FROM validar_cod_cracha WHERE codigo = '".$codigo."'" );
        $num_validar = mysqli_num_rows($sql);

        while ($row = @mysqli_fetch_array($sql)){
          $nome = $row['nome'];
        }

        if($num_validar == 0){ ?>
          <h2>Código invalido</h2>
          <p>Retornar para fazer uma nova consulta</p>
          <div class="">
            <a href="https://www.oftalmodapaulista.com.br/profissional/validar/" class="btnPad">Clique aqui</a>
          </div>

        <?php }else{ ?>

          <h2>Código valido</h2>
          <div class="">
            <p>Dados de confirmação:</p>
            <p>Este crachá pertence a: <strong><?php echo $nome ?>.</strong></p>
            <p>Seu código é: <strong><?php echo $codigo ?>.</strong></p>
            <p>Para fazer uma nova consulta, clique no botão abaixo:</p>
            <div class="">
              <a href="https://www.oftalmodapaulista.com.br/profissional/validar/" class="btnPad">Clique aqui</a>
            </div>
          </div>

        <?php  } ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
