<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106826102-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106826102-1');
</script>
  <meta charset="utf-8">
  <title>Lucas Pedro Web Designer</title>
  <link rel="icon" href="img/icon_lp_webdesigner.png" type="image/x-icon" />
  <!-- ESTILO -->
  <link rel="stylesheet" type="text/css" href="css/css/mixins.css">
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
  <!-- sobre -->
  <section class="container">
    <div class="row"></div>
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
            <a href="conhecimentostecnicos.php" class="btn white blue-lpwd-text">Conhecimentos Técnicos</a>
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
  <!-- inicialização das abas -->
  <script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
  </script>
  <!-- inicialização dos dialogs -->
  <script type="text/javascript">
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  </script>
  <!-- inicialização media -->
  <script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
</body>
</html>
