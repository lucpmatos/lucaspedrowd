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
  <li><a class="waves-effect" href="#!"><i class="material-icons">assessment</i>Conhecimentos Técnicos</a></li>
  <li><a class="waves-effect" href="#!"><i class="material-icons">book</i>Portfolio</a></li>
  <li><a class="waves-effect" href="#!"><i class="material-icons">star</i>Serviços</a></li>
  <li><a class="waves-effect" href="#!"><i class="material-icons">perm_phone_msg</i>Contato</a></li>
  <li><a class="sidenav-close waves-effect" href="#!"><i class="material-icons">close</i>Fechar</a></li>
  <li><a class="subheader" href="#!">Redes Sociais</a></li>
  <li><a class="waves-effect" href="https://www.facebook.com/lucpmatos" target="_blank"><i class="fa fa-facebook"></i> Facebook</a><a class="waves-effect" href="https://www.linkedin.com/in/lucas-pedro-84b574a0/" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
  </ul>
  <!-- sobre -->
  <section class="container">
    <div class="row" id="sobremim"></div>
    <div class="row">
      <div class="col l6">
        <img class="responsive-img" src="img/sketch_logo_lp_webdesigner-06.png" alt="Lucas Pedro Web Designer" width="400">
      </div>
      <div class="col l6">
        <div class="card blue-lpwd">
          <div class="card-content white-text">
            <span class="card-title">Sobre Mim</span>
            <p>Sou um Web Designer fascinado pelo mundo criativo tanto no Design Gráfico quanto na Web. Acreditando na integração entre esses dois mundos, dedico meus esforços para transformar a navegação na Web em um lugar mais bonito, intuitivo e de fácil entendimento, rompendo todas as barreiras da distância</p>
          </div><!-- card content -->
          <div class="card-action">
            <a href="https://www.facebook.com/lucpmatos" target="_blank" class="btn white blue-lpwd-text"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/lucas-pedro-84b574a0/" target="_blank" class="btn white blue-lpwd-text"><i class="fa fa-linkedin"></i></a>
            <a href="" class="btn white blue-lpwd-text">Conhecimentos Técnicos</a>
          </div><!-- card action -->
        </div><!-- card -->
      </div>
    </div>
  </section>
  <?php include_once "includes/footer.php" ?>
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
