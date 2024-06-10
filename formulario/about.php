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
   <title>Sobre</title>

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

<section class="about">

   <div class="row">

      <div class="box-container">
         <div class="content">
            <h3>&nbsp;<i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp; Sobre nos</h3>
            <p>Bem-vindo(a) à Elite!<br>

               Na Elite, somos uma equipe apaixonada e dedicada comprometida em oferecer soluções inovadoras e de alta qualidade para nossos clientes. Fundada em 2024, nossa empresa começou como um pequeno empreendimento com uma grande visão. Ao longo dos anos, crescemos e evoluímos, mantendo sempre nosso compromisso com a excelência e a satisfação do cliente.
               
               Aqui na Elite, acreditamos no poder da colaboração e da criatividade. Nossa equipe é composta por profissionais talentosos e experientes, cada um trazendo habilidades únicas para o nosso ambiente de trabalho diversificado e dinâmico. Juntos, buscamos constantemente inovar e superar expectativas, transformando desafios em oportunidades e ideias em realidade.
               
               Nossa missão é fornecer serviços e produtos que não apenas atendam, mas excedam as necessidades e expectativas de nossos clientes. Priorizamos a qualidade, a confiabilidade e a integridade em tudo o que fazemos, buscando sempre alcançar os mais altos padrões de excelência.
               
               Além disso, estamos comprometidos com a responsabilidade social e ambiental, buscando maneiras de fazer negócios de forma sustentável e ética. Acreditamos que, ao agir de maneira responsável, podemos fazer uma diferença positiva em nossas comunidades e no mundo ao nosso redor.
               
               Estamos entusiasmados em compartilhar nossa paixão e expertise com você e esperamos ter a oportunidade de trabalhar juntos para alcançar seus objetivos. Obrigado por visitar a Elite e por fazer parte de nossa jornada.
               
               Se você tiver alguma dúvida ou quiser saber mais sobre nossos serviços, não hesite em nos contatar. Estamos aqui para ajudar!<br>
               
               Atenciosamente,<br>
               
               A Equipe Elite.</p>
         </div>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+10k</h3>
            <p>online</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+40k</h3>
            <p>brilliant students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <p>expert tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>job placement</p>
         </div>
      </div>

   </div>

</section> 








<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>