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
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Financeiro</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">Elite.</a>

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
         <h3 class="name"><?php echo $_SESSION['nome_alunos'];?></h3>
         <p class="role">studen</p>
         <a href="profile.php" class="btn">ver perfil</a>
         <div class="flex-btn">
            <a href="update.php" class="option-btn">Editar</a>
            <a href="./php/logout.php" class="option-btn">Sair</a>
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
      <h3 class="name"><?php echo $_SESSION['nome_alunos'];?></h3>
      <p class="role">studen</p>
      <a href="profile.php" class="btn">ver perfil</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="dados.php"><i class="fas fa-chalkboard-user"></i><span>Dados</span></a>
      <a href="financeiro.php"><i class="fas fa-usd"></i><span>Financeiro</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contate-nos</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>Sobre</span></a>
   </nav>

</div>


<section class="financeiro">

   <div class="row">

      <div class="box-container">
         <div class="content">
            <h3>&nbsp;<i class="fas fa-usd" aria-hidden="true"></i>&nbsp;Informações Financeiras &nbsp;</h3>
            <p></p>
         </div>
      </div>

   </div>

</section>









<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>