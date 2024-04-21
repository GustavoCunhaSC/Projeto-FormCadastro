 <?php /*
  require_once ("../consulta/consulta.php");
  require_once ("../conexao.php");
  if (isset($_POST["cpf"])) {
    $mensagem = incluir($_POST["nome_aluno"], $_POST["email_aluno"], $_POST["cpf_aluno"]);
    echo"<hr/>". $mensagem ."<hr/>";
  }
  $alunos = obterAlunos();
  */
?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>lista de alunos</title>
</head>
<body class="container">
  <h1>Alunos</h1>
  <p><a href="./../../cadastro.html" class="btn btn-primary" >Cadastro</a></p>
  <table class="table">
  <tr class="table-dark">
    <td>Nome</td>
    <td>Email</td>
    <td>CPF</td>
  </tr>
  <?php 
    foreach( $alunos as $obj) { ?>
      echo "<tr><td>$obj->nome</td>"
      echo "<tr><td>$obj->email</td>"
      echo "<tr><td>$obj->cpf</td>"
   <?php }?>
  
</table>
</body>
</html>