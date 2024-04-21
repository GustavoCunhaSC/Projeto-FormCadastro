<?php 
$conexao = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=db_elite");
if (!$conexao){
  die("conexão com PostgreSQL falhou");
}
echo "conexão com PostgreSQL funcionou";
?>