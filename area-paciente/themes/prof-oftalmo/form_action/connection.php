<?php
// Dados de conexão

// ===== FUNÇÃO CONECTAR ======
// ============================
function conectar(){
  $server = "oftpaulista_23.vpshost5206.mysql.dbaas.com.br";
  $user   = "oftpaulista_23";
  $pass   = "cUh2E2l5@p";
  $db     = "oftpaulista_23";

  try {
      $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass );
      // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // EXIBIR ERROS
      $pdo->exec("SET CHARACTER SET utf8");

  } catch (\Throwable $th) {
      return $th;
      die;
  }

  return $pdo;
}

?>
