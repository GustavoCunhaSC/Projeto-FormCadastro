<?php 
$endereco = 'localhost';
$banco = 'db_elite';
$usuario = 'postgres';
$senha = '1234';

try {
  //code...
  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] );
  // echo"Conectado ao Banco de dados!!!";
} catch (PDOException $e) {
  echo"Falha ao conectar no Banco de dados. </br>"; 
  die($e -> getMessage());
} 
?>