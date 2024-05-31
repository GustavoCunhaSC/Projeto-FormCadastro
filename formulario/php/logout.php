<?php 
   session_start();

   if(empty($_SESSION)){
     header("Location: ../../Index.html?msgErro=Você precisa se autenticar.");
    } else{
      session_destroy();
      header("Location: ../../Index.html?msgSecesso=Logout efetuado com sucesso!");
    }
    die();
?>