<meta charset="utf-8">

<?php
  $num_codigos = 10; // NUMERO DE CODIGOS PARA GERAR AUTOMATICAMENTE

  function random($len){
    $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // ----------------------------------------------
    // Number of possible combinations
    // ----------------------------------------------
    $pos = strlen($char);
    $pos = pow($pos, $len);
    // ----------------------------------------------

    $total = strlen($char)-1;
    $text = "";

    for ($i=0; $i<$len; $i++){
        $text = $text.$char[rand(0, $total)];
    }
    return $text;
  }

  //  =====================

  include ('connection_i.php');

  $sql_codigos = mysqli_query($fd_conn, "SELECT codigo FROM validar_cod_cracha");
  $todos_codigos = array();

  while ($dados = @mysqli_fetch_array($sql_codigos)){
    array_push($todos_codigos, $dados['codigo']);
  }

  // LOOP GERAR CODIGOS

  $values_insert = "";

  for($i = 1; $i <= $num_codigos; $i++){

    $cod_codigo = random(8);

    if (!in_array($cod_codigo, $todos_codigos)){
      // echo "n tem";
      $values_insert .= "
       ('".$cod_codigo."'), ";
    }

  }
  // LOOP GERAR CODIGOS

  $values_insert = substr($values_insert, 0, -2);

  // =====================

  $result = mysqli_query($fd_conn, "
  INSERT INTO validar_cod_cracha (
    codigo
  ) VALUES
  ".$values_insert);

    if($result == false){
    	echo "<script>
    					alert('Ocorreu um erro na criação do codigo.');
    				</script>";
            echo mysqli_error();
    	exit;
    }

  echo "<script>alert('Código adicionados.')</script>";

?>
