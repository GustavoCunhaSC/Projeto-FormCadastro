<?php
   session_start();
 if(empty($_SESSION)){
  session_destroy();
   header("Location: ../../login.html?msgErro=Você precisao se autenticar");
   die();
  } 
 
 /*
 echo "estou logado";
 echo"<pre>";
   print_r($_SESSION);
 echo"</pre>";*/
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
</body>
</html>