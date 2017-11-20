<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Lucas Pedro Web Designer</title>
  <link rel="icon" href="img/icon_lp_webdesigner.png" type="image/x-icon" />
  <!-- ESTILO -->
  <link rel="stylesheet" type="text/less" href="css/main.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <!-- JQUERY -->
  <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
  <!-- MATERIALIZE -->
  <link rel="stylesheet" href="materialize/css/materialize.min.css">
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <!-- MATERIAL ICONS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <?php include_once "includes/nav.php" ?>
  <?php include_once "includes/banner.php" ?>
  <!-- SIDENAV -->
  <ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background">
      <img src="img/bg-banner.jpg" width="300">
    </div>
    <a href="#!user"><img class="circle" src="img/lucaspedro.jpg"></a>
    <a href="#!name"><span class="white-text name">Lucas Pedro</span></a>
    <a href="#!email"><span class="white-text email">lucpmatos@gmail.com</span></a>
  </div></li>
  <li><a class="waves-effect" href="#!"><i class="material-icons">home</i>Início</a></li>
  <li><div class="divider"></div></li>
  <li><a class="waves-effect" href="#!">Sobre Mim</a></li>
  <li><a class="waves-effect" href="#!">Conhecimentos Técnicos</a></li>
  <li><a class="waves-effect" href="#!">Portfolio</a></li>
  <li><a class="waves-effect" href="#!">Serviços</a></li>
  <li><a class="waves-effect" href="#!">Contato</a></li>
  <li><a class="subheader" href="#!">Redes Sociais</a></li>
  <li><a class="waves-effect" href="#!"><i class="fa fa-facebook"></i> Facebook</a><a href="#!"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
  <li><a class="sidenav-close waves-effect" href="#!">Fechar</a></li>
  </ul>
  <!-- sobre -->
  <section class="container">
    <div class="row">
      <div class="col s12">
        <h2>Sobre Mim</h2>
      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <!-- inicialização do sidenav -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>
  <!-- inicialização do carousel -->
  <script type="text/javascript">
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });
  </script>
</body>
</html>
