<?php 
require_once 'php/conexao.php';
session_start();
if(empty($_SESSION)){
 session_destroy();
  header("Location: ../Index.html?msgErro=Você precisao se autenticar");
  die();
 } 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dados</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Elite.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button aria-label="pesqusa" type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">eduardo t</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">ver perfil</a>
         <div class="flex-btn">
            <a href="update.html" class="option-btn">Editar</a>
            <a href="../index.html" class="option-btn">Sair</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Eduardo t</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">ver perfil</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="dados.html"><i class="fas fa-chalkboard-user"></i><span>Dados</span></a>
      <a href="financeiro.html"><i class="fas fa-usd"></i><span>Financeiro</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contate-nos</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>Sobre</span></a>
   </nav>

</div>


<section class="dados">

   <div class="row">

      <div class="box-container">
         <div class="image">
            <img src="images/account_circle.png" alt="">

         </div>
      </div>

      <div class="box-container">
         <div class="content">
            <h3>&nbsp;Nome&nbsp;</h3>
            <h3>&nbsp;Teletefone&nbsp;</h3>
            <h3>&nbsp;E-mail&nbsp;</h3>
            <h3>&nbsp;Data de Nascimento&nbsp;</h3>
            <h3>&nbsp;Sexo&nbsp;</h3>
            <h3>&nbsp;CPF&nbsp;</h3>
            <h3>&nbsp;turno&nbsp;</h3>
         </div>
      </div>

   </div>

</section>











<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>