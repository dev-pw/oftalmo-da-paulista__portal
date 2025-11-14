<?php
// Dados de conexão

// ===== FUNÇÃO CONECTAR ======
// ============================
function conectar(){
  $server = "oftpaulista23.mysql.dbaas.com.br";
  $user   = "oftpaulista23";
  $pass   = "YlU@8fYHe*T3Eo";
  $db     = "oftpaulista23";

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
