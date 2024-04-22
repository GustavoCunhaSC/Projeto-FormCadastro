<?php 
   session_start();

   if(empty($_SESSION)){
     header("Location: ../login.html?msgErro=Você precisao se autenticar.");
    } else{
      session_destroy();
      header("Location: ../login.html?msgSecesso=Logout efetuado com sucesso!");
    }
    die();
?>