<?php
require_once 'conexao.php'; 
/* * /
echo"<pre>";
  print_r($_POST);
echo"</pre>";
die();
/* */
if(!empty($_POST)){
  // Obter as informações do formulário ($_POST)
  try {
    // Prepara as informações
    // Montar a SQL(pgsql)
    $sql = "INSERT INTO alunos
            (nome_alunos, sobrenome_alunos, email_alunos, telefone_alunos, dtnasci_alunos, cpf_alunos, sexo_alunos)
            VALUES
            (:nome, :sobrenome, :email, :telefone, :dataDeAniversario, :cpf, :sexo)";

    // Preparar a SQL(pdo)
    $stmt = $pdo ->prepare($sql);

    // Definir/organizar os dados p/SQL
    $dados = array(
      ':nome' => $_POST['nome'],
      ':sobrenome' => $_POST['sobrenome'], 
      ':email'=> $_POST['email'],
      ':telefone'=> $_POST['telefone'],
      ':dataDeAniversario' => $_POST['dataDeAniversario'],
      ':cpf'=> $_POST['cpf'],
      ':sexo' => $_POST['sexo']
    );
    
    // Executar a SQL(INSERT)
    // Realizar a inserção das informações no BD
    if($stmt ->execute($dados)){
      header("Location: ../login.html?msgSucesso=Cadastro realizado com sucesso!");
    }
    
  } catch (PDOException $e) {
    //throw $th;
    header("Location: ../cadasto.html?msgErro=Falha ao cadastrar...");
  }
} else{
  header('Location: ../cadastro.html?msgErro=Erro de acesso.');
}
die();
// Redirecionar para a página inicial (logi) c/ mensagem de erro/sucesso

?>