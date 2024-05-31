<?php
  require_once '../conexao.php';
   session_start();
 if(empty($_SESSION)){
  session_destroy();
   header("Location: ../../login.html?msgErro=Você precisao se autenticar");
   die();
  } 
 $cpf = $_SESSION['cpf_alunos'];
 $sql = "SELECT * FROM alunos WHERE cpf_alunos = '$cpf'";
 $alunos = array();
  try {
    $stmt = $pdo->prepare($sql);
    if($stmt->execute()){
      // Execução da SQL OK
      $alunos = $stmt->fetchAll();
      /*echo "estou logado";
      echo"<pre>";
        print_r($alunos);
      echo"</pre>";
      die(); */
  }
  else{
    die("Falha ao executar SQL");
  }
} catch (PDOException $e) {
  die($e -> getMessage());
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Pagina inicial - Aluno</title>
</head>
<body>
  <div class="container" >
    <div class="col-md-11">
      <h2 class="title">Olá <?php echo $_SESSION['nome_alunos'];?>, seja bem vindo(a)</h2>
    </div>
    <a href="../logout.php" class="btn btn-dark">Sair</a>
  </div>
  <?php if (!empty($alunos)) { ?>
    <!-- A tabela será apresentada aqui  -->
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome </th>
            <th scope="col">Sobrenome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Turno</th>
          </tr>
        </thead>
        <tbody>
          <!-- IMPORTANTE DEIXAR O LAÇO DE REPATIÇÃO < ? php foreach($alunos as $info){ pode deixar aqui dentro vazio se preferir }?> PARA ARMAZENAR OS DADOS RETORNADOS DO BANCO NA VARIÁVEL $info   -->
          <?php foreach($alunos as $info) { ?>
            <tr>
              <td scope="row"> <?php echo $info['nome_alunos']; ?> </td>
              <td scope="row"> <?php echo $info['sobrenome_alunos']; ?> </td>
              <td scope="row"> <?php echo $info['cpf_alunos']; ?> </td>
              <td scope="row"> <?php echo $info['email_alunos']; ?> </td>
              <td scope="row"> <?php echo $info['telefone_alunos']; ?> </td>
              <td scope="row"> <?php echo $info['dtnasci_alunos']; ?> </td>
              <td scope="row"> <?php echo $info['turno']; ?> </td>
            </tr>
            <?php } ?>
            
          </tbody>
        </table>
      </div>
      <?php } ?>
    
      <!-- EXEMPLO DE COMO USAR OS DADOS-->
    <p>O aluno <?php echo $info['nome_alunos']; ?> de telefone <?php echo $info['telefone_alunos']?> está há 5 dias sem pagar a mensalidade, formalizar o pedido de pagamento no email <?php echo $info['email_alunos'];?> </p>
</body>
</html>