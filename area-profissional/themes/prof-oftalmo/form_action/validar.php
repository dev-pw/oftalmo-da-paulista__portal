<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
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

  date_default_timezone_set('America/Sao_Paulo');

  $codigo = $_POST['codigo'];

  $sql = mysqli_query($fd_conn, "SELECT * FROM validar_cod_cracha WHERE codigo = '".$codigo."'" );
  $num_logar = mysqli_num_rows($sql);

  while ($row = @mysqli_fetch_array($sql)){
    $nome = $row['nome'];
  }

  if($num_logar == 0){
            echo "<meta http-equiv='refresh' content='1;url=https://www.oftalmodapaulista.com.br/profissional/validacao-cracha/?codigo=$codigo'> ";
            exit;

  }else{
          echo "<meta http-equiv='refresh' content='1;url=https://www.oftalmodapaulista.com.br/profissional/validacao-cracha/?codigo=$codigo'> ";
          exit;

  }

?>
