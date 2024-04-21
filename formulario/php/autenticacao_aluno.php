<?php
require_once 'conexao.php'; 
/* * /
echo"<pre>";
  print_r($_POST);
echo"</pre>";
die();
/* */

// Verifica se esta chegando dados por POST;
if(!empty($_POST)){
  // Iniciar SESSAO(session_start)
  session_start();
  try {
    // Montar a SQL
    $sql = "SELECT nome_alunos, sobrenome_alunos, email_alunos, telefone_alunos, dtnasci_alunos, cpf_alunos, sexo_alunos FROM alunos WHERE email_alunos = :email AND senha_aluno = :senha";

    // Preparar a SQL(pdo)
    $stmt = $pdo ->prepare($sql);

    // Definir/organizar os dados p/SQL
    $dados = array(
      ':email' => $_POST['email'],
      ':senha' => $_POST['senha']
    );

    // Executar a SQL()
    $stmt -> execute($dados);
    
    $result = $stmt->fetchAll();
    
    if($stmt->rowCount() == 1){ // Se o resultado da consulta SQL trouxer registro
      // Autenticação foi realizada com sucesso
      $result = $result[0];
      // Definir variaveis da sessao
      $_SESSION['nome_alunos'] = $result['nome_alunos'];
      $_SESSION['sobrenome_alunos'] = $result['sobrenome_alunos'];
      $_SESSION['email_alunos'] = $result['email_alunos'];
      $_SESSION['telefone_alunos'] = $result['telefone_alunos'];
      $_SESSION['dtnasci_alunos'] = $result['dtnasci_alunos'];
      $_SESSION['cpf_alunos'] = $result['cpf_alunos'];
      $_SESSION['sexo_alunos'] = $result['sexo_alunos'];

      // Redirecionar p/ pagina inicial (ambiente logado)
      header('Location:./pages/index.php');
    } else{ //Resultado da consulta não trouxe nenhum registro
      // Senao, retorna falha na autenticação
      // Destruir sessao
      session_destroy();
      // Redirecionar p/ pagina inicial de login
      header('Location:../login.html?msgErro=Email ou senha inválido');
    }

  } catch (PDOException $e) {
    die($e->getMessage());
  }
} else{
  header('Location:../login.html?msgErro=Acesso não permitido ');
}
die(); 
?>